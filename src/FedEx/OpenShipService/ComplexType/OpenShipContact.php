<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specify the contact information.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $personName
 * @property string $tollFreePhoneNumber
 * @property string $emailAddress
 * @property string $phoneNumber
 * @property string $phoneExtension
 * @property string $companyName
 * @property string $pagerNumber
 * @property string $faxNumber
 * @property string $title

 */
class OpenShipContact extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipContact';

    /**
     * Specify person name.<br>Example: John Taylor
     *
     * 
     * Example: 
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
     * Specify toll free phone number.<br>Example: XXXX7812
     *
     * 
     * Example: 
     * @param string $tollFreePhoneNumber
     * @return $this
     */
    public function setTollFreePhoneNumber($tollFreePhoneNumber)
    {
        $this->values['tollFreePhoneNumber'] = $tollFreePhoneNumber;
        return $this;
    }

    /**
     * Get tollFreePhoneNumber
     *
     * @return string
     */
    public function getTollFreePhoneNumber()
    {
        return $this->values['tollFreePhoneNumber'];
    }

    /**
     * Specify email address.<br>Example: sample@company.com
     *
     * 
     * Example: 
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
     * Specify phone number.<br>Example: XXX567890
     *
     * 
     * Example: 
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
     * Specify phone extension.<br>Example: 91
     *
     * 
     * Example: 
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
     * Specify company name.
     *
     * 
     * Example: 
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

    /**
     * Specify pager number.<br>Example: XXX7812
     *
     * 
     * Example: 
     * @param string $pagerNumber
     * @return $this
     */
    public function setPagerNumber($pagerNumber)
    {
        $this->values['pagerNumber'] = $pagerNumber;
        return $this;
    }

    /**
     * Get pagerNumber
     *
     * @return string
     */
    public function getPagerNumber()
    {
        return $this->values['pagerNumber'];
    }

    /**
     * Specify fax number.<br>Example: XXXX567890
     *
     * 
     * Example: 
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
     * Specify the title of the contact.
     *
     * 
     * Example: 
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->values['title'] = $title;
        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->values['title'];
    }
}
