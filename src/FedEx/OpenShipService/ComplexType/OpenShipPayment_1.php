<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This is a payment type, basically indicates who is the payor for the shipment.Conditional required for International Shipments
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property OpenShipPayor_1 $payor
 * @property OpenShipBillingDetails $billingDetails
 * @property string $paymentType

 */
class OpenShipPayment_1 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipPayment_1';

    /**
     * Set payor
     *
     * 
     * Example: 
     * @param OpenShipPayor_1 $payor
     * @return $this
     */
    public function setPayor(OpenShipPayor_1 $payor)
    {
        $this->values['payor'] = $payor;
        return $this;
    }

    /**
     * Get payor
     *
     * @return OpenShipPayor_1
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
     * @param OpenShipBillingDetails $billingDetails
     * @return $this
     */
    public function setBillingDetails(OpenShipBillingDetails $billingDetails)
    {
        $this->values['billingDetails'] = $billingDetails;
        return $this;
    }

    /**
     * Get billingDetails
     *
     * @return OpenShipBillingDetails
     */
    public function getBillingDetails()
    {
        return $this->values['billingDetails'];
    }

    /**
     * This is a payment type, basically indicates who is the payor for the shipment.<br>Required for Express and Ground.<br>The payment type COLLECT is applicable only for Ground shipments.
     *
     * simpleClass: OpenShipPaymentType
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
