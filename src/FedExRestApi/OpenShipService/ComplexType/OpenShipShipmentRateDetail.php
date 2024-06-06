<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * This is a placeholder for shipment total/summary rates details, as calculated per a specific rate type. The totals may differ from the sum of corresponding package data for Multiweight or Express MPS.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $rateZone
 * @property string $ratedWeightMethod
 * @property float $totalDutiesTaxesAndFees
 * @property string $pricingCode
 * @property float $totalFreightDiscounts
 * @property float $totalTaxes
 * @property float $totalDutiesAndTaxes
 * @property float $totalAncillaryFeesAndTaxes
 * @property string $taxes
 * @property float $totalRebates
 * @property float $fuelSurchargePercent
 * @property OpenShipCurrencyExchangeRate $currencyExchangeRate
 * @property float $totalNetFreight
 * @property float $totalNetFedExCharge
 * @property OpenShipShipmentLegRateDetail[] $shipmentLegRateDetails
 * @property int $dimDivisor
 * @property string $rateType
 * @property OpenShipSurcharge[] $surcharges
 * @property float $totalSurcharges
 * @property OpenShipWeight $totalBillingWeight
 * @property OpenShipRateDiscount[] $freightDiscounts
 * @property string $rateScale
 * @property float $totalNetCharge
 * @property float $totalBaseCharge
 * @property float $totalNetChargeWithDutiesAndTaxes
 * @property string $currency

 */
class OpenShipShipmentRateDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipShipmentRateDetail';

    /**
     * Indicates the rate zone used (based on origin and destination).<br>Example: US001O
     *
     *
     * Example: US001O
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
     * Indicates which weight was used.<br>Example: ACTUAL
     *
     *
     * Example: ACTUAL
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
     * The total of the total duties & taxes and the total ancillary fees & taxes.<br>Example: 24.56
     *
     *
     * Example: 24.56
     * @param float $totalDutiesTaxesAndFees
     * @return $this
     */
    public function setTotalDutiesTaxesAndFees($totalDutiesTaxesAndFees)
    {
        $this->values['totalDutiesTaxesAndFees'] = $totalDutiesTaxesAndFees;
        return $this;
    }

    /**
     * Get totalDutiesTaxesAndFees
     *
     * @return float
     */
    public function getTotalDutiesTaxesAndFees()
    {
        return $this->values['totalDutiesTaxesAndFees'];
    }

    /**
     * Specifies pricing Code.<br>Example: PACKAGE
     *
     *
     * Example: LTL_FREIGHT
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
     * The total discounts used in the rate calculation.<br>Example: 1.56
     *
     *
     * Example: 1.56
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
     * Total of the transportation-based taxes.<br>Example: 3.45
     *
     *
     * Example: 3.45
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
     * Total of all values under this shipment's duties and taxes; only provided if estimated duties and taxes were calculated for this shipment.<br>Example: 6.78
     *
     *
     * Example: 6.78
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
     * Identifies the total amount of the shipment-level fees and taxes that are not based on transportation charges or commodity-level estimated duties and taxes.<br>Example: 5.67
     *
     *
     * Example: 5.67
     * @param float $totalAncillaryFeesAndTaxes
     * @return $this
     */
    public function setTotalAncillaryFeesAndTaxes($totalAncillaryFeesAndTaxes)
    {
        $this->values['totalAncillaryFeesAndTaxes'] = $totalAncillaryFeesAndTaxes;
        return $this;
    }

    /**
     * Get totalAncillaryFeesAndTaxes
     *
     * @return float
     */
    public function getTotalAncillaryFeesAndTaxes()
    {
        return $this->values['totalAncillaryFeesAndTaxes'];
    }

    /**
     * All transportation-based taxes applicable to this shipment.
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
     * The total sum of all rebates applied to this shipment.<br>Example: 1.98
     *
     *
     * Example: 1.98
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
     * Specifies a fuel surcharge percentage.<br>Example: 4.56
     *
     *
     * Example: 4.56
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
     * @param OpenShipCurrencyExchangeRate $currencyExchangeRate
     * @return $this
     */
    public function setCurrencyExchangeRate(OpenShipCurrencyExchangeRate $currencyExchangeRate)
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
     * The freight charge minus discounts.<br>Example: 9.56
     *
     *
     * Example: 9.56
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
     * This is the sum of shipment's total net freight, total surchages (not including totalTaxes).<br>Example: 88.56
     *
     *
     * Example: 88.56
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
     * This is data for a single leg of a shipment's total/summary rates, as calculated per a specific rate type.
     *
     *
     * Example:
     * @param OpenShipShipmentLegRateDetail[] $shipmentLegRateDetails
     * @return $this
     */
    public function setShipmentLegRateDetails(array $shipmentLegRateDetails)
    {
        $this->values['shipmentLegRateDetails'] = $shipmentLegRateDetails;
        return $this;
    }

    /**
     * Get shipmentLegRateDetails
     *
     * @return OpenShipShipmentLegRateDetail[]
     */
    public function getShipmentLegRateDetails()
    {
        return $this->values['shipmentLegRateDetails'];
    }

    /**
     * The value used to calculate the weight based on the dimensions.<br>Example: 0
     *
     *
     *
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
     * The Type used for this specific set of rate data.<br>Example: RATED_ACCOUNT_SHIPMENT
     *
     *
     * Example: RATED_ACCOUNT_SHIPMENT
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
     * All surcharges that apply to this shipment.<br><a onclick='loadDocReference("surcharges")'>click here to see Surcharges</a>
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
     * The total amount of all surcharges applied to this shipment.<br>Example: 9.88
     *
     *
     * Example: 9.88
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
     * Indicates the freight discounts.
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
     * Indicates the rate scale used.<br>Example: 00000
     *
     *
     * Example: 00000
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
     * The net charge after applying all discounts and surcharges.<br>Example: 3.78
     *
     *
     * Example: 3.78
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
     * The total Shipment charge that was calculated before surcharges, discounts and taxes.<br>Example: 234.56
     *
     *
     * Example: 234.56
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
     * This is the sum of shipment's total net charges and total duties and taxes; only provided if estimated duties and taxes were calculated for this shipment AND duties, taxes and transportation charges are all paid by the same sender account.<br>Example: 222.56
     *
     *
     * Example: 222.56
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
     * Indicates the currency code.<br><a onclick='loadDocReference("currencycodes")'>click here to see Currency Codes</a>
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
