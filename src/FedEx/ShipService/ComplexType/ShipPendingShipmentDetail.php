<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This object is used to specify the Pending Shipment Type for Email label.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $pendingShipmentType
 * @property ShipPendingShipmentProcessingOptionsRequested $processingOptions
 * @property ShipRecommendedDocumentSpecification $recommendedDocumentSpecification
 * @property ShipEmailLabelDetail $emailLabelDetail
 * @property ShipUploadDocumentReferenceDetail_1[] $attachedDocuments
 * @property string $expirationTimeStamp

 */
class ShipPendingShipmentDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipPendingShipmentDetail';

    /**
     * Set pendingShipmentType
     *
     * simpleClass: ShipPendingShipmentType
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
     * @param ShipPendingShipmentProcessingOptionsRequested $processingOptions
     * @return $this
     */
    public function setProcessingOptions(ShipPendingShipmentProcessingOptionsRequested $processingOptions)
    {
        $this->values['processingOptions'] = $processingOptions;
        return $this;
    }

    /**
     * Get processingOptions
     *
     * @return ShipPendingShipmentProcessingOptionsRequested
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
     * @param ShipRecommendedDocumentSpecification $recommendedDocumentSpecification
     * @return $this
     */
    public function setRecommendedDocumentSpecification(ShipRecommendedDocumentSpecification $recommendedDocumentSpecification)
    {
        $this->values['recommendedDocumentSpecification'] = $recommendedDocumentSpecification;
        return $this;
    }

    /**
     * Get recommendedDocumentSpecification
     *
     * @return ShipRecommendedDocumentSpecification
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
     * @param ShipEmailLabelDetail $emailLabelDetail
     * @return $this
     */
    public function setEmailLabelDetail(ShipEmailLabelDetail $emailLabelDetail)
    {
        $this->values['emailLabelDetail'] = $emailLabelDetail;
        return $this;
    }

    /**
     * Get emailLabelDetail
     *
     * @return ShipEmailLabelDetail
     */
    public function getEmailLabelDetail()
    {
        return $this->values['emailLabelDetail'];
    }

    /**
     * Set attachedDocuments
     *
     * 
     * Example: 
     * @param ShipUploadDocumentReferenceDetail_1[] $attachedDocuments
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
     * @return ShipUploadDocumentReferenceDetail_1[]
     */
    public function getAttachedDocuments()
    {
        return $this->values['attachedDocuments'];
    }

    /**
     * Set expirationTimeStamp
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
