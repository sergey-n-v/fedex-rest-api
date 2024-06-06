<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Identifies and describes an individual hazardous commodity. For 201001 load, this is based on data from the FedEx Ground Hazardous Materials Shipping Guide.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property int $sequenceNumber
 * @property string $packingInstructions
 * @property string $subsidiaryClasses
 * @property string $labelText
 * @property string $tunnelRestrictionCode
 * @property string $specialProvisions
 * @property string $properShippingNameAndDescription
 * @property string $technicalName
 * @property string $symbols
 * @property string $authorization
 * @property string $attributes
 * @property string $id
 * @property string $packingGroup
 * @property string $properShippingName
 * @property string $hazardClass

 */
class OpenShipValidatedHazardousCommodityDescription extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipValidatedHazardousCommodityDescription';

    /**
     * In conjunction with the regulatory identifier, this field uniquely identifies a specific hazardous materials commodity.<br>Example: 876
     *
     *
     * Example: 876
     * @param int $sequenceNumber
     * @return $this
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->values['sequenceNumber'] = $sequenceNumber;
        return $this;
    }

    /**
     * Get sequenceNumber
     *
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->values['sequenceNumber'];
    }

    /**
     * Specifies Packing Instructions.<br>Example: packingInstructions
     *
     *
     * Example: packingInstructions
     * @param string $packingInstructions
     * @return $this
     */
    public function setPackingInstructions($packingInstructions)
    {
        $this->values['packingInstructions'] = $packingInstructions;
        return $this;
    }

    /**
     * Get packingInstructions
     *
     * @return string
     */
    public function getPackingInstructions()
    {
        return $this->values['packingInstructions'];
    }

    /**
     * Specifies subsidiary Classes.<br>Example:["Subsidiary Classes"]
     *
     *
     * Example: ["Subsidiary Classes"]
     * @param string $subsidiaryClasses
     * @return $this
     */
    public function setSubsidiaryClasses(array $subsidiaryClasses)
    {
        $this->values['subsidiaryClasses'] = $subsidiaryClasses;
        return $this;
    }

    /**
     * Get subsidiaryClasses
     *
     * @return string
     */
    public function getSubsidiaryClasses()
    {
        return $this->values['subsidiaryClasses'];
    }

    /**
     * Specifies the text for the label.
     *
     *
     * Example: labelText
     * @param string $labelText
     * @return $this
     */
    public function setLabelText($labelText)
    {
        $this->values['labelText'] = $labelText;
        return $this;
    }

    /**
     * Get labelText
     *
     * @return string
     */
    public function getLabelText()
    {
        return $this->values['labelText'];
    }

    /**
     * There are five categories of tunnel categorization with A representing the least restrictive and E as the most restrictive. Category A, as the least restrictive, will not be sign-posted. Category E, the most restrictive, only allows the passage of UN2919, UN3291, UN3331, UN3359 and UN3373.<br>Example: UN2919
     *
     *
     * Example: UN2919
     * @param string $tunnelRestrictionCode
     * @return $this
     */
    public function setTunnelRestrictionCode($tunnelRestrictionCode)
    {
        $this->values['tunnelRestrictionCode'] = $tunnelRestrictionCode;
        return $this;
    }

    /**
     * Get tunnelRestrictionCode
     *
     * @return string
     */
    public function getTunnelRestrictionCode()
    {
        return $this->values['tunnelRestrictionCode'];
    }

    /**
     * Specifies Special Provisions if any.<br>Example: specialProvisions
     *
     *
     * Example: specialProvisions
     * @param string $specialProvisions
     * @return $this
     */
    public function setSpecialProvisions($specialProvisions)
    {
        $this->values['specialProvisions'] = $specialProvisions;
        return $this;
    }

    /**
     * Get specialProvisions
     *
     * @return string
     */
    public function getSpecialProvisions()
    {
        return $this->values['specialProvisions'];
    }

    /**
     * Fully-expanded descriptive text for a hazardous commodity.<br>Example: properShippingNameAndDescription
     *
     *
     * Example: properShippingNameAndDescription
     * @param string $properShippingNameAndDescription
     * @return $this
     */
    public function setProperShippingNameAndDescription($properShippingNameAndDescription)
    {
        $this->values['properShippingNameAndDescription'] = $properShippingNameAndDescription;
        return $this;
    }

    /**
     * Get properShippingNameAndDescription
     *
     * @return string
     */
    public function getProperShippingNameAndDescription()
    {
        return $this->values['properShippingNameAndDescription'];
    }

    /**
     * Specifies Technical Name.<br>Example: technicalName
     *
     *
     * Example: technicalName
     * @param string $technicalName
     * @return $this
     */
    public function setTechnicalName($technicalName)
    {
        $this->values['technicalName'] = $technicalName;
        return $this;
    }

    /**
     * Get technicalName
     *
     * @return string
     */
    public function getTechnicalName()
    {
        return $this->values['technicalName'];
    }

    /**
     * Specifies Symbols.<br>Example: symbols
     *
     *
     * Example: symbols
     * @param string $symbols
     * @return $this
     */
    public function setSymbols($symbols)
    {
        $this->values['symbols'] = $symbols;
        return $this;
    }

    /**
     * Get symbols
     *
     * @return string
     */
    public function getSymbols()
    {
        return $this->values['symbols'];
    }

    /**
     * Information related to quantity limitations and operator or state variations as may be applicable to the dangerous goods commodity.
     *
     *
     * Example: authorization
     * @param string $authorization
     * @return $this
     */
    public function setAuthorization($authorization)
    {
        $this->values['authorization'] = $authorization;
        return $this;
    }

    /**
     * Get authorization
     *
     * @return string
     */
    public function getAuthorization()
    {
        return $this->values['authorization'];
    }

    /**
     * Specifies attributes.<br>Example: ["attributes"]
     *
     *
     * Example: ["attributes"]
     * @param string $attributes
     * @return $this
     */
    public function setAttributes(array $attributes)
    {
        $this->values['attributes'] = $attributes;
        return $this;
    }

    /**
     * Get attributes
     *
     * @return string
     */
    public function getAttributes()
    {
        return $this->values['attributes'];
    }

    /**
     * Specifies the Identification.<br>Example: 1234
     *
     *
     * Example: 1234
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->values['id'] = $id;
        return $this;
    }

    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->values['id'];
    }

    /**
     * Specifies packing group.
     *
     *
     * Example: packingGroup
     * @param string $packingGroup
     * @return $this
     */
    public function setPackingGroup($packingGroup)
    {
        $this->values['packingGroup'] = $packingGroup;
        return $this;
    }

    /**
     * Get packingGroup
     *
     * @return string
     */
    public function getPackingGroup()
    {
        return $this->values['packingGroup'];
    }

    /**
     * Specifies proper shipping name.
     *
     *
     * Example: properShippingName
     * @param string $properShippingName
     * @return $this
     */
    public function setProperShippingName($properShippingName)
    {
        $this->values['properShippingName'] = $properShippingName;
        return $this;
    }

    /**
     * Get properShippingName
     *
     * @return string
     */
    public function getProperShippingName()
    {
        return $this->values['properShippingName'];
    }

    /**
     * Specifies hazard class.<br>Example: Hazard Class
     *
     *
     * Example: hazardClass
     * @param string $hazardClass
     * @return $this
     */
    public function setHazardClass($hazardClass)
    {
        $this->values['hazardClass'] = $hazardClass;
        return $this;
    }

    /**
     * Get hazardClass
     *
     * @return string
     */
    public function getHazardClass()
    {
        return $this->values['hazardClass'];
    }
}
