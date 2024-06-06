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
 * @property RateAddress_2 $address
 * @property RateContact_2 $contact
 * @property RateAccountNumber $accountNumber

 */
class RateParty_2 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateParty_2';

    /**
     * Set address
     *
     * 
     * Example: 
     * @param RateAddress_2 $address
     * @return $this
     */
    public function setAddress(RateAddress_2 $address)
    {
        $this->values['address'] = $address;
        return $this;
    }

    /**
     * Get address
     *
     * @return RateAddress_2
     */
    public function getAddress()
    {
        return $this->values['address'];
    }

    /**
     * Set contact
     *
     * 
     * Example: 
     * @param RateContact_2 $contact
     * @return $this
     */
    public function setContact(RateContact_2 $contact)
    {
        $this->values['contact'] = $contact;
        return $this;
    }

    /**
     * Get contact
     *
     * @return RateContact_2
     */
    public function getContact()
    {
        return $this->values['contact'];
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
