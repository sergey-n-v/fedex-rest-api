<?php
namespace FedEx\AvailabilityService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Package COD Detail.  COD main information is set in shipment level.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property AvTransitTimeRequestedPackageLineItem_packageSpecialServices_codDetail_codCollectionAmount $codCollectionAmount

 */
class AvTransitTimeRequestedPackageLineItem_packageSpecialServices_codDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvTransitTimeRequestedPackageLineItem_packageSpecialServices_codDetail';

    /**
     * Set codCollectionAmount
     *
     * 
     * Example: 
     * @param AvTransitTimeRequestedPackageLineItem_packageSpecialServices_codDetail_codCollectionAmount $codCollectionAmount
     * @return $this
     */
    public function setCodCollectionAmount(AvTransitTimeRequestedPackageLineItem_packageSpecialServices_codDetail_codCollectionAmount $codCollectionAmount)
    {
        $this->values['codCollectionAmount'] = $codCollectionAmount;
        return $this;
    }

    /**
     * Get codCollectionAmount
     *
     * @return AvTransitTimeRequestedPackageLineItem_packageSpecialServices_codDetail_codCollectionAmount
     */
    public function getCodCollectionAmount()
    {
        return $this->values['codCollectionAmount'];
    }
}
