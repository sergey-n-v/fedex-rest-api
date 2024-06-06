<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Specifies the advisory details.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $code
 * @property string $text
 * @property ShipMessageParameter[] $parameters
 * @property string $localizedText

 */
class ShipMessage extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipMessage';

    /**
     * Set code
     *
     *
     * Example: code
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

    /**
     * Set text
     *
     *
     * Example: Text
     * @param string $text
     * @return $this
     */
    public function setText($text)
    {
        $this->values['text'] = $text;
        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->values['text'];
    }

    /**
     * Set parameters
     *
     *
     * Example:
     * @param ShipMessageParameter[] $parameters
     * @return $this
     */
    public function setParameters(array $parameters)
    {
        $this->values['parameters'] = $parameters;
        return $this;
    }

    /**
     * Get parameters
     *
     * @return ShipMessageParameter[]
     */
    public function getParameters()
    {
        return $this->values['parameters'];
    }

    /**
     * Set localizedText
     *
     *
     * Example: localizedText
     * @param string $localizedText
     * @return $this
     */
    public function setLocalizedText($localizedText)
    {
        $this->values['localizedText'] = $localizedText;
        return $this;
    }

    /**
     * Get localizedText
     *
     * @return string
     */
    public function getLocalizedText()
    {
        return $this->values['localizedText'];
    }
}
