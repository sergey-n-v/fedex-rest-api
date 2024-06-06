<?php
namespace FedExRestApi\AvailabilityService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * this object holds applicable key and display text value pairs.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $displayText
 * @property string $key

 */
class AvKeyDisplayTextVO1 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvKeyDisplayTextVO1';

    /**
     * Display Text
     *
     *
     * Example: FedEx Ground
     * @param string $displayText
     * @return $this
     */
    public function setDisplayText($displayText)
    {
        $this->values['displayText'] = $displayText;
        return $this;
    }

    /**
     * Get displayText
     *
     * @return string
     */
    public function getDisplayText()
    {
        return $this->values['displayText'];
    }

    /**
     * Unique Key
     *
     *
     * Example: FEDEX_GROUND
     * @param string $key
     * @return $this
     */
    public function setKey($key)
    {
        $this->values['key'] = $key;
        return $this;
    }

    /**
     * Get key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->values['key'];
    }
}
