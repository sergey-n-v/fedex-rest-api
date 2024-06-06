<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the payment details specifying the method and means of payment to FedEx for providing shipping services.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $paymentType
 * @property OpenShipPayor $payor

 */
class OpenShipPayment extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipPayment';

    /**
     * Specifies the payment Type. <br>Note: This is required for Express, Ground and SmartPost shipments.<br> The payment type COLLECT is applicable only for Ground shipments.
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

    /**
     * Set payor
     *
     * 
     * Example: 
     * @param OpenShipPayor $payor
     * @return $this
     */
    public function setPayor(OpenShipPayor $payor)
    {
        $this->values['payor'] = $payor;
        return $this;
    }

    /**
     * Get payor
     *
     * @return OpenShipPayor
     */
    public function getPayor()
    {
        return $this->values['payor'];
    }
}
