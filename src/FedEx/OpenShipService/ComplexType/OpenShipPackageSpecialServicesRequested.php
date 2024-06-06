<?php
namespace FedEx\OpenShipService\ComplexType;

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
 * @property OpenShipPriorityAlertDetail $priorityAlertDetail
 * @property OpenShipSignatureOptionDetail $signatureOptionDetail
 * @property OpenShipAlcoholDetail $alcoholDetail
 * @property OpenShipDangerousGoodsDetail $dangerousGoodsDetail
 * @property OpenShipPackageCODDetail $packageCODDetail
 * @property int $pieceCountVerificationBoxCount
 * @property OpenShipBatteryDetail[] $batteryDetails
 * @property OpenShipWeight $dryIceWeight

 */
class OpenShipPackageSpecialServicesRequested extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipPackageSpecialServicesRequested';

    /**
     * Indicate the types of special services requested for the shipment.<br><a onclick='loadDocReference("packagelevelspecialservicetypes")'>click here to see Package Special Service Types</a>
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
     * Indicate the Signature Type. <br>Valid Values: <ul><li>ADULT - Adult signature required, at recipient address.</li><li>DIRECT - Signature required, at recipient address.</li><li>INDIRECT - Signature required, alternate address is accepted.This option is available for residential deliveries only</li><li>NO_SIGNATURE_REQUIRED - Signature is not required.</li><li>SERVICE_DEFAULT - Signature handled as per current Service Guide.</li></ul>
     *
     * simpleClass: OpenShipSignatureOptionType
     * Example: 
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
     * @param OpenShipPriorityAlertDetail $priorityAlertDetail
     * @return $this
     */
    public function setPriorityAlertDetail(OpenShipPriorityAlertDetail $priorityAlertDetail)
    {
        $this->values['priorityAlertDetail'] = $priorityAlertDetail;
        return $this;
    }

    /**
     * Get priorityAlertDetail
     *
     * @return OpenShipPriorityAlertDetail
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
     * @param OpenShipSignatureOptionDetail $signatureOptionDetail
     * @return $this
     */
    public function setSignatureOptionDetail(OpenShipSignatureOptionDetail $signatureOptionDetail)
    {
        $this->values['signatureOptionDetail'] = $signatureOptionDetail;
        return $this;
    }

    /**
     * Get signatureOptionDetail
     *
     * @return OpenShipSignatureOptionDetail
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
     * @param OpenShipAlcoholDetail $alcoholDetail
     * @return $this
     */
    public function setAlcoholDetail(OpenShipAlcoholDetail $alcoholDetail)
    {
        $this->values['alcoholDetail'] = $alcoholDetail;
        return $this;
    }

    /**
     * Get alcoholDetail
     *
     * @return OpenShipAlcoholDetail
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
     * @param OpenShipDangerousGoodsDetail $dangerousGoodsDetail
     * @return $this
     */
    public function setDangerousGoodsDetail(OpenShipDangerousGoodsDetail $dangerousGoodsDetail)
    {
        $this->values['dangerousGoodsDetail'] = $dangerousGoodsDetail;
        return $this;
    }

    /**
     * Get dangerousGoodsDetail
     *
     * @return OpenShipDangerousGoodsDetail
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
     * @param OpenShipPackageCODDetail $packageCODDetail
     * @return $this
     */
    public function setPackageCODDetail(OpenShipPackageCODDetail $packageCODDetail)
    {
        $this->values['packageCODDetail'] = $packageCODDetail;
        return $this;
    }

    /**
     * Get packageCODDetail
     *
     * @return OpenShipPackageCODDetail
     */
    public function getPackageCODDetail()
    {
        return $this->values['packageCODDetail'];
    }

    /**
     * Provide the pieceCount or VerificationBoxCount for batteries or cells that are contained within this specific package.
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
     * Provide details about the batteries or cells that are contained within this specific package.
     *
     * 
     * Example: 
     * @param OpenShipBatteryDetail[] $batteryDetails
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
     * @return OpenShipBatteryDetail[]
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
     * @param OpenShipWeight $dryIceWeight
     * @return $this
     */
    public function setDryIceWeight(OpenShipWeight $dryIceWeight)
    {
        $this->values['dryIceWeight'] = $dryIceWeight;
        return $this;
    }

    /**
     * Get dryIceWeight
     *
     * @return OpenShipWeight
     */
    public function getDryIceWeight()
    {
        return $this->values['dryIceWeight'];
    }
}
