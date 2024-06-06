<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

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
class ShipSmartPostInfoDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipSmartPostInfoDetail';

    /**
     * Set ancillaryEndorsement
     *
     * simpleClass: ShipAncillaryEndorsement
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
     * Set hubId
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
     * Set indicia
     *
     * simpleClass: ShipIndicia
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
     * Set specialServices
     *
     * simpleClass: ShipSpecialServices
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
