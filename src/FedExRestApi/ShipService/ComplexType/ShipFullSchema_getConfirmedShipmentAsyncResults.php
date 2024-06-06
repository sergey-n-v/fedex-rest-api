<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * ShipFullSchema_getConfirmedShipmentAsyncResults
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property ShipAccountNumber $accountNumber
 * @property string $jobId

 */
class ShipFullSchema_getConfirmedShipmentAsyncResults extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipFullSchema_getConfirmedShipmentAsyncResults';

    /**
     * Set accountNumber
     *
     *
     * Example:
     * @param ShipAccountNumber $accountNumber
     * @return $this
     */
    public function setAccountNumber(ShipAccountNumber $accountNumber)
    {
        $this->values['accountNumber'] = $accountNumber;
        return $this;
    }

    /**
     * Get accountNumber
     *
     * @return ShipAccountNumber
     */
    public function getAccountNumber()
    {
        return $this->values['accountNumber'];
    }

    /**
     * Set jobId
     *
     *
     * Example: 89sxxxxx233ae24ff31xxxxx
     * @param string $jobId
     * @return $this
     */
    public function setJobId($jobId)
    {
        $this->values['jobId'] = $jobId;
        return $this;
    }

    /**
     * Get jobId
     *
     * @return string
     */
    public function getJobId()
    {
        return $this->values['jobId'];
    }
}
