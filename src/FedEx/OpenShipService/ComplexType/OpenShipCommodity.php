<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * OpenShipCommodity
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property OpenShipMoney $unitPrice
 * @property OpenShipAdditionalMeasures[] $additionalMeasures
 * @property int $numberOfPieces
 * @property int $quantity
 * @property string $quantityUnits
 * @property OpenShipMoney $customsValue
 * @property string $countryOfManufacture
 * @property string $cIMarksAndNumbers
 * @property string $harmonizedCode
 * @property string $description
 * @property string $name
 * @property OpenShipWeight $weight
 * @property string $exportLicenseNumber
 * @property string $exportLicenseExpirationDate
 * @property string $partNumber
 * @property string $purpose
 * @property OpenShipUsmcaDetail $usmcaDetail

 */
class OpenShipCommodity extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipCommodity';

    /**
     * This is the unit price.
     *
     * 
     * Example: 
     * @param OpenShipMoney $unitPrice
     * @return $this
     */
    public function setUnitPrice($unitPrice)
    {
        $this->values['unitPrice'] = $unitPrice;
        return $this;
    }

    /**
     * Get unitPrice
     *
     * @return OpenShipMoney
     */
    public function getUnitPrice()
    {
        return $this->values['unitPrice'];
    }

    /**
     * This object contains additional quantitative information other than weight and quantity to calculate duties and taxes.
     *
     * 
     * Example: 
     * @param OpenShipAdditionalMeasures[] $additionalMeasures
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
     * @return OpenShipAdditionalMeasures[]
     */
    public function getAdditionalMeasures()
    {
        return $this->values['additionalMeasures'];
    }

    /**
     * Indicate the number of pieces associated with the commodity. The value can neither be negative nor exceed 9,999.<br>Example: 12
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
     * This is the units quantity (using quantityUnits as the unit of measure) per commodity. This is used to estimate duties and taxes.<br> Example: 125
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
     * This is the unit of measure for the units quantity. This is used to estimate duties and taxes.<br>Example: EA<br><a onclick='loadDocReference("harmonizedsystemcodeunitofmeasure-table1")'>click here to see Commodity Unit Measures</a>
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
     * This is the customs value.
     *
     * 
     * Example: 
     * @param OpenShipMoney $customsValue
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
     * @return OpenShipMoney
     */
    public function getCustomsValue()
    {
        return $this->values['customsValue'];
    }

    /**
     * This is commodity country of manufacture. This is required for International shipments. Maximum allowed length is 4.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>click here to see Country codes</a>
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
     * This is an identifying mark or number used on the packaging of a shipment to help customers identify a particular shipment<br>Example: 87123
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
     * This is to specify the Harmonized Tariff System (HTS) code to meet U.S. and foreign governments' customs requirements. These are mainly used to estimate the duties and taxes.<br>Example: 0613<br>To research the classification for your commodity, use the FedEx Global Trade Manager online at <a href='http://www.fedex.com/gtm' target='_blank'>fedex.com/gtm</a>. You will find country-specific information to determine whether your commodity is considered to be a document or non-document for your destination.
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
     * This is the commodity description. Maximum allowed 450 characters.<br><a onclick='loadDocReference("vaguecommoditydescriptions")'>click here to see Vague commodity descriptions</a>
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
     * This is Commodity name.<br>Example: Non-Threaded Rivets
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
     * @param OpenShipWeight $weight
     * @return $this
     */
    public function setWeight(OpenShipWeight $weight)
    {
        $this->values['weight'] = $weight;
        return $this;
    }

    /**
     * Get weight
     *
     * @return OpenShipWeight
     */
    public function getWeight()
    {
        return $this->values['weight'];
    }

    /**
     * This is the export license number for the shipment.<br>Example: 26456
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
     * Specify the export license expiration date for the shipment.<br>Format YYYY-MM-DD<br>Example : 2009-04-12
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
     * This is a part number.<br>Example: 167
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
     * This is the purpose of this shipment. This is used for calculation of duties and taxes.
     *
     * simpleClass: OpenShipPurpose
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
     * @param OpenShipUsmcaDetail $usmcaDetail
     * @return $this
     */
    public function setUsmcaDetail(OpenShipUsmcaDetail $usmcaDetail)
    {
        $this->values['usmcaDetail'] = $usmcaDetail;
        return $this;
    }

    /**
     * Get usmcaDetail
     *
     * @return OpenShipUsmcaDetail
     */
    public function getUsmcaDetail()
    {
        return $this->values['usmcaDetail'];
    }
}
