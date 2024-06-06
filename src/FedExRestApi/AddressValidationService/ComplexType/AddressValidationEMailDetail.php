<?php
namespace FedExRestApi\AddressValidationService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * EMailDetail Model
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $emailNotificationFormatType
 * @property string $address
 * @property string $permissions

 */
class AddressValidationEMailDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AddressValidationEMailDetail';

    /**
     * Format Type of email notification
     *
     * simpleClass: AddressValidationEmailNotificationFormatType
     * Example: TEXT
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
     * Email address of the user
     *
     *
     * Example: genny.john15@fedex.com
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
     * Email Permission Type
     *
     * simpleClass: AddressValidationPermissions
     * Example: DENY
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
}
