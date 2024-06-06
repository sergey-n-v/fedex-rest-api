<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Specifies the shipment level totals of dry ice data across all packages.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property OpenShipWeight $totalWeight
 * @property int $packageCount
 * @property OpenShipShipmentDryIceProcessingOptionsRequested $processingOptions

 */
class OpenShipShipmentDryIceDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipShipmentDryIceDetail';

    /**
     * Specify total dry ice weight for the shipment.
     *
     *
     * Example:
     * @param OpenShipWeight $totalWeight
     * @return $this
     */
    public function setTotalWeight($totalWeight)
    {
        $this->values['totalWeight'] = $totalWeight;
        return $this;
    }

    /**
     * Get totalWeight
     *
     * @return OpenShipWeight
     */
    public function getTotalWeight()
    {
        return $this->values['totalWeight'];
    }

    /**
     * Specifies the package Count for the shipment<br>Example: 10
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
     * @param OpenShipShipmentDryIceProcessingOptionsRequested $processingOptions
     * @return $this
     */
    public function setProcessingOptions(OpenShipShipmentDryIceProcessingOptionsRequested $processingOptions)
    {
        $this->values['processingOptions'] = $processingOptions;
        return $this;
    }

    /**
     * Get processingOptions
     *
     * @return OpenShipShipmentDryIceProcessingOptionsRequested
     */
    public function getProcessingOptions()
    {
        return $this->values['processingOptions'];
    }
}
