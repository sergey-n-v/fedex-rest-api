<?php
namespace FedExRestApi\RateService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Details for the Return Shipment.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $returnType

 */
class RateShipmentSpecialServicesRequested_returnShipmentDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateShipmentSpecialServicesRequested_returnShipmentDetail';

    /**
     * Set returnType
     *
     * simpleClass: RateReturnType
     * Example: PRINT_RETURN_LABEL
     * @param string $returnType
     * @return $this
     */
    public function setReturnType($returnType)
    {
        $this->values['returnType'] = $returnType;
        return $this;
    }

    /**
     * Get returnType
     *
     * @return string
     */
    public function getReturnType()
    {
        return $this->values['returnType'];
    }
}
