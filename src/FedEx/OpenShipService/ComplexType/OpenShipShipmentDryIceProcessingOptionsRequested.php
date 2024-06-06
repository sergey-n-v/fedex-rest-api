<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specify that dry ice information is only applicable at the shipment level. Package level dry ice information would not apply.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $options

 */
class OpenShipShipmentDryIceProcessingOptionsRequested extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipShipmentDryIceProcessingOptionsRequested';

    /**
     * Specifies the options.<br>Example: ["options"]
     *
     * 
     * Example: ["options"]
     * @param string $options
     * @return $this
     */
    public function setOptions(array $options)
    {
        $this->values['options'] = $options;
        return $this;
    }

    /**
     * Get options
     *
     * @return string
     */
    public function getOptions()
    {
        return $this->values['options'];
    }
}
