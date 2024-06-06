<?php
namespace FedEx\AddressValidationService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * PhoneNumber Model
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
class AddressValidationPhoneNumber extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AddressValidationPhoneNumber';

    /**
     * Area-Code of given area
     *
     * 
     * Example: 987
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
     * Extension of the phone number
     *
     * 
     * Example: 1234
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
     * The two-letter code used to identify a country.
     *
     * 
     * Example: 91
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
     * Personal Identification Number
     *
     * 
     * Example: 8575
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
     * Local Number of the person
     *
     * 
     * Example: 9879878
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
