<?php

namespace App\Controller;

use App\Entity\Address;
use App\Entity\OrderItem;
use App\Entity\Product;
use App\Entity\User;
use App\Form\AddAddressType;
use App\Repository\AddressRepository;
use App\Repository\OrderItemRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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
    #[Route('/my-account/addAddress', name: 'user_addAddress')]
    public function addAdress(Request $request, EntityManagerInterface $entityManager): Response{

        $address = new Address();

        $form = $this->createForm(AddAddressType::class, $address);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $address->setUser($this->getUser());
            $entityManager->persist($address);
            $entityManager->flush();
            return $this->redirectToRoute('user_page');
        }

        return $this->renderForm('user_page/addAddress.html.twig', [
            'user' =>$this->getUser(),
            'form' => $form,
        ]);

    }


}
