<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * This is used to provide eMail notification information..
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $aggregationType
 * @property ShipShipShipmentEmailNotificationRecipient[] $emailNotificationRecipients
 * @property string $personalMessage

 */
class ShipShipShipmentEMailNotificationDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipShipShipmentEMailNotificationDetail';

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
     * @param ShipShipShipmentEmailNotificationRecipient[] $emailNotificationRecipients
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
     * @return ShipShipShipmentEmailNotificationRecipient[]
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
