<?php
namespace FedExRestApi\ETDService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * EtdImageMetaOutputVO
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property EtdImageMetaOutputVO_meta $meta
 * @property string $status
 * @property string $documentReferenceId

 */
class EtdImageMetaOutputVO extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'EtdImageMetaOutputVO';

    /**
     * Set meta
     *
     *
     * Example:
     * @param EtdImageMetaOutputVO_meta $meta
     * @return $this
     */
    public function setMeta(EtdImageMetaOutputVO_meta $meta)
    {
        $this->values['meta'] = $meta;
        return $this;
    }

    /**
     * Get meta
     *
     * @return EtdImageMetaOutputVO_meta
     */
    public function getMeta()
    {
        return $this->values['meta'];
    }

    /**
     * Set status
     *
     *
     * Example: SUCCESS
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->values['status'] = $status;
        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->values['status'];
    }

    /**
     * Set documentReferenceId
     *
     *
     * Example: 1234
     * @param string $documentReferenceId
     * @return $this
     */
    public function setDocumentReferenceId($documentReferenceId)
    {
        $this->values['documentReferenceId'] = $documentReferenceId;
        return $this;
    }

    /**
     * Get documentReferenceId
     *
     * @return string
     */
    public function getDocumentReferenceId()
    {
        return $this->values['documentReferenceId'];
    }
}
