<?php
namespace FedEx\AvailabilityService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Use this object to specify required information of a shipment to be held at FedEx destination location. <br><br><i>Note: This object HoldAtLocationDetail is <b>REQUIRED</b>, when HOLD_AT_LOCATION is chosen in the specialServiceTypes.</i>
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $locationId
 * @property string $locationType
 * @property AvTransitTimeRequestedShipment_shipmentSpecialServices_holdAtLocationDetail_locationContactAndAddress $locationContactAndAddress

 */
class AvTransitTimeRequestedShipment_shipmentSpecialServices_holdAtLocationDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvTransitTimeRequestedShipment_shipmentSpecialServices_holdAtLocationDetail';

    /**
     * This is an alphanumeric identifier used for Location/Facility Identification.<br><br>Example: YBZA<br><br>Note: <i><ul><li>For HAL Shipment, Location ID is <b>REQUIRED</b> to ensure packages are delivered to the right location.</li><li>Use endpoint [<b>Find Location</b>] in [<b>Location Search API</b>], to find the correct location ID for your shipment.</li></ul></i>
     *
     * 
     * Example: YBZA
     * @param string $locationId
     * @return $this
     */
    public function setLocationId($locationId)
    {
        $this->values['locationId'] = $locationId;
        return $this;
    }

    /**
     * Get locationId
     *
     * @return string
     */
    public function getLocationId()
    {
        return $this->values['locationId'];
    }

    /**
     * Specify the Hold at location type.<br> Example: FEDEX_ONSITE
     *
     * simpleClass: AvLocationType
     * Example: FEDEX_ONSITE
     * @param string $locationType
     * @return $this
     */
    public function setLocationType($locationType)
    {
        $this->values['locationType'] = $locationType;
        return $this;
    }

    /**
     * Get locationType
     *
     * @return string
     */
    public function getLocationType()
    {
        return $this->values['locationType'];
    }

    /**
     * Set locationContactAndAddress
     *
     * 
     * Example: 
     * @param AvTransitTimeRequestedShipment_shipmentSpecialServices_holdAtLocationDetail_locationContactAndAddress $locationContactAndAddress
     * @return $this
     */
    public function setLocationContactAndAddress(AvTransitTimeRequestedShipment_shipmentSpecialServices_holdAtLocationDetail_locationContactAndAddress $locationContactAndAddress)
    {
        $this->values['locationContactAndAddress'] = $locationContactAndAddress;
        return $this;
    }

    /**
     * Get locationContactAndAddress
     *
     * @return AvTransitTimeRequestedShipment_shipmentSpecialServices_holdAtLocationDetail_locationContactAndAddress
     */
    public function getLocationContactAndAddress()
    {
        return $this->values['locationContactAndAddress'];
    }
}
