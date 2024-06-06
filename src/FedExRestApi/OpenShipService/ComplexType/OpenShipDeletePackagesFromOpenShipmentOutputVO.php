<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * OpenShipDeletePackagesFromOpenShipmentOutputVO
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property boolean $deletedPackagesFromOpenshipment
 * @property OpenShipAlert[] $alerts

 */
class OpenShipDeletePackagesFromOpenShipmentOutputVO extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipDeletePackagesFromOpenShipmentOutputVO';

    /**
     * This element shows the status of openshipment packages deletion
     *
     *
     * Example: 1
     * @param boolean $deletedPackagesFromOpenshipment
     * @return $this
     */
    public function setDeletedPackagesFromOpenshipment($deletedPackagesFromOpenshipment)
    {
        $this->values['deletedPackagesFromOpenshipment'] = $deletedPackagesFromOpenshipment;
        return $this;
    }

    /**
     * Get deletedPackagesFromOpenshipment
     *
     * @return boolean
     */
    public function getDeletedPackagesFromOpenshipment()
    {
        return $this->values['deletedPackagesFromOpenshipment'];
    }

    /**
     * The alerts received when a Shipment is processed. This includes the alert code, alert type, and alert message.
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
