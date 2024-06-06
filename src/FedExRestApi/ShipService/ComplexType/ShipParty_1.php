<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * ShipParty_1
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property ShipPartyAddress $address
 * @property ShipPartyContact $contact
 * @property ShipPartyAccountNumber $accountNumber
 * @property ShipTaxpayerIdentification[] $tins

 */
class ShipParty_1 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipParty_1';

    /**
     * Set address
     *
     *
     * Example:
     * @param ShipPartyAddress $address
     * @return $this
     */
    public function setAddress(ShipPartyAddress $address)
    {
        $this->values['address'] = $address;
        return $this;
    }

    /**
     * Get address
     *
     * @return ShipPartyAddress
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
     * @param ShipPartyContact $contact
     * @return $this
     */
    public function setContact(ShipPartyContact $contact)
    {
        $this->values['contact'] = $contact;
        return $this;
    }

    /**
     * Get contact
     *
     * @return ShipPartyContact
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
     * @param ShipPartyAccountNumber $accountNumber
     * @return $this
     */
    public function setAccountNumber(ShipPartyAccountNumber $accountNumber)
    {
        $this->values['accountNumber'] = $accountNumber;
        return $this;
    }

    /**
     * Get accountNumber
     *
     * @return ShipPartyAccountNumber
     */
    public function getAccountNumber()
    {
        return $this->values['accountNumber'];
    }

    /**
     * Set tins
     *
     *
     * Example:
     * @param ShipTaxpayerIdentification[] $tins
     * @return $this
     */
    public function setTins(array $tins)
    {
        $this->values['tins'] = $tins;
        return $this;
    }

    /**
     * Get tins
     *
     * @return ShipTaxpayerIdentification[]
     */
    public function getTins()
    {
        return $this->values['tins'];
    }
}
