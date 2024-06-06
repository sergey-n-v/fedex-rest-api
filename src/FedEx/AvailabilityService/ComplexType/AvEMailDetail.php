<?php
namespace FedEx\AvailabilityService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * AvEMailDetail
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $emailNotificationFormatType
 * @property string $address
 * @property object $permissions

 */
class AvEMailDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvEMailDetail';

    /**
     * These are email notification format type.
     *
     * simpleClass: AvEmailNotificationFormatType
     * Example: 
     * @param string $emailNotificationFormatType
     * @return $this
     */
    public function setEmailNotificationFormatType($emailNotificationFormatType)
    {
        $this->values['emailNotificationFormatType'] = $emailNotificationFormatType;
        return $this;
    }

    /**
     * Get emailNotificationFormatType
     *
     * @return string
     */
    public function getEmailNotificationFormatType()
    {
        return $this->values['emailNotificationFormatType'];
    }

    /**
     * This is the email address.
     *
     * 
     * Example: 
     * @param string $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->values['address'] = $address;
        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->values['address'];
    }

    /**
     * Indicate the Email Permission Type.
     *
     * 
     * Example: 
     * @param object $permissions
     * @return $this
     */
    public function setPermissions(object $permissions)
    {
        $this->values['permissions'] = $permissions;
        return $this;
    }

    /**
     * Get permissions
     *
     * @return object
     */
    public function getPermissions()
    {
        return $this->values['permissions'];
    }
}
