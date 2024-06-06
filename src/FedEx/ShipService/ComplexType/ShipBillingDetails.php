<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * These are billing details.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $billingCode
 * @property string $billingType
 * @property string $aliasId
 * @property string $accountNickname
 * @property string $accountNumber
 * @property string $accountNumberCountryCode

 */
class ShipBillingDetails extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipBillingDetails';

    /**
     * Set billingCode
     *
     * 
     * Example: 
     * @param string $billingCode
     * @return $this
     */
    public function setBillingCode($billingCode)
    {
        $this->values['billingCode'] = $billingCode;
        return $this;
    }

    /**
     * Get billingCode
     *
     * @return string
     */
    public function getBillingCode()
    {
        return $this->values['billingCode'];
    }

    /**
     * Set billingType
     *
     * 
     * Example: 
     * @param string $billingType
     * @return $this
     */
    public function setBillingType($billingType)
    {
        $this->values['billingType'] = $billingType;
        return $this;
    }

    /**
     * Get billingType
     *
     * @return string
     */
    public function getBillingType()
    {
        return $this->values['billingType'];
    }

    /**
     * Set aliasId
     *
     * 
     * Example: 
     * @param string $aliasId
     * @return $this
     */
    public function setAliasId($aliasId)
    {
        $this->values['aliasId'] = $aliasId;
        return $this;
    }

    /**
     * Get aliasId
     *
     * @return string
     */
    public function getAliasId()
    {
        return $this->values['aliasId'];
    }

    /**
     * Set accountNickname
     *
     * 
     * Example: 
     * @param string $accountNickname
     * @return $this
     */
    public function setAccountNickname($accountNickname)
    {
        $this->values['accountNickname'] = $accountNickname;
        return $this;
    }

    /**
     * Get accountNickname
     *
     * @return string
     */
    public function getAccountNickname()
    {
        return $this->values['accountNickname'];
    }

    /**
     * Set accountNumber
     *
     * 
     * Example: 
     * @param string $accountNumber
     * @return $this
     */
    public function setAccountNumber($accountNumber)
    {
        $this->values['accountNumber'] = $accountNumber;
        return $this;
    }

    /**
     * Get accountNumber
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->values['accountNumber'];
    }

    /**
     * Set accountNumberCountryCode
     *
     * 
     * Example: 
     * @param string $accountNumberCountryCode
     * @return $this
     */
    public function setAccountNumberCountryCode($accountNumberCountryCode)
    {
        $this->values['accountNumberCountryCode'] = $accountNumberCountryCode;
        return $this;
    }

    /**
     * Get accountNumberCountryCode
     *
     * @return string
     */
    public function getAccountNumberCountryCode()
    {
        return $this->values['accountNumberCountryCode'];
    }
}
