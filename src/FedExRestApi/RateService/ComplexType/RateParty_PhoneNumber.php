<?php
namespace FedExRestApi\RateService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Indicate the phone number. Only numeric values allowed.
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
class RateParty_PhoneNumber extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateParty_PhoneNumber';

    /**
     * Set areaCode
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
     * Set extension
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
     * Set countryCode
     *
     *
     * Example:
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
     * Set personalIdentificationNumber
     *
     *
     * Example: 3575012
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
     * Set localNumber
     *
     *
     * Example: 234123
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
