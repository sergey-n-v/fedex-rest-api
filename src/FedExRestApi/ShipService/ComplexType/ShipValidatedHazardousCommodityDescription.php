<?php
namespace FedExRestApi\ShipService\ComplexType;

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
class ShipValidatedHazardousCommodityDescription extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipValidatedHazardousCommodityDescription';

    /**
     * Set sequenceNumber
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
     * Set packingInstructions
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
     * Set subsidiaryClasses
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
     * Set labelText
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
     * Set tunnelRestrictionCode
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
     * Set specialProvisions
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
     * Set properShippingNameAndDescription
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
     * Set technicalName
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
     * Set symbols
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
     * Set authorization
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
     * Set attributes
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
     * Set id
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
     * Set packingGroup
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
     * Set properShippingName
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
     * Set hazardClass
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
