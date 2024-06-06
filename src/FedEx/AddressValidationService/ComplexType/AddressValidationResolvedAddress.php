<?php
namespace FedEx\AddressValidationService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * AddressValidationResolvedAddress
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $streetLinesToken
 * @property string $city
 * @property string $stateOrProvinceCode
 * @property string $countryCode
 * @property string $customerMessage
 * @property AddressValidationResolutionToken[] $cityToken
 * @property AddressValidationResolutionToken $postalCodeToken
 * @property AddressValidationParsedPostalCode $parsedPostalCode
 * @property string $classification
 * @property boolean $postOfficeBox
 * @property boolean $normalizedStatusNameDPV
 * @property string $standardizedStatusNameMatchSource
 * @property string $resolutionMethodName
 * @property boolean $ruralRouteHighwayContract
 * @property boolean $generalDelivery
 * @property object $attributes

 */
class AddressValidationResolvedAddress extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AddressValidationResolvedAddress';

    /**
     * Indicates the resolved street address lines.<br>Example: [\"7372 PARKRIDGE BLVD\", \"APT 286, 2903 sprank\"]
     *
     * 
     * Example: ["7372 PARKRIDGE BLVD","APT 286"]
     * @param string $streetLinesToken
     * @return $this
     */
    public function setStreetLinesToken(array $streetLinesToken)
    {
        $this->values['streetLinesToken'] = $streetLinesToken;
        return $this;
    }

    /**
     * Get streetLinesToken
     *
     * @return string
     */
    public function getStreetLinesToken()
    {
        return $this->values['streetLinesToken'];
    }

    /**
     * This is resolved city name.<br> Example: IRVING
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
     * This is resolved state or province code.<br>Example: TX<br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State Or Province Code</a>
     *
     * 
     * Example: TX
     * @param string $stateOrProvinceCode
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
     * @return string
     */
    public function getStateOrProvinceCode()
    {
        return $this->values['stateOrProvinceCode'];
    }

    /**
     * This is resolved ISO alpha 2 country code.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
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

    /**
     * Returns messages pertaining to the resolved address indicating if any additional information is required.<br><br>Following are informational code and messages with respect to the results:<ul><li><i>INVALID.SUITE.NUMBER</i> &ndash; Invalid or missing Apartment/Suite</li><li><i>SUITE.NUMBER.REQUIRED</i> &ndash; Invalid or missing Apartment/Suite</li><li><i>PARTIAL.STREET.MATCH</i> &ndash; A street address is required for delivery. The entered address is a street number range.</li><li><i>MISSING.OR.AMBIGUOUS.DIRECTIONAL</i> &ndash; Invalid or missing address directional.</li><li><i>INTERPOLATED.STREET.ADDRESS</i> &ndash; Unable to confirm exact street number for the entered street name. The address falls within a valid range for the street name.</li><li><i>RRHC.CONVERSION</i> &ndash; A street address is required for delivery. The address has been converted from a rural route.</li></ul>
     *
     * 
     * Example: 
     * @param string $customerMessage
     * @return $this
     */
    public function setCustomerMessage(array $customerMessage)
    {
        $this->values['customerMessage'] = $customerMessage;
        return $this;
    }

    /**
     * Get customerMessage
     *
     * @return string
     */
    public function getCustomerMessage()
    {
        return $this->values['customerMessage'];
    }

    /**
     * This is the resolved city name with a token. The token is an indication to the changes made.<br> Examples: [TOK-1X3256]
     *
     * 
     * Example: ["TOK-1X3256"]
     * @param AddressValidationResolutionToken[] $cityToken
     * @return $this
     */
    public function setCityToken(array $cityToken)
    {
        $this->values['cityToken'] = $cityToken;
        return $this;
    }

    /**
     * Get cityToken
     *
     * @return AddressValidationResolutionToken[]
     */
    public function getCityToken()
    {
        return $this->values['cityToken'];
    }

    /**
     * This is the resolved postal code with a token. The token is an indication to the changes made.
     *
     * 
     * Example: 
     * @param AddressValidationResolutionToken $postalCodeToken
     * @return $this
     */
    public function setPostalCodeToken($postalCodeToken)
    {
        $this->values['postalCodeToken'] = $postalCodeToken;
        return $this;
    }

    /**
     * Get postalCodeToken
     *
     * @return AddressValidationResolutionToken
     */
    public function getPostalCodeToken()
    {
        return $this->values['postalCodeToken'];
    }

    /**
     * Set parsedPostalCode
     *
     * 
     * Example: 
     * @param AddressValidationParsedPostalCode $parsedPostalCode
     * @return $this
     */
    public function setParsedPostalCode(AddressValidationParsedPostalCode $parsedPostalCode)
    {
        $this->values['parsedPostalCode'] = $parsedPostalCode;
        return $this;
    }

    /**
     * Get parsedPostalCode
     *
     * @return AddressValidationParsedPostalCode
     */
    public function getParsedPostalCode()
    {
        return $this->values['parsedPostalCode'];
    }

    /**
     * This is the classification type of a FedEx address.<br>Valid values:<ul><li>BUSINESS</li><li>RESIDENTIAL</li><li>MIXED (If it is a multi-tenant based address and contains both business and residential units.)</li><li>UNKNOWN (If just a zip code is provided, Address Validation Service returns 'unknown' for the business/residential classification.)</li>
     *
     * simpleClass: AddressValidationClassification
     * Example: BUSINESS
     * @param string $classification
     * @return $this
     */
    public function setClassification($classification)
    {
        $this->values['classification'] = $classification;
        return $this;
    }

    /**
     * Get classification
     *
     * @return string
     */
    public function getClassification()
    {
        return $this->values['classification'];
    }

    /**
     * Indicates if the resolved address is a P.O. Box.
     *
     * 
     * Example: 1
     * @param boolean $postOfficeBox
     * @return $this
     */
    public function setPostOfficeBox($postOfficeBox)
    {
        $this->values['postOfficeBox'] = $postOfficeBox;
        return $this;
    }

    /**
     * Get postOfficeBox
     *
     * @return boolean
     */
    public function getPostOfficeBox()
    {
        return $this->values['postOfficeBox'];
    }

    /**
     * Indicates the presence of a delivery point such as a mailbox. Provided only for US addresses that are standardized against Postal Data.
     *
     * 
     * Example: 1
     * @param boolean $normalizedStatusNameDPV
     * @return $this
     */
    public function setNormalizedStatusNameDPV($normalizedStatusNameDPV)
    {
        $this->values['normalizedStatusNameDPV'] = $normalizedStatusNameDPV;
        return $this;
    }

    /**
     * Get normalizedStatusNameDPV
     *
     * @return boolean
     */
    public function getNormalizedStatusNameDPV()
    {
        return $this->values['normalizedStatusNameDPV'];
    }

    /**
     * Indicates the source from which the standardized address is matched. <br> Example: Postal or Map.
     *
     * 
     * Example: Postal
     * @param string $standardizedStatusNameMatchSource
     * @return $this
     */
    public function setStandardizedStatusNameMatchSource($standardizedStatusNameMatchSource)
    {
        $this->values['standardizedStatusNameMatchSource'] = $standardizedStatusNameMatchSource;
        return $this;
    }

    /**
     * Get standardizedStatusNameMatchSource
     *
     * @return string
     */
    public function getStandardizedStatusNameMatchSource()
    {
        return $this->values['standardizedStatusNameMatchSource'];
    }

    /**
     * Indicates the resolution method used to resolve the address. <br>Valid values: <ul><li>USPS_VALIDATE</li><li>CA_VALIDATE</li><li>GENERIC_VALIDATE</li><li>NAVTEQ_GEO_VALIDATE</li><li>TELEATLAS_GEO_VALIDATE</li></ul>
     *
     * 
     * Example: USPS_VALIDATE
     * @param string $resolutionMethodName
     * @return $this
     */
    public function setResolutionMethodName($resolutionMethodName)
    {
        $this->values['resolutionMethodName'] = $resolutionMethodName;
        return $this;
    }

    /**
     * Get resolutionMethodName
     *
     * @return string
     */
    public function getResolutionMethodName()
    {
        return $this->values['resolutionMethodName'];
    }

    /**
     * Indicates if the resolved address is a Rural Route or Highway Contract (US only). It returns true if it is rural route.
     *
     * 
     * 
     * @param boolean $ruralRouteHighwayContract
     * @return $this
     */
    public function setRuralRouteHighwayContract($ruralRouteHighwayContract)
    {
        $this->values['ruralRouteHighwayContract'] = $ruralRouteHighwayContract;
        return $this;
    }

    /**
     * Get ruralRouteHighwayContract
     *
     * @return boolean
     */
    public function getRuralRouteHighwayContract()
    {
        return $this->values['ruralRouteHighwayContract'];
    }

    /**
     * Indicates the mail service is for those without permanent address. The mails for this address are held at a post office. Only applies to addresses that can be standardized against Postal Data. Not provided for US Geo Validated addresses. <br>Note: Only returned when the address cannot be resolved.
     *
     * 
     * 
     * @param boolean $generalDelivery
     * @return $this
     */
    public function setGeneralDelivery($generalDelivery)
    {
        $this->values['generalDelivery'] = $generalDelivery;
        return $this;
    }

    /**
     * Get generalDelivery
     *
     * @return boolean
     */
    public function getGeneralDelivery()
    {
        return $this->values['generalDelivery'];
    }

    /**
     * These are the  key-value pair as additional information returned along with the address processed by the system. These attribute will list what is working and what is not on the input address. For More information, look in to Chapter Address Attributes in the Overview.<br><a onclick='loadDocReference("addressattributes")'>Click here to see Address Attributes</a>
     *
     * 
     * Example: 
     * @param object $attributes
     * @return $this
     */
    public function setAttributes(object $attributes)
    {
        $this->values['attributes'] = $attributes;
        return $this;
    }

    /**
     * Get attributes
     *
     * @return object
     */
    public function getAttributes()
    {
        return $this->values['attributes'];
    }
}
