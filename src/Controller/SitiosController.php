<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Sitios;

class SitiosController extends AbstractController
{
   /* #[Route('/sitios', name: 'app_sitios')]
    public function index(): Response
    {
        return $this->render('sitios/index.html.twig', [
            'controller_name' => 'SitiosController',
        ]);
    }*/
    #[Route('/sitios', name: 'app_sitios')]
    public function index(entityManagerInterface $entityManagerInterface): Response
    {
        return $this->render('sitios/index.html.twig', [
                /*"animales"=>[
                    [
                        "nombre"=> "totoro",
                        "pasos" => 2520,
                        "nacimiento"=> "2020-08-24 12:25"
                    ],
                    [
                        "nombre"=> "firulais",
                        "pasos" => 4567,
                        "nacimiento"=> "2022-08-24 12:25"
                    ]
                ]*/
                /*"animales"=>$entityManagerInterface->getRepository(Animal::class)->findAll(),*/
                "sitios"=>$entityManagerInterface->getRepository(Sitios::class)->findAll()
        ]);
    }
}
