<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Additional Tracking number information like nickname, notes, shipment attributes etc.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property boolean $hasAssociatedShipments
 * @property string $nickname
 * @property TrackPackageIdentifier[] $packageIdentifiers
 * @property string $shipmentNotes

 */
class TrackAdditionalTrackingInfo extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackAdditionalTrackingInfo';

    /**
     * Set hasAssociatedShipments
     *
     * 
     * 
     * @param boolean $hasAssociatedShipments
     * @return $this
     */
    public function setHasAssociatedShipments($hasAssociatedShipments)
    {
        $this->values['hasAssociatedShipments'] = $hasAssociatedShipments;
        return $this;
    }

    /**
     * Get hasAssociatedShipments
     *
     * @return boolean
     */
    public function getHasAssociatedShipments()
    {
        return $this->values['hasAssociatedShipments'];
    }

    /**
     * Set nickname
     *
     * 
     * Example: shipment nickname
     * @param string $nickname
     * @return $this
     */
    public function setNickname($nickname)
    {
        $this->values['nickname'] = $nickname;
        return $this;
    }

    /**
     * Get nickname
     *
     * @return string
     */
    public function getNickname()
    {
        return $this->values['nickname'];
    }

    /**
     * Set packageIdentifiers
     *
     * 
     * Example: 
     * @param TrackPackageIdentifier[] $packageIdentifiers
     * @return $this
     */
    public function setPackageIdentifiers(array $packageIdentifiers)
    {
        $this->values['packageIdentifiers'] = $packageIdentifiers;
        return $this;
    }

    /**
     * Get packageIdentifiers
     *
     * @return TrackPackageIdentifier[]
     */
    public function getPackageIdentifiers()
    {
        return $this->values['packageIdentifiers'];
    }

    /**
     * Set shipmentNotes
     *
     * 
     * Example: shipment notes
     * @param string $shipmentNotes
     * @return $this
     */
    public function setShipmentNotes($shipmentNotes)
    {
        $this->values['shipmentNotes'] = $shipmentNotes;
        return $this;
    }

    /**
     * Get shipmentNotes
     *
     * @return string
     */
    public function getShipmentNotes()
    {
        return $this->values['shipmentNotes'];
    }
}
