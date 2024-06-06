<?php
namespace FedExRestApi\PickupService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Provides the Express Freight pickup detailed information.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $truckType
 * @property string $service
 * @property string $trailerLength
 * @property string $bookingNumber
 * @property PickupDimensions $dimensions

 */
class PickupExpressFreightPickupDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PickupExpressFreightPickupDetail';

    /**
     * Specify type of pickup truck.
     *
     * simpleClass: PickupTruckType
     * Example: DROP_TRAILER_AGREEMENT
     * @param string $truckType
     * @return $this
     */
    public function setTruckType($truckType)
    {
        $this->values['truckType'] = $truckType;
        return $this;
    }

    /**
     * Get truckType
     *
     * @return string
     */
    public function getTruckType()
    {
        return $this->values['truckType'];
    }

    /**
     * Specify FedEx Service for the shipment.<br>Example: FEDEX_1_DAY_FREIGHT
     *
     *
     * Example: FEDEX_1_DAY_FREIGHT
     * @param string $service
     * @return $this
     */
    public function setService($service)
    {
        $this->values['service'] = $service;
        return $this;
    }

    /**
     * Get service
     *
     * @return string
     */
    public function getService()
    {
        return $this->values['service'];
    }

    /**
     * Specify the trailer size, required for dispatch.
     *
     * simpleClass: PickupTrailerLength
     * Example: TRAILER_28_FT
     * @param string $trailerLength
     * @return $this
     */
    public function setTrailerLength($trailerLength)
    {
        $this->values['trailerLength'] = $trailerLength;
        return $this;
    }

    /**
     * Get trailerLength
     *
     * @return string
     */
    public function getTrailerLength()
    {
        return $this->values['trailerLength'];
    }

    /**
     * Specify a freight shipment booking number from FedEx. This number is mandatory for freight dispatch requests.<br> Example: 1234AGTT
     *
     *
     * Example: 1234AGTT
     * @param string $bookingNumber
     * @return $this
     */
    public function setBookingNumber($bookingNumber)
    {
        $this->values['bookingNumber'] = $bookingNumber;
        return $this;
    }

    /**
     * Get bookingNumber
     *
     * @return string
     */
    public function getBookingNumber()
    {
        return $this->values['bookingNumber'];
    }

    /**
     * Indicate the dimensions of the package.<br> Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions must be indicated.</li><li>Dimensions are required with YOUR_PACKAGING package type.</li></ul>Note: The maximum/minimum dimension values varies based on the services and the packaging types. Refer <a href="https://www.fedex.com/en-us/service-guide.html#" target="_blank">FedEx Service Guide</a> for service details related to DIM Weighting for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.
     *
     *
     * Example:
     * @param PickupDimensions $dimensions
     * @return $this
     */
    public function setDimensions($dimensions)
    {
        $this->values['dimensions'] = $dimensions;
        return $this;
    }

    /**
     * Get dimensions
     *
     * @return PickupDimensions
     */
    public function getDimensions()
    {
        return $this->values['dimensions'];
    }
}
