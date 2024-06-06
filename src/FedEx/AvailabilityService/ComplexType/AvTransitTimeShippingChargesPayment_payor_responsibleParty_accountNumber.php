<?php
namespace FedEx\AvailabilityService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the FedEx customer account information of the responsible paty.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $value

 */
class AvTransitTimeShippingChargesPayment_payor_responsibleParty_accountNumber extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvTransitTimeShippingChargesPayment_payor_responsibleParty_accountNumber';

    /**
     * Conditionally required.<br>Account number is required for ACCOUNT based rates. Account number value max length is 9. <br> Example: 60xxxxxx2
     *
     * 
     * Example: 60xxxxxx2
     * @param string $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->values['value'] = $value;
        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->values['value'];
    }
}
