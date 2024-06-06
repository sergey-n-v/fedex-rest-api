<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

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
class ShipDocumentGenerationDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipDocumentGenerationDetail';

    /**
     * Set letterhead
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
     * Set electronicSignature
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
     * Set minimumCopiesRequired
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
     * Set type
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
