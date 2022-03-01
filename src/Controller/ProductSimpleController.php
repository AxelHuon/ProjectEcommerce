<?php

namespace App\Controller;

use App\Entity\Order;
use App\Entity\OrderItem;
use App\Entity\Product;
use App\Repository\CategoriesRepository;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductSimpleController extends  AbstractController
{
    #[Route('/product/{id}', name: 'product_simple')]
    public function index(Product $product, ProductRepository $productRepository, CategoriesRepository $categoriesRepository): Response
    {





        return $this->render('product_simple/index.html.twig', [
            'controller_name' => 'ProductSimpleController',
            'product'=> $product,
            'productAll' =>$productRepository->findAll(),
            'category' => $product->getCategory()->getName(),
            'brand' => $product->getBrand()->getName(),
        ]);
    }

    #[Route('/addtocard{id}', name: 'add_to_card')]
    public function addToCard(Product $product, ProductRepository $productRepository, CategoriesRepository $categoriesRepository, EntityManagerInterface $entityManager): Response
    {

        $user = $this->getUser();

        $item = new Order();

        $item->setUser($user);
        $item->setTotalPrice($product->getPrice());
        $item->setStatus('Paid');
        $entityManager->persist($item);
        $entityManager->flush();

        $itemOrder =  new OrderItem();
        $itemOrder




         return $this->render('product_simple/added.html.twig', [
             'controller_name' => 'ProductSimpleController',
             'product'=> $product,
             'productAll' =>$productRepository->findAll(),
             'category' => $product->getCategory()->getName(),
             'brand' => $product->getBrand()->getName(),
         ]);
    }


}
