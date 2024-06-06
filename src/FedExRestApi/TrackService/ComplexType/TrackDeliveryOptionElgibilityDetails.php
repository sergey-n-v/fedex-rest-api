<?php
namespace FedExRestApi\TrackService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Specifies details of delivery options and its eligibility type
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $option
 * @property string $eligibility

 */
class TrackDeliveryOptionElgibilityDetails extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackDeliveryOptionElgibilityDetails';

    /**
     * Set option
     *
     * simpleClass: TrackOption
     * Example: INDIRECT_SIGNATURE_RELEASE
     * @param string $option
     * @return $this
     */
    public function setOption($option)
    {
        $this->values['option'] = $option;
        return $this;
    }

    /**
     * Get option
     *
     * @return string
     */
    public function getOption()
    {
        return $this->values['option'];
    }

    /**
     * Set eligibility
     *
     *
     * Example: INELIGIBLE
     * @param string $eligibility
     * @return $this
     */
    public function setEligibility($eligibility)
    {
        $this->values['eligibility'] = $eligibility;
        return $this;
    }

    /**
     * Get eligibility
     *
     * @return string
     */
    public function getEligibility()
    {
        return $this->values['eligibility'];
    }
}
