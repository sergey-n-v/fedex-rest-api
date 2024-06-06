<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Indicates package COD Detail.  COD main information is set in shipment level.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property RateMoney_1 $codCollectionAmount
 * @property string $codCollectionType

 */
class RatePackageCODDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RatePackageCODDetail';

    /**
     * Set codCollectionAmount
     *
     * 
     * Example: 
     * @param RateMoney_1 $codCollectionAmount
     * @return $this
     */
    public function setCodCollectionAmount(RateMoney_1 $codCollectionAmount)
    {
        $this->values['codCollectionAmount'] = $codCollectionAmount;
        return $this;
    }

    /**
     * Get codCollectionAmount
     *
     * @return RateMoney_1
     */
    public function getCodCollectionAmount()
    {
        return $this->values['codCollectionAmount'];
    }

    /**
     * Set codCollectionType
     *
     * simpleClass: RateCodCollectionType
     * Example: 
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
}
