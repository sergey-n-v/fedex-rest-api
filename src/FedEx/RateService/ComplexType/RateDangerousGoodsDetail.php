<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Use this object to specify Dangerous Goods shipment Detail.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $offeror
 * @property string $accessibility
 * @property string $emergencyContactNumber
 * @property string $options
 * @property RateDangerousGoodsContainer[] $containers
 * @property string $regulation
 * @property RateHazardousCommodityPackagingDetail $packaging

 */
class RateDangerousGoodsDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateDangerousGoodsDetail';

    /**
     * Set offeror
     *
     * 
     * Example: Offeror Name
     * @param string $offeror
     * @return $this
     */
    public function setOfferor($offeror)
    {
        $this->values['offeror'] = $offeror;
        return $this;
    }

    /**
     * Get offeror
     *
     * @return string
     */
    public function getOfferor()
    {
        return $this->values['offeror'];
    }

    /**
     * Set accessibility
     *
     * simpleClass: RateAccessibility
     * Example: 
     * @param string $accessibility
     * @return $this
     */
    public function setAccessibility($accessibility)
    {
        $this->values['accessibility'] = $accessibility;
        return $this;
    }

    /**
     * Get accessibility
     *
     * @return string
     */
    public function getAccessibility()
    {
        return $this->values['accessibility'];
    }

    /**
     * Set emergencyContactNumber
     *
     * 
     * Example: 3268545905
     * @param string $emergencyContactNumber
     * @return $this
     */
    public function setEmergencyContactNumber($emergencyContactNumber)
    {
        $this->values['emergencyContactNumber'] = $emergencyContactNumber;
        return $this;
    }

    /**
     * Get emergencyContactNumber
     *
     * @return string
     */
    public function getEmergencyContactNumber()
    {
        return $this->values['emergencyContactNumber'];
    }

    /**
     * Set options
     *
     * simpleClass: RateOptions
     * Example: ["BATTERY"]
     * @param string $options
     * @return $this
     */
    public function setOptions(array $options)
    {
        $this->values['options'] = $options;
        return $this;
    }

    /**
     * Get options
     *
     * @return string
     */
    public function getOptions()
    {
        return $this->values['options'];
    }

    /**
     * Set containers
     *
     * 
     * Example: 
     * @param RateDangerousGoodsContainer[] $containers
     * @return $this
     */
    public function setContainers(array $containers)
    {
        $this->values['containers'] = $containers;
        return $this;
    }

    /**
     * Get containers
     *
     * @return RateDangerousGoodsContainer[]
     */
    public function getContainers()
    {
        return $this->values['containers'];
    }

    /**
     * Set regulation
     *
     * simpleClass: RateRegulation
     * Example: ADR
     * @param string $regulation
     * @return $this
     */
    public function setRegulation($regulation)
    {
        $this->values['regulation'] = $regulation;
        return $this;
    }

    /**
     * Get regulation
     *
     * @return string
     */
    public function getRegulation()
    {
        return $this->values['regulation'];
    }

    /**
     * Set packaging
     *
     * 
     * Example: 
     * @param RateHazardousCommodityPackagingDetail $packaging
     * @return $this
     */
    public function setPackaging(RateHazardousCommodityPackagingDetail $packaging)
    {
        $this->values['packaging'] = $packaging;
        return $this;
    }

    /**
     * Get packaging
     *
     * @return RateHazardousCommodityPackagingDetail
     */
    public function getPackaging()
    {
        return $this->values['packaging'];
    }
}
