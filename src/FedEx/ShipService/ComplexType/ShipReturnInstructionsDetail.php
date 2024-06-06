<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * These are return instruction details which will be returned in the transaction to be printed on Return Label.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $customText
 * @property ShipReturnShippingDocumentFormat $documentFormat

 */
class ShipReturnInstructionsDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipReturnInstructionsDetail';

    /**
     * Set customText
     *
     * 
     * Example: This is additional text printed on Return instr
     * @param string $customText
     * @return $this
     */
    public function setCustomText($customText)
    {
        $this->values['customText'] = $customText;
        return $this;
    }

    /**
     * Get customText
     *
     * @return string
     */
    public function getCustomText()
    {
        return $this->values['customText'];
    }

    /**
     * Set documentFormat
     *
     * 
     * Example: 
     * @param ShipReturnShippingDocumentFormat $documentFormat
     * @return $this
     */
    public function setDocumentFormat(ShipReturnShippingDocumentFormat $documentFormat)
    {
        $this->values['documentFormat'] = $documentFormat;
        return $this;
    }

    /**
     * Get documentFormat
     *
     * @return ShipReturnShippingDocumentFormat
     */
    public function getDocumentFormat()
    {
        return $this->values['documentFormat'];
    }
}
