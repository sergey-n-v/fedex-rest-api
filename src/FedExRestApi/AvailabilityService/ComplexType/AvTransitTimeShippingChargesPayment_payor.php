<?php
namespace FedExRestApi\AvailabilityService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Information about the person who is paying for the shipment.  Not applicable for credit card payment.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property AvTransitTimeShippingChargesPayment_payor_responsibleParty $responsibleParty

 */
class AvTransitTimeShippingChargesPayment_payor extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvTransitTimeShippingChargesPayment_payor';

    /**
     * Set responsibleParty
     *
     *
     * Example:
     * @param AvTransitTimeShippingChargesPayment_payor_responsibleParty $responsibleParty
     * @return $this
     */
    public function setResponsibleParty(AvTransitTimeShippingChargesPayment_payor_responsibleParty $responsibleParty)
    {
        $this->values['responsibleParty'] = $responsibleParty;
        return $this;
    }

    /**
     * Get responsibleParty
     *
     * @return AvTransitTimeShippingChargesPayment_payor_responsibleParty
     */
    public function getResponsibleParty()
    {
        return $this->values['responsibleParty'];
    }
}
