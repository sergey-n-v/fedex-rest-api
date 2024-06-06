<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Identifies the events for which the client is requesting notifications. Possible events are -  ON_DELIVERY, ON_ESTIMATED_DELIVERY, ON_EXCEPTION, ON_TENDER <br> Example: [ON_DELIVERY,ON_ESTIMATED_DELIVERY,ON_EXCEPTION]
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *

 */
class TrackNotificationEventTypes extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackNotificationEventTypes';


}
