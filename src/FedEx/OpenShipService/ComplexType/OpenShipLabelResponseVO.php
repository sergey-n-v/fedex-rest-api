<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

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
 * @property OpenShipAlert[] $alerts
 * @property string $encodedLabel
 * @property string $url

 */
class OpenShipLabelResponseVO extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipLabelResponseVO';

    /**
     * This is the content key for the document/label.<br>Example: content key
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
     * These are the number of copies to print for the specific document type.<br>Example: 10
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
     * Indicates the type of document/label.
     *
     * simpleClass: OpenShipContentType
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
     * This is a tracking number for the package. <br>Example: 49XXX0000XXX20032835<br>
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
     * This is the document type.<br>Example: PDF
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
     * These are alerts received in the label response.
     *
     * 
     * Example: 
     * @param OpenShipAlert[] $alerts
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
     * @return OpenShipAlert[]
     */
    public function getAlerts()
    {
        return $this->values['alerts'];
    }

    /**
     * Specifies if the document is encoded.<br>Example: encoded label
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
     * The URL of the shipping document/label<br>Example: https://.../document/v2/document/retrieve/SH,794816968200_Merge/isLabel=true&autoPrint=false<br><br><i>Note: The URL once created will be active for 24 hours.</i>
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
