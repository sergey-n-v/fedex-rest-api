<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Will indicate the party responsible for purchasing the goods shipped from the shipper to the recipient. The sold to party is not necessarily the recipient or the importer of record. The sold to party is relevant when the purchaser, rather than the recipient determines when certain customs regulations apply.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property OpenShipPartyAddress $address
 * @property OpenShipPartyContact $contact
 * @property OpenShipTaxpayerIdentification[] $tins
 * @property OpenShipAccountNumber $accountNumber

 */
class OpenShipSoldToParty extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipSoldToParty';

    /**
     * Set address
     *
     *
     * Example:
     * @param OpenShipPartyAddress $address
     * @return $this
     */
    public function setAddress(OpenShipPartyAddress $address)
    {
        $this->values['address'] = $address;
        return $this;
    }

    /**
     * Get address
     *
     * @return OpenShipPartyAddress
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
     * @param OpenShipPartyContact $contact
     * @return $this
     */
    public function setContact(OpenShipPartyContact $contact)
    {
        $this->values['contact'] = $contact;
        return $this;
    }

    /**
     * Get contact
     *
     * @return OpenShipPartyContact
     */
    public function getContact()
    {
        return $this->values['contact'];
    }

    /**
     * Used for adding the tax id
     *
     *
     * Example:
     * @param OpenShipTaxpayerIdentification[] $tins
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
     * @return OpenShipTaxpayerIdentification[]
     */
    public function getTins()
    {
        return $this->values['tins'];
    }

    /**
     * Identification of a specific FedEx customer account.
     *
     *
     * Example:
     * @param OpenShipPartyAccountNumber $accountNumber
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
     * @return OpenShipPartyAccountNumber
     */
    public function getAccountNumber()
    {
        return $this->values['accountNumber'];
    }
}
