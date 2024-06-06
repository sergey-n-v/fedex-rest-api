<?php
namespace FedEx\AvailabilityService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * TransitTimeInputVO describes the details needed in order to get the transit times for a particular shipment.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property AvTransitTimeRequestedShipment $requestedShipment
 * @property string $carrierCodes

 */
class AvFull_Schema_TransitTime extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvFull_Schema_TransitTime';

    /**
     * Set requestedShipment
     *
     * 
     * Example: 
     * @param AvTransitTimeRequestedShipment $requestedShipment
     * @return $this
     */
    public function setRequestedShipment(AvTransitTimeRequestedShipment $requestedShipment)
    {
        $this->values['requestedShipment'] = $requestedShipment;
        return $this;
    }

    /**
     * Get requestedShipment
     *
     * @return AvTransitTimeRequestedShipment
     */
    public function getRequestedShipment()
    {
        return $this->values['requestedShipment'];
    }

    /**
     * Specify the four letter code of a FedEx operating company that meets your requirements<br>Examples of FedEx Operating Companies are:<ul><li>FDXE - FedEx Express</li><li>FDXG - FedEx Ground</li><li>FXSP - FedEx SmartPost</li><li>FXCC - FedEx Custom Critical.</li></ul>
     *
     * simpleClass: AvCarrierCodes
     * Example: ["FDXG"]
     * @param string $carrierCodes
     * @return $this
     */
    public function setCarrierCodes(array $carrierCodes)
    {
        $this->values['carrierCodes'] = $carrierCodes;
        return $this;
    }

    /**
     * Get carrierCodes
     *
     * @return string
     */
    public function getCarrierCodes()
    {
        return $this->values['carrierCodes'];
    }
}
