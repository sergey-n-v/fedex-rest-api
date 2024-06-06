<?php
namespace FedEx\AvailabilityService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Details about who and how the shipment will be paid for. 'payor' is optional when 'paymentType' provided is SENDER.<br>Note: For services like FedEx International Connect Plus(FICP) & Regional Economy(RE)/Regional Economy Freight(REF) account number is mandatory to be provided under shippingChargesPayment.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property AvTransitTimeShippingChargesPayment_payor $payor
 * @property string $paymentType

 */
class AvTransitTimeShippingChargesPayment extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvTransitTimeShippingChargesPayment';

    /**
     * Set payor
     *
     * 
     * Example: 
     * @param AvTransitTimeShippingChargesPayment_payor $payor
     * @return $this
     */
    public function setPayor(AvTransitTimeShippingChargesPayment_payor $payor)
    {
        $this->values['payor'] = $payor;
        return $this;
    }

    /**
     * Get payor
     *
     * @return AvTransitTimeShippingChargesPayment_payor
     */
    public function getPayor()
    {
        return $this->values['payor'];
    }

    /**
     * Applicable for Express and Ground rates.<br>
Indicates who and how the shipment will be paid for.
     *
     * simpleClass: AvPaymentType
     * Example: COLLECT
     * @param string $paymentType
     * @return $this
     */
    public function setPaymentType($paymentType)
    {
        $this->values['paymentType'] = $paymentType;
        return $this;
    }

    /**
     * Get paymentType
     *
     * @return string
     */
    public function getPaymentType()
    {
        return $this->values['paymentType'];
    }
}
