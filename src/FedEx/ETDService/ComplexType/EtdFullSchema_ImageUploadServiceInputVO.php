<?php
namespace FedEx\ETDService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The request elements to upload image files.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $attachment
 * @property EtdDocument $document

 */
class EtdFullSchema_ImageUploadServiceInputVO extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'EtdFullSchema_ImageUploadServiceInputVO';

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
     * @param EtdDocument $document
     * @return $this
     */
    public function setDocument(EtdDocument $document)
    {
        $this->values['document'] = $document;
        return $this;
    }

    /**
     * Get document
     *
     * @return EtdDocument
     */
    public function getDocument()
    {
        return $this->values['document'];
    }
}
