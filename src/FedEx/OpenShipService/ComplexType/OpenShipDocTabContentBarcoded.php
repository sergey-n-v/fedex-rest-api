<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * It is a doc tab content type which is in barcoded format.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $symbology
 * @property OpenShipDocTabZoneSpecification $specification

 */
class OpenShipDocTabContentBarcoded extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipDocTabContentBarcoded';

    /**
     * Indicates the type of barcode symbology used on FedEx documents and labels.
     *
     * simpleClass: OpenShipSymbology
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
     * @param OpenShipDocTabZoneSpecification $specification
     * @return $this
     */
    public function setSpecification(OpenShipDocTabZoneSpecification $specification)
    {
        $this->values['specification'] = $specification;
        return $this;
    }

    /**
     * Get specification
     *
     * @return OpenShipDocTabZoneSpecification
     */
    public function getSpecification()
    {
        return $this->values['specification'];
    }
}
