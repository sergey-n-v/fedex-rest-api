<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * These are email disposition details. Provides the type and email addresses of e-mail recipients. If returnedDispositionDetail in labelSpecification is set as true then email will be send with label and documents copy.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $emailAddress
 * @property string $type
 * @property string $recipientType

 */
class ShipShipEmailDispositionDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipShipEmailDispositionDetail';

    /**
     * Set emailAddress
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
     * Set type
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
     * Set recipientType
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
