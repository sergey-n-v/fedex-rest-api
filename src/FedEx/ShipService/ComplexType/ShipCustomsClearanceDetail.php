<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * These are customs clearance details. Required for International and intra-country Shipments.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $regulatoryControls
 * @property ShipBrokerDetail[] $brokers
 * @property ShipCommercialInvoice $commercialInvoice
 * @property string $freightOnValue
 * @property ShipPayment_1 $dutiesPayment
 * @property ShipCommodity[] $commodities
 * @property boolean $isDocumentOnly
 * @property ShipRecipientCustomsId $recipientCustomsId
 * @property ShipCustomsOptionDetail $customsOption
 * @property ShipParty_1 $importerOfRecord
 * @property string $generatedDocumentLocale
 * @property ShipExportDetail $exportDetail
 * @property ShipMoney $totalCustomsValue
 * @property boolean $partiesToTransactionAreRelated
 * @property ShipCustomsDeclarationStatementDetail $declarationStatementDetail
 * @property ShipMoney $insuranceCharge

 */
class ShipCustomsClearanceDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipCustomsClearanceDetail';

    /**
     * Set regulatoryControls
     *
     * simpleClass: ShipRegulatoryControls
     * Example: NOT_IN_FREE_CIRCULATION
     * @param string $regulatoryControls
     * @return $this
     */
    public function setRegulatoryControls(array $regulatoryControls)
    {
        $this->values['regulatoryControls'] = $regulatoryControls;
        return $this;
    }

    /**
     * Get regulatoryControls
     *
     * @return string
     */
    public function getRegulatoryControls()
    {
        return $this->values['regulatoryControls'];
    }

    /**
     * Set brokers
     *
     * 
     * Example: 
     * @param ShipBrokerDetail[] $brokers
     * @return $this
     */
    public function setBrokers(array $brokers)
    {
        $this->values['brokers'] = $brokers;
        return $this;
    }

    /**
     * Get brokers
     *
     * @return ShipBrokerDetail[]
     */
    public function getBrokers()
    {
        return $this->values['brokers'];
    }

    /**
     * Set commercialInvoice
     *
     * 
     * Example: 
     * @param ShipCommercialInvoice $commercialInvoice
     * @return $this
     */
    public function setCommercialInvoice(ShipCommercialInvoice $commercialInvoice)
    {
        $this->values['commercialInvoice'] = $commercialInvoice;
        return $this;
    }

    /**
     * Get commercialInvoice
     *
     * @return ShipCommercialInvoice
     */
    public function getCommercialInvoice()
    {
        return $this->values['commercialInvoice'];
    }

    /**
     * Set freightOnValue
     *
     * simpleClass: ShipFreightOnValue
     * Example: OWN_RISK
     * @param string $freightOnValue
     * @return $this
     */
    public function setFreightOnValue($freightOnValue)
    {
        $this->values['freightOnValue'] = $freightOnValue;
        return $this;
    }

    /**
     * Get freightOnValue
     *
     * @return string
     */
    public function getFreightOnValue()
    {
        return $this->values['freightOnValue'];
    }

    /**
     * Set dutiesPayment
     *
     * 
     * Example: 
     * @param ShipPayment_1 $dutiesPayment
     * @return $this
     */
    public function setDutiesPayment(ShipPayment_1 $dutiesPayment)
    {
        $this->values['dutiesPayment'] = $dutiesPayment;
        return $this;
    }

    /**
     * Get dutiesPayment
     *
     * @return ShipPayment_1
     */
    public function getDutiesPayment()
    {
        return $this->values['dutiesPayment'];
    }

    /**
     * Set commodities
     *
     * 
     * Example: 
     * @param ShipCommodity[] $commodities
     * @return $this
     */
    public function setCommodities(array $commodities)
    {
        $this->values['commodities'] = $commodities;
        return $this;
    }

    /**
     * Get commodities
     *
     * @return ShipCommodity[]
     */
    public function getCommodities()
    {
        return $this->values['commodities'];
    }

    /**
     * Set isDocumentOnly
     *
     * 
     * Example: 1
     * @param boolean $isDocumentOnly
     * @return $this
     */
    public function setIsDocumentOnly($isDocumentOnly)
    {
        $this->values['isDocumentOnly'] = $isDocumentOnly;
        return $this;
    }

    /**
     * Get isDocumentOnly
     *
     * @return boolean
     */
    public function getIsDocumentOnly()
    {
        return $this->values['isDocumentOnly'];
    }

    /**
     * Set recipientCustomsId
     *
     * 
     * Example: 
     * @param ShipRecipientCustomsId $recipientCustomsId
     * @return $this
     */
    public function setRecipientCustomsId(ShipRecipientCustomsId $recipientCustomsId)
    {
        $this->values['recipientCustomsId'] = $recipientCustomsId;
        return $this;
    }

    /**
     * Get recipientCustomsId
     *
     * @return ShipRecipientCustomsId
     */
    public function getRecipientCustomsId()
    {
        return $this->values['recipientCustomsId'];
    }

    /**
     * Set customsOption
     *
     * 
     * Example: 
     * @param ShipCustomsOptionDetail $customsOption
     * @return $this
     */
    public function setCustomsOption(ShipCustomsOptionDetail $customsOption)
    {
        $this->values['customsOption'] = $customsOption;
        return $this;
    }

    /**
     * Get customsOption
     *
     * @return ShipCustomsOptionDetail
     */
    public function getCustomsOption()
    {
        return $this->values['customsOption'];
    }

    /**
     * Set importerOfRecord
     *
     * 
     * Example: 
     * @param ShipParty_1 $importerOfRecord
     * @return $this
     */
    public function setImporterOfRecord(ShipParty_1 $importerOfRecord)
    {
        $this->values['importerOfRecord'] = $importerOfRecord;
        return $this;
    }

    /**
     * Get importerOfRecord
     *
     * @return ShipParty_1
     */
    public function getImporterOfRecord()
    {
        return $this->values['importerOfRecord'];
    }

    /**
     * Set generatedDocumentLocale
     *
     * 
     * Example: en_US
     * @param string $generatedDocumentLocale
     * @return $this
     */
    public function setGeneratedDocumentLocale($generatedDocumentLocale)
    {
        $this->values['generatedDocumentLocale'] = $generatedDocumentLocale;
        return $this;
    }

    /**
     * Get generatedDocumentLocale
     *
     * @return string
     */
    public function getGeneratedDocumentLocale()
    {
        return $this->values['generatedDocumentLocale'];
    }

    /**
     * Set exportDetail
     *
     * 
     * Example: 
     * @param ShipExportDetail $exportDetail
     * @return $this
     */
    public function setExportDetail(ShipExportDetail $exportDetail)
    {
        $this->values['exportDetail'] = $exportDetail;
        return $this;
    }

    /**
     * Get exportDetail
     *
     * @return ShipExportDetail
     */
    public function getExportDetail()
    {
        return $this->values['exportDetail'];
    }

    /**
     * Set totalCustomsValue
     *
     * 
     * Example: 
     * @param ShipMoney $totalCustomsValue
     * @return $this
     */
    public function setTotalCustomsValue(ShipMoney $totalCustomsValue)
    {
        $this->values['totalCustomsValue'] = $totalCustomsValue;
        return $this;
    }

    /**
     * Get totalCustomsValue
     *
     * @return ShipMoney
     */
    public function getTotalCustomsValue()
    {
        return $this->values['totalCustomsValue'];
    }

    /**
     * Set partiesToTransactionAreRelated
     *
     * 
     * Example: 
     * @param boolean $partiesToTransactionAreRelated
     * @return $this
     */
    public function setPartiesToTransactionAreRelated($partiesToTransactionAreRelated)
    {
        $this->values['partiesToTransactionAreRelated'] = $partiesToTransactionAreRelated;
        return $this;
    }

    /**
     * Get partiesToTransactionAreRelated
     *
     * @return boolean
     */
    public function getPartiesToTransactionAreRelated()
    {
        return $this->values['partiesToTransactionAreRelated'];
    }

    /**
     * Set declarationStatementDetail
     *
     * 
     * Example: 
     * @param ShipCustomsDeclarationStatementDetail $declarationStatementDetail
     * @return $this
     */
    public function setDeclarationStatementDetail(ShipCustomsDeclarationStatementDetail $declarationStatementDetail)
    {
        $this->values['declarationStatementDetail'] = $declarationStatementDetail;
        return $this;
    }

    /**
     * Get declarationStatementDetail
     *
     * @return ShipCustomsDeclarationStatementDetail
     */
    public function getDeclarationStatementDetail()
    {
        return $this->values['declarationStatementDetail'];
    }

    /**
     * Set insuranceCharge
     *
     * 
     * Example: 
     * @param ShipMoney $insuranceCharge
     * @return $this
     */
    public function setInsuranceCharge(ShipMoney $insuranceCharge)
    {
        $this->values['insuranceCharge'] = $insuranceCharge;
        return $this;
    }

    /**
     * Get insuranceCharge
     *
     * @return ShipMoney
     */
    public function getInsuranceCharge()
    {
        return $this->values['insuranceCharge'];
    }
}
