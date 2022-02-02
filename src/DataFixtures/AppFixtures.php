<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Question;
use Faker\Factory;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr FR');

        //Category
        for ($c = 0; $c < 5; $c++) {
            $category = new Category;
            $category->setLabel($faker->word());

            $manager->persist($category);

            //Question
            for ($q = 0; $q < 20; $q++) {
                $question = new Question;
                $question->setLabel($faker->text)
                    ->setResponse($faker->paragraph(3))
                    ->addCategory($category);

                $manager->persist($question);
            }
        }
        $manager->flush();
    }
}
