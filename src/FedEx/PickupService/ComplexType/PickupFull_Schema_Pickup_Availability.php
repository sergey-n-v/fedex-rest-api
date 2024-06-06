<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * These are pickup availability request elements.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property PickupPickupAddress $pickupAddress
 * @property string $dispatchDate
 * @property string $packageReadyTime
 * @property string $customerCloseTime
 * @property string $pickupType
 * @property string $pickupRequestType
 * @property PickupShipmentAttributes $shipmentAttributes
 * @property int $numberOfBusinessDays
 * @property PickupRequestedPickupPackageDetail[] $packageDetails
 * @property string $associatedAccountNumber
 * @property string $associatedAccountNumberType
 * @property string $carriers
 * @property string $countryRelationship

 */
class PickupFull_Schema_Pickup_Availability extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PickupFull_Schema_Pickup_Availability';

    /**
     * Set pickupAddress
     *
     * 
     * Example: 
     * @param PickupAddress|PickupPickupAddress $pickupAddress
     * @return $this
     */
    public function setPickupAddress($pickupAddress)
    {
        $this->values['pickupAddress'] = $pickupAddress;
        return $this;
    }

    /**
     * Get pickupAddress
     *
     * @return PickupAddress|PickupPickupAddress
     */
    public function getPickupAddress()
    {
        return $this->values['pickupAddress'];
    }

    /**
     * Specify the date the package is to be picked up. The format is YYYY-MM-DD. If left blank, the system considers current date as dispatch date.<br> Example: 2020-01-01
     *
     * 
     * Example: 2020-10-14
     * @param string $dispatchDate
     * @return $this
     */
    public function setDispatchDate($dispatchDate)
    {
        $this->values['dispatchDate'] = $dispatchDate;
        return $this;
    }

    /**
     * Get dispatchDate
     *
     * @return string
     */
    public function getDispatchDate()
    {
        return $this->values['dispatchDate'];
    }

    /**
     * Specify the time that the package will be ready for pickup. The time format is HH:MM:SS and it refers to the local timezone. The driver should pick up the package/shipment by the given pickup time.<br> Example: 15:00:00
     *
     * 
     * Example: 15:30:00
     * @param string $packageReadyTime
     * @return $this
     */
    public function setPackageReadyTime($packageReadyTime)
    {
        $this->values['packageReadyTime'] = $packageReadyTime;
        return $this;
    }

    /**
     * Get packageReadyTime
     *
     * @return string
     */
    public function getPackageReadyTime()
    {
        return $this->values['packageReadyTime'];
    }

    /**
     * Specify the latest time the driver gets access to pick up the package. The time format is in HH:MM:SS and it refers to the local timezone. The driver should pick up the package by the given pickup time.<br>Example: 18:00:00
     *
     * 
     * Example: 18:00:00
     * @param string $customerCloseTime
     * @return $this
     */
    public function setCustomerCloseTime($customerCloseTime)
    {
        $this->values['customerCloseTime'] = $customerCloseTime;
        return $this;
    }

    /**
     * Get customerCloseTime
     *
     * @return string
     */
    public function getCustomerCloseTime()
    {
        return $this->values['customerCloseTime'];
    }

    /**
     * Indicate the pickup type method by which the shipment to be tendered to FedEx.<br><i>Note: The value of this element does not specify dispatching the courier for package pickup.</i><br><a onclick='loadDocReference("pickuptypes")'>Click here for more information on Pickup Types.</a>
     *
     * simpleClass: PickupPickupType
     * Example: ON_CALL
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
     * Specify pickup request type.
     *
     * simpleClass: PickupPickupRequestType
     * Example: ["SAME_DAY"]
     * @param string $pickupRequestType
     * @return $this
     */
    public function setPickupRequestType(array $pickupRequestType)
    {
        $this->values['pickupRequestType'] = $pickupRequestType;
        return $this;
    }

    /**
     * Get pickupRequestType
     *
     * @return string
     */
    public function getPickupRequestType()
    {
        return $this->values['pickupRequestType'];
    }

    /**
     * Set shipmentAttributes
     *
     * 
     * Example: 
     * @param PickupPickupShipmentAttributes $shipmentAttributes
     * @return $this
     */
    public function setShipmentAttributes($shipmentAttributes)
    {
        $this->values['shipmentAttributes'] = $shipmentAttributes;
        return $this;
    }

    /**
     * Get shipmentAttributes
     *
     * @return PickupPickupShipmentAttributes
     */
    public function getShipmentAttributes()
    {
        return $this->values['shipmentAttributes'];
    }

    /**
     * Specify number of business days to consider when checking availability.<br>For example if you are indicating pickupDate for a Saturday and you indicate 3, Saturday, Sunday and Monday will be considered. <br> Example: 3
     *
     * 
     * Example: 1
     * @param int $numberOfBusinessDays
     * @return $this
     */
    public function setNumberOfBusinessDays($numberOfBusinessDays)
    {
        $this->values['numberOfBusinessDays'] = $numberOfBusinessDays;
        return $this;
    }

    /**
     * Get numberOfBusinessDays
     *
     * @return int
     */
    public function getNumberOfBusinessDays()
    {
        return $this->values['numberOfBusinessDays'];
    }

    /**
     * This object is used to specify the package details.
     *
     * 
     * Example: 
     * @param PickupRequestedPickupPackageDetail[] $packageDetails
     * @return $this
     */
    public function setPackageDetails(array $packageDetails)
    {
        $this->values['packageDetails'] = $packageDetails;
        return $this;
    }

    /**
     * Get packageDetails
     *
     * @return PickupRequestedPickupPackageDetail[]
     */
    public function getPackageDetails()
    {
        return $this->values['packageDetails'];
    }

    /**
     * The associated account number, which will be invoiced for the pickup.<br>Example:613787364.
     *
     * 
     * Example: 613787364
     * @param string $associatedAccountNumber
     * @return $this
     */
    public function setAssociatedAccountNumber($associatedAccountNumber)
    {
        $this->values['associatedAccountNumber'] = $associatedAccountNumber;
        return $this;
    }

    /**
     * Get associatedAccountNumber
     *
     * @return string
     */
    public function getAssociatedAccountNumber()
    {
        return $this->values['associatedAccountNumber'];
    }

    /**
     * This represents a kind of legacy account number from a FedEx operating entity for the account number associated to the pickup.<br>Valid values are: FEDEX_EXPRESS<br>FEDEX_GROUND<br>
     *
     * simpleClass: PickupAssociatedAccountNumberType
     * Example: FEDEX_EXPRESS
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
     * Specify the four letter code of a FedEx operating company thet meets your requirements.<br>Examples of FedEx Operating Companies are: <ul><li>FDXE - FedEx Express</li><li>FDXG - FedEx Ground</li></ul>
     *
     * simpleClass: PickupCarriers
     * Example: ["FDXE"]
     * @param string $carriers
     * @return $this
     */
    public function setCarriers(array $carriers)
    {
        $this->values['carriers'] = $carriers;
        return $this;
    }

    /**
     * Get carriers
     *
     * @return string
     */
    public function getCarriers()
    {
        return $this->values['carriers'];
    }

    /**
     * Specify the country relationship among the shipments being picked up. Empty or incorrect values will result in to errors. <br><br><i>Note: <b>shipmentAttributes/serviceType</b> is required for domestic or international pickup availabilities.</i>
     *
     * simpleClass: PickupCountryRelationship
     * Example: INTERNATIONAL
     * @param string $countryRelationship
     * @return $this
     */
    public function setCountryRelationship($countryRelationship)
    {
        $this->values['countryRelationship'] = $countryRelationship;
        return $this;
    }

    /**
     * Get countryRelationship
     *
     * @return string
     */
    public function getCountryRelationship()
    {
        return $this->values['countryRelationship'];
    }
}
