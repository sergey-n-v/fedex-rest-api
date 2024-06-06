<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * These are alert details received in the response.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $code
 * @property string $alertType
 * @property string $message

 */
class ShipAlert extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipAlert';

    /**
     * Set code
     *
     *
     * Example: SHIP.RECIPIENT.POSTALCITY.MISMATCH
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->values['code'] = $code;
        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->values['code'];
    }

    /**
     * Set alertType
     *
     * simpleClass: ShipAlertType
     * Example: NOTE
     * @param string $alertType
     * @return $this
     */
    public function setAlertType($alertType)
    {
        $this->values['alertType'] = $alertType;
        return $this;
    }

    /**
     * Get alertType
     *
     * @return string
     */
    public function getAlertType()
    {
        return $this->values['alertType'];
    }

    /**
     * Set message
     *
     *
     * Example: Recipient Postal-City Mismatch.
     * @param string $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->values['message'] = $message;
        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->values['message'];
    }
}
