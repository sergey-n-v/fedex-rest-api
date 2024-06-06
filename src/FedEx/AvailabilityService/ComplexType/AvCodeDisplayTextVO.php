<?php
namespace FedEx\AvailabilityService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * applicable key and display text value pairs.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $displayText
 * @property string $code

 */
class AvCodeDisplayTextVO extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvCodeDisplayTextVO';

    /**
     * Display Text
     *
     * 
     * Example: Indirect Signature
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
     * Unique code
     *
     * 
     * Example: INDIRECT
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->values['code'] = $code;
        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->values['code'];
    }
}
