<?php

namespace App\Controller;

use App\Entity\Brand;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('/test', name: 'test')]
    public function index(EntityManagerInterface $entityManager): Response
    {

        $item = new Brand();
        $item->setName('Created item!');
        $entityManager->persist($item);
        $entityManager->flush();


        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }

}
