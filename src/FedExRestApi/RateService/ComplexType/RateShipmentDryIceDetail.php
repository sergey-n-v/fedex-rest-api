<?php
namespace FedExRestApi\RateService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Use this object to indicate package count with weight for this shipment containing dry ice. Dry ice is supported in both shipment level and package level services.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property RateWeight_1_2 $totalWeight
 * @property int $packageCount

 */
class RateShipmentDryIceDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateShipmentDryIceDetail';

    /**
     * Set totalWeight
     *
     *
     * Example:
     * @param RateWeight_1_2 $totalWeight
     * @return $this
     */
    public function setTotalWeight(RateWeight_1_2 $totalWeight)
    {
        $this->values['totalWeight'] = $totalWeight;
        return $this;
    }

    /**
     * Get totalWeight
     *
     * @return RateWeight_1_2
     */
    public function getTotalWeight()
    {
        return $this->values['totalWeight'];
    }

    /**
     * Set packageCount
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
