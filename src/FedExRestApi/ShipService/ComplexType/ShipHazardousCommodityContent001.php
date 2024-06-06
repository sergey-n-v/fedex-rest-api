<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Customer-provided specifications for handling individual commodities.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property ShipHazardousCommodityQuantityDetail $quantity
 * @property ShipHazardousCommodityInnerReceptacleDetail01[] $innerReceptacles
 * @property ShipHazardousCommodityOptionDetail01 $options
 * @property ShipHazardousCommodityDescription01 $description

 */
class ShipHazardousCommodityContent001 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipHazardousCommodityContent001';

    /**
     * Set quantity
     *
     *
     * Example:
     * @param ShipHazardousCommodityQuantityDetail $quantity
     * @return $this
     */
    public function setQuantity(ShipHazardousCommodityQuantityDetail $quantity)
    {
        $this->values['quantity'] = $quantity;
        return $this;
    }

    /**
     * Get quantity
     *
     * @return ShipHazardousCommodityQuantityDetail
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
     * @param ShipHazardousCommodityInnerReceptacleDetail01[] $innerReceptacles
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
     * @return ShipHazardousCommodityInnerReceptacleDetail01[]
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
     * @param ShipHazardousCommodityOptionDetail01 $options
     * @return $this
     */
    public function setOptions(ShipHazardousCommodityOptionDetail01 $options)
    {
        $this->values['options'] = $options;
        return $this;
    }

    /**
     * Get options
     *
     * @return ShipHazardousCommodityOptionDetail01
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
     * @param ShipHazardousCommodityDescription01 $description
     * @return $this
     */
    public function setDescription(ShipHazardousCommodityDescription01 $description)
    {
        $this->values['description'] = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return ShipHazardousCommodityDescription01
     */
    public function getDescription()
    {
        return $this->values['description'];
    }
}
