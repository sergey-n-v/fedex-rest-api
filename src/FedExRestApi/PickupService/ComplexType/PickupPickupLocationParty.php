<?php
namespace FedExRestApi\PickupService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * PickupPickupLocationParty
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property PickupPickupLocationParty_address $address
 * @property PickupPickupLocationParty_contact $contact

 */
class PickupPickupLocationParty extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PickupPickupLocationParty';

    /**
     * Set address
     *
     *
     * Example:
     * @param PickupPickupLocationParty_address $address
     * @return $this
     */
    public function setAddress(PickupPickupLocationParty_address $address)
    {
        $this->values['address'] = $address;
        return $this;
    }

    /**
     * Get address
     *
     * @return PickupPickupLocationParty_address
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
     * @param PickupPickupLocationParty_contact $contact
     * @return $this
     */
    public function setContact(PickupPickupLocationParty_contact $contact)
    {
        $this->values['contact'] = $contact;
        return $this;
    }

    /**
     * Get contact
     *
     * @return PickupPickupLocationParty_contact
     */
    public function getContact()
    {
        return $this->values['contact'];
    }
}
