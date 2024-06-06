<?php
namespace FedExRestApi\RateService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Dangerous Goods Container
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $offeror
 * @property RateHazardousCommodityContent[] $hazardousCommodities
 * @property int $numberOfContainers
 * @property string $containerType
 * @property RatePhoneNumber $emergencyContactNumber
 * @property RateHazardousCommodityPackagingDetail $packaging
 * @property string $packingType
 * @property string $radioactiveContainerClass

 */
class RateDangerousGoodsContainer extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateDangerousGoodsContainer';

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
     * Set hazardousCommodities
     *
     *
     * Example:
     * @param RateHazardousCommodityContent[] $hazardousCommodities
     * @return $this
     */
    public function setHazardousCommodities(array $hazardousCommodities)
    {
        $this->values['hazardousCommodities'] = $hazardousCommodities;
        return $this;
    }

    /**
     * Get hazardousCommodities
     *
     * @return RateHazardousCommodityContent[]
     */
    public function getHazardousCommodities()
    {
        return $this->values['hazardousCommodities'];
    }

    /**
     * Set numberOfContainers
     *
     *
     * Example: 10
     * @param int $numberOfContainers
     * @return $this
     */
    public function setNumberOfContainers($numberOfContainers)
    {
        $this->values['numberOfContainers'] = $numberOfContainers;
        return $this;
    }

    /**
     * Get numberOfContainers
     *
     * @return int
     */
    public function getNumberOfContainers()
    {
        return $this->values['numberOfContainers'];
    }

    /**
     * Set containerType
     *
     *
     * Example: Copper Box
     * @param string $containerType
     * @return $this
     */
    public function setContainerType($containerType)
    {
        $this->values['containerType'] = $containerType;
        return $this;
    }

    /**
     * Get containerType
     *
     * @return string
     */
    public function getContainerType()
    {
        return $this->values['containerType'];
    }

    /**
     * Set emergencyContactNumber
     *
     *
     * Example:
     * @param RatePhoneNumber $emergencyContactNumber
     * @return $this
     */
    public function setEmergencyContactNumber(RatePhoneNumber $emergencyContactNumber)
    {
        $this->values['emergencyContactNumber'] = $emergencyContactNumber;
        return $this;
    }

    /**
     * Get emergencyContactNumber
     *
     * @return RatePhoneNumber
     */
    public function getEmergencyContactNumber()
    {
        return $this->values['emergencyContactNumber'];
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

    /**
     * Set packingType
     *
     * simpleClass: RatePackingType
     * Example:
     * @param string $packingType
     * @return $this
     */
    public function setPackingType($packingType)
    {
        $this->values['packingType'] = $packingType;
        return $this;
    }

    /**
     * Get packingType
     *
     * @return string
     */
    public function getPackingType()
    {
        return $this->values['packingType'];
    }

    /**
     * Set radioactiveContainerClass
     *
     * simpleClass: RateRadioactiveContainerClass
     * Example:
     * @param string $radioactiveContainerClass
     * @return $this
     */
    public function setRadioactiveContainerClass($radioactiveContainerClass)
    {
        $this->values['radioactiveContainerClass'] = $radioactiveContainerClass;
        return $this;
    }

    /**
     * Get radioactiveContainerClass
     *
     * @return string
     */
    public function getRadioactiveContainerClass()
    {
        return $this->values['radioactiveContainerClass'];
    }
}
