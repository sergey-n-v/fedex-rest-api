<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * This information describes how and when a online email return label shipment may be accessed for completion.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property OpenShipPendingShipmentAccessorDetail[] $accessorDetails

 */
class OpenShipPendingShipmentAccessDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipPendingShipmentAccessDetail';

    /**
     * Indicates the details about the users who can access the shipment.
     *
     *
     * Example:
     * @param OpenShipPendingShipmentAccessorDetail[] $accessorDetails
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
     * @return OpenShipPendingShipmentAccessorDetail[]
     */
    public function getAccessorDetails()
    {
        return $this->values['accessorDetails'];
    }
}
