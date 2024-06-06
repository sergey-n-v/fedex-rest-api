<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Indicates the contact details for the party such as name, phonenumber.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $companyName
 * @property string $personName
 * @property string $phoneNumber
 * @property string $phoneExtension

 */
class PickupContact_CreatePickup extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PickupContact_CreatePickup';

    /**
     * Specify the contact person's company name. Maximum length is 35.
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

    /**
     * Specify the contact person's name. Maximum Length is 70.
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
     * Specify the contact person's phone number. Minimum Length is 8 and Maximum legth is 13.
     *
     * 
     * Example: 7194446666
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
     * Specify the contact person's phone extension. Maximum length is 6.
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
}
