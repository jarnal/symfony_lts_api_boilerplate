<?php

namespace CarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CarFuelType
 *
 * @ORM\Table(name="car_fuel_type")
 * @ORM\Entity(repositoryClass="CarBundle\Repository\CarFuelTypeRepository")
 */
class CarFuelType
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

