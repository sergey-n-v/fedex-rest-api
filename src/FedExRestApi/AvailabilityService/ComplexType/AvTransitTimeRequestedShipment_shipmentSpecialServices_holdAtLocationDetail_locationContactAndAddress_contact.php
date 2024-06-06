<?php
namespace FedExRestApi\AvailabilityService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Specify the Hold at location contact details.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $personName
 * @property string $emailAddress
 * @property string $phoneNumber
 * @property string $phoneExtension
 * @property string $faxNumber
 * @property string $companyName

 */
class AvTransitTimeRequestedShipment_shipmentSpecialServices_holdAtLocationDetail_locationContactAndAddress_contact extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvTransitTimeRequestedShipment_shipmentSpecialServices_holdAtLocationDetail_locationContactAndAddress_contact';

    /**
     * Specify contact name.<br>Note: Recommended Length is 70. There's no specific validation for the length.<br> Example: John Taylor
     *
     *
     * Example: John Taylor
     * @param string $personName
     * @return $this
     */
    public function setPersonName($personName)
    {
        $this->values['personName'] = $personName;
        return $this;
    }

    /**
     * Get personName
     *
     * @return string
     */
    public function getPersonName()
    {
        return $this->values['personName'];
    }

    /**
     * Specify contact email address. Maximum length is 80. <br> Example: sample@company.com
     *
     *
     * Example: sample@company.com
     * @param string $emailAddress
     * @return $this
     */
    public function setEmailAddress($emailAddress)
    {
        $this->values['emailAddress'] = $emailAddress;
        return $this;
    }

    /**
     * Get emailAddress
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->values['emailAddress'];
    }

    /**
     * Specify contact phone number. Maximum length is 15. <br> Example: 1234567890
     *
     *
     * Example: 1234567890
     * @param string $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->values['phoneNumber'] = $phoneNumber;
        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->values['phoneNumber'];
    }

    /**
     * Specify contact phone extension. Maximum length is 6. <br> Example: 1234
     *
     *
     * Example: 1234
     * @param string $phoneExtension
     * @return $this
     */
    public function setPhoneExtension($phoneExtension)
    {
        $this->values['phoneExtension'] = $phoneExtension;
        return $this;
    }

    /**
     * Get phoneExtension
     *
     * @return string
     */
    public function getPhoneExtension()
    {
        return $this->values['phoneExtension'];
    }

    /**
     * Specify contact fax number. Maximum length is 15. <br> Example: 1234567890
     *
     *
     * Example: 1234567890
     * @param string $faxNumber
     * @return $this
     */
    public function setFaxNumber($faxNumber)
    {
        $this->values['faxNumber'] = $faxNumber;
        return $this;
    }

    /**
     * Get faxNumber
     *
     * @return string
     */
    public function getFaxNumber()
    {
        return $this->values['faxNumber'];
    }

    /**
     * Specify contact company name. Maximum length is 35.
     *
     *
     * Example: Fedex
     * @param string $companyName
     * @return $this
     */
    public function setCompanyName($companyName)
    {
        $this->values['companyName'] = $companyName;
        return $this;
    }

    /**
     * Get companyName
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->values['companyName'];
    }
}
