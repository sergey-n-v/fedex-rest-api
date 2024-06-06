<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Indicates the advance booking number, shipper load /count and packing list details. This details must be provided by the user during freight shipment.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property int $bookingConfirmationNumber
 * @property int $shippersLoadAndCount
 * @property boolean $packingListEnclosed

 */
class OpenShipExpressFreightDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipExpressFreightDetail';

    /**
     * This is an advance booking number.  <br>Minimum length: 5 digits <br> Maximum length: 12 digits  <br>Example: XXXX56789812
     *
     * 
     * Example: 123456789812
     * @param int $bookingConfirmationNumber
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
     * @return int
     */
    public function getBookingConfirmationNumber()
    {
        return $this->values['bookingConfirmationNumber'];
    }

    /**
     * Indicates the content of a container were loaded and counted by the shipper.<br>Minimum length: 1 digits <br> Maximum length: 5 digits <br>Example: 100
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
     * This indicates whether or not the Packing List is enclosed with the shipment. A packing list is a document that includes details about the contents of a package. <br> Example: true
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
