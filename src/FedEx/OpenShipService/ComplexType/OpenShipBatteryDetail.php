<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * OpenShipBatteryDetail
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $batteryPackingType
 * @property string $batteryRegulatoryType
 * @property string $batteryMaterialType

 */
class OpenShipBatteryDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipBatteryDetail';

    /**
     * Describe the packing arrangement of the battery or cell with respect to other items within the same package.
     *
     * simpleClass: OpenShipBatteryPackingType
     * Example: 
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
     * This is a regulation specific classification for the battery or the cell.
     *
     * simpleClass: OpenShipBatteryRegulatoryType
     * Example: 
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

    /**
     * Indicate the material composition of the battery or cell.
     *
     * simpleClass: OpenShipBatteryMaterialType
     * Example: 
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
}
