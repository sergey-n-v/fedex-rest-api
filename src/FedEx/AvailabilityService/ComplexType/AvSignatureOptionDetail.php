<?php
namespace FedEx\AvailabilityService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * These Signature option details.Required  if SignatureOptions is indicated.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $signatureReleaseNumber

 */
class AvSignatureOptionDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvSignatureOptionDetail';

    /**
     * This is the release number. Required if signature option is NO_SIGNATURE_REQUIRED.<br> Example: 23456
     *
     * 
     * Example: TX64739DL7564
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
