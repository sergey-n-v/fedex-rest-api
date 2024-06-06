<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * These are International Traffic In Arms Regulations shipment service Details.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $licenseOrExemptionNumber

 */
class RateInternationalTrafficInArmsRegulationsDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateInternationalTrafficInArmsRegulationsDetail';

    /**
     * Set licenseOrExemptionNumber
     *
     * 
     * Example: 432345
     * @param string $licenseOrExemptionNumber
     * @return $this
     */
    public function setLicenseOrExemptionNumber($licenseOrExemptionNumber)
    {
        $this->values['licenseOrExemptionNumber'] = $licenseOrExemptionNumber;
        return $this;
    }

    /**
     * Get licenseOrExemptionNumber
     *
     * @return string
     */
    public function getLicenseOrExemptionNumber()
    {
        return $this->values['licenseOrExemptionNumber'];
    }
}
