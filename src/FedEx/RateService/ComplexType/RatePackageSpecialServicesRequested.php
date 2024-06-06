<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * These special services are available at the package level for some or all service types. Needs Indicated, if rate data is being requested for the special services.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $specialServiceTypes
 * @property string $signatureOptionType
 * @property RateAlcoholDetail $alcoholDetail
 * @property RateDangerousGoodsDetail $dangerousGoodsDetail
 * @property RatePackageSpecialServicesRequestedPackageCODDetail $packageCODDetail
 * @property int $pieceCountVerificationBoxCount
 * @property RateBatteryClassificationDetail[] $batteryDetails
 * @property RateWeight_1_2 $dryIceWeight

 */
class RatePackageSpecialServicesRequested extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RatePackageSpecialServicesRequested';

    /**
     * Set specialServiceTypes
     *
     * 
     * Example: ["DANGEROUS_GOODS"]
     * @param string $specialServiceTypes
     * @return $this
     */
    public function setSpecialServiceTypes(array $specialServiceTypes)
    {
        $this->values['specialServiceTypes'] = $specialServiceTypes;
        return $this;
    }

    /**
     * Get specialServiceTypes
     *
     * @return string
     */
    public function getSpecialServiceTypes()
    {
        return $this->values['specialServiceTypes'];
    }

    /**
     * Set signatureOptionType
     *
     * simpleClass: RateSignatureOptionType
     * Example: ["NO_SIGNATURE_REQUIRED"]
     * @param string $signatureOptionType
     * @return $this
     */
    public function setSignatureOptionType($signatureOptionType)
    {
        $this->values['signatureOptionType'] = $signatureOptionType;
        return $this;
    }

    /**
     * Get signatureOptionType
     *
     * @return string
     */
    public function getSignatureOptionType()
    {
        return $this->values['signatureOptionType'];
    }

    /**
     * Set alcoholDetail
     *
     * 
     * Example: 
     * @param RateAlcoholDetail $alcoholDetail
     * @return $this
     */
    public function setAlcoholDetail(RateAlcoholDetail $alcoholDetail)
    {
        $this->values['alcoholDetail'] = $alcoholDetail;
        return $this;
    }

    /**
     * Get alcoholDetail
     *
     * @return RateAlcoholDetail
     */
    public function getAlcoholDetail()
    {
        return $this->values['alcoholDetail'];
    }

    /**
     * Set dangerousGoodsDetail
     *
     * 
     * Example: 
     * @param RateDangerousGoodsDetail $dangerousGoodsDetail
     * @return $this
     */
    public function setDangerousGoodsDetail(RateDangerousGoodsDetail $dangerousGoodsDetail)
    {
        $this->values['dangerousGoodsDetail'] = $dangerousGoodsDetail;
        return $this;
    }

    /**
     * Get dangerousGoodsDetail
     *
     * @return RateDangerousGoodsDetail
     */
    public function getDangerousGoodsDetail()
    {
        return $this->values['dangerousGoodsDetail'];
    }

    /**
     * Set packageCODDetail
     *
     * 
     * Example: 
     * @param RatePackageSpecialServicesRequestedPackageCODDetail $packageCODDetail
     * @return $this
     */
    public function setPackageCODDetail(RatePackageSpecialServicesRequestedPackageCODDetail $packageCODDetail)
    {
        $this->values['packageCODDetail'] = $packageCODDetail;
        return $this;
    }

    /**
     * Get packageCODDetail
     *
     * @return RatePackageSpecialServicesRequestedPackageCODDetail
     */
    public function getPackageCODDetail()
    {
        return $this->values['packageCODDetail'];
    }

    /**
     * Set pieceCountVerificationBoxCount
     *
     * 
     * Example: 
     * @param int $pieceCountVerificationBoxCount
     * @return $this
     */
    public function setPieceCountVerificationBoxCount($pieceCountVerificationBoxCount)
    {
        $this->values['pieceCountVerificationBoxCount'] = $pieceCountVerificationBoxCount;
        return $this;
    }

    /**
     * Get pieceCountVerificationBoxCount
     *
     * @return int
     */
    public function getPieceCountVerificationBoxCount()
    {
        return $this->values['pieceCountVerificationBoxCount'];
    }

    /**
     * Set batteryDetails
     *
     * 
     * Example: 
     * @param RateBatteryClassificationDetail[] $batteryDetails
     * @return $this
     */
    public function setBatteryDetails(array $batteryDetails)
    {
        $this->values['batteryDetails'] = $batteryDetails;
        return $this;
    }

    /**
     * Get batteryDetails
     *
     * @return RateBatteryClassificationDetail[]
     */
    public function getBatteryDetails()
    {
        return $this->values['batteryDetails'];
    }

    /**
     * Set dryIceWeight
     *
     * 
     * Example: 
     * @param RateWeight_1_2 $dryIceWeight
     * @return $this
     */
    public function setDryIceWeight(RateWeight_1_2 $dryIceWeight)
    {
        $this->values['dryIceWeight'] = $dryIceWeight;
        return $this;
    }

    /**
     * Get dryIceWeight
     *
     * @return RateWeight_1_2
     */
    public function getDryIceWeight()
    {
        return $this->values['dryIceWeight'];
    }
}
