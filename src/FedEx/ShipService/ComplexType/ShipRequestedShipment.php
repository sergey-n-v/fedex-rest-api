<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data of the requested shipment.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $shipDatestamp
 * @property ShipMoney $totalDeclaredValue
 * @property ShipShipperParty $shipper
 * @property ShipSoldToParty $soldTo
 * @property ShipRecipientsParty[] $recipients
 * @property string $recipientLocationNumber
 * @property string $pickupType
 * @property string $serviceType
 * @property string $packagingType
 * @property float $totalWeight
 * @property ShipContactAndAddress_1 $origin
 * @property ShipPayment $shippingChargesPayment
 * @property ShipShipmentSpecialServicesRequested $shipmentSpecialServices
 * @property ShipShipShipmentEMailNotificationDetail $emailNotificationDetail
 * @property ShipExpressFreightDetail $expressFreightDetail
 * @property ShipVariableHandlingChargeDetail $variableHandlingChargeDetail
 * @property ShipCustomsClearanceDetail $customsClearanceDetail
 * @property ShipSmartPostInfoDetail $smartPostInfoDetail
 * @property boolean $blockInsightVisibility
 * @property ShipLabelSpecification $labelSpecification
 * @property ShipShippingDocumentSpecification $shippingDocumentSpecification
 * @property string $rateRequestType
 * @property string $preferredCurrency
 * @property int $totalPackageCount
 * @property ShipMasterTrackingId $masterTrackingId
 * @property ShipRequestedPackageLineItem[] $requestedPackageLineItems

 */
class ShipRequestedShipment extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipRequestedShipment';

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
     * Set totalDeclaredValue
     *
     * 
     * Example: 
     * @param ShipMoney $totalDeclaredValue
     * @return $this
     */
    public function setTotalDeclaredValue(ShipMoney $totalDeclaredValue)
    {
        $this->values['totalDeclaredValue'] = $totalDeclaredValue;
        return $this;
    }

    /**
     * Get totalDeclaredValue
     *
     * @return ShipMoney
     */
    public function getTotalDeclaredValue()
    {
        return $this->values['totalDeclaredValue'];
    }

    /**
     * Set shipper
     *
     * 
     * Example: {"address":{"streetLines":["10 FedEx Parkway","Suite 302"],"city":"Beverly Hills","stateOrProvinceCode":"CA","postalCode":"90210","countryCode":"US","residential":false},"contact":{"personName":"John Taylor","emailAddress":"sample@company.com","phoneExtension":"91","phoneNumber":"XXXX567890","companyName":"Fedex"},"tins":[{"number":"XXX567","tinType":"FEDERAL","usage":"usage","effectiveDate":"2000-01-23T04:56:07.000+00:00","expirationDate":"2000-01-23T04:56:07.000+00:00"}]}
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
     * Set soldTo
     *
     * 
     * Example: 
     * @param ShipSoldToParty $soldTo
     * @return $this
     */
    public function setSoldTo(ShipSoldToParty $soldTo)
    {
        $this->values['soldTo'] = $soldTo;
        return $this;
    }

    /**
     * Get soldTo
     *
     * @return ShipSoldToParty
     */
    public function getSoldTo()
    {
        return $this->values['soldTo'];
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
     * Set recipientLocationNumber
     *
     * 
     * Example: 1234567
     * @param string $recipientLocationNumber
     * @return $this
     */
    public function setRecipientLocationNumber($recipientLocationNumber)
    {
        $this->values['recipientLocationNumber'] = $recipientLocationNumber;
        return $this;
    }

    /**
     * Get recipientLocationNumber
     *
     * @return string
     */
    public function getRecipientLocationNumber()
    {
        return $this->values['recipientLocationNumber'];
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
     * Example: 20.6
     * @param float $totalWeight
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
     * @return float
     */
    public function getTotalWeight()
    {
        return $this->values['totalWeight'];
    }

    /**
     * Set origin
     *
     * 
     * Example: 
     * @param ShipContactAndAddress_1 $origin
     * @return $this
     */
    public function setOrigin(ShipContactAndAddress_1 $origin)
    {
        $this->values['origin'] = $origin;
        return $this;
    }

    /**
     * Get origin
     *
     * @return ShipContactAndAddress_1
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
     * @param ShipShipmentSpecialServicesRequested $shipmentSpecialServices
     * @return $this
     */
    public function setShipmentSpecialServices(ShipShipmentSpecialServicesRequested $shipmentSpecialServices)
    {
        $this->values['shipmentSpecialServices'] = $shipmentSpecialServices;
        return $this;
    }

    /**
     * Get shipmentSpecialServices
     *
     * @return ShipShipmentSpecialServicesRequested
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
     * @param ShipShipShipmentEMailNotificationDetail $emailNotificationDetail
     * @return $this
     */
    public function setEmailNotificationDetail(ShipShipShipmentEMailNotificationDetail $emailNotificationDetail)
    {
        $this->values['emailNotificationDetail'] = $emailNotificationDetail;
        return $this;
    }

    /**
     * Get emailNotificationDetail
     *
     * @return ShipShipShipmentEMailNotificationDetail
     */
    public function getEmailNotificationDetail()
    {
        return $this->values['emailNotificationDetail'];
    }

    /**
     * Set expressFreightDetail
     *
     * 
     * Example: 
     * @param ShipExpressFreightDetail $expressFreightDetail
     * @return $this
     */
    public function setExpressFreightDetail(ShipExpressFreightDetail $expressFreightDetail)
    {
        $this->values['expressFreightDetail'] = $expressFreightDetail;
        return $this;
    }

    /**
     * Get expressFreightDetail
     *
     * @return ShipExpressFreightDetail
     */
    public function getExpressFreightDetail()
    {
        return $this->values['expressFreightDetail'];
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
     * Set totalPackageCount
     *
     * 
     * Example: 25
     * @param int $totalPackageCount
     * @return $this
     */
    public function setTotalPackageCount($totalPackageCount)
    {
        $this->values['totalPackageCount'] = $totalPackageCount;
        return $this;
    }

    /**
     * Get totalPackageCount
     *
     * @return int
     */
    public function getTotalPackageCount()
    {
        return $this->values['totalPackageCount'];
    }

    /**
     * Set masterTrackingId
     *
     * 
     * Example: 
     * @param ShipMasterTrackingId $masterTrackingId
     * @return $this
     */
    public function setMasterTrackingId(ShipMasterTrackingId $masterTrackingId)
    {
        $this->values['masterTrackingId'] = $masterTrackingId;
        return $this;
    }

    /**
     * Get masterTrackingId
     *
     * @return ShipMasterTrackingId
     */
    public function getMasterTrackingId()
    {
        return $this->values['masterTrackingId'];
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
