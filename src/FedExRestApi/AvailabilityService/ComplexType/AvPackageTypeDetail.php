<?php
namespace FedExRestApi\AvailabilityService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Holds the details of allowed Packaging Types for the origin and destination provided.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property AvKeyDisplayTextVO $serviceType
 * @property AvWeight $oneRateMaxWeightAllowed
 * @property AvWeight $maxWeightAllowed
 * @property string $rateTypes
 * @property AvSubPackageInfo[] $packagingInfoList
 * @property AvKeyDisplayTextVO $packageType
 * @property AvWeight $maxMetricWeightAllowed
 * @property AvWeight $oneRateMaxMetricWeightAllowed
 * @property AvMoney $maxDeclaredValue

 */
class AvPackageTypeDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvPackageTypeDetail';

    /**
     * Service Type represents some services like FEDEX_GROUND,INTERNATIONAL_PRIORITY, etc..,<br>Example: INTERNATIONAL_PRIORITY<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>
     *
     *
     * Example:
     * @param AvKeyDisplayTextVO $serviceType
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
     * @return AvKeyDisplayTextVO
     */
    public function getServiceType()
    {
        return $this->values['serviceType'];
    }

    /**
     * Maximum Weight allowed for the Packaging type to send with One Fixed Rate
     *
     *
     * Example:
     * @param AvWeight $oneRateMaxWeightAllowed
     * @return $this
     */
    public function setOneRateMaxWeightAllowed($oneRateMaxWeightAllowed)
    {
        $this->values['oneRateMaxWeightAllowed'] = $oneRateMaxWeightAllowed;
        return $this;
    }

    /**
     * Get oneRateMaxWeightAllowed
     *
     * @return AvWeight
     */
    public function getOneRateMaxWeightAllowed()
    {
        return $this->values['oneRateMaxWeightAllowed'];
    }

    /**
     * Maximum Weight allowed for the Packaging type
     *
     *
     * Example:
     * @param AvWeight $maxWeightAllowed
     * @return $this
     */
    public function setMaxWeightAllowed($maxWeightAllowed)
    {
        $this->values['maxWeightAllowed'] = $maxWeightAllowed;
        return $this;
    }

    /**
     * Get maxWeightAllowed
     *
     * @return AvWeight
     */
    public function getMaxWeightAllowed()
    {
        return $this->values['maxWeightAllowed'];
    }

    /**
     * A set of possible rate types allowed for each Package type
     *
     *
     * Example: WEIGHT_BASED, FLAT_BASED, MULTI-WEIGHT rates
     * @param string $rateTypes
     * @return $this
     */
    public function setRateTypes(array $rateTypes)
    {
        $this->values['rateTypes'] = $rateTypes;
        return $this;
    }

    /**
     * Get rateTypes
     *
     * @return string
     */
    public function getRateTypes()
    {
        return $this->values['rateTypes'];
    }

    /**
     * An array of possible packaging types, a packaging description and applicable dimensions for each Package type.
     *
     *
     * Example:
     * @param AvSubPackageInfo[] $packagingInfoList
     * @return $this
     */
    public function setPackagingInfoList(array $packagingInfoList)
    {
        $this->values['packagingInfoList'] = $packagingInfoList;
        return $this;
    }

    /**
     * Get packagingInfoList
     *
     * @return AvSubPackageInfo[]
     */
    public function getPackagingInfoList()
    {
        return $this->values['packagingInfoList'];
    }

    /**
     * Set packageType
     *
     *
     * Example:
     * @param AvKeyDisplayTextVO1|AvKeyDisplayTextVO $packageType
     * @return $this
     */
    public function setPackageType($packageType)
    {
        $this->values['packageType'] = $packageType;
        return $this;
    }

    /**
     * Get packageType
     *
     * @return AvKeyDisplayTextVO1|AvKeyDisplayTextVO
     */
    public function getPackageType()
    {
        return $this->values['packageType'];
    }

    /**
     * Maximum Metric Weight allowed for the Packaging type
     *
     *
     * Example:
     * @param AvWeight $maxMetricWeightAllowed
     * @return $this
     */
    public function setMaxMetricWeightAllowed($maxMetricWeightAllowed)
    {
        $this->values['maxMetricWeightAllowed'] = $maxMetricWeightAllowed;
        return $this;
    }

    /**
     * Get maxMetricWeightAllowed
     *
     * @return AvWeight
     */
    public function getMaxMetricWeightAllowed()
    {
        return $this->values['maxMetricWeightAllowed'];
    }

    /**
     * Maximum Metric Weight allowed for the Packaging type with One Fixed Rate
     *
     *
     * Example:
     * @param AvWeight $oneRateMaxMetricWeightAllowed
     * @return $this
     */
    public function setOneRateMaxMetricWeightAllowed($oneRateMaxMetricWeightAllowed)
    {
        $this->values['oneRateMaxMetricWeightAllowed'] = $oneRateMaxMetricWeightAllowed;
        return $this;
    }

    /**
     * Get oneRateMaxMetricWeightAllowed
     *
     * @return AvWeight
     */
    public function getOneRateMaxMetricWeightAllowed()
    {
        return $this->values['oneRateMaxMetricWeightAllowed'];
    }

    /**
     * This is the maximum declared value.
     *
     *
     * Example:
     * @param AvMoney $maxDeclaredValue
     * @return $this
     */
    public function setMaxDeclaredValue($maxDeclaredValue)
    {
        $this->values['maxDeclaredValue'] = $maxDeclaredValue;
        return $this;
    }

    /**
     * Get maxDeclaredValue
     *
     * @return AvMoney
     */
    public function getMaxDeclaredValue()
    {
        return $this->values['maxDeclaredValue'];
    }
}
