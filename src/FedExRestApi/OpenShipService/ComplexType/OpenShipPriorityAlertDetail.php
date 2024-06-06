<?php
namespace FedExRestApi\OpenShipService\ComplexType;

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
class OpenShipPriorityAlertDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipPriorityAlertDetail';

    /**
     * The types of all enhancement for the Priority Alert.<br>Example: PRIORITY_ALERT_PLUS
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
     * Specifies Content for the Priority Alert Detail.
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
