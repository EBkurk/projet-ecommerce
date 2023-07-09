<?php

namespace App\DataFixtures;

use DateTime;
use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class ProductFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');
        for ($i = 0; $i <40; $i++) {
            $category = $this->getReference('categoryShop-'. $faker->numberBetween(1, 7));
            $product = new Product();
            $product->setTitle($faker->sentence);
            $product->setSlug($faker->slug);
            $product->setContent($faker->text);
            $product->setOnline(true);
            $product->setCreatedAt(new DateTime('now'));
            $product->setSubtitle($faker->text(155));
            $product->setImage($faker->imageUrl(640, 480, 'furniture', true));
            $product->setPrice($faker->randomFloat(2));
            $product->setCategory($category);
            $manager->persist($product);
        }

        $manager->flush();
    }
}
