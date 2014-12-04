<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vaccine
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\VaccineRepository")
 */
class Vaccine
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
     * @var integer
     *
     * @ORM\Column(name="recallDelay", type="integer")
     */
    private $recallDelay;


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
     * @return Vaccine
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
     * Set recallDelay
     *
     * @param integer $recallDelay
     * @return Vaccine
     */
    public function setRecallDelay($recallDelay)
    {
        $this->recallDelay = $recallDelay;

        return $this;
    }

    /**
     * Get recallDelay
     *
     * @return integer 
     */
    public function getRecallDelay()
    {
        return $this->recallDelay;
    }
}
