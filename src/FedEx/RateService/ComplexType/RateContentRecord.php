<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the details of the content of the package.
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
class RateContentRecord extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateContentRecord';

    /**
     * Set itemNumber
     *
     * 
     * Example: 
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
     * Example: 
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
     * Example: 
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
     * Example: 
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
