<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Contact;

class ContactFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $contact = new Contact();
        $contact->setDate(new \DateTime('now'));
        $contact->setUser($this->getReference('user_1'));
        $contact->setArea($this->getReference('area_1'));
        $contact->setMessage('quiero contactar con ustedes');
        $manager->persist($contact);

        $contact = new Contact();
        $contact->setDate(new \DateTime('now'));
        $contact->setUser($this->getReference('user_2'));
        $contact->setArea($this->getReference('area_2'));
        $contact->setMessage('quiero contactar con ustedes');
        $manager->persist($contact);

        $manager->flush();
    }
}
