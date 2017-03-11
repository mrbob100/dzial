<?php
namespace VL\CarBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use VL\CarBundle\Entity\Type;

class LoadTypeData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
        $truck = new Type();
        $truck->setNames('trucks');
        $car = new Type();
        $car->setNames('Cars');

        $em->persist($truck);
        $em->persist($car);

        $em->flush();
        $this->addReference('category-truck', $truck);
        $this->addReference('category-car', $car);

    }

    public function getOrder()
    {
        return 1;
    }
}