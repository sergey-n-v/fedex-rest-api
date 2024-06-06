<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The delivery commitment details
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $daysInTransit
 * @property string $guaranteedType
 * @property string $smartPostCommitTime
 * @property RateDateDetail $dateDetail
 * @property RateDelayDetail $delayDetails
 * @property boolean $saturdayDelivery
 * @property string $alternativeCommodityNames
 * @property RateTransitDays $transitDays
 * @property string $label
 * @property string $commitMessageDetails
 * @property string $commodityName

 */
class RateCommitDetail_1 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateCommitDetail_1';

    /**
     * Set daysInTransit
     *
     * simpleClass: RateDaysInTransit
     * Example: 
     * @param string $daysInTransit
     * @return $this
     */
    public function setDaysInTransit($daysInTransit)
    {
        $this->values['daysInTransit'] = $daysInTransit;
        return $this;
    }

    /**
     * Get daysInTransit
     *
     * @return string
     */
    public function getDaysInTransit()
    {
        return $this->values['daysInTransit'];
    }

    /**
     * Set guaranteedType
     *
     * simpleClass: RateGuaranteedType
     * Example: 
     * @param string $guaranteedType
     * @return $this
     */
    public function setGuaranteedType($guaranteedType)
    {
        $this->values['guaranteedType'] = $guaranteedType;
        return $this;
    }

    /**
     * Get guaranteedType
     *
     * @return string
     */
    public function getGuaranteedType()
    {
        return $this->values['guaranteedType'];
    }

    /**
     * Set smartPostCommitTime
     *
     * 
     * Example: commitTime
     * @param string $smartPostCommitTime
     * @return $this
     */
    public function setSmartPostCommitTime($smartPostCommitTime)
    {
        $this->values['smartPostCommitTime'] = $smartPostCommitTime;
        return $this;
    }

    /**
     * Get smartPostCommitTime
     *
     * @return string
     */
    public function getSmartPostCommitTime()
    {
        return $this->values['smartPostCommitTime'];
    }

    /**
     * Set dateDetail
     *
     * 
     * Example: 
     * @param RateDateDetail $dateDetail
     * @return $this
     */
    public function setDateDetail(RateDateDetail $dateDetail)
    {
        $this->values['dateDetail'] = $dateDetail;
        return $this;
    }

    /**
     * Get dateDetail
     *
     * @return RateDateDetail
     */
    public function getDateDetail()
    {
        return $this->values['dateDetail'];
    }

    /**
     * Set delayDetails
     *
     * 
     * Example: 
     * @param RateDelayDetail $delayDetails
     * @return $this
     */
    public function setDelayDetails(RateDelayDetail $delayDetails)
    {
        $this->values['delayDetails'] = $delayDetails;
        return $this;
    }

    /**
     * Get delayDetails
     *
     * @return RateDelayDetail
     */
    public function getDelayDetails()
    {
        return $this->values['delayDetails'];
    }

    /**
     * Set saturdayDelivery
     *
     * 
     * 
     * @param boolean $saturdayDelivery
     * @return $this
     */
    public function setSaturdayDelivery($saturdayDelivery)
    {
        $this->values['saturdayDelivery'] = $saturdayDelivery;
        return $this;
    }

    /**
     * Get saturdayDelivery
     *
     * @return boolean
     */
    public function getSaturdayDelivery()
    {
        return $this->values['saturdayDelivery'];
    }

    /**
     * Set alternativeCommodityNames
     *
     * 
     * Example: ["Commodity1","Commodity2"]
     * @param string $alternativeCommodityNames
     * @return $this
     */
    public function setAlternativeCommodityNames(array $alternativeCommodityNames)
    {
        $this->values['alternativeCommodityNames'] = $alternativeCommodityNames;
        return $this;
    }

    /**
     * Get alternativeCommodityNames
     *
     * @return string
     */
    public function getAlternativeCommodityNames()
    {
        return $this->values['alternativeCommodityNames'];
    }

    /**
     * Set transitDays
     *
     * 
     * Example: 
     * @param RateTransitDays $transitDays
     * @return $this
     */
    public function setTransitDays(RateTransitDays $transitDays)
    {
        $this->values['transitDays'] = $transitDays;
        return $this;
    }

    /**
     * Get transitDays
     *
     * @return RateTransitDays
     */
    public function getTransitDays()
    {
        return $this->values['transitDays'];
    }

    /**
     * Set label
     *
     * 
     * Example: Deliverydate unavailable
     * @param string $label
     * @return $this
     */
    public function setLabel($label)
    {
        $this->values['label'] = $label;
        return $this;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->values['label'];
    }

    /**
     * Set commitMessageDetails
     *
     * 
     * Example: Message
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
     * Set commodityName
     *
     * 
     * Example: DOCUMENTS
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
}
