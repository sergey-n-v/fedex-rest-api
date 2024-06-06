<?php
namespace FedEx\OpenShipService\ComplexType;

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
class OpenShipHazardousCommodityPackingDetail01 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipHazardousCommodityPackingDetail01';

    /**
     * Coded specification for how commodity is to be packed.<br>Example: packing Instructions
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
     * A Boolean value that, when True, specifies the mode of shipment transportation should be Cargo Aircraft for Dangerous Goods. <br>Note: An identifier DGD-CAO is added in AWB for cargo aircraft shipments.
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
