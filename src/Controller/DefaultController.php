<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Animal;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Sitios;

class DefaultController extends AbstractController
{
    #[Route('/default', name: 'app_default')]
    public function index(EntityManagerInterface $entityManagerInterface): Response
    {
        return $this->render('default_cntroler/index.html.twig', [
            'controller_name' => 'DefaultController',
            "animales"=>$entityManagerInterface->getRepository(Animal::class)->findAll(),
                "sitios"=>$entityManagerInterface->getRepository(Sitios::class)->findAll()
        ]);
    }
}
