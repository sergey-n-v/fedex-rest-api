<?php
namespace FedExRestApi\AvailabilityService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Optional.<br>These special services are available at the package level for some or all service types.  Indicated if rate data is being requested for the special services.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $specialServiceTypes
 * @property AvTransitTimeRequestedPackageLineItem_packageSpecialServices_codDetail $codDetail
 * @property AvTransitTimeRequestedPackageLineItem_packageSpecialServices_dryIceWeight $dryIceWeight
 * @property AvTransitTimeRequestedPackageLineItem_packageSpecialServices_dangerousGoodsDetail $dangerousGoodsDetail
 * @property AvTransitTimeRequestedPackageLineItem_packageSpecialServices_alcoholDetail $alcoholDetail
 * @property int $pieceCountVerificationBoxCount
 * @property AvTransitTimeRequestedPackageLineItem_packageSpecialServices_batteryDetails $batteryDetails

 */
class AvTransitTimeRequestedPackageLineItem_packageSpecialServices extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvTransitTimeRequestedPackageLineItem_packageSpecialServices';

    /**
     * Optional.<br>Specify special services requested for the package.<br>Example: ["DANGEROUS_GOODS"]<br>a onclick='loadDocReference("packagelevelspecialservicetypes")'>Click here to see Package Special Service Types</a>
     *
     *
     * Example: ["DANGEROUS_GOODS","COD"]
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
     * Set codDetail
     *
     *
     * Example:
     * @param AvTransitTimeRequestedPackageLineItem_packageSpecialServices_codDetail $codDetail
     * @return $this
     */
    public function setCodDetail(AvTransitTimeRequestedPackageLineItem_packageSpecialServices_codDetail $codDetail)
    {
        $this->values['codDetail'] = $codDetail;
        return $this;
    }

    /**
     * Get codDetail
     *
     * @return AvTransitTimeRequestedPackageLineItem_packageSpecialServices_codDetail
     */
    public function getCodDetail()
    {
        return $this->values['codDetail'];
    }

    /**
     * Set dryIceWeight
     *
     *
     * Example:
     * @param AvTransitTimeRequestedPackageLineItem_packageSpecialServices_dryIceWeight $dryIceWeight
     * @return $this
     */
    public function setDryIceWeight(AvTransitTimeRequestedPackageLineItem_packageSpecialServices_dryIceWeight $dryIceWeight)
    {
        $this->values['dryIceWeight'] = $dryIceWeight;
        return $this;
    }

    /**
     * Get dryIceWeight
     *
     * @return AvTransitTimeRequestedPackageLineItem_packageSpecialServices_dryIceWeight
     */
    public function getDryIceWeight()
    {
        return $this->values['dryIceWeight'];
    }

    /**
     * Set dangerousGoodsDetail
     *
     *
     * Example:
     * @param AvTransitTimeRequestedPackageLineItem_packageSpecialServices_dangerousGoodsDetail $dangerousGoodsDetail
     * @return $this
     */
    public function setDangerousGoodsDetail(AvTransitTimeRequestedPackageLineItem_packageSpecialServices_dangerousGoodsDetail $dangerousGoodsDetail)
    {
        $this->values['dangerousGoodsDetail'] = $dangerousGoodsDetail;
        return $this;
    }

    /**
     * Get dangerousGoodsDetail
     *
     * @return AvTransitTimeRequestedPackageLineItem_packageSpecialServices_dangerousGoodsDetail
     */
    public function getDangerousGoodsDetail()
    {
        return $this->values['dangerousGoodsDetail'];
    }

    /**
     * Set alcoholDetail
     *
     *
     * Example:
     * @param AvTransitTimeRequestedPackageLineItem_packageSpecialServices_alcoholDetail $alcoholDetail
     * @return $this
     */
    public function setAlcoholDetail(AvTransitTimeRequestedPackageLineItem_packageSpecialServices_alcoholDetail $alcoholDetail)
    {
        $this->values['alcoholDetail'] = $alcoholDetail;
        return $this;
    }

    /**
     * Get alcoholDetail
     *
     * @return AvTransitTimeRequestedPackageLineItem_packageSpecialServices_alcoholDetail
     */
    public function getAlcoholDetail()
    {
        return $this->values['alcoholDetail'];
    }

    /**
     * Indicates the box count used for piece count verification.
     *
     *
     * Example: 2
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
     * @param AvTransitTimeRequestedPackageLineItem_packageSpecialServices_batteryDetails $batteryDetails
     * @return $this
     */
    public function setBatteryDetails(AvTransitTimeRequestedPackageLineItem_packageSpecialServices_batteryDetails $batteryDetails)
    {
        $this->values['batteryDetails'] = $batteryDetails;
        return $this;
    }

    /**
     * Get batteryDetails
     *
     * @return AvTransitTimeRequestedPackageLineItem_packageSpecialServices_batteryDetails
     */
    public function getBatteryDetails()
    {
        return $this->values['batteryDetails'];
    }
}
