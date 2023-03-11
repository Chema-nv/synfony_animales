<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use App\Entity\Sitios;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AnimalFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $animal=new Animal();
        $animal->setNombre("tor");
        $animal->setPasos(2);
        $animal->setNacimiento(new \DateTimeImmutable("2020-08-24 12:25"));
        //$sitanimal=new Sitios();
       // $sitanimal->get
        //$animal->setSitio(new Sitios());
        $manager->persist($animal);

        $animal2=new Animal();   
        $animal2->setNombre("tar");
        $animal2->setPasos(4);
        $animal2->setNacimiento(new \DateTimeImmutable("2021-08-24 12:25"));
        $manager->persist($animal2);

        $animal3=new Animal();   
        $animal3->setNombre("tir");
        $animal3->setPasos(6);
        $animal3->setNacimiento(new \DateTimeImmutable("2022-08-24 12:25"));

        $manager->persist($animal3);

        $manager->flush();
    }
}
