<?php
namespace FedExRestApi\ETDService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * This is the response indicating upload reference details.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $documentType
 * @property string $docId
 * @property string $folderId

 */
class EtdDocumentMetaOutput extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'EtdDocumentMetaOutput';

    /**
     * Set documentType
     *
     *
     * Example: CO
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
     * Set docId
     *
     *
     * Example: 090493e181586308
     * @param string $docId
     * @return $this
     */
    public function setDocId($docId)
    {
        $this->values['docId'] = $docId;
        return $this;
    }

    /**
     * Get docId
     *
     * @return string
     */
    public function getDocId()
    {
        return $this->values['docId'];
    }

    /**
     * Set folderId
     *
     *
     * Example: ["0b0493e1812f8921"]
     * @param string $folderId
     * @return $this
     */
    public function setFolderId(array $folderId)
    {
        $this->values['folderId'] = $folderId;
        return $this;
    }

    /**
     * Get folderId
     *
     * @return string
     */
    public function getFolderId()
    {
        return $this->values['folderId'];
    }
}
