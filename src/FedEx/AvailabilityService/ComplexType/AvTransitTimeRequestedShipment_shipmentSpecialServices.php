<?php
namespace FedEx\AvailabilityService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Indicate special services for which the rate data is being requested. Special Services are available at the shipment level for some or all service types.<br>Example: [BROKER_SELECT_OPTION]
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $specialServiceTypes
 * @property AvTransitTimeRequestedShipment_shipmentSpecialServices_codDetail $codDetail
 * @property AvTransitTimeRequestedShipment_shipmentSpecialServices_internationalControlledExportDetail $internationalControlledExportDetail
 * @property AvTransitTimeRequestedShipment_shipmentSpecialServices_homeDeliveryPremiumDetail $homeDeliveryPremiumDetail
 * @property AvTransitTimeRequestedShipment_shipmentSpecialServices_holdAtLocationDetail $holdAtLocationDetail
 * @property AvTransitTimeRequestedShipment_shipmentSpecialServices_shipmentDryIceDetail $shipmentDryIceDetail

 */
class AvTransitTimeRequestedShipment_shipmentSpecialServices extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvTransitTimeRequestedShipment_shipmentSpecialServices';

    /**
     * Indicate special services for which the rate data is being requested. Special Services are available at the shipment level for some or all service types.<br>Example: BROKER_SELECT_OPTION <br><a onclick='loadDocReference("shipmentlevelspecialservicetypes")'>Click here to see Shipment level Special Service Types</a>
     *
     * 
     * Example: ["BROKER_SELECT_OPTION"]
     * @param string $specialServiceTypes
     * @return $this
     */
    public function setSpecialServiceTypes(array $specialServiceTypes)
    {
        $this->values['specialServiceTypes'] = $specialServiceTypes;
        return $this;
    }

    /**
     * Get specialServiceTypes
     *
     * @return string
     */
    public function getSpecialServiceTypes()
    {
        return $this->values['specialServiceTypes'];
    }

    /**
     * Set codDetail
     *
     * 
     * Example: 
     * @param AvTransitTimeRequestedShipment_shipmentSpecialServices_codDetail $codDetail
     * @return $this
     */
    public function setCodDetail(AvTransitTimeRequestedShipment_shipmentSpecialServices_codDetail $codDetail)
    {
        $this->values['codDetail'] = $codDetail;
        return $this;
    }

    /**
     * Get codDetail
     *
     * @return AvTransitTimeRequestedShipment_shipmentSpecialServices_codDetail
     */
    public function getCodDetail()
    {
        return $this->values['codDetail'];
    }

    /**
     * Set internationalControlledExportDetail
     *
     * 
     * Example: 
     * @param AvTransitTimeRequestedShipment_shipmentSpecialServices_internationalControlledExportDetail $internationalControlledExportDetail
     * @return $this
     */
    public function setInternationalControlledExportDetail(AvTransitTimeRequestedShipment_shipmentSpecialServices_internationalControlledExportDetail $internationalControlledExportDetail)
    {
        $this->values['internationalControlledExportDetail'] = $internationalControlledExportDetail;
        return $this;
    }

    /**
     * Get internationalControlledExportDetail
     *
     * @return AvTransitTimeRequestedShipment_shipmentSpecialServices_internationalControlledExportDetail
     */
    public function getInternationalControlledExportDetail()
    {
        return $this->values['internationalControlledExportDetail'];
    }

    /**
     * Set homeDeliveryPremiumDetail
     *
     * 
     * Example: 
     * @param AvTransitTimeRequestedShipment_shipmentSpecialServices_homeDeliveryPremiumDetail $homeDeliveryPremiumDetail
     * @return $this
     */
    public function setHomeDeliveryPremiumDetail(AvTransitTimeRequestedShipment_shipmentSpecialServices_homeDeliveryPremiumDetail $homeDeliveryPremiumDetail)
    {
        $this->values['homeDeliveryPremiumDetail'] = $homeDeliveryPremiumDetail;
        return $this;
    }

    /**
     * Get homeDeliveryPremiumDetail
     *
     * @return AvTransitTimeRequestedShipment_shipmentSpecialServices_homeDeliveryPremiumDetail
     */
    public function getHomeDeliveryPremiumDetail()
    {
        return $this->values['homeDeliveryPremiumDetail'];
    }

    /**
     * Set holdAtLocationDetail
     *
     * 
     * Example: 
     * @param AvTransitTimeRequestedShipment_shipmentSpecialServices_holdAtLocationDetail $holdAtLocationDetail
     * @return $this
     */
    public function setHoldAtLocationDetail(AvTransitTimeRequestedShipment_shipmentSpecialServices_holdAtLocationDetail $holdAtLocationDetail)
    {
        $this->values['holdAtLocationDetail'] = $holdAtLocationDetail;
        return $this;
    }

    /**
     * Get holdAtLocationDetail
     *
     * @return AvTransitTimeRequestedShipment_shipmentSpecialServices_holdAtLocationDetail
     */
    public function getHoldAtLocationDetail()
    {
        return $this->values['holdAtLocationDetail'];
    }

    /**
     * Set shipmentDryIceDetail
     *
     * 
     * Example: 
     * @param AvTransitTimeRequestedShipment_shipmentSpecialServices_shipmentDryIceDetail $shipmentDryIceDetail
     * @return $this
     */
    public function setShipmentDryIceDetail(AvTransitTimeRequestedShipment_shipmentSpecialServices_shipmentDryIceDetail $shipmentDryIceDetail)
    {
        $this->values['shipmentDryIceDetail'] = $shipmentDryIceDetail;
        return $this;
    }

    /**
     * Get shipmentDryIceDetail
     *
     * @return AvTransitTimeRequestedShipment_shipmentSpecialServices_shipmentDryIceDetail
     */
    public function getShipmentDryIceDetail()
    {
        return $this->values['shipmentDryIceDetail'];
    }
}
