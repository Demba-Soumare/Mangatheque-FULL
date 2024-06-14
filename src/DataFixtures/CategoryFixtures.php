<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Category;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $Category = new Category();
        $Category->setGenre('Shonen');
        $manager->persist($Category);
        $this->addReference('Shonen', $Category);
       
        $Category2 = new Category();
        $Category2->setGenre('Shojo');
        $manager->persist($Category2);
        $this->addReference('Shojo', $Category2);

        $Category3 = new Category();
        $Category3->setGenre('Seinen');
        $manager->persist($Category3);
        $this->addReference('Seinen', $Category3);

        $manager->flush();
    }
}
