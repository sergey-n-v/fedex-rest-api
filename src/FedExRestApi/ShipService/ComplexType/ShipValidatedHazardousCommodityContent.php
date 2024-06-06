<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * These the details on the kind and quantity of an individual hazardous commodity in a package.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property ShipHazardousCommodityQuantityDetail $quantity
 * @property ShipHazardousCommodityContent001 $options
 * @property ShipValidatedHazardousCommodityDescription $description
 * @property ShipNetExplosiveDetail $netExplosiveDetail
 * @property float $massPoints

 */
class ShipValidatedHazardousCommodityContent extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipValidatedHazardousCommodityContent';

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
     * Set options
     *
     *
     * Example:
     * @param ShipHazardousCommodityContent001 $options
     * @return $this
     */
    public function setOptions(ShipHazardousCommodityContent001 $options)
    {
        $this->values['options'] = $options;
        return $this;
    }

    /**
     * Get options
     *
     * @return ShipHazardousCommodityContent001
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
     * @param ShipValidatedHazardousCommodityDescription $description
     * @return $this
     */
    public function setDescription(ShipValidatedHazardousCommodityDescription $description)
    {
        $this->values['description'] = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return ShipValidatedHazardousCommodityDescription
     */
    public function getDescription()
    {
        return $this->values['description'];
    }

    /**
     * Set netExplosiveDetail
     *
     *
     * Example:
     * @param ShipNetExplosiveDetail $netExplosiveDetail
     * @return $this
     */
    public function setNetExplosiveDetail(ShipNetExplosiveDetail $netExplosiveDetail)
    {
        $this->values['netExplosiveDetail'] = $netExplosiveDetail;
        return $this;
    }

    /**
     * Get netExplosiveDetail
     *
     * @return ShipNetExplosiveDetail
     */
    public function getNetExplosiveDetail()
    {
        return $this->values['netExplosiveDetail'];
    }

    /**
     * Set massPoints
     *
     *
     * Example: 2
     * @param float $massPoints
     * @return $this
     */
    public function setMassPoints($massPoints)
    {
        $this->values['massPoints'] = $massPoints;
        return $this;
    }

    /**
     * Get massPoints
     *
     * @return float
     */
    public function getMassPoints()
    {
        return $this->values['massPoints'];
    }
}
