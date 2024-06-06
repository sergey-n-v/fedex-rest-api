<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * OpenShipOperationalInstructions
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property int $number
 * @property string $content

 */
class OpenShipOperationalInstructions extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipOperationalInstructions';

    /**
     * Specifies the number of operational instructions returned for this shipment.<br>Example: 17
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
     * This is an operational instruction printed or available on the shipping document.<br>Example: SECURED
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
