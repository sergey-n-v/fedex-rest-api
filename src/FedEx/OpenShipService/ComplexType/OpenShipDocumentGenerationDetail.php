<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Indicates the document generation detail information.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $letterhead
 * @property string $electronicSignature
 * @property int $minimumCopiesRequired
 * @property string $type

 */
class OpenShipDocumentGenerationDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipDocumentGenerationDetail';

    /**
     * Indicates the letterhead requirement type.<br>Example: OPTIONAL
     *
     * 
     * Example: 
     * @param string $letterhead
     * @return $this
     */
    public function setLetterhead($letterhead)
    {
        $this->values['letterhead'] = $letterhead;
        return $this;
    }

    /**
     * Get letterhead
     *
     * @return string
     */
    public function getLetterhead()
    {
        return $this->values['letterhead'];
    }

    /**
     * Indicates electronic signature requirement type.<br>Example:  OPTIONAL
     *
     * 
     * Example: 
     * @param string $electronicSignature
     * @return $this
     */
    public function setElectronicSignature($electronicSignature)
    {
        $this->values['electronicSignature'] = $electronicSignature;
        return $this;
    }

    /**
     * Get electronicSignature
     *
     * @return string
     */
    public function getElectronicSignature()
    {
        return $this->values['electronicSignature'];
    }

    /**
     * It is a non-Negative Integer.<br>Example: 3
     *
     * 
     * Example: 
     * @param int $minimumCopiesRequired
     * @return $this
     */
    public function setMinimumCopiesRequired($minimumCopiesRequired)
    {
        $this->values['minimumCopiesRequired'] = $minimumCopiesRequired;
        return $this;
    }

    /**
     * Get minimumCopiesRequired
     *
     * @return int
     */
    public function getMinimumCopiesRequired()
    {
        return $this->values['minimumCopiesRequired'];
    }

    /**
     * It is an Enterprise Document Type.<br>Example: COMMERCIAL_INVOICE
     *
     * 
     * Example: 
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['type'] = $type;
        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->values['type'];
    }
}
