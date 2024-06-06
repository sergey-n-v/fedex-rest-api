<?php
namespace FedExRestApi\AvailabilityService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * This field provides the phone Number details for the service.There can be maximum of five types of phoneNumber which can be provided in request.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $phoneNumberType
 * @property string $phoneNumber

 */
class AvFreightPhoneNumberDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvFreightPhoneNumberDetail';

    /**
     * This provides the type of phoneNumber being used in request.<br> Example: <ul><li>FAX</li><li>HOME</li><li>MOBILE</li><li>PAGER</li><li>TOLL_FREE</li><li>WORK</li></ul>
     *
     * simpleClass: AvPhoneNumberType
     * Example: MOBILE
     * @param string $phoneNumberType
     * @return $this
     */
    public function setPhoneNumberType($phoneNumberType)
    {
        $this->values['phoneNumberType'] = $phoneNumberType;
        return $this;
    }

    /**
     * Get phoneNumberType
     *
     * @return string
     */
    public function getPhoneNumberType()
    {
        return $this->values['phoneNumberType'];
    }

    /**
     * This provides the phone number
     *
     *
     * Example: XXXXXXXXX12
     * @param string $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->values['phoneNumber'] = $phoneNumber;
        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->values['phoneNumber'];
    }
}
