<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Use this object to specify the smartpost shipment details. <br>Required for SMARTPOST service. If SmartPostInfoDetail is indicated, the elements below it are also required.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $ancillaryEndorsement
 * @property string $hubId
 * @property string $indicia
 * @property string $specialServices

 */
class OpenShipSmartPostInfoDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipSmartPostInfoDetail';

    /**
     * Indicate the type of ancillary endorsement. Is required for Presorted Standard but not for returns or parcel select. <br>Note: Not all are usable for all ancillary endorsements.<br>For more information, refer to the <a href = 'https://www.fedex.com/en-us/shipping/fedex-smartpost/rates-zones.html' target='_blank'>FedEx SmartPost®</a>.
     *
     * simpleClass: OpenShipAncillaryEndorsement
     * Example: RETURN_SERVICE
     * @param string $ancillaryEndorsement
     * @return $this
     */
    public function setAncillaryEndorsement($ancillaryEndorsement)
    {
        $this->values['ancillaryEndorsement'] = $ancillaryEndorsement;
        return $this;
    }

    /**
     * Get ancillaryEndorsement
     *
     * @return string
     */
    public function getAncillaryEndorsement()
    {
        return $this->values['ancillaryEndorsement'];
    }

    /**
     * Specify the four-digit numeric Hub ID value used for smartport shipments.<br><a onclick='loadDocReference("ground®economy(formerlyknownassmartpost®)hubids")'>click here to see Hub Ids</a>
     *
     *
     * Example: 5015
     * @param string $hubId
     * @return $this
     */
    public function setHubId($hubId)
    {
        $this->values['hubId'] = $hubId;
        return $this;
    }

    /**
     * Get hubId
     *
     * @return string
     */
    public function getHubId()
    {
        return $this->values['hubId'];
    }

    /**
     * Specify the indicia type.<br>Available options include:<ul><li>MEDIA_MAIL</li><li>PARCEL_SELECT (1 LB through 70 LB)</li><li>PRESORTED_BOUND_PRINTED_MATTER</li><li>PRESORTED_STANDARD (less than 1 LB)</li><li>PARCEL_RETURN</li></ul>
     *
     * simpleClass: OpenShipIndicia
     * Example: PRESORTED_STANDARD
     * @param string $indicia
     * @return $this
     */
    public function setIndicia($indicia)
    {
        $this->values['indicia'] = $indicia;
        return $this;
    }

    /**
     * Get indicia
     *
     * @return string
     */
    public function getIndicia()
    {
        return $this->values['indicia'];
    }

    /**
     * Specify the special handling associated with Smartpost Shipment.
     *
     * simpleClass: OpenShipSpecialServices
     * Example: USPS_DELIVERY_CONFIRMATION
     * @param string $specialServices
     * @return $this
     */
    public function setSpecialServices($specialServices)
    {
        $this->values['specialServices'] = $specialServices;
        return $this;
    }

    /**
     * Get specialServices
     *
     * @return string
     */
    public function getSpecialServices()
    {
        return $this->values['specialServices'];
    }
}
