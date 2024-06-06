<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * OpenShipRegulatoryProhibition
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $derivedHarmonizedCode
 * @property OpenShipMessage $advisory
 * @property int $commodityIndex
 * @property string $source
 * @property string $categories
 * @property string $type
 * @property OpenShipRegulatoryWaiver $waiver
 * @property string $status

 */
class OpenShipRegulatoryProhibition extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipRegulatoryProhibition';

    /**
     * Indicates the derived harmonized code value<br>Example: 01
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
     * @param OpenShipMessage $advisory
     * @return $this
     */
    public function setAdvisory(OpenShipMessage $advisory)
    {
        $this->values['advisory'] = $advisory;
        return $this;
    }

    /**
     * Get advisory
     *
     * @return OpenShipMessage
     */
    public function getAdvisory()
    {
        return $this->values['advisory'];
    }

    /**
     * Indicates one based index identifying the associated commodity.<br>Example: 12
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
     * Indicates the prohibition source type.<br>Example: source
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
     * Indicate the shipment rule type.<br>Example: ["categories"]
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
     * Indicates the prohibition type.<br>Example: type
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
     * @param OpenShipRegulatoryWaiver $waiver
     * @return $this
     */
    public function setWaiver(OpenShipRegulatoryWaiver $waiver)
    {
        $this->values['waiver'] = $waiver;
        return $this;
    }

    /**
     * Get waiver
     *
     * @return OpenShipRegulatoryWaiver
     */
    public function getWaiver()
    {
        return $this->values['waiver'];
    }

    /**
     * Indicates the prohibitory status.<br>Example: status
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
