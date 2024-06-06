<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Use this endpoint to create a pickup request.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property PickupAccountNumber $associatedAccountNumber
 * @property PickupOriginDetail $originDetail
 * @property string $associatedAccountNumberType
 * @property PickupWeight $totalWeight
 * @property int $packageCount
 * @property string $carrierCode
 * @property PickupAddress_1 $accountAddressOfRecord
 * @property string $remarks
 * @property string $countryRelationships
 * @property string $pickupType
 * @property string $trackingNumber
 * @property string $commodityDescription
 * @property PickupExpressFreightPickupDetail $expressFreightDetail
 * @property int $oversizePackageCount
 * @property PickupPickupNotificationdetail $pickupNotificationDetail

 */
class PickupFull_Schema_Create_Pickup extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PickupFull_Schema_Create_Pickup';

    /**
     * Set associatedAccountNumber
     *
     * 
     * Example: 
     * @param PickupAccountNumber $associatedAccountNumber
     * @return $this
     */
    public function setAssociatedAccountNumber(PickupAccountNumber $associatedAccountNumber)
    {
        $this->values['associatedAccountNumber'] = $associatedAccountNumber;
        return $this;
    }

    /**
     * Get associatedAccountNumber
     *
     * @return PickupAccountNumber
     */
    public function getAssociatedAccountNumber()
    {
        return $this->values['associatedAccountNumber'];
    }

    /**
     * The origin address if different than the one associated with the shipper account. This element value is required when the package is to be picked up from an address other than the shipper account address.
     *
     * 
     * Example: 
     * @param PickupOriginDetail $originDetail
     * @return $this
     */
    public function setOriginDetail($originDetail)
    {
        $this->values['originDetail'] = $originDetail;
        return $this;
    }

    /**
     * Get originDetail
     *
     * @return PickupOriginDetail
     */
    public function getOriginDetail()
    {
        return $this->values['originDetail'];
    }

    /**
     * This enumeration represents a kind of legacy account number from a FedEx operating entity for the account number associated to the pickup.<br> Valid values are: FEDEX_EXPRESS<br>FEDEX_GROUND<br>
     *
     * 
     * Example: FEDEX_GROUND
     * @param string $associatedAccountNumberType
     * @return $this
     */
    public function setAssociatedAccountNumberType($associatedAccountNumberType)
    {
        $this->values['associatedAccountNumberType'] = $associatedAccountNumberType;
        return $this;
    }

    /**
     * Get associatedAccountNumberType
     *
     * @return string
     */
    public function getAssociatedAccountNumberType()
    {
        return $this->values['associatedAccountNumberType'];
    }

    /**
     * Specify The total weight of the packages for the pickup. Unit of measure is
 LB.
     *
     * 
     * Example: 
     * @param PickupWeight $totalWeight
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
     * @return PickupWeight
     */
    public function getTotalWeight()
    {
        return $this->values['totalWeight'];
    }

    /**
     * Specify the total number of packages for the pickup.<br> Example: 5
     *
     * 
     * Example: 5
     * @param int $packageCount
     * @return $this
     */
    public function setPackageCount($packageCount)
    {
        $this->values['packageCount'] = $packageCount;
        return $this;
    }

    /**
     * Get packageCount
     *
     * @return int
     */
    public function getPackageCount()
    {
        return $this->values['packageCount'];
    }

    /**
     * Specify the four letter code of a FedEx operating company that meets your requirements.<br> Examples of FedEx Operating Comapnies are :  <ul><li>FDXE- FedEx Express</li><li>FDXG- FedEx Ground</li>
     *
     * simpleClass: PickupCarrierCode
     * Example: FDXE
     * @param string $carrierCode
     * @return $this
     */
    public function setCarrierCode($carrierCode)
    {
        $this->values['carrierCode'] = $carrierCode;
        return $this;
    }

    /**
     * Get carrierCode
     *
     * @return string
     */
    public function getCarrierCode()
    {
        return $this->values['carrierCode'];
    }

    /**
     * The city name, state or province code and the address classification associated with the customer account which requested the pickup.
     *
     * 
     * Example: 
     * @param PickupAddress_1 $accountAddressOfRecord
     * @return $this
     */
    public function setAccountAddressOfRecord($accountAddressOfRecord)
    {
        $this->values['accountAddressOfRecord'] = $accountAddressOfRecord;
        return $this;
    }

    /**
     * Get accountAddressOfRecord
     *
     * @return PickupAddress_1
     */
    public function getAccountAddressOfRecord()
    {
        return $this->values['accountAddressOfRecord'];
    }

    /**
     * Placeholder for any message to be passed to the FedEx pickup courier.<br>Note:Maximum length is 60 characters.<br> Example: Please ring bell at loading dock.
     *
     * 
     * Example: Please ring bell at loading dock.
     * @param string $remarks
     * @return $this
     */
    public function setRemarks($remarks)
    {
        $this->values['remarks'] = $remarks;
        return $this;
    }

    /**
     * Get remarks
     *
     * @return string
     */
    public function getRemarks()
    {
        return $this->values['remarks'];
    }

    /**
     * Describes the country relationship among the shipments being picked up. This element is not mandatory for this request, but when added, the mandatory values are DOMESTIC or INTERNATIONAL. Empty or incorrect values will result in to errors.
     *
     * simpleClass: PickupCountryRelationships
     * Example: 
     * @param string $countryRelationships
     * @return $this
     */
    public function setCountryRelationships($countryRelationships)
    {
        $this->values['countryRelationships'] = $countryRelationships;
        return $this;
    }

    /**
     * Get countryRelationships
     *
     * @return string
     */
    public function getCountryRelationships()
    {
        return $this->values['countryRelationships'];
    }

    /**
     * Indicate the pickup type method by which the shipment to be tendered to FedEx.<br><i>Note: The value of this element does not specify dispatching the courier for package pickup.</i> <br>Example: ON_CALL, PACKAGE_RETURN_PROGRAM, REGULAR_STOP <br><a onclick='loadDocReference("pickuptypes")'>Click here for more information on Pickup Types.</a>
     *
     * 
     * Example: ON_CALL, PACKAGE_RETURN_PROGRAM, REGULAR_STOP.
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
     * This is a Tracking number for FedEx packages used for tracking a single package or group of packages.<br> Example: 795803657326<br><a onclick='loadDocReference("mocktrackingnumbersforfedexexpressandfedexground")'>Click here to see mock tracking numbers for FedEx Express and FedEx Ground.</a>
     *
     * 
     * Example: 795803657326
     * @param string $trackingNumber
     * @return $this
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->values['trackingNumber'] = $trackingNumber;
        return $this;
    }

    /**
     * Get trackingNumber
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->values['trackingNumber'];
    }

    /**
     * Description of the commodity being shipped. <br>Example:This field contains Commodity Description.<br><a onclick='loadDocReference("vaguecommoditydescriptions")'>Click here to see Vague commodity descriptions</a>
     *
     * 
     * Example: This field contains CommodityDescription
     * @param string $commodityDescription
     * @return $this
     */
    public function setCommodityDescription($commodityDescription)
    {
        $this->values['commodityDescription'] = $commodityDescription;
        return $this;
    }

    /**
     * Get commodityDescription
     *
     * @return string
     */
    public function getCommodityDescription()
    {
        return $this->values['commodityDescription'];
    }

    /**
     * Placeholder for Express Freight pickup details.
     *
     * 
     * Example: 
     * @param PickupExpressFreightPickupDetail $expressFreightDetail
     * @return $this
     */
    public function setExpressFreightDetail($expressFreightDetail)
    {
        $this->values['expressFreightDetail'] = $expressFreightDetail;
        return $this;
    }

    /**
     * Get expressFreightDetail
     *
     * @return PickupExpressFreightPickupDetail
     */
    public function getExpressFreightDetail()
    {
        return $this->values['expressFreightDetail'];
    }

    /**
     * Specify the number of oversize packages that are tendered to FedEx Ground.
     *
     * 
     * Example: 2
     * @param int $oversizePackageCount
     * @return $this
     */
    public function setOversizePackageCount($oversizePackageCount)
    {
        $this->values['oversizePackageCount'] = $oversizePackageCount;
        return $this;
    }

    /**
     * Get oversizePackageCount
     *
     * @return int
     */
    public function getOversizePackageCount()
    {
        return $this->values['oversizePackageCount'];
    }

    /**
     * Set pickupNotificationDetail
     *
     * 
     * Example: 
     * @param PickupPickupNotificationdetail $pickupNotificationDetail
     * @return $this
     */
    public function setPickupNotificationDetail($pickupNotificationDetail)
    {
        $this->values['pickupNotificationDetail'] = $pickupNotificationDetail;
        return $this;
    }

    /**
     * Get pickupNotificationDetail
     *
     * @return PickupPickupNotificationdetail
     */
    public function getPickupNotificationDetail()
    {
        return $this->values['pickupNotificationDetail'];
    }
}
