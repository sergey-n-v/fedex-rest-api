<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * This is the detailed shipment request data to be validated before being submitted to FedEx.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $shipDatestamp
 * @property string $pickupType
 * @property string $serviceType
 * @property string $packagingType
 * @property int $totalWeight
 * @property ShipShipperParty $shipper
 * @property ShipRecipientsParty[] $recipients
 * @property ShipContactAndAddress_Verify $origin
 * @property ShipPayment $shippingChargesPayment
 * @property ShipRequestedShipmentVerify_shipmentSpecialServices $shipmentSpecialServices
 * @property ShipEMailNotificationDetail $emailNotificationDetail
 * @property ShipVariableHandlingChargeDetail $variableHandlingChargeDetail
 * @property ShipCustomsClearanceDetail $customsClearanceDetail
 * @property ShipSmartPostInfoDetail $smartPostInfoDetail
 * @property boolean $blockInsightVisibility
 * @property ShipLabelSpecification $labelSpecification
 * @property ShipShippingDocumentSpecification $shippingDocumentSpecification
 * @property string $rateRequestType
 * @property string $preferredCurrency
 * @property ShipRequestedPackageLineItem[] $requestedPackageLineItems

 */
class ShipRequestedShipmentVerify extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipRequestedShipmentVerify';

    /**
     * Set shipDatestamp
     *
     *
     * Example: 2019-10-14
     * @param string $shipDatestamp
     * @return $this
     */
    public function setShipDatestamp($shipDatestamp)
    {
        $this->values['shipDatestamp'] = $shipDatestamp;
        return $this;
    }

    /**
     * Get shipDatestamp
     *
     * @return string
     */
    public function getShipDatestamp()
    {
        return $this->values['shipDatestamp'];
    }

    /**
     * Set pickupType
     *
     * simpleClass: ShipPickupType
     * Example: USE_SCHEDULED_PICKUP
     * @param string $pickupType
     * @return $this
     */
    public function setPickupType($pickupType)
    {
        $this->values['pickupType'] = $pickupType;
        return $this;
    }

    /**
     * Get pickupType
     *
     * @return string
     */
    public function getPickupType()
    {
        return $this->values['pickupType'];
    }

    /**
     * Set serviceType
     *
     *
     * Example: PRIORITY_OVERNIGHT
     * @param string $serviceType
     * @return $this
     */
    public function setServiceType($serviceType)
    {
        $this->values['serviceType'] = $serviceType;
        return $this;
    }

    /**
     * Get serviceType
     *
     * @return string
     */
    public function getServiceType()
    {
        return $this->values['serviceType'];
    }

    /**
     * Set packagingType
     *
     *
     * Example: YOUR_PACKAGING
     * @param string $packagingType
     * @return $this
     */
    public function setPackagingType($packagingType)
    {
        $this->values['packagingType'] = $packagingType;
        return $this;
    }

    /**
     * Get packagingType
     *
     * @return string
     */
    public function getPackagingType()
    {
        return $this->values['packagingType'];
    }

    /**
     * Set totalWeight
     *
     *
     * Example: 20
     * @param int $totalWeight
     * @return $this
     */
    public function setTotalWeight($totalWeight)
    {
        $this->values['totalWeight'] = $totalWeight;
        return $this;
    }

    /**
     * Get totalWeight
     *
     * @return int
     */
    public function getTotalWeight()
    {
        return $this->values['totalWeight'];
    }

    /**
     * Set shipper
     *
     *
     * Example: {"address":{"streetLines":["10 FedEx Parkway","Suite 302"],"city":"Beverly Hills","stateOrProvinceCode":"CA","postalCode":"90210","countryCode":"US","residential":false},"contact":{"personName":"John Taylor","emailAddress":"sample@company.com","phoneExtension":"91","phoneNumber":"1234567890","companyName":"Fedex"},"tins":[{"number":"123567","tinType":"FEDERAL","usage":"usage","effectiveDate":"2000-01-23T04:56:07.000+00:00","expirationDate":"2000-01-23T04:56:07.000+00:00"}]}
     * @param ShipShipperParty $shipper
     * @return $this
     */
    public function setShipper(ShipShipperParty $shipper)
    {
        $this->values['shipper'] = $shipper;
        return $this;
    }

    /**
     * Get shipper
     *
     * @return ShipShipperParty
     */
    public function getShipper()
    {
        return $this->values['shipper'];
    }

    /**
     * Set recipients
     *
     *
     * Example:
     * @param ShipRecipientsParty[] $recipients
     * @return $this
     */
    public function setRecipients(array $recipients)
    {
        $this->values['recipients'] = $recipients;
        return $this;
    }

    /**
     * Get recipients
     *
     * @return ShipRecipientsParty[]
     */
    public function getRecipients()
    {
        return $this->values['recipients'];
    }

    /**
     * Set origin
     *
     *
     * Example:
     * @param ShipContactAndAddress_Verify $origin
     * @return $this
     */
    public function setOrigin(ShipContactAndAddress_Verify $origin)
    {
        $this->values['origin'] = $origin;
        return $this;
    }

    /**
     * Get origin
     *
     * @return ShipContactAndAddress_Verify
     */
    public function getOrigin()
    {
        return $this->values['origin'];
    }

    /**
     * Set shippingChargesPayment
     *
     *
     * Example:
     * @param ShipPayment $shippingChargesPayment
     * @return $this
     */
    public function setShippingChargesPayment(ShipPayment $shippingChargesPayment)
    {
        $this->values['shippingChargesPayment'] = $shippingChargesPayment;
        return $this;
    }

    /**
     * Get shippingChargesPayment
     *
     * @return ShipPayment
     */
    public function getShippingChargesPayment()
    {
        return $this->values['shippingChargesPayment'];
    }

    /**
     * Set shipmentSpecialServices
     *
     *
     * Example:
     * @param ShipRequestedShipmentVerify_shipmentSpecialServices $shipmentSpecialServices
     * @return $this
     */
    public function setShipmentSpecialServices(ShipRequestedShipmentVerify_shipmentSpecialServices $shipmentSpecialServices)
    {
        $this->values['shipmentSpecialServices'] = $shipmentSpecialServices;
        return $this;
    }

    /**
     * Get shipmentSpecialServices
     *
     * @return ShipRequestedShipmentVerify_shipmentSpecialServices
     */
    public function getShipmentSpecialServices()
    {
        return $this->values['shipmentSpecialServices'];
    }

    /**
     * Set emailNotificationDetail
     *
     *
     * Example:
     * @param ShipEMailNotificationDetail $emailNotificationDetail
     * @return $this
     */
    public function setEmailNotificationDetail(ShipEMailNotificationDetail $emailNotificationDetail)
    {
        $this->values['emailNotificationDetail'] = $emailNotificationDetail;
        return $this;
    }

    /**
     * Get emailNotificationDetail
     *
     * @return ShipEMailNotificationDetail
     */
    public function getEmailNotificationDetail()
    {
        return $this->values['emailNotificationDetail'];
    }

    /**
     * Set variableHandlingChargeDetail
     *
     *
     * Example:
     * @param ShipVariableHandlingChargeDetail $variableHandlingChargeDetail
     * @return $this
     */
    public function setVariableHandlingChargeDetail(ShipVariableHandlingChargeDetail $variableHandlingChargeDetail)
    {
        $this->values['variableHandlingChargeDetail'] = $variableHandlingChargeDetail;
        return $this;
    }

    /**
     * Get variableHandlingChargeDetail
     *
     * @return ShipVariableHandlingChargeDetail
     */
    public function getVariableHandlingChargeDetail()
    {
        return $this->values['variableHandlingChargeDetail'];
    }

    /**
     * Set customsClearanceDetail
     *
     *
     * Example:
     * @param ShipCustomsClearanceDetail $customsClearanceDetail
     * @return $this
     */
    public function setCustomsClearanceDetail(ShipCustomsClearanceDetail $customsClearanceDetail)
    {
        $this->values['customsClearanceDetail'] = $customsClearanceDetail;
        return $this;
    }

    /**
     * Get customsClearanceDetail
     *
     * @return ShipCustomsClearanceDetail
     */
    public function getCustomsClearanceDetail()
    {
        return $this->values['customsClearanceDetail'];
    }

    /**
     * Set smartPostInfoDetail
     *
     *
     * Example:
     * @param ShipSmartPostInfoDetail $smartPostInfoDetail
     * @return $this
     */
    public function setSmartPostInfoDetail(ShipSmartPostInfoDetail $smartPostInfoDetail)
    {
        $this->values['smartPostInfoDetail'] = $smartPostInfoDetail;
        return $this;
    }

    /**
     * Get smartPostInfoDetail
     *
     * @return ShipSmartPostInfoDetail
     */
    public function getSmartPostInfoDetail()
    {
        return $this->values['smartPostInfoDetail'];
    }

    /**
     * Set blockInsightVisibility
     *
     *
     * Example: 1
     * @param boolean $blockInsightVisibility
     * @return $this
     */
    public function setBlockInsightVisibility($blockInsightVisibility)
    {
        $this->values['blockInsightVisibility'] = $blockInsightVisibility;
        return $this;
    }

    /**
     * Get blockInsightVisibility
     *
     * @return boolean
     */
    public function getBlockInsightVisibility()
    {
        return $this->values['blockInsightVisibility'];
    }

    /**
     * Set labelSpecification
     *
     *
     * Example:
     * @param ShipLabelSpecification $labelSpecification
     * @return $this
     */
    public function setLabelSpecification(ShipLabelSpecification $labelSpecification)
    {
        $this->values['labelSpecification'] = $labelSpecification;
        return $this;
    }

    /**
     * Get labelSpecification
     *
     * @return ShipLabelSpecification
     */
    public function getLabelSpecification()
    {
        return $this->values['labelSpecification'];
    }

    /**
     * Set shippingDocumentSpecification
     *
     *
     * Example:
     * @param ShipShippingDocumentSpecification $shippingDocumentSpecification
     * @return $this
     */
    public function setShippingDocumentSpecification(ShipShippingDocumentSpecification $shippingDocumentSpecification)
    {
        $this->values['shippingDocumentSpecification'] = $shippingDocumentSpecification;
        return $this;
    }

    /**
     * Get shippingDocumentSpecification
     *
     * @return ShipShippingDocumentSpecification
     */
    public function getShippingDocumentSpecification()
    {
        return $this->values['shippingDocumentSpecification'];
    }

    /**
     * Set rateRequestType
     *
     * simpleClass: ShipRateRequestType
     * Example: ["LIST","PREFERRED"]
     * @param string $rateRequestType
     * @return $this
     */
    public function setRateRequestType(array $rateRequestType)
    {
        $this->values['rateRequestType'] = $rateRequestType;
        return $this;
    }

    /**
     * Get rateRequestType
     *
     * @return string
     */
    public function getRateRequestType()
    {
        return $this->values['rateRequestType'];
    }

    /**
     * Set preferredCurrency
     *
     *
     * Example: USD
     * @param string $preferredCurrency
     * @return $this
     */
    public function setPreferredCurrency($preferredCurrency)
    {
        $this->values['preferredCurrency'] = $preferredCurrency;
        return $this;
    }

    /**
     * Get preferredCurrency
     *
     * @return string
     */
    public function getPreferredCurrency()
    {
        return $this->values['preferredCurrency'];
    }

    /**
     * Set requestedPackageLineItems
     *
     *
     * Example:
     * @param ShipRequestedPackageLineItem[] $requestedPackageLineItems
     * @return $this
     */
    public function setRequestedPackageLineItems(array $requestedPackageLineItems)
    {
        $this->values['requestedPackageLineItems'] = $requestedPackageLineItems;
        return $this;
    }

    /**
     * Get requestedPackageLineItems
     *
     * @return ShipRequestedPackageLineItem[]
     */
    public function getRequestedPackageLineItems()
    {
        return $this->values['requestedPackageLineItems'];
    }
}
