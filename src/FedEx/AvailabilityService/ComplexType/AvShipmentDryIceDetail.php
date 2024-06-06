<?php
namespace FedEx\AvailabilityService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * AvShipmentDryIceDetail
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property AvShipmentDryIceDetail_totalWeight $totalWeight
 * @property int $packageCount

 */
class AvShipmentDryIceDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvShipmentDryIceDetail';

    /**
     * Set totalWeight
     *
     * 
     * Example: 
     * @param AvShipmentDryIceDetail_totalWeight $totalWeight
     * @return $this
     */
    public function setTotalWeight(AvShipmentDryIceDetail_totalWeight $totalWeight)
    {
        $this->values['totalWeight'] = $totalWeight;
        return $this;
    }

    /**
     * Get totalWeight
     *
     * @return AvShipmentDryIceDetail_totalWeight
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
