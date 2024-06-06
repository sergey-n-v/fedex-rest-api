<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This is a placeholder for single leg of a shipment rates details, as calculated per a specific rate type.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $rateZone
 * @property string $pricingCode
 * @property OpenShipTax[] $taxes
 * @property OpenShipWeight $totalDimWeight
 * @property float $totalRebates
 * @property float $fuelSurchargePercent
 * @property OpenShipCurrencyExchangeRate $currencyExchangeRate
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
 * @property OpenShipSurcharge[] $surcharges
 * @property float $totalSurcharges
 * @property OpenShipWeight $totalBillingWeight
 * @property OpenShipRateDiscount[] $freightDiscounts
 * @property string $rateScale
 * @property float $totalNetCharge
 * @property float $totalNetChargeWithDutiesAndTaxes
 * @property string $currency

 */
class OpenShipShipmentLegRateDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipShipmentLegRateDetail';

    /**
     * Indicates the rate zone used (based on origin and destination).<br>Example: rateZone
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
     * Specifies the Pricing Code.<br>Example: pricingCode
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
     * Specifies the taxes.
     *
     * 
     * Example: 
     * @param OpenShipTax[] $taxes
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
     * @return OpenShipTax[]
     */
    public function getTaxes()
    {
        return $this->values['taxes'];
    }

    /**
     * Sum of dimensional weights for all packages.
     *
     * 
     * Example: 
     * @param OpenShipWeight $totalDimWeight
     * @return $this
     */
    public function setTotalDimWeight($totalDimWeight)
    {
        $this->values['totalDimWeight'] = $totalDimWeight;
        return $this;
    }

    /**
     * Get totalDimWeight
     *
     * @return OpenShipWeight
     */
    public function getTotalDimWeight()
    {
        return $this->values['totalDimWeight'];
    }

    /**
     * Specifies the total rebate.<br>Example: 2.0
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
     * Specifies a fuel surcharge percentage.<br>Example: 6.0
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
     * Specifies currency exchange rate.
     *
     * 
     * Example: 
     * @param OpenShipCurrencyExchangeRate $currencyExchangeRate
     * @return $this
     */
    public function setCurrencyExchangeRate($currencyExchangeRate)
    {
        $this->values['currencyExchangeRate'] = $currencyExchangeRate;
        return $this;
    }

    /**
     * Get currencyExchangeRate
     *
     * @return OpenShipCurrencyExchangeRate
     */
    public function getCurrencyExchangeRate()
    {
        return $this->values['currencyExchangeRate'];
    }

    /**
     * The value used to calculate the weight based on the dimensions.<br>Example: 6
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
     * Type used for this specific set of rate data.<br>Example: PAYOR_RETAIL_PACKAGE
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
     * Specifies the location id the destination of shipment leg.<br>Example: HKAA
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
     * Identifies the type of dim divisor that was applied.<br>Example: dimDivisorType
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
     * The total freight charge that was calculated before surcharges, discounts and taxes.<br>Example: 6.0
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
     * Indicates which weight was used.<br>Example: ratedWeightMethod
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
     * The sum of all discounts.<br>Example: 9.0
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
     * Total of the transportation-based taxes.<br>Example: 12.6
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
     * Specifies minimum charge type.
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
     * Total of shipments duties and taxes; only provided if estimated duties and taxes were calculated for this shipment.<br>Example: 17.78
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
     * The freight charge minus discounts.<br>Example: 6.0
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
     * This is the sum of shipment's total surcharges (not including total taxes).<br>Example: 3.2
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
     * All surcharges that apply to this shipment.<br><a onclick='loadDocReference("surcharges")'>click here to see surcharges</a>
     *
     * 
     * Example: 
     * @param OpenShipSurcharge[] $surcharges
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
     * @return OpenShipSurcharge[]
     */
    public function getSurcharges()
    {
        return $this->values['surcharges'];
    }

    /**
     * The total of all surcharges.<br>Example: 5.0
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
     * The weight used to calculate these rates.
     *
     * 
     * Example: 
     * @param OpenShipWeight $totalBillingWeight
     * @return $this
     */
    public function setTotalBillingWeight($totalBillingWeight)
    {
        $this->values['totalBillingWeight'] = $totalBillingWeight;
        return $this;
    }

    /**
     * Get totalBillingWeight
     *
     * @return OpenShipWeight
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
     * @param OpenShipRateDiscount[] $freightDiscounts
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
     * @return OpenShipRateDiscount[]
     */
    public function getFreightDiscounts()
    {
        return $this->values['freightDiscounts'];
    }

    /**
     * Indicates the rate scale used.<br>Example: 6702
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
     * The net charge after applying all discounts and surcharges.<br>Example: 25.3
     *
     * 
     * Example: 25.3
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
     * Sum of total net charge, total duties and taxes; only provided if estimated duties and taxes were calculated for this shipment and duties, taxes and transportation charges are all paid by the same sender account.<br>Example: 25.67
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
     * This is the currency code for the amount.<br>Example: USD<br><a onclick='loadDocReference("currencycodes")'>click here to see Currency codes</a>
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
