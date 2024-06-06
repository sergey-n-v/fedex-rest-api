<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * These are special services that are available at the package level for some or all service types.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $specialServiceTypes
 * @property string $signatureOptionType
 * @property ShipPriorityAlertDetail $priorityAlertDetail
 * @property ShipSignatureOptionDetail $signatureOptionDetail
 * @property ShipAlcoholDetail $alcoholDetail
 * @property ShipDangerousGoodsDetail $dangerousGoodsDetail
 * @property ShipPackageCODDetail $packageCODDetail
 * @property int $pieceCountVerificationBoxCount
 * @property ShipBatteryDetail[] $batteryDetails
 * @property ShipWeight_3 $dryIceWeight

 */
class ShipPackageSpecialServicesRequested extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipPackageSpecialServicesRequested';

    /**
     * Set specialServiceTypes
     *
     * 
     * Example: ["ALCOHOL","NON_STANDARD_CONTAINER"]
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
     * simpleClass: ShipSignatureOptionType
     * Example: ADULT
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
     * Set priorityAlertDetail
     *
     * 
     * Example: 
     * @param ShipPriorityAlertDetail $priorityAlertDetail
     * @return $this
     */
    public function setPriorityAlertDetail(ShipPriorityAlertDetail $priorityAlertDetail)
    {
        $this->values['priorityAlertDetail'] = $priorityAlertDetail;
        return $this;
    }

    /**
     * Get priorityAlertDetail
     *
     * @return ShipPriorityAlertDetail
     */
    public function getPriorityAlertDetail()
    {
        return $this->values['priorityAlertDetail'];
    }

    /**
     * Set signatureOptionDetail
     *
     * 
     * Example: 
     * @param ShipSignatureOptionDetail $signatureOptionDetail
     * @return $this
     */
    public function setSignatureOptionDetail(ShipSignatureOptionDetail $signatureOptionDetail)
    {
        $this->values['signatureOptionDetail'] = $signatureOptionDetail;
        return $this;
    }

    /**
     * Get signatureOptionDetail
     *
     * @return ShipSignatureOptionDetail
     */
    public function getSignatureOptionDetail()
    {
        return $this->values['signatureOptionDetail'];
    }

    /**
     * Set alcoholDetail
     *
     * 
     * Example: 
     * @param ShipAlcoholDetail $alcoholDetail
     * @return $this
     */
    public function setAlcoholDetail(ShipAlcoholDetail $alcoholDetail)
    {
        $this->values['alcoholDetail'] = $alcoholDetail;
        return $this;
    }

    /**
     * Get alcoholDetail
     *
     * @return ShipAlcoholDetail
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
     * @param ShipDangerousGoodsDetail $dangerousGoodsDetail
     * @return $this
     */
    public function setDangerousGoodsDetail(ShipDangerousGoodsDetail $dangerousGoodsDetail)
    {
        $this->values['dangerousGoodsDetail'] = $dangerousGoodsDetail;
        return $this;
    }

    /**
     * Get dangerousGoodsDetail
     *
     * @return ShipDangerousGoodsDetail
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
     * @param ShipPackageCODDetail $packageCODDetail
     * @return $this
     */
    public function setPackageCODDetail(ShipPackageCODDetail $packageCODDetail)
    {
        $this->values['packageCODDetail'] = $packageCODDetail;
        return $this;
    }

    /**
     * Get packageCODDetail
     *
     * @return ShipPackageCODDetail
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
     * @param ShipBatteryDetail[] $batteryDetails
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
     * @return ShipBatteryDetail[]
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
     * @param ShipWeight_3 $dryIceWeight
     * @return $this
     */
    public function setDryIceWeight(ShipWeight_3 $dryIceWeight)
    {
        $this->values['dryIceWeight'] = $dryIceWeight;
        return $this;
    }

    /**
     * Get dryIceWeight
     *
     * @return ShipWeight_3
     */
    public function getDryIceWeight()
    {
        return $this->values['dryIceWeight'];
    }
}
