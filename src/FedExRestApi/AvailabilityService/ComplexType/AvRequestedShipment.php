<?php
namespace FedExRestApi\AvailabilityService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * shipment information for the shipment being requested
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property AvParty $shipper
 * @property AvParty $recipient
 * @property string $serviceType
 * @property string $packagingType
 * @property string $shipDateStamp
 * @property AvRequestedPackageLineItem[] $requestedPackageLineItems
 * @property string $dropoffType
 * @property AvRequestedShipmentVariableHandlingChargeDetail $variableHandlingChargeDetail
 * @property AvRequestedShipmentFreightShipmentDetail $freightShipmentDetail
 * @property AvRequestShipmentSpecialServicesRequested $specialServicesRequested
 * @property string $pickupType
 * @property string $shippingDocumentSpecification

 */
class AvRequestedShipment extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvRequestedShipment';

    /**
     * Required. <br>Indicate the Shipper contact details for this shipment.
     *
     *
     * Example:
     * @param AvParty $shipper
     * @return $this
     */
    public function setShipper($shipper)
    {
        $this->values['shipper'] = $shipper;
        return $this;
    }

    /**
     * Get shipper
     *
     * @return AvParty
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
     * @param AvParty $recipient
     * @return $this
     */
    public function setRecipient($recipient)
    {
        $this->values['recipient'] = $recipient;
        return $this;
    }

    /**
     * Get recipient
     *
     * @return AvParty
     */
    public function getRecipient()
    {
        return $this->values['recipient'];
    }

    /**
     * Indicate the FedEx service type used for the shipment. The result will be filtered by the serviceType value indicated.If a serviceType is not indicated, then all the applicable services and corresponding rates will be returned.<br> Example: STANDARD_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a><br>
     *
     *
     * Example: STANDARD_OVERNIGHT
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
     * Specifies packaging Type.<br><a onclick='loadDocReference("packagetypes")'>Click here to see Package Types</a>
     *
     *
     * Example: FEDEX_BOX
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
     * Conditional. Used to filter results to a specific ship date if populated on the request. Value will be defaulted to the current date/time.<br>Format: [YYYY-MM-DDThh:mm:ssTZD]<br>Example: 2020-10-13T11:00:00TZD<br>Note:<br>1.The date format must be YYYY-MM-DDThh:mm:ssTZD.<br>2.The time must be in the format: HH:MM:SS using a 24-hour clock.<br>3.The date and time are separated by the letter T, such as 2015-03-25T09:30:00.<br>4.The time is local to the pickup postal code.<br>5.Do not include a TZD (time zone designator) as it will be ignored.<br>Example: 2019-11-15T11:00:00
     *
     *
     * Example: 2019-09-01
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
     * Conditional.<br>Specifies the packaging type, weight, and dimensions of the package.  Applicable for  EXPRESS and GROUND but not for FREIGHT shipments.
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
     * Conditional <br> Required for Express and Ground, but optional for FREIGHT or SMARTPOST <br> Example: DROP_BOX
     *
     * simpleClass: AvDropoffType
     * Example: DROP_BOX
     * @param string $dropoffType
     * @return $this
     */
    public function setDropoffType($dropoffType)
    {
        $this->values['dropoffType'] = $dropoffType;
        return $this;
    }

    /**
     * Get dropoffType
     *
     * @return string
     */
    public function getDropoffType()
    {
        return $this->values['dropoffType'];
    }

    /**
     * Set variableHandlingChargeDetail
     *
     *
     * Example:
     * @param AvVariableHandlingChargeDetail $variableHandlingChargeDetail
     * @return $this
     */
    public function setVariableHandlingChargeDetail($variableHandlingChargeDetail)
    {
        $this->values['variableHandlingChargeDetail'] = $variableHandlingChargeDetail;
        return $this;
    }

    /**
     * Get variableHandlingChargeDetail
     *
     * @return AvVariableHandlingChargeDetail
     */
    public function getVariableHandlingChargeDetail()
    {
        return $this->values['variableHandlingChargeDetail'];
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
     * Indicate the pickup type method by which the shipment to be tendered to FedEx.<br><i>Note: The value of this element does not specify dispatching the courier for package pickup.</i><br><a onclick='loadDocReference("pickuptypes")'>Click here for more information on Pickup Types.</a>
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
     * Shipping Document Specification Details
     *
     *
     * Example: shippingDocumentSpecification
     * @param string $shippingDocumentSpecification
     * @return $this
     */
    public function setShippingDocumentSpecification($shippingDocumentSpecification)
    {
        $this->values['shippingDocumentSpecification'] = $shippingDocumentSpecification;
        return $this;
    }

    /**
     * Get shippingDocumentSpecification
     *
     * @return string
     */
    public function getShippingDocumentSpecification()
    {
        return $this->values['shippingDocumentSpecification'];
    }
}
