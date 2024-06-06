<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * The detailed transaction data for the requested Open Shipment.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $shipDatestamp
 * @property string $pickupType
 * @property string $serviceType
 * @property string $packagingType
 * @property float $totalWeight
 * @property OpenShipShipperParty $shipper
 * @property OpenShipRecipientsParty[] $recipients
 * @property OpenShipSoldToParty $soldTo
 * @property OpenShipContactAndAddress_1 $origin
 * @property OpenShipPayment $shippingChargesPayment
 * @property OpenShipOpenShipmentSpecialServicesRequested $shipmentSpecialServices
 * @property OpenShipEMailNotificationDetail $emailNotificationDetail
 * @property OpenShipExpressFreightDetail $expressFreightDetail
 * @property OpenShipVariableHandlingChargeDetail $variableHandlingChargeDetail
 * @property OpenShipCustomsClearanceDetail $customsClearanceDetail
 * @property OpenShipSmartPostInfoDetail $smartPostInfoDetail
 * @property boolean $blockInsightVisibility
 * @property string $rateRequestType
 * @property string $preferredCurrency
 * @property OpenShipRequestedPackageLineItem[] $requestedPackageLineItems

 */
class OpenShipOpenshipmentRequestedShipment extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipOpenshipmentRequestedShipment';

    /**
     * This is the shipment date. Default value is current date in case the date is not provided or a past date is provided.<br>Format [YYYY-MM-DD].<br>Example: 2019-10-14
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
     * Indicate if shipment is being dropped off at a FedEx location or being picked up by FedEx or if it's a regular scheduled pickup for this shipment.<br><a onclick='loadDocReference("pickuptypes")'>Click here for more information on Pickup Types.</a>
     *
     * simpleClass: OpenShipPickupType
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
     * Indicate the FedEx serviceType used for this shipment. The results will be filtered by the serviceType value indicated.<br>Example: STANDARD_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>click here to see Service Types</a>
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
     * Specify the Packaging Type used with the shipment.<br>Note: For Express Freight shipments, the packaging will default to YOUR_PACKAGING irrespective of the user provided package type in the request.<br>Example: YOUR_PACKAGING<br><a onclick='loadDocReference("packagetypes")'>click here to see Package Types</a>
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
     * shipment total weight should be in Kg or in Lbs <br><br>Example: 20.6.
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
     * Specify the Shipper information. <br><i>Note: Shipper and Origin address should be same.</i>
     *
     *
     * Example: {"address":{"streetLines":["10 FedEx Parkway","Suite 302"],"city":"Beverly Hills","stateOrProvinceCode":"CA","postalCode":"90210","countryCode":"US","residential":false},"contact":{"personName":"John Taylor","emailAddress":"sample@company.com","phoneExtension":"91","phoneNumber":"1234567890","companyName":"Fedex"},"tins":[{"number":"XXX567","tinType":"FEDERAL","usage":"usage","effectiveDate":"2000-01-23T04:56:07.000+00:00","expirationDate":"2000-01-23T04:56:07.000+00:00"}]}
     * @param OpenShipShipperParty $shipper
     * @return $this
     */
    public function setShipper($shipper)
    {
        $this->values['shipper'] = $shipper;
        return $this;
    }

    /**
     * Get shipper
     *
     * @return OpenShipShipperParty
     */
    public function getShipper()
    {
        return $this->values['shipper'];
    }

    /**
     * Specify recipient information and/ the physical destination location for the package.
     *
     *
     * Example:
     * @param OpenShipRecipientsParty[] $recipients
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
     * @return OpenShipRecipientsParty[]
     */
    public function getRecipients()
    {
        return $this->values['recipients'];
    }

    /**
     * Will indicate the party responsible for purchasing the goods shipped from the shipper to the recipient. The sold to party is not necessarily the recipient or the importer of record. The sold to party is relevant when the purchaser, rather than the recipient determines when certain customs regulations apply.
     *
     *
     * Example:
     * @param OpenShipSoldToParty $soldTo
     * @return $this
     */
    public function setSoldTo($soldTo)
    {
        $this->values['soldTo'] = $soldTo;
        return $this;
    }

    /**
     * Get soldTo
     *
     * @return OpenShipSoldToParty
     */
    public function getSoldTo()
    {
        return $this->values['soldTo'];
    }

    /**
     * Specify the Shipment Origin address information, if different from shipper’s address.
     *
     *
     * Example:
     * @param OpenShipContactAndAddress_1 $origin
     * @return $this
     */
    public function setOrigin($origin)
    {
        $this->values['origin'] = $origin;
        return $this;
    }

    /**
     * Get origin
     *
     * @return OpenShipContactAndAddress_1
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
     * @param OpenShipPayment $shippingChargesPayment
     * @return $this
     */
    public function setShippingChargesPayment(OpenShipPayment $shippingChargesPayment)
    {
        $this->values['shippingChargesPayment'] = $shippingChargesPayment;
        return $this;
    }

    /**
     * Get shippingChargesPayment
     *
     * @return OpenShipPayment
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
     * @param OpenShipOpenShipmentSpecialServicesRequested $shipmentSpecialServices
     * @return $this
     */
    public function setShipmentSpecialServices(OpenShipOpenShipmentSpecialServicesRequested $shipmentSpecialServices)
    {
        $this->values['shipmentSpecialServices'] = $shipmentSpecialServices;
        return $this;
    }

    /**
     * Get shipmentSpecialServices
     *
     * @return OpenShipOpenShipmentSpecialServicesRequested
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
     * @param OpenShipEMailNotificationDetail $emailNotificationDetail
     * @return $this
     */
    public function setEmailNotificationDetail(OpenShipEMailNotificationDetail $emailNotificationDetail)
    {
        $this->values['emailNotificationDetail'] = $emailNotificationDetail;
        return $this;
    }

    /**
     * Get emailNotificationDetail
     *
     * @return OpenShipEMailNotificationDetail
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
     * @param OpenShipExpressFreightDetail $expressFreightDetail
     * @return $this
     */
    public function setExpressFreightDetail(OpenShipExpressFreightDetail $expressFreightDetail)
    {
        $this->values['expressFreightDetail'] = $expressFreightDetail;
        return $this;
    }

    /**
     * Get expressFreightDetail
     *
     * @return OpenShipExpressFreightDetail
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
     * @param OpenShipVariableHandlingChargeDetail $variableHandlingChargeDetail
     * @return $this
     */
    public function setVariableHandlingChargeDetail(OpenShipVariableHandlingChargeDetail $variableHandlingChargeDetail)
    {
        $this->values['variableHandlingChargeDetail'] = $variableHandlingChargeDetail;
        return $this;
    }

    /**
     * Get variableHandlingChargeDetail
     *
     * @return OpenShipVariableHandlingChargeDetail
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
     * @param OpenShipCustomsClearanceDetail $customsClearanceDetail
     * @return $this
     */
    public function setCustomsClearanceDetail(OpenShipCustomsClearanceDetail $customsClearanceDetail)
    {
        $this->values['customsClearanceDetail'] = $customsClearanceDetail;
        return $this;
    }

    /**
     * Get customsClearanceDetail
     *
     * @return OpenShipCustomsClearanceDetail
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
     * @param OpenShipSmartPostInfoDetail $smartPostInfoDetail
     * @return $this
     */
    public function setSmartPostInfoDetail(OpenShipSmartPostInfoDetail $smartPostInfoDetail)
    {
        $this->values['smartPostInfoDetail'] = $smartPostInfoDetail;
        return $this;
    }

    /**
     * Get smartPostInfoDetail
     *
     * @return OpenShipSmartPostInfoDetail
     */
    public function getSmartPostInfoDetail()
    {
        return $this->values['smartPostInfoDetail'];
    }

    /**
     * Indicate if the shipment be available to be visible/tracked using FedEx InSight® tool. If value indicated as true, only the shipper/payer will have visibility of this shipment in the said tool.
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
     * Indicate the type of rates to be returned. The account specific rates are returned by default if the account number is specified in the request.<br>Following are values:<ul><li>LIST - Returns FedEx published list rates in addition to account-specific rates (if applicable).</li><li>INCENTIVE - This is one-time discount for incentivising the customer. For more information, contact your FedEx representative.</li><li>ACCOUNT - Returns account specific rates (Default).</li><li>PREFERRED - Returns rates in the preferred currency specified in the element preferredCurrency.</li><li>RETAIL - Returns customer rate from one of retail FedEx service centers.</li></ul>Examples: ["ACCOUNT", "PREFERRED"]
     *
     * simpleClass: OpenShipRateRequestType
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
     * Indicate the currency the caller requests to have used in all returned monetary values. Should be Used in conjunction with the element RateRequestType.<br>Example: USD<br><br><a onclick='loadDocReference("currencycodes")'>click here to see available Currency codes</a><br><br>Note: Incorrect currency codes should not be supplied. The system ignores the incorrect currency code.
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
     * These are one or more package-attribute descriptions, each of which describes an individual package, a group of identical packages, or (for the total-piece-total-weight case) common characteristics of all packages in the shipment.<ul><li>At least one instance containing the weight for at least one package is required for EXPRESS and GROUND shipments.</li><li>Single piece requests will have one RequestedPackageLineItem.</li><li>Multiple piece requests will have multiple RequestedPackageLineItems.</li><li>Maximum occurrences is 30.</li></ul>
     *
     *
     * Example:
     * @param OpenShipRequestedPackageLineItem[] $requestedPackageLineItems
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
     * @return OpenShipRequestedPackageLineItem[]
     */
    public function getRequestedPackageLineItems()
    {
        return $this->values['requestedPackageLineItems'];
    }
}
