<?php
namespace FedExRestApi\TrackService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Specify types of special handlings that are applied to this package.<br><a onclick='loadDocReference("fedexexpressspecialhandlingcodes")'>Click here to see FedEx Express Special Handling Codes.</a>
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $description
 * @property string $type
 * @property string $paymentType

 */
class TrackTrackSpecialHandling extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackTrackSpecialHandling';

    /**
     * Set description
     *
     *
     * Example: Deliver Weekday
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
     * Set type
     *
     *
     * Example: DELIVER_WEEKDAY
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['type'] = $type;
        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->values['type'];
    }

    /**
     * Set paymentType
     *
     *
     * Example: OTHER
     * @param string $paymentType
     * @return $this
     */
    public function setPaymentType($paymentType)
    {
        $this->values['paymentType'] = $paymentType;
        return $this;
    }

    /**
     * Get paymentType
     *
     * @return string
     */
    public function getPaymentType()
    {
        return $this->values['paymentType'];
    }
}
