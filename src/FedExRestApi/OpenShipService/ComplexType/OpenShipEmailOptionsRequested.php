<?php
namespace FedExRestApi\OpenShipService\ComplexType;

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
class OpenShipEmailOptionsRequested extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipEmailOptionsRequested';

    /**
     * These are the processing options.
     *
     * simpleClass: OpenShipOptions
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
