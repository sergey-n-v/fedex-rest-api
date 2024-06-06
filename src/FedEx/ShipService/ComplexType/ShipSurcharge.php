<?php
namespace FedEx\ShipService\ComplexType;

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
class ShipSurcharge extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipSurcharge';

    /**
     * Set amount
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
     * Set surchargeType
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
     * Set level
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
     * Set description
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
