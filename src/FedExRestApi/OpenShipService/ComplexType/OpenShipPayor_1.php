<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Information about the person who is paying for the shipment. Not applicable for credit card payment.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property OpenShipParty_2 $responsibleParty

 */
class OpenShipPayor_1 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipPayor_1';

    /**
     * Set responsibleParty
     *
     *
     * Example:
     * @param OpenShipParty_2 $responsibleParty
     * @return $this
     */
    public function setResponsibleParty(OpenShipParty_2 $responsibleParty)
    {
        $this->values['responsibleParty'] = $responsibleParty;
        return $this;
    }

    /**
     * Get responsibleParty
     *
     * @return OpenShipParty_2
     */
    public function getResponsibleParty()
    {
        return $this->values['responsibleParty'];
    }
}
