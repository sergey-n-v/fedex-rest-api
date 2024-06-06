<?php
namespace FedExRestApi\PickupService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Pickup Origin Detail
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $pickupAddressType
 * @property PickupPickupLocationParty $pickupLocation
 * @property string $readyDateTimestamp
 * @property string $customerCloseTime
 * @property string $pickupDateType
 * @property string $packageLocation
 * @property string $buildingPart
 * @property string $buildingPartDescription
 * @property boolean $earlyPickup
 * @property string $suppliesRequested
 * @property string $geographicalPostalCode

 */
class PickupPickupOriginDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PickupPickupOriginDetail';

    /**
     * Indicates the type of pickup address being used whether it is account address, shipper address or alternate address.<br>Note:<br>The default value is OTHER.
     *
     * simpleClass: PickupPickupAddressType
     * Example: ACCOUNT
     * @param string $pickupAddressType
     * @return $this
     */
    public function setPickupAddressType($pickupAddressType)
    {
        $this->values['pickupAddressType'] = $pickupAddressType;
        return $this;
    }

    /**
     * Get pickupAddressType
     *
     * @return string
     */
    public function getPickupAddressType()
    {
        return $this->values['pickupAddressType'];
    }

    /**
     * Set pickupLocation
     *
     *
     * Example:
     * @param PickupParty_createPickup|PickupPickupLocationParty $pickupLocation
     * @return $this
     */
    public function setPickupLocation($pickupLocation)
    {
        $this->values['pickupLocation'] = $pickupLocation;
        return $this;
    }

    /**
     * Get pickupLocation
     *
     * @return PickupParty_createPickup|PickupPickupLocationParty
     */
    public function getPickupLocation()
    {
        return $this->values['pickupLocation'];
    }

    /**
     * Indicates the date and time when the freight shipment/package is ready for pick up.<br>Note:<br>1.The date format must be YYYY-MM-DDTHH:MM:SS.<br>2.The time must be in the format: HH:MM:SS using a 24-hour clock.<br>3.The date and time are separated by the letter T, such as 2015-03-25T09:30:00.<br>4.The time is local to the pickup postal code.5.Do not include a TZD (time zone designator) as it will be ignored.<br>Example: 2019-11-15T11:00:00
     *
     *
     * Example: 2020-04-02T11:00:00Z
     * @param string $readyDateTimestamp
     * @return $this
     */
    public function setReadyDateTimestamp($readyDateTimestamp)
    {
        $this->values['readyDateTimestamp'] = $readyDateTimestamp;
        return $this;
    }

    /**
     * Get readyDateTimestamp
     *
     * @return string
     */
    public function getReadyDateTimestamp()
    {
        return $this->values['readyDateTimestamp'];
    }

    /**
     * Indicates the latest local time at which the driver can gain access to pickup the package(s).Format HH:MM:SS.<br>Note:<br>1.The time must be in the format: HH:MM:SS using a 24-hour clock.<br>2.The time is local to the pickup postal code.<br>3.Do not include a TZD (time zone designator) as it will be ignored.<br>Example: 2019-11-15T11:00:00
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
     * Indicates whether the pickup request is for the same day or on a future date.
     *
     * simpleClass: PickupPickupDateType
     * Example:
     * @param string $pickupDateType
     * @return $this
     */
    public function setPickupDateType($pickupDateType)
    {
        $this->values['pickupDateType'] = $pickupDateType;
        return $this;
    }

    /**
     * Get pickupDateType
     *
     * @return string
     */
    public function getPickupDateType()
    {
        return $this->values['pickupDateType'];
    }

    /**
     * This provides a location description from where the courier/driver must pick up the package. It is mandatory for Ground Pickup.<br> Example: FRONT
     *
     * simpleClass: PickupPackageLocation
     * Example: FRONT
     * @param string $packageLocation
     * @return $this
     */
    public function setPackageLocation($packageLocation)
    {
        $this->values['packageLocation'] = $packageLocation;
        return $this;
    }

    /**
     * Get packageLocation
     *
     * @return string
     */
    public function getPackageLocation()
    {
        return $this->values['packageLocation'];
    }

    /**
     * This is the building type.
     *
     * simpleClass: PickupBuildingPart
     * Example: APARTMENT
     * @param string $buildingPart
     * @return $this
     */
    public function setBuildingPart($buildingPart)
    {
        $this->values['buildingPart'] = $buildingPart;
        return $this;
    }

    /**
     * Get buildingPart
     *
     * @return string
     */
    public function getBuildingPart()
    {
        return $this->values['buildingPart'];
    }

    /**
     * Indicates the building part such as floor suite or apartment number or an identifier of the building.<br>Example: 111
     *
     *
     * Example: 111
     * @param string $buildingPartDescription
     * @return $this
     */
    public function setBuildingPartDescription($buildingPartDescription)
    {
        $this->values['buildingPartDescription'] = $buildingPartDescription;
        return $this;
    }

    /**
     * Get buildingPartDescription
     *
     * @return string
     */
    public function getBuildingPartDescription()
    {
        return $this->values['buildingPartDescription'];
    }

    /**
     * Indicates if it is an early pickup. This applies only to Europe.
     *
     *
     *
     * @param boolean $earlyPickup
     * @return $this
     */
    public function setEarlyPickup($earlyPickup)
    {
        $this->values['earlyPickup'] = $earlyPickup;
        return $this;
    }

    /**
     * Get earlyPickup
     *
     * @return boolean
     */
    public function getEarlyPickup()
    {
        return $this->values['earlyPickup'];
    }

    /**
     * Indicates if any shipping supplies are requested at the pickup origin required to pack the shipment such as FedEx Box, Large Box, FedEx Tube.<br> Example: Supplies requested by customer
     *
     *
     * Example: Supplies requested by customer
     * @param string $suppliesRequested
     * @return $this
     */
    public function setSuppliesRequested($suppliesRequested)
    {
        $this->values['suppliesRequested'] = $suppliesRequested;
        return $this;
    }

    /**
     * Get suppliesRequested
     *
     * @return string
     */
    public function getSuppliesRequested()
    {
        return $this->values['suppliesRequested'];
    }

    /**
     * This is the alternate postal code associated with pickup location. (Applicable only for European pickups)
     *
     *
     * Example: geographicalPostalCode
     * @param string $geographicalPostalCode
     * @return $this
     */
    public function setGeographicalPostalCode($geographicalPostalCode)
    {
        $this->values['geographicalPostalCode'] = $geographicalPostalCode;
        return $this;
    }

    /**
     * Get geographicalPostalCode
     *
     * @return string
     */
    public function getGeographicalPostalCode()
    {
        return $this->values['geographicalPostalCode'];
    }
}
