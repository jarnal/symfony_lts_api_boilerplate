<?php

namespace CarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CarBrandType
 *
 * @ORM\Table(name="car_brand_type")
 * @ORM\Entity(repositoryClass="CarBundle\Repository\CarBrandTypeRepository")
 */
class CarBrandType
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

