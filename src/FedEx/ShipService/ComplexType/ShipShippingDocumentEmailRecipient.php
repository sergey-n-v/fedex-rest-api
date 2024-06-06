<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ShipShippingDocumentEmailRecipient
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $emailAddress
 * @property string $recipientType

 */
class ShipShippingDocumentEmailRecipient extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipShippingDocumentEmailRecipient';

    /**
     * Set emailAddress
     *
     * 
     * Example: email@fedex.com
     * @param string $emailAddress
     * @return $this
     */
    public function setEmailAddress($emailAddress)
    {
        $this->values['emailAddress'] = $emailAddress;
        return $this;
    }

    /**
     * Get emailAddress
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->values['emailAddress'];
    }

    /**
     * Set recipientType
     *
     * simpleClass: ShipRecipientType
     * Example: THIRD_PARTY
     * @param string $recipientType
     * @return $this
     */
    public function setRecipientType($recipientType)
    {
        $this->values['recipientType'] = $recipientType;
        return $this;
    }

    /**
     * Get recipientType
     *
     * @return string
     */
    public function getRecipientType()
    {
        return $this->values['recipientType'];
    }
}
