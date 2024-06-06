<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies return information related to a return shipment.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $authorizationName
 * @property TrackReasonDetail[] $reasonDetail

 */
class TrackReturnDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackReturnDetail';

    /**
     * Set authorizationName
     *
     * 
     * Example: Sammy Smith
     * @param string $authorizationName
     * @return $this
     */
    public function setAuthorizationName($authorizationName)
    {
        $this->values['authorizationName'] = $authorizationName;
        return $this;
    }

    /**
     * Get authorizationName
     *
     * @return string
     */
    public function getAuthorizationName()
    {
        return $this->values['authorizationName'];
    }

    /**
     * Set reasonDetail
     *
     * 
     * Example: 
     * @param TrackReasonDetail[] $reasonDetail
     * @return $this
     */
    public function setReasonDetail(array $reasonDetail)
    {
        $this->values['reasonDetail'] = $reasonDetail;
        return $this;
    }

    /**
     * Get reasonDetail
     *
     * @return TrackReasonDetail[]
     */
    public function getReasonDetail()
    {
        return $this->values['reasonDetail'];
    }
}
