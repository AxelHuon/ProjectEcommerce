<?php

namespace App\Controller;

use App\Entity\Address;
use App\Entity\OrderItem;
use App\Entity\User;
use App\Repository\AddressRepository;
use App\Repository\OrderItemRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserPageController extends AbstractController
{
    #[Route('/my-account/', name: 'user_page')]
    public function index(OrderItemRepository $orderItemRepository): Response
    {
        return $this->render('user_page/index.html.twig', [
            'user' =>$this->getUser(),
        ]);

    }
}
