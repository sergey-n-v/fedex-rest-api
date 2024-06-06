<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies documentation and limits for validation of an individual packing group/category. DG Data Upload Mode: Required (IATA), Optional (Other), DG Full Validation Mode: Required (IATA), Optional (Other),
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $packingInstructions
 * @property boolean $cargoAircraftOnly

 */
class ShipHazardousCommodityPackingDetail01 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipHazardousCommodityPackingDetail01';

    /**
     * Set packingInstructions
     *
     * 
     * Example: packing Instructions
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
     * Example: 1
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
