<?php
namespace FedExRestApi\AddressValidationService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * CompanyName Model
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
class AddressValidationCompanyName extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AddressValidationCompanyName';

    /**
     * Division of the company
     *
     *
     * Example: ICE
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
     * Unique company code for the company
     *
     *
     * Example: W1097
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
     * Name of the company
     *
     *
     * Example: FedEx
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
     * Departments of the company
     *
     *
     * Example: FedEx Services
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
     * storeId for the company
     *
     *
     * Example: 15FFGT5
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
