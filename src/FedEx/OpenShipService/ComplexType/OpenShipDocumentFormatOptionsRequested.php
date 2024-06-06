<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Indicate the requested options for document format.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $options

 */
class OpenShipDocumentFormatOptionsRequested extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipDocumentFormatOptionsRequested';

    /**
     * Indicates the format options. SUPPRESS_ADDITIONAL_LANGUAGES value will suppress English language if another language is specified in the language code field.
     *
     * simpleClass: OpenShipOptions
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
