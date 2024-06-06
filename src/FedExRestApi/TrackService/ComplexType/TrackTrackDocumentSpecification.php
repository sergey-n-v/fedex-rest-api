<?php
namespace FedExRestApi\TrackService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * TrackTrackDocumentSpecification
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property TrackTrackingNumberInfo $trackingNumberInfo
 * @property string $shipDateBegin
 * @property string $shipDateEnd
 * @property string $accountNumber

 */
class TrackTrackDocumentSpecification extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackTrackDocumentSpecification';

    /**
     * Set trackingNumberInfo
     *
     *
     * Example:
     * @param TrackTrackingNumberInfo $trackingNumberInfo
     * @return $this
     */
    public function setTrackingNumberInfo(TrackTrackingNumberInfo $trackingNumberInfo)
    {
        $this->values['trackingNumberInfo'] = $trackingNumberInfo;
        return $this;
    }

    /**
     * Get trackingNumberInfo
     *
     * @return TrackTrackingNumberInfo
     */
    public function getTrackingNumberInfo()
    {
        return $this->values['trackingNumberInfo'];
    }

    /**
     * Set shipDateBegin
     *
     *
     * Example: 2020-03-29
     * @param string $shipDateBegin
     * @return $this
     */
    public function setShipDateBegin($shipDateBegin)
    {
        $this->values['shipDateBegin'] = $shipDateBegin;
        return $this;
    }

    /**
     * Get shipDateBegin
     *
     * @return string
     */
    public function getShipDateBegin()
    {
        return $this->values['shipDateBegin'];
    }

    /**
     * Set shipDateEnd
     *
     *
     * Example: 2020-04-01
     * @param string $shipDateEnd
     * @return $this
     */
    public function setShipDateEnd($shipDateEnd)
    {
        $this->values['shipDateEnd'] = $shipDateEnd;
        return $this;
    }

    /**
     * Get shipDateEnd
     *
     * @return string
     */
    public function getShipDateEnd()
    {
        return $this->values['shipDateEnd'];
    }

    /**
     * Set accountNumber
     *
     *
     * Example: XXX61073
     * @param string $accountNumber
     * @return $this
     */
    public function setAccountNumber($accountNumber)
    {
        $this->values['accountNumber'] = $accountNumber;
        return $this;
    }

    /**
     * Get accountNumber
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->values['accountNumber'];
    }
}
