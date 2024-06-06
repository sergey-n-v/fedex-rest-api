<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * These are email details for the return shipment.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $merchantPhoneNumber
 * @property string $allowedSpecialService

 */
class OpenShipReturnEmailDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipReturnEmailDetail';

    /**
     * This is the merchant phone number and required for Email Return Labels.<br>Example: 19012635656
     *
     *
     * Example: 19012635656
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
     * Indicate the allowed (merchant-authorized) special services which may be selected when the subsequent shipment is created.<br>Only services represented in EmailLabelAllowedSpecialServiceType will be controlled by this list.
     *
     * simpleClass: OpenShipAllowedSpecialService
     * Example:
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
