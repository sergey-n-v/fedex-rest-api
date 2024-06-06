<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Indicate the party to a transaction including the physical address, contact information and account number information.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property RateAddress $address
 * @property RateAccountNumber $accountNumber

 */
class RateParty extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateParty';

    /**
     * Set address
     *
     * 
     * Example: 
     * @param RateAddress $address
     * @return $this
     */
    public function setAddress(RateAddress $address)
    {
        $this->values['address'] = $address;
        return $this;
    }

    /**
     * Get address
     *
     * @return RateAddress
     */
    public function getAddress()
    {
        return $this->values['address'];
    }

    /**
     * Set accountNumber
     *
     * 
     * Example: 
     * @param RateAccountNumber $accountNumber
     * @return $this
     */
    public function setAccountNumber(RateAccountNumber $accountNumber)
    {
        $this->values['accountNumber'] = $accountNumber;
        return $this;
    }

    /**
     * Get accountNumber
     *
     * @return RateAccountNumber
     */
    public function getAccountNumber()
    {
        return $this->values['accountNumber'];
    }
}
