<?php
namespace FedEx\AvailabilityService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Provide shipment data details for which a transit time is desired.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property AvTransitTimeRequestedShipment_shipper $shipper
 * @property AvTransitTimeRecipient[] $recipients
 * @property string $serviceType
 * @property string $packagingType
 * @property string $shipDatestamp
 * @property string $pickupType
 * @property AvTransitTimeShippingChargesPayment $shippingChargesPayment
 * @property AvTransitTimeRequestedPackageLineItem[] $requestedPackageLineItems
 * @property AvTransitTimeRequestedShipment_shipmentSpecialServices $shipmentSpecialServices
 * @property AvTransitTimeRequestedShipment_customsClearanceDetail $customsClearanceDetail

 */
class AvTransitTimeRequestedShipment extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvTransitTimeRequestedShipment';

    /**
     * Set shipper
     *
     * 
     * Example: 
     * @param AvTransitTimeRequestedShipment_shipper $shipper
     * @return $this
     */
    public function setShipper(AvTransitTimeRequestedShipment_shipper $shipper)
    {
        $this->values['shipper'] = $shipper;
        return $this;
    }

    /**
     * Get shipper
     *
     * @return AvTransitTimeRequestedShipment_shipper
     */
    public function getShipper()
    {
        return $this->values['shipper'];
    }

    /**
     * Provide recipients physical location/address details to where the shipment delivered.
     *
     * 
     * Example: 
     * @param AvTransitTimeRecipient[] $recipients
     * @return $this
     */
    public function setRecipients(array $recipients)
    {
        $this->values['recipients'] = $recipients;
        return $this;
    }

    /**
     * Get recipients
     *
     * @return AvTransitTimeRecipient[]
     */
    public function getRecipients()
    {
        return $this->values['recipients'];
    }

    /**
     * Provide FedEx service type for the shipment. The results will be filtered by the serviceType value indicated.  If no serviceType is indicated then all the applicable services and corresponding transit times will be returned.<br>Example: STANDARD_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>
     *
     * 
     * Example: FEDEX_GROUND
     * @param string $serviceType
     * @return $this
     */
    public function setServiceType($serviceType)
    {
        $this->values['serviceType'] = $serviceType;
        return $this;
    }

    /**
     * Get serviceType
     *
     * @return string
     */
    public function getServiceType()
    {
        return $this->values['serviceType'];
    }

    /**
     * Specify the packaging used.
     *
     * 
     * Example: YOUR_PACKAGING
     * @param string $packagingType
     * @return $this
     */
    public function setPackagingType($packagingType)
    {
        $this->values['packagingType'] = $packagingType;
        return $this;
    }

    /**
     * Get packagingType
     *
     * @return string
     */
    public function getPackagingType()
    {
        return $this->values['packagingType'];
    }

    /**
     * This is the Shipment date. Required for future ship date rates.Default is current date if not indicated or date is in the past.<br>Required Format is YYYY-MM-DD <br> example : 2019-09-01
     *
     * 
     * Example: 2019-09-01
     * @param string $shipDatestamp
     * @return $this
     */
    public function setShipDatestamp($shipDatestamp)
    {
        $this->values['shipDatestamp'] = $shipDatestamp;
        return $this;
    }

    /**
     * Get shipDatestamp
     *
     * @return string
     */
    public function getShipDatestamp()
    {
        return $this->values['shipDatestamp'];
    }

    /**
     * Indicate the pickup type method by which the shipment to be tendered to FedEx.<br><i>Note: The value of this element does not specify dispatching the courier for package pickup.</i><br><a onclick='loadDocReference("pickuptypes")'>Click here for more information on Pickup Types.</a><br>Note:For services like FedEx International Connect Plus(FICP) & Regional Economy(RE)/Regional Economy Freight(REF) pickupType is mandatory.
     *
     * simpleClass: AvPickupType
     * Example: DROPOFF_AT_FEDEX_LOCATION
     * @param string $pickupType
     * @return $this
     */
    public function setPickupType($pickupType)
    {
        $this->values['pickupType'] = $pickupType;
        return $this;
    }

    /**
     * Get pickupType
     *
     * @return string
     */
    public function getPickupType()
    {
        return $this->values['pickupType'];
    }

    /**
     * Set shippingChargesPayment
     *
     * 
     * Example: 
     * @param AvTransitTimeShippingChargesPayment $shippingChargesPayment
     * @return $this
     */
    public function setShippingChargesPayment(AvTransitTimeShippingChargesPayment $shippingChargesPayment)
    {
        $this->values['shippingChargesPayment'] = $shippingChargesPayment;
        return $this;
    }

    /**
     * Get shippingChargesPayment
     *
     * @return AvTransitTimeShippingChargesPayment
     */
    public function getShippingChargesPayment()
    {
        return $this->values['shippingChargesPayment'];
    }

    /**
     * One or more package-attribute descriptions, each of which describes an individual package, a group of identical packages, or (for the total-piece-total-weight case) common characteristics of all packages in the shipment.<br>At least one array instance containing the weight for at least one package is required for EXPRESS and GROUND shipments.  Not used for FREIGHT.<br>Single piece requests will have one RequestedPackageLineItem.<br>Multiple piece requests will have multiple RequestedPackageLineItems.<br> Maximum occurrences is 99.
     *
     * 
     * Example: 
     * @param AvTransitTimeRequestedPackageLineItem[] $requestedPackageLineItems
     * @return $this
     */
    public function setRequestedPackageLineItems(array $requestedPackageLineItems)
    {
        $this->values['requestedPackageLineItems'] = $requestedPackageLineItems;
        return $this;
    }

    /**
     * Get requestedPackageLineItems
     *
     * @return AvTransitTimeRequestedPackageLineItem[]
     */
    public function getRequestedPackageLineItems()
    {
        return $this->values['requestedPackageLineItems'];
    }

    /**
     * Set shipmentSpecialServices
     *
     * 
     * Example: 
     * @param AvTransitTimeRequestedShipment_shipmentSpecialServices $shipmentSpecialServices
     * @return $this
     */
    public function setShipmentSpecialServices(AvTransitTimeRequestedShipment_shipmentSpecialServices $shipmentSpecialServices)
    {
        $this->values['shipmentSpecialServices'] = $shipmentSpecialServices;
        return $this;
    }

    /**
     * Get shipmentSpecialServices
     *
     * @return AvTransitTimeRequestedShipment_shipmentSpecialServices
     */
    public function getShipmentSpecialServices()
    {
        return $this->values['shipmentSpecialServices'];
    }

    /**
     * Set customsClearanceDetail
     *
     * 
     * Example: 
     * @param AvTransitTimeRequestedShipment_customsClearanceDetail $customsClearanceDetail
     * @return $this
     */
    public function setCustomsClearanceDetail(AvTransitTimeRequestedShipment_customsClearanceDetail $customsClearanceDetail)
    {
        $this->values['customsClearanceDetail'] = $customsClearanceDetail;
        return $this;
    }

    /**
     * Get customsClearanceDetail
     *
     * @return AvTransitTimeRequestedShipment_customsClearanceDetail
     */
    public function getCustomsClearanceDetail()
    {
        return $this->values['customsClearanceDetail'];
    }
}
