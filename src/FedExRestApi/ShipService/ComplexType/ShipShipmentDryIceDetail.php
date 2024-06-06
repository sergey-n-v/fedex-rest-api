<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Specifies the shipment level totals of dry ice data across all packages.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property ShipWeight $totalWeight
 * @property int $packageCount
 * @property ShipShipmentDryIceProcessingOptionsRequested $processingOptions

 */
class ShipShipmentDryIceDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipShipmentDryIceDetail';

    /**
     * Set totalWeight
     *
     *
     * Example:
     * @param ShipWeight $totalWeight
     * @return $this
     */
    public function setTotalWeight(ShipWeight $totalWeight)
    {
        $this->values['totalWeight'] = $totalWeight;
        return $this;
    }

    /**
     * Get totalWeight
     *
     * @return ShipWeight
     */
    public function getTotalWeight()
    {
        return $this->values['totalWeight'];
    }

    /**
     * Set packageCount
     *
     *
     * Example: 10
     * @param int $packageCount
     * @return $this
     */
    public function setPackageCount($packageCount)
    {
        $this->values['packageCount'] = $packageCount;
        return $this;
    }

    /**
     * Get packageCount
     *
     * @return int
     */
    public function getPackageCount()
    {
        return $this->values['packageCount'];
    }

    /**
     * Set processingOptions
     *
     *
     * Example:
     * @param ShipShipmentDryIceProcessingOptionsRequested $processingOptions
     * @return $this
     */
    public function setProcessingOptions(ShipShipmentDryIceProcessingOptionsRequested $processingOptions)
    {
        $this->values['processingOptions'] = $processingOptions;
        return $this;
    }

    /**
     * Get processingOptions
     *
     * @return ShipShipmentDryIceProcessingOptionsRequested
     */
    public function getProcessingOptions()
    {
        return $this->values['processingOptions'];
    }
}
