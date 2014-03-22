<?php

namespace Jan\MOCBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Jan\MOCBundle\Entity\MOCPlayerInstance;

/**
 * PlayerConnection
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PlayerConnection
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="hostname", type="string", length=255)
     */
    private $hostname;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @ORM\OneToMany(targetEntity="MOCPlayerInstance", mappedBy="connection")
     **/
    private $players;


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
     * Set hostname
     *
     * @param string $hostname
     * @return PlayerConnection
     */
    public function setHostname($hostname)
    {
        $this->hostname = $hostname;

        return $this;
    }

    /**
     * Get hostname
     *
     * @return string
     */
    public function getHostname()
    {
        return $this->hostname;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return PlayerConnection
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->players = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add players
     *
     * @param \Jan\MOCBundle\Entity\MOCPlayerInstance $players
     * @return PlayerConnection
     */
    public function addPlayer(\Jan\MOCBundle\Entity\MOCPlayerInstance $players)
    {
        $this->players[] = $players;

        return $this;
    }

    /**
     * Remove players
     *
     * @param \Jan\MOCBundle\Entity\MOCPlayerInstance $players
     */
    public function removePlayer(\Jan\MOCBundle\Entity\MOCPlayerInstance $players)
    {
        $this->players->removeElement($players);
    }

    /**
     * Get players
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPlayers()
    {
        return $this->players;
    }
}
