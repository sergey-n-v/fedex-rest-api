<?php
namespace FedExRestApi\AvailabilityService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Use this object to specify Collect On Delivery (COD) shipment details.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property AvTransitTimeRequestedShipment_shipmentSpecialServices_codDetail_codCollectionAmount $codCollectionAmount
 * @property string $codCollectionType

 */
class AvTransitTimeRequestedShipment_shipmentSpecialServices_codDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvTransitTimeRequestedShipment_shipmentSpecialServices_codDetail';

    /**
     * Set codCollectionAmount
     *
     *
     * Example:
     * @param AvTransitTimeRequestedShipment_shipmentSpecialServices_codDetail_codCollectionAmount $codCollectionAmount
     * @return $this
     */
    public function setCodCollectionAmount(AvTransitTimeRequestedShipment_shipmentSpecialServices_codDetail_codCollectionAmount $codCollectionAmount)
    {
        $this->values['codCollectionAmount'] = $codCollectionAmount;
        return $this;
    }

    /**
     * Get codCollectionAmount
     *
     * @return AvTransitTimeRequestedShipment_shipmentSpecialServices_codDetail_codCollectionAmount
     */
    public function getCodCollectionAmount()
    {
        return $this->values['codCollectionAmount'];
    }

    /**
     * Indicate the type of funds FedEx should collect upon shipment delivery.
     *
     * simpleClass: AvCodCollectionType
     * Example: PERSONAL_CHECK
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
