<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * All shipment-level rating data for this shipment, which may include data for multiple rate types.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $actualRateType
 * @property OpenShipShipmentRateDetail[] $shipmentRateDetails

 */
class OpenShipShipmentRating extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipShipmentRating';

    /**
     * This rate type identifies which entry in the following array is considered as presenting the "actual" rates for the shipment.<br>Example: PAYOR_LIST_SHIPMENT
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
     * Each element of this field provides shipment-level rate totals for a specific rate type.
     *
     *
     * Example:
     * @param OpenShipShipmentRateDetail[] $shipmentRateDetails
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
     * @return OpenShipShipmentRateDetail[]
     */
    public function getShipmentRateDetails()
    {
        return $this->values['shipmentRateDetails'];
    }
}
