<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * The request elements required to cancel a shipment.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property ShipShipperAccountNumber $accountNumber
 * @property boolean $emailShipment
 * @property string $senderCountryCode
 * @property string $deletionControl
 * @property string $trackingNumber

 */
class ShipFull_Schema_Cancel_Shipment extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipFull_Schema_Cancel_Shipment';

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

    /**
     * Set emailShipment
     *
     *
     * Example: false
     * @param boolean $emailShipment
     * @return $this
     */
    public function setEmailShipment($emailShipment)
    {
        $this->values['emailShipment'] = $emailShipment;
        return $this;
    }

    /**
     * Get emailShipment
     *
     * @return boolean
     */
    public function getEmailShipment()
    {
        return $this->values['emailShipment'];
    }

    /**
     * Set senderCountryCode
     *
     *
     * Example: US
     * @param string $senderCountryCode
     * @return $this
     */
    public function setSenderCountryCode($senderCountryCode)
    {
        $this->values['senderCountryCode'] = $senderCountryCode;
        return $this;
    }

    /**
     * Get senderCountryCode
     *
     * @return string
     */
    public function getSenderCountryCode()
    {
        return $this->values['senderCountryCode'];
    }

    /**
     * Set deletionControl
     *
     * simpleClass: ShipDeletionControl
     * Example: DELETE_ALL_PACKAGES
     * @param string $deletionControl
     * @return $this
     */
    public function setDeletionControl($deletionControl)
    {
        $this->values['deletionControl'] = $deletionControl;
        return $this;
    }

    /**
     * Get deletionControl
     *
     * @return string
     */
    public function getDeletionControl()
    {
        return $this->values['deletionControl'];
    }

    /**
     * Set trackingNumber
     *
     *
     * Example: 794953555571
     * @param string $trackingNumber
     * @return $this
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->values['trackingNumber'] = $trackingNumber;
        return $this;
    }

    /**
     * Get trackingNumber
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->values['trackingNumber'];
    }
}
