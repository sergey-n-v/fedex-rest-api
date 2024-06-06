<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This is the shipment level COD detail.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property OpenShipCODTransportationChargesDetail $addTransportationChargesDetail
 * @property OpenShipParty_1 $codRecipient
 * @property string $remitToName
 * @property string $codCollectionType
 * @property OpenShipContactAndAddress $financialInstitutionContactAndAddress
 * @property OpenShipMoney $codCollectionAmount
 * @property string $returnReferenceIndicatorType
 * @property OpenShipMoney $shipmentCodAmount

 */
class OpenShipShipmentCODDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipShipmentCODDetail';

    /**
     * Set addTransportationChargesDetail
     *
     * 
     * Example: 
     * @param OpenShipCODTransportationChargesDetail $addTransportationChargesDetail
     * @return $this
     */
    public function setAddTransportationChargesDetail(OpenShipCODTransportationChargesDetail $addTransportationChargesDetail)
    {
        $this->values['addTransportationChargesDetail'] = $addTransportationChargesDetail;
        return $this;
    }

    /**
     * Get addTransportationChargesDetail
     *
     * @return OpenShipCODTransportationChargesDetail
     */
    public function getAddTransportationChargesDetail()
    {
        return $this->values['addTransportationChargesDetail'];
    }

    /**
     * Descriptive data of the Cash On Delivery along with their details of the physical location.
     *
     * 
     * Example: 
     * @param OpenShipParty_1 $codRecipient
     * @return $this
     */
    public function setCodRecipient($codRecipient)
    {
        $this->values['codRecipient'] = $codRecipient;
        return $this;
    }

    /**
     * Get codRecipient
     *
     * @return OpenShipParty_1
     */
    public function getCodRecipient()
    {
        return $this->values['codRecipient'];
    }

    /**
     * Specify the name of the person or company receiving the secured/unsecured funds payment.
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
     * Identifies the type of funds FedEx should collect upon shipment delivery
     *
     * simpleClass: OpenShipCodCollectionType
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
     * @param OpenShipContactAndAddress $financialInstitutionContactAndAddress
     * @return $this
     */
    public function setFinancialInstitutionContactAndAddress(OpenShipContactAndAddress $financialInstitutionContactAndAddress)
    {
        $this->values['financialInstitutionContactAndAddress'] = $financialInstitutionContactAndAddress;
        return $this;
    }

    /**
     * Get financialInstitutionContactAndAddress
     *
     * @return OpenShipContactAndAddress
     */
    public function getFinancialInstitutionContactAndAddress()
    {
        return $this->values['financialInstitutionContactAndAddress'];
    }

    /**
     * Indicate the COD collection amount.
     *
     * 
     * Example: 
     * @param OpenShipMoney $codCollectionAmount
     * @return $this
     */
    public function setCodCollectionAmount($codCollectionAmount)
    {
        $this->values['codCollectionAmount'] = $codCollectionAmount;
        return $this;
    }

    /**
     * Get codCollectionAmount
     *
     * @return OpenShipMoney
     */
    public function getCodCollectionAmount()
    {
        return $this->values['codCollectionAmount'];
    }

    /**
     * Indicate return reference type information to include on the COD return shipping label.
     *
     * simpleClass: OpenShipReturnReferenceIndicatorType
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
     * Indicate the COD amount for this shipment.
     *
     * 
     * Example: 
     * @param OpenShipMoney $shipmentCodAmount
     * @return $this
     */
    public function setShipmentCodAmount($shipmentCodAmount)
    {
        $this->values['shipmentCodAmount'] = $shipmentCodAmount;
        return $this;
    }

    /**
     * Get shipmentCodAmount
     *
     * @return OpenShipMoney
     */
    public function getShipmentCodAmount()
    {
        return $this->values['shipmentCodAmount'];
    }
}
