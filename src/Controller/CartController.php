<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController
{
    #[Route('/cart', name: 'cart')]
    public function index(SessionInterface $session, ProductRepository $productRepository): Response
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


        return $this->render('cart/index.html.twig', [
            'items' => $panierWithData,
            'total' => $total,
        ]);
    }




    #[Route('/cart/add/{id}', name: 'cart_add')]
    public function addCart($id, SessionInterface $session, Request $request,){

        $cart = $session->get('cart', []);
        if(!empty($cart[$id])){
            $cart[$id]++;
        }else{
            $cart[$id] = 1;
        }
        $session->set('cart', $cart);

        return $this->redirectToRoute('home');

    }


    #[Route('/cart/remove/{id}', name: 'cart_remove')]
    public function remove($id, SessionInterface $session){
        $cart = $session->get('cart', []);

        if(!empty($cart[$id])){
            unset($cart[$id]);
        }
        $session->set('cart', $cart);
        return $this-> redirectToRoute('cart');

    }

    #[Route('/cart/chekout', name: 'chekout')]
    public function checkout($id, SessionInterface $session){

    }

}
