<?php
namespace FedExRestApi\AvailabilityService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * The types of all optional special services requested for the shipment
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property AvInternationalControlledExportDetail $internationalControlledExportDetail
 * @property AvReturnShipmentDetail $returnShipmentDetail
 * @property AvHomeDeliveryPremiumDetail $homeDeliveryPremiumDetail
 * @property AvReturnEmailDetail $returnEmailDetail
 * @property string $specialServiceTypes
 * @property AvSaturdayDeliveryDetail $saturdayDeliveryDetail
 * @property AvHoldAtLocationDetail $holdAtLocationDetail
 * @property AvCodDetail $codDetail
 * @property AvShipmentDryIceDetail $shipmentDryIceDetail
 * @property AvFreightDirectDetail $freightDirectDetail

 */
class AvShipmentSpecialServicesRequested extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvShipmentSpecialServicesRequested';

    /**
     * Set internationalControlledExportDetail
     *
     *
     * Example:
     * @param AvInternationalControlledExportDetail $internationalControlledExportDetail
     * @return $this
     */
    public function setInternationalControlledExportDetail(AvInternationalControlledExportDetail $internationalControlledExportDetail)
    {
        $this->values['internationalControlledExportDetail'] = $internationalControlledExportDetail;
        return $this;
    }

    /**
     * Get internationalControlledExportDetail
     *
     * @return AvInternationalControlledExportDetail
     */
    public function getInternationalControlledExportDetail()
    {
        return $this->values['internationalControlledExportDetail'];
    }

    /**
     * Set returnShipmentDetail
     *
     *
     * Example:
     * @param AvReturnShipmentDetail $returnShipmentDetail
     * @return $this
     */
    public function setReturnShipmentDetail(AvReturnShipmentDetail $returnShipmentDetail)
    {
        $this->values['returnShipmentDetail'] = $returnShipmentDetail;
        return $this;
    }

    /**
     * Get returnShipmentDetail
     *
     * @return AvReturnShipmentDetail
     */
    public function getReturnShipmentDetail()
    {
        return $this->values['returnShipmentDetail'];
    }

    /**
     * Set homeDeliveryPremiumDetail
     *
     *
     * Example:
     * @param AvHomeDeliveryPremiumDetail $homeDeliveryPremiumDetail
     * @return $this
     */
    public function setHomeDeliveryPremiumDetail(AvHomeDeliveryPremiumDetail $homeDeliveryPremiumDetail)
    {
        $this->values['homeDeliveryPremiumDetail'] = $homeDeliveryPremiumDetail;
        return $this;
    }

    /**
     * Get homeDeliveryPremiumDetail
     *
     * @return AvHomeDeliveryPremiumDetail
     */
    public function getHomeDeliveryPremiumDetail()
    {
        return $this->values['homeDeliveryPremiumDetail'];
    }

    /**
     * Set returnEmailDetail
     *
     *
     * Example:
     * @param AvReturnEmailDetail $returnEmailDetail
     * @return $this
     */
    public function setReturnEmailDetail(AvReturnEmailDetail $returnEmailDetail)
    {
        $this->values['returnEmailDetail'] = $returnEmailDetail;
        return $this;
    }

    /**
     * Get returnEmailDetail
     *
     * @return AvReturnEmailDetail
     */
    public function getReturnEmailDetail()
    {
        return $this->values['returnEmailDetail'];
    }

    /**
     * Optional <br> The types of all special services requested for the enclosing shipment.<br> Example: FEDEX_EXPRESS<br><a onclick='loadDocReference("servicetypes")'>Click here to see Special Service Types</a>
     *
     *
     * Example: ["FEDEX_EXPRESS"]
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
     * Set saturdayDeliveryDetail
     *
     *
     * Example:
     * @param AvSaturdayDeliveryDetail $saturdayDeliveryDetail
     * @return $this
     */
    public function setSaturdayDeliveryDetail(AvSaturdayDeliveryDetail $saturdayDeliveryDetail)
    {
        $this->values['saturdayDeliveryDetail'] = $saturdayDeliveryDetail;
        return $this;
    }

    /**
     * Get saturdayDeliveryDetail
     *
     * @return AvSaturdayDeliveryDetail
     */
    public function getSaturdayDeliveryDetail()
    {
        return $this->values['saturdayDeliveryDetail'];
    }

    /**
     * Set holdAtLocationDetail
     *
     *
     * Example:
     * @param AvHoldAtLocationDetail $holdAtLocationDetail
     * @return $this
     */
    public function setHoldAtLocationDetail(AvHoldAtLocationDetail $holdAtLocationDetail)
    {
        $this->values['holdAtLocationDetail'] = $holdAtLocationDetail;
        return $this;
    }

    /**
     * Get holdAtLocationDetail
     *
     * @return AvHoldAtLocationDetail
     */
    public function getHoldAtLocationDetail()
    {
        return $this->values['holdAtLocationDetail'];
    }

    /**
     * Set codDetail
     *
     *
     * Example:
     * @param AvCODDetail|AvCodDetail $codDetail
     * @return $this
     */
    public function setCodDetail($codDetail)
    {
        $this->values['codDetail'] = $codDetail;
        return $this;
    }

    /**
     * Get codDetail
     *
     * @return AvCODDetail|AvCodDetail
     */
    public function getCodDetail()
    {
        return $this->values['codDetail'];
    }

    /**
     * Set shipmentDryIceDetail
     *
     *
     * Example:
     * @param AvShipmentDryIceDetail1|AvShipmentDryIceDetail $shipmentDryIceDetail
     * @return $this
     */
    public function setShipmentDryIceDetail($shipmentDryIceDetail)
    {
        $this->values['shipmentDryIceDetail'] = $shipmentDryIceDetail;
        return $this;
    }

    /**
     * Get shipmentDryIceDetail
     *
     * @return AvShipmentDryIceDetail1|AvShipmentDryIceDetail
     */
    public function getShipmentDryIceDetail()
    {
        return $this->values['shipmentDryIceDetail'];
    }

    /**
     * Set freightDirectDetail
     *
     *
     * Example:
     * @param AvFreightDirectDetail $freightDirectDetail
     * @return $this
     */
    public function setFreightDirectDetail(AvFreightDirectDetail $freightDirectDetail)
    {
        $this->values['freightDirectDetail'] = $freightDirectDetail;
        return $this;
    }

    /**
     * Get freightDirectDetail
     *
     * @return AvFreightDirectDetail
     */
    public function getFreightDirectDetail()
    {
        return $this->values['freightDirectDetail'];
    }
}
