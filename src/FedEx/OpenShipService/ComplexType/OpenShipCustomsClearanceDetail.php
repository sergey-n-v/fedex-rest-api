<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * These are customs clearance details. <br>Required for International and intra-country Shipments.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $regulatoryControls
 * @property OpenShipBrokerDetail[] $brokers
 * @property OpenShipCommercialInvoice $commercialInvoice
 * @property string $freightOnValue
 * @property OpenShipPayment_1 $dutiesPayment
 * @property OpenShipCommodity[] $commodities
 * @property boolean $isDocumentOnly
 * @property OpenShipRecipientCustomsId $recipientCustomsId
 * @property OpenShipCustomsOptionDetail $customsOption
 * @property OpenShipParty_1 $importerOfRecord
 * @property string $generatedDocumentLocale
 * @property OpenShipExportDetail $exportDetail
 * @property OpenShipMoney $totalCustomsValue
 * @property boolean $partiesToTransactionAreRelated
 * @property OpenShipCustomsDeclarationStatementDetail $declarationStatementDetail
 * @property OpenShipMoney $insuranceCharge

 */
class OpenShipCustomsClearanceDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipCustomsClearanceDetail';

    /**
     * These are the regulatory controls applicable to the shipment.
     *
     * simpleClass: OpenShipRegulatoryControls
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
     * Specify broker information. Use this option only if you are using Broker Select Option for your shipment. A country code must be specified in addition to one of the following address items: postal code, city, or location id.
     *
     * 
     * Example: 
     * @param OpenShipBrokerDetail[] $brokers
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
     * @return OpenShipBrokerDetail[]
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
     * @param OpenShipCommercialInvoice $commercialInvoice
     * @return $this
     */
    public function setCommercialInvoice(OpenShipCommercialInvoice $commercialInvoice)
    {
        $this->values['commercialInvoice'] = $commercialInvoice;
        return $this;
    }

    /**
     * Get commercialInvoice
     *
     * @return OpenShipCommercialInvoice
     */
    public function getCommercialInvoice()
    {
        return $this->values['commercialInvoice'];
    }

    /**
     * Specify the risk owner for the Freight shipment.
     *
     * simpleClass: OpenShipFreightOnValue
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
     * @param OpenShipPayment_1 $dutiesPayment
     * @return $this
     */
    public function setDutiesPayment(OpenShipPayment_1 $dutiesPayment)
    {
        $this->values['dutiesPayment'] = $dutiesPayment;
        return $this;
    }

    /**
     * Get dutiesPayment
     *
     * @return OpenShipPayment_1
     */
    public function getDutiesPayment()
    {
        return $this->values['dutiesPayment'];
    }

    /**
     * Indicates the details about the dutiable packages. Maximum upto 999 commodities per shipment.
     *
     * 
     * Example: 
     * @param OpenShipCommodity[] $commodities
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
     * @return OpenShipCommodity[]
     */
    public function getCommodities()
    {
        return $this->values['commodities'];
    }

    /**
     * Used to specify if a shipment is document shipment or not. Used only for International Express document shipments. Default value is false.
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
     * @param OpenShipRecipientCustomsId $recipientCustomsId
     * @return $this
     */
    public function setRecipientCustomsId(OpenShipRecipientCustomsId $recipientCustomsId)
    {
        $this->values['recipientCustomsId'] = $recipientCustomsId;
        return $this;
    }

    /**
     * Get recipientCustomsId
     *
     * @return OpenShipRecipientCustomsId
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
     * @param OpenShipCustomsOptionDetail $customsOption
     * @return $this
     */
    public function setCustomsOption(OpenShipCustomsOptionDetail $customsOption)
    {
        $this->values['customsOption'] = $customsOption;
        return $this;
    }

    /**
     * Get customsOption
     *
     * @return OpenShipCustomsOptionDetail
     */
    public function getCustomsOption()
    {
        return $this->values['customsOption'];
    }

    /**
     * The descriptive data for the importer of Record for the shipment and their physical address, contact and account number information.
     *
     * 
     * Example: 
     * @param OpenShipParty_1 $importerOfRecord
     * @return $this
     */
    public function setImporterOfRecord($importerOfRecord)
    {
        $this->values['importerOfRecord'] = $importerOfRecord;
        return $this;
    }

    /**
     * Get importerOfRecord
     *
     * @return OpenShipParty_1
     */
    public function getImporterOfRecord()
    {
        return $this->values['importerOfRecord'];
    }

    /**
     * This is the locale for generated document.<br>Example: en_US<br><a onclick='loadDocReference("locales")'>click here to see Locales</a><br>Note: If the locale is left blank or an invalid locale is entered, an error message is returned in response.
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
     * @param OpenShipExportDetail $exportDetail
     * @return $this
     */
    public function setExportDetail(OpenShipExportDetail $exportDetail)
    {
        $this->values['exportDetail'] = $exportDetail;
        return $this;
    }

    /**
     * Get exportDetail
     *
     * @return OpenShipExportDetail
     */
    public function getExportDetail()
    {
        return $this->values['exportDetail'];
    }

    /**
     * This is the total customs value.
     *
     * 
     * Example: 
     * @param OpenShipMoney $totalCustomsValue
     * @return $this
     */
    public function setTotalCustomsValue($totalCustomsValue)
    {
        $this->values['totalCustomsValue'] = $totalCustomsValue;
        return $this;
    }

    /**
     * Get totalCustomsValue
     *
     * @return OpenShipMoney
     */
    public function getTotalCustomsValue()
    {
        return $this->values['totalCustomsValue'];
    }

    /**
     * Specify if the transacting parties are related.
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
     * @param OpenShipCustomsDeclarationStatementDetail $declarationStatementDetail
     * @return $this
     */
    public function setDeclarationStatementDetail(OpenShipCustomsDeclarationStatementDetail $declarationStatementDetail)
    {
        $this->values['declarationStatementDetail'] = $declarationStatementDetail;
        return $this;
    }

    /**
     * Get declarationStatementDetail
     *
     * @return OpenShipCustomsDeclarationStatementDetail
     */
    public function getDeclarationStatementDetail()
    {
        return $this->values['declarationStatementDetail'];
    }

    /**
     * Specify insurance charges if applicable. <br><i>Note: FedEx does not provide insurance of any kind.</i>
     *
     * 
     * Example: 
     * @param OpenShipMoney $insuranceCharge
     * @return $this
     */
    public function setInsuranceCharge($insuranceCharge)
    {
        $this->values['insuranceCharge'] = $insuranceCharge;
        return $this;
    }

    /**
     * Get insuranceCharge
     *
     * @return OpenShipMoney
     */
    public function getInsuranceCharge()
    {
        return $this->values['insuranceCharge'];
    }
}
