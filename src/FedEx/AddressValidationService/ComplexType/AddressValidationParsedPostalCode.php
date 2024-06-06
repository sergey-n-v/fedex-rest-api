<?php
namespace FedEx\AddressValidationService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The postal code specified in a form that is supported by USPS as base, secondary and tertiary.<ul><li>Base</li><li>AddOn</li><li>DeliveryPoint</li></ul>Example: 75063-8659
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $base
 * @property string $addOn
 * @property string $deliveryPoint

 */
class AddressValidationParsedPostalCode extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AddressValidationParsedPostalCode';

    /**
     * Indicates the base.<br> Example: 00926
     *
     * 
     * Example: 00926
     * @param string $base
     * @return $this
     */
    public function setBase($base)
    {
        $this->values['base'] = $base;
        return $this;
    }

    /**
     * Get base
     *
     * @return string
     */
    public function getBase()
    {
        return $this->values['base'];
    }

    /**
     * Indicates the secondary value in Postal Code.<br> Example: 2716
     *
     * 
     * Example: 2716
     * @param string $addOn
     * @return $this
     */
    public function setAddOn($addOn)
    {
        $this->values['addOn'] = $addOn;
        return $this;
    }

    /**
     * Get addOn
     *
     * @return string
     */
    public function getAddOn()
    {
        return $this->values['addOn'];
    }

    /**
     * Indicates the tertiary value in Postal Code.<br> Example: 50
     *
     * 
     * Example: 50
     * @param string $deliveryPoint
     * @return $this
     */
    public function setDeliveryPoint($deliveryPoint)
    {
        $this->values['deliveryPoint'] = $deliveryPoint;
        return $this;
    }

    /**
     * Get deliveryPoint
     *
     * @return string
     */
    public function getDeliveryPoint()
    {
        return $this->values['deliveryPoint'];
    }
}
