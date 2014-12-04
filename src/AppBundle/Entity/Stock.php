<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stock
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Stock
{
    /**
     * @var integer
     *
     * @ORM\Column(name="item_id", type="integer")
     * @ORM\Id
     */
    private $item_id;

    /**
     * @var integer
     *
     * @ORM\Column(name="vendor_id", type="integer")
     * @ORM\Id
     */
    private $vendor_id;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;

    /**
     * Get vendor_id
     *
     * @return integer 
     */
    public function getVendorId()
    {
        return $this->vendor_id;
    }

    /**
     * Set vendor_id
     *
     * @param $vendorId
     * @return $this
     */
    public function setVendorId($vendorId)
    {
        $this->vendor_id = $vendorId;

        return $this;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return Stock
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Get itemId
     *
     * @return integer
     */
    public function getItemId()
    {
        return $this->item_id;
    }

    /**
     * Set itemId
     *
     * @param $itemId
     * @return Stock
     */
    public function setItemId($itemId)
    {
        $this->item_id = $itemId;

        return $this;
    }

}
