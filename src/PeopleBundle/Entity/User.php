<?php

namespace PeopleBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use PeopleBundle\Abstraction\SpecificUserInterface;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="PeopleBundle\Repository\UserRepository")
 */
class User extends BaseUser implements \Serializable
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * Api key of the user.
     *
     * @var integer
     * @ORM\Column(name="api_key", type="string", nullable=true)
     *
     */
    private $api_key;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set player api key.
     *
     * @param mixed $api_key
     */
    public function setApiKey($api_key)
    {
        $this->api_key = $api_key;
    }

    /**
     * Get player api key.
     *
     * @return mixed
     */
    public function getApiKey()
    {
        return $this->api_key;
    }
}

