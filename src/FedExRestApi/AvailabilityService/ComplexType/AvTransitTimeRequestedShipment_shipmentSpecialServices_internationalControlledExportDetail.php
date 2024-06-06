<?php
namespace FedExRestApi\AvailabilityService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Use this object to specify International Controlled Export shipment Details.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $type

 */
class AvTransitTimeRequestedShipment_shipmentSpecialServices_internationalControlledExportDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvTransitTimeRequestedShipment_shipmentSpecialServices_internationalControlledExportDetail';

    /**
     * Indicate International Controlled Export Type.<br>Example: WAREHOUSE_WITHDRAWAL
     *
     * simpleClass: AvType
     * Example: DSP_LICENSE_AGREEMENT
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['type'] = $type;
        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->values['type'];
    }
}
