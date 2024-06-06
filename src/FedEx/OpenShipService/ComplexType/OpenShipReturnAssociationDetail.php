<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the details of an outbound shipment in order to associate the return shipment to it.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $shipDatestamp
 * @property string $trackingNumber

 */
class OpenShipReturnAssociationDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipReturnAssociationDetail';

    /**
     * This is the ship date for the outbound shipment associated with a return shipment. The format is YYYY-MM-DD.<br> Example: 2019-10-01
     *
     * 
     * Example: 2019-10-01
     * @param string $shipDatestamp
     * @return $this
     */
    public function setShipDatestamp($shipDatestamp)
    {
        $this->values['shipDatestamp'] = $shipDatestamp;
        return $this;
    }

    /**
     * Get shipDatestamp
     *
     * @return string
     */
    public function getShipDatestamp()
    {
        return $this->values['shipDatestamp'];
    }

    /**
     * This is a tracking number associated with this package.<br>Example: 49XXX0000XXX20032835
     *
     * 
     * Example: 123456789
     * @param string $trackingNumber
     * @return $this
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->values['trackingNumber'] = $trackingNumber;
        return $this;
    }

    /**
     * Get trackingNumber
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->values['trackingNumber'];
    }
}
