<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Indicates the advance booking number, shipper load /count and packing list details. This details must be provided by the user during freight shipment.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $bookingConfirmationNumber
 * @property int $shippersLoadAndCount
 * @property boolean $packingListEnclosed

 */
class ShipExpressFreightDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipExpressFreightDetail';

    /**
     * Set bookingConfirmationNumber
     *
     * 
     * Example: 123456789812
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
     * Example: 123
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

    /**
     * Set packingListEnclosed
     *
     * 
     * Example: 1
     * @param boolean $packingListEnclosed
     * @return $this
     */
    public function setPackingListEnclosed($packingListEnclosed)
    {
        $this->values['packingListEnclosed'] = $packingListEnclosed;
        return $this;
    }

    /**
     * Get packingListEnclosed
     *
     * @return boolean
     */
    public function getPackingListEnclosed()
    {
        return $this->values['packingListEnclosed'];
    }
}
