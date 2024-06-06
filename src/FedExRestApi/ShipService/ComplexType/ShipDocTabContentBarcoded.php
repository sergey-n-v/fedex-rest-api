<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * It is a doc tab content type which is in barcoded format.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $symbology
 * @property ShipDocTabZoneSpecification $specification

 */
class ShipDocTabContentBarcoded extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipDocTabContentBarcoded';

    /**
     * Set symbology
     *
     * simpleClass: ShipSymbology
     * Example: UCC128
     * @param string $symbology
     * @return $this
     */
    public function setSymbology($symbology)
    {
        $this->values['symbology'] = $symbology;
        return $this;
    }

    /**
     * Get symbology
     *
     * @return string
     */
    public function getSymbology()
    {
        return $this->values['symbology'];
    }

    /**
     * Set specification
     *
     *
     * Example:
     * @param ShipDocTabZoneSpecification $specification
     * @return $this
     */
    public function setSpecification(ShipDocTabZoneSpecification $specification)
    {
        $this->values['specification'] = $specification;
        return $this;
    }

    /**
     * Get specification
     *
     * @return ShipDocTabZoneSpecification
     */
    public function getSpecification()
    {
        return $this->values['specification'];
    }
}
