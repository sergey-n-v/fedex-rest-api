<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Descriptions for a service.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $serviceType
 * @property string $code
 * @property OpenShipProductName[] $names
 * @property string $operatingOrgCodes
 * @property string $astraDescription
 * @property string $description
 * @property string $serviceId
 * @property string $serviceCategory

 */
class OpenShipServiceDescription extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipServiceDescription';

    /**
     * Indicate the FedEx serviceType used for this shipment. The results will be filtered by the serviceType value indicated.<br>Example: STANDARD_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>click here to see Service Types</a>
     *
     * 
     * Example: FEDEX_1_DAY_FREIGHT
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
     * Specifies code of the Service.<br>example: 80
     *
     * 
     * Example: 80
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
     * Branded, translated, and/or localized names for this service.
     *
     * 
     * Example: 
     * @param OpenShipProductName[] $names
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
     * @return OpenShipProductName[]
     */
    public function getNames()
    {
        return $this->values['names'];
    }

    /**
     * FOR FEDEX INTERNAL USE ONLY. The operating org code in a service.<br>Example: ["FXE", "FXE"]
     *
     * 
     * Example: ["FXE"]
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
     * Specifies astra Description.<br>Example: 2 DAY FRT
     *
     * 
     * Example: 2 DAY FRT
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
     * Specifies the description.
     *
     * 
     * Example: description
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
     * FOR FEDEX INTERNAL USE ONLY, Designates the service ID.<br>Example: EP1000000027
     *
     * 
     * Example: EP1000000027
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
     * FOR FEDEX INTERNAL USE ONLY. This is tied to the Product EFS interface definition which will currently contain the values of parcel.<br>Example: EXPRESS_PARCEL
     *
     * 
     * Example: freight
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
