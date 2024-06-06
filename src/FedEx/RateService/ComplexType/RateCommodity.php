<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * RateCommodity
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $description
 * @property RateWeight_2 $weight
 * @property int $quantity
 * @property RateMoney $customsValue
 * @property RateMoney $unitPrice
 * @property int $numberOfPieces
 * @property string $countryOfManufacture
 * @property string $quantityUnits
 * @property string $name
 * @property string $harmonizedCode
 * @property string $partNumber

 */
class RateCommodity extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateCommodity';

    /**
     * Set description
     *
     * 
     * Example: DOCUMENTS
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
     * Set weight
     *
     * 
     * Example: 
     * @param RateWeight_2 $weight
     * @return $this
     */
    public function setWeight(RateWeight_2 $weight)
    {
        $this->values['weight'] = $weight;
        return $this;
    }

    /**
     * Get weight
     *
     * @return RateWeight_2
     */
    public function getWeight()
    {
        return $this->values['weight'];
    }

    /**
     * Set quantity
     *
     * 
     * Example: 1
     * @param int $quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->values['quantity'] = $quantity;
        return $this;
    }

    /**
     * Get quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->values['quantity'];
    }

    /**
     * Set customsValue
     *
     * 
     * Example: 
     * @param RateMoney $customsValue
     * @return $this
     */
    public function setCustomsValue(RateMoney $customsValue)
    {
        $this->values['customsValue'] = $customsValue;
        return $this;
    }

    /**
     * Get customsValue
     *
     * @return RateMoney
     */
    public function getCustomsValue()
    {
        return $this->values['customsValue'];
    }

    /**
     * Set unitPrice
     *
     * 
     * Example: 
     * @param RateMoney $unitPrice
     * @return $this
     */
    public function setUnitPrice(RateMoney $unitPrice)
    {
        $this->values['unitPrice'] = $unitPrice;
        return $this;
    }

    /**
     * Get unitPrice
     *
     * @return RateMoney
     */
    public function getUnitPrice()
    {
        return $this->values['unitPrice'];
    }

    /**
     * Set numberOfPieces
     *
     * 
     * Example: 1
     * @param int $numberOfPieces
     * @return $this
     */
    public function setNumberOfPieces($numberOfPieces)
    {
        $this->values['numberOfPieces'] = $numberOfPieces;
        return $this;
    }

    /**
     * Get numberOfPieces
     *
     * @return int
     */
    public function getNumberOfPieces()
    {
        return $this->values['numberOfPieces'];
    }

    /**
     * Set countryOfManufacture
     *
     * 
     * Example: US
     * @param string $countryOfManufacture
     * @return $this
     */
    public function setCountryOfManufacture($countryOfManufacture)
    {
        $this->values['countryOfManufacture'] = $countryOfManufacture;
        return $this;
    }

    /**
     * Get countryOfManufacture
     *
     * @return string
     */
    public function getCountryOfManufacture()
    {
        return $this->values['countryOfManufacture'];
    }

    /**
     * Set quantityUnits
     *
     * 
     * Example: PCS
     * @param string $quantityUnits
     * @return $this
     */
    public function setQuantityUnits($quantityUnits)
    {
        $this->values['quantityUnits'] = $quantityUnits;
        return $this;
    }

    /**
     * Get quantityUnits
     *
     * @return string
     */
    public function getQuantityUnits()
    {
        return $this->values['quantityUnits'];
    }

    /**
     * Set name
     *
     * 
     * Example: DOCUMENTS
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->values['name'] = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->values['name'];
    }

    /**
     * Set harmonizedCode
     *
     * 
     * Example: 080211
     * @param string $harmonizedCode
     * @return $this
     */
    public function setHarmonizedCode($harmonizedCode)
    {
        $this->values['harmonizedCode'] = $harmonizedCode;
        return $this;
    }

    /**
     * Get harmonizedCode
     *
     * @return string
     */
    public function getHarmonizedCode()
    {
        return $this->values['harmonizedCode'];
    }

    /**
     * Set partNumber
     *
     * 
     * Example: P1
     * @param string $partNumber
     * @return $this
     */
    public function setPartNumber($partNumber)
    {
        $this->values['partNumber'] = $partNumber;
        return $this;
    }

    /**
     * Get partNumber
     *
     * @return string
     */
    public function getPartNumber()
    {
        return $this->values['partNumber'];
    }
}
