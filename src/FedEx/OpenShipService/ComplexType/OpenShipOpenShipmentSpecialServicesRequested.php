<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * These special services are available at the shipment level for some or all service types.<br>If the shipper is requesting a special service which requires additional data (such as the COD amount), the shipment special service type must be present in the specialServiceTypes collection, and the supporting detail must be provided in the appropriate sub-object.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $specialServiceTypes
 * @property OpenShipETDDetail $etdDetail
 * @property OpenShipDeliveryOnInvoiceAcceptanceDetail $deliveryOnInvoiceAcceptanceDetail
 * @property OpenShipInternationalTrafficInArmsRegulationsDetail $internationalTrafficInArmsRegulationsDetail
 * @property OpenShipHoldAtLocationDetail $holdAtLocationDetail
 * @property OpenShipShipmentCODDetail $shipmentCODDetail
 * @property OpenShipShipmentDryIceDetail_1 $shipmentDryIceDetail
 * @property OpenShipInternationalControlledExportDetail $internationalControlledExportDetail
 * @property OpenShipHomeDeliveryPremiumDetail $homeDeliveryPremiumDetail

 */
class OpenShipOpenShipmentSpecialServicesRequested extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipOpenShipmentSpecialServicesRequested';

    /**
     * Indicate the Special services requested for the shipment.<br>Example: <ul><li>HOLD_AT_LOCATION</li><li>RETURN_SHIPMENT</li><li>BROKER_SELECT_OPTION</li><li>CALL_BEFORE_DELIVERY</li><li>COD</li><li>CUSTOM_DELIVERY_WINDOW</li></ul><br><a onclick='loadDocReference("shipmentlevelspecialservicetypes")'>click here to see Shipment Special Service Types</a>
     *
     * 
     * Example: ["THIRD_PARTY_CONSIGNEE","PROTECTION_FROM_FREEZING"]
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
     * Set etdDetail
     *
     * 
     * Example: 
     * @param OpenShipETDDetail $etdDetail
     * @return $this
     */
    public function setEtdDetail(OpenShipETDDetail $etdDetail)
    {
        $this->values['etdDetail'] = $etdDetail;
        return $this;
    }

    /**
     * Get etdDetail
     *
     * @return OpenShipETDDetail
     */
    public function getEtdDetail()
    {
        return $this->values['etdDetail'];
    }

    /**
     * Set deliveryOnInvoiceAcceptanceDetail
     *
     * 
     * Example: 
     * @param OpenShipDeliveryOnInvoiceAcceptanceDetail $deliveryOnInvoiceAcceptanceDetail
     * @return $this
     */
    public function setDeliveryOnInvoiceAcceptanceDetail(OpenShipDeliveryOnInvoiceAcceptanceDetail $deliveryOnInvoiceAcceptanceDetail)
    {
        $this->values['deliveryOnInvoiceAcceptanceDetail'] = $deliveryOnInvoiceAcceptanceDetail;
        return $this;
    }

    /**
     * Get deliveryOnInvoiceAcceptanceDetail
     *
     * @return OpenShipDeliveryOnInvoiceAcceptanceDetail
     */
    public function getDeliveryOnInvoiceAcceptanceDetail()
    {
        return $this->values['deliveryOnInvoiceAcceptanceDetail'];
    }

    /**
     * Set internationalTrafficInArmsRegulationsDetail
     *
     * 
     * Example: 
     * @param OpenShipInternationalTrafficInArmsRegulationsDetail $internationalTrafficInArmsRegulationsDetail
     * @return $this
     */
    public function setInternationalTrafficInArmsRegulationsDetail(OpenShipInternationalTrafficInArmsRegulationsDetail $internationalTrafficInArmsRegulationsDetail)
    {
        $this->values['internationalTrafficInArmsRegulationsDetail'] = $internationalTrafficInArmsRegulationsDetail;
        return $this;
    }

    /**
     * Get internationalTrafficInArmsRegulationsDetail
     *
     * @return OpenShipInternationalTrafficInArmsRegulationsDetail
     */
    public function getInternationalTrafficInArmsRegulationsDetail()
    {
        return $this->values['internationalTrafficInArmsRegulationsDetail'];
    }

    /**
     * Set holdAtLocationDetail
     *
     * 
     * Example: 
     * @param OpenShipHoldAtLocationDetail $holdAtLocationDetail
     * @return $this
     */
    public function setHoldAtLocationDetail(OpenShipHoldAtLocationDetail $holdAtLocationDetail)
    {
        $this->values['holdAtLocationDetail'] = $holdAtLocationDetail;
        return $this;
    }

    /**
     * Get holdAtLocationDetail
     *
     * @return OpenShipHoldAtLocationDetail
     */
    public function getHoldAtLocationDetail()
    {
        return $this->values['holdAtLocationDetail'];
    }

    /**
     * Set shipmentCODDetail
     *
     * 
     * Example: 
     * @param OpenShipShipmentCODDetail $shipmentCODDetail
     * @return $this
     */
    public function setShipmentCODDetail(OpenShipShipmentCODDetail $shipmentCODDetail)
    {
        $this->values['shipmentCODDetail'] = $shipmentCODDetail;
        return $this;
    }

    /**
     * Get shipmentCODDetail
     *
     * @return OpenShipShipmentCODDetail
     */
    public function getShipmentCODDetail()
    {
        return $this->values['shipmentCODDetail'];
    }

    /**
     * Set shipmentDryIceDetail
     *
     * 
     * Example: 
     * @param OpenShipShipmentDryIceDetail_1 $shipmentDryIceDetail
     * @return $this
     */
    public function setShipmentDryIceDetail(OpenShipShipmentDryIceDetail_1 $shipmentDryIceDetail)
    {
        $this->values['shipmentDryIceDetail'] = $shipmentDryIceDetail;
        return $this;
    }

    /**
     * Get shipmentDryIceDetail
     *
     * @return OpenShipShipmentDryIceDetail_1
     */
    public function getShipmentDryIceDetail()
    {
        return $this->values['shipmentDryIceDetail'];
    }

    /**
     * Set internationalControlledExportDetail
     *
     * 
     * Example: 
     * @param OpenShipInternationalControlledExportDetail $internationalControlledExportDetail
     * @return $this
     */
    public function setInternationalControlledExportDetail(OpenShipInternationalControlledExportDetail $internationalControlledExportDetail)
    {
        $this->values['internationalControlledExportDetail'] = $internationalControlledExportDetail;
        return $this;
    }

    /**
     * Get internationalControlledExportDetail
     *
     * @return OpenShipInternationalControlledExportDetail
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
     * @param OpenShipHomeDeliveryPremiumDetail $homeDeliveryPremiumDetail
     * @return $this
     */
    public function setHomeDeliveryPremiumDetail(OpenShipHomeDeliveryPremiumDetail $homeDeliveryPremiumDetail)
    {
        $this->values['homeDeliveryPremiumDetail'] = $homeDeliveryPremiumDetail;
        return $this;
    }

    /**
     * Get homeDeliveryPremiumDetail
     *
     * @return OpenShipHomeDeliveryPremiumDetail
     */
    public function getHomeDeliveryPremiumDetail()
    {
        return $this->values['homeDeliveryPremiumDetail'];
    }
}
