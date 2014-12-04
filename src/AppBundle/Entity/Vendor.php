<?php
/**
 * Created by PhpStorm.
 * User: elfaus
 * Date: 04/12/2014
 * Time: 22:12
 */

namespace AppBundle\Entity;

/**
 * Vendor
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Vendor {

    /**
     * @ORM\Id
     * @ORM\Column(type="string", length="14")
     */
    protected $siret;

    /**
     * @ORM\Column(type="string", length="255")
     */
    protected $name;

    /**
     * @ORM\Column(type="integer")
     * @ORM\ManyToOne(targetEntity=County)
     */
    protected $county_id;

    /**
     * @return mixed
     */
    public function getCountyId()
    {
        return $this->county_id;
    }

    /**
     * @param mixed $county_id
     */
    public function setCountyId($county_id)
    {
        $this->county_id = $county_id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSiret()
    {
        return $this->siret;
    }

    /**
     * @param mixed $siret
     */
    public function setSiret($siret)
    {
        $this->siret = $siret;
    }

}
