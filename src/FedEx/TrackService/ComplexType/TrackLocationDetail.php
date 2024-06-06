<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Location details for the fedex facility.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $locationId
 * @property TrackContactAndAddress $locationContactAndAddress
 * @property string $locationType

 */
class TrackLocationDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackLocationDetail';

    /**
     * Set locationId
     *
     * 
     * Example: SEA
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
     * @param TrackContactAndAddress $locationContactAndAddress
     * @return $this
     */
    public function setLocationContactAndAddress(TrackContactAndAddress $locationContactAndAddress)
    {
        $this->values['locationContactAndAddress'] = $locationContactAndAddress;
        return $this;
    }

    /**
     * Get locationContactAndAddress
     *
     * @return TrackContactAndAddress
     */
    public function getLocationContactAndAddress()
    {
        return $this->values['locationContactAndAddress'];
    }

    /**
     * Set locationType
     *
     * simpleClass: TrackLocationType
     * Example: PICKUP_LOCATION
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
