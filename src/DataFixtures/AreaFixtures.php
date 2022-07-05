<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Area;

class AreaFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $area1 = new Area();
        $area1->setName('primera area');
        $area1->setDescription('descripcion de primer area');
        $manager->persist($area1);

        $area2 = new Area();
        $area2->setName('segunda area');
        $area2->setDescription('descripcion segunda area');
        $manager->persist($area2);
    
        $area3 = new Area();
        $area3->setName('tercer area');
        $area3->setDescription('descripcion de tercer area');
        $manager->persist($area3);

        $this->addReference('area_1',$area1);
        $this->addReference('area_2',$area2);
        $this->addReference('area_3',$area3);

        $manager->flush();
    }
}
