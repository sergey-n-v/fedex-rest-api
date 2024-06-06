<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ShipRegulatoryLabelContentDetail
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $generationOptions
 * @property string $type

 */
class ShipRegulatoryLabelContentDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipRegulatoryLabelContentDetail';

    /**
     * Set generationOptions
     *
     * simpleClass: ShipGenerationOptions
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
     * Set type
     *
     * simpleClass: ShipType
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
