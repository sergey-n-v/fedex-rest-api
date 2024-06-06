<?php
namespace FedExRestApi\PickupService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Indicates attributes for a Party to perform a transaction including the physical address, contact information and account number information.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property PickupContact_CreatePickup $contact
 * @property PickupAddress $address
 * @property PickupAccountNumber $accountNumber
 * @property string $deliveryInstructions

 */
class PickupParty_createPickup extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PickupParty_createPickup';

    /**
     * Set contact
     *
     *
     * Example:
     * @param PickupContact_CreatePickup $contact
     * @return $this
     */
    public function setContact(PickupContact_CreatePickup $contact)
    {
        $this->values['contact'] = $contact;
        return $this;
    }

    /**
     * Get contact
     *
     * @return PickupContact_CreatePickup
     */
    public function getContact()
    {
        return $this->values['contact'];
    }

    /**
     * Set address
     *
     *
     * Example:
     * @param PickupAddress $address
     * @return $this
     */
    public function setAddress(PickupAddress $address)
    {
        $this->values['address'] = $address;
        return $this;
    }

    /**
     * Get address
     *
     * @return PickupAddress
     */
    public function getAddress()
    {
        return $this->values['address'];
    }

    /**
     * Set accountNumber
     *
     *
     * Example:
     * @param PickupAccountNumber $accountNumber
     * @return $this
     */
    public function setAccountNumber(PickupAccountNumber $accountNumber)
    {
        $this->values['accountNumber'] = $accountNumber;
        return $this;
    }

    /**
     * Get accountNumber
     *
     * @return PickupAccountNumber
     */
    public function getAccountNumber()
    {
        return $this->values['accountNumber'];
    }

    /**
     * Indicates the detailed instructions for delivery.This is used with Ground Home Delivery.
     *
     *
     * Example:
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
