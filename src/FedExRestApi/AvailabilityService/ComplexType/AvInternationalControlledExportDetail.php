<?php
namespace FedExRestApi\AvailabilityService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Use this object to specify International Controlled Export shipment Details.<br>Example: WAREHOUSE_WITHDRAWAL.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $type

 */
class AvInternationalControlledExportDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvInternationalControlledExportDetail';

    /**
     * Indicate International Controlled Export Type.
     *
     * simpleClass: AvType
     * Example: DEA_036
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
