<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Indicate the payer Information responsible for paying for the shipment. <br>Note: credit card payment is not applicable.<br>Payor is mandatory when the paymentType is RECIPIENT, THIRD_PARTY or COLLECT.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property OpenShipResponsiblePartyParty $responsibleParty

 */
class OpenShipPayor extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipPayor';

    /**
     * Set responsibleParty
     *
     * 
     * Example: 
     * @param OpenShipResponsiblePartyParty $responsibleParty
     * @return $this
     */
    public function setResponsibleParty(OpenShipResponsiblePartyParty $responsibleParty)
    {
        $this->values['responsibleParty'] = $responsibleParty;
        return $this;
    }

    /**
     * Get responsibleParty
     *
     * @return OpenShipResponsiblePartyParty
     */
    public function getResponsibleParty()
    {
        return $this->values['responsibleParty'];
    }
}
