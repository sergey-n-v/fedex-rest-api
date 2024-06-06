<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * This is the descriptive data required for a FedEx shipment containing dangerous materials. This element is required when SpecialServiceType DRY_ICE is selected.<p><i>Note:<ul><li>Dry Ice is a Package level Special Service for Domestic and International shipments.</li><li>Dry Ice must be declared at both Shipment and Package level for International MPS shipments to print the compliance statement on Airway Bill labels.</li></ul></i></p>
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property ShipWeight_1 $totalWeight
 * @property int $packageCount

 */
class ShipShipmentDryIceDetail_1 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipShipmentDryIceDetail_1';

    /**
     * Set totalWeight
     *
     *
     * Example:
     * @param ShipWeight_1 $totalWeight
     * @return $this
     */
    public function setTotalWeight(ShipWeight_1 $totalWeight)
    {
        $this->values['totalWeight'] = $totalWeight;
        return $this;
    }

    /**
     * Get totalWeight
     *
     * @return ShipWeight_1
     */
    public function getTotalWeight()
    {
        return $this->values['totalWeight'];
    }

    /**
     * Set packageCount
     *
     *
     * Example: 12
     * @param int $packageCount
     * @return $this
     */
    public function setPackageCount($packageCount)
    {
        $this->values['packageCount'] = $packageCount;
        return $this;
    }

    /**
     * Get packageCount
     *
     * @return int
     */
    public function getPackageCount()
    {
        return $this->values['packageCount'];
    }
}
