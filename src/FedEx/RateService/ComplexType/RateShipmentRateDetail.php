<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This is shipment level rate data.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property RateCurrencyExchangeRate $currencyExchangeRate
 * @property string $currency
 * @property string $rateZone
 * @property string $ratingBasis
 * @property string $pricingCode
 * @property float $totalFreightDiscount
 * @property string $specialRatingApplied
 * @property float $totalSurcharges
 * @property RateRateDiscount[] $freightDiscount
 * @property float $fuelSurchargePercent
 * @property RateWeight_1 $totalBillingWeight
 * @property RateWeight_1 $totalDimWeight
 * @property int $dimDivisor
 * @property RateSurcharge[] $surCharges

 */
class RateShipmentRateDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateShipmentRateDetail';

    /**
     * Set currencyExchangeRate
     *
     * 
     * Example: 
     * @param RateCurrencyExchangeRate $currencyExchangeRate
     * @return $this
     */
    public function setCurrencyExchangeRate(RateCurrencyExchangeRate $currencyExchangeRate)
    {
        $this->values['currencyExchangeRate'] = $currencyExchangeRate;
        return $this;
    }

    /**
     * Get currencyExchangeRate
     *
     * @return RateCurrencyExchangeRate
     */
    public function getCurrencyExchangeRate()
    {
        return $this->values['currencyExchangeRate'];
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

    /**
     * Set rateZone
     *
     * 
     * Example: CA003O
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
     * Set ratingBasis
     *
     * simpleClass: RateRatingBasis
     * Example: SHIPMENT_WEIGHT_BASED
     * @param string $ratingBasis
     * @return $this
     */
    public function setRatingBasis($ratingBasis)
    {
        $this->values['ratingBasis'] = $ratingBasis;
        return $this;
    }

    /**
     * Get ratingBasis
     *
     * @return string
     */
    public function getRatingBasis()
    {
        return $this->values['ratingBasis'];
    }

    /**
     * Set pricingCode
     *
     * 
     * Example: ACTUAL
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
     * Set totalFreightDiscount
     *
     * 
     * Example: 856.32
     * @param float $totalFreightDiscount
     * @return $this
     */
    public function setTotalFreightDiscount($totalFreightDiscount)
    {
        $this->values['totalFreightDiscount'] = $totalFreightDiscount;
        return $this;
    }

    /**
     * Get totalFreightDiscount
     *
     * @return float
     */
    public function getTotalFreightDiscount()
    {
        return $this->values['totalFreightDiscount'];
    }

    /**
     * Set specialRatingApplied
     *
     * 
     * Example: Specialrating
     * @param string $specialRatingApplied
     * @return $this
     */
    public function setSpecialRatingApplied(array $specialRatingApplied)
    {
        $this->values['specialRatingApplied'] = $specialRatingApplied;
        return $this;
    }

    /**
     * Get specialRatingApplied
     *
     * @return string
     */
    public function getSpecialRatingApplied()
    {
        return $this->values['specialRatingApplied'];
    }

    /**
     * Set totalSurcharges
     *
     * 
     * Example: 586.25
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
     * Set freightDiscount
     *
     * 
     * Example: 
     * @param RateRateDiscount[] $freightDiscount
     * @return $this
     */
    public function setFreightDiscount(array $freightDiscount)
    {
        $this->values['freightDiscount'] = $freightDiscount;
        return $this;
    }

    /**
     * Get freightDiscount
     *
     * @return RateRateDiscount[]
     */
    public function getFreightDiscount()
    {
        return $this->values['freightDiscount'];
    }

    /**
     * Set fuelSurchargePercent
     *
     * 
     * Example: 10.5
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
     * Set totalBillingWeight
     *
     * 
     * Example: 
     * @param RateWeight_1 $totalBillingWeight
     * @return $this
     */
    public function setTotalBillingWeight(RateWeight_1 $totalBillingWeight)
    {
        $this->values['totalBillingWeight'] = $totalBillingWeight;
        return $this;
    }

    /**
     * Get totalBillingWeight
     *
     * @return RateWeight_1
     */
    public function getTotalBillingWeight()
    {
        return $this->values['totalBillingWeight'];
    }

    /**
     * Set totalDimWeight
     *
     * 
     * Example: 
     * @param RateWeight_1 $totalDimWeight
     * @return $this
     */
    public function setTotalDimWeight(RateWeight_1 $totalDimWeight)
    {
        $this->values['totalDimWeight'] = $totalDimWeight;
        return $this;
    }

    /**
     * Get totalDimWeight
     *
     * @return RateWeight_1
     */
    public function getTotalDimWeight()
    {
        return $this->values['totalDimWeight'];
    }

    /**
     * Set dimDivisor
     *
     * 
     * Example: 10
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
     * Set surCharges
     *
     * 
     * Example: 
     * @param RateSurcharge[] $surCharges
     * @return $this
     */
    public function setSurCharges(array $surCharges)
    {
        $this->values['surCharges'] = $surCharges;
        return $this;
    }

    /**
     * Get surCharges
     *
     * @return RateSurcharge[]
     */
    public function getSurCharges()
    {
        return $this->values['surCharges'];
    }
}
