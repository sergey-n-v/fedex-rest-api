<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Provide dangerous goods shipment details.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property boolean $cargoAircraftOnly
 * @property string $accessibility
 * @property string $options

 */
class ShipDangerousGoodsDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipDangerousGoodsDetail';

    /**
     * Set cargoAircraftOnly
     *
     *
     *
     * @param boolean $cargoAircraftOnly
     * @return $this
     */
    public function setCargoAircraftOnly($cargoAircraftOnly)
    {
        $this->values['cargoAircraftOnly'] = $cargoAircraftOnly;
        return $this;
    }

    /**
     * Get cargoAircraftOnly
     *
     * @return boolean
     */
    public function getCargoAircraftOnly()
    {
        return $this->values['cargoAircraftOnly'];
    }

    /**
     * Set accessibility
     *
     * simpleClass: ShipAccessibility
     * Example: INACCESSIBLE
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
     * Set options
     *
     * simpleClass: ShipOptions
     * Example: ["LIMITED_QUANTITIES_COMMODITIES","ORM_D"]
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
}
