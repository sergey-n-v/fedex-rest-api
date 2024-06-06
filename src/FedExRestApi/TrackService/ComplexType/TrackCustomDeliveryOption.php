<?php
namespace FedExRestApi\TrackService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * List of delivery options that can be used to customize the delivery of the package.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property TrackRequestedAppointmentDetail $requestedAppointmentDetail
 * @property string $description
 * @property string $type
 * @property string $status

 */
class TrackCustomDeliveryOption extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackCustomDeliveryOption';

    /**
     * Set requestedAppointmentDetail
     *
     *
     * Example:
     * @param TrackRequestedAppointmentDetail $requestedAppointmentDetail
     * @return $this
     */
    public function setRequestedAppointmentDetail(TrackRequestedAppointmentDetail $requestedAppointmentDetail)
    {
        $this->values['requestedAppointmentDetail'] = $requestedAppointmentDetail;
        return $this;
    }

    /**
     * Get requestedAppointmentDetail
     *
     * @return TrackRequestedAppointmentDetail
     */
    public function getRequestedAppointmentDetail()
    {
        return $this->values['requestedAppointmentDetail'];
    }

    /**
     * Set description
     *
     *
     * Example: Redirect the package to the hold location.
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

    /**
     * Set type
     *
     * simpleClass: TrackType
     * Example: REDIRECT_TO_HOLD_AT_LOCATION
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
     * Set status
     *
     *
     * Example: HELD
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->values['status'] = $status;
        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->values['status'];
    }
}
