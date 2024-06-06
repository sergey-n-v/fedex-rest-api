<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Use this object to specify details to generate the OP-900 document for hazardous material packages.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property ShipCustomerImageUsage[] $customerImageUsages
 * @property string $signatureName
 * @property ShipShippingDocumentFormat $documentFormat

 */
class ShipOp900Detail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipOp900Detail';

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
     * Set signatureName
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
