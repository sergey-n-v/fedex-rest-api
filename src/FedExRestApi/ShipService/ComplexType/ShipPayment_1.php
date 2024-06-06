<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * This is a payment type, basically indicates who is the payor for the shipment.Conditional required for International Shipments
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property ShipPayor_1 $payor
 * @property ShipBillingDetails $billingDetails
 * @property string $paymentType

 */
class ShipPayment_1 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipPayment_1';

    /**
     * Set payor
     *
     *
     * Example:
     * @param ShipPayor_1 $payor
     * @return $this
     */
    public function setPayor(ShipPayor_1 $payor)
    {
        $this->values['payor'] = $payor;
        return $this;
    }

    /**
     * Get payor
     *
     * @return ShipPayor_1
     */
    public function getPayor()
    {
        return $this->values['payor'];
    }

    /**
     * Set billingDetails
     *
     *
     * Example:
     * @param ShipBillingDetails $billingDetails
     * @return $this
     */
    public function setBillingDetails(ShipBillingDetails $billingDetails)
    {
        $this->values['billingDetails'] = $billingDetails;
        return $this;
    }

    /**
     * Get billingDetails
     *
     * @return ShipBillingDetails
     */
    public function getBillingDetails()
    {
        return $this->values['billingDetails'];
    }

    /**
     * Set paymentType
     *
     * simpleClass: ShipPaymentType
     * Example:
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
