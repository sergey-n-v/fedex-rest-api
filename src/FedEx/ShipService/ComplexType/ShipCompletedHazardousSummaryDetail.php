<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies Completed Hazardous Summary Detail.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property int $smallQuantityExceptionPackageCount

 */
class ShipCompletedHazardousSummaryDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipCompletedHazardousSummaryDetail';

    /**
     * Set smallQuantityExceptionPackageCount
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
