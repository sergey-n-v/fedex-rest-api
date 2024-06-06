<?php
namespace FedExRestApi\AvailabilityService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Description of an individual commodity or class of content in a shipment.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property int $pieces
 * @property AvVolume $volume
 * @property int $handlingUnits
 * @property string $freightClass
 * @property string $description
 * @property AvWeight $weight
 * @property string $packaging
 * @property boolean $classProvidedByCustomer
 * @property string $hazardousMaterials
 * @property AvDimensions $dimensions

 */
class AvFreightShipmentLineItem extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvFreightShipmentLineItem';

    /**
     * Optional <br> Total number of pieces <br> Example: 1
     *
     *
     * Example: 1
     * @param int $pieces
     * @return $this
     */
    public function setPieces($pieces)
    {
        $this->values['pieces'] = $pieces;
        return $this;
    }

    /**
     * Get pieces
     *
     * @return int
     */
    public function getPieces()
    {
        return $this->values['pieces'];
    }

    /**
     * Set volume
     *
     *
     * Example:
     * @param AvVolume1 $volume
     * @return $this
     */
    public function setVolume($volume)
    {
        $this->values['volume'] = $volume;
        return $this;
    }

    /**
     * Get volume
     *
     * @return AvVolume1
     */
    public function getVolume()
    {
        return $this->values['volume'];
    }

    /**
     * Optional<br>Number of individual handling units to which this line applies. (NOTE - Total of line-item-level handling units may not balance to shipment-level total handling units) <br> Example: 1
     *
     *
     * Example: 1
     * @param int $handlingUnits
     * @return $this
     */
    public function setHandlingUnits($handlingUnits)
    {
        $this->values['handlingUnits'] = $handlingUnits;
        return $this;
    }

    /**
     * Get handlingUnits
     *
     * @return int
     */
    public function getHandlingUnits()
    {
        return $this->values['handlingUnits'];
    }

    /**
     * Specify the freight class based on the item to be shipped and its weight measured per unit volume(Example: Kilograms per Cubic Meter) the shipment is categorized accordingly.<a href='http://www.fedex.com/en-us/shipping/freight/class-calculator.html' target='_blank'>Click here</a> to use Freight class calculator
     *
     * simpleClass: AvFreightClass
     * Example: CLASS_050
     * @param string $freightClass
     * @return $this
     */
    public function setFreightClass($freightClass)
    {
        $this->values['freightClass'] = $freightClass;
        return $this;
    }

    /**
     * Get freightClass
     *
     * @return string
     */
    public function getFreightClass()
    {
        return $this->values['freightClass'];
    }

    /**
     * Customer-provided description of this line item <br> Example: Description
     *
     *
     * Example: Description
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->values['description'] = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->values['description'];
    }

    /**
     * Total weight of items for this line item
     *
     *
     * Example:
     * @param AvWeight $weight
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->values['weight'] = $weight;
        return $this;
    }

    /**
     * Get weight
     *
     * @return AvWeight
     */
    public function getWeight()
    {
        return $this->values['weight'];
    }

    /**
     * Packaging type for this line item <br> Example: SELFPACKAGE
     *
     *
     * Example: SELFPACKAGE
     * @param string $packaging
     * @return $this
     */
    public function setPackaging($packaging)
    {
        $this->values['packaging'] = $packaging;
        return $this;
    }

    /**
     * Get packaging
     *
     * @return string
     */
    public function getPackaging()
    {
        return $this->values['packaging'];
    }

    /**
     * defaults to false. FEDEX INTERNAL USE ONLY for FedEx system that estimate freight class from customer-provided dimensions and weight <br> Example: true
     *
     *
     * Example: 1
     * @param boolean $classProvidedByCustomer
     * @return $this
     */
    public function setClassProvidedByCustomer($classProvidedByCustomer)
    {
        $this->values['classProvidedByCustomer'] = $classProvidedByCustomer;
        return $this;
    }

    /**
     * Get classProvidedByCustomer
     *
     * @return boolean
     */
    public function getClassProvidedByCustomer()
    {
        return $this->values['classProvidedByCustomer'];
    }

    /**
     * Indicates the kind of hazardous material content in this line item <br> Example: HAZARDOUS_MATERIALS
     *
     * simpleClass: AvHazardousMaterials
     * Example: HAZARDOUS_MATERIALS
     * @param string $hazardousMaterials
     * @return $this
     */
    public function setHazardousMaterials($hazardousMaterials)
    {
        $this->values['hazardousMaterials'] = $hazardousMaterials;
        return $this;
    }

    /**
     * Get hazardousMaterials
     *
     * @return string
     */
    public function getHazardousMaterials()
    {
        return $this->values['hazardousMaterials'];
    }

    /**
     * Individual line item dimensions. Conditionally required. Need volume for intra mexico rates.
     *
     *
     * Example:
     * @param AvDimensions $dimensions
     * @return $this
     */
    public function setDimensions($dimensions)
    {
        $this->values['dimensions'] = $dimensions;
        return $this;
    }

    /**
     * Get dimensions
     *
     * @return AvDimensions
     */
    public function getDimensions()
    {
        return $this->values['dimensions'];
    }
}
