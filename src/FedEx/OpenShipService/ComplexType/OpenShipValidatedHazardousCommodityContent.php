<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * These the details on the kind and quantity of an individual hazardous commodity in a package.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property OpenShipHazardousCommodityQuantityDetail $quantity
 * @property OpenShipHazardousCommodityContent001 $options
 * @property OpenShipValidatedHazardousCommodityDescription $description
 * @property OpenShipNetExplosiveDetail $netExplosiveDetail
 * @property float $massPoints

 */
class OpenShipValidatedHazardousCommodityContent extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipValidatedHazardousCommodityContent';

    /**
     * Indicates hazardous commodity quantity details.
     *
     * 
     * Example: 
     * @param OpenShipHazardousCommodityQuantityDetail $quantity
     * @return $this
     */
    public function setQuantity($quantity)
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
     * Set options
     *
     * 
     * Example: 
     * @param OpenShipHazardousCommodityContent001 $options
     * @return $this
     */
    public function setOptions(OpenShipHazardousCommodityContent001 $options)
    {
        $this->values['options'] = $options;
        return $this;
    }

    /**
     * Get options
     *
     * @return OpenShipHazardousCommodityContent001
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
     * @param OpenShipValidatedHazardousCommodityDescription $description
     * @return $this
     */
    public function setDescription(OpenShipValidatedHazardousCommodityDescription $description)
    {
        $this->values['description'] = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return OpenShipValidatedHazardousCommodityDescription
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
     * @param OpenShipNetExplosiveDetail $netExplosiveDetail
     * @return $this
     */
    public function setNetExplosiveDetail(OpenShipNetExplosiveDetail $netExplosiveDetail)
    {
        $this->values['netExplosiveDetail'] = $netExplosiveDetail;
        return $this;
    }

    /**
     * Get netExplosiveDetail
     *
     * @return OpenShipNetExplosiveDetail
     */
    public function getNetExplosiveDetail()
    {
        return $this->values['netExplosiveDetail'];
    }

    /**
     * The mass points are a calculation used by ADR regulations for measuring the risk of a particular hazardous commodity.<br>Example: 2.0
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
