<?php

namespace App\Controller;

use App\Entity\Order;
use App\Entity\OrderItem;
use App\Entity\Product;
use App\Repository\AddressRepository;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;

class CheckoutController extends AbstractController
{
    #[Route('/checkout/address', name: 'checkout')]
    public function index(Session $session, ProductRepository $productRepository, EntityManagerInterface $entityManager): Response
    {
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




        return $this->render('checkout/index.html.twig', [
            'items' => $panierWithData,
            'total' => $total,
            'user' => $this->getUser()
        ]);
    }



    #[Route('/checkout/address{idAddress}', name: 'address_checkout')]
    public function addressCheckout($idAddress,Session $session,AddressRepository $addressRepository, ProductRepository $productRepository, EntityManagerInterface $entityManager){
        $cart = $session->get('cart', []);

        $panierWithData = [];

        foreach($cart as $id => $quantity){
            $panierWithData[] = [
                'product' => $productRepository->find($id) ,
                'quantity' => $quantity
            ];
        }
        $total = 0;

        $address = $addressRepository->find($idAddress);

        foreach ($panierWithData as $item){
            $totalItem = $item['product']->getPrice() * $item['quantity'];
            $total += $totalItem;
        }

        return $this->render('checkout/address.html.twig', [
            'items' => $panierWithData,
            'total' => $total,
            'user' => $this->getUser()
        ]);

    }

    #[Route('/checkout/address{idAddress}/final', name: 'final_checkout')]
    public function finalCheckout($idAddress,Session $session,AddressRepository $addressRepository, ProductRepository $productRepository, EntityManagerInterface $entityManager){
        $cart = $session->get('cart', []);

        $panierWithData = [];

        foreach($cart as $id => $quantity){
            $panierWithData[] = [
                'product' => $productRepository->find($id) ,
                'quantity' => $quantity
            ];
        }
        $total = 0;

        $address = $addressRepository->find($idAddress);


        foreach ($panierWithData as $item){
            $totalItem = $item['product']->getPrice() * $item['quantity'];
            $total += $totalItem;
        }


        $order = new Order();
        $order->setUser($this->getUser());
        $order->setStatus("Paid");
        $order->setTotalPrice($total);
        $order->setAddress($address);
        $entityManager->persist($order);
        $entityManager->flush();

        foreach ($panierWithData as $item ){
            $orderItem = new OrderItem();
            $orderItem->setProduct($item['product']);
            $orderItem->setOrderList($order);
            $entityManager->persist($orderItem);
            $entityManager->flush();
        }

        $cart = $session->get('cart', []);
        $total = 0;
        $panierWithData = [];


        return $this->render('checkout/final.html.twig', [
            'items' => $panierWithData,
            'total' => $total,
            'user' => $this->getUser()
        ]);
    }


}
