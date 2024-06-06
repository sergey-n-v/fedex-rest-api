<?php
namespace FedExRestApi\RateService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * This object is used to specify the Pending Shipment Type for Email label.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $pendingShipmentType
 * @property RatePendingShipmentProcessingOptionsRequested $processingOptions
 * @property RateRecommendedDocumentSpecification $recommendedDocumentSpecification
 * @property RateEmailLabelDetail $emailLabelDetail
 * @property RateUploadDocumentReferenceDetail[] $documentReferences
 * @property string $expirationTimeStamp
 * @property RateShipmentDryIceDetail $shipmentDryIceDetail

 */
class RatePendingShipmentDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RatePendingShipmentDetail';

    /**
     * Set pendingShipmentType
     *
     * simpleClass: RatePendingShipmentType
     * Example:
     * @param string $pendingShipmentType
     * @return $this
     */
    public function setPendingShipmentType($pendingShipmentType)
    {
        $this->values['pendingShipmentType'] = $pendingShipmentType;
        return $this;
    }

    /**
     * Get pendingShipmentType
     *
     * @return string
     */
    public function getPendingShipmentType()
    {
        return $this->values['pendingShipmentType'];
    }

    /**
     * Set processingOptions
     *
     *
     * Example:
     * @param RatePendingShipmentProcessingOptionsRequested $processingOptions
     * @return $this
     */
    public function setProcessingOptions(RatePendingShipmentProcessingOptionsRequested $processingOptions)
    {
        $this->values['processingOptions'] = $processingOptions;
        return $this;
    }

    /**
     * Get processingOptions
     *
     * @return RatePendingShipmentProcessingOptionsRequested
     */
    public function getProcessingOptions()
    {
        return $this->values['processingOptions'];
    }

    /**
     * Set recommendedDocumentSpecification
     *
     *
     * Example:
     * @param RateRecommendedDocumentSpecification $recommendedDocumentSpecification
     * @return $this
     */
    public function setRecommendedDocumentSpecification(RateRecommendedDocumentSpecification $recommendedDocumentSpecification)
    {
        $this->values['recommendedDocumentSpecification'] = $recommendedDocumentSpecification;
        return $this;
    }

    /**
     * Get recommendedDocumentSpecification
     *
     * @return RateRecommendedDocumentSpecification
     */
    public function getRecommendedDocumentSpecification()
    {
        return $this->values['recommendedDocumentSpecification'];
    }

    /**
     * Set emailLabelDetail
     *
     *
     * Example:
     * @param RateEmailLabelDetail $emailLabelDetail
     * @return $this
     */
    public function setEmailLabelDetail(RateEmailLabelDetail $emailLabelDetail)
    {
        $this->values['emailLabelDetail'] = $emailLabelDetail;
        return $this;
    }

    /**
     * Get emailLabelDetail
     *
     * @return RateEmailLabelDetail
     */
    public function getEmailLabelDetail()
    {
        return $this->values['emailLabelDetail'];
    }

    /**
     * Set documentReferences
     *
     *
     * Example:
     * @param RateUploadDocumentReferenceDetail[] $documentReferences
     * @return $this
     */
    public function setDocumentReferences(array $documentReferences)
    {
        $this->values['documentReferences'] = $documentReferences;
        return $this;
    }

    /**
     * Get documentReferences
     *
     * @return RateUploadDocumentReferenceDetail[]
     */
    public function getDocumentReferences()
    {
        return $this->values['documentReferences'];
    }

    /**
     * Set expirationTimeStamp
     *
     *
     * Example: 2012-12-31
     * @param string $expirationTimeStamp
     * @return $this
     */
    public function setExpirationTimeStamp($expirationTimeStamp)
    {
        $this->values['expirationTimeStamp'] = $expirationTimeStamp;
        return $this;
    }

    /**
     * Get expirationTimeStamp
     *
     * @return string
     */
    public function getExpirationTimeStamp()
    {
        return $this->values['expirationTimeStamp'];
    }

    /**
     * Set shipmentDryIceDetail
     *
     *
     * Example:
     * @param RateShipmentDryIceDetail $shipmentDryIceDetail
     * @return $this
     */
    public function setShipmentDryIceDetail(RateShipmentDryIceDetail $shipmentDryIceDetail)
    {
        $this->values['shipmentDryIceDetail'] = $shipmentDryIceDetail;
        return $this;
    }

    /**
     * Get shipmentDryIceDetail
     *
     * @return RateShipmentDryIceDetail
     */
    public function getShipmentDryIceDetail()
    {
        return $this->values['shipmentDryIceDetail'];
    }
}
