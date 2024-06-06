<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * OpenShipRetrievePackageInOpenShipmentOutputVO
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property OpenShipRequestedPackageLineItem $requestedpackageLineItem
 * @property OpenShipAlert[] $alerts

 */
class OpenShipRetrievePackageInOpenShipmentOutputVO extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipRetrievePackageInOpenShipmentOutputVO';

    /**
     * Set requestedpackageLineItem
     *
     *
     * Example:
     * @param OpenShipRequestedPackageLineItem $requestedpackageLineItem
     * @return $this
     */
    public function setRequestedpackageLineItem(OpenShipRequestedPackageLineItem $requestedpackageLineItem)
    {
        $this->values['requestedpackageLineItem'] = $requestedpackageLineItem;
        return $this;
    }

    /**
     * Get requestedpackageLineItem
     *
     * @return OpenShipRequestedPackageLineItem
     */
    public function getRequestedpackageLineItem()
    {
        return $this->values['requestedpackageLineItem'];
    }

    /**
     * The alerts received when a shipShipment is processed. This includes the alert code, alert type, and alert message.
     *
     *
     * Example:
     * @param OpenShipAlert[] $alerts
     * @return $this
     */
    public function setAlerts(array $alerts)
    {
        $this->values['alerts'] = $alerts;
        return $this;
    }

    /**
     * Get alerts
     *
     * @return OpenShipAlert[]
     */
    public function getAlerts()
    {
        return $this->values['alerts'];
    }
}
