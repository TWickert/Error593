<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vaccination
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\VaccinationRepository")
 */
class Vaccination
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\People")
     * @ORM\JoinColumn(nullable=false)
     */
    private $people;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Vaccine")
     * @ORM\JoinColumn(nullable=false)
     */
    private $vaccine;

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
     * Set date
     *
     * @param \DateTime $date
     * @return Vaccination
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set people
     *
     * @param \AppBundle\Entity\People $people
     * @return Vaccination
     */
    public function setPeople(\AppBundle\Entity\People $people)
    {
        $this->people = $people;

        return $this;
    }

    /**
     * Get people
     *
     * @return \AppBundle\Entity\People 
     */
    public function getPeople()
    {
        return $this->people;
    }

    /**
     * Set vaccine
     *
     * @param \AppBundle\Entity\Vaccine $vaccine
     * @return Vaccination
     */
    public function setVaccine(\AppBundle\Entity\Vaccine $vaccine)
    {
        $this->vaccine = $vaccine;

        return $this;
    }

    /**
     * Get vaccine
     *
     * @return \AppBundle\Entity\Vaccine 
     */
    public function getVaccine()
    {
        return $this->vaccine;
    }
}
