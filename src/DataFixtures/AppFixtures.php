<?php

namespace App\DataFixtures;

use Faker\Factory;
use Faker\Generator;
use App\Entity\Instruments;
use App\Entity\Nouveautes;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    private Generator $faker;

    public function __construct()
    {
        $this-> faker = Factory::create('fr_FR');
    }


    public function load(ObjectManager $manager): void
    {
        for ($i = 1 ; $i <= 50; $i++){
            $instrument = new Instruments();
            $nouveaute = new Nouveautes();

            $instrument -> setName($this->faker->word())
                        ->setPrice(mt_rand(1,100));

            $nouveaute -> setName($this->faker->word())
            ->setPrice(mt_rand(1,100));

            $manager->persist($instrument);
            $manager->persist($instrument);

        }

            $manager->flush();
            
    }
}
