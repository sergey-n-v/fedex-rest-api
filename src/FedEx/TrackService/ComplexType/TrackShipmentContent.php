<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Field which holds information about contents of the shipment. Populated for secure users only.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $itemNumber
 * @property string $receivedQuantity
 * @property string $description
 * @property string $partNumber

 */
class TrackShipmentContent extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackShipmentContent';

    /**
     * Set itemNumber
     *
     * 
     * Example: RZ5678
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
     * Example: 13
     * @param string $receivedQuantity
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
     * @return string
     */
    public function getReceivedQuantity()
    {
        return $this->values['receivedQuantity'];
    }

    /**
     * Set description
     *
     * 
     * Example: pulyurethane rope
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
     * Example: RK1345
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
