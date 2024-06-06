<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the details around the ADR license required for shipping.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property ShipLicenseOrPermitDetail $licenseOrPermitDetail

 */
class ShipAdrLicenseDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipAdrLicenseDetail';

    /**
     * Set licenseOrPermitDetail
     *
     * 
     * Example: 
     * @param ShipLicenseOrPermitDetail $licenseOrPermitDetail
     * @return $this
     */
    public function setLicenseOrPermitDetail(ShipLicenseOrPermitDetail $licenseOrPermitDetail)
    {
        $this->values['licenseOrPermitDetail'] = $licenseOrPermitDetail;
        return $this;
    }

    /**
     * Get licenseOrPermitDetail
     *
     * @return ShipLicenseOrPermitDetail
     */
    public function getLicenseOrPermitDetail()
    {
        return $this->values['licenseOrPermitDetail'];
    }
}
