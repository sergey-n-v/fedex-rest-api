<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Customer-provided specifications for handling individual commodities.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property OpenShipHazardousCommodityQuantityDetail $quantity
 * @property OpenShipHazardousCommodityInnerReceptacleDetail01[] $innerReceptacles
 * @property OpenShipHazardousCommodityOptionDetail01 $options
 * @property OpenShipHazardousCommodityDescription01 $description

 */
class OpenShipHazardousCommodityContent001 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipHazardousCommodityContent001';

    /**
     * Set quantity
     *
     * 
     * Example: 
     * @param OpenShipHazardousCommodityQuantityDetail $quantity
     * @return $this
     */
    public function setQuantity(OpenShipHazardousCommodityQuantityDetail $quantity)
    {
        $this->values['quantity'] = $quantity;
        return $this;
    }

    /**
     * Get quantity
     *
     * @return OpenShipHazardousCommodityQuantityDetail
     */
    public function getQuantity()
    {
        return $this->values['quantity'];
    }

    /**
     * Specifies the inner receptacles within the container.
     *
     * 
     * Example: 
     * @param OpenShipHazardousCommodityInnerReceptacleDetail01[] $innerReceptacles
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
     * @return OpenShipHazardousCommodityInnerReceptacleDetail01[]
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
     * @param OpenShipHazardousCommodityOptionDetail01 $options
     * @return $this
     */
    public function setOptions(OpenShipHazardousCommodityOptionDetail01 $options)
    {
        $this->values['options'] = $options;
        return $this;
    }

    /**
     * Get options
     *
     * @return OpenShipHazardousCommodityOptionDetail01
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
     * @param OpenShipHazardousCommodityDescription01 $description
     * @return $this
     */
    public function setDescription(OpenShipHazardousCommodityDescription01 $description)
    {
        $this->values['description'] = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return OpenShipHazardousCommodityDescription01
     */
    public function getDescription()
    {
        return $this->values['description'];
    }
}
