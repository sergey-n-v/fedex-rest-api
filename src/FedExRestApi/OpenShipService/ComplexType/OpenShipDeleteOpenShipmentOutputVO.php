<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * The response elements received when a shipment is created.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property boolean $deletedOpenshipment
 * @property OpenShipAlert[] $alerts

 */
class OpenShipDeleteOpenShipmentOutputVO extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipDeleteOpenShipmentOutputVO';

    /**
     * Indicates if the open shipment is deleted or not. <br>Example: True
     *
     *
     * Example:
     * @param boolean $deletedOpenshipment
     * @return $this
     */
    public function setDeletedOpenshipment($deletedOpenshipment)
    {
        $this->values['deletedOpenshipment'] = $deletedOpenshipment;
        return $this;
    }

    /**
     * Get deletedOpenshipment
     *
     * @return boolean
     */
    public function getDeletedOpenshipment()
    {
        return $this->values['deletedOpenshipment'];
    }

    /**
     * The alert details received in the response.
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
