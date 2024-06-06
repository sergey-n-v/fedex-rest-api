<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Payor is mandatory when the paymentType is RECIPIENT, THIRD_PARTY or COLLECT.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property ShipResponsiblePartyParty $responsibleParty

 */
class ShipPayor extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipPayor';

    /**
     * Set responsibleParty
     *
     *
     * Example:
     * @param ShipResponsiblePartyParty $responsibleParty
     * @return $this
     */
    public function setResponsibleParty(ShipResponsiblePartyParty $responsibleParty)
    {
        $this->values['responsibleParty'] = $responsibleParty;
        return $this;
    }

    /**
     * Get responsibleParty
     *
     * @return ShipResponsiblePartyParty
     */
    public function getResponsibleParty()
    {
        return $this->values['responsibleParty'];
    }
}
