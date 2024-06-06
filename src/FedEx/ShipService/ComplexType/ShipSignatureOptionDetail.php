<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This element specifies Signature option details.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $signatureReleaseNumber

 */
class ShipSignatureOptionDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipSignatureOptionDetail';

    /**
     * Set signatureReleaseNumber
     *
     * 
     * Example: 23456
     * @param string $signatureReleaseNumber
     * @return $this
     */
    public function setSignatureReleaseNumber($signatureReleaseNumber)
    {
        $this->values['signatureReleaseNumber'] = $signatureReleaseNumber;
        return $this;
    }

    /**
     * Get signatureReleaseNumber
     *
     * @return string
     */
    public function getSignatureReleaseNumber()
    {
        return $this->values['signatureReleaseNumber'];
    }
}
