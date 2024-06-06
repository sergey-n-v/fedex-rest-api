<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * These are email disposition details. Provides the type and email addresses of e-mail recipients. If returnedDispositionDetail in labelSpecification is set as true then email will be send with label and documents copy.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $aggregationType
 * @property ShipEmailNotificationRecipient[] $emailNotificationRecipients
 * @property string $personalMessage

 */
class ShipEMailNotificationDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipEMailNotificationDetail';

    /**
     * Set aggregationType
     *
     * simpleClass: ShipAggregationType
     * Example: PER_PACKAGE
     * @param string $aggregationType
     * @return $this
     */
    public function setAggregationType($aggregationType)
    {
        $this->values['aggregationType'] = $aggregationType;
        return $this;
    }

    /**
     * Get aggregationType
     *
     * @return string
     */
    public function getAggregationType()
    {
        return $this->values['aggregationType'];
    }

    /**
     * Set emailNotificationRecipients
     *
     * 
     * Example: 
     * @param ShipEmailNotificationRecipient[] $emailNotificationRecipients
     * @return $this
     */
    public function setEmailNotificationRecipients(array $emailNotificationRecipients)
    {
        $this->values['emailNotificationRecipients'] = $emailNotificationRecipients;
        return $this;
    }

    /**
     * Get emailNotificationRecipients
     *
     * @return ShipEmailNotificationRecipient[]
     */
    public function getEmailNotificationRecipients()
    {
        return $this->values['emailNotificationRecipients'];
    }

    /**
     * Set personalMessage
     *
     * 
     * Example: your personal message here
     * @param string $personalMessage
     * @return $this
     */
    public function setPersonalMessage($personalMessage)
    {
        $this->values['personalMessage'] = $personalMessage;
        return $this;
    }

    /**
     * Get personalMessage
     *
     * @return string
     */
    public function getPersonalMessage()
    {
        return $this->values['personalMessage'];
    }
}
