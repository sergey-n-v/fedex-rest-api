<?php
namespace FedEx\ETDService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The response elements received when a image file is uploaded through EDU gateway of single pass.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property EtdImageMetaOutputVO $output
 * @property string $customerTransactionId

 */
class EtdImageUploadServiceOutputVO extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'EtdImageUploadServiceOutputVO';

    /**
     * Set output
     *
     * 
     * Example: 
     * @param EtdImageMetaOutputVO $output
     * @return $this
     */
    public function setOutput(EtdImageMetaOutputVO $output)
    {
        $this->values['output'] = $output;
        return $this;
    }

    /**
     * Get output
     *
     * @return EtdImageMetaOutputVO
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
