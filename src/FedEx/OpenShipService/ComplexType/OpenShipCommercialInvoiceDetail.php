<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The instructions indicating how to print the Commercial Invoice( e.g. image type) Specifies characteristics of a shipping document to be produced.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property OpenShipCustomerImageUsage[] $customerImageUsages
 * @property OpenShipShippingDocumentFormat $documentFormat

 */
class OpenShipCommercialInvoiceDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipCommercialInvoiceDetail';

    /**
     * Specifies the usage and identification of customer supplied images to be used on this document.
     *
     * 
     * Example: 
     * @param OpenShipCustomerImageUsage[] $customerImageUsages
     * @return $this
     */
    public function setCustomerImageUsages(array $customerImageUsages)
    {
        $this->values['customerImageUsages'] = $customerImageUsages;
        return $this;
    }

    /**
     * Get customerImageUsages
     *
     * @return OpenShipCustomerImageUsage[]
     */
    public function getCustomerImageUsages()
    {
        return $this->values['customerImageUsages'];
    }

    /**
     * Set documentFormat
     *
     * 
     * Example: 
     * @param OpenShipShippingDocumentFormat $documentFormat
     * @return $this
     */
    public function setDocumentFormat(OpenShipShippingDocumentFormat $documentFormat)
    {
        $this->values['documentFormat'] = $documentFormat;
        return $this;
    }

    /**
     * Get documentFormat
     *
     * @return OpenShipShippingDocumentFormat
     */
    public function getDocumentFormat()
    {
        return $this->values['documentFormat'];
    }
}
