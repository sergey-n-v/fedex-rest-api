<?php
namespace FedEx\ETDService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This is the output received for a document upload request.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property EtdDocumentMetaOutput $meta

 */
class EtdDocumentUploadServiceOutputVO extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'EtdDocumentUploadServiceOutputVO';

    /**
     * Set meta
     *
     * 
     * Example: 
     * @param EtdDocumentMetaOutput $meta
     * @return $this
     */
    public function setMeta(EtdDocumentMetaOutput $meta)
    {
        $this->values['meta'] = $meta;
        return $this;
    }

    /**
     * Get meta
     *
     * @return EtdDocumentMetaOutput
     */
    public function getMeta()
    {
        return $this->values['meta'];
    }
}
