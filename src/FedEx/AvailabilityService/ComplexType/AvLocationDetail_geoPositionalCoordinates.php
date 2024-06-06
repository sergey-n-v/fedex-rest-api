<?php
namespace FedEx\AvailabilityService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * the ISO6709GeographicCoordinates for a specific geographic location
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property float $latitude
 * @property float $longitude

 */
class AvLocationDetail_geoPositionalCoordinates extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvLocationDetail_geoPositionalCoordinates';

    /**
     * Field holds the latitude value
     *
     * 
     * Example: 5.6373766566333
     * @param float $latitude
     * @return $this
     */
    public function setLatitude($latitude)
    {
        $this->values['latitude'] = $latitude;
        return $this;
    }

    /**
     * Get latitude
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->values['latitude'];
    }

    /**
     * Field holds the longitude value
     *
     * 
     * Example: 3.6160767492519
     * @param float $longitude
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->values['longitude'] = $longitude;
        return $this;
    }

    /**
     * Get longitude
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->values['longitude'];
    }
}
