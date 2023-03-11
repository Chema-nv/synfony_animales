<?php

namespace App\Controller;

use App\Entity\Animal;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Sitios;

class AnimalesController extends AbstractController
{
    #[Route('/animales', name: 'app_animales')]
    public function index(EntityManagerInterface $entityManagerInterface): Response
    {
        return $this->render('animales/index.html.twig', [
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
                "animales"=>$entityManagerInterface->getRepository(Animal::class)->findAll(),
                /*"sitios"=>$entityManagerInterface->getRepository(Sitios::class)->findAll()*/
        ]);
    }

    /*#[Route('/raton', name: 'app_animales_raton')]
    public function raton(): Response
    {
        return new Response ("soy un raton");
    }*/

    
    /*#[Route('/animales/borrar/{animal}', name: 'app_animales_borrar')]
    public function borrar(EntityManagerInterface $entityManager,Animal $animal): Response
    {
       $entityManager->remove($animal);
       $entityManager->flush();

       retunrn new RedirectResponse(
        $this->generateUrl('')    
    );
    }*/
}
