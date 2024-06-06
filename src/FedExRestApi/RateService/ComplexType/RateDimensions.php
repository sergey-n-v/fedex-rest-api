<?php
namespace FedExRestApi\RateService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * RateDimensions
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
class RateDimensions extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateDimensions';

    /**
     * Set length
     *
     *
     * Example:
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
     * Set width
     *
     *
     * Example:
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
     * Set height
     *
     *
     * Example:
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
     * Set units
     *
     *
     * Example:
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
