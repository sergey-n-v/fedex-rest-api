<?php
namespace FedExRestApi\AvailabilityService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Number of packages in this shipment which contain dry ice.  The total weight of the dry ice for this shipment

 Both are required to indicate dry ice
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property AvWeight1 $totalWeight
 * @property int $packageCount

 */
class AvShipmentDryIceDetail1 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvShipmentDryIceDetail1';

    /**
     * Set totalWeight
     *
     *
     * Example:
     * @param AvWeight1 $totalWeight
     * @return $this
     */
    public function setTotalWeight(AvWeight1 $totalWeight)
    {
        $this->values['totalWeight'] = $totalWeight;
        return $this;
    }

    /**
     * Get totalWeight
     *
     * @return AvWeight1
     */
    public function getTotalWeight()
    {
        return $this->values['totalWeight'];
    }

    /**
     * Indicates the total number of packages in the shipment that contain dry ice.<br>Example: 12
     *
     *
     * Example: 12
     * @param int $packageCount
     * @return $this
     */
    public function setPackageCount($packageCount)
    {
        $this->values['packageCount'] = $packageCount;
        return $this;
    }

    /**
     * Get packageCount
     *
     * @return int
     */
    public function getPackageCount()
    {
        return $this->values['packageCount'];
    }
}
