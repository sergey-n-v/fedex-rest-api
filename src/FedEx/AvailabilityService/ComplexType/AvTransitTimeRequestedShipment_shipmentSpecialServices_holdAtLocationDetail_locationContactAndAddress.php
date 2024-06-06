<?php
namespace FedEx\AvailabilityService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specify the contact and address details of a location.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property AvTransitTimeRequestedShipment_shipmentSpecialServices_holdAtLocationDetail_locationContactAndAddress_contact $contact
 * @property AvTransitTimeShipper $address

 */
class AvTransitTimeRequestedShipment_shipmentSpecialServices_holdAtLocationDetail_locationContactAndAddress extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvTransitTimeRequestedShipment_shipmentSpecialServices_holdAtLocationDetail_locationContactAndAddress';

    /**
     * Set contact
     *
     * 
     * Example: 
     * @param AvTransitTimeRequestedShipment_shipmentSpecialServices_holdAtLocationDetail_locationContactAndAddress_contact $contact
     * @return $this
     */
    public function setContact(AvTransitTimeRequestedShipment_shipmentSpecialServices_holdAtLocationDetail_locationContactAndAddress_contact $contact)
    {
        $this->values['contact'] = $contact;
        return $this;
    }

    /**
     * Get contact
     *
     * @return AvTransitTimeRequestedShipment_shipmentSpecialServices_holdAtLocationDetail_locationContactAndAddress_contact
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
     * @param AvTransitTimeShipper $address
     * @return $this
     */
    public function setAddress(AvTransitTimeShipper $address)
    {
        $this->values['address'] = $address;
        return $this;
    }

    /**
     * Get address
     *
     * @return AvTransitTimeShipper
     */
    public function getAddress()
    {
        return $this->values['address'];
    }
}
