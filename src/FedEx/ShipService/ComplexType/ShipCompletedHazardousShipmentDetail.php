<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Completed shipment level hazardous commodity information.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property ShipCompletedHazardousSummaryDetail $hazardousSummaryDetail
 * @property ShipAdrLicenseDetail $adrLicense
 * @property ShipShipmentDryIceDetail $dryIceDetail

 */
class ShipCompletedHazardousShipmentDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipCompletedHazardousShipmentDetail';

    /**
     * Set hazardousSummaryDetail
     *
     * 
     * Example: 
     * @param ShipCompletedHazardousSummaryDetail $hazardousSummaryDetail
     * @return $this
     */
    public function setHazardousSummaryDetail(ShipCompletedHazardousSummaryDetail $hazardousSummaryDetail)
    {
        $this->values['hazardousSummaryDetail'] = $hazardousSummaryDetail;
        return $this;
    }

    /**
     * Get hazardousSummaryDetail
     *
     * @return ShipCompletedHazardousSummaryDetail
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
     * @param ShipAdrLicenseDetail $adrLicense
     * @return $this
     */
    public function setAdrLicense(ShipAdrLicenseDetail $adrLicense)
    {
        $this->values['adrLicense'] = $adrLicense;
        return $this;
    }

    /**
     * Get adrLicense
     *
     * @return ShipAdrLicenseDetail
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
     * @param ShipShipmentDryIceDetail $dryIceDetail
     * @return $this
     */
    public function setDryIceDetail(ShipShipmentDryIceDetail $dryIceDetail)
    {
        $this->values['dryIceDetail'] = $dryIceDetail;
        return $this;
    }

    /**
     * Get dryIceDetail
     *
     * @return ShipShipmentDryIceDetail
     */
    public function getDryIceDetail()
    {
        return $this->values['dryIceDetail'];
    }
}
