<?php
namespace FedExRestApi\TrackService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Notifications to the end user that provide additional information relevant to the tracked shipment. For example, a notification may indicate that a change in behavior has occurred.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $code
 * @property string $description

 */
class TrackInformationNoteDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackInformationNoteDetail';

    /**
     * Set code
     *
     *
     * Example: CLEARANCE_ENTRY_FEE_APPLIES
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
     * Set description
     *
     *
     * Example: this is an informational message
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->values['description'] = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->values['description'];
    }
}
