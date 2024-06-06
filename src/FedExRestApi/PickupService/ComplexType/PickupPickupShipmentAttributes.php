<?php
namespace FedExRestApi\PickupService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Indicates the optional attributes for the shipment related to the pickup inquiry.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $serviceType
 * @property PickupWeight $weight
 * @property string $packagingType
 * @property PickupDimensions_2 $dimensions

 */
class PickupPickupShipmentAttributes extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PickupPickupShipmentAttributes';

    /**
     * Specify the FedEx service type for the shipment.<br>Example: FEDEX_FREIGHT_PRIORITY
     *
     *
     * Example: FEDEX_FREIGHT_PRIORITY
     * @param string $serviceType
     * @return $this
     */
    public function setServiceType($serviceType)
    {
        $this->values['serviceType'] = $serviceType;
        return $this;
    }

    /**
     * Get serviceType
     *
     * @return string
     */
    public function getServiceType()
    {
        return $this->values['serviceType'];
    }

    /**
     * Set weight
     *
     *
     * Example:
     * @param PickupWeight $weight
     * @return $this
     */
    public function setWeight(PickupWeight $weight)
    {
        $this->values['weight'] = $weight;
        return $this;
    }

    /**
     * Get weight
     *
     * @return PickupWeight
     */
    public function getWeight()
    {
        return $this->values['weight'];
    }

    /**
     * Specify the FedEx Packaging Type for the shipment.
     *
     *
     * Example: YOUR_PACKAGING
     * @param string $packagingType
     * @return $this
     */
    public function setPackagingType($packagingType)
    {
        $this->values['packagingType'] = $packagingType;
        return $this;
    }

    /**
     * Get packagingType
     *
     * @return string
     */
    public function getPackagingType()
    {
        return $this->values['packagingType'];
    }

    /**
     * Set dimensions
     *
     *
     * Example:
     * @param PickupDimensions_2 $dimensions
     * @return $this
     */
    public function setDimensions(PickupDimensions_2 $dimensions)
    {
        $this->values['dimensions'] = $dimensions;
        return $this;
    }

    /**
     * Get dimensions
     *
     * @return PickupDimensions_2
     */
    public function getDimensions()
    {
        return $this->values['dimensions'];
    }
}
