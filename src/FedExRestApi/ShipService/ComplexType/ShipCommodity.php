<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * ShipCommodity
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property ShipMoney $unitPrice
 * @property ShipAdditionalMeasures[] $additionalMeasures
 * @property int $numberOfPieces
 * @property int $quantity
 * @property string $quantityUnits
 * @property ShipCustoms_Money $customsValue
 * @property string $countryOfManufacture
 * @property string $cIMarksAndNumbers
 * @property string $harmonizedCode
 * @property string $description
 * @property string $name
 * @property ShipWeight_4 $weight
 * @property string $exportLicenseNumber
 * @property string $exportLicenseExpirationDate
 * @property string $partNumber
 * @property string $purpose
 * @property ShipUsmcaDetail $usmcaDetail

 */
class ShipCommodity extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipCommodity';

    /**
     * Set unitPrice
     *
     *
     * Example:
     * @param ShipMoney $unitPrice
     * @return $this
     */
    public function setUnitPrice(ShipMoney $unitPrice)
    {
        $this->values['unitPrice'] = $unitPrice;
        return $this;
    }

    /**
     * Get unitPrice
     *
     * @return ShipMoney
     */
    public function getUnitPrice()
    {
        return $this->values['unitPrice'];
    }

    /**
     * Set additionalMeasures
     *
     *
     * Example:
     * @param ShipAdditionalMeasures[] $additionalMeasures
     * @return $this
     */
    public function setAdditionalMeasures(array $additionalMeasures)
    {
        $this->values['additionalMeasures'] = $additionalMeasures;
        return $this;
    }

    /**
     * Get additionalMeasures
     *
     * @return ShipAdditionalMeasures[]
     */
    public function getAdditionalMeasures()
    {
        return $this->values['additionalMeasures'];
    }

    /**
     * Set numberOfPieces
     *
     *
     * Example: 12
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
     * Set quantity
     *
     *
     * Example: 125
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
     * Set quantityUnits
     *
     *
     * Example: Ea
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
     * Set customsValue
     *
     *
     * Example:
     * @param ShipCustoms_Money $customsValue
     * @return $this
     */
    public function setCustomsValue(ShipCustoms_Money $customsValue)
    {
        $this->values['customsValue'] = $customsValue;
        return $this;
    }

    /**
     * Get customsValue
     *
     * @return ShipCustoms_Money
     */
    public function getCustomsValue()
    {
        return $this->values['customsValue'];
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
     * Set cIMarksAndNumbers
     *
     *
     * Example: 87123
     * @param string $cIMarksAndNumbers
     * @return $this
     */
    public function setCIMarksAndNumbers($cIMarksAndNumbers)
    {
        $this->values['cIMarksAndNumbers'] = $cIMarksAndNumbers;
        return $this;
    }

    /**
     * Get cIMarksAndNumbers
     *
     * @return string
     */
    public function getCIMarksAndNumbers()
    {
        return $this->values['cIMarksAndNumbers'];
    }

    /**
     * Set harmonizedCode
     *
     *
     * Example: 0613
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
     * Set description
     *
     *
     * Example: description
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
     * Set name
     *
     *
     * Example: non-threaded rivets
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
     * Set weight
     *
     *
     * Example:
     * @param ShipWeight_4 $weight
     * @return $this
     */
    public function setWeight(ShipWeight_4 $weight)
    {
        $this->values['weight'] = $weight;
        return $this;
    }

    /**
     * Get weight
     *
     * @return ShipWeight_4
     */
    public function getWeight()
    {
        return $this->values['weight'];
    }

    /**
     * Set exportLicenseNumber
     *
     *
     * Example: 26456
     * @param string $exportLicenseNumber
     * @return $this
     */
    public function setExportLicenseNumber($exportLicenseNumber)
    {
        $this->values['exportLicenseNumber'] = $exportLicenseNumber;
        return $this;
    }

    /**
     * Get exportLicenseNumber
     *
     * @return string
     */
    public function getExportLicenseNumber()
    {
        return $this->values['exportLicenseNumber'];
    }

    /**
     * Set exportLicenseExpirationDate
     *
     *
     * Example:
     * @param string $exportLicenseExpirationDate
     * @return $this
     */
    public function setExportLicenseExpirationDate($exportLicenseExpirationDate)
    {
        $this->values['exportLicenseExpirationDate'] = $exportLicenseExpirationDate;
        return $this;
    }

    /**
     * Get exportLicenseExpirationDate
     *
     * @return string
     */
    public function getExportLicenseExpirationDate()
    {
        return $this->values['exportLicenseExpirationDate'];
    }

    /**
     * Set partNumber
     *
     *
     * Example: 167
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

    /**
     * Set purpose
     *
     * simpleClass: ShipPurpose
     * Example: BUSINESS
     * @param string $purpose
     * @return $this
     */
    public function setPurpose($purpose)
    {
        $this->values['purpose'] = $purpose;
        return $this;
    }

    /**
     * Get purpose
     *
     * @return string
     */
    public function getPurpose()
    {
        return $this->values['purpose'];
    }

    /**
     * Set usmcaDetail
     *
     *
     * Example:
     * @param ShipUsmcaDetail $usmcaDetail
     * @return $this
     */
    public function setUsmcaDetail(ShipUsmcaDetail $usmcaDetail)
    {
        $this->values['usmcaDetail'] = $usmcaDetail;
        return $this;
    }

    /**
     * Get usmcaDetail
     *
     * @return ShipUsmcaDetail
     */
    public function getUsmcaDetail()
    {
        return $this->values['usmcaDetail'];
    }
}
