<?php
namespace FedExRestApi\RateService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * RateSmsDetail
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $phoneNumber
 * @property string $phoneNumberCountryCode

 */
class RateSmsDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateSmsDetail';

    /**
     * Set phoneNumber
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
     * Set phoneNumberCountryCode
     *
     *
     * Example:
     * @param string $phoneNumberCountryCode
     * @return $this
     */
    public function setPhoneNumberCountryCode($phoneNumberCountryCode)
    {
        $this->values['phoneNumberCountryCode'] = $phoneNumberCountryCode;
        return $this;
    }

    /**
     * Get phoneNumberCountryCode
     *
     * @return string
     */
    public function getPhoneNumberCountryCode()
    {
        return $this->values['phoneNumberCountryCode'];
    }
}
