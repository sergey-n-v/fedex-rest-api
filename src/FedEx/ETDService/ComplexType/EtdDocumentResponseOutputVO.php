<?php
namespace FedEx\ETDService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * EtdDocumentResponseOutputVO
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property EtdDocumentUploadServiceOutputVO $output
 * @property string $customerTransactionId

 */
class EtdDocumentResponseOutputVO extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'EtdDocumentResponseOutputVO';

    /**
     * Set output
     *
     * 
     * Example: 
     * @param EtdDocumentUploadServiceOutputVO $output
     * @return $this
     */
    public function setOutput(EtdDocumentUploadServiceOutputVO $output)
    {
        $this->values['output'] = $output;
        return $this;
    }

    /**
     * Get output
     *
     * @return EtdDocumentUploadServiceOutputVO
     */
    public function getOutput()
    {
        return $this->values['output'];
    }

    /**
     * Set customerTransactionId
     *
     * 
     * Example: XXXX_XXX123XXXXX
     * @param string $customerTransactionId
     * @return $this
     */
    public function setCustomerTransactionId($customerTransactionId)
    {
        $this->values['customerTransactionId'] = $customerTransactionId;
        return $this;
    }

    /**
     * Get customerTransactionId
     *
     * @return string
     */
    public function getCustomerTransactionId()
    {
        return $this->values['customerTransactionId'];
    }
}
