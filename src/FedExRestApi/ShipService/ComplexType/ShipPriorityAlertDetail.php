<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Specifies the Priority Alert Detail.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $enhancementTypes
 * @property string $content

 */
class ShipPriorityAlertDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipPriorityAlertDetail';

    /**
     * Set enhancementTypes
     *
     *
     * Example: ["PRIORITY_ALERT_PLUS"]
     * @param string $enhancementTypes
     * @return $this
     */
    public function setEnhancementTypes(array $enhancementTypes)
    {
        $this->values['enhancementTypes'] = $enhancementTypes;
        return $this;
    }

    /**
     * Get enhancementTypes
     *
     * @return string
     */
    public function getEnhancementTypes()
    {
        return $this->values['enhancementTypes'];
    }

    /**
     * Set content
     *
     *
     * Example: ["string"]
     * @param string $content
     * @return $this
     */
    public function setContent(array $content)
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
