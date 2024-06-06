<?php
namespace FedExRestApi\ETDService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * The request elements to upload documents.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $attachment
 * @property EtdETDUploadRequest $document

 */
class EtdFullSchema_DocumentUploadInputVO extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'EtdFullSchema_DocumentUploadInputVO';

    /**
     * Set attachment
     *
     *
     * Example:
     * @param string $attachment
     * @return $this
     */
    public function setAttachment($attachment)
    {
        $this->values['attachment'] = $attachment;
        return $this;
    }

    /**
     * Get attachment
     *
     * @return string
     */
    public function getAttachment()
    {
        return $this->values['attachment'];
    }

    /**
     * Set document
     *
     *
     * Example:
     * @param EtdETDUploadRequest $document
     * @return $this
     */
    public function setDocument(EtdETDUploadRequest $document)
    {
        $this->values['document'] = $document;
        return $this;
    }

    /**
     * Get document
     *
     * @return EtdETDUploadRequest
     */
    public function getDocument()
    {
        return $this->values['document'];
    }
}
