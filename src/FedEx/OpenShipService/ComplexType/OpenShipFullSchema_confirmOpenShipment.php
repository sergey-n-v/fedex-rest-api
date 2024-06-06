<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * OpenShipFullSchema_confirmOpenShipment
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $labelResponseOptions
 * @property string $edtRequestType
 * @property OpenShipLabelSpecification $labelSpecification
 * @property string $index
 * @property OpenShipShippingDocumentSpecification $shippingDocumentSpecification
 * @property OpenShipAccountNumber $accountNumber

 */
class OpenShipFullSchema_confirmOpenShipment extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipFullSchema_confirmOpenShipment';

    /**
     * Set labelResponseOptions
     *
     * simpleClass: OpenShipLabelResponseOptions
     * Example: 
     * @param string $labelResponseOptions
     * @return $this
     */
    public function setLabelResponseOptions($labelResponseOptions)
    {
        $this->values['labelResponseOptions'] = $labelResponseOptions;
        return $this;
    }

    /**
     * Get labelResponseOptions
     *
     * @return string
     */
    public function getLabelResponseOptions()
    {
        return $this->values['labelResponseOptions'];
    }

    /**
     * Indicate whether to have estimated duties and taxes provided with the rate quotes on this shipment. Only applies for International Shipment.
     *
     * simpleClass: OpenShipEdtRequestType
     * Example: 
     * @param string $edtRequestType
     * @return $this
     */
    public function setEdtRequestType($edtRequestType)
    {
        $this->values['edtRequestType'] = $edtRequestType;
        return $this;
    }

    /**
     * Get edtRequestType
     *
     * @return string
     */
    public function getEdtRequestType()
    {
        return $this->values['edtRequestType'];
    }

    /**
     * Set labelSpecification
     *
     * 
     * Example: 
     * @param OpenShipLabelSpecification $labelSpecification
     * @return $this
     */
    public function setLabelSpecification(OpenShipLabelSpecification $labelSpecification)
    {
        $this->values['labelSpecification'] = $labelSpecification;
        return $this;
    }

    /**
     * Get labelSpecification
     *
     * @return OpenShipLabelSpecification
     */
    public function getLabelSpecification()
    {
        return $this->values['labelSpecification'];
    }

    /**
     * This is a unique value assigned to the already created Open Shipment. If this isn’t available then provide the master tracking number.<br>Example: Test1234
     *
     * 
     * Example: Test1234
     * @param string $index
     * @return $this
     */
    public function setIndex($index)
    {
        $this->values['index'] = $index;
        return $this;
    }

    /**
     * Get index
     *
     * @return string
     */
    public function getIndex()
    {
        return $this->values['index'];
    }

    /**
     * Set shippingDocumentSpecification
     *
     * 
     * Example: 
     * @param OpenShipShippingDocumentSpecification $shippingDocumentSpecification
     * @return $this
     */
    public function setShippingDocumentSpecification(OpenShipShippingDocumentSpecification $shippingDocumentSpecification)
    {
        $this->values['shippingDocumentSpecification'] = $shippingDocumentSpecification;
        return $this;
    }

    /**
     * Get shippingDocumentSpecification
     *
     * @return OpenShipShippingDocumentSpecification
     */
    public function getShippingDocumentSpecification()
    {
        return $this->values['shippingDocumentSpecification'];
    }

    /**
     * Set accountNumber
     *
     * 
     * Example: 
     * @param OpenShipPartyAccountNumber $accountNumber
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
     * @return OpenShipPartyAccountNumber
     */
    public function getAccountNumber()
    {
        return $this->values['accountNumber'];
    }
}
