<?php
namespace FedEx\OpenShipService\ComplexType;

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
 * @property OpenShipCustomerReference[] $customerReferences
 * @property OpenShipMoney $taxesOrMiscellaneousCharge
 * @property string $taxesOrMiscellaneousChargeType
 * @property OpenShipMoney $freightCharge
 * @property OpenShipMoney $packingCosts
 * @property OpenShipMoney $handlingCosts
 * @property string $declarationStatement
 * @property string $termsOfSale
 * @property string $specialInstructions
 * @property string $shipmentPurpose
 * @property OpenShipEmailDispositionDetail $emailNotificationDetail

 */
class OpenShipCommercialInvoice extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipCommercialInvoice';

    /**
     * The originator name that will populate the Commercial Invoice (or Pro Forma).
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
     * These are comments to populated on the Commercial Invoice (or Pro Forma). <br>Example: comments
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
     * These are additional customer reference data.<br>Note: The groupPackageCount must be specified to retrieve customer references.
     *
     * 
     * Example: 
     * @param OpenShipCustomerReference[] $customerReferences
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
     * @return OpenShipCustomerReference[]
     */
    public function getCustomerReferences()
    {
        return $this->values['customerReferences'];
    }

    /**
     * Indicate the taxes or miscellaneous charges(other than freight charges or insurance charges) that are associated with the shipment.
     *
     * 
     * Example: 
     * @param OpenShipMoney $taxesOrMiscellaneousCharge
     * @return $this
     */
    public function setTaxesOrMiscellaneousCharge($taxesOrMiscellaneousCharge)
    {
        $this->values['taxesOrMiscellaneousCharge'] = $taxesOrMiscellaneousCharge;
        return $this;
    }

    /**
     * Get taxesOrMiscellaneousCharge
     *
     * @return OpenShipMoney
     */
    public function getTaxesOrMiscellaneousCharge()
    {
        return $this->values['taxesOrMiscellaneousCharge'];
    }

    /**
     * Indicate the type of taxes Or miscellaneous charge.
     *
     * simpleClass: OpenShipTaxesOrMiscellaneousChargeType
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
     * Indicate the freight charge.
     *
     * 
     * Example: 
     * @param OpenShipMoney $freightCharge
     * @return $this
     */
    public function setFreightCharge($freightCharge)
    {
        $this->values['freightCharge'] = $freightCharge;
        return $this;
    }

    /**
     * Get freightCharge
     *
     * @return OpenShipMoney
     */
    public function getFreightCharge()
    {
        return $this->values['freightCharge'];
    }

    /**
     * Indicate the packing cost.
     *
     * 
     * Example: 
     * @param OpenShipMoney $packingCosts
     * @return $this
     */
    public function setPackingCosts($packingCosts)
    {
        $this->values['packingCosts'] = $packingCosts;
        return $this;
    }

    /**
     * Get packingCosts
     *
     * @return OpenShipMoney
     */
    public function getPackingCosts()
    {
        return $this->values['packingCosts'];
    }

    /**
     * Indicate the handling cost.
     *
     * 
     * Example: 
     * @param OpenShipMoney $handlingCosts
     * @return $this
     */
    public function setHandlingCosts($handlingCosts)
    {
        $this->values['handlingCosts'] = $handlingCosts;
        return $this;
    }

    /**
     * Get handlingCosts
     *
     * @return OpenShipMoney
     */
    public function getHandlingCosts()
    {
        return $this->values['handlingCosts'];
    }

    /**
     * This is the declaration statement which will populate the Commercial Invoice (or Pro Forma).<br>Maximum length is 554.<br>Example: declarationStatement
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
     * Specify terms Of Sale that will be populated on the Commercial Invoice (or Pro Forma). Maximum length is 3<br>Valid values are:<ul><li>FCA/FOB (Free Carrier/Free On Board): Seller is responsible for all costs of delivering goods to destination. (Default)</li><li>CIP (Costs, Insurance Paid): Seller is responsible for miscellaneous charges to destination.</li><li>CPT (Carriage Paid To): Buyer is responsible for insurance.</li><li>EXW (Ex Works): Seller makes goods available to buyer. Buyer is responsible for delivering goods to destination.</li><li>DDU (Delivered Duty Unpaid): Seller is responsible for delivering goods to destination. Buyer is responsible for clearing goods through Bureau of Customs and Border Protection.</li><li>DDP (Delivered Duty Paid): Seller is responsible for delivering goods to destination, including duties, taxes, and miscellaneous fees.</li><li>DAP (Delivered at Place): Seller pays for carriage to the named place, except for costs related to import clearance, and assumes all risks prior to the point that the goods are ready for unloading by the buyer.</li><li>DPU(Deliver at Place of Unloading)</li></ul>
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
     * These are special instructions that will be populated on the Commercial Invoice (or Pro Forma).<br>Example: specialInstructions
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
     * This is the reason for the shipment. <br>Note: SOLD is not a valid purpose for a Proforma Invoice.
     *
     * simpleClass: OpenShipShipmentPurpose
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
     * @param OpenShipEmailDispositionDetail $emailNotificationDetail
     * @return $this
     */
    public function setEmailNotificationDetail(OpenShipEmailDispositionDetail $emailNotificationDetail)
    {
        $this->values['emailNotificationDetail'] = $emailNotificationDetail;
        return $this;
    }

    /**
     * Get emailNotificationDetail
     *
     * @return OpenShipEmailDispositionDetail
     */
    public function getEmailNotificationDetail()
    {
        return $this->values['emailNotificationDetail'];
    }
}
