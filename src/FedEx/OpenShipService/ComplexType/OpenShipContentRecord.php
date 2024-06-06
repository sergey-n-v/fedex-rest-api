<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Use this object to specify package content details.
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
class OpenShipContentRecord extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipContentRecord';

    /**
     * This is a package item number.
     *
     * 
     * Example: 2876
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
     * This is the package item quantity.
     *
     * 
     * Example: 256
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
     * Example: Description
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
     * This is the part number.
     *
     * 
     * Example: 456
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
