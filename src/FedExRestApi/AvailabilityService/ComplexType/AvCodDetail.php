<?php
namespace FedExRestApi\AvailabilityService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * AvCodDetail
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property  $codCollectionAmount

 */
class AvCodDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvCodDetail';

    /**
     * Use this object to specify amount and currency details.
     *
     *
     * Example: {"currency":"USD","amount":100.5}
     * @param  $codCollectionAmount
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
     * @return
     */
    public function getCodCollectionAmount()
    {
        return $this->values['codCollectionAmount'];
    }
}
