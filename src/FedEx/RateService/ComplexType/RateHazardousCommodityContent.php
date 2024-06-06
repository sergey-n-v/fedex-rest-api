<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Documents the kind and quantity of an individual hazardous commodity in a package.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property RateHazardousCommodityQuantityDetail $quantity
 * @property RateHazardousCommodityInnerReceptacleDetail[] $innerReceptacles
 * @property RateHazardousCommodityOptionDetail $options
 * @property RateHazardousCommodityDescription $description

 */
class RateHazardousCommodityContent extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateHazardousCommodityContent';

    /**
     * Set quantity
     *
     * 
     * Example: 
     * @param RateHazardousCommodityQuantityDetail $quantity
     * @return $this
     */
    public function setQuantity(RateHazardousCommodityQuantityDetail $quantity)
    {
        $this->values['quantity'] = $quantity;
        return $this;
    }

    /**
     * Get quantity
     *
     * @return RateHazardousCommodityQuantityDetail
     */
    public function getQuantity()
    {
        return $this->values['quantity'];
    }

    /**
     * Set innerReceptacles
     *
     * 
     * Example: 
     * @param RateHazardousCommodityInnerReceptacleDetail[] $innerReceptacles
     * @return $this
     */
    public function setInnerReceptacles(array $innerReceptacles)
    {
        $this->values['innerReceptacles'] = $innerReceptacles;
        return $this;
    }

    /**
     * Get innerReceptacles
     *
     * @return RateHazardousCommodityInnerReceptacleDetail[]
     */
    public function getInnerReceptacles()
    {
        return $this->values['innerReceptacles'];
    }

    /**
     * Set options
     *
     * 
     * Example: 
     * @param RateHazardousCommodityOptionDetail $options
     * @return $this
     */
    public function setOptions(RateHazardousCommodityOptionDetail $options)
    {
        $this->values['options'] = $options;
        return $this;
    }

    /**
     * Get options
     *
     * @return RateHazardousCommodityOptionDetail
     */
    public function getOptions()
    {
        return $this->values['options'];
    }

    /**
     * Set description
     *
     * 
     * Example: 
     * @param RateHazardousCommodityDescription $description
     * @return $this
     */
    public function setDescription(RateHazardousCommodityDescription $description)
    {
        $this->values['description'] = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return RateHazardousCommodityDescription
     */
    public function getDescription()
    {
        return $this->values['description'];
    }
}
