<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * ShipFull_Schema_Create_Tag
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property ShipCreateTagRequestedShipment $requestedShipment
 * @property ShipAccountNumber $accountNumber

 */
class ShipFull_Schema_Create_Tag extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipFull_Schema_Create_Tag';

    /**
     * Set requestedShipment
     *
     *
     * Example:
     * @param ShipCreateTagRequestedShipment $requestedShipment
     * @return $this
     */
    public function setRequestedShipment(ShipCreateTagRequestedShipment $requestedShipment)
    {
        $this->values['requestedShipment'] = $requestedShipment;
        return $this;
    }

    /**
     * Get requestedShipment
     *
     * @return ShipCreateTagRequestedShipment
     */
    public function getRequestedShipment()
    {
        return $this->values['requestedShipment'];
    }

    /**
     * Set accountNumber
     *
     *
     * Example:
     * @param ShipAccountNumber $accountNumber
     * @return $this
     */
    public function setAccountNumber(ShipAccountNumber $accountNumber)
    {
        $this->values['accountNumber'] = $accountNumber;
        return $this;
    }

    /**
     * Get accountNumber
     *
     * @return ShipAccountNumber
     */
    public function getAccountNumber()
    {
        return $this->values['accountNumber'];
    }
}
