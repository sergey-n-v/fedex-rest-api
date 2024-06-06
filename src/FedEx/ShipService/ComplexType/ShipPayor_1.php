<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Information about the person who is paying for the shipment. Not applicable for credit card payment.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property ShipParty_2 $responsibleParty

 */
class ShipPayor_1 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipPayor_1';

    /**
     * Set responsibleParty
     *
     * 
     * Example: 
     * @param ShipParty_2 $responsibleParty
     * @return $this
     */
    public function setResponsibleParty(ShipParty_2 $responsibleParty)
    {
        $this->values['responsibleParty'] = $responsibleParty;
        return $this;
    }

    /**
     * Get responsibleParty
     *
     * @return ShipParty_2
     */
    public function getResponsibleParty()
    {
        return $this->values['responsibleParty'];
    }
}
