<?php
namespace FedExRestApi\RateService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * This objcet lists the rate data by service. If a service was specified in the request, there will be a single entry; if service was omitted in the request, there will be a separate entry in this for each service being compared.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $serviceType
 * @property string $serviceName
 * @property string $packagingType
 * @property RateCustomerMessage[] $customerMessages
 * @property RateRatedShipmentDetail[] $ratedShipmentDetails
 * @property RateOperationalDetail $operationalDetail
 * @property string $signatureOptionType
 * @property RateServiceDescription $serviceDescription
 * @property RateBrokerDetail $brokerDetail
 * @property RateCommit $commit
 * @property RateServiceSubOptionDetail $serviceSubOptionDetail

 */
class RateRateReplyDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateRateReplyDetail';

    /**
     * Set serviceType
     *
     *
     * Example: FEDEX_GROUND
     * @param string $serviceType
     * @return $this
     */
    public function setServiceType($serviceType)
    {
        $this->values['serviceType'] = $serviceType;
        return $this;
    }

    /**
     * Get serviceType
     *
     * @return string
     */
    public function getServiceType()
    {
        return $this->values['serviceType'];
    }

    /**
     * Set serviceName
     *
     *
     * Example: FedEx Ground®
     * @param string $serviceName
     * @return $this
     */
    public function setServiceName($serviceName)
    {
        $this->values['serviceName'] = $serviceName;
        return $this;
    }

    /**
     * Get serviceName
     *
     * @return string
     */
    public function getServiceName()
    {
        return $this->values['serviceName'];
    }

    /**
     * Set packagingType
     *
     *
     * Example: YOUR_PACKAGING
     * @param string $packagingType
     * @return $this
     */
    public function setPackagingType($packagingType)
    {
        $this->values['packagingType'] = $packagingType;
        return $this;
    }

    /**
     * Get packagingType
     *
     * @return string
     */
    public function getPackagingType()
    {
        return $this->values['packagingType'];
    }

    /**
     * Set customerMessages
     *
     *
     * Example:
     * @param RateCustomerMessage[] $customerMessages
     * @return $this
     */
    public function setCustomerMessages(array $customerMessages)
    {
        $this->values['customerMessages'] = $customerMessages;
        return $this;
    }

    /**
     * Get customerMessages
     *
     * @return RateCustomerMessage[]
     */
    public function getCustomerMessages()
    {
        return $this->values['customerMessages'];
    }

    /**
     * Set ratedShipmentDetails
     *
     *
     * Example:
     * @param RateRatedShipmentDetail[] $ratedShipmentDetails
     * @return $this
     */
    public function setRatedShipmentDetails(array $ratedShipmentDetails)
    {
        $this->values['ratedShipmentDetails'] = $ratedShipmentDetails;
        return $this;
    }

    /**
     * Get ratedShipmentDetails
     *
     * @return RateRatedShipmentDetail[]
     */
    public function getRatedShipmentDetails()
    {
        return $this->values['ratedShipmentDetails'];
    }

    /**
     * Set operationalDetail
     *
     *
     * Example:
     * @param RateOperationalDetail $operationalDetail
     * @return $this
     */
    public function setOperationalDetail(RateOperationalDetail $operationalDetail)
    {
        $this->values['operationalDetail'] = $operationalDetail;
        return $this;
    }

    /**
     * Get operationalDetail
     *
     * @return RateOperationalDetail
     */
    public function getOperationalDetail()
    {
        return $this->values['operationalDetail'];
    }

    /**
     * Set signatureOptionType
     *
     *
     * Example: SERVICE_DEFAULT
     * @param string $signatureOptionType
     * @return $this
     */
    public function setSignatureOptionType($signatureOptionType)
    {
        $this->values['signatureOptionType'] = $signatureOptionType;
        return $this;
    }

    /**
     * Get signatureOptionType
     *
     * @return string
     */
    public function getSignatureOptionType()
    {
        return $this->values['signatureOptionType'];
    }

    /**
     * Set serviceDescription
     *
     *
     * Example:
     * @param RateServiceDescription $serviceDescription
     * @return $this
     */
    public function setServiceDescription(RateServiceDescription $serviceDescription)
    {
        $this->values['serviceDescription'] = $serviceDescription;
        return $this;
    }

    /**
     * Get serviceDescription
     *
     * @return RateServiceDescription
     */
    public function getServiceDescription()
    {
        return $this->values['serviceDescription'];
    }

    /**
     * Set brokerDetail
     *
     *
     * Example:
     * @param RateBrokerDetail $brokerDetail
     * @return $this
     */
    public function setBrokerDetail(RateBrokerDetail $brokerDetail)
    {
        $this->values['brokerDetail'] = $brokerDetail;
        return $this;
    }

    /**
     * Get brokerDetail
     *
     * @return RateBrokerDetail
     */
    public function getBrokerDetail()
    {
        return $this->values['brokerDetail'];
    }

    /**
     * Set commit
     *
     *
     * Example:
     * @param RateCommit $commit
     * @return $this
     */
    public function setCommit(RateCommit $commit)
    {
        $this->values['commit'] = $commit;
        return $this;
    }

    /**
     * Get commit
     *
     * @return RateCommit
     */
    public function getCommit()
    {
        return $this->values['commit'];
    }

    /**
     * Set serviceSubOptionDetail
     *
     *
     * Example:
     * @param RateServiceSubOptionDetail $serviceSubOptionDetail
     * @return $this
     */
    public function setServiceSubOptionDetail(RateServiceSubOptionDetail $serviceSubOptionDetail)
    {
        $this->values['serviceSubOptionDetail'] = $serviceSubOptionDetail;
        return $this;
    }

    /**
     * Get serviceSubOptionDetail
     *
     * @return RateServiceSubOptionDetail
     */
    public function getServiceSubOptionDetail()
    {
        return $this->values['serviceSubOptionDetail'];
    }
}
