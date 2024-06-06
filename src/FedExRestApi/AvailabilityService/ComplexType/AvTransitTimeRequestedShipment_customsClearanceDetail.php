<?php
namespace FedExRestApi\AvailabilityService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * This is Customs clearance data associated with the shipment. This is used for both international and intra-country shipping and rating. Customs commodity data is required for international and intra-country rating.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property AvTransitTimeCommodity[] $commodities

 */
class AvTransitTimeRequestedShipment_customsClearanceDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvTransitTimeRequestedShipment_customsClearanceDetail';

    /**
     * Specify the commodity details.
     *
     *
     * Example:
     * @param AvTransitTimeCommodity[] $commodities
     * @return $this
     */
    public function setCommodities(array $commodities)
    {
        $this->values['commodities'] = $commodities;
        return $this;
    }

    /**
     * Get commodities
     *
     * @return AvTransitTimeCommodity[]
     */
    public function getCommodities()
    {
        return $this->values['commodities'];
    }
}
