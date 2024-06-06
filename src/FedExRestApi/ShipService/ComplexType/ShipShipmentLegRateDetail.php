<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * This is a placeholder for single leg of a shipment rates details, as calculated per a specific rate type.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $rateZone
 * @property string $pricingCode
 * @property ShipTax[] $taxes
 * @property ShipWeight $totalDimWeight
 * @property float $totalRebates
 * @property float $fuelSurchargePercent
 * @property ShipCurrencyExchangeRate $currencyExchangeRate
 * @property int $dimDivisor
 * @property string $rateType
 * @property string $legDestinationLocationId
 * @property string $dimDivisorType
 * @property float $totalBaseCharge
 * @property string $ratedWeightMethod
 * @property float $totalFreightDiscounts
 * @property float $totalTaxes
 * @property string $minimumChargeType
 * @property float $totalDutiesAndTaxes
 * @property float $totalNetFreight
 * @property float $totalNetFedExCharge
 * @property ShipSurcharge[] $surcharges
 * @property float $totalSurcharges
 * @property ShipWeight $totalBillingWeight
 * @property ShipRateDiscount[] $freightDiscounts
 * @property string $rateScale
 * @property float $totalNetCharge
 * @property float $totalNetChargeWithDutiesAndTaxes
 * @property string $currency

 */
class ShipShipmentLegRateDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipShipmentLegRateDetail';

    /**
     * Set rateZone
     *
     *
     * Example: rateZone
     * @param string $rateZone
     * @return $this
     */
    public function setRateZone($rateZone)
    {
        $this->values['rateZone'] = $rateZone;
        return $this;
    }

    /**
     * Get rateZone
     *
     * @return string
     */
    public function getRateZone()
    {
        return $this->values['rateZone'];
    }

    /**
     * Set pricingCode
     *
     *
     * Example: pricingCode
     * @param string $pricingCode
     * @return $this
     */
    public function setPricingCode($pricingCode)
    {
        $this->values['pricingCode'] = $pricingCode;
        return $this;
    }

    /**
     * Get pricingCode
     *
     * @return string
     */
    public function getPricingCode()
    {
        return $this->values['pricingCode'];
    }

    /**
     * Set taxes
     *
     *
     * Example:
     * @param ShipTax[] $taxes
     * @return $this
     */
    public function setTaxes(array $taxes)
    {
        $this->values['taxes'] = $taxes;
        return $this;
    }

    /**
     * Get taxes
     *
     * @return ShipTax[]
     */
    public function getTaxes()
    {
        return $this->values['taxes'];
    }

    /**
     * Set totalDimWeight
     *
     *
     * Example:
     * @param ShipWeight $totalDimWeight
     * @return $this
     */
    public function setTotalDimWeight(ShipWeight $totalDimWeight)
    {
        $this->values['totalDimWeight'] = $totalDimWeight;
        return $this;
    }

    /**
     * Get totalDimWeight
     *
     * @return ShipWeight
     */
    public function getTotalDimWeight()
    {
        return $this->values['totalDimWeight'];
    }

    /**
     * Set totalRebates
     *
     *
     * Example: 2
     * @param float $totalRebates
     * @return $this
     */
    public function setTotalRebates($totalRebates)
    {
        $this->values['totalRebates'] = $totalRebates;
        return $this;
    }

    /**
     * Get totalRebates
     *
     * @return float
     */
    public function getTotalRebates()
    {
        return $this->values['totalRebates'];
    }

    /**
     * Set fuelSurchargePercent
     *
     *
     * Example: 6
     * @param float $fuelSurchargePercent
     * @return $this
     */
    public function setFuelSurchargePercent($fuelSurchargePercent)
    {
        $this->values['fuelSurchargePercent'] = $fuelSurchargePercent;
        return $this;
    }

    /**
     * Get fuelSurchargePercent
     *
     * @return float
     */
    public function getFuelSurchargePercent()
    {
        return $this->values['fuelSurchargePercent'];
    }

    /**
     * Set currencyExchangeRate
     *
     *
     * Example:
     * @param ShipCurrencyExchangeRate $currencyExchangeRate
     * @return $this
     */
    public function setCurrencyExchangeRate(ShipCurrencyExchangeRate $currencyExchangeRate)
    {
        $this->values['currencyExchangeRate'] = $currencyExchangeRate;
        return $this;
    }

    /**
     * Get currencyExchangeRate
     *
     * @return ShipCurrencyExchangeRate
     */
    public function getCurrencyExchangeRate()
    {
        return $this->values['currencyExchangeRate'];
    }

    /**
     * Set dimDivisor
     *
     *
     * Example: 6
     * @param int $dimDivisor
     * @return $this
     */
    public function setDimDivisor($dimDivisor)
    {
        $this->values['dimDivisor'] = $dimDivisor;
        return $this;
    }

    /**
     * Get dimDivisor
     *
     * @return int
     */
    public function getDimDivisor()
    {
        return $this->values['dimDivisor'];
    }

    /**
     * Set rateType
     *
     *
     * Example: PAYOR_RETAIL_PACKAGE
     * @param string $rateType
     * @return $this
     */
    public function setRateType($rateType)
    {
        $this->values['rateType'] = $rateType;
        return $this;
    }

    /**
     * Get rateType
     *
     * @return string
     */
    public function getRateType()
    {
        return $this->values['rateType'];
    }

    /**
     * Set legDestinationLocationId
     *
     *
     * Example: legDestinationLocationId
     * @param string $legDestinationLocationId
     * @return $this
     */
    public function setLegDestinationLocationId($legDestinationLocationId)
    {
        $this->values['legDestinationLocationId'] = $legDestinationLocationId;
        return $this;
    }

    /**
     * Get legDestinationLocationId
     *
     * @return string
     */
    public function getLegDestinationLocationId()
    {
        return $this->values['legDestinationLocationId'];
    }

    /**
     * Set dimDivisorType
     *
     *
     * Example: dimDivisorType
     * @param string $dimDivisorType
     * @return $this
     */
    public function setDimDivisorType($dimDivisorType)
    {
        $this->values['dimDivisorType'] = $dimDivisorType;
        return $this;
    }

    /**
     * Get dimDivisorType
     *
     * @return string
     */
    public function getDimDivisorType()
    {
        return $this->values['dimDivisorType'];
    }

    /**
     * Set totalBaseCharge
     *
     *
     * Example: 6
     * @param float $totalBaseCharge
     * @return $this
     */
    public function setTotalBaseCharge($totalBaseCharge)
    {
        $this->values['totalBaseCharge'] = $totalBaseCharge;
        return $this;
    }

    /**
     * Get totalBaseCharge
     *
     * @return float
     */
    public function getTotalBaseCharge()
    {
        return $this->values['totalBaseCharge'];
    }

    /**
     * Set ratedWeightMethod
     *
     *
     * Example: ratedWeightMethod
     * @param string $ratedWeightMethod
     * @return $this
     */
    public function setRatedWeightMethod($ratedWeightMethod)
    {
        $this->values['ratedWeightMethod'] = $ratedWeightMethod;
        return $this;
    }

    /**
     * Get ratedWeightMethod
     *
     * @return string
     */
    public function getRatedWeightMethod()
    {
        return $this->values['ratedWeightMethod'];
    }

    /**
     * Set totalFreightDiscounts
     *
     *
     * Example: 9
     * @param float $totalFreightDiscounts
     * @return $this
     */
    public function setTotalFreightDiscounts($totalFreightDiscounts)
    {
        $this->values['totalFreightDiscounts'] = $totalFreightDiscounts;
        return $this;
    }

    /**
     * Get totalFreightDiscounts
     *
     * @return float
     */
    public function getTotalFreightDiscounts()
    {
        return $this->values['totalFreightDiscounts'];
    }

    /**
     * Set totalTaxes
     *
     *
     * Example: 12.6
     * @param float $totalTaxes
     * @return $this
     */
    public function setTotalTaxes($totalTaxes)
    {
        $this->values['totalTaxes'] = $totalTaxes;
        return $this;
    }

    /**
     * Get totalTaxes
     *
     * @return float
     */
    public function getTotalTaxes()
    {
        return $this->values['totalTaxes'];
    }

    /**
     * Set minimumChargeType
     *
     *
     * Example: minimumChargeType
     * @param string $minimumChargeType
     * @return $this
     */
    public function setMinimumChargeType($minimumChargeType)
    {
        $this->values['minimumChargeType'] = $minimumChargeType;
        return $this;
    }

    /**
     * Get minimumChargeType
     *
     * @return string
     */
    public function getMinimumChargeType()
    {
        return $this->values['minimumChargeType'];
    }

    /**
     * Set totalDutiesAndTaxes
     *
     *
     * Example: 17.78
     * @param float $totalDutiesAndTaxes
     * @return $this
     */
    public function setTotalDutiesAndTaxes($totalDutiesAndTaxes)
    {
        $this->values['totalDutiesAndTaxes'] = $totalDutiesAndTaxes;
        return $this;
    }

    /**
     * Get totalDutiesAndTaxes
     *
     * @return float
     */
    public function getTotalDutiesAndTaxes()
    {
        return $this->values['totalDutiesAndTaxes'];
    }

    /**
     * Set totalNetFreight
     *
     *
     * Example: 6
     * @param float $totalNetFreight
     * @return $this
     */
    public function setTotalNetFreight($totalNetFreight)
    {
        $this->values['totalNetFreight'] = $totalNetFreight;
        return $this;
    }

    /**
     * Get totalNetFreight
     *
     * @return float
     */
    public function getTotalNetFreight()
    {
        return $this->values['totalNetFreight'];
    }

    /**
     * Set totalNetFedExCharge
     *
     *
     * Example: 3.2
     * @param float $totalNetFedExCharge
     * @return $this
     */
    public function setTotalNetFedExCharge($totalNetFedExCharge)
    {
        $this->values['totalNetFedExCharge'] = $totalNetFedExCharge;
        return $this;
    }

    /**
     * Get totalNetFedExCharge
     *
     * @return float
     */
    public function getTotalNetFedExCharge()
    {
        return $this->values['totalNetFedExCharge'];
    }

    /**
     * Set surcharges
     *
     *
     * Example:
     * @param ShipSurcharge[] $surcharges
     * @return $this
     */
    public function setSurcharges(array $surcharges)
    {
        $this->values['surcharges'] = $surcharges;
        return $this;
    }

    /**
     * Get surcharges
     *
     * @return ShipSurcharge[]
     */
    public function getSurcharges()
    {
        return $this->values['surcharges'];
    }

    /**
     * Set totalSurcharges
     *
     *
     * Example: 5
     * @param float $totalSurcharges
     * @return $this
     */
    public function setTotalSurcharges($totalSurcharges)
    {
        $this->values['totalSurcharges'] = $totalSurcharges;
        return $this;
    }

    /**
     * Get totalSurcharges
     *
     * @return float
     */
    public function getTotalSurcharges()
    {
        return $this->values['totalSurcharges'];
    }

    /**
     * Set totalBillingWeight
     *
     *
     * Example:
     * @param ShipWeight $totalBillingWeight
     * @return $this
     */
    public function setTotalBillingWeight(ShipWeight $totalBillingWeight)
    {
        $this->values['totalBillingWeight'] = $totalBillingWeight;
        return $this;
    }

    /**
     * Get totalBillingWeight
     *
     * @return ShipWeight
     */
    public function getTotalBillingWeight()
    {
        return $this->values['totalBillingWeight'];
    }

    /**
     * Set freightDiscounts
     *
     *
     * Example:
     * @param ShipRateDiscount[] $freightDiscounts
     * @return $this
     */
    public function setFreightDiscounts(array $freightDiscounts)
    {
        $this->values['freightDiscounts'] = $freightDiscounts;
        return $this;
    }

    /**
     * Get freightDiscounts
     *
     * @return ShipRateDiscount[]
     */
    public function getFreightDiscounts()
    {
        return $this->values['freightDiscounts'];
    }

    /**
     * Set rateScale
     *
     *
     * Example: 6702
     * @param string $rateScale
     * @return $this
     */
    public function setRateScale($rateScale)
    {
        $this->values['rateScale'] = $rateScale;
        return $this;
    }

    /**
     * Get rateScale
     *
     * @return string
     */
    public function getRateScale()
    {
        return $this->values['rateScale'];
    }

    /**
     * Set totalNetCharge
     *
     *
     * Example: 253
     * @param float $totalNetCharge
     * @return $this
     */
    public function setTotalNetCharge($totalNetCharge)
    {
        $this->values['totalNetCharge'] = $totalNetCharge;
        return $this;
    }

    /**
     * Get totalNetCharge
     *
     * @return float
     */
    public function getTotalNetCharge()
    {
        return $this->values['totalNetCharge'];
    }

    /**
     * Set totalNetChargeWithDutiesAndTaxes
     *
     *
     * Example: 25.67
     * @param float $totalNetChargeWithDutiesAndTaxes
     * @return $this
     */
    public function setTotalNetChargeWithDutiesAndTaxes($totalNetChargeWithDutiesAndTaxes)
    {
        $this->values['totalNetChargeWithDutiesAndTaxes'] = $totalNetChargeWithDutiesAndTaxes;
        return $this;
    }

    /**
     * Get totalNetChargeWithDutiesAndTaxes
     *
     * @return float
     */
    public function getTotalNetChargeWithDutiesAndTaxes()
    {
        return $this->values['totalNetChargeWithDutiesAndTaxes'];
    }

    /**
     * Set currency
     *
     *
     * Example: USD
     * @param string $currency
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->values['currency'] = $currency;
        return $this;
    }

    /**
     * Get currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->values['currency'];
    }
}
