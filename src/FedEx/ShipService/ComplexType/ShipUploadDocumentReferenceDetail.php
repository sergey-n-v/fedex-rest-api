<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

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
class ShipUploadDocumentReferenceDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipUploadDocumentReferenceDetail';

    /**
     * Set documentType
     *
     * simpleClass: ShipDocumentType
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
     * Set documentReference
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
     * Set description
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
     * Set documentId
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
