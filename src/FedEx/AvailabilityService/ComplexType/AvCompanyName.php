<?php
namespace FedEx\AvailabilityService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Use this to provide Company details.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $division
 * @property string $companyCd
 * @property string $name
 * @property string $department
 * @property string $storeId

 */
class AvCompanyName extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvCompanyName';

    /**
     * This is division within a company.
     *
     * 
     * Example: 
     * @param string $division
     * @return $this
     */
    public function setDivision($division)
    {
        $this->values['division'] = $division;
        return $this;
    }

    /**
     * Get division
     *
     * @return string
     */
    public function getDivision()
    {
        return $this->values['division'];
    }

    /**
     * This is Company code.
     *
     * 
     * Example: 
     * @param string $companyCd
     * @return $this
     */
    public function setCompanyCd($companyCd)
    {
        $this->values['companyCd'] = $companyCd;
        return $this;
    }

    /**
     * Get companyCd
     *
     * @return string
     */
    public function getCompanyCd()
    {
        return $this->values['companyCd'];
    }

    /**
     * This is company Name.
     *
     * 
     * Example: 
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->values['name'] = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->values['name'];
    }

    /**
     * This is department within a company
     *
     * 
     * Example: 
     * @param string $department
     * @return $this
     */
    public function setDepartment($department)
    {
        $this->values['department'] = $department;
        return $this;
    }

    /**
     * Get department
     *
     * @return string
     */
    public function getDepartment()
    {
        return $this->values['department'];
    }

    /**
     * This is Store identifier within a company.
     *
     * 
     * Example: 
     * @param string $storeId
     * @return $this
     */
    public function setStoreId($storeId)
    {
        $this->values['storeId'] = $storeId;
        return $this;
    }

    /**
     * Get storeId
     *
     * @return string
     */
    public function getStoreId()
    {
        return $this->values['storeId'];
    }
}
