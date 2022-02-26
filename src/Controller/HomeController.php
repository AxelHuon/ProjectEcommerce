<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(ProductRepository $productRepository): Response
    {


        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'page_name' => 'Home',
            'products' => $productRepository->findAll(),
        ]);
    }


    #[Route('/email', name: 'email')]
    public function testEmail(MailerInterface $mailer): Response{
        $email = (new Email())
            ->from('hello@example.com')
            ->to('axelhuonpro@gmail.com')
            ->subject('Time for Symfony Mailer!')
            ->text('Sending emails is fun again!')
            ->html('<p>See Twig integration for better HTML integration!</p>');

        $mailer->send($email);
        return $this->redirectToRoute('home');
    }


}


