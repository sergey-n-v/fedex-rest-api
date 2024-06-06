<?php
namespace FedEx\AvailabilityService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Information about the contents of the shipment.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property boolean $customsValueAndWeightSpecifiedAsUnit
 * @property int $quantity
 * @property float $customsValue
 * @property string $weightUnitOfMeasureCode
 * @property string $description
 * @property AvPackageWeight $weight
 * @property boolean $sedRequired
 * @property string $productType
 * @property string $unitOfMeasureCode
 * @property string $countryOfManufactureCode

 */
class AvProductInfo extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvProductInfo';

    /**
     * The total value declared to the Bureau of Customs and Border Protection for all packages in the shipment along with the weight details.
     *
     * 
     * Example: 1
     * @param boolean $customsValueAndWeightSpecifiedAsUnit
     * @return $this
     */
    public function setCustomsValueAndWeightSpecifiedAsUnit($customsValueAndWeightSpecifiedAsUnit)
    {
        $this->values['customsValueAndWeightSpecifiedAsUnit'] = $customsValueAndWeightSpecifiedAsUnit;
        return $this;
    }

    /**
     * Get customsValueAndWeightSpecifiedAsUnit
     *
     * @return boolean
     */
    public function getCustomsValueAndWeightSpecifiedAsUnit()
    {
        return $this->values['customsValueAndWeightSpecifiedAsUnit'];
    }

    /**
     * Quantity of the product in the package/shipment.
     *
     * 
     * Example: 2
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
     * Customs value of the product in the package/shipment.
     *
     * 
     * Example: 20
     * @param float $customsValue
     * @return $this
     */
    public function setCustomsValue($customsValue)
    {
        $this->values['customsValue'] = $customsValue;
        return $this;
    }

    /**
     * Get customsValue
     *
     * @return float
     */
    public function getCustomsValue()
    {
        return $this->values['customsValue'];
    }

    /**
     * Weight measurement unit code of the product in the package/shipment.
     *
     * 
     * Example: KG
     * @param string $weightUnitOfMeasureCode
     * @return $this
     */
    public function setWeightUnitOfMeasureCode($weightUnitOfMeasureCode)
    {
        $this->values['weightUnitOfMeasureCode'] = $weightUnitOfMeasureCode;
        return $this;
    }

    /**
     * Get weightUnitOfMeasureCode
     *
     * @return string
     */
    public function getWeightUnitOfMeasureCode()
    {
        return $this->values['weightUnitOfMeasureCode'];
    }

    /**
     * Description of the product in the package/shipment.
     *
     * 
     * Example: Books
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
     * Indicates if shippers export declaration is required or not.
     *
     * 
     * 
     * @param boolean $sedRequired
     * @return $this
     */
    public function setSedRequired($sedRequired)
    {
        $this->values['sedRequired'] = $sedRequired;
        return $this;
    }

    /**
     * Get sedRequired
     *
     * @return boolean
     */
    public function getSedRequired()
    {
        return $this->values['sedRequired'];
    }

    /**
     * Indicates the package/shipment contains documents or non-document commodities.
     *
     * simpleClass: AvProductType
     * Example: COMMODITIES
     * @param string $productType
     * @return $this
     */
    public function setProductType($productType)
    {
        $this->values['productType'] = $productType;
        return $this;
    }

    /**
     * Get productType
     *
     * @return string
     */
    public function getProductType()
    {
        return $this->values['productType'];
    }

    /**
     * Specifies if shippers export declaration is required.<br>Valid values: True, False.
     *
     * 
     * Example: pieces
     * @param string $unitOfMeasureCode
     * @return $this
     */
    public function setUnitOfMeasureCode($unitOfMeasureCode)
    {
        $this->values['unitOfMeasureCode'] = $unitOfMeasureCode;
        return $this;
    }

    /**
     * Get unitOfMeasureCode
     *
     * @return string
     */
    public function getUnitOfMeasureCode()
    {
        return $this->values['unitOfMeasureCode'];
    }

    /**
     * Specify the country code of the product manufacturer.
     *
     * 
     * Example: CA
     * @param string $countryOfManufactureCode
     * @return $this
     */
    public function setCountryOfManufactureCode($countryOfManufactureCode)
    {
        $this->values['countryOfManufactureCode'] = $countryOfManufactureCode;
        return $this;
    }

    /**
     * Get countryOfManufactureCode
     *
     * @return string
     */
    public function getCountryOfManufactureCode()
    {
        return $this->values['countryOfManufactureCode'];
    }
}
