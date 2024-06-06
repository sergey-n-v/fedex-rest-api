<?php
namespace FedEx\AvailabilityService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * These are Email details for the return shipment.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $merchantPhoneNumber
 * @property string $allowedSpecialService

 */
class AvReturnEmailDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvReturnEmailDetail';

    /**
     * This is the merchant phone number. Is Required for Email Return Labels.<br>Example: 19012635656
     *
     * 
     * Example: 1234567890
     * @param string $merchantPhoneNumber
     * @return $this
     */
    public function setMerchantPhoneNumber($merchantPhoneNumber)
    {
        $this->values['merchantPhoneNumber'] = $merchantPhoneNumber;
        return $this;
    }

    /**
     * Get merchantPhoneNumber
     *
     * @return string
     */
    public function getMerchantPhoneNumber()
    {
        return $this->values['merchantPhoneNumber'];
    }

    /**
     * Indicate the allowed (merchant-authorized) special services which may be selected when the subsequent shipment is created.<br>Only services represented in EmailLabelAllowedSpecialServiceType will be controlled by this list.<br>Example :[SATURDAY_DELIVERY]
     *
     * simpleClass: AvAllowedSpecialService
     * Example: ["SATURDAY_DELIVERY"]
     * @param string $allowedSpecialService
     * @return $this
     */
    public function setAllowedSpecialService(array $allowedSpecialService)
    {
        $this->values['allowedSpecialService'] = $allowedSpecialService;
        return $this;
    }

    /**
     * Get allowedSpecialService
     *
     * @return string
     */
    public function getAllowedSpecialService()
    {
        return $this->values['allowedSpecialService'];
    }
}
