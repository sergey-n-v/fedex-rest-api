<?php
namespace FedExRestApi\PickupService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Indicate the dimensions of the package.<br> Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions must be indicated.</li><li>Dimensions are required with YOUR_PACKAGING package type.</li></ul>Note: The maximum/minimum dimension values varies based on the services and the packaging types. Refer <a href=" https://www.fedex.com/en-us/service-guide.html# " target="_blank">FedEx Service Guide</a> for service details related to DIM Weighting for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.
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
class PickupDimensions_2 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PickupDimensions_2';

    /**
     * Indicate the length of the package. No implied decimal places. Maximum value is 999. <br> Example: 20
     *
     *
     * Example: 7
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
     * Indicate the width of the package. No implied decimal places. Maximum value is 999. <br> Example: 10
     *
     *
     * Example: 8
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
     * Indicate the height of the package. No implied decimal places. Maximum value is 999. <br> Example: 10
     *
     *
     * Example: 10
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
     * Unit of measure for the provided dimensions.<br><i>Note: Any value other than CM including blank/null will default to IN.</i>
     *
     * simpleClass: PickupUnits
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
