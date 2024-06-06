<?php
namespace FedEx\AvailabilityService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The delivery commitment details.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $brokerCommitTimestamp
 * @property string $cutOffTime
 * @property string $commodityName
 * @property AvCommitDetail_transitDays $transitDays
 * @property string $commitMessageDetails
 * @property AvCleansedAddressandLocationDetail $derivedDestinationDetail
 * @property AvCommitDetail_dateDetail $dateDetail

 */
class AvCommitDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvCommitDetail';

    /**
     * The delivery commitment date/time the shipment will arrive at the border. <br>format [YYYY-MM-DDTHH:MM:SS:00Z]
     *
     * 
     * Example: 2020-03-05T00:00:00-06:00
     * @param string $brokerCommitTimestamp
     * @return $this
     */
    public function setBrokerCommitTimestamp($brokerCommitTimestamp)
    {
        $this->values['brokerCommitTimestamp'] = $brokerCommitTimestamp;
        return $this;
    }

    /**
     * Get brokerCommitTimestamp
     *
     * @return string
     */
    public function getBrokerCommitTimestamp()
    {
        return $this->values['brokerCommitTimestamp'];
    }

    /**
     * Identifies the latest allowed ready time for the pickup option. The time is local to the pickup postal code. It includes a TZD (time zone designator) for FedEx Freight requests.<br> Format:  HH:MM:SS <br> Example: 18:30:00
     *
     * 
     * Example: 18:30:00
     * @param string $cutOffTime
     * @return $this
     */
    public function setCutOffTime($cutOffTime)
    {
        $this->values['cutOffTime'] = $cutOffTime;
        return $this;
    }

    /**
     * Get cutOffTime
     *
     * @return string
     */
    public function getCutOffTime()
    {
        return $this->values['cutOffTime'];
    }

    /**
     * The Commodity applicable to this commitment.
     *
     * 
     * Example: copper
     * @param string $commodityName
     * @return $this
     */
    public function setCommodityName($commodityName)
    {
        $this->values['commodityName'] = $commodityName;
        return $this;
    }

    /**
     * Get commodityName
     *
     * @return string
     */
    public function getCommodityName()
    {
        return $this->values['commodityName'];
    }

    /**
     * Set transitDays
     *
     * 
     * Example: 
     * @param AvCommitDetail_transitDays $transitDays
     * @return $this
     */
    public function setTransitDays(AvCommitDetail_transitDays $transitDays)
    {
        $this->values['transitDays'] = $transitDays;
        return $this;
    }

    /**
     * Get transitDays
     *
     * @return AvCommitDetail_transitDays
     */
    public function getTransitDays()
    {
        return $this->values['transitDays'];
    }

    /**
     * This is a message concerning the ability to provide an accurate delivery commitment on an International commit quote. These could be messages providing information about why a commitment could not be returned or a successful message such as 'REQUEST COMPLETED'
     *
     * 
     * Example: 
     * @param string $commitMessageDetails
     * @return $this
     */
    public function setCommitMessageDetails($commitMessageDetails)
    {
        $this->values['commitMessageDetails'] = $commitMessageDetails;
        return $this;
    }

    /**
     * Get commitMessageDetails
     *
     * @return string
     */
    public function getCommitMessageDetails()
    {
        return $this->values['commitMessageDetails'];
    }

    /**
     * FedEx internal destination address/location details.
     *
     * 
     * Example: 
     * @param AvCleansedAddressandLocationDetail $derivedDestinationDetail
     * @return $this
     */
    public function setDerivedDestinationDetail($derivedDestinationDetail)
    {
        $this->values['derivedDestinationDetail'] = $derivedDestinationDetail;
        return $this;
    }

    /**
     * Get derivedDestinationDetail
     *
     * @return AvCleansedAddressandLocationDetail
     */
    public function getDerivedDestinationDetail()
    {
        return $this->values['derivedDestinationDetail'];
    }

    /**
     * Set dateDetail
     *
     * 
     * Example: 
     * @param AvCommitDetail_dateDetail $dateDetail
     * @return $this
     */
    public function setDateDetail(AvCommitDetail_dateDetail $dateDetail)
    {
        $this->values['dateDetail'] = $dateDetail;
        return $this;
    }

    /**
     * Get dateDetail
     *
     * @return AvCommitDetail_dateDetail
     */
    public function getDateDetail()
    {
        return $this->values['dateDetail'];
    }
}
