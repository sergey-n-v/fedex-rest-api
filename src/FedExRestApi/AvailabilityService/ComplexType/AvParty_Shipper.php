<?php
namespace FedExRestApi\AvailabilityService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * The shipper details, such as postal code, state or province code, and country code of the shipper.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property AvAddress $address
 * @property AvContact $contact
 * @property AvAccountNumber $accountNumber
 * @property AvReferenceInfo $referenceInfo
 * @property string $deliveryInstructions
 * @property AvProductInfo $productInfo

 */
class AvParty_Shipper extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvParty_Shipper';

    /**
     * Set address
     *
     *
     * Example:
     * @param AvAddress $address
     * @return $this
     */
    public function setAddress(AvAddress $address)
    {
        $this->values['address'] = $address;
        return $this;
    }

    /**
     * Get address
     *
     * @return AvAddress
     */
    public function getAddress()
    {
        return $this->values['address'];
    }

    /**
     * Set contact
     *
     *
     * Example:
     * @param AvContact $contact
     * @return $this
     */
    public function setContact(AvContact $contact)
    {
        $this->values['contact'] = $contact;
        return $this;
    }

    /**
     * Get contact
     *
     * @return AvContact
     */
    public function getContact()
    {
        return $this->values['contact'];
    }

    /**
     * Set accountNumber
     *
     *
     * Example:
     * @param AvAccountNumber1 $accountNumber
     * @return $this
     */
    public function setAccountNumber($accountNumber)
    {
        $this->values['accountNumber'] = $accountNumber;
        return $this;
    }

    /**
     * Get accountNumber
     *
     * @return AvAccountNumber1
     */
    public function getAccountNumber()
    {
        return $this->values['accountNumber'];
    }

    /**
     * Set referenceInfo
     *
     *
     * Example:
     * @param AvReferenceInfo $referenceInfo
     * @return $this
     */
    public function setReferenceInfo($referenceInfo)
    {
        $this->values['referenceInfo'] = $referenceInfo;
        return $this;
    }

    /**
     * Get referenceInfo
     *
     * @return AvReferenceInfo
     */
    public function getReferenceInfo()
    {
        return $this->values['referenceInfo'];
    }

    /**
     * Optional. Provides delivery instructions.  MaxLength is 90.
     *
     *
     * Example: Drop package at apartment Office
     * @param string $deliveryInstructions
     * @return $this
     */
    public function setDeliveryInstructions($deliveryInstructions)
    {
        $this->values['deliveryInstructions'] = $deliveryInstructions;
        return $this;
    }

    /**
     * Get deliveryInstructions
     *
     * @return string
     */
    public function getDeliveryInstructions()
    {
        return $this->values['deliveryInstructions'];
    }

    /**
     * optional information aboutsender/recipient including Address, Contact, Account, TIN, DeliveryInstructions, Piece, ReferenceInfo, ProductInfo.
     *
     *
     * Example:
     * @param AvProductInfo $productInfo
     * @return $this
     */
    public function setProductInfo($productInfo)
    {
        $this->values['productInfo'] = $productInfo;
        return $this;
    }

    /**
     * Get productInfo
     *
     * @return AvProductInfo
     */
    public function getProductInfo()
    {
        return $this->values['productInfo'];
    }
}
