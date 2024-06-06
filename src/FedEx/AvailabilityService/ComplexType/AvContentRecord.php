<?php
namespace FedEx\AvailabilityService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * package/shipment content details
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $itemNumber
 * @property int $receivedQuantity
 * @property string $description
 * @property string $partNumber

 */
class AvContentRecord extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvContentRecord';

    /**
     * This is a package item number.<br> Example: 45673289
     *
     * 
     * Example: 45673289
     * @param string $itemNumber
     * @return $this
     */
    public function setItemNumber($itemNumber)
    {
        $this->values['itemNumber'] = $itemNumber;
        return $this;
    }

    /**
     * Get itemNumber
     *
     * @return string
     */
    public function getItemNumber()
    {
        return $this->values['itemNumber'];
    }

    /**
     * This is the package item quantity.<br> Example: 2
     *
     * 
     * Example: 2
     * @param int $receivedQuantity
     * @return $this
     */
    public function setReceivedQuantity($receivedQuantity)
    {
        $this->values['receivedQuantity'] = $receivedQuantity;
        return $this;
    }

    /**
     * Get receivedQuantity
     *
     * @return int
     */
    public function getReceivedQuantity()
    {
        return $this->values['receivedQuantity'];
    }

    /**
     * This is the description of the package item.
     *
     * 
     * Example: This is the part number.
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->values['description'] = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->values['description'];
    }

    /**
     * This is the part Number <br> Example: 123
     *
     * 
     * Example: 123
     * @param string $partNumber
     * @return $this
     */
    public function setPartNumber($partNumber)
    {
        $this->values['partNumber'] = $partNumber;
        return $this;
    }

    /**
     * Get partNumber
     *
     * @return string
     */
    public function getPartNumber()
    {
        return $this->values['partNumber'];
    }
}
