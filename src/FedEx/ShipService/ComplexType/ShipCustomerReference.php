<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ShipCustomerReference
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $customerReferenceType
 * @property string $value

 */
class ShipCustomerReference extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipCustomerReference';

    /**
     * Set customerReferenceType
     *
     * simpleClass: ShipCustomerReferenceType
     * Example: INVOICE_NUMBER
     * @param string $customerReferenceType
     * @return $this
     */
    public function setCustomerReferenceType($customerReferenceType)
    {
        $this->values['customerReferenceType'] = $customerReferenceType;
        return $this;
    }

    /**
     * Get customerReferenceType
     *
     * @return string
     */
    public function getCustomerReferenceType()
    {
        return $this->values['customerReferenceType'];
    }

    /**
     * Set value
     *
     * 
     * Example: 3686
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
