<?php
namespace FedExRestApi\AvailabilityService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * AvTransitTimeCommodity
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $description
 * @property int $quantity
 * @property AvTransitTimeCommodity_unitPrice $unitPrice
 * @property AvTransitTimeRequestedShipment_shipmentSpecialServices_shipmentDryIceDetail_totalWeight $weight
 * @property AvTransitTimeCommodity_unitPrice $customsValue
 * @property int $numberOfPieces
 * @property string $countryOfManufacture
 * @property string $quantityUnits
 * @property string $name
 * @property string $harmonizedCode
 * @property string $partNumber

 */
class AvTransitTimeCommodity extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvTransitTimeCommodity';

    /**
     * Indicate the description of the dutiable packages.<br> Maximum Length is 450. <br> Example: DOCUMENTS <br><a onclick='loadDocReference("vaguecommoditydescriptions")'>Click here to see Vague commodity descriptions</a>
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
     * Specify the total number of units (using quantityUnits as the unit of measure) of this commodity present in the shipment. This element is used to estimate duties and taxes. <br>Example: 1
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
     * Set unitPrice
     *
     *
     * Example:
     * @param AvTransitTimeCommodity_unitPrice $unitPrice
     * @return $this
     */
    public function setUnitPrice(AvTransitTimeCommodity_unitPrice $unitPrice)
    {
        $this->values['unitPrice'] = $unitPrice;
        return $this;
    }

    /**
     * Get unitPrice
     *
     * @return AvTransitTimeCommodity_unitPrice
     */
    public function getUnitPrice()
    {
        return $this->values['unitPrice'];
    }

    /**
     * Set weight
     *
     *
     * Example:
     * @param AvTransitTimeRequestedShipment_shipmentSpecialServices_shipmentDryIceDetail_totalWeight $weight
     * @return $this
     */
    public function setWeight(AvTransitTimeRequestedShipment_shipmentSpecialServices_shipmentDryIceDetail_totalWeight $weight)
    {
        $this->values['weight'] = $weight;
        return $this;
    }

    /**
     * Get weight
     *
     * @return AvTransitTimeRequestedShipment_shipmentSpecialServices_shipmentDryIceDetail_totalWeight
     */
    public function getWeight()
    {
        return $this->values['weight'];
    }

    /**
     * Set customsValue
     *
     *
     * Example:
     * @param AvTransitTimeCommodity_unitPrice $customsValue
     * @return $this
     */
    public function setCustomsValue(AvTransitTimeCommodity_unitPrice $customsValue)
    {
        $this->values['customsValue'] = $customsValue;
        return $this;
    }

    /**
     * Get customsValue
     *
     * @return AvTransitTimeCommodity_unitPrice
     */
    public function getCustomsValue()
    {
        return $this->values['customsValue'];
    }

    /**
     * Specifies the number of pieces for this commodity.<br>Example: 10
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
     * This is a manufacturing country. Maximum field Length is 4.<br>Example: IN
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
     * Indicate unit quantity used to estimate duties and taxes.<br>Example: PCS
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
     * Indicate the Commodity name.<br>Example: DOCUMENTS
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
     * This is to specify the Harmonized Tariff System (HTS) code to meet U.S. and foreign governments' customs requirements. These are mainly used to estimate the duties and taxes.<br>Example: A six digit code for Almonds fresh or dried is 080211. The HTS code for pistachios in shell is 080251. The HTS code for fish is HS203.<br>To research the classification for your commodity, use the FedEx Global Trade Manager online at <a href='http://www.fedex.com/gtm' target='_blank'>fedex.com/gtm</a>. You can find the commodities and its respective codes by logging into FedEx and selecting harmonized code option. You will find country-specific information to determine whether your commodity is considered to be a document or non-document for your destination. <br>For additional information about harmonized code, refer to <a href='https://www.usitc.gov/documents/hts_external_guide.pdf' target='_blank'>harmonized code</a>.
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
     * Specify the part number if any. Example: P1
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
