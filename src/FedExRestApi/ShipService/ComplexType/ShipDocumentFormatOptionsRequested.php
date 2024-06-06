<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Indicate the requested options for document format.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $options

 */
class ShipDocumentFormatOptionsRequested extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipDocumentFormatOptionsRequested';

    /**
     * Set options
     *
     * simpleClass: ShipOptions
     * Example: ["SUPPRESS_ADDITIONAL_LANGUAGES","SHIPPING_LABEL_LAST"]
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
