<?php
namespace FedExRestApi\AvailabilityService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * These are special services that are available at the package level for some or all service types.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $signatureOptionType
 * @property AvSignatureOptionDetail $signatureOptionDetail
 * @property AvAlcoholDetail $alcoholDetail
 * @property AvDangerousGoodsDetail $dangerousGoodsDetail
 * @property int $pieceCountVerificationBoxCount
 * @property AvBatteryDetail[] $batteryDetails
 * @property string $specialServiceTypes
 * @property AvPackageSpecialServicesRequestedCodDetail $codDetail
 * @property AvWeight $dryIceWeight

 */
class AvPackageSpecialServicesRequested extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvPackageSpecialServicesRequested';

    /**
     * Indicate the Signature Type.<br>Valid Values:<ul><li>ADULT - Adult signature required, at recipient address.</li><li>DIRECT - Signature required, at recipient address.</li><li>INDIRECT - Signature required, alternate address is accepted.(This option is available for residential deliveries only)</li><li>NO_SIGNATURE_REQUIRED - Signature is not required.</li><li>SERVICE_DEFAULT - Signature handled as per current Service Guide.</li></ul>
     *
     * simpleClass: AvSignatureOptionType
     * Example: NO_SIGNATURE_REQUIRED
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
     * Set signatureOptionDetail
     *
     *
     * Example:
     * @param AvSignatureOptionDetail $signatureOptionDetail
     * @return $this
     */
    public function setSignatureOptionDetail(AvSignatureOptionDetail $signatureOptionDetail)
    {
        $this->values['signatureOptionDetail'] = $signatureOptionDetail;
        return $this;
    }

    /**
     * Get signatureOptionDetail
     *
     * @return AvSignatureOptionDetail
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
     * @param AvAlcoholDetail $alcoholDetail
     * @return $this
     */
    public function setAlcoholDetail(AvAlcoholDetail $alcoholDetail)
    {
        $this->values['alcoholDetail'] = $alcoholDetail;
        return $this;
    }

    /**
     * Get alcoholDetail
     *
     * @return AvAlcoholDetail
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
     * @param AvDangerousGoodsDetail $dangerousGoodsDetail
     * @return $this
     */
    public function setDangerousGoodsDetail(AvDangerousGoodsDetail $dangerousGoodsDetail)
    {
        $this->values['dangerousGoodsDetail'] = $dangerousGoodsDetail;
        return $this;
    }

    /**
     * Get dangerousGoodsDetail
     *
     * @return AvDangerousGoodsDetail
     */
    public function getDangerousGoodsDetail()
    {
        return $this->values['dangerousGoodsDetail'];
    }

    /**
     * Provide the pieceCount or VerificationBoxCount for batteries or cells that are contained within this specific package.
     *
     *
     *
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
     * Indicates the battery details.
     *
     *
     * Example:
     * @param AvBatteryDetail[] $batteryDetails
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
     * @return AvBatteryDetail[]
     */
    public function getBatteryDetails()
    {
        return $this->values['batteryDetails'];
    }

    /**
     * Special services requested for the shipment.<br>Example: <ul><li>RETURN_SHIPMENT</li><li>BROKER_SELECT_OPTION</li><li>CALL_BEFORE_DELIVERY</li><li>COD</li><li>CUSTOM_DELIVERY_WINDOW</li></ul><a onclick='loadDocReference("shipmentlevelspecialservicetypes")'>Click here to see Shipment level Special Service Types</a>
     *
     *
     * Example: ["BATTERY","DANGEROUS_GOODS"]
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
     * @param AvCodDetail $codDetail
     * @return $this
     */
    public function setCodDetail($codDetail)
    {
        $this->values['codDetail'] = $codDetail;
        return $this;
    }

    /**
     * Get codDetail
     *
     * @return AvCodDetail
     */
    public function getCodDetail()
    {
        return $this->values['codDetail'];
    }

    /**
     * These are the weight details.
     *
     *
     * Example:
     * @param AvWeight $dryIceWeight
     * @return $this
     */
    public function setDryIceWeight($dryIceWeight)
    {
        $this->values['dryIceWeight'] = $dryIceWeight;
        return $this;
    }

    /**
     * Get dryIceWeight
     *
     * @return AvWeight
     */
    public function getDryIceWeight()
    {
        return $this->values['dryIceWeight'];
    }
}
