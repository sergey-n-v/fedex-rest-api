<?php
namespace FedExRestApi\AvailabilityService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * FedEx Package Special Services options.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $customerIntegrationMode
 * @property string $subType
 * @property string $specialServiceType

 */
class AvPackageSpecialServiceOption extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvPackageSpecialServiceOption';

    /**
     * Specifies customer integration mode.
     *
     *
     * Example:
     * @param string $customerIntegrationMode
     * @return $this
     */
    public function setCustomerIntegrationMode($customerIntegrationMode)
    {
        $this->values['customerIntegrationMode'] = $customerIntegrationMode;
        return $this;
    }

    /**
     * Get customerIntegrationMode
     *
     * @return string
     */
    public function getCustomerIntegrationMode()
    {
        return $this->values['customerIntegrationMode'];
    }

    /**
     * Specifies sub-type of the special service option.
     *
     *
     * Example:
     * @param string $subType
     * @return $this
     */
    public function setSubType($subType)
    {
        $this->values['subType'] = $subType;
        return $this;
    }

    /**
     * Get subType
     *
     * @return string
     */
    public function getSubType()
    {
        return $this->values['subType'];
    }

    /**
     * Indicate the types of special services requested for the shipment.<br><a onclick='loadDocReference("packagelevelspecialservicetypes")'>Click here to see Package level Special Service Types</a>
     *
     *
     * Example:
     * @param string $specialServiceType
     * @return $this
     */
    public function setSpecialServiceType($specialServiceType)
    {
        $this->values['specialServiceType'] = $specialServiceType;
        return $this;
    }

    /**
     * Get specialServiceType
     *
     * @return string
     */
    public function getSpecialServiceType()
    {
        return $this->values['specialServiceType'];
    }
}
