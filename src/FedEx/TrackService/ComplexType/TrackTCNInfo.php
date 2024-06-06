<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * TrackTCNInfo
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $value
 * @property string $carrierCode
 * @property string $shipDateBegin
 * @property string $shipDateEnd

 */
class TrackTCNInfo extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackTCNInfo';

    /**
     * Set value
     *
     * 
     * Example: N552428361Y555XXX
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
     * Set shipDateEnd
     *
     * 
     * Example: 2020-04-01
     * @param string $shipDateEnd
     * @return $this
     */
    public function setShipDateEnd($shipDateEnd)
    {
        $this->values['shipDateEnd'] = $shipDateEnd;
        return $this;
    }

    /**
     * Get shipDateEnd
     *
     * @return string
     */
    public function getShipDateEnd()
    {
        return $this->values['shipDateEnd'];
    }
}
