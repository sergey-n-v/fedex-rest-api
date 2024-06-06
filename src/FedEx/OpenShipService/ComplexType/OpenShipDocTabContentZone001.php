<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Indicate the doc tab specification for different zones on the label. The specification includes zone number, header and data field to be displayed on the label.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property OpenShipDocTabZoneSpecification[] $docTabZoneSpecifications

 */
class OpenShipDocTabContentZone001 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipDocTabContentZone001';

    /**
     * Indicate the doc tab specifications for the individual doc tab zone on the label.
     *
     * 
     * Example: 
     * @param OpenShipDocTabZoneSpecification[] $docTabZoneSpecifications
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
     * @return OpenShipDocTabZoneSpecification[]
     */
    public function getDocTabZoneSpecifications()
    {
        return $this->values['docTabZoneSpecifications'];
    }
}
