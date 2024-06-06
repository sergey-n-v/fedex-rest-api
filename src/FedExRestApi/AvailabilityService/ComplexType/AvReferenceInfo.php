<?php
namespace FedExRestApi\AvailabilityService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Customers configurable reference Information for the shipment
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $regulatoryReferenceNumber
 * @property string $yourReference
 * @property string $countryCode
 * @property string $postalCode
 * @property string $purchaseOrderNumber
 * @property string $departmentNumber
 * @property string $invoiceNumber
 * @property string $accountNbr
 * @property string $shipDate
 * @property string $referenceValue

 */
class AvReferenceInfo extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvReferenceInfo';

    /**
     * Regulatory Reference Number for the shipment
     *
     *
     * Example:
     * @param string $regulatoryReferenceNumber
     * @return $this
     */
    public function setRegulatoryReferenceNumber($regulatoryReferenceNumber)
    {
        $this->values['regulatoryReferenceNumber'] = $regulatoryReferenceNumber;
        return $this;
    }

    /**
     * Get regulatoryReferenceNumber
     *
     * @return string
     */
    public function getRegulatoryReferenceNumber()
    {
        return $this->values['regulatoryReferenceNumber'];
    }

    /**
     * a customizable reference field for the shipment
     *
     *
     * Example:
     * @param string $yourReference
     * @return $this
     */
    public function setYourReference($yourReference)
    {
        $this->values['yourReference'] = $yourReference;
        return $this;
    }

    /**
     * Get yourReference
     *
     * @return string
     */
    public function getYourReference()
    {
        return $this->values['yourReference'];
    }

    /**
     * CountryCode of the ReferenceInfo
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
     * PostalCode of the ReferenceInfo
     *
     *
     * Example: 38654
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
     * Purchase Order Number reference for the shipment
     *
     *
     * Example:
     * @param string $purchaseOrderNumber
     * @return $this
     */
    public function setPurchaseOrderNumber($purchaseOrderNumber)
    {
        $this->values['purchaseOrderNumber'] = $purchaseOrderNumber;
        return $this;
    }

    /**
     * Get purchaseOrderNumber
     *
     * @return string
     */
    public function getPurchaseOrderNumber()
    {
        return $this->values['purchaseOrderNumber'];
    }

    /**
     * Department Number reference for the shipment
     *
     *
     * Example:
     * @param string $departmentNumber
     * @return $this
     */
    public function setDepartmentNumber($departmentNumber)
    {
        $this->values['departmentNumber'] = $departmentNumber;
        return $this;
    }

    /**
     * Get departmentNumber
     *
     * @return string
     */
    public function getDepartmentNumber()
    {
        return $this->values['departmentNumber'];
    }

    /**
     * Invoice Number reference for the shipment
     *
     *
     * Example:
     * @param string $invoiceNumber
     * @return $this
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        $this->values['invoiceNumber'] = $invoiceNumber;
        return $this;
    }

    /**
     * Get invoiceNumber
     *
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->values['invoiceNumber'];
    }

    /**
     * AccountNbr reference for the shipment
     *
     *
     * Example:
     * @param string $accountNbr
     * @return $this
     */
    public function setAccountNbr($accountNbr)
    {
        $this->values['accountNbr'] = $accountNbr;
        return $this;
    }

    /**
     * Get accountNbr
     *
     * @return string
     */
    public function getAccountNbr()
    {
        return $this->values['accountNbr'];
    }

    /**
     * Ship Date for the shipment
     *
     *
     * Example: 2019-12-29
     * @param string $shipDate
     * @return $this
     */
    public function setShipDate($shipDate)
    {
        $this->values['shipDate'] = $shipDate;
        return $this;
    }

    /**
     * Get shipDate
     *
     * @return string
     */
    public function getShipDate()
    {
        return $this->values['shipDate'];
    }

    /**
     * Reference Value attached to the shipment
     *
     *
     * Example:
     * @param string $referenceValue
     * @return $this
     */
    public function setReferenceValue($referenceValue)
    {
        $this->values['referenceValue'] = $referenceValue;
        return $this;
    }

    /**
     * Get referenceValue
     *
     * @return string
     */
    public function getReferenceValue()
    {
        return $this->values['referenceValue'];
    }
}
