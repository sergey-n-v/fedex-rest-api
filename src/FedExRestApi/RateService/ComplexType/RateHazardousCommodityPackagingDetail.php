<?php
namespace FedExRestApi\RateService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Identifies number and type of packaging units for hazardous commodities.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property int $count
 * @property string $units

 */
class RateHazardousCommodityPackagingDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateHazardousCommodityPackagingDetail';

    /**
     * Set count
     *
     *
     * Example: 20
     * @param int $count
     * @return $this
     */
    public function setCount($count)
    {
        $this->values['count'] = $count;
        return $this;
    }

    /**
     * Get count
     *
     * @return int
     */
    public function getCount()
    {
        return $this->values['count'];
    }

    /**
     * Set units
     *
     *
     * Example: Liter
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
