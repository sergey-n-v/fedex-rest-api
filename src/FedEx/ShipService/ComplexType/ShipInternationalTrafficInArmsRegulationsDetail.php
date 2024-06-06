<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * These are International Traffic In Arms Regulations shipment service details.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $licenseOrExemptionNumber

 */
class ShipInternationalTrafficInArmsRegulationsDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipInternationalTrafficInArmsRegulationsDetail';

    /**
     * Set licenseOrExemptionNumber
     *
     * 
     * Example: 9871234
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
