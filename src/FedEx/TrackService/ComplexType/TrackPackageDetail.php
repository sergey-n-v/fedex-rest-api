<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Details of the packages in the shipment being tracked. Includes details like package type, weight, dimensions, declared value, etc.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $physicalPackagingType
 * @property string $sequenceNumber
 * @property string $undeliveredCount
 * @property TrackPackagingDescription $packagingDescription
 * @property string $count
 * @property TrackTrackingWeightAndDimensions $weightAndDimensions
 * @property string $packageContent
 * @property string $contentPieceCount
 * @property TrackAmount $declaredValue

 */
class TrackPackageDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackPackageDetail';

    /**
     * Set physicalPackagingType
     *
     * 
     * Example: BARREL
     * @param string $physicalPackagingType
     * @return $this
     */
    public function setPhysicalPackagingType($physicalPackagingType)
    {
        $this->values['physicalPackagingType'] = $physicalPackagingType;
        return $this;
    }

    /**
     * Get physicalPackagingType
     *
     * @return string
     */
    public function getPhysicalPackagingType()
    {
        return $this->values['physicalPackagingType'];
    }

    /**
     * Set sequenceNumber
     *
     * 
     * Example: 45
     * @param string $sequenceNumber
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
     * @return string
     */
    public function getSequenceNumber()
    {
        return $this->values['sequenceNumber'];
    }

    /**
     * Set undeliveredCount
     *
     * 
     * Example: 7
     * @param string $undeliveredCount
     * @return $this
     */
    public function setUndeliveredCount($undeliveredCount)
    {
        $this->values['undeliveredCount'] = $undeliveredCount;
        return $this;
    }

    /**
     * Get undeliveredCount
     *
     * @return string
     */
    public function getUndeliveredCount()
    {
        return $this->values['undeliveredCount'];
    }

    /**
     * Set packagingDescription
     *
     * 
     * Example: 
     * @param TrackPackagingDescription $packagingDescription
     * @return $this
     */
    public function setPackagingDescription(TrackPackagingDescription $packagingDescription)
    {
        $this->values['packagingDescription'] = $packagingDescription;
        return $this;
    }

    /**
     * Get packagingDescription
     *
     * @return TrackPackagingDescription
     */
    public function getPackagingDescription()
    {
        return $this->values['packagingDescription'];
    }

    /**
     * Set count
     *
     * 
     * Example: 1
     * @param string $count
     * @return $this
     */
    public function setCount($count)
    {
        $this->values['count'] = $count;
        return $this;
    }

    /**
     * Get count
     *
     * @return string
     */
    public function getCount()
    {
        return $this->values['count'];
    }

    /**
     * Set weightAndDimensions
     *
     * 
     * Example: 
     * @param TrackTrackingWeightAndDimensions $weightAndDimensions
     * @return $this
     */
    public function setWeightAndDimensions(TrackTrackingWeightAndDimensions $weightAndDimensions)
    {
        $this->values['weightAndDimensions'] = $weightAndDimensions;
        return $this;
    }

    /**
     * Get weightAndDimensions
     *
     * @return TrackTrackingWeightAndDimensions
     */
    public function getWeightAndDimensions()
    {
        return $this->values['weightAndDimensions'];
    }

    /**
     * Set packageContent
     *
     * 
     * Example: ["wire hangers","buttons"]
     * @param string $packageContent
     * @return $this
     */
    public function setPackageContent(array $packageContent)
    {
        $this->values['packageContent'] = $packageContent;
        return $this;
    }

    /**
     * Get packageContent
     *
     * @return string
     */
    public function getPackageContent()
    {
        return $this->values['packageContent'];
    }

    /**
     * Set contentPieceCount
     *
     * 
     * Example: 100
     * @param string $contentPieceCount
     * @return $this
     */
    public function setContentPieceCount($contentPieceCount)
    {
        $this->values['contentPieceCount'] = $contentPieceCount;
        return $this;
    }

    /**
     * Get contentPieceCount
     *
     * @return string
     */
    public function getContentPieceCount()
    {
        return $this->values['contentPieceCount'];
    }

    /**
     * Set declaredValue
     *
     * 
     * Example: 
     * @param TrackAmount $declaredValue
     * @return $this
     */
    public function setDeclaredValue(TrackAmount $declaredValue)
    {
        $this->values['declaredValue'] = $declaredValue;
        return $this;
    }

    /**
     * Get declaredValue
     *
     * @return TrackAmount
     */
    public function getDeclaredValue()
    {
        return $this->values['declaredValue'];
    }
}
