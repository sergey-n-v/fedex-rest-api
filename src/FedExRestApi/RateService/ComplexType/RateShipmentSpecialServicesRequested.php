<?php
namespace FedExRestApi\RateService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Indicate special services for which the rate data is being requested. Special Services are available at the shipment level for some or all service types.<br>Example: [BROKER_SELECT_OPTION]<br><a onclick='loadDocReference("shipmentlevelspecialservicetypes")'>Click here to see Shipment level Special Service Types</a>
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property RateShipmentSpecialServicesRequested_returnShipmentDetail $returnShipmentDetail
 * @property RateDeliveryOnInvoiceAcceptanceDetail $deliveryOnInvoiceAcceptanceDetail
 * @property RateInternationalTrafficInArmsRegulationsDetail $internationalTrafficInArmsRegulationsDetail
 * @property RatePendingShipmentDetail $pendingShipmentDetail
 * @property RateHoldAtLocationDetail $holdAtLocationDetail
 * @property RateShipmentSpecialServicesRequestedShipmentCODDetail $shipmentCODDetail
 * @property RateShipmentDryIceDetail $shipmentDryIceDetail
 * @property RateInternationalControlledExportDetail $internationalControlledExportDetail
 * @property RateHomeDeliveryPremiumDetail $homeDeliveryPremiumDetail
 * @property string $specialServiceTypes

 */
class RateShipmentSpecialServicesRequested extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateShipmentSpecialServicesRequested';

    /**
     * Set returnShipmentDetail
     *
     *
     * Example:
     * @param RateShipmentSpecialServicesRequested_returnShipmentDetail $returnShipmentDetail
     * @return $this
     */
    public function setReturnShipmentDetail(RateShipmentSpecialServicesRequested_returnShipmentDetail $returnShipmentDetail)
    {
        $this->values['returnShipmentDetail'] = $returnShipmentDetail;
        return $this;
    }

    /**
     * Get returnShipmentDetail
     *
     * @return RateShipmentSpecialServicesRequested_returnShipmentDetail
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
     * @param RateDeliveryOnInvoiceAcceptanceDetail $deliveryOnInvoiceAcceptanceDetail
     * @return $this
     */
    public function setDeliveryOnInvoiceAcceptanceDetail(RateDeliveryOnInvoiceAcceptanceDetail $deliveryOnInvoiceAcceptanceDetail)
    {
        $this->values['deliveryOnInvoiceAcceptanceDetail'] = $deliveryOnInvoiceAcceptanceDetail;
        return $this;
    }

    /**
     * Get deliveryOnInvoiceAcceptanceDetail
     *
     * @return RateDeliveryOnInvoiceAcceptanceDetail
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
     * @param RateInternationalTrafficInArmsRegulationsDetail $internationalTrafficInArmsRegulationsDetail
     * @return $this
     */
    public function setInternationalTrafficInArmsRegulationsDetail(RateInternationalTrafficInArmsRegulationsDetail $internationalTrafficInArmsRegulationsDetail)
    {
        $this->values['internationalTrafficInArmsRegulationsDetail'] = $internationalTrafficInArmsRegulationsDetail;
        return $this;
    }

    /**
     * Get internationalTrafficInArmsRegulationsDetail
     *
     * @return RateInternationalTrafficInArmsRegulationsDetail
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
     * @param RatePendingShipmentDetail $pendingShipmentDetail
     * @return $this
     */
    public function setPendingShipmentDetail(RatePendingShipmentDetail $pendingShipmentDetail)
    {
        $this->values['pendingShipmentDetail'] = $pendingShipmentDetail;
        return $this;
    }

    /**
     * Get pendingShipmentDetail
     *
     * @return RatePendingShipmentDetail
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
     * @param RateHoldAtLocationDetail $holdAtLocationDetail
     * @return $this
     */
    public function setHoldAtLocationDetail(RateHoldAtLocationDetail $holdAtLocationDetail)
    {
        $this->values['holdAtLocationDetail'] = $holdAtLocationDetail;
        return $this;
    }

    /**
     * Get holdAtLocationDetail
     *
     * @return RateHoldAtLocationDetail
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
     * @param RateShipmentSpecialServicesRequestedShipmentCODDetail $shipmentCODDetail
     * @return $this
     */
    public function setShipmentCODDetail(RateShipmentSpecialServicesRequestedShipmentCODDetail $shipmentCODDetail)
    {
        $this->values['shipmentCODDetail'] = $shipmentCODDetail;
        return $this;
    }

    /**
     * Get shipmentCODDetail
     *
     * @return RateShipmentSpecialServicesRequestedShipmentCODDetail
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
     * @param RateShipmentDryIceDetail $shipmentDryIceDetail
     * @return $this
     */
    public function setShipmentDryIceDetail(RateShipmentDryIceDetail $shipmentDryIceDetail)
    {
        $this->values['shipmentDryIceDetail'] = $shipmentDryIceDetail;
        return $this;
    }

    /**
     * Get shipmentDryIceDetail
     *
     * @return RateShipmentDryIceDetail
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
     * @param RateInternationalControlledExportDetail $internationalControlledExportDetail
     * @return $this
     */
    public function setInternationalControlledExportDetail(RateInternationalControlledExportDetail $internationalControlledExportDetail)
    {
        $this->values['internationalControlledExportDetail'] = $internationalControlledExportDetail;
        return $this;
    }

    /**
     * Get internationalControlledExportDetail
     *
     * @return RateInternationalControlledExportDetail
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
     * @param RateHomeDeliveryPremiumDetail $homeDeliveryPremiumDetail
     * @return $this
     */
    public function setHomeDeliveryPremiumDetail(RateHomeDeliveryPremiumDetail $homeDeliveryPremiumDetail)
    {
        $this->values['homeDeliveryPremiumDetail'] = $homeDeliveryPremiumDetail;
        return $this;
    }

    /**
     * Get homeDeliveryPremiumDetail
     *
     * @return RateHomeDeliveryPremiumDetail
     */
    public function getHomeDeliveryPremiumDetail()
    {
        return $this->values['homeDeliveryPremiumDetail'];
    }

    /**
     * Set specialServiceTypes
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
}
