<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Specifies the payment details specifying the method and means of payment to FedEx for providing shipping services.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $paymentType
 * @property ShipPayor $payor

 */
class ShipPayment extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipPayment';

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

    /**
     * Set payor
     *
     *
     * Example:
     * @param ShipPayor $payor
     * @return $this
     */
    public function setPayor(ShipPayor $payor)
    {
        $this->values['payor'] = $payor;
        return $this;
    }

    /**
     * Get payor
     *
     * @return ShipPayor
     */
    public function getPayor()
    {
        return $this->values['payor'];
    }
}
