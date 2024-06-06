<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Use this object to specify details to generate general agency agreement detail.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property ShipShippingDocumentFormat $documentFormat

 */
class ShipGeneralAgencyAgreementDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipGeneralAgencyAgreementDetail';

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
