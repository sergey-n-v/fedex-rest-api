<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * These are COD package details. For use with FedEx Ground services only; COD must be present in shipments special services.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property ShipMoney $codCollectionAmount

 */
class ShipPackageCODDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipPackageCODDetail';

    /**
     * Set codCollectionAmount
     *
     *
     * Example:
     * @param ShipMoney $codCollectionAmount
     * @return $this
     */
    public function setCodCollectionAmount(ShipMoney $codCollectionAmount)
    {
        $this->values['codCollectionAmount'] = $codCollectionAmount;
        return $this;
    }

    /**
     * Get codCollectionAmount
     *
     * @return ShipMoney
     */
    public function getCodCollectionAmount()
    {
        return $this->values['codCollectionAmount'];
    }
}
