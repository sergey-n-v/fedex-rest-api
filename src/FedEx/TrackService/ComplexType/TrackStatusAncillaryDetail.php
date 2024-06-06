<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Field which holds status code of the track information for the shipment being tracked.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $reason
 * @property string $reasonDescription
 * @property string $action
 * @property string $actionDescription

 */
class TrackStatusAncillaryDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackStatusAncillaryDetail';

    /**
     * Set reason
     *
     * 
     * Example: 15
     * @param string $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->values['reason'] = $reason;
        return $this;
    }

    /**
     * Get reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->values['reason'];
    }

    /**
     * Set reasonDescription
     *
     * 
     * Example: Customer not available or business closed
     * @param string $reasonDescription
     * @return $this
     */
    public function setReasonDescription($reasonDescription)
    {
        $this->values['reasonDescription'] = $reasonDescription;
        return $this;
    }

    /**
     * Get reasonDescription
     *
     * @return string
     */
    public function getReasonDescription()
    {
        return $this->values['reasonDescription'];
    }

    /**
     * Set action
     *
     * 
     * Example: Contact us at <http://www.fedex.com/us/customersupport/call/index.html> to discuss possible delivery or pickup alternatives.
     * @param string $action
     * @return $this
     */
    public function setAction($action)
    {
        $this->values['action'] = $action;
        return $this;
    }

    /**
     * Get action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->values['action'];
    }

    /**
     * Set actionDescription
     *
     * 
     * Example: Customer not Available or Business Closed
     * @param string $actionDescription
     * @return $this
     */
    public function setActionDescription($actionDescription)
    {
        $this->values['actionDescription'] = $actionDescription;
        return $this;
    }

    /**
     * Get actionDescription
     *
     * @return string
     */
    public function getActionDescription()
    {
        return $this->values['actionDescription'];
    }
}
