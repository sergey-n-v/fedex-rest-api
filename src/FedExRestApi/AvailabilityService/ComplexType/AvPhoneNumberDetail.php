<?php
namespace FedExRestApi\AvailabilityService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * AvPhoneNumberDetail
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property AvPhoneNumber $number
 * @property object $permissions
 * @property string $usage
 * @property string $type

 */
class AvPhoneNumberDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvPhoneNumberDetail';

    /**
     * Set number
     *
     *
     * Example:
     * @param AvPhoneNumber $number
     * @return $this
     */
    public function setNumber(AvPhoneNumber $number)
    {
        $this->values['number'] = $number;
        return $this;
    }

    /**
     * Get number
     *
     * @return AvPhoneNumber
     */
    public function getNumber()
    {
        return $this->values['number'];
    }

    /**
     * This is to specify the phone permission.
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

    /**
     * Specify if the phone usage is Primary or Secondary.
     *
     * simpleClass: AvUsage
     * Example:
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
     * Indicate the Phone Number Type.
     *
     * simpleClass: AvType
     * Example:
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
}
