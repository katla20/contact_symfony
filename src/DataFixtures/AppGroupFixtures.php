<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\DataFixtures\UserFixtures;
use App\DataFixtures\AreaFixtures;
use App\DataFixtures\ContactFixtures;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class AppGroupFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
     //...
    }
    public function getDependencies()
    {
        return [
            UserFixtures::class,
            AreaFixtures::class,
            ContactFixtures::class
        ];
    }
}
