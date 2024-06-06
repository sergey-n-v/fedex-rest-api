<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The instructions indicating how to print the Commercial Invoice( e.g. image type) Specifies characteristics of a shipping document to be produced.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property ShipCustomerImageUsage[] $customerImageUsages
 * @property ShipShippingDocumentFormat $documentFormat

 */
class ShipCommercialInvoiceDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipCommercialInvoiceDetail';

    /**
     * Set customerImageUsages
     *
     * 
     * Example: 
     * @param ShipCustomerImageUsage[] $customerImageUsages
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
     * @return ShipCustomerImageUsage[]
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
     * @param ShipShippingDocumentFormat $documentFormat
     * @return $this
     */
    public function setDocumentFormat(ShipShippingDocumentFormat $documentFormat)
    {
        $this->values['documentFormat'] = $documentFormat;
        return $this;
    }

    /**
     * Get documentFormat
     *
     * @return ShipShippingDocumentFormat
     */
    public function getDocumentFormat()
    {
        return $this->values['documentFormat'];
    }
}
