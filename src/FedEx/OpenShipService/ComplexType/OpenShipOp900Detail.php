<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Use this object to specify details to generate the OP-900 document for hazardous material packages.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property OpenShipCustomerImageUsage[] $customerImageUsages
 * @property string $signatureName
 * @property OpenShipShippingDocumentFormat $documentFormat

 */
class OpenShipOp900Detail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipOp900Detail';

    /**
     * Specify the use and identification of supplied images to be used on document.
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
     * Indicates the name to be printed as signature on the document instead of (or in addition to) a signature image.<br>Example: John Hill
     *
     * 
     * Example: Signature Name
     * @param string $signatureName
     * @return $this
     */
    public function setSignatureName($signatureName)
    {
        $this->values['signatureName'] = $signatureName;
        return $this;
    }

    /**
     * Get signatureName
     *
     * @return string
     */
    public function getSignatureName()
    {
        return $this->values['signatureName'];
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
