<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The instructions indicating how to print the Certificate of Origin ( e.g. whether or not to include the instructions, image type, etc ...)
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property ShipCustomerImageUsage[] $customerImageUsages
 * @property ShipShippingDocumentFormat $documentFormat

 */
class ShipCertificateOfOriginDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipCertificateOfOriginDetail';

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
