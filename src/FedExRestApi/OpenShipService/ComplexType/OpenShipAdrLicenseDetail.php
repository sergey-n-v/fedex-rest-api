<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Specifies the details around the ADR license required for shipping.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property OpenShipLicenseOrPermitDetail $licenseOrPermitDetail

 */
class OpenShipAdrLicenseDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipAdrLicenseDetail';

    /**
     * Set licenseOrPermitDetail
     *
     *
     * Example:
     * @param OpenShipLicenseOrPermitDetail $licenseOrPermitDetail
     * @return $this
     */
    public function setLicenseOrPermitDetail(OpenShipLicenseOrPermitDetail $licenseOrPermitDetail)
    {
        $this->values['licenseOrPermitDetail'] = $licenseOrPermitDetail;
        return $this;
    }

    /**
     * Get licenseOrPermitDetail
     *
     * @return OpenShipLicenseOrPermitDetail
     */
    public function getLicenseOrPermitDetail()
    {
        return $this->values['licenseOrPermitDetail'];
    }
}
