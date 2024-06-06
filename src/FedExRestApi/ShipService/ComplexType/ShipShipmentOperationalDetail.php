<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Indicates the shipment level operational information.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $originServiceArea
 * @property string $serviceCode
 * @property string $airportId
 * @property string $postalCode
 * @property string $scac
 * @property string $deliveryDay
 * @property string $originLocationId
 * @property string $countryCode
 * @property string $astraDescription
 * @property int $originLocationNumber
 * @property string $deliveryDate
 * @property string $deliveryEligibilities
 * @property boolean $ineligibleForMoneyBackGuarantee
 * @property string $maximumTransitTime
 * @property string $destinationLocationStateOrProvinceCode
 * @property string $astraPlannedServiceLevel
 * @property string $destinationLocationId
 * @property string $transitTime
 * @property string $stateOrProvinceCode
 * @property int $destinationLocationNumber
 * @property string $packagingCode
 * @property string $commitDate
 * @property string $publishedDeliveryTime
 * @property string $ursaSuffixCode
 * @property string $ursaPrefixCode
 * @property string $destinationServiceArea
 * @property string $commitDay
 * @property string $customTransitTime

 */
class ShipShipmentOperationalDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipShipmentOperationalDetail';

    /**
     * Set originServiceArea
     *
     *
     * Example: A1
     * @param string $originServiceArea
     * @return $this
     */
    public function setOriginServiceArea($originServiceArea)
    {
        $this->values['originServiceArea'] = $originServiceArea;
        return $this;
    }

    /**
     * Get originServiceArea
     *
     * @return string
     */
    public function getOriginServiceArea()
    {
        return $this->values['originServiceArea'];
    }

    /**
     * Set serviceCode
     *
     *
     * Example: 010
     * @param string $serviceCode
     * @return $this
     */
    public function setServiceCode($serviceCode)
    {
        $this->values['serviceCode'] = $serviceCode;
        return $this;
    }

    /**
     * Get serviceCode
     *
     * @return string
     */
    public function getServiceCode()
    {
        return $this->values['serviceCode'];
    }

    /**
     * Set airportId
     *
     *
     * Example: DFW
     * @param string $airportId
     * @return $this
     */
    public function setAirportId($airportId)
    {
        $this->values['airportId'] = $airportId;
        return $this;
    }

    /**
     * Get airportId
     *
     * @return string
     */
    public function getAirportId()
    {
        return $this->values['airportId'];
    }

    /**
     * Set postalCode
     *
     *
     * Example: 38010
     * @param string $postalCode
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
     * @return string
     */
    public function getPostalCode()
    {
        return $this->values['postalCode'];
    }

    /**
     * Set scac
     *
     *
     * Example: scac
     * @param string $scac
     * @return $this
     */
    public function setScac($scac)
    {
        $this->values['scac'] = $scac;
        return $this;
    }

    /**
     * Get scac
     *
     * @return string
     */
    public function getScac()
    {
        return $this->values['scac'];
    }

    /**
     * Set deliveryDay
     *
     *
     * Example: TUE
     * @param string $deliveryDay
     * @return $this
     */
    public function setDeliveryDay($deliveryDay)
    {
        $this->values['deliveryDay'] = $deliveryDay;
        return $this;
    }

    /**
     * Get deliveryDay
     *
     * @return string
     */
    public function getDeliveryDay()
    {
        return $this->values['deliveryDay'];
    }

    /**
     * Set originLocationId
     *
     *
     * Example: 678
     * @param string $originLocationId
     * @return $this
     */
    public function setOriginLocationId($originLocationId)
    {
        $this->values['originLocationId'] = $originLocationId;
        return $this;
    }

    /**
     * Get originLocationId
     *
     * @return string
     */
    public function getOriginLocationId()
    {
        return $this->values['originLocationId'];
    }

    /**
     * Set countryCode
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
     * Set astraDescription
     *
     *
     * Example: SMART POST
     * @param string $astraDescription
     * @return $this
     */
    public function setAstraDescription($astraDescription)
    {
        $this->values['astraDescription'] = $astraDescription;
        return $this;
    }

    /**
     * Get astraDescription
     *
     * @return string
     */
    public function getAstraDescription()
    {
        return $this->values['astraDescription'];
    }

    /**
     * Set originLocationNumber
     *
     *
     * Example: 243
     * @param int $originLocationNumber
     * @return $this
     */
    public function setOriginLocationNumber($originLocationNumber)
    {
        $this->values['originLocationNumber'] = $originLocationNumber;
        return $this;
    }

    /**
     * Get originLocationNumber
     *
     * @return int
     */
    public function getOriginLocationNumber()
    {
        return $this->values['originLocationNumber'];
    }

    /**
     * Set deliveryDate
     *
     *
     * Example: 2001-04-05
     * @param string $deliveryDate
     * @return $this
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->values['deliveryDate'] = $deliveryDate;
        return $this;
    }

    /**
     * Get deliveryDate
     *
     * @return string
     */
    public function getDeliveryDate()
    {
        return $this->values['deliveryDate'];
    }

    /**
     * Set deliveryEligibilities
     *
     *
     * Example: ["deliveryEligibilities"]
     * @param string $deliveryEligibilities
     * @return $this
     */
    public function setDeliveryEligibilities(array $deliveryEligibilities)
    {
        $this->values['deliveryEligibilities'] = $deliveryEligibilities;
        return $this;
    }

    /**
     * Get deliveryEligibilities
     *
     * @return string
     */
    public function getDeliveryEligibilities()
    {
        return $this->values['deliveryEligibilities'];
    }

    /**
     * Set ineligibleForMoneyBackGuarantee
     *
     *
     * Example: 1
     * @param boolean $ineligibleForMoneyBackGuarantee
     * @return $this
     */
    public function setIneligibleForMoneyBackGuarantee($ineligibleForMoneyBackGuarantee)
    {
        $this->values['ineligibleForMoneyBackGuarantee'] = $ineligibleForMoneyBackGuarantee;
        return $this;
    }

    /**
     * Get ineligibleForMoneyBackGuarantee
     *
     * @return boolean
     */
    public function getIneligibleForMoneyBackGuarantee()
    {
        return $this->values['ineligibleForMoneyBackGuarantee'];
    }

    /**
     * Set maximumTransitTime
     *
     *
     * Example: SEVEN_DAYS
     * @param string $maximumTransitTime
     * @return $this
     */
    public function setMaximumTransitTime($maximumTransitTime)
    {
        $this->values['maximumTransitTime'] = $maximumTransitTime;
        return $this;
    }

    /**
     * Get maximumTransitTime
     *
     * @return string
     */
    public function getMaximumTransitTime()
    {
        return $this->values['maximumTransitTime'];
    }

    /**
     * Set destinationLocationStateOrProvinceCode
     *
     *
     * Example: GA
     * @param string $destinationLocationStateOrProvinceCode
     * @return $this
     */
    public function setDestinationLocationStateOrProvinceCode($destinationLocationStateOrProvinceCode)
    {
        $this->values['destinationLocationStateOrProvinceCode'] = $destinationLocationStateOrProvinceCode;
        return $this;
    }

    /**
     * Get destinationLocationStateOrProvinceCode
     *
     * @return string
     */
    public function getDestinationLocationStateOrProvinceCode()
    {
        return $this->values['destinationLocationStateOrProvinceCode'];
    }

    /**
     * Set astraPlannedServiceLevel
     *
     *
     * Example: TUE - 15 OCT 10:30A
     * @param string $astraPlannedServiceLevel
     * @return $this
     */
    public function setAstraPlannedServiceLevel($astraPlannedServiceLevel)
    {
        $this->values['astraPlannedServiceLevel'] = $astraPlannedServiceLevel;
        return $this;
    }

    /**
     * Get astraPlannedServiceLevel
     *
     * @return string
     */
    public function getAstraPlannedServiceLevel()
    {
        return $this->values['astraPlannedServiceLevel'];
    }

    /**
     * Set destinationLocationId
     *
     *
     * Example: DALA
     * @param string $destinationLocationId
     * @return $this
     */
    public function setDestinationLocationId($destinationLocationId)
    {
        $this->values['destinationLocationId'] = $destinationLocationId;
        return $this;
    }

    /**
     * Get destinationLocationId
     *
     * @return string
     */
    public function getDestinationLocationId()
    {
        return $this->values['destinationLocationId'];
    }

    /**
     * Set transitTime
     *
     *
     * Example: TWO_DAYS
     * @param string $transitTime
     * @return $this
     */
    public function setTransitTime($transitTime)
    {
        $this->values['transitTime'] = $transitTime;
        return $this;
    }

    /**
     * Get transitTime
     *
     * @return string
     */
    public function getTransitTime()
    {
        return $this->values['transitTime'];
    }

    /**
     * Set stateOrProvinceCode
     *
     *
     * Example: GA
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
     * Set destinationLocationNumber
     *
     *
     * Example: 876
     * @param int $destinationLocationNumber
     * @return $this
     */
    public function setDestinationLocationNumber($destinationLocationNumber)
    {
        $this->values['destinationLocationNumber'] = $destinationLocationNumber;
        return $this;
    }

    /**
     * Get destinationLocationNumber
     *
     * @return int
     */
    public function getDestinationLocationNumber()
    {
        return $this->values['destinationLocationNumber'];
    }

    /**
     * Set packagingCode
     *
     *
     * Example: 03
     * @param string $packagingCode
     * @return $this
     */
    public function setPackagingCode($packagingCode)
    {
        $this->values['packagingCode'] = $packagingCode;
        return $this;
    }

    /**
     * Get packagingCode
     *
     * @return string
     */
    public function getPackagingCode()
    {
        return $this->values['packagingCode'];
    }

    /**
     * Set commitDate
     *
     *
     * Example: 2019-10-15
     * @param string $commitDate
     * @return $this
     */
    public function setCommitDate($commitDate)
    {
        $this->values['commitDate'] = $commitDate;
        return $this;
    }

    /**
     * Get commitDate
     *
     * @return string
     */
    public function getCommitDate()
    {
        return $this->values['commitDate'];
    }

    /**
     * Set publishedDeliveryTime
     *
     *
     * Example: 10:30A
     * @param string $publishedDeliveryTime
     * @return $this
     */
    public function setPublishedDeliveryTime($publishedDeliveryTime)
    {
        $this->values['publishedDeliveryTime'] = $publishedDeliveryTime;
        return $this;
    }

    /**
     * Get publishedDeliveryTime
     *
     * @return string
     */
    public function getPublishedDeliveryTime()
    {
        return $this->values['publishedDeliveryTime'];
    }

    /**
     * Set ursaSuffixCode
     *
     *
     * Example: Ga
     * @param string $ursaSuffixCode
     * @return $this
     */
    public function setUrsaSuffixCode($ursaSuffixCode)
    {
        $this->values['ursaSuffixCode'] = $ursaSuffixCode;
        return $this;
    }

    /**
     * Get ursaSuffixCode
     *
     * @return string
     */
    public function getUrsaSuffixCode()
    {
        return $this->values['ursaSuffixCode'];
    }

    /**
     * Set ursaPrefixCode
     *
     *
     * Example: XH
     * @param string $ursaPrefixCode
     * @return $this
     */
    public function setUrsaPrefixCode($ursaPrefixCode)
    {
        $this->values['ursaPrefixCode'] = $ursaPrefixCode;
        return $this;
    }

    /**
     * Get ursaPrefixCode
     *
     * @return string
     */
    public function getUrsaPrefixCode()
    {
        return $this->values['ursaPrefixCode'];
    }

    /**
     * Set destinationServiceArea
     *
     *
     * Example: A1
     * @param string $destinationServiceArea
     * @return $this
     */
    public function setDestinationServiceArea($destinationServiceArea)
    {
        $this->values['destinationServiceArea'] = $destinationServiceArea;
        return $this;
    }

    /**
     * Get destinationServiceArea
     *
     * @return string
     */
    public function getDestinationServiceArea()
    {
        return $this->values['destinationServiceArea'];
    }

    /**
     * Set commitDay
     *
     *
     * Example: TUE
     * @param string $commitDay
     * @return $this
     */
    public function setCommitDay($commitDay)
    {
        $this->values['commitDay'] = $commitDay;
        return $this;
    }

    /**
     * Get commitDay
     *
     * @return string
     */
    public function getCommitDay()
    {
        return $this->values['commitDay'];
    }

    /**
     * Set customTransitTime
     *
     *
     * Example: ONE_DAY
     * @param string $customTransitTime
     * @return $this
     */
    public function setCustomTransitTime($customTransitTime)
    {
        $this->values['customTransitTime'] = $customTransitTime;
        return $this;
    }

    /**
     * Get customTransitTime
     *
     * @return string
     */
    public function getCustomTransitTime()
    {
        return $this->values['customTransitTime'];
    }
}
