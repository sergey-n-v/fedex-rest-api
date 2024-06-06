<?php
namespace FedEx\AvailabilityService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * AvCustomerReference
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $customerReferenceType
 * @property string $value

 */
class AvCustomerReference extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvCustomerReference';

    /**
     * This is a customer reference type. Note: Use type as RMA_ASSOCIATION and value as the RMA Number to associate Ground Call Tag shipments to the outbound shipment.<br><a onclick='loadDocReference("customerreferencetypes")'>For more information, click here for Cutsomer References</a>
     *
     * simpleClass: AvCustomerReferenceType
     * Example: DEPARTMENT_NUMBER
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
     * This is a customer reference type value.<br>Example: 3686
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
