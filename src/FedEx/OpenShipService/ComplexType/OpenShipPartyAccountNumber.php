<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This is FedEx Account number details.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $value

 */
class OpenShipPartyAccountNumber extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipPartyAccountNumber';

    /**
     * The account number value.Value is required if the paymentType is RECIPIENT, THIRD_PARTY or COLLECT. <br>Example: Your account number
     *
     * 
     * Example: 
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
