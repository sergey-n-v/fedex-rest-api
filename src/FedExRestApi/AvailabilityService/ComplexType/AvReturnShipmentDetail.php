<?php
namespace FedExRestApi\AvailabilityService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Indicates the return shipment.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $returnType

 */
class AvReturnShipmentDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvReturnShipmentDetail';

    /**
     * This is the return Type. Required to be set to PRINT_RETURN_LABEL for printed return label shipments. For email return label shipments returnType must be set to PENDING and pendingShipmentDetail must be set to EMAIL.
     *
     * simpleClass: AvReturnType
     * Example: PENDING
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
