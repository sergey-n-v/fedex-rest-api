<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * These are surcharges details.<br><a onclick='loadDocReference("surcharges")'>click here to see Surcharges</a>
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property  $amount
 * @property string $surchargeType
 * @property string $level
 * @property string $description

 */
class OpenShipSurcharge extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipSurcharge';

    /**
     * This is the surcharge amount.<br>Example: 15.35
     *
     * 
     * Example: 
     * @param  $amount
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->values['amount'] = $amount;
        return $this;
    }

    /**
     * Get amount
     *
     * @return 
     */
    public function getAmount()
    {
        return $this->values['amount'];
    }

    /**
     * This is the surcharge type.<br>Example: APPOINTMENT_DELIVERY
     *
     * 
     * Example: APPOINTMENT_DELIVERY
     * @param string $surchargeType
     * @return $this
     */
    public function setSurchargeType($surchargeType)
    {
        $this->values['surchargeType'] = $surchargeType;
        return $this;
    }

    /**
     * Get surchargeType
     *
     * @return string
     */
    public function getSurchargeType()
    {
        return $this->values['surchargeType'];
    }

    /**
     * Specifies if the surcharge applies to the entire shipment, or to an individual package.<br>Example: PACKAGE
     *
     * 
     * Example: PACKAGE, or SHIPMENT
     * @param string $level
     * @return $this
     */
    public function setLevel($level)
    {
        $this->values['level'] = $level;
        return $this;
    }

    /**
     * Get level
     *
     * @return string
     */
    public function getLevel()
    {
        return $this->values['level'];
    }

    /**
     * Specifies the description for the surcharge.
     *
     * 
     * Example: description
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->values['description'] = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->values['description'];
    }
}
