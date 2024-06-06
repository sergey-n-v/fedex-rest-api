<?php
namespace FedExRestApi\AvailabilityService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * optional information about sender/recipient including Address, Contact, Account number.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property AvAddress $address
 * @property AvContact1 $contact
 * @property AvAccountNumber $accountNumber

 */
class AvParty extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvParty';

    /**
     * Set address
     *
     *
     * Example:
     * @param AvAddress $address
     * @return $this
     */
    public function setAddress(AvAddress $address)
    {
        $this->values['address'] = $address;
        return $this;
    }

    /**
     * Get address
     *
     * @return AvAddress
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
     * @param AvContact1 $contact
     * @return $this
     */
    public function setContact(AvContact1 $contact)
    {
        $this->values['contact'] = $contact;
        return $this;
    }

    /**
     * Get contact
     *
     * @return AvContact1
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
     * @param AvAccountNumber1 $accountNumber
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
     * @return AvAccountNumber1
     */
    public function getAccountNumber()
    {
        return $this->values['accountNumber'];
    }
}
