<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * The request elements required to create a shipment.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property ShipRequestedShipmentVerify $requestedShipment
 * @property ShipShipperAccountNumber $accountNumber

 */
class ShipFullSchema_VerifyShipment extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipFullSchema_VerifyShipment';

    /**
     * Set requestedShipment
     *
     *
     * Example:
     * @param ShipRequestedShipmentVerify $requestedShipment
     * @return $this
     */
    public function setRequestedShipment(ShipRequestedShipmentVerify $requestedShipment)
    {
        $this->values['requestedShipment'] = $requestedShipment;
        return $this;
    }

    /**
     * Get requestedShipment
     *
     * @return ShipRequestedShipmentVerify
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
     * @param ShipShipperAccountNumber $accountNumber
     * @return $this
     */
    public function setAccountNumber(ShipShipperAccountNumber $accountNumber)
    {
        $this->values['accountNumber'] = $accountNumber;
        return $this;
    }

    /**
     * Get accountNumber
     *
     * @return ShipShipperAccountNumber
     */
    public function getAccountNumber()
    {
        return $this->values['accountNumber'];
    }
}
