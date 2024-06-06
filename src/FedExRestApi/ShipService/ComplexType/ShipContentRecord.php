<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

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
class ShipContentRecord extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipContentRecord';

    /**
     * Set itemNumber
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
     * Set receivedQuantity
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
     * Set description
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
     * Set partNumber
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
