<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Specifies details of doc tab content.It is only applicable only with imageType as ZPLII.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $docTabContentType
 * @property ShipDocTabContentZone001 $zone001
 * @property ShipDocTabContentBarcoded $barcoded

 */
class ShipDocTabContent extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipDocTabContent';

    /**
     * Set docTabContentType
     *
     * simpleClass: ShipDocTabContentType
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
     * @param ShipDocTabContentZone001 $zone001
     * @return $this
     */
    public function setZone001(ShipDocTabContentZone001 $zone001)
    {
        $this->values['zone001'] = $zone001;
        return $this;
    }

    /**
     * Get zone001
     *
     * @return ShipDocTabContentZone001
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
     * @param ShipDocTabContentBarcoded $barcoded
     * @return $this
     */
    public function setBarcoded(ShipDocTabContentBarcoded $barcoded)
    {
        $this->values['barcoded'] = $barcoded;
        return $this;
    }

    /**
     * Get barcoded
     *
     * @return ShipDocTabContentBarcoded
     */
    public function getBarcoded()
    {
        return $this->values['barcoded'];
    }
}
