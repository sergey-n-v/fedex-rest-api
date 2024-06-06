<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ShipParty_3
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property ShipPartyAddress_1 $address
 * @property ShipPartyContact_1 $contact
 * @property ShipTaxpayerIdentification[] $tins

 */
class ShipParty_3 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipParty_3';

    /**
     * Set address
     *
     * 
     * Example: 
     * @param ShipPartyAddress_1 $address
     * @return $this
     */
    public function setAddress(ShipPartyAddress_1 $address)
    {
        $this->values['address'] = $address;
        return $this;
    }

    /**
     * Get address
     *
     * @return ShipPartyAddress_1
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
     * @param ShipPartyContact_1 $contact
     * @return $this
     */
    public function setContact(ShipPartyContact_1 $contact)
    {
        $this->values['contact'] = $contact;
        return $this;
    }

    /**
     * Get contact
     *
     * @return ShipPartyContact_1
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
}
