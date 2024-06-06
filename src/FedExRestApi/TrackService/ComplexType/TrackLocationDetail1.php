<?php
namespace FedExRestApi\TrackService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Location details for the fedex facility.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $locationId
 * @property TrackContactAndAddress1 $locationContactAndAddress
 * @property string $locationType

 */
class TrackLocationDetail1 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackLocationDetail1';

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
     * @param TrackContactAndAddress1 $locationContactAndAddress
     * @return $this
     */
    public function setLocationContactAndAddress(TrackContactAndAddress1 $locationContactAndAddress)
    {
        $this->values['locationContactAndAddress'] = $locationContactAndAddress;
        return $this;
    }

    /**
     * Get locationContactAndAddress
     *
     * @return TrackContactAndAddress1
     */
    public function getLocationContactAndAddress()
    {
        return $this->values['locationContactAndAddress'];
    }

    /**
     * Set locationType
     *
     * simpleClass: TrackLocationType
     * Example: FEDEX_SHIPSITE
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
