<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Piece Response information.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property float $netChargeAmount
 * @property OpenShipTransactionDetailVO[] $transactionDetails
 * @property OpenShipLabelResponseVO[] $packageDocuments
 * @property string $acceptanceTrackingNumber
 * @property string $serviceCategory
 * @property string $listCustomerTotalCharge
 * @property string $deliveryTimestamp
 * @property string $trackingIdType
 * @property float $additionalChargesDiscount
 * @property float $netListRateAmount
 * @property float $baseRateAmount
 * @property int $packageSequenceNumber
 * @property float $netDiscountAmount
 * @property float $codcollectionAmount
 * @property string $masterTrackingNumber
 * @property string $acceptanceType
 * @property string $trackingNumber
 * @property boolean $successful
 * @property OpenShipCustomerReference[] $customerReferences

 */
class OpenShipPieceResponse extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipPieceResponse';

    /**
     * Indicates the net charges amount.<br>Example: 21.45
     *
     * 
     * Example: 21.45
     * @param float $netChargeAmount
     * @return $this
     */
    public function setNetChargeAmount($netChargeAmount)
    {
        $this->values['netChargeAmount'] = $netChargeAmount;
        return $this;
    }

    /**
     * Get netChargeAmount
     *
     * @return float
     */
    public function getNetChargeAmount()
    {
        return $this->values['netChargeAmount'];
    }

    /**
     * Indicates data received that governs data payload language/translations. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * 
     * Example: 
     * @param OpenShipTransactionDetailVO[] $transactionDetails
     * @return $this
     */
    public function setTransactionDetails(array $transactionDetails)
    {
        $this->values['transactionDetails'] = $transactionDetails;
        return $this;
    }

    /**
     * Get transactionDetails
     *
     * @return OpenShipTransactionDetailVO[]
     */
    public function getTransactionDetails()
    {
        return $this->values['transactionDetails'];
    }

    /**
     * These are package documents returned in the response.
     *
     * 
     * Example: 
     * @param OpenShipLabelResponseVO[] $packageDocuments
     * @return $this
     */
    public function setPackageDocuments(array $packageDocuments)
    {
        $this->values['packageDocuments'] = $packageDocuments;
        return $this;
    }

    /**
     * Get packageDocuments
     *
     * @return OpenShipLabelResponseVO[]
     */
    public function getPackageDocuments()
    {
        return $this->values['packageDocuments'];
    }

    /**
     * Indicates the acceptance tracking number.<br>Example: 7949XXXXX5000
     *
     * 
     * Example: 794953535000
     * @param string $acceptanceTrackingNumber
     * @return $this
     */
    public function setAcceptanceTrackingNumber($acceptanceTrackingNumber)
    {
        $this->values['acceptanceTrackingNumber'] = $acceptanceTrackingNumber;
        return $this;
    }

    /**
     * Get acceptanceTrackingNumber
     *
     * @return string
     */
    public function getAcceptanceTrackingNumber()
    {
        return $this->values['acceptanceTrackingNumber'];
    }

    /**
     * Indicates the service category.
     *
     * simpleClass: OpenShipServiceCategory
     * Example: EXPRESS
     * @param string $serviceCategory
     * @return $this
     */
    public function setServiceCategory($serviceCategory)
    {
        $this->values['serviceCategory'] = $serviceCategory;
        return $this;
    }

    /**
     * Get serviceCategory
     *
     * @return string
     */
    public function getServiceCategory()
    {
        return $this->values['serviceCategory'];
    }

    /**
     * Indicates total charges applicable to the customer.<br>Example: listCustomerTotalCharge
     *
     * 
     * Example: listCustomerTotalCharge
     * @param string $listCustomerTotalCharge
     * @return $this
     */
    public function setListCustomerTotalCharge($listCustomerTotalCharge)
    {
        $this->values['listCustomerTotalCharge'] = $listCustomerTotalCharge;
        return $this;
    }

    /**
     * Get listCustomerTotalCharge
     *
     * @return string
     */
    public function getListCustomerTotalCharge()
    {
        return $this->values['listCustomerTotalCharge'];
    }

    /**
     * Indicates delivery date.<br>Example: 2012-09-23
     *
     * 
     * Example: 2012-09-23
     * @param string $deliveryTimestamp
     * @return $this
     */
    public function setDeliveryTimestamp($deliveryTimestamp)
    {
        $this->values['deliveryTimestamp'] = $deliveryTimestamp;
        return $this;
    }

    /**
     * Get deliveryTimestamp
     *
     * @return string
     */
    public function getDeliveryTimestamp()
    {
        return $this->values['deliveryTimestamp'];
    }

    /**
     * Indicates the type of the tracking identifier.
     *
     * 
     * Example: FEDEX
     * @param string $trackingIdType
     * @return $this
     */
    public function setTrackingIdType($trackingIdType)
    {
        $this->values['trackingIdType'] = $trackingIdType;
        return $this;
    }

    /**
     * Get trackingIdType
     *
     * @return string
     */
    public function getTrackingIdType()
    {
        return $this->values['trackingIdType'];
    }

    /**
     * These are additional charges or discounts.<br>Example: 621.45
     *
     * 
     * Example: 621.45
     * @param float $additionalChargesDiscount
     * @return $this
     */
    public function setAdditionalChargesDiscount($additionalChargesDiscount)
    {
        $this->values['additionalChargesDiscount'] = $additionalChargesDiscount;
        return $this;
    }

    /**
     * Get additionalChargesDiscount
     *
     * @return float
     */
    public function getAdditionalChargesDiscount()
    {
        return $this->values['additionalChargesDiscount'];
    }

    /**
     * Indicates the net List rate amount.<br>Example: 1.45
     *
     * 
     * Example: 1.45
     * @param float $netListRateAmount
     * @return $this
     */
    public function setNetListRateAmount($netListRateAmount)
    {
        $this->values['netListRateAmount'] = $netListRateAmount;
        return $this;
    }

    /**
     * Get netListRateAmount
     *
     * @return float
     */
    public function getNetListRateAmount()
    {
        return $this->values['netListRateAmount'];
    }

    /**
     * Specifies the base rate amount.<br>Example: 321.45
     *
     * 
     * Example: 321.45
     * @param float $baseRateAmount
     * @return $this
     */
    public function setBaseRateAmount($baseRateAmount)
    {
        $this->values['baseRateAmount'] = $baseRateAmount;
        return $this;
    }

    /**
     * Get baseRateAmount
     *
     * @return float
     */
    public function getBaseRateAmount()
    {
        return $this->values['baseRateAmount'];
    }

    /**
     * Indicates package sequence number.<br>Example: 215
     *
     * 
     * Example: 215
     * @param int $packageSequenceNumber
     * @return $this
     */
    public function setPackageSequenceNumber($packageSequenceNumber)
    {
        $this->values['packageSequenceNumber'] = $packageSequenceNumber;
        return $this;
    }

    /**
     * Get packageSequenceNumber
     *
     * @return int
     */
    public function getPackageSequenceNumber()
    {
        return $this->values['packageSequenceNumber'];
    }

    /**
     * Specifies the net discount amount.<br>Example: 121.45
     *
     * 
     * Example: 121.45
     * @param float $netDiscountAmount
     * @return $this
     */
    public function setNetDiscountAmount($netDiscountAmount)
    {
        $this->values['netDiscountAmount'] = $netDiscountAmount;
        return $this;
    }

    /**
     * Get netDiscountAmount
     *
     * @return float
     */
    public function getNetDiscountAmount()
    {
        return $this->values['netDiscountAmount'];
    }

    /**
     * Specifies the Collect on Delivery collection amount.<br>Example: 231.45
     *
     * 
     * Example: 231.45
     * @param float $codcollectionAmount
     * @return $this
     */
    public function setCodcollectionAmount($codcollectionAmount)
    {
        $this->values['codcollectionAmount'] = $codcollectionAmount;
        return $this;
    }

    /**
     * Get codcollectionAmount
     *
     * @return float
     */
    public function getCodcollectionAmount()
    {
        return $this->values['codcollectionAmount'];
    }

    /**
     * This is a master tracking number for the shipment (must be unique for stand-alone open shipments, or unique within consolidation if consolidation key is provided).<br>Example: 794XXXXX5000
     *
     * 
     * Example: 794953535000
     * @param string $masterTrackingNumber
     * @return $this
     */
    public function setMasterTrackingNumber($masterTrackingNumber)
    {
        $this->values['masterTrackingNumber'] = $masterTrackingNumber;
        return $this;
    }

    /**
     * Get masterTrackingNumber
     *
     * @return string
     */
    public function getMasterTrackingNumber()
    {
        return $this->values['masterTrackingNumber'];
    }

    /**
     * Indicates acceptance type.
     *
     * 
     * Example: acceptanceType
     * @param string $acceptanceType
     * @return $this
     */
    public function setAcceptanceType($acceptanceType)
    {
        $this->values['acceptanceType'] = $acceptanceType;
        return $this;
    }

    /**
     * Get acceptanceType
     *
     * @return string
     */
    public function getAcceptanceType()
    {
        return $this->values['acceptanceType'];
    }

    /**
     * This is a tracking number associated with this package. <br>Example: 49XXX0000XXX20032835
     *
     * 
     * Example: 794953535000
     * @param string $trackingNumber
     * @return $this
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->values['trackingNumber'] = $trackingNumber;
        return $this;
    }

    /**
     * Get trackingNumber
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->values['trackingNumber'];
    }

    /**
     * Returns true if the responses are successful otherwise false.
     *
     * 
     * Example: 1
     * @param boolean $successful
     * @return $this
     */
    public function setSuccessful($successful)
    {
        $this->values['successful'] = $successful;
        return $this;
    }

    /**
     * Get successful
     *
     * @return boolean
     */
    public function getSuccessful()
    {
        return $this->values['successful'];
    }

    /**
     * These are additional customer reference data.<br>Note: The groupPackageCount must be specified to retrieve customer references.
     *
     * 
     * Example: 
     * @param OpenShipCustomerReference[] $customerReferences
     * @return $this
     */
    public function setCustomerReferences(array $customerReferences)
    {
        $this->values['customerReferences'] = $customerReferences;
        return $this;
    }

    /**
     * Get customerReferences
     *
     * @return OpenShipCustomerReference[]
     */
    public function getCustomerReferences()
    {
        return $this->values['customerReferences'];
    }
}
