<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * These are email disposition detail.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $emailAddress
 * @property string $type
 * @property string $recipientType

 */
class OpenShipEmailDispositionDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipEmailDispositionDetail';

    /**
     * This is email Address.<br>Example: xxxx@xxx.com
     *
     * 
     * Example: neena@fedex.com
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
     * Specify the email status.<br>Example: EMAILED
     *
     * 
     * Example: EMAILED
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
     * Specify the recipient Type.<br>Example: SHIPPER/BROKER
     *
     * 
     * Example: SHIPPER
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
