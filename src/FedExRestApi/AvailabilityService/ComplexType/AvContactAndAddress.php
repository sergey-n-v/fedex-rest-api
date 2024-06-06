<?php
namespace FedExRestApi\AvailabilityService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Specifies the contact and address details of a location.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property AvContact $contact
 * @property AvContactAncillaryDetail $contactAncillaryDetail
 * @property AvAddress $address
 * @property AvAddressAncillaryDetail $addressAncillaryDetail

 */
class AvContactAndAddress extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvContactAndAddress';

    /**
     * Set contact
     *
     *
     * Example:
     * @param AvContact $contact
     * @return $this
     */
    public function setContact(AvContact $contact)
    {
        $this->values['contact'] = $contact;
        return $this;
    }

    /**
     * Get contact
     *
     * @return AvContact
     */
    public function getContact()
    {
        return $this->values['contact'];
    }

    /**
     * Set contactAncillaryDetail
     *
     *
     * Example:
     * @param AvContactAncillaryDetail $contactAncillaryDetail
     * @return $this
     */
    public function setContactAncillaryDetail(AvContactAncillaryDetail $contactAncillaryDetail)
    {
        $this->values['contactAncillaryDetail'] = $contactAncillaryDetail;
        return $this;
    }

    /**
     * Get contactAncillaryDetail
     *
     * @return AvContactAncillaryDetail
     */
    public function getContactAncillaryDetail()
    {
        return $this->values['contactAncillaryDetail'];
    }

    /**
     * Set address
     *
     *
     * Example:
     * @param AvAddress $address
     * @return $this
     */
    public function setAddress(AvAddress $address)
    {
        $this->values['address'] = $address;
        return $this;
    }

    /**
     * Get address
     *
     * @return AvAddress
     */
    public function getAddress()
    {
        return $this->values['address'];
    }

    /**
     * Set addressAncillaryDetail
     *
     *
     * Example:
     * @param AvAddressAncillaryDetail $addressAncillaryDetail
     * @return $this
     */
    public function setAddressAncillaryDetail(AvAddressAncillaryDetail $addressAncillaryDetail)
    {
        $this->values['addressAncillaryDetail'] = $addressAncillaryDetail;
        return $this;
    }

    /**
     * Get addressAncillaryDetail
     *
     * @return AvAddressAncillaryDetail
     */
    public function getAddressAncillaryDetail()
    {
        return $this->values['addressAncillaryDetail'];
    }
}
