<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This is the shipment level COD detail.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property ShipCODTransportationChargesDetail $addTransportationChargesDetail
 * @property ShipParty_1 $codRecipient
 * @property string $remitToName
 * @property string $codCollectionType
 * @property ShipContactAndAddress $financialInstitutionContactAndAddress
 * @property ShipMoney $codCollectionAmount
 * @property string $returnReferenceIndicatorType
 * @property ShipMoney $shipmentCodAmount

 */
class ShipShipmentCODDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipShipmentCODDetail';

    /**
     * Set addTransportationChargesDetail
     *
     * 
     * Example: 
     * @param ShipCODTransportationChargesDetail $addTransportationChargesDetail
     * @return $this
     */
    public function setAddTransportationChargesDetail(ShipCODTransportationChargesDetail $addTransportationChargesDetail)
    {
        $this->values['addTransportationChargesDetail'] = $addTransportationChargesDetail;
        return $this;
    }

    /**
     * Get addTransportationChargesDetail
     *
     * @return ShipCODTransportationChargesDetail
     */
    public function getAddTransportationChargesDetail()
    {
        return $this->values['addTransportationChargesDetail'];
    }

    /**
     * Set codRecipient
     *
     * 
     * Example: 
     * @param ShipParty_1 $codRecipient
     * @return $this
     */
    public function setCodRecipient(ShipParty_1 $codRecipient)
    {
        $this->values['codRecipient'] = $codRecipient;
        return $this;
    }

    /**
     * Get codRecipient
     *
     * @return ShipParty_1
     */
    public function getCodRecipient()
    {
        return $this->values['codRecipient'];
    }

    /**
     * Set remitToName
     *
     * 
     * Example: remitToName
     * @param string $remitToName
     * @return $this
     */
    public function setRemitToName($remitToName)
    {
        $this->values['remitToName'] = $remitToName;
        return $this;
    }

    /**
     * Get remitToName
     *
     * @return string
     */
    public function getRemitToName()
    {
        return $this->values['remitToName'];
    }

    /**
     * Set codCollectionType
     *
     * simpleClass: ShipCodCollectionType
     * Example: 
     * @param string $codCollectionType
     * @return $this
     */
    public function setCodCollectionType($codCollectionType)
    {
        $this->values['codCollectionType'] = $codCollectionType;
        return $this;
    }

    /**
     * Get codCollectionType
     *
     * @return string
     */
    public function getCodCollectionType()
    {
        return $this->values['codCollectionType'];
    }

    /**
     * Set financialInstitutionContactAndAddress
     *
     * 
     * Example: 
     * @param ShipContactAndAddress $financialInstitutionContactAndAddress
     * @return $this
     */
    public function setFinancialInstitutionContactAndAddress(ShipContactAndAddress $financialInstitutionContactAndAddress)
    {
        $this->values['financialInstitutionContactAndAddress'] = $financialInstitutionContactAndAddress;
        return $this;
    }

    /**
     * Get financialInstitutionContactAndAddress
     *
     * @return ShipContactAndAddress
     */
    public function getFinancialInstitutionContactAndAddress()
    {
        return $this->values['financialInstitutionContactAndAddress'];
    }

    /**
     * Set codCollectionAmount
     *
     * 
     * Example: 
     * @param ShipMoney $codCollectionAmount
     * @return $this
     */
    public function setCodCollectionAmount(ShipMoney $codCollectionAmount)
    {
        $this->values['codCollectionAmount'] = $codCollectionAmount;
        return $this;
    }

    /**
     * Get codCollectionAmount
     *
     * @return ShipMoney
     */
    public function getCodCollectionAmount()
    {
        return $this->values['codCollectionAmount'];
    }

    /**
     * Set returnReferenceIndicatorType
     *
     * simpleClass: ShipReturnReferenceIndicatorType
     * Example: 
     * @param string $returnReferenceIndicatorType
     * @return $this
     */
    public function setReturnReferenceIndicatorType($returnReferenceIndicatorType)
    {
        $this->values['returnReferenceIndicatorType'] = $returnReferenceIndicatorType;
        return $this;
    }

    /**
     * Get returnReferenceIndicatorType
     *
     * @return string
     */
    public function getReturnReferenceIndicatorType()
    {
        return $this->values['returnReferenceIndicatorType'];
    }

    /**
     * Set shipmentCodAmount
     *
     * 
     * Example: 
     * @param ShipMoney $shipmentCodAmount
     * @return $this
     */
    public function setShipmentCodAmount(ShipMoney $shipmentCodAmount)
    {
        $this->values['shipmentCodAmount'] = $shipmentCodAmount;
        return $this;
    }

    /**
     * Get shipmentCodAmount
     *
     * @return ShipMoney
     */
    public function getShipmentCodAmount()
    {
        return $this->values['shipmentCodAmount'];
    }
}
