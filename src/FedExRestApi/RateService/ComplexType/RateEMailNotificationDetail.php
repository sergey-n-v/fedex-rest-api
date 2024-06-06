<?php
namespace FedExRestApi\RateService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Object to specify email details for shipment notifications.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property RateEmailNotificationRecipient[] $recipients
 * @property string $personalMessage
 * @property RateEMailNotificationDetail_PrintedReference $PrintedReference

 */
class RateEMailNotificationDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateEMailNotificationDetail';

    /**
     * Set recipients
     *
     *
     * Example:
     * @param RateEmailNotificationRecipient[] $recipients
     * @return $this
     */
    public function setRecipients(array $recipients)
    {
        $this->values['recipients'] = $recipients;
        return $this;
    }

    /**
     * Get recipients
     *
     * @return RateEmailNotificationRecipient[]
     */
    public function getRecipients()
    {
        return $this->values['recipients'];
    }

    /**
     * Set personalMessage
     *
     *
     * Example:
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

    /**
     * Set PrintedReference
     *
     *
     * Example:
     * @param RateEMailNotificationDetail_PrintedReference $printedReference
     * @return $this
     */
    public function setPrintedReference(RateEMailNotificationDetail_PrintedReference $printedReference)
    {
        $this->values['PrintedReference'] = $printedReference;
        return $this;
    }

    /**
     * Get PrintedReference
     *
     * @return RateEMailNotificationDetail_PrintedReference
     */
    public function getPrintedReference()
    {
        return $this->values['PrintedReference'];
    }
}
