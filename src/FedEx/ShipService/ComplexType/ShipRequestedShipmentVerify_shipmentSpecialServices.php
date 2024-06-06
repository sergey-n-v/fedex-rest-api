<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Indicate the shipment special service or handling required for this shipment. <br>Note: <ul><li>If the shipper is requesting a special service, the special service type must be indicated in the object specialServiceTypes, and all supporting detail must be provided in the appropriate sub-object below.</li><li>For returns it is required to provide value RETURN_SHIPMENT in the specialServiceTypes.</li></ul>
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $specialServiceTypes
 * @property ShipETDDetail $etdDetail
 * @property ShipReturnShipmentDetail $returnShipmentDetail
 * @property ShipDeliveryOnInvoiceAcceptanceDetail $deliveryOnInvoiceAcceptanceDetail
 * @property ShipInternationalTrafficInArmsRegulationsDetail $internationalTrafficInArmsRegulationsDetail
 * @property ShipPendingShipmentDetail $pendingShipmentDetail
 * @property ShipHoldAtLocationDetail $holdAtLocationDetail
 * @property ShipShipmentCODDetail $shipmentCODDetail
 * @property ShipShipmentDryIceDetail_1 $shipmentDryIceDetail
 * @property ShipInternationalControlledExportDetail $internationalControlledExportDetail
 * @property ShipHomeDeliveryPremiumDetail $homeDeliveryPremiumDetail

 */
class ShipRequestedShipmentVerify_shipmentSpecialServices extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipRequestedShipmentVerify_shipmentSpecialServices';

    /**
     * Set specialServiceTypes
     *
     * 
     * Example: ["THIRD_PARTY_CONSIGNEE"]
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
     * @param ShipETDDetail $etdDetail
     * @return $this
     */
    public function setEtdDetail(ShipETDDetail $etdDetail)
    {
        $this->values['etdDetail'] = $etdDetail;
        return $this;
    }

    /**
     * Get etdDetail
     *
     * @return ShipETDDetail
     */
    public function getEtdDetail()
    {
        return $this->values['etdDetail'];
    }

    /**
     * Set returnShipmentDetail
     *
     * 
     * Example: 
     * @param ShipReturnShipmentDetail $returnShipmentDetail
     * @return $this
     */
    public function setReturnShipmentDetail(ShipReturnShipmentDetail $returnShipmentDetail)
    {
        $this->values['returnShipmentDetail'] = $returnShipmentDetail;
        return $this;
    }

    /**
     * Get returnShipmentDetail
     *
     * @return ShipReturnShipmentDetail
     */
    public function getReturnShipmentDetail()
    {
        return $this->values['returnShipmentDetail'];
    }

    /**
     * Set deliveryOnInvoiceAcceptanceDetail
     *
     * 
     * Example: 
     * @param ShipDeliveryOnInvoiceAcceptanceDetail $deliveryOnInvoiceAcceptanceDetail
     * @return $this
     */
    public function setDeliveryOnInvoiceAcceptanceDetail(ShipDeliveryOnInvoiceAcceptanceDetail $deliveryOnInvoiceAcceptanceDetail)
    {
        $this->values['deliveryOnInvoiceAcceptanceDetail'] = $deliveryOnInvoiceAcceptanceDetail;
        return $this;
    }

    /**
     * Get deliveryOnInvoiceAcceptanceDetail
     *
     * @return ShipDeliveryOnInvoiceAcceptanceDetail
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
     * @param ShipInternationalTrafficInArmsRegulationsDetail $internationalTrafficInArmsRegulationsDetail
     * @return $this
     */
    public function setInternationalTrafficInArmsRegulationsDetail(ShipInternationalTrafficInArmsRegulationsDetail $internationalTrafficInArmsRegulationsDetail)
    {
        $this->values['internationalTrafficInArmsRegulationsDetail'] = $internationalTrafficInArmsRegulationsDetail;
        return $this;
    }

    /**
     * Get internationalTrafficInArmsRegulationsDetail
     *
     * @return ShipInternationalTrafficInArmsRegulationsDetail
     */
    public function getInternationalTrafficInArmsRegulationsDetail()
    {
        return $this->values['internationalTrafficInArmsRegulationsDetail'];
    }

    /**
     * Set pendingShipmentDetail
     *
     * 
     * Example: 
     * @param ShipPendingShipmentDetail $pendingShipmentDetail
     * @return $this
     */
    public function setPendingShipmentDetail(ShipPendingShipmentDetail $pendingShipmentDetail)
    {
        $this->values['pendingShipmentDetail'] = $pendingShipmentDetail;
        return $this;
    }

    /**
     * Get pendingShipmentDetail
     *
     * @return ShipPendingShipmentDetail
     */
    public function getPendingShipmentDetail()
    {
        return $this->values['pendingShipmentDetail'];
    }

    /**
     * Set holdAtLocationDetail
     *
     * 
     * Example: 
     * @param ShipHoldAtLocationDetail $holdAtLocationDetail
     * @return $this
     */
    public function setHoldAtLocationDetail(ShipHoldAtLocationDetail $holdAtLocationDetail)
    {
        $this->values['holdAtLocationDetail'] = $holdAtLocationDetail;
        return $this;
    }

    /**
     * Get holdAtLocationDetail
     *
     * @return ShipHoldAtLocationDetail
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
     * @param ShipShipmentCODDetail $shipmentCODDetail
     * @return $this
     */
    public function setShipmentCODDetail(ShipShipmentCODDetail $shipmentCODDetail)
    {
        $this->values['shipmentCODDetail'] = $shipmentCODDetail;
        return $this;
    }

    /**
     * Get shipmentCODDetail
     *
     * @return ShipShipmentCODDetail
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
     * @param ShipShipmentDryIceDetail_1 $shipmentDryIceDetail
     * @return $this
     */
    public function setShipmentDryIceDetail(ShipShipmentDryIceDetail_1 $shipmentDryIceDetail)
    {
        $this->values['shipmentDryIceDetail'] = $shipmentDryIceDetail;
        return $this;
    }

    /**
     * Get shipmentDryIceDetail
     *
     * @return ShipShipmentDryIceDetail_1
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
     * @param ShipInternationalControlledExportDetail $internationalControlledExportDetail
     * @return $this
     */
    public function setInternationalControlledExportDetail(ShipInternationalControlledExportDetail $internationalControlledExportDetail)
    {
        $this->values['internationalControlledExportDetail'] = $internationalControlledExportDetail;
        return $this;
    }

    /**
     * Get internationalControlledExportDetail
     *
     * @return ShipInternationalControlledExportDetail
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
     * @param ShipHomeDeliveryPremiumDetail $homeDeliveryPremiumDetail
     * @return $this
     */
    public function setHomeDeliveryPremiumDetail(ShipHomeDeliveryPremiumDetail $homeDeliveryPremiumDetail)
    {
        $this->values['homeDeliveryPremiumDetail'] = $homeDeliveryPremiumDetail;
        return $this;
    }

    /**
     * Get homeDeliveryPremiumDetail
     *
     * @return ShipHomeDeliveryPremiumDetail
     */
    public function getHomeDeliveryPremiumDetail()
    {
        return $this->values['homeDeliveryPremiumDetail'];
    }
}
