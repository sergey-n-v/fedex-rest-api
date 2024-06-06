<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the reference details for the tracked shipment. The following rules apply <br>- Either shipper.AccountNumber or Destination.countryCode(and postal for postal aware countries) are required<br>- If ShipDateRangeBegin and End are not present, shipDateRangeBegin will be set to the current date minus 30 days, and shipDdateRangeEnd will default to current date plus one day.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $carrierCode
 * @property string $type
 * @property string $value
 * @property string $accountNumber
 * @property string $shipDateBegin
 * @property string $shipDateEndDate
 * @property string $destinationCountryCode
 * @property string $destinationPostalCode

 */
class TrackReferenceInformation extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackReferenceInformation';

    /**
     * Set carrierCode
     *
     * 
     * Example: FDXE
     * @param string $carrierCode
     * @return $this
     */
    public function setCarrierCode($carrierCode)
    {
        $this->values['carrierCode'] = $carrierCode;
        return $this;
    }

    /**
     * Get carrierCode
     *
     * @return string
     */
    public function getCarrierCode()
    {
        return $this->values['carrierCode'];
    }

    /**
     * Set type
     *
     * 
     * Example:  BILL_OF_LADING
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
     * Set value
     *
     * 
     * Example: 56754674567546754
     * @param string $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->values['value'] = $value;
        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->values['value'];
    }

    /**
     * Set accountNumber
     *
     * 
     * Example: XXX61073
     * @param string $accountNumber
     * @return $this
     */
    public function setAccountNumber($accountNumber)
    {
        $this->values['accountNumber'] = $accountNumber;
        return $this;
    }

    /**
     * Get accountNumber
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->values['accountNumber'];
    }

    /**
     * Set shipDateBegin
     *
     * 
     * Example: 2020-03-29
     * @param string $shipDateBegin
     * @return $this
     */
    public function setShipDateBegin($shipDateBegin)
    {
        $this->values['shipDateBegin'] = $shipDateBegin;
        return $this;
    }

    /**
     * Get shipDateBegin
     *
     * @return string
     */
    public function getShipDateBegin()
    {
        return $this->values['shipDateBegin'];
    }

    /**
     * Set shipDateEndDate
     *
     * 
     * Example: 2020-04-01
     * @param string $shipDateEndDate
     * @return $this
     */
    public function setShipDateEndDate($shipDateEndDate)
    {
        $this->values['shipDateEndDate'] = $shipDateEndDate;
        return $this;
    }

    /**
     * Get shipDateEndDate
     *
     * @return string
     */
    public function getShipDateEndDate()
    {
        return $this->values['shipDateEndDate'];
    }

    /**
     * Set destinationCountryCode
     *
     * 
     * Example: US
     * @param string $destinationCountryCode
     * @return $this
     */
    public function setDestinationCountryCode($destinationCountryCode)
    {
        $this->values['destinationCountryCode'] = $destinationCountryCode;
        return $this;
    }

    /**
     * Get destinationCountryCode
     *
     * @return string
     */
    public function getDestinationCountryCode()
    {
        return $this->values['destinationCountryCode'];
    }

    /**
     * Set destinationPostalCode
     *
     * 
     * Example: 75063
     * @param string $destinationPostalCode
     * @return $this
     */
    public function setDestinationPostalCode($destinationPostalCode)
    {
        $this->values['destinationPostalCode'] = $destinationPostalCode;
        return $this;
    }

    /**
     * Get destinationPostalCode
     *
     * @return string
     */
    public function getDestinationPostalCode()
    {
        return $this->values['destinationPostalCode'];
    }
}
