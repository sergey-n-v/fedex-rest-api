<?php
namespace FedExRestApi\RateService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * This object provides the shipment and package rating data in a rate request reply.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $rateType
 * @property string $ratedWeightMethod
 * @property float $totalDutiesTaxesAndFees
 * @property float $totalDiscounts
 * @property float $totalDutiesAndTaxes
 * @property RateVariableHandlingCharges $variableHandlingCharges
 * @property RateEdtCharge[] $edtCharges
 * @property float $totalAncillaryFeesAndTaxes
 * @property RateRatedPackageDetail[] $ratedPackages
 * @property float $totalNetFedExCharge
 * @property string $quoteNumber
 * @property string $shipmentLegRateDetails
 * @property string $freightChargeBasis
 * @property RateVariableHandlingCharges $totalVariableHandlingCharges
 * @property float $totalVatCharge
 * @property RateAncillaryFeesAndTaxes[] $ancillaryFeesAndTaxes
 * @property RateEdtCharge[] $preferredEdtCharges
 * @property float $totalNetCharge
 * @property float $totalBaseCharge
 * @property float $totalNetChargeWithDutiesAndTaxes
 * @property RateShipmentRateDetail $shipmentRateDetail

 */
class RateRatedShipmentDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateRatedShipmentDetail';

    /**
     * Set rateType
     *
     * simpleClass: RateRateType
     * Example: ACCOUNT
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
     * Set ratedWeightMethod
     *
     * simpleClass: RateRatedWeightMethod
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
     * Example: 445.54
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
     * Set totalDiscounts
     *
     *
     * Example: 445.54
     * @param float $totalDiscounts
     * @return $this
     */
    public function setTotalDiscounts($totalDiscounts)
    {
        $this->values['totalDiscounts'] = $totalDiscounts;
        return $this;
    }

    /**
     * Get totalDiscounts
     *
     * @return float
     */
    public function getTotalDiscounts()
    {
        return $this->values['totalDiscounts'];
    }

    /**
     * Set totalDutiesAndTaxes
     *
     *
     * Example: 445.54
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
     * Set variableHandlingCharges
     *
     *
     * Example:
     * @param RateVariableHandlingCharges $variableHandlingCharges
     * @return $this
     */
    public function setVariableHandlingCharges(RateVariableHandlingCharges $variableHandlingCharges)
    {
        $this->values['variableHandlingCharges'] = $variableHandlingCharges;
        return $this;
    }

    /**
     * Get variableHandlingCharges
     *
     * @return RateVariableHandlingCharges
     */
    public function getVariableHandlingCharges()
    {
        return $this->values['variableHandlingCharges'];
    }

    /**
     * Set edtCharges
     *
     *
     * Example:
     * @param RateEdtCharge[] $edtCharges
     * @return $this
     */
    public function setEdtCharges(array $edtCharges)
    {
        $this->values['edtCharges'] = $edtCharges;
        return $this;
    }

    /**
     * Get edtCharges
     *
     * @return RateEdtCharge[]
     */
    public function getEdtCharges()
    {
        return $this->values['edtCharges'];
    }

    /**
     * Set totalAncillaryFeesAndTaxes
     *
     *
     * Example: 445.54
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
     * Set ratedPackages
     *
     *
     * Example:
     * @param RateRatedPackageDetail[] $ratedPackages
     * @return $this
     */
    public function setRatedPackages(array $ratedPackages)
    {
        $this->values['ratedPackages'] = $ratedPackages;
        return $this;
    }

    /**
     * Get ratedPackages
     *
     * @return RateRatedPackageDetail[]
     */
    public function getRatedPackages()
    {
        return $this->values['ratedPackages'];
    }

    /**
     * Set totalNetFedExCharge
     *
     *
     * Example: 445.54
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
     * Set quoteNumber
     *
     *
     * Example: quoteNumber
     * @param string $quoteNumber
     * @return $this
     */
    public function setQuoteNumber($quoteNumber)
    {
        $this->values['quoteNumber'] = $quoteNumber;
        return $this;
    }

    /**
     * Get quoteNumber
     *
     * @return string
     */
    public function getQuoteNumber()
    {
        return $this->values['quoteNumber'];
    }

    /**
     * Set shipmentLegRateDetails
     *
     *
     * Example:
     * @param string $shipmentLegRateDetails
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
     * @return string
     */
    public function getShipmentLegRateDetails()
    {
        return $this->values['shipmentLegRateDetails'];
    }

    /**
     * Set freightChargeBasis
     *
     * simpleClass: RateFreightChargeBasis
     * Example: FLAT
     * @param string $freightChargeBasis
     * @return $this
     */
    public function setFreightChargeBasis($freightChargeBasis)
    {
        $this->values['freightChargeBasis'] = $freightChargeBasis;
        return $this;
    }

    /**
     * Get freightChargeBasis
     *
     * @return string
     */
    public function getFreightChargeBasis()
    {
        return $this->values['freightChargeBasis'];
    }

    /**
     * Set totalVariableHandlingCharges
     *
     *
     * Example:
     * @param RateVariableHandlingCharges $totalVariableHandlingCharges
     * @return $this
     */
    public function setTotalVariableHandlingCharges(RateVariableHandlingCharges $totalVariableHandlingCharges)
    {
        $this->values['totalVariableHandlingCharges'] = $totalVariableHandlingCharges;
        return $this;
    }

    /**
     * Get totalVariableHandlingCharges
     *
     * @return RateVariableHandlingCharges
     */
    public function getTotalVariableHandlingCharges()
    {
        return $this->values['totalVariableHandlingCharges'];
    }

    /**
     * Set totalVatCharge
     *
     *
     * Example: 445.54
     * @param float $totalVatCharge
     * @return $this
     */
    public function setTotalVatCharge($totalVatCharge)
    {
        $this->values['totalVatCharge'] = $totalVatCharge;
        return $this;
    }

    /**
     * Get totalVatCharge
     *
     * @return float
     */
    public function getTotalVatCharge()
    {
        return $this->values['totalVatCharge'];
    }

    /**
     * Set ancillaryFeesAndTaxes
     *
     *
     * Example:
     * @param RateAncillaryFeesAndTaxes[] $ancillaryFeesAndTaxes
     * @return $this
     */
    public function setAncillaryFeesAndTaxes(array $ancillaryFeesAndTaxes)
    {
        $this->values['ancillaryFeesAndTaxes'] = $ancillaryFeesAndTaxes;
        return $this;
    }

    /**
     * Get ancillaryFeesAndTaxes
     *
     * @return RateAncillaryFeesAndTaxes[]
     */
    public function getAncillaryFeesAndTaxes()
    {
        return $this->values['ancillaryFeesAndTaxes'];
    }

    /**
     * Set preferredEdtCharges
     *
     *
     * Example:
     * @param RateEdtCharge[] $preferredEdtCharges
     * @return $this
     */
    public function setPreferredEdtCharges(array $preferredEdtCharges)
    {
        $this->values['preferredEdtCharges'] = $preferredEdtCharges;
        return $this;
    }

    /**
     * Get preferredEdtCharges
     *
     * @return RateEdtCharge[]
     */
    public function getPreferredEdtCharges()
    {
        return $this->values['preferredEdtCharges'];
    }

    /**
     * Set totalNetCharge
     *
     *
     * Example: 445.54
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
     * Example: 445.54
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
     * Example: 445.54
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
     * Set shipmentRateDetail
     *
     *
     * Example:
     * @param RateShipmentRateDetail $shipmentRateDetail
     * @return $this
     */
    public function setShipmentRateDetail(RateShipmentRateDetail $shipmentRateDetail)
    {
        $this->values['shipmentRateDetail'] = $shipmentRateDetail;
        return $this;
    }

    /**
     * Get shipmentRateDetail
     *
     * @return RateShipmentRateDetail
     */
    public function getShipmentRateDetail()
    {
        return $this->values['shipmentRateDetail'];
    }
}
