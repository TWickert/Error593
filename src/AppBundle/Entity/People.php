<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * People
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\PeopleRepository")
 */
class People
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;

    /**
     * @var integer
     *
     * @ORM\Column(name="atRisk", type="integer")
     */
    private $atRisk;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Country")
     * @ORM\JoinColumn(nullable=false)
     */
    private $country;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Camp")
     * @ORM\JoinColumn(nullable=true)
     */
    private $camp;

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
     * Set title
     *
     * @param string $title
     * @return People
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return People
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
     * Set prenom
     *
     * @param string $prenom
     * @return People
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set atRisk
     *
     * @param integer $atRisk
     * @return People
     */
    public function setAtRisk($atRisk)
    {
        $this->atRisk = $atRisk;

        return $this;
    }

    /**
     * Get atRisk
     *
     * @return integer 
     */
    public function getAtRisk()
    {
        return $this->atRisk;
    }

    /**
     * Set country
     *
     * @param \AppBundle\Entity\Country $country
     * @return People
     */
    public function setCountry(\AppBundle\Entity\Country $country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return \AppBundle\Entity\Country 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set camp
     *
     * @param \AppBundle\Entity\Camp $camp
     * @return People
     */
    public function setCamp(\AppBundle\Entity\Camp $camp = null)
    {
        $this->camp = $camp;

        return $this;
    }

    /**
     * Get camp
     *
     * @return \AppBundle\Entity\Camp 
     */
    public function getCamp()
    {
        return $this->camp;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return People
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }
}
