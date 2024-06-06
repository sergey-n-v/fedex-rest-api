<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * These are shipment advisory details.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property ShipRegulatoryAdvisoryDetail $regulatoryAdvisory

 */
class ShipShipmentAdvisoryDetails extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipShipmentAdvisoryDetails';

    /**
     * Set regulatoryAdvisory
     *
     *
     * Example:
     * @param ShipRegulatoryAdvisoryDetail $regulatoryAdvisory
     * @return $this
     */
    public function setRegulatoryAdvisory(ShipRegulatoryAdvisoryDetail $regulatoryAdvisory)
    {
        $this->values['regulatoryAdvisory'] = $regulatoryAdvisory;
        return $this;
    }

    /**
     * Get regulatoryAdvisory
     *
     * @return ShipRegulatoryAdvisoryDetail
     */
    public function getRegulatoryAdvisory()
    {
        return $this->values['regulatoryAdvisory'];
    }
}
