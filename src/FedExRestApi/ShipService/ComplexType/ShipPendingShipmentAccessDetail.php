<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * This information describes how and when a online email return label shipment may be accessed for completion.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property ShipPendingShipmentAccessorDetail[] $accessorDetails

 */
class ShipPendingShipmentAccessDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipPendingShipmentAccessDetail';

    /**
     * Set accessorDetails
     *
     *
     * Example:
     * @param ShipPendingShipmentAccessorDetail[] $accessorDetails
     * @return $this
     */
    public function setAccessorDetails(array $accessorDetails)
    {
        $this->values['accessorDetails'] = $accessorDetails;
        return $this;
    }

    /**
     * Get accessorDetails
     *
     * @return ShipPendingShipmentAccessorDetail[]
     */
    public function getAccessorDetails()
    {
        return $this->values['accessorDetails'];
    }
}
