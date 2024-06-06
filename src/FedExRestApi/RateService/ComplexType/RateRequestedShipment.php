<?php
namespace FedExRestApi\RateService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * This is shipment data for which a rate quote (or rate-shipping comparison) is requested.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property RateRateParty $shipper
 * @property RateRateParty $recipient
 * @property string $serviceType
 * @property RateEMailNotificationDetail $emailNotificationDetail
 * @property string $preferredCurrency
 * @property string $rateRequestType
 * @property string $shipDateStamp
 * @property string $pickupType
 * @property RateRequestedPackageLineItem[] $requestedPackageLineItems
 * @property boolean $documentShipment
 * @property RateVariableHandlingChargeDetail $variableHandlingChargeDetail
 * @property string $packagingType
 * @property int $totalPackageCount
 * @property float $totalWeight
 * @property RateRequestedShipmentSpecialServicesRequested $shipmentSpecialServices
 * @property RateRequestedShipmentCustomsClearanceDetail $customsClearanceDetail
 * @property boolean $groupShipment
 * @property RateServiceTypeDetailVO $serviceTypeDetail
 * @property RateRequestedShipmentSmartPostInfoDetail $smartPostInfoDetail
 * @property RateExpressFreightDetail $expressFreightDetail
 * @property boolean $groundShipment

 */
class RateRequestedShipment extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateRequestedShipment';

    /**
     * Set shipper
     *
     *
     * Example:
     * @param RateRateParty $shipper
     * @return $this
     */
    public function setShipper(RateRateParty $shipper)
    {
        $this->values['shipper'] = $shipper;
        return $this;
    }

    /**
     * Get shipper
     *
     * @return RateRateParty
     */
    public function getShipper()
    {
        return $this->values['shipper'];
    }

    /**
     * Set recipient
     *
     *
     * Example:
     * @param RateRateParty $recipient
     * @return $this
     */
    public function setRecipient(RateRateParty $recipient)
    {
        $this->values['recipient'] = $recipient;
        return $this;
    }

    /**
     * Get recipient
     *
     * @return RateRateParty
     */
    public function getRecipient()
    {
        return $this->values['recipient'];
    }

    /**
     * Set serviceType
     *
     *
     * Example: STANDARD_OVERNIGHT
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
     * Set emailNotificationDetail
     *
     *
     * Example:
     * @param RateEMailNotificationDetail $emailNotificationDetail
     * @return $this
     */
    public function setEmailNotificationDetail(RateEMailNotificationDetail $emailNotificationDetail)
    {
        $this->values['emailNotificationDetail'] = $emailNotificationDetail;
        return $this;
    }

    /**
     * Get emailNotificationDetail
     *
     * @return RateEMailNotificationDetail
     */
    public function getEmailNotificationDetail()
    {
        return $this->values['emailNotificationDetail'];
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
     * Set rateRequestType
     *
     * simpleClass: RateRateRequestType
     * Example: ["ACCOUNT","LIST"]
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
     * Set shipDateStamp
     *
     *
     * Example: 2019-09-05
     * @param string $shipDateStamp
     * @return $this
     */
    public function setShipDateStamp($shipDateStamp)
    {
        $this->values['shipDateStamp'] = $shipDateStamp;
        return $this;
    }

    /**
     * Get shipDateStamp
     *
     * @return string
     */
    public function getShipDateStamp()
    {
        return $this->values['shipDateStamp'];
    }

    /**
     * Set pickupType
     *
     * simpleClass: RatePickupType
     * Example: DROPOFF_AT_FEDEX_LOCATION
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
     * Set requestedPackageLineItems
     *
     *
     * Example:
     * @param RateRequestedPackageLineItem[] $requestedPackageLineItems
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
     * @return RateRequestedPackageLineItem[]
     */
    public function getRequestedPackageLineItems()
    {
        return $this->values['requestedPackageLineItems'];
    }

    /**
     * Set documentShipment
     *
     *
     *
     * @param boolean $documentShipment
     * @return $this
     */
    public function setDocumentShipment($documentShipment)
    {
        $this->values['documentShipment'] = $documentShipment;
        return $this;
    }

    /**
     * Get documentShipment
     *
     * @return boolean
     */
    public function getDocumentShipment()
    {
        return $this->values['documentShipment'];
    }

    /**
     * Set variableHandlingChargeDetail
     *
     *
     * Example:
     * @param RateVariableHandlingChargeDetail $variableHandlingChargeDetail
     * @return $this
     */
    public function setVariableHandlingChargeDetail(RateVariableHandlingChargeDetail $variableHandlingChargeDetail)
    {
        $this->values['variableHandlingChargeDetail'] = $variableHandlingChargeDetail;
        return $this;
    }

    /**
     * Get variableHandlingChargeDetail
     *
     * @return RateVariableHandlingChargeDetail
     */
    public function getVariableHandlingChargeDetail()
    {
        return $this->values['variableHandlingChargeDetail'];
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
     * Set totalPackageCount
     *
     *
     * Example: 3
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
     * Set totalWeight
     *
     *
     * Example: 87.5
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
     * Set shipmentSpecialServices
     *
     *
     * Example:
     * @param RateRequestedShipmentSpecialServicesRequested $shipmentSpecialServices
     * @return $this
     */
    public function setShipmentSpecialServices(RateRequestedShipmentSpecialServicesRequested $shipmentSpecialServices)
    {
        $this->values['shipmentSpecialServices'] = $shipmentSpecialServices;
        return $this;
    }

    /**
     * Get shipmentSpecialServices
     *
     * @return RateRequestedShipmentSpecialServicesRequested
     */
    public function getShipmentSpecialServices()
    {
        return $this->values['shipmentSpecialServices'];
    }

    /**
     * Set customsClearanceDetail
     *
     *
     * Example:
     * @param RateRequestedShipmentCustomsClearanceDetail $customsClearanceDetail
     * @return $this
     */
    public function setCustomsClearanceDetail(RateRequestedShipmentCustomsClearanceDetail $customsClearanceDetail)
    {
        $this->values['customsClearanceDetail'] = $customsClearanceDetail;
        return $this;
    }

    /**
     * Get customsClearanceDetail
     *
     * @return RateRequestedShipmentCustomsClearanceDetail
     */
    public function getCustomsClearanceDetail()
    {
        return $this->values['customsClearanceDetail'];
    }

    /**
     * Set groupShipment
     *
     *
     * Example: 1
     * @param boolean $groupShipment
     * @return $this
     */
    public function setGroupShipment($groupShipment)
    {
        $this->values['groupShipment'] = $groupShipment;
        return $this;
    }

    /**
     * Get groupShipment
     *
     * @return boolean
     */
    public function getGroupShipment()
    {
        return $this->values['groupShipment'];
    }

    /**
     * Set serviceTypeDetail
     *
     *
     * Example:
     * @param RateServiceTypeDetailVO $serviceTypeDetail
     * @return $this
     */
    public function setServiceTypeDetail(RateServiceTypeDetailVO $serviceTypeDetail)
    {
        $this->values['serviceTypeDetail'] = $serviceTypeDetail;
        return $this;
    }

    /**
     * Get serviceTypeDetail
     *
     * @return RateServiceTypeDetailVO
     */
    public function getServiceTypeDetail()
    {
        return $this->values['serviceTypeDetail'];
    }

    /**
     * Set smartPostInfoDetail
     *
     *
     * Example:
     * @param RateRequestedShipmentSmartPostInfoDetail $smartPostInfoDetail
     * @return $this
     */
    public function setSmartPostInfoDetail(RateRequestedShipmentSmartPostInfoDetail $smartPostInfoDetail)
    {
        $this->values['smartPostInfoDetail'] = $smartPostInfoDetail;
        return $this;
    }

    /**
     * Get smartPostInfoDetail
     *
     * @return RateRequestedShipmentSmartPostInfoDetail
     */
    public function getSmartPostInfoDetail()
    {
        return $this->values['smartPostInfoDetail'];
    }

    /**
     * Set expressFreightDetail
     *
     *
     * Example:
     * @param RateExpressFreightDetail $expressFreightDetail
     * @return $this
     */
    public function setExpressFreightDetail(RateExpressFreightDetail $expressFreightDetail)
    {
        $this->values['expressFreightDetail'] = $expressFreightDetail;
        return $this;
    }

    /**
     * Get expressFreightDetail
     *
     * @return RateExpressFreightDetail
     */
    public function getExpressFreightDetail()
    {
        return $this->values['expressFreightDetail'];
    }

    /**
     * Set groundShipment
     *
     *
     *
     * @param boolean $groundShipment
     * @return $this
     */
    public function setGroundShipment($groundShipment)
    {
        $this->values['groundShipment'] = $groundShipment;
        return $this;
    }

    /**
     * Get groundShipment
     *
     * @return boolean
     */
    public function getGroundShipment()
    {
        return $this->values['groundShipment'];
    }
}
