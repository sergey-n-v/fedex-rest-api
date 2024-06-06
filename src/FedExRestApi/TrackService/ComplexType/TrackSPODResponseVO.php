<?php
namespace FedExRestApi\TrackService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * TrackSPODResponseVO
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property TrackLocalization $localization
 * @property string $documentType
 * @property string $documentFormat
 * @property string $document
 * @property TrackAlert[] $alerts

 */
class TrackSPODResponseVO extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackSPODResponseVO';

    /**
     * Set localization
     *
     *
     * Example:
     * @param TrackLocalization $localization
     * @return $this
     */
    public function setLocalization(TrackLocalization $localization)
    {
        $this->values['localization'] = $localization;
        return $this;
    }

    /**
     * Get localization
     *
     * @return TrackLocalization
     */
    public function getLocalization()
    {
        return $this->values['localization'];
    }

    /**
     * Set documentType
     *
     *
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

    /**
     * Set document
     *
     *
     * Example:
     * @param string $document
     * @return $this
     */
    public function setDocument(array $document)
    {
        $this->values['document'] = $document;
        return $this;
    }

    /**
     * Get document
     *
     * @return string
     */
    public function getDocument()
    {
        return $this->values['document'];
    }

    /**
     * Set alerts
     *
     *
     * Example: TRACKING.DATA.NOTFOUND -  Tracking data unavailable
     * @param TrackAlert[] $alerts
     * @return $this
     */
    public function setAlerts(array $alerts)
    {
        $this->values['alerts'] = $alerts;
        return $this;
    }

    /**
     * Get alerts
     *
     * @return TrackAlert[]
     */
    public function getAlerts()
    {
        return $this->values['alerts'];
    }
}
