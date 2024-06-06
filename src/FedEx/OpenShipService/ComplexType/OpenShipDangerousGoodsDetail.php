<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Provide dangerous goods shipment details.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $accessibility
 * @property boolean $cargoAircraftOnly
 * @property string $options

 */
class OpenShipDangerousGoodsDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipDangerousGoodsDetail';

    /**
     * Specify Dangerous Goods Accessibility Type. <ul><li>Inaccessible &ndash; it does not have to be accessable on the aircraft.</li><li>Accessible &ndash; it must be fully accessible on the aircraft, and is more strictly controlled.</li></ul>
     *
     * simpleClass: OpenShipAccessibility
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
     * A Boolean value that, when True, specifies the mode of shipment transportation should be Cargo Aircraft for Dangerous Goods. Its default value is set as False.<br>Note: An identifier DGD-CAO is added in AWB for cargo aircraft shipments.
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
     * Indicate type of DG being reported.
     *
     * simpleClass: OpenShipOptions
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
