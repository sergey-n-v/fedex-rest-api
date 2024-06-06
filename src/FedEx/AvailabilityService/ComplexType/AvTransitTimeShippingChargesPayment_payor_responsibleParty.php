<?php
namespace FedEx\AvailabilityService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Conditional. The descriptive data for the payor of the shipment and their physical address, contact and account number information.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property AvTransitTimeShipper $address
 * @property AvTransitTimeShippingChargesPayment_payor_responsibleParty_accountNumber $accountNumber

 */
class AvTransitTimeShippingChargesPayment_payor_responsibleParty extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvTransitTimeShippingChargesPayment_payor_responsibleParty';

    /**
     * Set address
     *
     * 
     * Example: 
     * @param AvTransitTimeShipper $address
     * @return $this
     */
    public function setAddress(AvTransitTimeShipper $address)
    {
        $this->values['address'] = $address;
        return $this;
    }

    /**
     * Get address
     *
     * @return AvTransitTimeShipper
     */
    public function getAddress()
    {
        return $this->values['address'];
    }

    /**
     * Set accountNumber
     *
     * 
     * Example: 
     * @param AvTransitTimeShippingChargesPayment_payor_responsibleParty_accountNumber $accountNumber
     * @return $this
     */
    public function setAccountNumber(AvTransitTimeShippingChargesPayment_payor_responsibleParty_accountNumber $accountNumber)
    {
        $this->values['accountNumber'] = $accountNumber;
        return $this;
    }

    /**
     * Get accountNumber
     *
     * @return AvTransitTimeShippingChargesPayment_payor_responsibleParty_accountNumber
     */
    public function getAccountNumber()
    {
        return $this->values['accountNumber'];
    }
}
