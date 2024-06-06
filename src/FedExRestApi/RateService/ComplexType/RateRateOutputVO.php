<?php
namespace FedExRestApi\RateService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * This is the response object for a rate quote request.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property RateRateReplyDetail[] $rateReplyDetails
 * @property string $quoteDate
 * @property boolean $encoded
 * @property RateAlert[] $alerts

 */
class RateRateOutputVO extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateRateOutputVO';

    /**
     * Set rateReplyDetails
     *
     *
     * Example:
     * @param RateRateReplyDetail[] $rateReplyDetails
     * @return $this
     */
    public function setRateReplyDetails(array $rateReplyDetails)
    {
        $this->values['rateReplyDetails'] = $rateReplyDetails;
        return $this;
    }

    /**
     * Get rateReplyDetails
     *
     * @return RateRateReplyDetail[]
     */
    public function getRateReplyDetails()
    {
        return $this->values['rateReplyDetails'];
    }

    /**
     * Set quoteDate
     *
     *
     * Example: 2019-12-18
     * @param string $quoteDate
     * @return $this
     */
    public function setQuoteDate($quoteDate)
    {
        $this->values['quoteDate'] = $quoteDate;
        return $this;
    }

    /**
     * Get quoteDate
     *
     * @return string
     */
    public function getQuoteDate()
    {
        return $this->values['quoteDate'];
    }

    /**
     * Set encoded
     *
     *
     *
     * @param boolean $encoded
     * @return $this
     */
    public function setEncoded($encoded)
    {
        $this->values['encoded'] = $encoded;
        return $this;
    }

    /**
     * Get encoded
     *
     * @return boolean
     */
    public function getEncoded()
    {
        return $this->values['encoded'];
    }

    /**
     * Set alerts
     *
     *
     * Example:
     * @param RateAlert[] $alerts
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
     * @return RateAlert[]
     */
    public function getAlerts()
    {
        return $this->values['alerts'];
    }
}
