<?php
namespace FedExRestApi\TrackService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Information uniquely identifying a shipment such as Tracking number, ShipDate, and Tracking number uniqueId.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $trackingNumber
 * @property string $carrierCode
 * @property string $trackingNumberUniqueId

 */
class TrackTrackingNumberInfo_1 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackTrackingNumberInfo_1';

    /**
     * Set trackingNumber
     *
     *
     * Example: 128667043726
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

    /**
     * Set carrierCode
     *
     * simpleClass: TrackCarrierCode
     * Example: FDXE
     * @param string $carrierCode
     * @return $this
     */
    public function setCarrierCode($carrierCode)
    {
        $this->values['carrierCode'] = $carrierCode;
        return $this;
    }

    /**
     * Get carrierCode
     *
     * @return string
     */
    public function getCarrierCode()
    {
        return $this->values['carrierCode'];
    }

    /**
     * Set trackingNumberUniqueId
     *
     *
     * Example: 245822~123456789012~FDEG
     * @param string $trackingNumberUniqueId
     * @return $this
     */
    public function setTrackingNumberUniqueId($trackingNumberUniqueId)
    {
        $this->values['trackingNumberUniqueId'] = $trackingNumberUniqueId;
        return $this;
    }

    /**
     * Get trackingNumberUniqueId
     *
     * @return string
     */
    public function getTrackingNumberUniqueId()
    {
        return $this->values['trackingNumberUniqueId'];
    }
}
