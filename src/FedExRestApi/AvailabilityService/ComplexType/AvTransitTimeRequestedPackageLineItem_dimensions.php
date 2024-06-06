<?php
namespace FedExRestApi\AvailabilityService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Specify the dimensions of this package and the unit type used for the measurements. Valid measurements are whole numbers greater than zero.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property int $length
 * @property int $width
 * @property int $height
 * @property string $units

 */
class AvTransitTimeRequestedPackageLineItem_dimensions extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvTransitTimeRequestedPackageLineItem_dimensions';

    /**
     * Length of a package or shipment. Maximum Length is 999. <br> Example: 100
     *
     *
     * Example: 100
     * @param int $length
     * @return $this
     */
    public function setLength($length)
    {
        $this->values['length'] = $length;
        return $this;
    }

    /**
     * Get length
     *
     * @return int
     */
    public function getLength()
    {
        return $this->values['length'];
    }

    /**
     * Width dimensions of a package or shipment. Maximum Length is 999. <br> Example: 50
     *
     *
     * Example: 50
     * @param int $width
     * @return $this
     */
    public function setWidth($width)
    {
        $this->values['width'] = $width;
        return $this;
    }

    /**
     * Get width
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->values['width'];
    }

    /**
     * Height of a package or shipment. Maximum Length is 999. <br> Example: 30
     *
     *
     * Example: 30
     * @param int $height
     * @return $this
     */
    public function setHeight($height)
    {
        $this->values['height'] = $height;
        return $this;
    }

    /**
     * Get height
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->values['height'];
    }

    /**
     * Unit of measure for the provided dimensions.<br> Valid Values: IN - inches, CM - centimeters <br>Example: CM
     *
     * simpleClass: AvUnits
     * Example: CM
     * @param string $units
     * @return $this
     */
    public function setUnits($units)
    {
        $this->values['units'] = $units;
        return $this;
    }

    /**
     * Get units
     *
     * @return string
     */
    public function getUnits()
    {
        return $this->values['units'];
    }
}
