<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\CategoriesRepository;
use App\Repository\ProductRepository;
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
}
