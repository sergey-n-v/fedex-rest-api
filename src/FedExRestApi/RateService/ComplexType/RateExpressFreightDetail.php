<?php
namespace FedExRestApi\RateService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Conditional"
Details specific to a FedEx Express Freight® shipment (i.e. FedEx First Freight, FedEx 1Day, 2Day, and 3Day Freight).
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $bookingConfirmationNumber
 * @property int $shippersLoadAndCount

 */
class RateExpressFreightDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateExpressFreightDetail';

    /**
     * Set bookingConfirmationNumber
     *
     *
     * Example:
     * @param string $bookingConfirmationNumber
     * @return $this
     */
    public function setBookingConfirmationNumber($bookingConfirmationNumber)
    {
        $this->values['bookingConfirmationNumber'] = $bookingConfirmationNumber;
        return $this;
    }

    /**
     * Get bookingConfirmationNumber
     *
     * @return string
     */
    public function getBookingConfirmationNumber()
    {
        return $this->values['bookingConfirmationNumber'];
    }

    /**
     * Set shippersLoadAndCount
     *
     *
     * Example:
     * @param int $shippersLoadAndCount
     * @return $this
     */
    public function setShippersLoadAndCount($shippersLoadAndCount)
    {
        $this->values['shippersLoadAndCount'] = $shippersLoadAndCount;
        return $this;
    }

    /**
     * Get shippersLoadAndCount
     *
     * @return int
     */
    public function getShippersLoadAndCount()
    {
        return $this->values['shippersLoadAndCount'];
    }
}
