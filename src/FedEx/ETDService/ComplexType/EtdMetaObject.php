<?php
namespace FedEx\ETDService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Indicate the shipment metadata associated with the document to be uploaded.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $shipDocumentType
 * @property string $formCode
 * @property string $trackingNumber
 * @property string $shipmentDate
 * @property string $originLocationCode
 * @property string $originCountryCode
 * @property string $destinationLocationCode
 * @property string $destinationCountryCode

 */
class EtdMetaObject extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'EtdMetaObject';

    /**
     * Set shipDocumentType
     *
     * simpleClass: EtdShipDocumentType
     * Example: COMMERCIAL_INVOICE
     * @param string $shipDocumentType
     * @return $this
     */
    public function setShipDocumentType($shipDocumentType)
    {
        $this->values['shipDocumentType'] = $shipDocumentType;
        return $this;
    }

    /**
     * Get shipDocumentType
     *
     * @return string
     */
    public function getShipDocumentType()
    {
        return $this->values['shipDocumentType'];
    }

    /**
     * Set formCode
     *
     * 
     * Example: USMCA
     * @param string $formCode
     * @return $this
     */
    public function setFormCode($formCode)
    {
        $this->values['formCode'] = $formCode;
        return $this;
    }

    /**
     * Get formCode
     *
     * @return string
     */
    public function getFormCode()
    {
        return $this->values['formCode'];
    }

    /**
     * Set trackingNumber
     *
     * 
     * Example: 794791292805
     * @param string $trackingNumber
     * @return $this
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->values['trackingNumber'] = $trackingNumber;
        return $this;
    }

    /**
     * Get trackingNumber
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->values['trackingNumber'];
    }

    /**
     * Set shipmentDate
     *
     * 
     * Example: 2021-02-17T00:00:00
     * @param string $shipmentDate
     * @return $this
     */
    public function setShipmentDate($shipmentDate)
    {
        $this->values['shipmentDate'] = $shipmentDate;
        return $this;
    }

    /**
     * Get shipmentDate
     *
     * @return string
     */
    public function getShipmentDate()
    {
        return $this->values['shipmentDate'];
    }

    /**
     * Set originLocationCode
     *
     * 
     * Example: GVTKK
     * @param string $originLocationCode
     * @return $this
     */
    public function setOriginLocationCode($originLocationCode)
    {
        $this->values['originLocationCode'] = $originLocationCode;
        return $this;
    }

    /**
     * Get originLocationCode
     *
     * @return string
     */
    public function getOriginLocationCode()
    {
        return $this->values['originLocationCode'];
    }

    /**
     * Set originCountryCode
     *
     * 
     * Example: US
     * @param string $originCountryCode
     * @return $this
     */
    public function setOriginCountryCode($originCountryCode)
    {
        $this->values['originCountryCode'] = $originCountryCode;
        return $this;
    }

    /**
     * Get originCountryCode
     *
     * @return string
     */
    public function getOriginCountryCode()
    {
        return $this->values['originCountryCode'];
    }

    /**
     * Set destinationLocationCode
     *
     * 
     * Example: JNUA
     * @param string $destinationLocationCode
     * @return $this
     */
    public function setDestinationLocationCode($destinationLocationCode)
    {
        $this->values['destinationLocationCode'] = $destinationLocationCode;
        return $this;
    }

    /**
     * Get destinationLocationCode
     *
     * @return string
     */
    public function getDestinationLocationCode()
    {
        return $this->values['destinationLocationCode'];
    }

    /**
     * Set destinationCountryCode
     *
     * 
     * Example: CA
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
}
