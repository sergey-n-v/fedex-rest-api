<?php
namespace FedEx\AvailabilityService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Contact details for the Party such as Name, Email, PhoneNumber
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
class AvContact1 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvContact1';

    /**
     * Specify the recipient contact person's name. Max Length is 70.<br>Example: John Taylor
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
     * Contact person's email address. Max length is 80.<br>Example: sample@company.com
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
     * Contact person's phone number. Max length is 15.<br>Example: 1234567890
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
     * contact person's phone extension. Max length is 6.<br>Example: 91
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
     * Contact person's fax number. Max length is 15.<br>Example: 956123
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
     * Specify contact person's company name. Max length is 35.<br>Example: FedEx
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
