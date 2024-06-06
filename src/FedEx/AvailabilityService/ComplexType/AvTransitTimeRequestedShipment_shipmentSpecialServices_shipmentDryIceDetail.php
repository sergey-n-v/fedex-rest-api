<?php
namespace FedEx\AvailabilityService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Use this object to indicate package count with weight for this shipment containing dry ice. Dry ice is supported in both shipment level and package level services.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property AvTransitTimeRequestedShipment_shipmentSpecialServices_shipmentDryIceDetail_totalWeight $totalWeight
 * @property int $packageCount

 */
class AvTransitTimeRequestedShipment_shipmentSpecialServices_shipmentDryIceDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvTransitTimeRequestedShipment_shipmentSpecialServices_shipmentDryIceDetail';

    /**
     * Set totalWeight
     *
     * 
     * Example: 
     * @param AvTransitTimeRequestedShipment_shipmentSpecialServices_shipmentDryIceDetail_totalWeight $totalWeight
     * @return $this
     */
    public function setTotalWeight(AvTransitTimeRequestedShipment_shipmentSpecialServices_shipmentDryIceDetail_totalWeight $totalWeight)
    {
        $this->values['totalWeight'] = $totalWeight;
        return $this;
    }

    /**
     * Get totalWeight
     *
     * @return AvTransitTimeRequestedShipment_shipmentSpecialServices_shipmentDryIceDetail_totalWeight
     */
    public function getTotalWeight()
    {
        return $this->values['totalWeight'];
    }

    /**
     * Specify dry ice shipment package count.<br>Example: 12
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
