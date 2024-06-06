<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Indicate the payer Information responsible for paying for the shipment. <br>Note: ResponsibleParty accountNumber is required for ACCOUNT based services.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property OpenShipPartyAddress $address
 * @property OpenShipPartyContact $contact
 * @property OpenShipPartyAccountNumber $accountNumber

 */
class OpenShipResponsiblePartyParty extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipResponsiblePartyParty';

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
     * Set accountNumber
     *
     *
     * Example:
     * @param OpenShipPartyAccountNumber $accountNumber
     * @return $this
     */
    public function setAccountNumber(OpenShipPartyAccountNumber $accountNumber)
    {
        $this->values['accountNumber'] = $accountNumber;
        return $this;
    }

    /**
     * Get accountNumber
     *
     * @return OpenShipPartyAccountNumber
     */
    public function getAccountNumber()
    {
        return $this->values['accountNumber'];
    }
}
