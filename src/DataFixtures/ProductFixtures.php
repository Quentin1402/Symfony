<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProductFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $product = new Product();
        $product->setName("A");
        $product->setPrice(10);
        $product->setDescription("c/'est a");
        $product->setTest("c/'est a");
        $manager->persist($product);

        $product2 = new Product();
        $product2->setName("B");
        $product2->setPrice(100);
        $product2->setDescription("c/'est b");
        $product2->setTest("c/'est b");
        $manager->persist($product2);

        $product3 = new Product();
        $product3->setName("C");
        $product3->setPrice(1000);
        $product3->setDescription("c/'est c");
        $product3->setTest("c/'est c");
        $manager->persist($product3);

        $manager->flush();
    }
}
