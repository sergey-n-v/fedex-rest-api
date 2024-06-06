<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Indicate the Shipper contact details for this shipment.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property OpenShipPartyAddress $address
 * @property OpenShipPartyContact $contact
 * @property OpenShipTaxpayerIdentification[] $tins

 */
class OpenShipShipperParty extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipShipperParty';

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
     * This is the tax identification number details.
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
}
