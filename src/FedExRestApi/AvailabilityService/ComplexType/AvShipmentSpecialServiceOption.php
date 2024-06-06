<?php
namespace FedExRestApi\AvailabilityService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * FedEx Shipment Special Services options.<br><a onclick='loadDocReference("shipmentlevelspecialservicetypes")'>Click here to see Shipment Level Special Service Types</a>
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $customerIntegrationMode
 * @property string $astraDescription
 * @property string $ltlPaymentTerms
 * @property string $subType
 * @property string $value
 * @property string $specialServiceType

 */
class AvShipmentSpecialServiceOption extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvShipmentSpecialServiceOption';

    /**
     * Specifies customer Integration Mode
     *
     *
     * Example:
     * @param string $customerIntegrationMode
     * @return $this
     */
    public function setCustomerIntegrationMode($customerIntegrationMode)
    {
        $this->values['customerIntegrationMode'] = $customerIntegrationMode;
        return $this;
    }

    /**
     * Get customerIntegrationMode
     *
     * @return string
     */
    public function getCustomerIntegrationMode()
    {
        return $this->values['customerIntegrationMode'];
    }

    /**
     * Specifies the astra label description
     *
     *
     * Example:
     * @param string $astraDescription
     * @return $this
     */
    public function setAstraDescription($astraDescription)
    {
        $this->values['astraDescription'] = $astraDescription;
        return $this;
    }

    /**
     * Get astraDescription
     *
     * @return string
     */
    public function getAstraDescription()
    {
        return $this->values['astraDescription'];
    }

    /**
     * Set ltlPaymentTerms
     *
     * simpleClass: AvLtlPaymentTerms
     * Example:
     * @param string $ltlPaymentTerms
     * @return $this
     */
    public function setLtlPaymentTerms(array $ltlPaymentTerms)
    {
        $this->values['ltlPaymentTerms'] = $ltlPaymentTerms;
        return $this;
    }

    /**
     * Get ltlPaymentTerms
     *
     * @return string
     */
    public function getLtlPaymentTerms()
    {
        return $this->values['ltlPaymentTerms'];
    }

    /**
     * Specifies sub-type of the special service option
     *
     *
     * Example:
     * @param string $subType
     * @return $this
     */
    public function setSubType($subType)
    {
        $this->values['subType'] = $subType;
        return $this;
    }

    /**
     * Get subType
     *
     * @return string
     */
    public function getSubType()
    {
        return $this->values['subType'];
    }

    /**
     * Specifies the value of the special service option.
     *
     *
     * Example:
     * @param string $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->values['value'] = $value;
        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->values['value'];
    }

    /**
     * Specify special services requested for the package.<br>Example: BROKER_SELECT_OPTION<br><a onclick='loadDocReference("shipmentlevelspecialservicetypes")'>Click here to see Shipment Level Special Service Types.</a>
     *
     *
     * Example:
     * @param string $specialServiceType
     * @return $this
     */
    public function setSpecialServiceType($specialServiceType)
    {
        $this->values['specialServiceType'] = $specialServiceType;
        return $this;
    }

    /**
     * Get specialServiceType
     *
     * @return string
     */
    public function getSpecialServiceType()
    {
        return $this->values['specialServiceType'];
    }
}
