<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

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
 * @property ShipCurrencyExchangeRate $currencyExchangeRate
 * @property float $totalNetFreight
 * @property float $totalNetFedExCharge
 * @property ShipShipmentLegRateDetail[] $shipmentLegRateDetails
 * @property int $dimDivisor
 * @property string $rateType
 * @property ShipSurcharge[] $surcharges
 * @property float $totalSurcharges
 * @property ShipWeight $totalBillingWeight
 * @property ShipRateDiscount[] $freightDiscounts
 * @property string $rateScale
 * @property float $totalNetCharge
 * @property float $totalBaseCharge
 * @property float $totalNetChargeWithDutiesAndTaxes
 * @property string $currency

 */
class ShipShipmentRateDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipShipmentRateDetail';

    /**
     * Set rateZone
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
     * Set ratedWeightMethod
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
     * Set totalDutiesTaxesAndFees
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
     * Set pricingCode
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
     * Set totalFreightDiscounts
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
     * Set totalTaxes
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
     * Set totalDutiesAndTaxes
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
     * Set totalAncillaryFeesAndTaxes
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
     * Set taxes
     *
     * 
     * Example: 
     * @param string $taxes
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
     * @return string
     */
    public function getTaxes()
    {
        return $this->values['taxes'];
    }

    /**
     * Set totalRebates
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
     * Set fuelSurchargePercent
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
     * Set totalNetFreight
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
     * Set totalNetFedExCharge
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
     * Set shipmentLegRateDetails
     *
     * 
     * Example: 
     * @param ShipShipmentLegRateDetail[] $shipmentLegRateDetails
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
     * @return ShipShipmentLegRateDetail[]
     */
    public function getShipmentLegRateDetails()
    {
        return $this->values['shipmentLegRateDetails'];
    }

    /**
     * Set dimDivisor
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
     * Set rateType
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
     * Set totalNetCharge
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
     * Set totalBaseCharge
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
     * Set totalNetChargeWithDutiesAndTaxes
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
