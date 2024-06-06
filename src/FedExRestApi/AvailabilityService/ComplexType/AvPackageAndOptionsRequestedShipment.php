<?php
namespace FedExRestApi\AvailabilityService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * AvPackageAndOptionsRequestedShipment
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property  $recipients

 */
class AvPackageAndOptionsRequestedShipment extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvPackageAndOptionsRequestedShipment';

    /**
     * These are recipient details, such as postal Code, state or  province code, and country code of the recipient. Note: At least one recipient is required.
     *
     *
     * Example:
     * @param  $recipients
     * @return $this
     */
    public function setRecipients($recipients)
    {
        $this->values['recipients'] = $recipients;
        return $this;
    }

    /**
     * Get recipients
     *
     * @return
     */
    public function getRecipients()
    {
        return $this->values['recipients'];
    }
}
