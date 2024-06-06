<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * ShipOperationalInstructions
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property int $number
 * @property string $content

 */
class ShipOperationalInstructions extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipOperationalInstructions';

    /**
     * Set number
     *
     *
     * Example: 17
     * @param int $number
     * @return $this
     */
    public function setNumber($number)
    {
        $this->values['number'] = $number;
        return $this;
    }

    /**
     * Get number
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->values['number'];
    }

    /**
     * Set content
     *
     *
     * Example: content
     * @param string $content
     * @return $this
     */
    public function setContent($content)
    {
        $this->values['content'] = $content;
        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->values['content'];
    }
}
