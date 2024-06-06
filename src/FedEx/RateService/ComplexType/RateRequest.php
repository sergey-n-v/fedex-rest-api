<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

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
class RateRequest extends RateFull_Schema_Quote_Rate
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateRequest';


}
