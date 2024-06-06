<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Specify the document upload reference details.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $documentType
 * @property string $documentReference
 * @property string $description
 * @property string $documentId

 */
class OpenShipUploadDocumentReferenceDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipUploadDocumentReferenceDetail';

    /**
     * Specify document type for the uploaded document. It should match with the type of uploaded document associated with documentId.
     *
     * simpleClass: OpenShipDocumentType
     * Example: PRO_FORMA_INVOICE
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
     * Specify the reference for the uploaded document.This is for the customer to reference their uploaded docs when they retrieve them. Could be anything, order number, po number, whatever the customer used to tie the document to something they would use.<br>Note: Ensure to supply document references in case of  Pre-Shipment document upload.</br><br>Example: Reference
     *
     *
     * Example: DocumentReference
     * @param string $documentReference
     * @return $this
     */
    public function setDocumentReference($documentReference)
    {
        $this->values['documentReference'] = $documentReference;
        return $this;
    }

    /**
     * Get documentReference
     *
     * @return string
     */
    public function getDocumentReference()
    {
        return $this->values['documentReference'];
    }

    /**
     * Specify additional information about the uploaded document for better understanding.<br>Example: Certificate of Origin is uploaded for country of manufacturing verification.
     *
     *
     * Example: PRO FORMA INVOICE
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
     * This is the uploaded document ID value.<br>Example: 090927d680038c61
     *
     *
     * Example: 090927d680038c61
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
