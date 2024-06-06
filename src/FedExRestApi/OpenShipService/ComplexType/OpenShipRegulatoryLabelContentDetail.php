<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * OpenShipRegulatoryLabelContentDetail
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $generationOptions
 * @property string $type

 */
class OpenShipRegulatoryLabelContentDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipRegulatoryLabelContentDetail';

    /**
     * Specify the regulatory content preference to be displayed on the label.
     *
     * simpleClass: OpenShipGenerationOptions
     * Example: CONTENT_ON_SHIPPING_LABEL_ONLY
     * @param string $generationOptions
     * @return $this
     */
    public function setGenerationOptions($generationOptions)
    {
        $this->values['generationOptions'] = $generationOptions;
        return $this;
    }

    /**
     * Get generationOptions
     *
     * @return string
     */
    public function getGenerationOptions()
    {
        return $this->values['generationOptions'];
    }

    /**
     * Specify the type of regulatory content to be added on the label.
     *
     * simpleClass: OpenShipType
     * Example: ALCOHOL_SHIPMENT_LABEL
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['type'] = $type;
        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->values['type'];
    }
}
