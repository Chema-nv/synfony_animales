<?php

namespace App\DataFixtures;

use App\Entity\Sitios;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class SitioFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $sitio= new Sitios();
        $sitio->setNombre("Toledo");
        $manager->persist($sitio);

        $sitio2= new Sitios();
        $sitio2->setNombre("Madrid");
        $manager->persist($sitio2);

        $sitio3= new Sitios();
        $sitio3->setNombre("Barcelona");
        $manager->persist($sitio3);

        

        $manager->flush();
    }
}
