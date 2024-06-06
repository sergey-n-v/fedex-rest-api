<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ShipCompletedPackageDetail
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property int $sequenceNumber
 * @property ShipPackageOperationalDetail $operationalDetail
 * @property string $signatureOption
 * @property ShipTrackingId[] $trackingIds
 * @property int $groupNumber
 * @property string $oversizeClass
 * @property ShipPackageRating $packageRating
 * @property ShipWeight $dryIceWeight
 * @property ShipCompletedHazardousPackageDetail $hazardousPackageDetail

 */
class ShipCompletedPackageDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipCompletedPackageDetail';

    /**
     * Set sequenceNumber
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
     * @param ShipPackageOperationalDetail $operationalDetail
     * @return $this
     */
    public function setOperationalDetail(ShipPackageOperationalDetail $operationalDetail)
    {
        $this->values['operationalDetail'] = $operationalDetail;
        return $this;
    }

    /**
     * Get operationalDetail
     *
     * @return ShipPackageOperationalDetail
     */
    public function getOperationalDetail()
    {
        return $this->values['operationalDetail'];
    }

    /**
     * Set signatureOption
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
     * Set trackingIds
     *
     * 
     * Example: 
     * @param ShipTrackingId[] $trackingIds
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
     * @return ShipTrackingId[]
     */
    public function getTrackingIds()
    {
        return $this->values['trackingIds'];
    }

    /**
     * Set groupNumber
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
     * Set oversizeClass
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
     * @param ShipPackageRating $packageRating
     * @return $this
     */
    public function setPackageRating(ShipPackageRating $packageRating)
    {
        $this->values['packageRating'] = $packageRating;
        return $this;
    }

    /**
     * Get packageRating
     *
     * @return ShipPackageRating
     */
    public function getPackageRating()
    {
        return $this->values['packageRating'];
    }

    /**
     * Set dryIceWeight
     *
     * 
     * Example: 
     * @param ShipWeight $dryIceWeight
     * @return $this
     */
    public function setDryIceWeight(ShipWeight $dryIceWeight)
    {
        $this->values['dryIceWeight'] = $dryIceWeight;
        return $this;
    }

    /**
     * Get dryIceWeight
     *
     * @return ShipWeight
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
     * @param ShipCompletedHazardousPackageDetail $hazardousPackageDetail
     * @return $this
     */
    public function setHazardousPackageDetail(ShipCompletedHazardousPackageDetail $hazardousPackageDetail)
    {
        $this->values['hazardousPackageDetail'] = $hazardousPackageDetail;
        return $this;
    }

    /**
     * Get hazardousPackageDetail
     *
     * @return ShipCompletedHazardousPackageDetail
     */
    public function getHazardousPackageDetail()
    {
        return $this->values['hazardousPackageDetail'];
    }
}
