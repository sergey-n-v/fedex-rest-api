<?php
namespace FedEx\AvailabilityService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * These are the weight details.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $units
 * @property float $value

 */
class AvTransitTimeRequestedShipment_shipmentSpecialServices_shipmentDryIceDetail_totalWeight extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvTransitTimeRequestedShipment_shipmentSpecialServices_shipmentDryIceDetail_totalWeight';

    /**
     * Specify the unit of measurement used to  weigh the package. For Dry Ice the unit of measure is KG.
     *
     * simpleClass: AvUnits
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
     * Specify the value of the weight of the package.<br> Example: 68.25
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
