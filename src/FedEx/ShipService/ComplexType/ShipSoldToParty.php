<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Will indicate the party responsible for purchasing the goods shipped from the shipper to the recipient. The sold to party is not necessarily the recipient or the importer of record. The sold to party is relevant when the purchaser, rather than the recipient determines when certain customs regulations apply.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property ShipPartyAddress $address
 * @property ShipPartyContact $contact
 * @property ShipTaxpayerIdentification[] $tins
 * @property ShipAccountNumber $accountNumber

 */
class ShipSoldToParty extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipSoldToParty';

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

    /**
     * Set accountNumber
     *
     * 
     * Example: 
     * @param ShipAccountNumber $accountNumber
     * @return $this
     */
    public function setAccountNumber(ShipAccountNumber $accountNumber)
    {
        $this->values['accountNumber'] = $accountNumber;
        return $this;
    }

    /**
     * Get accountNumber
     *
     * @return ShipAccountNumber
     */
    public function getAccountNumber()
    {
        return $this->values['accountNumber'];
    }
}
