<?php
namespace FedExRestApi\AvailabilityService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * AvCODDetail
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $codCollectionType
 * @property AvMoney $codCollectionAmount

 */
class AvCODDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvCODDetail';

    /**
     * Identifies the type of funds FedEx should collect upon shipment delivery.
     *
     * simpleClass: AvCodCollectionType
     * Example: CASH
     * @param string $codCollectionType
     * @return $this
     */
    public function setCodCollectionType($codCollectionType)
    {
        $this->values['codCollectionType'] = $codCollectionType;
        return $this;
    }

    /**
     * Get codCollectionType
     *
     * @return string
     */
    public function getCodCollectionType()
    {
        return $this->values['codCollectionType'];
    }

    /**
     * Set codCollectionAmount
     *
     *
     * Example:
     * @param AvMoney $codCollectionAmount
     * @return $this
     */
    public function setCodCollectionAmount(AvMoney $codCollectionAmount)
    {
        $this->values['codCollectionAmount'] = $codCollectionAmount;
        return $this;
    }

    /**
     * Get codCollectionAmount
     *
     * @return AvMoney
     */
    public function getCodCollectionAmount()
    {
        return $this->values['codCollectionAmount'];
    }
}
