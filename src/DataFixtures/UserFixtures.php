<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setFirstName('Ahmet')
            ->setLastName('Aydogdu');
        $manager->persist($user);

        $user = new User();
        $user->setFirstName('Kardesler')
            ->setLastName('Pide');
        $manager->persist($user);

        $user = new User();
        $user->setFirstName('Pideci')
            ->setLastName('Kardesler');
        $manager->persist($user);

        $user = new User();
        $user->setFirstName('Kardesler')
            ->setLastName('Kunefe');
        $manager->persist($user);

        $manager->flush();
    }
}
