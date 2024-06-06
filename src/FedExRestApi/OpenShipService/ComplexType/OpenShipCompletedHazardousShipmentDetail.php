<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Completed shipment level hazardous commodity information.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property OpenShipCompletedHazardousSummaryDetail $hazardousSummaryDetail
 * @property OpenShipAdrLicenseDetail $adrLicense
 * @property OpenShipShipmentDryIceDetail $dryIceDetail

 */
class OpenShipCompletedHazardousShipmentDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipCompletedHazardousShipmentDetail';

    /**
     * Set hazardousSummaryDetail
     *
     *
     * Example:
     * @param OpenShipCompletedHazardousSummaryDetail $hazardousSummaryDetail
     * @return $this
     */
    public function setHazardousSummaryDetail(OpenShipCompletedHazardousSummaryDetail $hazardousSummaryDetail)
    {
        $this->values['hazardousSummaryDetail'] = $hazardousSummaryDetail;
        return $this;
    }

    /**
     * Get hazardousSummaryDetail
     *
     * @return OpenShipCompletedHazardousSummaryDetail
     */
    public function getHazardousSummaryDetail()
    {
        return $this->values['hazardousSummaryDetail'];
    }

    /**
     * Set adrLicense
     *
     *
     * Example:
     * @param OpenShipAdrLicenseDetail $adrLicense
     * @return $this
     */
    public function setAdrLicense(OpenShipAdrLicenseDetail $adrLicense)
    {
        $this->values['adrLicense'] = $adrLicense;
        return $this;
    }

    /**
     * Get adrLicense
     *
     * @return OpenShipAdrLicenseDetail
     */
    public function getAdrLicense()
    {
        return $this->values['adrLicense'];
    }

    /**
     * Set dryIceDetail
     *
     *
     * Example:
     * @param OpenShipShipmentDryIceDetail $dryIceDetail
     * @return $this
     */
    public function setDryIceDetail(OpenShipShipmentDryIceDetail $dryIceDetail)
    {
        $this->values['dryIceDetail'] = $dryIceDetail;
        return $this;
    }

    /**
     * Get dryIceDetail
     *
     * @return OpenShipShipmentDryIceDetail
     */
    public function getDryIceDetail()
    {
        return $this->values['dryIceDetail'];
    }
}
