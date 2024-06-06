<?php
namespace FedExRestApi\RateService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Specifies documentation and limits for validation of an individual packing group/category.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $packingInstructions
 * @property boolean $cargoAircraftOnly

 */
class RateHazardousCommodityPackingDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateHazardousCommodityPackingDetail';

    /**
     * Set packingInstructions
     *
     *
     * Example: instruction
     * @param string $packingInstructions
     * @return $this
     */
    public function setPackingInstructions($packingInstructions)
    {
        $this->values['packingInstructions'] = $packingInstructions;
        return $this;
    }

    /**
     * Get packingInstructions
     *
     * @return string
     */
    public function getPackingInstructions()
    {
        return $this->values['packingInstructions'];
    }

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
}
