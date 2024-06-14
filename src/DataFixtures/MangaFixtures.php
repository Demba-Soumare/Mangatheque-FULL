<?php

namespace App\DataFixtures;

use App\Entity\Manga;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class MangaFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $manga1 = new Manga();
        $manga1->setTitle('One Piece');
        $manga1->setSynopsis('Luffy part à la recherche du One Piece, le trésor ultime des pirates');
        $manga1->setCover('');
        $manga1->setCategory($this->getReference('Shonen')); 
        $manga1->setAuthor($this->getReference('Eiichiro Oda')); 
        $manager->persist($manga1);

        $manga2 = new Manga();
        $manga2->setTitle('Sailor Moon');
        $manga2->setSynopsis('Usagi Tsukino est une collégienne de 14 ans, pleurnicharde et maladroite');
        $manga2->setCover('');
        $manga2->setCategory($this->getReference('Shojo'));
        $manga2->setAuthor($this->getReference('Naoko Takeuchi'));
        $manager->persist($manga2);

        $manga3 = new Manga();
        $manga3->setTitle('Berserk');
        $manga3->setSynopsis('Guts, le guerrier noir, promène son imposante silhouette de routes en villages');
        $manga3->setCover('');
        $manga3->setCategory($this->getReference('Seinen')); 
        $manga3->setAuthor($this->getReference('Kentaro Miura'));
        $manager->persist($manga3);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            CategoryFixtures::class,
            AuthorFixtures::class,
        ];
    }
}

