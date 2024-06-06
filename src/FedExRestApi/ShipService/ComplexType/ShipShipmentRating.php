<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * All shipment-level rating data for this shipment, which may include data for multiple rate types.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $actualRateType
 * @property ShipShipmentRateDetail[] $shipmentRateDetails

 */
class ShipShipmentRating extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipShipmentRating';

    /**
     * Set actualRateType
     *
     *
     * Example: PAYOR_LIST_SHIPMENT
     * @param string $actualRateType
     * @return $this
     */
    public function setActualRateType($actualRateType)
    {
        $this->values['actualRateType'] = $actualRateType;
        return $this;
    }

    /**
     * Get actualRateType
     *
     * @return string
     */
    public function getActualRateType()
    {
        return $this->values['actualRateType'];
    }

    /**
     * Set shipmentRateDetails
     *
     *
     * Example:
     * @param ShipShipmentRateDetail[] $shipmentRateDetails
     * @return $this
     */
    public function setShipmentRateDetails(array $shipmentRateDetails)
    {
        $this->values['shipmentRateDetails'] = $shipmentRateDetails;
        return $this;
    }

    /**
     * Get shipmentRateDetails
     *
     * @return ShipShipmentRateDetail[]
     */
    public function getShipmentRateDetails()
    {
        return $this->values['shipmentRateDetails'];
    }
}
