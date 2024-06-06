<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies details about the status of the track information for the shipment being tracked.  AncilliaryDetails may also be available which describe the cause of exception along with any action that needs to taken by customer.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property TrackAddressVO1 $scanLocation
 * @property string $code
 * @property string $derivedCode
 * @property TrackStatusAncillaryDetail[] $ancillaryDetails
 * @property string $statusByLocale
 * @property string $description
 * @property TrackDelayDetail $delayDetail

 */
class TrackStatusDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackStatusDetail';

    /**
     * Set scanLocation
     *
     * 
     * Example: 
     * @param TrackAddressVO1 $scanLocation
     * @return $this
     */
    public function setScanLocation(TrackAddressVO1 $scanLocation)
    {
        $this->values['scanLocation'] = $scanLocation;
        return $this;
    }

    /**
     * Get scanLocation
     *
     * @return TrackAddressVO1
     */
    public function getScanLocation()
    {
        return $this->values['scanLocation'];
    }

    /**
     * Set code
     *
     * 
     * Example: PU
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->values['code'] = $code;
        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->values['code'];
    }

    /**
     * Set derivedCode
     *
     * 
     * Example: PU
     * @param string $derivedCode
     * @return $this
     */
    public function setDerivedCode($derivedCode)
    {
        $this->values['derivedCode'] = $derivedCode;
        return $this;
    }

    /**
     * Get derivedCode
     *
     * @return string
     */
    public function getDerivedCode()
    {
        return $this->values['derivedCode'];
    }

    /**
     * Set ancillaryDetails
     *
     * 
     * Example: 
     * @param TrackStatusAncillaryDetail[] $ancillaryDetails
     * @return $this
     */
    public function setAncillaryDetails(array $ancillaryDetails)
    {
        $this->values['ancillaryDetails'] = $ancillaryDetails;
        return $this;
    }

    /**
     * Get ancillaryDetails
     *
     * @return TrackStatusAncillaryDetail[]
     */
    public function getAncillaryDetails()
    {
        return $this->values['ancillaryDetails'];
    }

    /**
     * Set statusByLocale
     *
     * 
     * Example: Picked up
     * @param string $statusByLocale
     * @return $this
     */
    public function setStatusByLocale($statusByLocale)
    {
        $this->values['statusByLocale'] = $statusByLocale;
        return $this;
    }

    /**
     * Get statusByLocale
     *
     * @return string
     */
    public function getStatusByLocale()
    {
        return $this->values['statusByLocale'];
    }

    /**
     * Set description
     *
     * 
     * Example: Picked up
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->values['description'] = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->values['description'];
    }

    /**
     * Set delayDetail
     *
     * 
     * Example: 
     * @param TrackDelayDetail $delayDetail
     * @return $this
     */
    public function setDelayDetail(TrackDelayDetail $delayDetail)
    {
        $this->values['delayDetail'] = $delayDetail;
        return $this;
    }

    /**
     * Get delayDetail
     *
     * @return TrackDelayDetail
     */
    public function getDelayDetail()
    {
        return $this->values['delayDetail'];
    }
}
