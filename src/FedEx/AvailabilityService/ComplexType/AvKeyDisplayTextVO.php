<?php
namespace FedEx\AvailabilityService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * AvKeyDisplayTextVO
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property  $displayText
 * @property  $key

 */
class AvKeyDisplayTextVO extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvKeyDisplayTextVO';

    /**
     * Display Text
     *
     * 
     * Example: FedEx Ground
     * @param  $displayText
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
     * @return 
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
     * @param  $key
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
     * @return 
     */
    public function getKey()
    {
        return $this->values['key'];
    }
}
