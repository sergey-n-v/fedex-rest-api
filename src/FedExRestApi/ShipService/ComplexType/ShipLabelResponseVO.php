<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * These are shipping document/label specific information.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $contentKey
 * @property int $copiesToPrint
 * @property string $contentType
 * @property string $trackingNumber
 * @property string $docType
 * @property ShipAlert[] $alerts
 * @property string $encodedLabel
 * @property string $url

 */
class ShipLabelResponseVO extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipLabelResponseVO';

    /**
     * Set contentKey
     *
     *
     * Example: content key
     * @param string $contentKey
     * @return $this
     */
    public function setContentKey($contentKey)
    {
        $this->values['contentKey'] = $contentKey;
        return $this;
    }

    /**
     * Get contentKey
     *
     * @return string
     */
    public function getContentKey()
    {
        return $this->values['contentKey'];
    }

    /**
     * Set copiesToPrint
     *
     *
     * Example: 10
     * @param int $copiesToPrint
     * @return $this
     */
    public function setCopiesToPrint($copiesToPrint)
    {
        $this->values['copiesToPrint'] = $copiesToPrint;
        return $this;
    }

    /**
     * Get copiesToPrint
     *
     * @return int
     */
    public function getCopiesToPrint()
    {
        return $this->values['copiesToPrint'];
    }

    /**
     * Set contentType
     *
     * simpleClass: ShipContentType
     * Example: COMMERCIAL_INVOICE
     * @param string $contentType
     * @return $this
     */
    public function setContentType($contentType)
    {
        $this->values['contentType'] = $contentType;
        return $this;
    }

    /**
     * Get contentType
     *
     * @return string
     */
    public function getContentType()
    {
        return $this->values['contentType'];
    }

    /**
     * Set trackingNumber
     *
     *
     * Example: 794953535000
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
     * Set docType
     *
     *
     * Example: PDF
     * @param string $docType
     * @return $this
     */
    public function setDocType($docType)
    {
        $this->values['docType'] = $docType;
        return $this;
    }

    /**
     * Get docType
     *
     * @return string
     */
    public function getDocType()
    {
        return $this->values['docType'];
    }

    /**
     * Set alerts
     *
     *
     * Example:
     * @param ShipAlert[] $alerts
     * @return $this
     */
    public function setAlerts(array $alerts)
    {
        $this->values['alerts'] = $alerts;
        return $this;
    }

    /**
     * Get alerts
     *
     * @return ShipAlert[]
     */
    public function getAlerts()
    {
        return $this->values['alerts'];
    }

    /**
     * Set encodedLabel
     *
     *
     * Example: encoded label
     * @param string $encodedLabel
     * @return $this
     */
    public function setEncodedLabel($encodedLabel)
    {
        $this->values['encodedLabel'] = $encodedLabel;
        return $this;
    }

    /**
     * Get encodedLabel
     *
     * @return string
     */
    public function getEncodedLabel()
    {
        return $this->values['encodedLabel'];
    }

    /**
     * Set url
     *
     *
     * Example: https://wwwdev.idev.fedex.com/document/v2/document/retrieve/SH,794810209259_SHIPPING_P/isLabel=true&autoPrint=false
     * @param string $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->values['url'] = $url;
        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->values['url'];
    }
}
