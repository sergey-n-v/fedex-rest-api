<?php
namespace FedEx\AvailabilityService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * A phone number for a party. Numeric only
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $areaCode
 * @property string $extension
 * @property string $countryCode
 * @property string $personalIdentificationNumber
 * @property string $localNumber

 */
class AvPhoneNumber extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvPhoneNumber';

    /**
     * Indicate the Area Code for the phone number.
     *
     * 
     * Example: 
     * @param string $areaCode
     * @return $this
     */
    public function setAreaCode($areaCode)
    {
        $this->values['areaCode'] = $areaCode;
        return $this;
    }

    /**
     * Get areaCode
     *
     * @return string
     */
    public function getAreaCode()
    {
        return $this->values['areaCode'];
    }

    /**
     * Indicate the extension for the phone number.
     *
     * 
     * Example: 
     * @param string $extension
     * @return $this
     */
    public function setExtension($extension)
    {
        $this->values['extension'] = $extension;
        return $this;
    }

    /**
     * Get extension
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->values['extension'];
    }

    /**
     * The two-letter code used to identify a country.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     *
     * 
     * Example: US
     * @param string $countryCode
     * @return $this
     */
    public function setCountryCode($countryCode)
    {
        $this->values['countryCode'] = $countryCode;
        return $this;
    }

    /**
     * Get countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->values['countryCode'];
    }

    /**
     * Indicate the Personal Identification Number associated with the phone number.
     *
     * 
     * Example: 
     * @param string $personalIdentificationNumber
     * @return $this
     */
    public function setPersonalIdentificationNumber($personalIdentificationNumber)
    {
        $this->values['personalIdentificationNumber'] = $personalIdentificationNumber;
        return $this;
    }

    /**
     * Get personalIdentificationNumber
     *
     * @return string
     */
    public function getPersonalIdentificationNumber()
    {
        return $this->values['personalIdentificationNumber'];
    }

    /**
     * Indicate the local phone number for contacting in the event of an emergency.
     *
     * 
     * Example: 
     * @param string $localNumber
     * @return $this
     */
    public function setLocalNumber($localNumber)
    {
        $this->values['localNumber'] = $localNumber;
        return $this;
    }

    /**
     * Get localNumber
     *
     * @return string
     */
    public function getLocalNumber()
    {
        return $this->values['localNumber'];
    }
}
