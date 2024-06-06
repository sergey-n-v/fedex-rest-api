<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * The descriptive information of the recipient for the shipment and the physical location for the package destination.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property OpenShipPartyAddress $address
 * @property OpenShipPartyContact $contact
 * @property OpenShipTaxpayerIdentification[] $tins
 * @property string $deliveryInstructions

 */
class OpenShipRecipientsParty extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipRecipientsParty';

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

    /**
     * Specify the delivery instructions to be added with the shipment. Use with Ground Home Delivery.<br>Example: Delivery Instructions
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
