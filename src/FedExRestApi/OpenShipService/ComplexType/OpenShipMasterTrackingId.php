<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Indicates the tracking details for the package.Required for child shipments of an oneLabelAtATime shipments
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $formId
 * @property string $trackingIdType
 * @property string $uspsApplicationId
 * @property string $trackingNumber

 */
class OpenShipMasterTrackingId extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipMasterTrackingId';

    /**
     * This is FedEx tracking Identifier associated with the package.<br>Example: 8600
     *
     *
     * Example: 0201
     * @param string $formId
     * @return $this
     */
    public function setFormId($formId)
    {
        $this->values['formId'] = $formId;
        return $this;
    }

    /**
     * Get formId
     *
     * @return string
     */
    public function getFormId()
    {
        return $this->values['formId'];
    }

    /**
     * Specify the FedEx transportation type. <br>Example: EXPRESS
     *
     *
     * Example: EXPRESS
     * @param string $trackingIdType
     * @return $this
     */
    public function setTrackingIdType($trackingIdType)
    {
        $this->values['trackingIdType'] = $trackingIdType;
        return $this;
    }

    /**
     * Get trackingIdType
     *
     * @return string
     */
    public function getTrackingIdType()
    {
        return $this->values['trackingIdType'];
    }

    /**
     * Specify the USPS tracking Identifier associated with FedEx SmartPost shipment.<br>Example: 92
     *
     *
     * Example: 92
     * @param string $uspsApplicationId
     * @return $this
     */
    public function setUspsApplicationId($uspsApplicationId)
    {
        $this->values['uspsApplicationId'] = $uspsApplicationId;
        return $this;
    }

    /**
     * Get uspsApplicationId
     *
     * @return string
     */
    public function getUspsApplicationId()
    {
        return $this->values['uspsApplicationId'];
    }

    /**
     * This is a number associated with a package that is used to track it.For child shipment of an oneLabelAtATime shipments,this should be same as the masterTrackingNumber of the parent shipment. <br>Example: 49XXX0000XXX20032835
     *
     *
     * Example: 49092000070120032835
     * @param string $trackingNumber
     * @return $this
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->values['trackingNumber'] = $trackingNumber;
        return $this;
    }

    /**
     * Get trackingNumber
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->values['trackingNumber'];
    }
}
