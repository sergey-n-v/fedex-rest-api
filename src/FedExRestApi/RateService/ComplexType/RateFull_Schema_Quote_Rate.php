<?php
namespace FedExRestApi\RateService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * The request elements for requesting a rate quote.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property RateAccountNumber $accountNumber
 * @property RateRateRequestControlParameters $rateRequestControlParameters
 * @property RateRequestedShipment $requestedShipment
 * @property string $carrierCodes

 */
class RateFull_Schema_Quote_Rate extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateFull_Schema_Quote_Rate';

    /**
     * Set accountNumber
     *
     *
     * Example:
     * @param RateAccountNumber $accountNumber
     * @return $this
     */
    public function setAccountNumber(RateAccountNumber $accountNumber)
    {
        $this->values['accountNumber'] = $accountNumber;
        return $this;
    }

    /**
     * Get accountNumber
     *
     * @return RateAccountNumber
     */
    public function getAccountNumber()
    {
        return $this->values['accountNumber'];
    }

    /**
     * Set rateRequestControlParameters
     *
     *
     * Example:
     * @param RateRateRequestControlParameters $rateRequestControlParameters
     * @return $this
     */
    public function setRateRequestControlParameters(RateRateRequestControlParameters $rateRequestControlParameters)
    {
        $this->values['rateRequestControlParameters'] = $rateRequestControlParameters;
        return $this;
    }

    /**
     * Get rateRequestControlParameters
     *
     * @return RateRateRequestControlParameters
     */
    public function getRateRequestControlParameters()
    {
        return $this->values['rateRequestControlParameters'];
    }

    /**
     * Set requestedShipment
     *
     *
     * Example:
     * @param RateRequestedShipment $requestedShipment
     * @return $this
     */
    public function setRequestedShipment(RateRequestedShipment $requestedShipment)
    {
        $this->values['requestedShipment'] = $requestedShipment;
        return $this;
    }

    /**
     * Get requestedShipment
     *
     * @return RateRequestedShipment
     */
    public function getRequestedShipment()
    {
        return $this->values['requestedShipment'];
    }

    /**
     * Set carrierCodes
     *
     *
     * Example: ["FDXE"]
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
