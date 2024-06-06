<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ShipBatteryDetail
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $batteryPackingType
 * @property string $batteryRegulatoryType
 * @property string $batteryMaterialType

 */
class ShipBatteryDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipBatteryDetail';

    /**
     * Set batteryPackingType
     *
     * simpleClass: ShipBatteryPackingType
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
     * Set batteryRegulatoryType
     *
     * simpleClass: ShipBatteryRegulatoryType
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
     * Set batteryMaterialType
     *
     * simpleClass: ShipBatteryMaterialType
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
