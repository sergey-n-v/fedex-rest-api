<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * These are return instruction details which will be returned in the transaction to be printed on Return Label.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $customText
 * @property OpenShipReturnShippingDocumentFormat $documentFormat

 */
class OpenShipReturnInstructionsDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipReturnInstructionsDetail';

    /**
     * Specify additional information (text) to be inserted into the return document.<br>Example: This is additional text printed on Return Label
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
     * @param OpenShipReturnShippingDocumentFormat $documentFormat
     * @return $this
     */
    public function setDocumentFormat(OpenShipReturnShippingDocumentFormat $documentFormat)
    {
        $this->values['documentFormat'] = $documentFormat;
        return $this;
    }

    /**
     * Get documentFormat
     *
     * @return OpenShipReturnShippingDocumentFormat
     */
    public function getDocumentFormat()
    {
        return $this->values['documentFormat'];
    }
}
