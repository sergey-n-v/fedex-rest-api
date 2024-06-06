<?php
namespace FedExRestApi\RateService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Provides the product details.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $type
 * @property string $encoding
 * @property string $value

 */
class RateProductName extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateProductName';

    /**
     * Set type
     *
     *
     * Example: medium
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
     * Set encoding
     *
     *
     * Example: utf-8
     * @param string $encoding
     * @return $this
     */
    public function setEncoding($encoding)
    {
        $this->values['encoding'] = $encoding;
        return $this;
    }

    /**
     * Get encoding
     *
     * @return string
     */
    public function getEncoding()
    {
        return $this->values['encoding'];
    }

    /**
     * Set value
     *
     *
     * Example: FedEx International FirstÂ®
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
}
