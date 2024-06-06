<?php
namespace FedEx\AvailabilityService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Conditional

Details specific to a FedEx Freight LTL shipment (i.e. FedEx Priority and Economy Freight). If freight shipment detail is applicable, then the following fields are required. 'aliasID', 'clientDiscountPercent', 'fedExFreightAccountNumber', 'fedExFreightBillingContactAndAddress', 'lineItem', and 'role'.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property AvShipmentDimensions $shipmentDimensions
 * @property boolean $alternateBilling
 * @property AvFreightShipmentLineItem[] $lineItem
 * @property string $role
 * @property float $clientDiscountPercent
 * @property AvFedExFreightBillingContactAndAddress $fedExFreightBillingContactAndAddress
 * @property string $aliasID
 * @property AvFreightShipmentLiabilityCoverageDetail $liabilityCoverageDetail
 * @property AvFedExFreightAccountNumber $fedExFreightAccountNumber
 * @property int $totalHandlingUnits

 */
class AvFreightShipmentDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvFreightShipmentDetail';

    /**
     * Set shipmentDimensions
     *
     * 
     * Example: 
     * @param AvDimensions1|AvShipmentDimensions $shipmentDimensions
     * @return $this
     */
    public function setShipmentDimensions($shipmentDimensions)
    {
        $this->values['shipmentDimensions'] = $shipmentDimensions;
        return $this;
    }

    /**
     * Get shipmentDimensions
     *
     * @return AvDimensions1|AvShipmentDimensions
     */
    public function getShipmentDimensions()
    {
        return $this->values['shipmentDimensions'];
    }

    /**
     * Optional : Designates a bill-to address <br> Example: true
     *
     * simpleClass: AvAlternateBilling
     * Example: 1
     * @param boolean $alternateBilling
     * @return $this
     */
    public function setAlternateBilling($alternateBilling)
    {
        $this->values['alternateBilling'] = $alternateBilling;
        return $this;
    }

    /**
     * Get alternateBilling
     *
     * @return boolean
     */
    public function getAlternateBilling()
    {
        return $this->values['alternateBilling'];
    }

    /**
     * Required

Class/weight pairs and associated details for a Freight shipment
     *
     * 
     * Example: 
     * @param AvFreightShipmentLineItem[] $lineItem
     * @return $this
     */
    public function setLineItem(array $lineItem)
    {
        $this->values['lineItem'] = $lineItem;
        return $this;
    }

    /**
     * Get lineItem
     *
     * @return AvFreightShipmentLineItem[]
     */
    public function getLineItem()
    {
        return $this->values['lineItem'];
    }

    /**
     * Required <br> Indicates the role of the party submitting the transaction <br> Example: SHIPPER
     *
     * simpleClass: AvRole
     * Example: SHIPPER
     * @param string $role
     * @return $this
     */
    public function setRole($role)
    {
        $this->values['role'] = $role;
        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->values['role'];
    }

    /**
     * Conditional <br> This is only used for anonymous rate requests <br> Example: 10.5
     *
     * 
     * Example: 10.5
     * @param float $clientDiscountPercent
     * @return $this
     */
    public function setClientDiscountPercent($clientDiscountPercent)
    {
        $this->values['clientDiscountPercent'] = $clientDiscountPercent;
        return $this;
    }

    /**
     * Get clientDiscountPercent
     *
     * @return float
     */
    public function getClientDiscountPercent()
    {
        return $this->values['clientDiscountPercent'];
    }

    /**
     * Set fedExFreightBillingContactAndAddress
     *
     * 
     * Example: 
     * @param AvFedExFreightBillingContactAndAddress1|AvFedExFreightBillingContactAndAddress $fedExFreightBillingContactAndAddress
     * @return $this
     */
    public function setFedExFreightBillingContactAndAddress($fedExFreightBillingContactAndAddress)
    {
        $this->values['fedExFreightBillingContactAndAddress'] = $fedExFreightBillingContactAndAddress;
        return $this;
    }

    /**
     * Get fedExFreightBillingContactAndAddress
     *
     * @return AvFedExFreightBillingContactAndAddress1|AvFedExFreightBillingContactAndAddress
     */
    public function getFedExFreightBillingContactAndAddress()
    {
        return $this->values['fedExFreightBillingContactAndAddress'];
    }

    /**
     * Conditional. <br> This is bill to alias identifier.
     *
     * 
     * Example: 36839
     * @param string $aliasID
     * @return $this
     */
    public function setAliasID($aliasID)
    {
        $this->values['aliasID'] = $aliasID;
        return $this;
    }

    /**
     * Get aliasID
     *
     * @return string
     */
    public function getAliasID()
    {
        return $this->values['aliasID'];
    }

    /**
     * Set liabilityCoverageDetail
     *
     * 
     * Example: 
     * @param AvLiabilityCoverageDetail $liabilityCoverageDetail
     * @return $this
     */
    public function setLiabilityCoverageDetail($liabilityCoverageDetail)
    {
        $this->values['liabilityCoverageDetail'] = $liabilityCoverageDetail;
        return $this;
    }

    /**
     * Get liabilityCoverageDetail
     *
     * @return AvLiabilityCoverageDetail
     */
    public function getLiabilityCoverageDetail()
    {
        return $this->values['liabilityCoverageDetail'];
    }

    /**
     * Set fedExFreightAccountNumber
     *
     * 
     * Example: 
     * @param AvAccountNumber1 $fedExFreightAccountNumber
     * @return $this
     */
    public function setFedExFreightAccountNumber($fedExFreightAccountNumber)
    {
        $this->values['fedExFreightAccountNumber'] = $fedExFreightAccountNumber;
        return $this;
    }

    /**
     * Get fedExFreightAccountNumber
     *
     * @return AvAccountNumber1
     */
    public function getFedExFreightAccountNumber()
    {
        return $this->values['fedExFreightAccountNumber'];
    }

    /**
     * Optional

Total number of individual handling units in the entire shipment (for unit pricing). May not be negative
     *
     * 
     * Example: 
     * @param int $totalHandlingUnits
     * @return $this
     */
    public function setTotalHandlingUnits($totalHandlingUnits)
    {
        $this->values['totalHandlingUnits'] = $totalHandlingUnits;
        return $this;
    }

    /**
     * Get totalHandlingUnits
     *
     * @return int
     */
    public function getTotalHandlingUnits()
    {
        return $this->values['totalHandlingUnits'];
    }
}
