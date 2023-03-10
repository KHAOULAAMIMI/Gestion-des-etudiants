<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Factory\UserFactory;
use App\Factory\EnseignantFactory;
use App\Factory\EtudiantFactory;
use App\Factory\NoteFactory;
class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        
        EnseignantFactory::createMany(10);
        EtudiantFactory::createMany(10);
        NoteFactory::createMany(10);
        UserFactory::createMany(1);

        $manager->flush();
    }
}
