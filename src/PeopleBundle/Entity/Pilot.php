<?php

namespace PeopleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pilot
 *
 * @ORM\Table(name="pilot")
 * @ORM\Entity(repositoryClass="PeopleBundle\Repository\PilotRepository")
 */
class Pilot
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

