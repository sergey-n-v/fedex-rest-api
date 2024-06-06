<?php
namespace FedEx\AvailabilityService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This is the output response details of Service and Packaging Option request.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property AvPackageTypeDetail[] $packageOptions
 * @property boolean $oneRate
 * @property string $advancedRegulatoryPackages
 * @property string $serviceOptions
 * @property AvAlert[] $alerts

 */
class AvPackageAndServiceOptionsOutputVO extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvPackageAndServiceOptionsOutputVO';

    /**
     * The available packaging options for the shipment. This also includes the applicable rate types, the weight limit, or any other information related to the shipment. </br>Valid values for the weight limit are:<br>-maxMetricWeightAllowed<br>-maxWeightAllowed<br>-oneRateMaxWeightAllowed<br>-oneRateMaxMetricWeightAllowed
     *
     * 
     * Example: 
     * @param AvPackageTypeDetail[] $packageOptions
     * @return $this
     */
    public function setPackageOptions(array $packageOptions)
    {
        $this->values['packageOptions'] = $packageOptions;
        return $this;
    }

    /**
     * Get packageOptions
     *
     * @return AvPackageTypeDetail[]
     */
    public function getPackageOptions()
    {
        return $this->values['packageOptions'];
    }

    /**
     * Indicates if OneRate is applicable to the packaging. Returns the response as True if OneRate is applicable. Otherwise the response is False.
     *
     * 
     * Example: 1
     * @param boolean $oneRate
     * @return $this
     */
    public function setOneRate($oneRate)
    {
        $this->values['oneRate'] = $oneRate;
        return $this;
    }

    /**
     * Get oneRate
     *
     * @return boolean
     */
    public function getOneRate()
    {
        return $this->values['oneRate'];
    }

    /**
     * The information for advanced regulatory packages.
     *
     * 
     * Example: 
     * @param AvKeyDisplayTextVO1[] $advancedRegulatoryPackages
     * @return $this
     */
    public function setAdvancedRegulatoryPackages(array $advancedRegulatoryPackages)
    {
        $this->values['advancedRegulatoryPackages'] = $advancedRegulatoryPackages;
        return $this;
    }

    /**
     * Get advancedRegulatoryPackages
     *
     * @return AvKeyDisplayTextVO1[]
     */
    public function getAdvancedRegulatoryPackages()
    {
        return $this->values['advancedRegulatoryPackages'];
    }

    /**
     * A list of key and value pairs representing the available service and packaging options.
     *
     * 
     * Example: {"key":"FEDEX_GROUND","displayText":"FedEx Ground"}
     * @param AvKeyDisplayTextVO_2[] $serviceOptions
     * @return $this
     */
    public function setServiceOptions(array $serviceOptions)
    {
        $this->values['serviceOptions'] = $serviceOptions;
        return $this;
    }

    /**
     * Get serviceOptions
     *
     * @return AvKeyDisplayTextVO_2[]
     */
    public function getServiceOptions()
    {
        return $this->values['serviceOptions'];
    }

    /**
     * The cxs alert type, alert code, and alert message that is received when package and service options are requested.
     *
     * 
     * Example: 
     * @param AvAlert[] $alerts
     * @return $this
     */
    public function setAlerts(array $alerts)
    {
        $this->values['alerts'] = $alerts;
        return $this;
    }

    /**
     * Get alerts
     *
     * @return AvAlert[]
     */
    public function getAlerts()
    {
        return $this->values['alerts'];
    }
}
