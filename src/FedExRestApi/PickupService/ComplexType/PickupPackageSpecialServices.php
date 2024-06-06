<?php
namespace FedExRestApi\PickupService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Indicates the special services associated with this package.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $specialServiceTypes

 */
class PickupPackageSpecialServices extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PickupPackageSpecialServices';

    /**
     * Specifies special service types.<br>Example: DANGEROUS_GOODS<br><a onclick='loadDocReference("packagelevelspecialservicetypes")'>Click here to see Package level Special Service Types</a>
     *
     *
     * Example:
     * @param string $specialServiceTypes
     * @return $this
     */
    public function setSpecialServiceTypes(array $specialServiceTypes)
    {
        $this->values['specialServiceTypes'] = $specialServiceTypes;
        return $this;
    }

    /**
     * Get specialServiceTypes
     *
     * @return string
     */
    public function getSpecialServiceTypes()
    {
        return $this->values['specialServiceTypes'];
    }
}
