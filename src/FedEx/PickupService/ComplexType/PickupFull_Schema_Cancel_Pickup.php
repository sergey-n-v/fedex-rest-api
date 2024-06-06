<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This is a placeholder for cancelled pickup request elements.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property PickupAccountNumber $associatedAccountNumber
 * @property string $pickupConfirmationCode
 * @property string $remarks
 * @property string $carrierCode
 * @property PickupAccountAddressOfRecord $accountAddressOfRecord
 * @property string $scheduledDate
 * @property string $location

 */
class PickupFull_Schema_Cancel_Pickup extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PickupFull_Schema_Cancel_Pickup';

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
     * The confirmation number provided by FedEx to the customer when the pickup was scheduled or requested.<br> Example: 7
     *
     * 
     * Example: 7
     * @param string $pickupConfirmationCode
     * @return $this
     */
    public function setPickupConfirmationCode($pickupConfirmationCode)
    {
        $this->values['pickupConfirmationCode'] = $pickupConfirmationCode;
        return $this;
    }

    /**
     * Get pickupConfirmationCode
     *
     * @return string
     */
    public function getPickupConfirmationCode()
    {
        return $this->values['pickupConfirmationCode'];
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
     * This is a placeholder to provide the FedEx operating company (transportation) code used for package delivery. Required for FedEx Ground.<br> Optional for FedEx Express.<br> The Default is FedEx Express i.e. FDXE.
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
     * Set accountAddressOfRecord
     *
     * 
     * Example: 
     * @param PickupAddress|PickupAccountAddressOfRecord $accountAddressOfRecord
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
     * @return PickupAddress|PickupAccountAddressOfRecord
     */
    public function getAccountAddressOfRecord()
    {
        return $this->values['accountAddressOfRecord'];
    }

    /**
     * Indicates the date the pickup dispatch occurs.<br>Format YYYY-MM-DD <br> Example: 2019-10-15
     *
     * 
     * Example: 2019-10-15
     * @param string $scheduledDate
     * @return $this
     */
    public function setScheduledDate($scheduledDate)
    {
        $this->values['scheduledDate'] = $scheduledDate;
        return $this;
    }

    /**
     * Get scheduledDate
     *
     * @return string
     */
    public function getScheduledDate()
    {
        return $this->values['scheduledDate'];
    }

    /**
     * The FedEx Express location identifier responsible for processing the pickup request. This is returned in the CreatePickup response and is required to cancel a FedEx Express dispatch.Required only for FedEx Express Pickups. Optional for FedEx Ground. Example: LOSA
     *
     * 
     * Example: LOSA
     * @param string $location
     * @return $this
     */
    public function setLocation($location)
    {
        $this->values['location'] = $location;
        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->values['location'];
    }
}
