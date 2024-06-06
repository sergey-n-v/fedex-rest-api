<?php
namespace FedExRestApi\RateService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Indicate the Operational Details.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $originLocationIds
 * @property string $commitDays
 * @property string $serviceCode
 * @property string $airportId
 * @property string $scac
 * @property string $originServiceAreas
 * @property string $deliveryDay
 * @property integer $originLocationNumbers
 * @property string $destinationPostalCode
 * @property string $commitDate
 * @property string $astraDescription
 * @property string $deliveryDate
 * @property string $deliveryEligibilities
 * @property boolean $ineligibleForMoneyBackGuarantee
 * @property string $MaximumTransitTime
 * @property string $astraPlannedServiceLevel
 * @property string $destinationLocationIds
 * @property string $destinationLocationStateOrProvinceCodes
 * @property string $transitTime
 * @property string $packagingCode
 * @property integer $destinationLocationNumbers
 * @property string $publishedDeliveryTime
 * @property string $countryCodes
 * @property string $stateOrProvinceCodes
 * @property string $ursaPrefixCode
 * @property string $ursaSuffixCode
 * @property string $destinationServiceAreas
 * @property string $originPostalCodes
 * @property string $customTransitTime

 */
class RateOperationalDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateOperationalDetail';

    /**
     * Set originLocationIds
     *
     *
     * Example: YBZA
     * @param string $originLocationIds
     * @return $this
     */
    public function setOriginLocationIds(array $originLocationIds)
    {
        $this->values['originLocationIds'] = $originLocationIds;
        return $this;
    }

    /**
     * Get originLocationIds
     *
     * @return string
     */
    public function getOriginLocationIds()
    {
        return $this->values['originLocationIds'];
    }

    /**
     * Set commitDays
     *
     *
     * Example: MON
     * @param string $commitDays
     * @return $this
     */
    public function setCommitDays(array $commitDays)
    {
        $this->values['commitDays'] = $commitDays;
        return $this;
    }

    /**
     * Get commitDays
     *
     * @return string
     */
    public function getCommitDays()
    {
        return $this->values['commitDays'];
    }

    /**
     * Set serviceCode
     *
     *
     * Example: 06
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
     * Example: MEM
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
     * Set originServiceAreas
     *
     *
     * Example: AM
     * @param string $originServiceAreas
     * @return $this
     */
    public function setOriginServiceAreas(array $originServiceAreas)
    {
        $this->values['originServiceAreas'] = $originServiceAreas;
        return $this;
    }

    /**
     * Get originServiceAreas
     *
     * @return string
     */
    public function getOriginServiceAreas()
    {
        return $this->values['originServiceAreas'];
    }

    /**
     * Set deliveryDay
     *
     *
     * Example: SAT
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
     * Set originLocationNumbers
     *
     *
     * Example: 6121
     * @param integer $originLocationNumbers
     * @return $this
     */
    public function setOriginLocationNumbers(array $originLocationNumbers)
    {
        $this->values['originLocationNumbers'] = $originLocationNumbers;
        return $this;
    }

    /**
     * Get originLocationNumbers
     *
     * @return integer
     */
    public function getOriginLocationNumbers()
    {
        return $this->values['originLocationNumbers'];
    }

    /**
     * Set destinationPostalCode
     *
     *
     * Example: 38017
     * @param string $destinationPostalCode
     * @return $this
     */
    public function setDestinationPostalCode($destinationPostalCode)
    {
        $this->values['destinationPostalCode'] = $destinationPostalCode;
        return $this;
    }

    /**
     * Get destinationPostalCode
     *
     * @return string
     */
    public function getDestinationPostalCode()
    {
        return $this->values['destinationPostalCode'];
    }

    /**
     * Set commitDate
     *
     *
     * Example: 2019-07-22T08:30:00
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
     * Set astraDescription
     *
     *
     * Example: INTL1ST
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
     * Set deliveryDate
     *
     *
     * Example: 2019-07-22T08:30:00
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
     * Example: Availavble Eligibilities
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
     *
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
     * Set MaximumTransitTime
     *
     *
     * Example: THREE_DAYS
     * @param string $maximumTransitTime
     * @return $this
     */
    public function setMaximumTransitTime($maximumTransitTime)
    {
        $this->values['MaximumTransitTime'] = $maximumTransitTime;
        return $this;
    }

    /**
     * Get MaximumTransitTime
     *
     * @return string
     */
    public function getMaximumTransitTime()
    {
        return $this->values['MaximumTransitTime'];
    }

    /**
     * Set astraPlannedServiceLevel
     *
     *
     * Example: astraPlannedServicelevel
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
     * Set destinationLocationIds
     *
     *
     * Example: HKAA
     * @param string $destinationLocationIds
     * @return $this
     */
    public function setDestinationLocationIds(array $destinationLocationIds)
    {
        $this->values['destinationLocationIds'] = $destinationLocationIds;
        return $this;
    }

    /**
     * Get destinationLocationIds
     *
     * @return string
     */
    public function getDestinationLocationIds()
    {
        return $this->values['destinationLocationIds'];
    }

    /**
     * Set destinationLocationStateOrProvinceCodes
     *
     *
     * Example: TN
     * @param string $destinationLocationStateOrProvinceCodes
     * @return $this
     */
    public function setDestinationLocationStateOrProvinceCodes(array $destinationLocationStateOrProvinceCodes)
    {
        $this->values['destinationLocationStateOrProvinceCodes'] = $destinationLocationStateOrProvinceCodes;
        return $this;
    }

    /**
     * Get destinationLocationStateOrProvinceCodes
     *
     * @return string
     */
    public function getDestinationLocationStateOrProvinceCodes()
    {
        return $this->values['destinationLocationStateOrProvinceCodes'];
    }

    /**
     * Set transitTime
     *
     *
     * Example: THREE_DAYS
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
     * Set packagingCode
     *
     *
     * Example: M1M1M1
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
     * Set destinationLocationNumbers
     *
     *
     * Example: 386
     * @param integer $destinationLocationNumbers
     * @return $this
     */
    public function setDestinationLocationNumbers(array $destinationLocationNumbers)
    {
        $this->values['destinationLocationNumbers'] = $destinationLocationNumbers;
        return $this;
    }

    /**
     * Get destinationLocationNumbers
     *
     * @return integer
     */
    public function getDestinationLocationNumbers()
    {
        return $this->values['destinationLocationNumbers'];
    }

    /**
     * Set publishedDeliveryTime
     *
     *
     * Example: THREE_DAYS
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
     * Set countryCodes
     *
     *
     * Example: US
     * @param string $countryCodes
     * @return $this
     */
    public function setCountryCodes(array $countryCodes)
    {
        $this->values['countryCodes'] = $countryCodes;
        return $this;
    }

    /**
     * Get countryCodes
     *
     * @return string
     */
    public function getCountryCodes()
    {
        return $this->values['countryCodes'];
    }

    /**
     * Set stateOrProvinceCodes
     *
     *
     * Example: TN
     * @param string $stateOrProvinceCodes
     * @return $this
     */
    public function setStateOrProvinceCodes(array $stateOrProvinceCodes)
    {
        $this->values['stateOrProvinceCodes'] = $stateOrProvinceCodes;
        return $this;
    }

    /**
     * Get stateOrProvinceCodes
     *
     * @return string
     */
    public function getStateOrProvinceCodes()
    {
        return $this->values['stateOrProvinceCodes'];
    }

    /**
     * Set ursaPrefixCode
     *
     *
     * Example: PrefixCode
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
     * Set ursaSuffixCode
     *
     *
     * Example: SuffixCode
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
     * Set destinationServiceAreas
     *
     *
     * Example: A2
     * @param string $destinationServiceAreas
     * @return $this
     */
    public function setDestinationServiceAreas(array $destinationServiceAreas)
    {
        $this->values['destinationServiceAreas'] = $destinationServiceAreas;
        return $this;
    }

    /**
     * Get destinationServiceAreas
     *
     * @return string
     */
    public function getDestinationServiceAreas()
    {
        return $this->values['destinationServiceAreas'];
    }

    /**
     * Set originPostalCodes
     *
     *
     * Example: M1M1M1
     * @param string $originPostalCodes
     * @return $this
     */
    public function setOriginPostalCodes(array $originPostalCodes)
    {
        $this->values['originPostalCodes'] = $originPostalCodes;
        return $this;
    }

    /**
     * Get originPostalCodes
     *
     * @return string
     */
    public function getOriginPostalCodes()
    {
        return $this->values['originPostalCodes'];
    }

    /**
     * Set customTransitTime
     *
     *
     * Example: THREE_DAYS
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
