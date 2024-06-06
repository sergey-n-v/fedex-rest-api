<?php
namespace FedExRestApi\AddressValidationService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * PhoneNumberDetail Model
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property AddressValidationPhoneNumber $number
 * @property string $permissions
 * @property string $usage
 * @property string $type
 * @property string $phoneNotificationFormatType

 */
class AddressValidationPhoneNumberDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AddressValidationPhoneNumberDetail';

    /**
     * Phone Number details of the user
     *
     *
     * Example:
     * @param AddressValidationPhoneNumber $number
     * @return $this
     */
    public function setNumber($number)
    {
        $this->values['number'] = $number;
        return $this;
    }

    /**
     * Get number
     *
     * @return AddressValidationPhoneNumber
     */
    public function getNumber()
    {
        return $this->values['number'];
    }

    /**
     * Shows the Phone Permission Status
     *
     * simpleClass: AddressValidationPermissions
     * Example: GRANT/DENY
     * @param string $permissions
     * @return $this
     */
    public function setPermissions($permissions)
    {
        $this->values['permissions'] = $permissions;
        return $this;
    }

    /**
     * Get permissions
     *
     * @return string
     */
    public function getPermissions()
    {
        return $this->values['permissions'];
    }

    /**
     * Specifies the Phone Usage
     *
     * simpleClass: AddressValidationUsage
     * Example: PRIMARY
     * @param string $usage
     * @return $this
     */
    public function setUsage($usage)
    {
        $this->values['usage'] = $usage;
        return $this;
    }

    /**
     * Get usage
     *
     * @return string
     */
    public function getUsage()
    {
        return $this->values['usage'];
    }

    /**
     * Phone Number Type
     *
     * simpleClass: AddressValidationType
     * Example: FAX/WORK
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
     * Phone Notification Format Type
     *
     * simpleClass: AddressValidationPhoneNotificationFormatType
     * Example: SMS_TEXT_MESSAGE
     * @param string $phoneNotificationFormatType
     * @return $this
     */
    public function setPhoneNotificationFormatType($phoneNotificationFormatType)
    {
        $this->values['phoneNotificationFormatType'] = $phoneNotificationFormatType;
        return $this;
    }

    /**
     * Get phoneNotificationFormatType
     *
     * @return string
     */
    public function getPhoneNotificationFormatType()
    {
        return $this->values['phoneNotificationFormatType'];
    }
}
