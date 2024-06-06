<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Indicates the tracking details for the package.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property int $formId
 * @property string $trackingIdType
 * @property int $uspsApplicationId
 * @property string $trackingNumber

 */
class OpenShipTrackingId extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipTrackingId';

    /**
     * This is FedEx tracking Identifier associated with the package.<br>Example: 8600
     *
     * 
     * Example: 0201
     * @param int $formId
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
     * @return int
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
     * @param int $uspsApplicationId
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
     * @return int
     */
    public function getUspsApplicationId()
    {
        return $this->values['uspsApplicationId'];
    }

    /**
     * This is a number associated with a package that is used to track it. <br>Example: 49XXX0000XXX20032835
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
