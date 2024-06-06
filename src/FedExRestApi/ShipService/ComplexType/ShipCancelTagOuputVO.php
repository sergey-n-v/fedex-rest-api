<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * The output details when a tag is cancelled.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property boolean $cancelledTag
 * @property string $successMessage

 */
class ShipCancelTagOuputVO extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipCancelTagOuputVO';

    /**
     * Set cancelledTag
     *
     *
     * Example: 1
     * @param boolean $cancelledTag
     * @return $this
     */
    public function setCancelledTag($cancelledTag)
    {
        $this->values['cancelledTag'] = $cancelledTag;
        return $this;
    }

    /**
     * Get cancelledTag
     *
     * @return boolean
     */
    public function getCancelledTag()
    {
        return $this->values['cancelledTag'];
    }

    /**
     * Set successMessage
     *
     *
     * Example: success
     * @param string $successMessage
     * @return $this
     */
    public function setSuccessMessage($successMessage)
    {
        $this->values['successMessage'] = $successMessage;
        return $this;
    }

    /**
     * Get successMessage
     *
     * @return string
     */
    public function getSuccessMessage()
    {
        return $this->values['successMessage'];
    }
}
