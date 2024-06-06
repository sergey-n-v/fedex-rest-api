<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Use this object to provide Commercial Invoice details. This element is required for electronic upload of CI data. It will serve to create/transmit an electronic Commercial Invoice through the FedEx system.<br>Customers are responsible for printing their own Commercial Invoice.<br>If you would like FedEx to generate a Commercial Invoice and transmit it to Customs for clearance purposes, you need to specify that in the ETDDetail/RequestedDocumentCopies element.<br>Supports maximum of 99 commodity line items.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $originatorName
 * @property string $comments
 * @property ShipCustomerReference[] $customerReferences
 * @property ShipMoney $taxesOrMiscellaneousCharge
 * @property string $taxesOrMiscellaneousChargeType
 * @property ShipMoney $freightCharge
 * @property ShipMoney $packingCosts
 * @property ShipMoney $handlingCosts
 * @property string $declarationStatement
 * @property string $termsOfSale
 * @property string $specialInstructions
 * @property string $shipmentPurpose
 * @property ShipShipEmailDispositionDetail $emailNotificationDetail

 */
class ShipCommercialInvoice extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipCommercialInvoice';

    /**
     * Set originatorName
     *
     * 
     * Example: originator Name
     * @param string $originatorName
     * @return $this
     */
    public function setOriginatorName($originatorName)
    {
        $this->values['originatorName'] = $originatorName;
        return $this;
    }

    /**
     * Get originatorName
     *
     * @return string
     */
    public function getOriginatorName()
    {
        return $this->values['originatorName'];
    }

    /**
     * Set comments
     *
     * 
     * Example: ["optional comments for the commercial invoice"]
     * @param string $comments
     * @return $this
     */
    public function setComments(array $comments)
    {
        $this->values['comments'] = $comments;
        return $this;
    }

    /**
     * Get comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->values['comments'];
    }

    /**
     * Set customerReferences
     *
     * 
     * Example: 
     * @param ShipCustomerReference[] $customerReferences
     * @return $this
     */
    public function setCustomerReferences(array $customerReferences)
    {
        $this->values['customerReferences'] = $customerReferences;
        return $this;
    }

    /**
     * Get customerReferences
     *
     * @return ShipCustomerReference[]
     */
    public function getCustomerReferences()
    {
        return $this->values['customerReferences'];
    }

    /**
     * Set taxesOrMiscellaneousCharge
     *
     * 
     * Example: 
     * @param ShipMoney $taxesOrMiscellaneousCharge
     * @return $this
     */
    public function setTaxesOrMiscellaneousCharge(ShipMoney $taxesOrMiscellaneousCharge)
    {
        $this->values['taxesOrMiscellaneousCharge'] = $taxesOrMiscellaneousCharge;
        return $this;
    }

    /**
     * Get taxesOrMiscellaneousCharge
     *
     * @return ShipMoney
     */
    public function getTaxesOrMiscellaneousCharge()
    {
        return $this->values['taxesOrMiscellaneousCharge'];
    }

    /**
     * Set taxesOrMiscellaneousChargeType
     *
     * simpleClass: ShipTaxesOrMiscellaneousChargeType
     * Example: COMMISSIONS
     * @param string $taxesOrMiscellaneousChargeType
     * @return $this
     */
    public function setTaxesOrMiscellaneousChargeType($taxesOrMiscellaneousChargeType)
    {
        $this->values['taxesOrMiscellaneousChargeType'] = $taxesOrMiscellaneousChargeType;
        return $this;
    }

    /**
     * Get taxesOrMiscellaneousChargeType
     *
     * @return string
     */
    public function getTaxesOrMiscellaneousChargeType()
    {
        return $this->values['taxesOrMiscellaneousChargeType'];
    }

    /**
     * Set freightCharge
     *
     * 
     * Example: 
     * @param ShipMoney $freightCharge
     * @return $this
     */
    public function setFreightCharge(ShipMoney $freightCharge)
    {
        $this->values['freightCharge'] = $freightCharge;
        return $this;
    }

    /**
     * Get freightCharge
     *
     * @return ShipMoney
     */
    public function getFreightCharge()
    {
        return $this->values['freightCharge'];
    }

    /**
     * Set packingCosts
     *
     * 
     * Example: 
     * @param ShipMoney $packingCosts
     * @return $this
     */
    public function setPackingCosts(ShipMoney $packingCosts)
    {
        $this->values['packingCosts'] = $packingCosts;
        return $this;
    }

    /**
     * Get packingCosts
     *
     * @return ShipMoney
     */
    public function getPackingCosts()
    {
        return $this->values['packingCosts'];
    }

    /**
     * Set handlingCosts
     *
     * 
     * Example: 
     * @param ShipMoney $handlingCosts
     * @return $this
     */
    public function setHandlingCosts(ShipMoney $handlingCosts)
    {
        $this->values['handlingCosts'] = $handlingCosts;
        return $this;
    }

    /**
     * Get handlingCosts
     *
     * @return ShipMoney
     */
    public function getHandlingCosts()
    {
        return $this->values['handlingCosts'];
    }

    /**
     * Set declarationStatement
     *
     * 
     * Example: declarationStatement
     * @param string $declarationStatement
     * @return $this
     */
    public function setDeclarationStatement($declarationStatement)
    {
        $this->values['declarationStatement'] = $declarationStatement;
        return $this;
    }

    /**
     * Get declarationStatement
     *
     * @return string
     */
    public function getDeclarationStatement()
    {
        return $this->values['declarationStatement'];
    }

    /**
     * Set termsOfSale
     *
     * 
     * Example: FCA
     * @param string $termsOfSale
     * @return $this
     */
    public function setTermsOfSale($termsOfSale)
    {
        $this->values['termsOfSale'] = $termsOfSale;
        return $this;
    }

    /**
     * Get termsOfSale
     *
     * @return string
     */
    public function getTermsOfSale()
    {
        return $this->values['termsOfSale'];
    }

    /**
     * Set specialInstructions
     *
     * 
     * Example: specialInstructions"
     * @param string $specialInstructions
     * @return $this
     */
    public function setSpecialInstructions($specialInstructions)
    {
        $this->values['specialInstructions'] = $specialInstructions;
        return $this;
    }

    /**
     * Get specialInstructions
     *
     * @return string
     */
    public function getSpecialInstructions()
    {
        return $this->values['specialInstructions'];
    }

    /**
     * Set shipmentPurpose
     *
     * simpleClass: ShipShipmentPurpose
     * Example: REPAIR_AND_RETURN
     * @param string $shipmentPurpose
     * @return $this
     */
    public function setShipmentPurpose($shipmentPurpose)
    {
        $this->values['shipmentPurpose'] = $shipmentPurpose;
        return $this;
    }

    /**
     * Get shipmentPurpose
     *
     * @return string
     */
    public function getShipmentPurpose()
    {
        return $this->values['shipmentPurpose'];
    }

    /**
     * Set emailNotificationDetail
     *
     * 
     * Example: 
     * @param ShipShipEmailDispositionDetail $emailNotificationDetail
     * @return $this
     */
    public function setEmailNotificationDetail(ShipShipEmailDispositionDetail $emailNotificationDetail)
    {
        $this->values['emailNotificationDetail'] = $emailNotificationDetail;
        return $this;
    }

    /**
     * Get emailNotificationDetail
     *
     * @return ShipShipEmailDispositionDetail
     */
    public function getEmailNotificationDetail()
    {
        return $this->values['emailNotificationDetail'];
    }
}
