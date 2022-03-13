<?php

namespace App\Controller;

use App\Entity\Categories;
use App\Entity\Product;
use App\Repository\CategoriesRepository;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShopController extends AbstractController
{
    #[Route('/shop', name: 'shop')]
    public function index(ProductRepository $productRepository, CategoriesRepository $categoriesRepository)
    {


        $message = "";

        return $this->render('shop/index.html.twig', [
            'controller_name' => 'ShopController',
            'products' => $productRepository->findAll(),
            'message' => $message,
            'categories' => $categoriesRepository->findAll(),
            'filter'=> 0
        ]);
    }

    #[Route('/shop/category{categoryId}', name: 'shop_category')]
    public function filter($categoryId, ProductRepository $productRepository, CategoriesRepository $categoriesRepository)
    {

        $productCat = $productRepository->findBy(array('category' => $categoryId));

        if (empty($productCat)){
            $message="No product matches this filter";
        }else{
            $message = "";
        }


        return $this->render('shop/index.html.twig', [
            'controller_name' => 'ShopController',
            'products' => $productCat,
            'message' => $message,
            'categories' => $categoriesRepository->findAll(),
            'filter'=> 1
        ]);
    }


}
