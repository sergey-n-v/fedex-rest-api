<?php
namespace FedExRestApi\TrackService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * TrackFull_Schema_SPOD
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property TrackTrackDocumentDetail $trackDocumentDetail
 * @property TrackTrackDocumentSpecification[] $trackDocumentSpecification

 */
class TrackFull_Schema_SPOD extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackFull_Schema_SPOD';

    /**
     * Set trackDocumentDetail
     *
     *
     * Example:
     * @param TrackTrackDocumentDetail $trackDocumentDetail
     * @return $this
     */
    public function setTrackDocumentDetail(TrackTrackDocumentDetail $trackDocumentDetail)
    {
        $this->values['trackDocumentDetail'] = $trackDocumentDetail;
        return $this;
    }

    /**
     * Get trackDocumentDetail
     *
     * @return TrackTrackDocumentDetail
     */
    public function getTrackDocumentDetail()
    {
        return $this->values['trackDocumentDetail'];
    }

    /**
     * Set trackDocumentSpecification
     *
     *
     * Example:
     * @param TrackTrackDocumentSpecification[] $trackDocumentSpecification
     * @return $this
     */
    public function setTrackDocumentSpecification(array $trackDocumentSpecification)
    {
        $this->values['trackDocumentSpecification'] = $trackDocumentSpecification;
        return $this;
    }

    /**
     * Get trackDocumentSpecification
     *
     * @return TrackTrackDocumentSpecification[]
     */
    public function getTrackDocumentSpecification()
    {
        return $this->values['trackDocumentSpecification'];
    }
}
