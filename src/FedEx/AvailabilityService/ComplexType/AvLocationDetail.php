<?php
namespace FedEx\AvailabilityService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * AvLocationDetail
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property AvLocationDetail_geoPositionalCoordinates $geoPositionalCoordinates

 */
class AvLocationDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvLocationDetail';

    /**
     * Set geoPositionalCoordinates
     *
     * 
     * Example: 
     * @param AvLocationDetail_geoPositionalCoordinates $geoPositionalCoordinates
     * @return $this
     */
    public function setGeoPositionalCoordinates(AvLocationDetail_geoPositionalCoordinates $geoPositionalCoordinates)
    {
        $this->values['geoPositionalCoordinates'] = $geoPositionalCoordinates;
        return $this;
    }

    /**
     * Get geoPositionalCoordinates
     *
     * @return AvLocationDetail_geoPositionalCoordinates
     */
    public function getGeoPositionalCoordinates()
    {
        return $this->values['geoPositionalCoordinates'];
    }
}
