<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * These are to indicate how the email notifications for the pending shipment to be processed.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $options

 */
class ShipEmailOptionsRequested extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipEmailOptionsRequested';

    /**
     * Set options
     *
     * simpleClass: ShipOptions
     * Example: ["PRODUCE_PAPERLESS_SHIPPING_FORMAT","SUPPRESS_ACCESS_EMAILS"]
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
