<?php
namespace FedExRestApi\RateService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Describe the attributes of a battery or cell that are used for classification purposes. Typically this structure would be used to allow customers to declare batteries or cells for which full dangerous goods documentation and procedures are not required.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $material
 * @property string $regulatorySubType
 * @property string $packing

 */
class RateBatteryClassificationDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateBatteryClassificationDetail';

    /**
     * Set material
     *
     * simpleClass: RateMaterial
     * Example:
     * @param string $material
     * @return $this
     */
    public function setMaterial($material)
    {
        $this->values['material'] = $material;
        return $this;
    }

    /**
     * Get material
     *
     * @return string
     */
    public function getMaterial()
    {
        return $this->values['material'];
    }

    /**
     * Set regulatorySubType
     *
     * simpleClass: RateRegulatorySubType
     * Example:
     * @param string $regulatorySubType
     * @return $this
     */
    public function setRegulatorySubType($regulatorySubType)
    {
        $this->values['regulatorySubType'] = $regulatorySubType;
        return $this;
    }

    /**
     * Get regulatorySubType
     *
     * @return string
     */
    public function getRegulatorySubType()
    {
        return $this->values['regulatorySubType'];
    }

    /**
     * Set packing
     *
     * simpleClass: RatePacking
     * Example:
     * @param string $packing
     * @return $this
     */
    public function setPacking($packing)
    {
        $this->values['packing'] = $packing;
        return $this;
    }

    /**
     * Get packing
     *
     * @return string
     */
    public function getPacking()
    {
        return $this->values['packing'];
    }
}
