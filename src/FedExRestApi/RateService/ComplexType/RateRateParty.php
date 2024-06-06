<?php
namespace FedExRestApi\RateService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Specify the shipper address details.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property RateRateAddress $address

 */
class RateRateParty extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateRateParty';

    /**
     * Set address
     *
     *
     * Example:
     * @param RateRateAddress $address
     * @return $this
     */
    public function setAddress(RateRateAddress $address)
    {
        $this->values['address'] = $address;
        return $this;
    }

    /**
     * Get address
     *
     * @return RateRateAddress
     */
    public function getAddress()
    {
        return $this->values['address'];
    }
}
