<?php

namespace App\DataFixtures;

use App\Entity\CategoryShop;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CategoryShopFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $c = [
            1 => [
                'name' => 'Tables',
                'slug' => 'tables'
            ],
            2 => [
                'name' => 'Chaises',
                'slug' => 'chaises'
            ],
            3 => [
                'name' => 'Placards',
                'slug' => 'placards'
            ],
            4 => [
                'name' => 'Commodes',
                'slug' => 'commodes'
            ],
            5 => [
                'name' => 'Tabourets',
                'slug' => 'tabourets'
            ],
            6 => [
                'name' => 'Bureaux',
                'slug' => 'bureaux'
            ],
            7 => [
                'name' => 'Fauteuils',
                'slug' => 'fauteuils'
            ]
        ];

        foreach ($c as $k => $value) {
            $categoryShop = new CategoryShop();
            $categoryShop->setName($value['name']);
            $categoryShop->setSlug($value['slug']);
            $manager->persist($categoryShop);
            $this->addReference('categoryShop-' . $k, $categoryShop);
        }

        $manager->flush();
    }
}