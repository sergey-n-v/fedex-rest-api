<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * ShipRegulatoryProhibition
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $derivedHarmonizedCode
 * @property ShipMessage $advisory
 * @property int $commodityIndex
 * @property string $source
 * @property string $categories
 * @property string $type
 * @property ShipRegulatoryWaiver $waiver
 * @property string $status

 */
class ShipRegulatoryProhibition extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipRegulatoryProhibition';

    /**
     * Set derivedHarmonizedCode
     *
     *
     * Example: 01
     * @param string $derivedHarmonizedCode
     * @return $this
     */
    public function setDerivedHarmonizedCode($derivedHarmonizedCode)
    {
        $this->values['derivedHarmonizedCode'] = $derivedHarmonizedCode;
        return $this;
    }

    /**
     * Get derivedHarmonizedCode
     *
     * @return string
     */
    public function getDerivedHarmonizedCode()
    {
        return $this->values['derivedHarmonizedCode'];
    }

    /**
     * Set advisory
     *
     *
     * Example:
     * @param ShipMessage $advisory
     * @return $this
     */
    public function setAdvisory(ShipMessage $advisory)
    {
        $this->values['advisory'] = $advisory;
        return $this;
    }

    /**
     * Get advisory
     *
     * @return ShipMessage
     */
    public function getAdvisory()
    {
        return $this->values['advisory'];
    }

    /**
     * Set commodityIndex
     *
     *
     * Example: 12
     * @param int $commodityIndex
     * @return $this
     */
    public function setCommodityIndex($commodityIndex)
    {
        $this->values['commodityIndex'] = $commodityIndex;
        return $this;
    }

    /**
     * Get commodityIndex
     *
     * @return int
     */
    public function getCommodityIndex()
    {
        return $this->values['commodityIndex'];
    }

    /**
     * Set source
     *
     *
     * Example: source
     * @param string $source
     * @return $this
     */
    public function setSource($source)
    {
        $this->values['source'] = $source;
        return $this;
    }

    /**
     * Get source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->values['source'];
    }

    /**
     * Set categories
     *
     *
     * Example: ["categories"]
     * @param string $categories
     * @return $this
     */
    public function setCategories(array $categories)
    {
        $this->values['categories'] = $categories;
        return $this;
    }

    /**
     * Get categories
     *
     * @return string
     */
    public function getCategories()
    {
        return $this->values['categories'];
    }

    /**
     * Set type
     *
     *
     * Example: type
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['type'] = $type;
        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->values['type'];
    }

    /**
     * Set waiver
     *
     *
     * Example:
     * @param ShipRegulatoryWaiver $waiver
     * @return $this
     */
    public function setWaiver(ShipRegulatoryWaiver $waiver)
    {
        $this->values['waiver'] = $waiver;
        return $this;
    }

    /**
     * Get waiver
     *
     * @return ShipRegulatoryWaiver
     */
    public function getWaiver()
    {
        return $this->values['waiver'];
    }

    /**
     * Set status
     *
     *
     * Example: status
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->values['status'] = $status;
        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->values['status'];
    }
}
