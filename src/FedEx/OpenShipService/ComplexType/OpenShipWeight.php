<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * These are the package weight details.<br>Note: Weight is not required for One rate shipments
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $units
 * @property float $value

 */
class OpenShipWeight extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipWeight';

    /**
     * Indicate the weight unit type. The package and commodity weight unit should be the same else the request will result in an error.
     *
     * simpleClass: OpenShipUnits
     * Example: KG
     * @param string $units
     * @return $this
     */
    public function setUnits($units)
    {
        $this->values['units'] = $units;
        return $this;
    }

    /**
     * Get units
     *
     * @return string
     */
    public function getUnits()
    {
        return $this->values['units'];
    }

    /**
     * Weight Value.<br> Example: 68.25<br><a href='https://developer.fedex.com/api/en-us/guides/api-reference.html#packagetypes' target='_blank'>Click here to see Weight Values</a>
     *
     * 
     * Example: 68.25
     * @param float $value
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
     * @return float
     */
    public function getValue()
    {
        return $this->values['value'];
    }
}
