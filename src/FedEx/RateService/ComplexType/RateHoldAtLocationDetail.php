<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Use this object to specify required information for a shipment to be held at destination FedEx location. <br><br><i>Note: This object HoldAtLocationDetail is <b>REQUIRED</b>, when HOLD_AT_LOCATION is chosen in the specialServiceTypes.</i>
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $locationId
 * @property RateContactAndAddress $locationContactAndAddress
 * @property string $locationType

 */
class RateHoldAtLocationDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateHoldAtLocationDetail';

    /**
     * Set locationId
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
     * Set locationContactAndAddress
     *
     * 
     * Example: 
     * @param RateContactAndAddress $locationContactAndAddress
     * @return $this
     */
    public function setLocationContactAndAddress(RateContactAndAddress $locationContactAndAddress)
    {
        $this->values['locationContactAndAddress'] = $locationContactAndAddress;
        return $this;
    }

    /**
     * Get locationContactAndAddress
     *
     * @return RateContactAndAddress
     */
    public function getLocationContactAndAddress()
    {
        return $this->values['locationContactAndAddress'];
    }

    /**
     * Set locationType
     *
     * simpleClass: RateLocationType
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
}
