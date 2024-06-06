<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Upload document details provided by the initator of the shipment.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $documentType
 * @property string $customerReference
 * @property string $description
 * @property string $documentId

 */
class RateUploadDocumentReferenceDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateUploadDocumentReferenceDetail';

    /**
     * Set documentType
     *
     * simpleClass: RateDocumentType
     * Example: 
     * @param string $documentType
     * @return $this
     */
    public function setDocumentType($documentType)
    {
        $this->values['documentType'] = $documentType;
        return $this;
    }

    /**
     * Get documentType
     *
     * @return string
     */
    public function getDocumentType()
    {
        return $this->values['documentType'];
    }

    /**
     * Set customerReference
     *
     * 
     * Example: 
     * @param string $customerReference
     * @return $this
     */
    public function setCustomerReference($customerReference)
    {
        $this->values['customerReference'] = $customerReference;
        return $this;
    }

    /**
     * Get customerReference
     *
     * @return string
     */
    public function getCustomerReference()
    {
        return $this->values['customerReference'];
    }

    /**
     * Set description
     *
     * 
     * Example: ShippingDocumentSpecification
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->values['description'] = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->values['description'];
    }

    /**
     * Set documentId
     *
     * 
     * Example: 98123
     * @param string $documentId
     * @return $this
     */
    public function setDocumentId($documentId)
    {
        $this->values['documentId'] = $documentId;
        return $this;
    }

    /**
     * Get documentId
     *
     * @return string
     */
    public function getDocumentId()
    {
        return $this->values['documentId'];
    }
}
