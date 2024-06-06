<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Use this object to provide the attributes such as physical address, contact information and account number information.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property OpenShipAddress_1 $address
 * @property OpenShipContact_1 $contact
 * @property OpenShipPartyAccountNumber $accountNumber
 * @property OpenShipTaxpayerIdentification[] $tins

 */
class OpenShipParty_2 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipParty_2';

    /**
     * Set address
     *
     *
     * Example:
     * @param OpenShipAddress_1 $address
     * @return $this
     */
    public function setAddress(OpenShipAddress_1 $address)
    {
        $this->values['address'] = $address;
        return $this;
    }

    /**
     * Get address
     *
     * @return OpenShipAddress_1
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
     * @param OpenShipContact_1 $contact
     * @return $this
     */
    public function setContact(OpenShipContact_1 $contact)
    {
        $this->values['contact'] = $contact;
        return $this;
    }

    /**
     * Get contact
     *
     * @return OpenShipContact_1
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
