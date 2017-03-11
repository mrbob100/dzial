<?php
namespace VL\CarBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use VL\CarBundle\Entity\Product;

class LoadJobData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
        $jobFull = new Product();
        $jobFull->setTypes($em->merge($this->getReference('category-car')));
        $jobFull->setNames('Mercedes');
        $jobFull->setPrice(100000);


        $jobTime = new Product();
        $jobTime->setTypes($em->merge($this->getReference('category-car')));
        $jobTime->setNames('Audi');
        $jobTime->setPrice(95000);

        $job= new Product();
        $job->setTypes($em->merge($this->getReference('category-truck')));
        $job->setNames('Iveco');
        $job->setPrice(155000);
        $em->persist($jobFull);
        $em->persist($jobTime);
        $em->persist($job);
        $em->flush();
    }

    public function getOrder()
    {
        return 2;
    }
}