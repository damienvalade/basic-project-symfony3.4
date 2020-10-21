<?php

namespace App\DataFixtures;

use App\Entity\Articles;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i = 1; $i <= 5; $i++)
        {
            $article = new Articles();
            $article->setName("Article number : $i");
            $article->setCreateAt(new DateTime());
            $article->setDescription("Super Text !!! de l'article $i");
            $manager->persist($article);
        }

        $manager->flush();
    }
}
