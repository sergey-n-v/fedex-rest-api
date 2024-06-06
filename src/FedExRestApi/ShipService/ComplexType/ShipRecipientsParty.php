<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * The descriptive information of the recipient for the shipment and the physical location for the package destination.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property ShipPartyAddress $address
 * @property ShipPartyContact $contact
 * @property ShipTaxpayerIdentification[] $tins
 * @property string $deliveryInstructions

 */
class ShipRecipientsParty extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipRecipientsParty';

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
     * Set deliveryInstructions
     *
     *
     * Example: Instruction 1
     * @param string $deliveryInstructions
     * @return $this
     */
    public function setDeliveryInstructions($deliveryInstructions)
    {
        $this->values['deliveryInstructions'] = $deliveryInstructions;
        return $this;
    }

    /**
     * Get deliveryInstructions
     *
     * @return string
     */
    public function getDeliveryInstructions()
    {
        return $this->values['deliveryInstructions'];
    }
}
