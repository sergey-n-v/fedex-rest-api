<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Indicate the contact details of the shipper.
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
class OpenShipContact_2 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipContact_2';

    /**
     * Specify contact person name.<br>Recommended length is 70. <br><br>Note: There's no specific validation for the person name.<br> Example: John Taylor
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
     * Specify contact phone number. <br><br>Minimum length is 10 and supports maximum of 15 for certain countries using longer phone numbers. <br>Note: Recommended Maximum length is 15 and there's no specific validation will be done for the phone number. <br> Example: 918xxxxx890
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
     * Specify contact phone extension. <br>Note: Recommended length is 6. There's no specific validation for the phone extension. <br> Example: 1234
     *
     *
     * Example: 91
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
     * Specify contact fax number.<br>Note: Recommended length is 15. There's no specific validation for the fax number.<br> Example: 1234567890
     *
     *
     * Example: 956123
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
     * Specify contact company name.<br><br>Recommended length is 35.<br><br>Note: There's no specific validation for the company name.
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
