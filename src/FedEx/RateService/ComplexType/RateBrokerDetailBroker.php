<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * RateBrokerDetailBroker
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property  $address
 * @property  $contact

 */
class RateBrokerDetailBroker extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateBrokerDetailBroker';

    /**
     * Set address
     *
     * 
     * Example: 
     * @param  $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->values['address'] = $address;
        return $this;
    }

    /**
     * Get address
     *
     * @return 
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
     * @param  $contact
     * @return $this
     */
    public function setContact($contact)
    {
        $this->values['contact'] = $contact;
        return $this;
    }

    /**
     * Get contact
     *
     * @return 
     */
    public function getContact()
    {
        return $this->values['contact'];
    }
}
