<?php
namespace FedExRestApi\AddressValidationService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Specifies the address details of a location.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property AddressValidationAddress $address
 * @property string $clientReferenceId

 */
class AddressValidationResolveContactAndAddress extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AddressValidationResolveContactAndAddress';

    /**
     * Set address
     *
     *
     * Example:
     * @param AddressValidationAddress $address
     * @return $this
     */
    public function setAddress(AddressValidationAddress $address)
    {
        $this->values['address'] = $address;
        return $this;
    }

    /**
     * Get address
     *
     * @return AddressValidationAddress
     */
    public function getAddress()
    {
        return $this->values['address'];
    }

    /**
     * Client Reference Id
     *
     *
     * Example: None
     * @param string $clientReferenceId
     * @return $this
     */
    public function setClientReferenceId($clientReferenceId)
    {
        $this->values['clientReferenceId'] = $clientReferenceId;
        return $this;
    }

    /**
     * Get clientReferenceId
     *
     * @return string
     */
    public function getClientReferenceId()
    {
        return $this->values['clientReferenceId'];
    }
}
