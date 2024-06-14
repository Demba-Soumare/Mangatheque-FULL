<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Author;

class AuthorFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $Author = new Author();
        $Author->setName('Eiichiro Oda');
        $manager->persist($Author);
        $this->addReference('Eiichiro Oda', $Author);

        $Author2 = new Author();
        $Author2->setName('Naoko Takeuchi');
        $manager->persist($Author2);
        $this->addReference('Naoko Takeuchi', $Author2);

        $Author3 = new Author();
        $Author3->setName('kentaro Miura');
        $manager->persist($Author3);
        $this->addReference('Kentaro Miura', $Author3);
        

        $manager->flush();
    }
}
