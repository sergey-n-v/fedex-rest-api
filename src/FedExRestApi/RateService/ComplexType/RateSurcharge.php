<?php
namespace FedExRestApi\RateService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Specifies the surcharges.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $type
 * @property string $description
 * @property float $amount
 * @property string $level
 * @property string $name

 */
class RateSurcharge extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateSurcharge';

    /**
     * Set type
     *
     *
     * Example: FUEL
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['type'] = $type;
        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->values['type'];
    }

    /**
     * Set description
     *
     *
     * Example: Fuel Surcharge
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

    /**
     * Set amount
     *
     *
     * Example: 5.42
     * @param float $amount
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
     * @return float
     */
    public function getAmount()
    {
        return $this->values['amount'];
    }

    /**
     * Set level
     *
     *
     * Example: level
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
     * Set name
     *
     *
     * Example: name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->values['name'] = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->values['name'];
    }
}
