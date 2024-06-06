<?php
namespace FedEx\AvailabilityService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * AvDimensions
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property  $height
 * @property  $length
 * @property  $units
 * @property  $width

 */
class AvDimensions extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvDimensions';

    /**
     * Indicate the height of the package. No implied decimal places. Maximum value: 999 <br> Example: 10
     *
     * 
     * Example: 30
     * @param  $height
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
     * @return 
     */
    public function getHeight()
    {
        return $this->values['height'];
    }

    /**
     * Indicate the length of the package. No implied decimal places. Maximum value: 999 <br> Example: 20
     *
     * 
     * Example: 100
     * @param  $length
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
     * @return 
     */
    public function getLength()
    {
        return $this->values['length'];
    }

    /**
     * Indicate the Unit of measure for the provided dimensions.<br>Valid Values are:              <ul><li>IN - inches</li><li>CM - centimeters</li></ul><i>Note: Any value other than CM including blank/null will default to IN.</i><br>Example: CM
     *
     * 
     * Example: 
     * @param  $units
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
     * @return 
     */
    public function getUnits()
    {
        return $this->values['units'];
    }

    /**
     * Indicate the width of the package. No implied decimal places. Maximum value: 999 <br> Example: 10
     *
     * 
     * Example: 50
     * @param  $width
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
     * @return 
     */
    public function getWidth()
    {
        return $this->values['width'];
    }
}
