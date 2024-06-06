<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the details of a container used to package dangerous goods commodities.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property float $qvalue
 * @property OpenShipValidatedHazardousCommodityContent[] $hazardousCommodities

 */
class OpenShipValidatedHazardousContainer extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipValidatedHazardousContainer';

    /**
     * Indicates that the quantity of the dangerous goods packaged is permissible for shipping. This is used to ensure that the dangerous goods commodities do not exceed the net quantity per package restrictions.<br>Example: 2.0
     *
     * 
     * Example: 2
     * @param float $qvalue
     * @return $this
     */
    public function setQvalue($qvalue)
    {
        $this->values['qvalue'] = $qvalue;
        return $this;
    }

    /**
     * Get qvalue
     *
     * @return float
     */
    public function getQvalue()
    {
        return $this->values['qvalue'];
    }

    /**
     * Indicates the details of the hazardous commodities in the completed package.
     *
     * 
     * Example: 
     * @param OpenShipValidatedHazardousCommodityContent[] $hazardousCommodities
     * @return $this
     */
    public function setHazardousCommodities(array $hazardousCommodities)
    {
        $this->values['hazardousCommodities'] = $hazardousCommodities;
        return $this;
    }

    /**
     * Get hazardousCommodities
     *
     * @return OpenShipValidatedHazardousCommodityContent[]
     */
    public function getHazardousCommodities()
    {
        return $this->values['hazardousCommodities'];
    }
}
