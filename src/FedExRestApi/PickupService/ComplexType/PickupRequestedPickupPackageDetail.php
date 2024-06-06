<?php
namespace FedExRestApi\PickupService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * provides requested pickup package detail.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property PickupPackageSpecialServices $packageSpecialServices

 */
class PickupRequestedPickupPackageDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PickupRequestedPickupPackageDetail';

    /**
     * Set packageSpecialServices
     *
     *
     * Example:
     * @param PickupPackageSpecialServices $packageSpecialServices
     * @return $this
     */
    public function setPackageSpecialServices(PickupPackageSpecialServices $packageSpecialServices)
    {
        $this->values['packageSpecialServices'] = $packageSpecialServices;
        return $this;
    }

    /**
     * Get packageSpecialServices
     *
     * @return PickupPackageSpecialServices
     */
    public function getPackageSpecialServices()
    {
        return $this->values['packageSpecialServices'];
    }
}
