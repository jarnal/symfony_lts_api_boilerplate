<?php

namespace RideBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GPSPosition
 *
 * @ORM\Table(name="g_p_s_position")
 * @ORM\Entity(repositoryClass="RideBundle\Repository\GPSPositionRepository")
 */
class GPSPosition
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

