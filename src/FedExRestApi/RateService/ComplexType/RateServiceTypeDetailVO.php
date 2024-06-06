<?php
namespace FedExRestApi\RateService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * service type information details
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $carrierCode
 * @property string $description
 * @property string $serviceName
 * @property string $serviceCategory

 */
class RateServiceTypeDetailVO extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateServiceTypeDetailVO';

    /**
     * Set carrierCode
     *
     * simpleClass: RateCarrierCode
     * Example:
     * @param string $carrierCode
     * @return $this
     */
    public function setCarrierCode($carrierCode)
    {
        $this->values['carrierCode'] = $carrierCode;
        return $this;
    }

    /**
     * Get carrierCode
     *
     * @return string
     */
    public function getCarrierCode()
    {
        return $this->values['carrierCode'];
    }

    /**
     * Set description
     *
     *
     * Example:
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
     * Set serviceName
     *
     *
     * Example:
     * @param string $serviceName
     * @return $this
     */
    public function setServiceName($serviceName)
    {
        $this->values['serviceName'] = $serviceName;
        return $this;
    }

    /**
     * Get serviceName
     *
     * @return string
     */
    public function getServiceName()
    {
        return $this->values['serviceName'];
    }

    /**
     * Set serviceCategory
     *
     *
     * Example:
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
