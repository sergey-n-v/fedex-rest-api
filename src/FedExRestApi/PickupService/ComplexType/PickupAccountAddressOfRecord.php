<?php
namespace FedExRestApi\PickupService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * PickupAccountAddressOfRecord
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property  $city
 * @property  $stateOrProvinceCode

 */
class PickupAccountAddressOfRecord extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PickupAccountAddressOfRecord';

    /**
     * Placeholder for the pickup city. Max length is 35. <br> Example: Memphis
     *
     *
     * Example: Memphis
     * @param  $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->values['city'] = $city;
        return $this;
    }

    /**
     * Get city
     *
     * @return
     */
    public function getCity()
    {
        return $this->values['city'];
    }

    /**
     * The two character state/proviceCode for the pickup. Max length is 2. <br> Example: ON<br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State/Province Code</a>
     *
     *
     * Example: ON
     * @param  $stateOrProvinceCode
     * @return $this
     */
    public function setStateOrProvinceCode($stateOrProvinceCode)
    {
        $this->values['stateOrProvinceCode'] = $stateOrProvinceCode;
        return $this;
    }

    /**
     * Get stateOrProvinceCode
     *
     * @return
     */
    public function getStateOrProvinceCode()
    {
        return $this->values['stateOrProvinceCode'];
    }
}
