<?php

namespace Jan\MOCBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MOCPlayerInstance
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Jan\MOCBundle\Entity\MOCPlayerInstanceRepository")
 */
class MOCPlayerInstance extends BaseMOCPlayer
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;


    /**
     * @ORM\ManyToOne(targetEntity="PlayerConnection", inversedBy="players")
     * @ORM\JoinColumn(name="connection_id", referencedColumnName="id")
     **/
    private $connection;


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
     * Set name
     *
     * @param string $name
     * @return MOCPlayerInstance
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return MOCPlayerInstance
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set connection
     *
     * @param \Jan\MOCBundle\Entity\PlayerConnection $connection
     * @return MOCPlayerInstance
     */
    public function setConnection(\Jan\MOCBundle\Entity\PlayerConnection $connection = null)
    {
        $this->connection = $connection;

        return $this;
    }

    /**
     * Get connection
     *
     * @return \Jan\MOCBundle\Entity\PlayerConnection
     */
    public function getConnection()
    {
        return $this->connection;
    }





}
