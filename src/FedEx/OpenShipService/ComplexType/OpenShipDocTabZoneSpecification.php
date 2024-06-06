<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

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
class OpenShipDocTabZoneSpecification extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipDocTabZoneSpecification';

    /**
     * It is a non-negative integer that represents the portion of doc-tab in a label.<br>Example: 1
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
     * Indicates the parameter name in the header for the doc tab zone. The maximum charater limit is 7.<br>Example:  WHT
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
     * Indicate the path request/reply element to be printed on doc tab.<br>Example: <ul><li> REQUEST/PACKAGE/weight/Value</li><li> REQUEST/PACKAGE/weight/Value</li><li> REQUEST/PACKAGE/InsuredValue/Amount</li><li> REQUEST/SHIPMENT/SpecialServicesRequested/CodDetail/CodCollectionAmount/Amount</li><li>REQUEST/SHIPMENT/Shipper/Address/StreetLines[1]CLIENT/MeterNumber</li><li> TRANSACTION/CustomerTransactionId</li><li> REQUEST/SHIPMENT/TotalWeight/Value</li><li> REQUEST/SHIPMENT/ShipTimestamp</li><li> REQUEST/SHIPMENT/Recipient/Contact/PersonName</li><li> REPLY/SHIPMENT/OperationalDetail/DeliveryDate</li><li>  REPLY/SHIPMENT/RATES/ACTUAL/totalBaseCharge/Amount</li><li> REPLY/SHIPMENT/RATES/ACTUAL/totalFreightDiscounts/Amount</li><li>  REPLY/SHIPMENT/RATES/ACTUAL/totalSurcharges/Amount</li><li> REPLY/SHIPMENT/RATES/ACTUAL/totalNetCharge/Amount</li><li> REPLY/SHIPMENT/RATES/PAYOR_ACCOUNT_PACKAGE/totalSurcharges/Amount</li></ul>
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
     * Indicates the actual data to be printed in the label<br>
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
     * Indicates the justification format for the string.
     *
     * simpleClass: OpenShipJustification
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
