<?php
namespace FedEx\AvailabilityService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * These are the input elements for requesting package and service options.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property AvPackageAndOptionsRequestedShipment $requestedShipment
 * @property string $carrierCodes
 * @property AvAccountNumber1 $accountNumber
 * @property string $systemOfMeasureType

 */
class AvFull_Schema_Package_And_Service_Options extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvFull_Schema_Package_And_Service_Options';

    /**
     * The descriptive data for the requested shipment.
     *
     * 
     * Example: 
     * @param AvPackageAndOptionsRequestedShipment $requestedShipment
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
     * @return AvPackageAndOptionsRequestedShipment
     */
    public function getRequestedShipment()
    {
        return $this->values['requestedShipment'];
    }

    /**
     * "Specify the four letter code of a FedEx operating company that meets your requirements<br>Examples of FedEx Operating Companies are:<ul><li>FDXE - FedEx Express</li><li>FDXG - FedEx Ground</li><li>FXSP - FedEx SmartPost</li><li>FXCC - FedEx Custom Critical.</li></ul>"
     *
     * simpleClass: AvCarrierCodes
     * Example: 
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

    /**
     * This is a Payor account number associated with the shipment. Account number is required, for SmartPost shipments (i.e. Carrier code: FXSP)
     *
     * 
     * Example: 
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
     * This is system measurement type, such as Imperial or Metric.
     *
     * simpleClass: AvSystemOfMeasureType
     * Example: METRIC
     * @param string $systemOfMeasureType
     * @return $this
     */
    public function setSystemOfMeasureType($systemOfMeasureType)
    {
        $this->values['systemOfMeasureType'] = $systemOfMeasureType;
        return $this;
    }

    /**
     * Get systemOfMeasureType
     *
     * @return string
     */
    public function getSystemOfMeasureType()
    {
        return $this->values['systemOfMeasureType'];
    }
}
