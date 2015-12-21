<?php

namespace RideBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RideStatusType
 *
 * @ORM\Table(name="ride_status_type")
 * @ORM\Entity(repositoryClass="RideBundle\Repository\RideStatusTypeRepository")
 */
class RideStatusType
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

