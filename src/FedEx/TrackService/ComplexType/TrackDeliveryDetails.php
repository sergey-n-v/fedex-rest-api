<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Delivery related information for the tracked package. Provides delivery details as actual delivery address once the package is delivered, the number of delivery attempts made etc.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $receivedByName
 * @property string $destinationServiceArea
 * @property string $destinationServiceAreaDescription
 * @property string $locationDescription
 * @property TrackAddressVO1 $actualDeliveryAddress
 * @property boolean $deliveryToday
 * @property string $locationType
 * @property string $signedByName
 * @property string $officeOrderDeliveryMethod
 * @property string $deliveryAttempts
 * @property TrackDeliveryOptionElgibilityDetails[] $deliveryOptionEligibilityDetails

 */
class TrackDeliveryDetails extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackDeliveryDetails';

    /**
     * Set receivedByName
     *
     * 
     * Example: Reciever
     * @param string $receivedByName
     * @return $this
     */
    public function setReceivedByName($receivedByName)
    {
        $this->values['receivedByName'] = $receivedByName;
        return $this;
    }

    /**
     * Get receivedByName
     *
     * @return string
     */
    public function getReceivedByName()
    {
        return $this->values['receivedByName'];
    }

    /**
     * Set destinationServiceArea
     *
     * 
     * Example: EDDUNAVAILABLE
     * @param string $destinationServiceArea
     * @return $this
     */
    public function setDestinationServiceArea($destinationServiceArea)
    {
        $this->values['destinationServiceArea'] = $destinationServiceArea;
        return $this;
    }

    /**
     * Get destinationServiceArea
     *
     * @return string
     */
    public function getDestinationServiceArea()
    {
        return $this->values['destinationServiceArea'];
    }

    /**
     * Set destinationServiceAreaDescription
     *
     * 
     * Example: Appointment required
     * @param string $destinationServiceAreaDescription
     * @return $this
     */
    public function setDestinationServiceAreaDescription($destinationServiceAreaDescription)
    {
        $this->values['destinationServiceAreaDescription'] = $destinationServiceAreaDescription;
        return $this;
    }

    /**
     * Get destinationServiceAreaDescription
     *
     * @return string
     */
    public function getDestinationServiceAreaDescription()
    {
        return $this->values['destinationServiceAreaDescription'];
    }

    /**
     * Set locationDescription
     *
     * 
     * Example: Receptionist/Front Desk
     * @param string $locationDescription
     * @return $this
     */
    public function setLocationDescription($locationDescription)
    {
        $this->values['locationDescription'] = $locationDescription;
        return $this;
    }

    /**
     * Get locationDescription
     *
     * @return string
     */
    public function getLocationDescription()
    {
        return $this->values['locationDescription'];
    }

    /**
     * Set actualDeliveryAddress
     *
     * 
     * Example: 
     * @param TrackAddressVO1 $actualDeliveryAddress
     * @return $this
     */
    public function setActualDeliveryAddress(TrackAddressVO1 $actualDeliveryAddress)
    {
        $this->values['actualDeliveryAddress'] = $actualDeliveryAddress;
        return $this;
    }

    /**
     * Get actualDeliveryAddress
     *
     * @return TrackAddressVO1
     */
    public function getActualDeliveryAddress()
    {
        return $this->values['actualDeliveryAddress'];
    }

    /**
     * Set deliveryToday
     *
     * 
     * 
     * @param boolean $deliveryToday
     * @return $this
     */
    public function setDeliveryToday($deliveryToday)
    {
        $this->values['deliveryToday'] = $deliveryToday;
        return $this;
    }

    /**
     * Get deliveryToday
     *
     * @return boolean
     */
    public function getDeliveryToday()
    {
        return $this->values['deliveryToday'];
    }

    /**
     * Set locationType
     *
     * simpleClass: TrackLocationType
     * Example: APARTMENT_OFFICE
     * @param string $locationType
     * @return $this
     */
    public function setLocationType($locationType)
    {
        $this->values['locationType'] = $locationType;
        return $this;
    }

    /**
     * Get locationType
     *
     * @return string
     */
    public function getLocationType()
    {
        return $this->values['locationType'];
    }

    /**
     * Set signedByName
     *
     * 
     * Example: Reciever
     * @param string $signedByName
     * @return $this
     */
    public function setSignedByName($signedByName)
    {
        $this->values['signedByName'] = $signedByName;
        return $this;
    }

    /**
     * Get signedByName
     *
     * @return string
     */
    public function getSignedByName()
    {
        return $this->values['signedByName'];
    }

    /**
     * Set officeOrderDeliveryMethod
     *
     * 
     * Example: Courier
     * @param string $officeOrderDeliveryMethod
     * @return $this
     */
    public function setOfficeOrderDeliveryMethod($officeOrderDeliveryMethod)
    {
        $this->values['officeOrderDeliveryMethod'] = $officeOrderDeliveryMethod;
        return $this;
    }

    /**
     * Get officeOrderDeliveryMethod
     *
     * @return string
     */
    public function getOfficeOrderDeliveryMethod()
    {
        return $this->values['officeOrderDeliveryMethod'];
    }

    /**
     * Set deliveryAttempts
     *
     * 
     * 
     * @param string $deliveryAttempts
     * @return $this
     */
    public function setDeliveryAttempts($deliveryAttempts)
    {
        $this->values['deliveryAttempts'] = $deliveryAttempts;
        return $this;
    }

    /**
     * Get deliveryAttempts
     *
     * @return string
     */
    public function getDeliveryAttempts()
    {
        return $this->values['deliveryAttempts'];
    }

    /**
     * Set deliveryOptionEligibilityDetails
     *
     * 
     * Example: 
     * @param TrackDeliveryOptionElgibilityDetails[] $deliveryOptionEligibilityDetails
     * @return $this
     */
    public function setDeliveryOptionEligibilityDetails(array $deliveryOptionEligibilityDetails)
    {
        $this->values['deliveryOptionEligibilityDetails'] = $deliveryOptionEligibilityDetails;
        return $this;
    }

    /**
     * Get deliveryOptionEligibilityDetails
     *
     * @return TrackDeliveryOptionElgibilityDetails[]
     */
    public function getDeliveryOptionEligibilityDetails()
    {
        return $this->values['deliveryOptionEligibilityDetails'];
    }
}
