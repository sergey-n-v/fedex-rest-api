<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * These are COD package details. For use with FedEx Ground services only; COD must be present in shipments special services.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property OpenShipMoney $codCollectionAmount

 */
class OpenShipPackageCODDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipPackageCODDetail';

    /**
     * Indicate the COD collection amount.
     *
     *
     * Example:
     * @param OpenShipMoney $codCollectionAmount
     * @return $this
     */
    public function setCodCollectionAmount($codCollectionAmount)
    {
        $this->values['codCollectionAmount'] = $codCollectionAmount;
        return $this;
    }

    /**
     * Get codCollectionAmount
     *
     * @return OpenShipMoney
     */
    public function getCodCollectionAmount()
    {
        return $this->values['codCollectionAmount'];
    }
}
