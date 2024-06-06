<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Indicates the doc tab zone specification.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property int $zoneNumber
 * @property string $header
 * @property string $dataField
 * @property string $literalValue
 * @property string $justification

 */
class ShipDocTabZoneSpecification extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipDocTabZoneSpecification';

    /**
     * Set zoneNumber
     *
     *
     * Example:
     * @param int $zoneNumber
     * @return $this
     */
    public function setZoneNumber($zoneNumber)
    {
        $this->values['zoneNumber'] = $zoneNumber;
        return $this;
    }

    /**
     * Get zoneNumber
     *
     * @return int
     */
    public function getZoneNumber()
    {
        return $this->values['zoneNumber'];
    }

    /**
     * Set header
     *
     *
     * Example:
     * @param string $header
     * @return $this
     */
    public function setHeader($header)
    {
        $this->values['header'] = $header;
        return $this;
    }

    /**
     * Get header
     *
     * @return string
     */
    public function getHeader()
    {
        return $this->values['header'];
    }

    /**
     * Set dataField
     *
     *
     * Example:
     * @param string $dataField
     * @return $this
     */
    public function setDataField($dataField)
    {
        $this->values['dataField'] = $dataField;
        return $this;
    }

    /**
     * Get dataField
     *
     * @return string
     */
    public function getDataField()
    {
        return $this->values['dataField'];
    }

    /**
     * Set literalValue
     *
     *
     * Example:
     * @param string $literalValue
     * @return $this
     */
    public function setLiteralValue($literalValue)
    {
        $this->values['literalValue'] = $literalValue;
        return $this;
    }

    /**
     * Get literalValue
     *
     * @return string
     */
    public function getLiteralValue()
    {
        return $this->values['literalValue'];
    }

    /**
     * Set justification
     *
     * simpleClass: ShipJustification
     * Example: RIGHT
     * @param string $justification
     * @return $this
     */
    public function setJustification($justification)
    {
        $this->values['justification'] = $justification;
        return $this;
    }

    /**
     * Get justification
     *
     * @return string
     */
    public function getJustification()
    {
        return $this->values['justification'];
    }
}
