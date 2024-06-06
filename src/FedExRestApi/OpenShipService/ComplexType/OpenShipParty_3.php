<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * OpenShipParty_3
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property OpenShipPartyAddress_1 $address
 * @property OpenShipPartyContact_1 $contact
 * @property OpenShipTaxpayerIdentification[] $tins

 */
class OpenShipParty_3 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipParty_3';

    /**
     * Set address
     *
     *
     * Example:
     * @param OpenShipPartyAddress_1 $address
     * @return $this
     */
    public function setAddress(OpenShipPartyAddress_1 $address)
    {
        $this->values['address'] = $address;
        return $this;
    }

    /**
     * Get address
     *
     * @return OpenShipPartyAddress_1
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
     * @param OpenShipPartyContact_1 $contact
     * @return $this
     */
    public function setContact(OpenShipPartyContact_1 $contact)
    {
        $this->values['contact'] = $contact;
        return $this;
    }

    /**
     * Get contact
     *
     * @return OpenShipPartyContact_1
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
