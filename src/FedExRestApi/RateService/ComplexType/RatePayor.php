<?php
namespace FedExRestApi\RateService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * This is payer Information responsible for paying for the shipment.<br>Note: Optional when paymentType is SENDER.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property RateParty_2 $responsibleParty

 */
class RatePayor extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RatePayor';

    /**
     * Set responsibleParty
     *
     *
     * Example:
     * @param RateParty_2 $responsibleParty
     * @return $this
     */
    public function setResponsibleParty(RateParty_2 $responsibleParty)
    {
        $this->values['responsibleParty'] = $responsibleParty;
        return $this;
    }

    /**
     * Get responsibleParty
     *
     * @return RateParty_2
     */
    public function getResponsibleParty()
    {
        return $this->values['responsibleParty'];
    }
}
