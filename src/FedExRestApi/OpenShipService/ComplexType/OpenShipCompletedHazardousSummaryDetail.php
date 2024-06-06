<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Specifies Completed Hazardous Summary Detail.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property int $smallQuantityExceptionPackageCount

 */
class OpenShipCompletedHazardousSummaryDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipCompletedHazardousSummaryDetail';

    /**
     * Specifies the total number of packages containing hazardous commodities in small exceptions.<br>Example: 10
     *
     *
     * Example: 10
     * @param int $smallQuantityExceptionPackageCount
     * @return $this
     */
    public function setSmallQuantityExceptionPackageCount($smallQuantityExceptionPackageCount)
    {
        $this->values['smallQuantityExceptionPackageCount'] = $smallQuantityExceptionPackageCount;
        return $this;
    }

    /**
     * Get smallQuantityExceptionPackageCount
     *
     * @return int
     */
    public function getSmallQuantityExceptionPackageCount()
    {
        return $this->values['smallQuantityExceptionPackageCount'];
    }
}
