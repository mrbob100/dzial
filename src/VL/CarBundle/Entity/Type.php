<?php

namespace VL\CarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Type
 */
class Type
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $names;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $products;

    const HOME_PAGE=1;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->products = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set names
     *
     * @param string $names
     * @return Type
     */
    public function setNames($names)
    {
        $this->names = $names;

        return $this;
    }

    /**
     * Get names
     *
     * @return string 
     */
    public function getNames()
    {
        return $this->names;
    }

    /**
     * Add products
     *
     * @param \VL\CarBundle\Entity\Product $products
     * @return Type
     */
    public function addProduct(\VL\CarBundle\Entity\Product $products)
    {
        $this->products[] = $products;

        return $this;
    }

    /**
     * Remove products
     *
     * @param \VL\CarBundle\Entity\Product $products
     */
    public function removeProduct(\VL\CarBundle\Entity\Product $products)
    {
        $this->products->removeElement($products);
    }

    /**
     * Get products
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProducts()
    {
        return $this->products;
    }

    public function __toString()
    {
        return $this->getNames() ? $this->getNames() : "";
    }


}
