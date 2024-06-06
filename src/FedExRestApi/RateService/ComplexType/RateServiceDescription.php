<?php
namespace FedExRestApi\RateService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Indicates the provides the Service Description details.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $serviceType
 * @property string $code
 * @property RateProductName[] $names
 * @property string $operatingOrgCodes
 * @property string $astraDescription
 * @property string $description
 * @property string $serviceId
 * @property string $serviceCategory

 */
class RateServiceDescription extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateServiceDescription';

    /**
     * Set serviceType
     *
     *
     * Example: INTERNATIONAL_FIRST
     * @param string $serviceType
     * @return $this
     */
    public function setServiceType($serviceType)
    {
        $this->values['serviceType'] = $serviceType;
        return $this;
    }

    /**
     * Get serviceType
     *
     * @return string
     */
    public function getServiceType()
    {
        return $this->values['serviceType'];
    }

    /**
     * Set code
     *
     *
     * Example: 92
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
     * Set names
     *
     *
     * Example:
     * @param RateProductName[] $names
     * @return $this
     */
    public function setNames(array $names)
    {
        $this->values['names'] = $names;
        return $this;
    }

    /**
     * Get names
     *
     * @return RateProductName[]
     */
    public function getNames()
    {
        return $this->values['names'];
    }

    /**
     * Set operatingOrgCodes
     *
     *
     * Example: FXG
     * @param string $operatingOrgCodes
     * @return $this
     */
    public function setOperatingOrgCodes(array $operatingOrgCodes)
    {
        $this->values['operatingOrgCodes'] = $operatingOrgCodes;
        return $this;
    }

    /**
     * Get operatingOrgCodes
     *
     * @return string
     */
    public function getOperatingOrgCodes()
    {
        return $this->values['operatingOrgCodes'];
    }

    /**
     * Set astraDescription
     *
     *
     * Example: INTL1ST
     * @param string $astraDescription
     * @return $this
     */
    public function setAstraDescription($astraDescription)
    {
        $this->values['astraDescription'] = $astraDescription;
        return $this;
    }

    /**
     * Get astraDescription
     *
     * @return string
     */
    public function getAstraDescription()
    {
        return $this->values['astraDescription'];
    }

    /**
     * Set description
     *
     *
     * Example: FedEx Ground
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->values['description'] = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->values['description'];
    }

    /**
     * Set serviceId
     *
     *
     * Example: EP1000000135
     * @param string $serviceId
     * @return $this
     */
    public function setServiceId($serviceId)
    {
        $this->values['serviceId'] = $serviceId;
        return $this;
    }

    /**
     * Get serviceId
     *
     * @return string
     */
    public function getServiceId()
    {
        return $this->values['serviceId'];
    }

    /**
     * Set serviceCategory
     *
     *
     * Example: parcel
     * @param string $serviceCategory
     * @return $this
     */
    public function setServiceCategory($serviceCategory)
    {
        $this->values['serviceCategory'] = $serviceCategory;
        return $this;
    }

    /**
     * Get serviceCategory
     *
     * @return string
     */
    public function getServiceCategory()
    {
        return $this->values['serviceCategory'];
    }
}
