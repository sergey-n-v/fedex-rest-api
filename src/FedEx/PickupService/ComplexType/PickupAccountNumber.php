<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This is the FedEx account number. <br>Example: Your account number
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $value

 */
class PickupAccountNumber extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PickupAccountNumber';

    /**
     * This is the account number. Maximum Length is 9. <br>Example: Your account number
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
