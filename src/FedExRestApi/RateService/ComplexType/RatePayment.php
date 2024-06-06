<?php
namespace FedExRestApi\RateService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * These are details about shipment payment. Value payor is optional when paymentType provided as SENDER.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property RatePayor $payor
 * @property string $paymentType

 */
class RatePayment extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RatePayment';

    /**
     * Set payor
     *
     *
     * Example:
     * @param RatePayor $payor
     * @return $this
     */
    public function setPayor(RatePayor $payor)
    {
        $this->values['payor'] = $payor;
        return $this;
    }

    /**
     * Get payor
     *
     * @return RatePayor
     */
    public function getPayor()
    {
        return $this->values['payor'];
    }

    /**
     * Set paymentType
     *
     * simpleClass: RatePaymentType
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
