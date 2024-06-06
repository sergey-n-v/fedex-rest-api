<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Contains detailed tracking information for the requested packages(s). In case of duplicates, multiple track details will be populated.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property TrackTrackingNumberInfo_1 $trackingNumberInfo
 * @property TrackAdditionalTrackingInfo $additionalTrackingInfo
 * @property TrackDistance $distanceToDestination
 * @property TrackConsolidationDetail[] $consolidationDetail
 * @property string $meterNumber
 * @property TrackReturnDetail $returnDetail
 * @property TrackServiceDescriptionDetail $serviceDetail
 * @property TrackLocationDetail1 $destinationLocation
 * @property TrackStatusDetail $latestStatusDetail
 * @property TrackServiceCommitMessage $serviceCommitMessage
 * @property TrackInformationNoteDetail[] $informationNotes
 * @property TrackCXSError $error
 * @property TrackTrackSpecialHandling[] $specialHandlings
 * @property TrackAvailableImagesDetail[] $availableImages
 * @property TrackDeliveryDetails $deliveryDetails
 * @property TrackScanEvent[] $scanEvents
 * @property TrackTrackingDateAndTime[] $dateAndTimes
 * @property TrackPackageDetail $packageDetails
 * @property string $goodsClassificationCode
 * @property TrackLocationDetail1 $holdAtLocation
 * @property TrackCustomDeliveryOption[] $customDeliveryOptions
 * @property TrackTimeWindow $estimatedDeliveryTimeWindow
 * @property TrackPieceCountDetail[] $pieceCounts
 * @property TrackOriginLocation $originLocation
 * @property TrackContactAndAddress1 $recipientInformation
 * @property TrackTimeWindow $standardTransitTimeWindow
 * @property TrackTrackShipmentDetail $shipmentDetails
 * @property TrackReasonDetail $reasonDetail
 * @property string $availableNotifications
 * @property TrackContactAndAddress1 $shipperInformation
 * @property TrackAddressVO1 $lastUpdatedDestinationAddress

 */
class TrackTrackResult extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackTrackResult';

    /**
     * Set trackingNumberInfo
     *
     * 
     * Example: 
     * @param TrackTrackingNumberInfo_1 $trackingNumberInfo
     * @return $this
     */
    public function setTrackingNumberInfo(TrackTrackingNumberInfo_1 $trackingNumberInfo)
    {
        $this->values['trackingNumberInfo'] = $trackingNumberInfo;
        return $this;
    }

    /**
     * Get trackingNumberInfo
     *
     * @return TrackTrackingNumberInfo_1
     */
    public function getTrackingNumberInfo()
    {
        return $this->values['trackingNumberInfo'];
    }

    /**
     * Set additionalTrackingInfo
     *
     * 
     * Example: 
     * @param TrackAdditionalTrackingInfo $additionalTrackingInfo
     * @return $this
     */
    public function setAdditionalTrackingInfo(TrackAdditionalTrackingInfo $additionalTrackingInfo)
    {
        $this->values['additionalTrackingInfo'] = $additionalTrackingInfo;
        return $this;
    }

    /**
     * Get additionalTrackingInfo
     *
     * @return TrackAdditionalTrackingInfo
     */
    public function getAdditionalTrackingInfo()
    {
        return $this->values['additionalTrackingInfo'];
    }

    /**
     * Set distanceToDestination
     *
     * 
     * Example: 
     * @param TrackDistance $distanceToDestination
     * @return $this
     */
    public function setDistanceToDestination(TrackDistance $distanceToDestination)
    {
        $this->values['distanceToDestination'] = $distanceToDestination;
        return $this;
    }

    /**
     * Get distanceToDestination
     *
     * @return TrackDistance
     */
    public function getDistanceToDestination()
    {
        return $this->values['distanceToDestination'];
    }

    /**
     * Set consolidationDetail
     *
     * 
     * Example: 
     * @param TrackConsolidationDetail[] $consolidationDetail
     * @return $this
     */
    public function setConsolidationDetail(array $consolidationDetail)
    {
        $this->values['consolidationDetail'] = $consolidationDetail;
        return $this;
    }

    /**
     * Get consolidationDetail
     *
     * @return TrackConsolidationDetail[]
     */
    public function getConsolidationDetail()
    {
        return $this->values['consolidationDetail'];
    }

    /**
     * Set meterNumber
     *
     * 
     * Example: 8468376
     * @param string $meterNumber
     * @return $this
     */
    public function setMeterNumber($meterNumber)
    {
        $this->values['meterNumber'] = $meterNumber;
        return $this;
    }

    /**
     * Get meterNumber
     *
     * @return string
     */
    public function getMeterNumber()
    {
        return $this->values['meterNumber'];
    }

    /**
     * Set returnDetail
     *
     * 
     * Example: 
     * @param TrackReturnDetail $returnDetail
     * @return $this
     */
    public function setReturnDetail(TrackReturnDetail $returnDetail)
    {
        $this->values['returnDetail'] = $returnDetail;
        return $this;
    }

    /**
     * Get returnDetail
     *
     * @return TrackReturnDetail
     */
    public function getReturnDetail()
    {
        return $this->values['returnDetail'];
    }

    /**
     * Set serviceDetail
     *
     * 
     * Example: 
     * @param TrackServiceDescriptionDetail $serviceDetail
     * @return $this
     */
    public function setServiceDetail(TrackServiceDescriptionDetail $serviceDetail)
    {
        $this->values['serviceDetail'] = $serviceDetail;
        return $this;
    }

    /**
     * Get serviceDetail
     *
     * @return TrackServiceDescriptionDetail
     */
    public function getServiceDetail()
    {
        return $this->values['serviceDetail'];
    }

    /**
     * Set destinationLocation
     *
     * 
     * Example: 
     * @param TrackLocationDetail1 $destinationLocation
     * @return $this
     */
    public function setDestinationLocation(TrackLocationDetail1 $destinationLocation)
    {
        $this->values['destinationLocation'] = $destinationLocation;
        return $this;
    }

    /**
     * Get destinationLocation
     *
     * @return TrackLocationDetail1
     */
    public function getDestinationLocation()
    {
        return $this->values['destinationLocation'];
    }

    /**
     * Set latestStatusDetail
     *
     * 
     * Example: 
     * @param TrackStatusDetail $latestStatusDetail
     * @return $this
     */
    public function setLatestStatusDetail(TrackStatusDetail $latestStatusDetail)
    {
        $this->values['latestStatusDetail'] = $latestStatusDetail;
        return $this;
    }

    /**
     * Get latestStatusDetail
     *
     * @return TrackStatusDetail
     */
    public function getLatestStatusDetail()
    {
        return $this->values['latestStatusDetail'];
    }

    /**
     * Set serviceCommitMessage
     *
     * 
     * Example: 
     * @param TrackServiceCommitMessage $serviceCommitMessage
     * @return $this
     */
    public function setServiceCommitMessage(TrackServiceCommitMessage $serviceCommitMessage)
    {
        $this->values['serviceCommitMessage'] = $serviceCommitMessage;
        return $this;
    }

    /**
     * Get serviceCommitMessage
     *
     * @return TrackServiceCommitMessage
     */
    public function getServiceCommitMessage()
    {
        return $this->values['serviceCommitMessage'];
    }

    /**
     * Set informationNotes
     *
     * 
     * Example: 
     * @param TrackInformationNoteDetail[] $informationNotes
     * @return $this
     */
    public function setInformationNotes(array $informationNotes)
    {
        $this->values['informationNotes'] = $informationNotes;
        return $this;
    }

    /**
     * Get informationNotes
     *
     * @return TrackInformationNoteDetail[]
     */
    public function getInformationNotes()
    {
        return $this->values['informationNotes'];
    }

    /**
     * Set error
     *
     * 
     * Example: 
     * @param TrackCXSError $error
     * @return $this
     */
    public function setError(TrackCXSError $error)
    {
        $this->values['error'] = $error;
        return $this;
    }

    /**
     * Get error
     *
     * @return TrackCXSError
     */
    public function getError()
    {
        return $this->values['error'];
    }

    /**
     * Set specialHandlings
     *
     * 
     * Example: 
     * @param TrackTrackSpecialHandling[] $specialHandlings
     * @return $this
     */
    public function setSpecialHandlings(array $specialHandlings)
    {
        $this->values['specialHandlings'] = $specialHandlings;
        return $this;
    }

    /**
     * Get specialHandlings
     *
     * @return TrackTrackSpecialHandling[]
     */
    public function getSpecialHandlings()
    {
        return $this->values['specialHandlings'];
    }

    /**
     * Set availableImages
     *
     * 
     * Example: 
     * @param TrackAvailableImagesDetail[] $availableImages
     * @return $this
     */
    public function setAvailableImages(array $availableImages)
    {
        $this->values['availableImages'] = $availableImages;
        return $this;
    }

    /**
     * Get availableImages
     *
     * @return TrackAvailableImagesDetail[]
     */
    public function getAvailableImages()
    {
        return $this->values['availableImages'];
    }

    /**
     * Set deliveryDetails
     *
     * 
     * Example: 
     * @param TrackDeliveryDetails $deliveryDetails
     * @return $this
     */
    public function setDeliveryDetails(TrackDeliveryDetails $deliveryDetails)
    {
        $this->values['deliveryDetails'] = $deliveryDetails;
        return $this;
    }

    /**
     * Get deliveryDetails
     *
     * @return TrackDeliveryDetails
     */
    public function getDeliveryDetails()
    {
        return $this->values['deliveryDetails'];
    }

    /**
     * Set scanEvents
     *
     * 
     * Example: 
     * @param TrackScanEvent[] $scanEvents
     * @return $this
     */
    public function setScanEvents(array $scanEvents)
    {
        $this->values['scanEvents'] = $scanEvents;
        return $this;
    }

    /**
     * Get scanEvents
     *
     * @return TrackScanEvent[]
     */
    public function getScanEvents()
    {
        return $this->values['scanEvents'];
    }

    /**
     * Set dateAndTimes
     *
     * 
     * Example: 
     * @param TrackTrackingDateAndTime[] $dateAndTimes
     * @return $this
     */
    public function setDateAndTimes(array $dateAndTimes)
    {
        $this->values['dateAndTimes'] = $dateAndTimes;
        return $this;
    }

    /**
     * Get dateAndTimes
     *
     * @return TrackTrackingDateAndTime[]
     */
    public function getDateAndTimes()
    {
        return $this->values['dateAndTimes'];
    }

    /**
     * Set packageDetails
     *
     * 
     * Example: 
     * @param TrackPackageDetail $packageDetails
     * @return $this
     */
    public function setPackageDetails(TrackPackageDetail $packageDetails)
    {
        $this->values['packageDetails'] = $packageDetails;
        return $this;
    }

    /**
     * Get packageDetails
     *
     * @return TrackPackageDetail
     */
    public function getPackageDetails()
    {
        return $this->values['packageDetails'];
    }

    /**
     * Set goodsClassificationCode
     *
     * 
     * Example: goodsClassificationCode
     * @param string $goodsClassificationCode
     * @return $this
     */
    public function setGoodsClassificationCode($goodsClassificationCode)
    {
        $this->values['goodsClassificationCode'] = $goodsClassificationCode;
        return $this;
    }

    /**
     * Get goodsClassificationCode
     *
     * @return string
     */
    public function getGoodsClassificationCode()
    {
        return $this->values['goodsClassificationCode'];
    }

    /**
     * Set holdAtLocation
     *
     * 
     * Example: 
     * @param TrackLocationDetail1 $holdAtLocation
     * @return $this
     */
    public function setHoldAtLocation(TrackLocationDetail1 $holdAtLocation)
    {
        $this->values['holdAtLocation'] = $holdAtLocation;
        return $this;
    }

    /**
     * Get holdAtLocation
     *
     * @return TrackLocationDetail1
     */
    public function getHoldAtLocation()
    {
        return $this->values['holdAtLocation'];
    }

    /**
     * Set customDeliveryOptions
     *
     * 
     * Example: 
     * @param TrackCustomDeliveryOption[] $customDeliveryOptions
     * @return $this
     */
    public function setCustomDeliveryOptions(array $customDeliveryOptions)
    {
        $this->values['customDeliveryOptions'] = $customDeliveryOptions;
        return $this;
    }

    /**
     * Get customDeliveryOptions
     *
     * @return TrackCustomDeliveryOption[]
     */
    public function getCustomDeliveryOptions()
    {
        return $this->values['customDeliveryOptions'];
    }

    /**
     * Set estimatedDeliveryTimeWindow
     *
     * 
     * Example: 
     * @param TrackTimeWindow $estimatedDeliveryTimeWindow
     * @return $this
     */
    public function setEstimatedDeliveryTimeWindow(TrackTimeWindow $estimatedDeliveryTimeWindow)
    {
        $this->values['estimatedDeliveryTimeWindow'] = $estimatedDeliveryTimeWindow;
        return $this;
    }

    /**
     * Get estimatedDeliveryTimeWindow
     *
     * @return TrackTimeWindow
     */
    public function getEstimatedDeliveryTimeWindow()
    {
        return $this->values['estimatedDeliveryTimeWindow'];
    }

    /**
     * Set pieceCounts
     *
     * 
     * Example: 
     * @param TrackPieceCountDetail[] $pieceCounts
     * @return $this
     */
    public function setPieceCounts(array $pieceCounts)
    {
        $this->values['pieceCounts'] = $pieceCounts;
        return $this;
    }

    /**
     * Get pieceCounts
     *
     * @return TrackPieceCountDetail[]
     */
    public function getPieceCounts()
    {
        return $this->values['pieceCounts'];
    }

    /**
     * Set originLocation
     *
     * 
     * Example: 
     * @param TrackOriginLocation $originLocation
     * @return $this
     */
    public function setOriginLocation(TrackOriginLocation $originLocation)
    {
        $this->values['originLocation'] = $originLocation;
        return $this;
    }

    /**
     * Get originLocation
     *
     * @return TrackOriginLocation
     */
    public function getOriginLocation()
    {
        return $this->values['originLocation'];
    }

    /**
     * Set recipientInformation
     *
     * 
     * Example: 
     * @param TrackContactAndAddress1 $recipientInformation
     * @return $this
     */
    public function setRecipientInformation(TrackContactAndAddress1 $recipientInformation)
    {
        $this->values['recipientInformation'] = $recipientInformation;
        return $this;
    }

    /**
     * Get recipientInformation
     *
     * @return TrackContactAndAddress1
     */
    public function getRecipientInformation()
    {
        return $this->values['recipientInformation'];
    }

    /**
     * Set standardTransitTimeWindow
     *
     * 
     * Example: 
     * @param TrackTimeWindow $standardTransitTimeWindow
     * @return $this
     */
    public function setStandardTransitTimeWindow(TrackTimeWindow $standardTransitTimeWindow)
    {
        $this->values['standardTransitTimeWindow'] = $standardTransitTimeWindow;
        return $this;
    }

    /**
     * Get standardTransitTimeWindow
     *
     * @return TrackTimeWindow
     */
    public function getStandardTransitTimeWindow()
    {
        return $this->values['standardTransitTimeWindow'];
    }

    /**
     * Set shipmentDetails
     *
     * 
     * Example: 
     * @param TrackTrackShipmentDetail $shipmentDetails
     * @return $this
     */
    public function setShipmentDetails(TrackTrackShipmentDetail $shipmentDetails)
    {
        $this->values['shipmentDetails'] = $shipmentDetails;
        return $this;
    }

    /**
     * Get shipmentDetails
     *
     * @return TrackTrackShipmentDetail
     */
    public function getShipmentDetails()
    {
        return $this->values['shipmentDetails'];
    }

    /**
     * Set reasonDetail
     *
     * 
     * Example: 
     * @param TrackReasonDetail $reasonDetail
     * @return $this
     */
    public function setReasonDetail(TrackReasonDetail $reasonDetail)
    {
        $this->values['reasonDetail'] = $reasonDetail;
        return $this;
    }

    /**
     * Get reasonDetail
     *
     * @return TrackReasonDetail
     */
    public function getReasonDetail()
    {
        return $this->values['reasonDetail'];
    }

    /**
     * Set availableNotifications
     *
     * 
     * Example: ["ON_DELIVERY","ON_EXCEPTION"]
     * @param string $availableNotifications
     * @return $this
     */
    public function setAvailableNotifications(array $availableNotifications)
    {
        $this->values['availableNotifications'] = $availableNotifications;
        return $this;
    }

    /**
     * Get availableNotifications
     *
     * @return string
     */
    public function getAvailableNotifications()
    {
        return $this->values['availableNotifications'];
    }

    /**
     * Set shipperInformation
     *
     * 
     * Example: 
     * @param TrackContactAndAddress1 $shipperInformation
     * @return $this
     */
    public function setShipperInformation(TrackContactAndAddress1 $shipperInformation)
    {
        $this->values['shipperInformation'] = $shipperInformation;
        return $this;
    }

    /**
     * Get shipperInformation
     *
     * @return TrackContactAndAddress1
     */
    public function getShipperInformation()
    {
        return $this->values['shipperInformation'];
    }

    /**
     * Set lastUpdatedDestinationAddress
     *
     * 
     * Example: 
     * @param TrackAddressVO1 $lastUpdatedDestinationAddress
     * @return $this
     */
    public function setLastUpdatedDestinationAddress(TrackAddressVO1 $lastUpdatedDestinationAddress)
    {
        $this->values['lastUpdatedDestinationAddress'] = $lastUpdatedDestinationAddress;
        return $this;
    }

    /**
     * Get lastUpdatedDestinationAddress
     *
     * @return TrackAddressVO1
     */
    public function getLastUpdatedDestinationAddress()
    {
        return $this->values['lastUpdatedDestinationAddress'];
    }
}
