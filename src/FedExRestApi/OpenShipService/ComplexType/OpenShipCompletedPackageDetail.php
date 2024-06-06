<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * OpenShipCompletedPackageDetail
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property int $sequenceNumber
 * @property OpenShipPackageOperationalDetail $operationalDetail
 * @property string $signatureOption
 * @property OpenShipTrackingId[] $trackingIds
 * @property int $groupNumber
 * @property string $oversizeClass
 * @property OpenShipPackageRating $packageRating
 * @property OpenShipWeight $dryIceWeight
 * @property OpenShipCompletedHazardousPackageDetail $hazardousPackageDetail

 */
class OpenShipCompletedPackageDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipCompletedPackageDetail';

    /**
     * This is package sequence number. No negative value or decimals are allowed.<br>Example: 256
     *
     *
     * Example: 256
     * @param int $sequenceNumber
     * @return $this
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->values['sequenceNumber'] = $sequenceNumber;
        return $this;
    }

    /**
     * Get sequenceNumber
     *
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->values['sequenceNumber'];
    }

    /**
     * Set operationalDetail
     *
     *
     * Example:
     * @param OpenShipPackageOperationalDetail $operationalDetail
     * @return $this
     */
    public function setOperationalDetail(OpenShipPackageOperationalDetail $operationalDetail)
    {
        $this->values['operationalDetail'] = $operationalDetail;
        return $this;
    }

    /**
     * Get operationalDetail
     *
     * @return OpenShipPackageOperationalDetail
     */
    public function getOperationalDetail()
    {
        return $this->values['operationalDetail'];
    }

    /**
     * It specifies the signature option applied, to allow cases in which the value requested conflicted with other service features in the shipment. <br>Example: DIRECT
     *
     *
     * Example: DIRECT
     * @param string $signatureOption
     * @return $this
     */
    public function setSignatureOption($signatureOption)
    {
        $this->values['signatureOption'] = $signatureOption;
        return $this;
    }

    /**
     * Get signatureOption
     *
     * @return string
     */
    public function getSignatureOption()
    {
        return $this->values['signatureOption'];
    }

    /**
     * Tracking details for the package.
     *
     *
     * Example:
     * @param OpenShipTrackingId[] $trackingIds
     * @return $this
     */
    public function setTrackingIds(array $trackingIds)
    {
        $this->values['trackingIds'] = $trackingIds;
        return $this;
    }

    /**
     * Get trackingIds
     *
     * @return OpenShipTrackingId[]
     */
    public function getTrackingIds()
    {
        return $this->values['trackingIds'];
    }

    /**
     * This is group shipment number. Used with request containing PACKAGE_GROUPS, to identify which group of identical packages was used to produce a reply item.<br>Example: 10
     *
     *
     * Example: 567
     * @param int $groupNumber
     * @return $this
     */
    public function setGroupNumber($groupNumber)
    {
        $this->values['groupNumber'] = $groupNumber;
        return $this;
    }

    /**
     * Get groupNumber
     *
     * @return int
     */
    public function getGroupNumber()
    {
        return $this->values['groupNumber'];
    }

    /**
     * Indicates the oversize classification.<br>Example: OVERSIZE_1
     *
     *
     * Example: OVERSIZE_1, OVERSIZE_2, OVERSIZE_3
     * @param string $oversizeClass
     * @return $this
     */
    public function setOversizeClass($oversizeClass)
    {
        $this->values['oversizeClass'] = $oversizeClass;
        return $this;
    }

    /**
     * Get oversizeClass
     *
     * @return string
     */
    public function getOversizeClass()
    {
        return $this->values['oversizeClass'];
    }

    /**
     * Set packageRating
     *
     *
     * Example:
     * @param OpenShipPackageRating $packageRating
     * @return $this
     */
    public function setPackageRating(OpenShipPackageRating $packageRating)
    {
        $this->values['packageRating'] = $packageRating;
        return $this;
    }

    /**
     * Get packageRating
     *
     * @return OpenShipPackageRating
     */
    public function getPackageRating()
    {
        return $this->values['packageRating'];
    }

    /**
     * Descriptive data required for a FedEx shipment containing dry ice. Includes weight and units. This element is required when SpecialServiceType DRY_ICE is present in the SpecialServiceTypes collection at the package level.
     *
     *
     * Example:
     * @param OpenShipWeight $dryIceWeight
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
     * @return OpenShipWeight
     */
    public function getDryIceWeight()
    {
        return $this->values['dryIceWeight'];
    }

    /**
     * Set hazardousPackageDetail
     *
     *
     * Example:
     * @param OpenShipCompletedHazardousPackageDetail $hazardousPackageDetail
     * @return $this
     */
    public function setHazardousPackageDetail(OpenShipCompletedHazardousPackageDetail $hazardousPackageDetail)
    {
        $this->values['hazardousPackageDetail'] = $hazardousPackageDetail;
        return $this;
    }

    /**
     * Get hazardousPackageDetail
     *
     * @return OpenShipCompletedHazardousPackageDetail
     */
    public function getHazardousPackageDetail()
    {
        return $this->values['hazardousPackageDetail'];
    }
}
