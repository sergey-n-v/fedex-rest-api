<?php
namespace FedExRestApi\AddressValidationService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * This is the Address in detail to be resolved.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $streetLines
 * @property string $city
 * @property  $stateOrProvinceCode
 * @property  $postalCode
 * @property string $countryCode

 */
class AddressValidationAddress extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AddressValidationAddress';

    /**
     * Indicate the combination of number, street name. etc. <br>Example: ["7372 PARKRIDGE BLVD", "APT 286, 2903 sprank"].<br><br>Note:<ul><li>At least one line is required for a valid physical address; empty lines should not be included.</li><li>Maximum up to three lines & no error check if entered more than this limit.</li><li>Recommended limit per line is 35 characters.</li></ul>
     *
     *
     * Example: ["7372 PARKRIDGE BLVD","APT 286","2903 sprank"]
     * @param string $streetLines
     * @return $this
     */
    public function setStreetLines(array $streetLines)
    {
        $this->values['streetLines'] = $streetLines;
        return $this;
    }

    /**
     * Get streetLines
     *
     * @return string
     */
    public function getStreetLines()
    {
        return $this->values['streetLines'];
    }

    /**
     * Indicate the name of city, town, etc.<br><br>Note: City is mandatory, When postalcode is not provided and includeResolutionTokens value is true in the request.
     *
     *
     * Example: IRVING
     * @param string $city
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
     * @return string
     */
    public function getCity()
    {
        return $this->values['city'];
    }

    /**
     * Indicate the State or Province codes. The Format and presence of this field may vary depending on the country.<br>Example: TX<br><a onclick='loadDocReference("canadaprovincecodes")'> Click here to see State Or Province Code</a>. Maximum length is 2
     *
     *
     * Example: TX
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

    /**
     * Indicate the Postal Code which is an identification code of a region (usually small) for easier and accurate mail/package delivery. The format and presence of this field may vary depending on the country.<br> Example: 75063-8659<br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal Code</a>
     *
     *
     * Example: 75063-8659
     * @param  $postalCode
     * @return $this
     */
    public function setPostalCode($postalCode)
    {
        $this->values['postalCode'] = $postalCode;
        return $this;
    }

    /**
     * Get postalCode
     *
     * @return
     */
    public function getPostalCode()
    {
        return $this->values['postalCode'];
    }

    /**
     * Specify the ISO Alpha2 code of the country.<br>Example: US <br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     *
     *
     * Example: US
     * @param string $countryCode
     * @return $this
     */
    public function setCountryCode($countryCode)
    {
        $this->values['countryCode'] = $countryCode;
        return $this;
    }

    /**
     * Get countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->values['countryCode'];
    }
}
