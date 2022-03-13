<?php

namespace App\Controller;

use App\Entity\Address;
use App\Entity\Order;
use App\Entity\OrderItem;
use App\Entity\Product;
use App\Form\AddAddressType;
use App\Repository\AddressRepository;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;

class CheckoutController extends AbstractController
{
    #[Route('/checkout/address', name: 'checkout')]
    public function index(Session $session, ProductRepository $productRepository, EntityManagerInterface $entityManager): Response
    {

        if ($this->getUser()) {

            $cart = $session->get('cart', []);

            $panierWithData = [];

            foreach ($cart as $id => $quantity) {
                $panierWithData[] = [
                    'product' => $productRepository->find($id),
                    'quantity' => $quantity
                ];
            }
            $total = 0;


            foreach ($panierWithData as $item) {
                $totalItem = $item['product']->getPrice() * $item['quantity'];
                $total += $totalItem;
            }

            return $this->render('checkout/index.html.twig', [
                'items' => $panierWithData,
                'total' => $total,
                'user' => $this->getUser()
            ]);
        }else{
            return $this->redirectToRoute('app_login');
        }
    }



    #[Route('/checkout/addAddress{idAddress}', name: 'checkout_addAdress')]
    public function chooseAddress($idAddress, Session $session, ProductRepository $productRepository, EntityManagerInterface $entityManager){

        if ($this->getUser()) {
            $address = $session->set('address', $idAddress);
            return $this->redirectToRoute('checkout_payement');
        }else{
            return $this->redirectToRoute('app_login');
        }
    }


    #[Route('/checkout/payement', name: 'checkout_payement')]
    public function payement(Session $session, ProductRepository $productRepository, EntityManagerInterface $entityManager){
        $cart = $session->get('cart', []);

        $panierWithData = [];

        foreach($cart as $id => $quantity){
            $panierWithData[] = [
                'product' => $productRepository->find($id) ,
                'quantity' => $quantity
            ];
        }

        $total = 0;

        foreach ($panierWithData as $item){
            $totalItem = $item['product']->getPrice() * $item['quantity'];
            $total += $totalItem;
        }


        if ($this->getUser()) {

            return $this->render('checkout/payement.html.twig', [
                'user' => $this->getUser(),
                'total' => $total,
                'items' => $panierWithData,
            ]);
        }else{
            return $this->redirectToRoute('app_login');
        }

    }

    #[Route('/checkout/final', name: 'checkout_final')]
    public function chekoutFinal(Session $session, ProductRepository $productRepository, EntityManagerInterface $entityManager, AddressRepository $addressRepository){

        if ($this->getUser()) {

            $addressID = $session->get('address');
            $cart = $session->get('cart', []);

            $panierWithData = [];

            foreach ($cart as $id => $quantity) {
                $panierWithData[] = [
                    'product' => $productRepository->find($id),
                    'quantity' => $quantity
                ];
            }
            $total = 0;


            foreach ($panierWithData as $item) {
                $totalItem = $item['product']->getPrice() * $item['quantity'];
                $total += $totalItem;
            }

            $order = new Order();
            $order->setAddress($addressRepository->find($addressID));
            $order->setStatus('Paid');
            $order->setUser($this->getUser());
            $order->setTotalPrice($total);
            $entityManager->persist($order);
            $entityManager->flush();

            foreach ($panierWithData as $item) {
                $orderItem = new OrderItem();
                $orderItem->setProduct($item['product']);
                $orderItem->setOrderList($order);
                $orderItem->getProduct($item['product'])->setStock($orderItem->getProduct($item['product'])->getStock()-1);
                $entityManager->persist($orderItem);
                $entityManager->flush();


            }

            return $this->redirectToRoute('remove_Allcart');
        }else{
            return $this->redirectToRoute('app_login');
        }
    }

    #[Route('/checkout/removeAllCart', name: 'remove_Allcart')]
    public function removeAllCart(Session $session, ProductRepository $productRepository, EntityManagerInterface $entityManager, AddressRepository $addressRepository)
    {

        $total = 0;
        $cart = $session->set('cart', []);
        $address = $session->set('address', 0);

        return $this->redirectToRoute('checkout_confirm');
    }



    #[Route('/checkout/addAddress', name: 'checkout_addNewAddress')]
    public function addAdress(Request $request, EntityManagerInterface $entityManager): Response{


        if ($this->getUser()) {

            $address = new Address();

            $form = $this->createForm(AddAddressType::class, $address);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $address->setUser($this->getUser());
                $entityManager->persist($address);
                $entityManager->flush();
                return $this->redirectToRoute('checkout');
            }

            return $this->renderForm('user_page/addAddress.html.twig', [
                'user' => $this->getUser(),
                'form' => $form,
            ]);
        }else{
            return $this->redirectToRoute('app_login');
        }

    }
    #[Route('/checkout/confirm', name: 'checkout_confirm')]
    public function confirmOrder(Session $session, ProductRepository $productRepository, EntityManagerInterface $entityManager, AddressRepository $addressRepository)
    {
        return $this->renderForm('/checkout/confirm.html.twig', [
            'user' => $this->getUser(),
        ]);
    }




    }
