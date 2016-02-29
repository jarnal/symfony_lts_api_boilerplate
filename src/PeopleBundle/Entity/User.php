<?php

namespace PeopleBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use PeopleBundle\Abstraction\SpecificUserInterface;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\VirtualProperty;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="PeopleBundle\Repository\UserRepository")
 *
 * @ExclusionPolicy("all")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     * @Groups({"UserAPIKey", "UserGlobal","UserDetails"})
     * @Expose
     */
    protected $id;

    /**
     * First name of the user.
     *
     * @var string
     * @ORM\Column(name="firstname", type="string", nullable=true)
     *
     * @Groups({"UserGlobal","UserDetails"})
     * @Expose
     */
    private $firstname = "";

    /**
     * Last name of the user.
     *
     * @var string
     * @ORM\Column(name="lastname", type="string", nullable=true)
     *
     * @Groups({"UserGlobal","UserDetails"})
     * @Expose
     */
    private $lastname = "";

    /**
     * Api key of the user.
     *
     * @var integer
     * @ORM\Column(name="api_key", type="string", nullable=true)
     *
     */
    private $api_key = "";

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
     * Get player first name.
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set player first name.
     *
     * @param string $pFirstname
     * @return User
     */
    public function setFirstname($pFirstname)
    {
        $this->firstname = $pFirstname;
        return $this;
    }

    /**
     * Get player last name.
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set player last name.
     *
     * @param string $pLastname
     * @return User
     */
    public function setLastname($pLastname)
    {
        $this->lastname = $pLastname;
        return $this;
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

