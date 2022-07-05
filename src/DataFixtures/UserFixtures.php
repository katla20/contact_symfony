<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $user1 = new User();
        $user1->setName('mario');
        $user1->setLastname('gil');
        $user1->setEmail('mariogil@test.co');
        $user1->setPhone('+570000000');
        $manager->persist($user1);

        $user2 = new User();
        $user2->setName('maria');
        $user2->setLastname('carrera');
        $user2->setEmail('mariacarrera@test.co');
        $user2->setPhone('+570000000');
        $manager->persist($user2);

        $this->addReference('user_1',$user1);
        $this->addReference('user_2',$user2);

        $manager->flush();
    }
}
