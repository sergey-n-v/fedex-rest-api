<?php
namespace FedExRestApi\TrackService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * TrackAmount
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $currency
 * @property float $value

 */
class TrackAmount extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackAmount';

    /**
     * Set currency
     *
     *
     * Example: USD
     * @param string $currency
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->values['currency'] = $currency;
        return $this;
    }

    /**
     * Get currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->values['currency'];
    }

    /**
     * Set value
     *
     *
     * Example: 56.8
     * @param float $value
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
     * @return float
     */
    public function getValue()
    {
        return $this->values['value'];
    }
}
