<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Piece Response information.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property float $netChargeAmount
 * @property ShipTransactionDetailVO[] $transactionDetails
 * @property ShipLabelResponseVO[] $packageDocuments
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
 * @property ShipCustomerReference[] $customerReferences

 */
class ShipPieceResponse extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipPieceResponse';

    /**
     * Set netChargeAmount
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
     * Set transactionDetails
     *
     * 
     * Example: 
     * @param ShipTransactionDetailVO[] $transactionDetails
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
     * @return ShipTransactionDetailVO[]
     */
    public function getTransactionDetails()
    {
        return $this->values['transactionDetails'];
    }

    /**
     * Set packageDocuments
     *
     * 
     * Example: 
     * @param ShipLabelResponseVO[] $packageDocuments
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
     * @return ShipLabelResponseVO[]
     */
    public function getPackageDocuments()
    {
        return $this->values['packageDocuments'];
    }

    /**
     * Set acceptanceTrackingNumber
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
     * Set serviceCategory
     *
     * simpleClass: ShipServiceCategory
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
     * Set listCustomerTotalCharge
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
     * Set deliveryTimestamp
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
     * Set trackingIdType
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
     * Set additionalChargesDiscount
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
     * Set netListRateAmount
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
     * Set baseRateAmount
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
     * Set packageSequenceNumber
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
     * Set netDiscountAmount
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
     * Set codcollectionAmount
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
     * Set masterTrackingNumber
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
     * Set acceptanceType
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
     * Set trackingNumber
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
     * Set successful
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
     * Set customerReferences
     *
     * 
     * Example: 
     * @param ShipCustomerReference[] $customerReferences
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
     * @return ShipCustomerReference[]
     */
    public function getCustomerReferences()
    {
        return $this->values['customerReferences'];
    }
}
