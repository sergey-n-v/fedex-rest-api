<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Indicate the doc tab specification for different zones on the label. The specification includes zone number, header and data field to be displayed on the label.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property ShipDocTabZoneSpecification[] $docTabZoneSpecifications

 */
class ShipDocTabContentZone001 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipDocTabContentZone001';

    /**
     * Set docTabZoneSpecifications
     *
     *
     * Example:
     * @param ShipDocTabZoneSpecification[] $docTabZoneSpecifications
     * @return $this
     */
    public function setDocTabZoneSpecifications(array $docTabZoneSpecifications)
    {
        $this->values['docTabZoneSpecifications'] = $docTabZoneSpecifications;
        return $this;
    }

    /**
     * Get docTabZoneSpecifications
     *
     * @return ShipDocTabZoneSpecification[]
     */
    public function getDocTabZoneSpecifications()
    {
        return $this->values['docTabZoneSpecifications'];
    }
}
