<?php
namespace FedEx\AvailabilityService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This field provides the data details for Fedex Freight Detail service.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $type
 * @property string $transportationType
 * @property string $eMailAddress
 * @property AvFreightPhoneNumberDetail[] $phoneNumberDetails

 */
class AvFreightDirectDataDetails extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvFreightDirectDataDetails';

    /**
     * This field provides the type for FedexFreight Detail service.<br> Example: <ul><li>BASIC</li><li>BASIC_BY_APPOINTMENT</li><li>PREMIUM</li><li>STANDARD</li></ul>
     *
     * simpleClass: AvType
     * Example: STANDARD
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['type'] = $type;
        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->values['type'];
    }

    /**
     * This field provides the transportation type for Fedex Freight Detail service.<br> Example: <ul><li>DELIVERY</li><li>PICKUP</li></ul>
     *
     * simpleClass: AvTransportationType
     * Example: DELIVERY
     * @param string $transportationType
     * @return $this
     */
    public function setTransportationType($transportationType)
    {
        $this->values['transportationType'] = $transportationType;
        return $this;
    }

    /**
     * Get transportationType
     *
     * @return string
     */
    public function getTransportationType()
    {
        return $this->values['transportationType'];
    }

    /**
     * This field provides the email address associated with the freight user
     *
     * 
     * Example: raj.osv@fedex.com
     * @param string $eMailAddress
     * @return $this
     */
    public function setEMailAddress($eMailAddress)
    {
        $this->values['eMailAddress'] = $eMailAddress;
        return $this;
    }

    /**
     * Get eMailAddress
     *
     * @return string
     */
    public function getEMailAddress()
    {
        return $this->values['eMailAddress'];
    }

    /**
     * This field prvides the phone number details associated with freight services
     *
     * 
     * Example: 
     * @param AvFreightPhoneNumberDetail[] $phoneNumberDetails
     * @return $this
     */
    public function setPhoneNumberDetails(array $phoneNumberDetails)
    {
        $this->values['phoneNumberDetails'] = $phoneNumberDetails;
        return $this;
    }

    /**
     * Get phoneNumberDetails
     *
     * @return AvFreightPhoneNumberDetail[]
     */
    public function getPhoneNumberDetails()
    {
        return $this->values['phoneNumberDetails'];
    }
}
