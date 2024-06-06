<?php
namespace FedEx\AvailabilityService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Messages concerning the ability to provide an accurate delivery commitment on an International commit quote.  These could be messages providing information about why a commitment could not be returned or a successful message such as REQUEST_COMPLETED
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $code
 * @property string $message

 */
class AvCustomerMessage extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvCustomerMessage';

    /**
     * Specifies the message Code received.<br> Example:SERVICE.TYPE.INTERNATIONAL.MESSAGE
     *
     * 
     * Example: SERVICE.TYPE.INTERNATIONAL.MESSAGE
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->values['code'] = $code;
        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->values['code'];
    }

    /**
     * Specifies the message received by the customer.<br>                                  Example: Rate does not include duties & taxes, clearance entry fees or other import fees. The payor of duties/taxes/fees will be responsible for any applicable Clearance Entry Fees.
     *
     * 
     * Example: Rate does not include dities & taxes, clearance entry fees or other import fees.  The payor of duties/taxes/fees will be responsible for any applicable Clearance Entry Fees
     * @param string $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->values['message'] = $message;
        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->values['message'];
    }
}
