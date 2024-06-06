<?php
namespace FedExRestApi\AvailabilityService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * AvPackageAndOptionsRequestedShipment_2
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property AvParty_Shipper $shipper
 * @property AvParty[] $recipients
 * @property string $shipDateStamp
 * @property AvRequestedPackageLineItem[] $requestedPackageLineItems
 * @property AvRequestedShipmentFreightShipmentDetail $freightShipmentDetail
 * @property AvRequestShipmentSpecialServicesRequested $specialServicesRequested
 * @property string $pickupType

 */
class AvPackageAndOptionsRequestedShipment_2 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvPackageAndOptionsRequestedShipment_2';

    /**
     * Set shipper
     *
     *
     * Example:
     * @param AvParty_Shipper $shipper
     * @return $this
     */
    public function setShipper(AvParty_Shipper $shipper)
    {
        $this->values['shipper'] = $shipper;
        return $this;
    }

    /**
     * Get shipper
     *
     * @return AvParty_Shipper
     */
    public function getShipper()
    {
        return $this->values['shipper'];
    }

    /**
     * Specifies the recipient details, such as postal code, state or province code, and country code of the recipient. Note: At least one recipient is required.
     *
     *
     * Example:
     * @param AvParty[] $recipients
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
     * @return AvParty[]
     */
    public function getRecipients()
    {
        return $this->values['recipients'];
    }

    /**
     * Required.<br>Specify the Shipment date. Required for future ship date. Default is current date if not indicated or date is in the past. <br>Format is YYYY-MM-DD.<br>Example: 2019-09-06
     *
     *
     * Example: 2020-02-28
     * @param string $shipDateStamp
     * @return $this
     */
    public function setShipDateStamp($shipDateStamp)
    {
        $this->values['shipDateStamp'] = $shipDateStamp;
        return $this;
    }

    /**
     * Get shipDateStamp
     *
     * @return string
     */
    public function getShipDateStamp()
    {
        return $this->values['shipDateStamp'];
    }

    /**
     * These are one or more package-attribute descriptions, each of which describes an individual package, a group of identical packages, or (for the total-piece-total-weight case) common characteristics of all packages in the shipment.<ul><li>At least one instance containing the weight for at least one package is required for EXPRESS and GROUND shipments.</li><li>Not used for FREIGHT.</li><li>Single piece requests will have one RequestedPackageLineItem.</li><li>Multiple piece requests will have multiple RequestedPackageLineItems.</li><li>Maximum occurrences is 99.</li></ul>
     *
     *
     * Example:
     * @param AvRequestedPackageLineItem[] $requestedPackageLineItems
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
     * @return AvRequestedPackageLineItem[]
     */
    public function getRequestedPackageLineItems()
    {
        return $this->values['requestedPackageLineItems'];
    }

    /**
     * Set freightShipmentDetail
     *
     *
     * Example:
     * @param AvFreightShipmentDetail $freightShipmentDetail
     * @return $this
     */
    public function setFreightShipmentDetail($freightShipmentDetail)
    {
        $this->values['freightShipmentDetail'] = $freightShipmentDetail;
        return $this;
    }

    /**
     * Get freightShipmentDetail
     *
     * @return AvFreightShipmentDetail
     */
    public function getFreightShipmentDetail()
    {
        return $this->values['freightShipmentDetail'];
    }

    /**
     * Set specialServicesRequested
     *
     *
     * Example:
     * @param AvShipmentSpecialServicesRequested $specialServicesRequested
     * @return $this
     */
    public function setSpecialServicesRequested($specialServicesRequested)
    {
        $this->values['specialServicesRequested'] = $specialServicesRequested;
        return $this;
    }

    /**
     * Get specialServicesRequested
     *
     * @return AvShipmentSpecialServicesRequested
     */
    public function getSpecialServicesRequested()
    {
        return $this->values['specialServicesRequested'];
    }

    /**
     * Conditional Required for Express and Ground, but optional for FREIGHT or SMARTPOST.<br>Indicate the pickup type method by which the shipment yo be tendered to FedEx.<br><i>Note: The value of this element does not specify dispatching the courier for package pickup.</i><br><a onclick='loadDocReference("pickuptypes")'>Click here for more information on Pickup Types.</a><br>Note:For services like FedEx International Connect Plus(FICP) & Regional Economy(RE)/Regional Economy Freight(REF) pickupType is mandatory.
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
}
