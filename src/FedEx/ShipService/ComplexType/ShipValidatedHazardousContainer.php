<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the details of a container used to package dangerous goods commodities.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property float $qvalue
 * @property ShipValidatedHazardousCommodityContent[] $hazardousCommodities

 */
class ShipValidatedHazardousContainer extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipValidatedHazardousContainer';

    /**
     * Set qvalue
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
     * Set hazardousCommodities
     *
     * 
     * Example: 
     * @param ShipValidatedHazardousCommodityContent[] $hazardousCommodities
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
     * @return ShipValidatedHazardousCommodityContent[]
     */
    public function getHazardousCommodities()
    {
        return $this->values['hazardousCommodities'];
    }
}
