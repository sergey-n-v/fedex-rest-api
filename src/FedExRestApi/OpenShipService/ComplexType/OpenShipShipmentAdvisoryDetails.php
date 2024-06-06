<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * These are shipment advisory details.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property OpenShipRegulatoryAdvisoryDetail $regulatoryAdvisory

 */
class OpenShipShipmentAdvisoryDetails extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipShipmentAdvisoryDetails';

    /**
     * Set regulatoryAdvisory
     *
     *
     * Example:
     * @param OpenShipRegulatoryAdvisoryDetail $regulatoryAdvisory
     * @return $this
     */
    public function setRegulatoryAdvisory(OpenShipRegulatoryAdvisoryDetail $regulatoryAdvisory)
    {
        $this->values['regulatoryAdvisory'] = $regulatoryAdvisory;
        return $this;
    }

    /**
     * Get regulatoryAdvisory
     *
     * @return OpenShipRegulatoryAdvisoryDetail
     */
    public function getRegulatoryAdvisory()
    {
        return $this->values['regulatoryAdvisory'];
    }
}
