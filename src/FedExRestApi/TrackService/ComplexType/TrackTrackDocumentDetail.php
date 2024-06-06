<?php
namespace FedExRestApi\TrackService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Specifies the tracking document details.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $documentType
 * @property string $documentFormat

 */
class TrackTrackDocumentDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackTrackDocumentDetail';

    /**
     * Set documentType
     *
     *
     * Example: SIGNATURE_PROOF_OF_DELIVERY
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
     * Set documentFormat
     *
     *
     * Example: PNG
     * @param string $documentFormat
     * @return $this
     */
    public function setDocumentFormat($documentFormat)
    {
        $this->values['documentFormat'] = $documentFormat;
        return $this;
    }

    /**
     * Get documentFormat
     *
     * @return string
     */
    public function getDocumentFormat()
    {
        return $this->values['documentFormat'];
    }
}
