<?php
namespace FedEx\AvailabilityService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Describes attributes of a battery or cell that are used for classification purposes. Typically this structure would be used to allow customers to declare batteries or cells for which full dangerous goods documentation and procedures are not required.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $batteryMaterialType
 * @property string $batteryPackingType
 * @property string $batteryRegulatoryType

 */
class AvTransitTimeRequestedPackageLineItem_packageSpecialServices_batteryDetails extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvTransitTimeRequestedPackageLineItem_packageSpecialServices_batteryDetails';

    /**
     * Describes the material composition of the battery or cell.
     *
     * simpleClass: AvBatteryMaterialType
     * Example: LITHIUM_METAL
     * @param string $batteryMaterialType
     * @return $this
     */
    public function setBatteryMaterialType($batteryMaterialType)
    {
        $this->values['batteryMaterialType'] = $batteryMaterialType;
        return $this;
    }

    /**
     * Get batteryMaterialType
     *
     * @return string
     */
    public function getBatteryMaterialType()
    {
        return $this->values['batteryMaterialType'];
    }

    /**
     * Describes the packing arrangement of the battery or cell with respect to other items within the same package.
     *
     * simpleClass: AvBatteryPackingType
     * Example: CONTAINED_IN_EQUIPMENT
     * @param string $batteryPackingType
     * @return $this
     */
    public function setBatteryPackingType($batteryPackingType)
    {
        $this->values['batteryPackingType'] = $batteryPackingType;
        return $this;
    }

    /**
     * Get batteryPackingType
     *
     * @return string
     */
    public function getBatteryPackingType()
    {
        return $this->values['batteryPackingType'];
    }

    /**
     * A regulation specific classification for the battery or cell.
     *
     * simpleClass: AvBatteryRegulatoryType
     * Example: IATA_SECTION_II
     * @param string $batteryRegulatoryType
     * @return $this
     */
    public function setBatteryRegulatoryType($batteryRegulatoryType)
    {
        $this->values['batteryRegulatoryType'] = $batteryRegulatoryType;
        return $this;
    }

    /**
     * Get batteryRegulatoryType
     *
     * @return string
     */
    public function getBatteryRegulatoryType()
    {
        return $this->values['batteryRegulatoryType'];
    }
}
