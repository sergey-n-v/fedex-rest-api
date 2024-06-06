<?php
namespace FedEx\AvailabilityService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * AvShipmentDryIceDetail_totalWeight
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $units
 * @property float $value

 */
class AvShipmentDryIceDetail_totalWeight extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvShipmentDryIceDetail_totalWeight';

    /**
     * Identifies the unit of measure associated with a weight value. <br> Example: LB
     *
     * 
     * Example: LB
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

    /**
     * Identifies the weight <br> Example: 10.0
     *
     * 
     * Example: 10
     * @param float $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->values['value'] = $value;
        return $this;
    }

    /**
     * Get value
     *
     * @return float
     */
    public function getValue()
    {
        return $this->values['value'];
    }
}
