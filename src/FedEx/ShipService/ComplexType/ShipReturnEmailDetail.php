<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

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
class ShipReturnEmailDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipReturnEmailDetail';

    /**
     * Set merchantPhoneNumber
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
     * Set allowedSpecialService
     *
     * simpleClass: ShipAllowedSpecialService
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
