<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Specifies details of doc tab content.It is only applicable only with imageType as ZPLII
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $docTabContentType
 * @property OpenShipDocTabContentZone001 $zone001
 * @property OpenShipDocTabContentBarcoded $barcoded

 */
class OpenShipDocTabContent extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipDocTabContent';

    /**
     * Indicates the content type of the doc tab.
     *
     * simpleClass: OpenShipDocTabContentType
     * Example: BARCODED
     * @param string $docTabContentType
     * @return $this
     */
    public function setDocTabContentType($docTabContentType)
    {
        $this->values['docTabContentType'] = $docTabContentType;
        return $this;
    }

    /**
     * Get docTabContentType
     *
     * @return string
     */
    public function getDocTabContentType()
    {
        return $this->values['docTabContentType'];
    }

    /**
     * Set zone001
     *
     *
     * Example:
     * @param OpenShipDocTabContentZone001 $zone001
     * @return $this
     */
    public function setZone001(OpenShipDocTabContentZone001 $zone001)
    {
        $this->values['zone001'] = $zone001;
        return $this;
    }

    /**
     * Get zone001
     *
     * @return OpenShipDocTabContentZone001
     */
    public function getZone001()
    {
        return $this->values['zone001'];
    }

    /**
     * Set barcoded
     *
     *
     * Example:
     * @param OpenShipDocTabContentBarcoded $barcoded
     * @return $this
     */
    public function setBarcoded(OpenShipDocTabContentBarcoded $barcoded)
    {
        $this->values['barcoded'] = $barcoded;
        return $this;
    }

    /**
     * Get barcoded
     *
     * @return OpenShipDocTabContentBarcoded
     */
    public function getBarcoded()
    {
        return $this->values['barcoded'];
    }
}
