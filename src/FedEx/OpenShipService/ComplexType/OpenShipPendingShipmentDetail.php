<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This object is used to specify the Pending Shipment Type for Email label.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $pendingShipmentType
 * @property OpenShipPendingShipmentProcessingOptionsRequested $processingOptions
 * @property OpenShipRecommendedDocumentSpecification $recommendedDocumentSpecification
 * @property OpenShipEmailLabelDetail $emailLabelDetail
 * @property OpenShipUploadDocumentReferenceDetail_1[] $attachedDocuments
 * @property string $expirationTimeStamp

 */
class OpenShipPendingShipmentDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipPendingShipmentDetail';

    /**
     * This is Pending Shipment Type. Must include the value 'EMAIL' for email return shipments.<br>Not applicable for other types of shipments.
     *
     * simpleClass: OpenShipPendingShipmentType
     * Example: EMAIL
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
     * @param OpenShipPendingShipmentProcessingOptionsRequested $processingOptions
     * @return $this
     */
    public function setProcessingOptions(OpenShipPendingShipmentProcessingOptionsRequested $processingOptions)
    {
        $this->values['processingOptions'] = $processingOptions;
        return $this;
    }

    /**
     * Get processingOptions
     *
     * @return OpenShipPendingShipmentProcessingOptionsRequested
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
     * @param OpenShipRecommendedDocumentSpecification $recommendedDocumentSpecification
     * @return $this
     */
    public function setRecommendedDocumentSpecification(OpenShipRecommendedDocumentSpecification $recommendedDocumentSpecification)
    {
        $this->values['recommendedDocumentSpecification'] = $recommendedDocumentSpecification;
        return $this;
    }

    /**
     * Get recommendedDocumentSpecification
     *
     * @return OpenShipRecommendedDocumentSpecification
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
     * @param OpenShipEmailLabelDetail $emailLabelDetail
     * @return $this
     */
    public function setEmailLabelDetail(OpenShipEmailLabelDetail $emailLabelDetail)
    {
        $this->values['emailLabelDetail'] = $emailLabelDetail;
        return $this;
    }

    /**
     * Get emailLabelDetail
     *
     * @return OpenShipEmailLabelDetail
     */
    public function getEmailLabelDetail()
    {
        return $this->values['emailLabelDetail'];
    }

    /**
     * These are the reference document details with the shipment.
     *
     * 
     * Example: 
     * @param OpenShipUploadDocumentReferenceDetail_1[] $attachedDocuments
     * @return $this
     */
    public function setAttachedDocuments(array $attachedDocuments)
    {
        $this->values['attachedDocuments'] = $attachedDocuments;
        return $this;
    }

    /**
     * Get attachedDocuments
     *
     * @return OpenShipUploadDocumentReferenceDetail_1[]
     */
    public function getAttachedDocuments()
    {
        return $this->values['attachedDocuments'];
    }

    /**
     * This is the Email Label expiration date. The maximum expiration date for an Email Return Label must be greater of equal to the day of the label request and not greater than 2 years in the future.<br>Example: 2020-01-01
     *
     * 
     * Example: 2020-01-01
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
}
