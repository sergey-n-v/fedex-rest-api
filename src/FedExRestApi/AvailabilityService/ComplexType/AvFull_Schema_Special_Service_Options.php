<?php
namespace FedExRestApi\AvailabilityService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * The request elements for special service options availability.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property AvSpecialServicesRequestedShipment $requestedShipment
 * @property AvAccountNumber1 $accountNumber
 * @property string $carrierCodes

 */
class AvFull_Schema_Special_Service_Options extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvFull_Schema_Special_Service_Options';

    /**
     * Set requestedShipment
     *
     *
     * Example:
     * @param AvRequestedShipment $requestedShipment
     * @return $this
     */
    public function setRequestedShipment($requestedShipment)
    {
        $this->values['requestedShipment'] = $requestedShipment;
        return $this;
    }

    /**
     * Get requestedShipment
     *
     * @return AvRequestedShipment
     */
    public function getRequestedShipment()
    {
        return $this->values['requestedShipment'];
    }

    /**
     * Account number associated with a Payor object. Example: Your account number
     *
     *
     * Example: {"value":"123456789"}
     * @param AvAccountNumber1 $accountNumber
     * @return $this
     */
    public function setAccountNumber($accountNumber)
    {
        $this->values['accountNumber'] = $accountNumber;
        return $this;
    }

    /**
     * Get accountNumber
     *
     * @return AvAccountNumber1
     */
    public function getAccountNumber()
    {
        return $this->values['accountNumber'];
    }

    /**
     * Optionally supplied to restrict the results to services for a specific carrier. Valid values are: FDXE, FDXG, FXSP. <br> Example: ["FDXG", "FDXE"]
     *
     * simpleClass: AvCarrierCodes
     * Example: ["FDXG","FDXE"]
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
