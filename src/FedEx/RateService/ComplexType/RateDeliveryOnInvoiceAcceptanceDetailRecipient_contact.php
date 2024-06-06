<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * RateDeliveryOnInvoiceAcceptanceDetailRecipient_contact
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $companyName
 * @property string $faxNumber
 * @property string $personName
 * @property string $phoneNumber

 */
class RateDeliveryOnInvoiceAcceptanceDetailRecipient_contact extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateDeliveryOnInvoiceAcceptanceDetailRecipient_contact';

    /**
     * Set companyName
     *
     * 
     * Example: FedEx
     * @param string $companyName
     * @return $this
     */
    public function setCompanyName($companyName)
    {
        $this->values['companyName'] = $companyName;
        return $this;
    }

    /**
     * Get companyName
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->values['companyName'];
    }

    /**
     * Set faxNumber
     *
     * 
     * Example: 9013577890
     * @param string $faxNumber
     * @return $this
     */
    public function setFaxNumber($faxNumber)
    {
        $this->values['faxNumber'] = $faxNumber;
        return $this;
    }

    /**
     * Get faxNumber
     *
     * @return string
     */
    public function getFaxNumber()
    {
        return $this->values['faxNumber'];
    }

    /**
     * Set personName
     *
     * 
     * Example: John Taylor
     * @param string $personName
     * @return $this
     */
    public function setPersonName($personName)
    {
        $this->values['personName'] = $personName;
        return $this;
    }

    /**
     * Get personName
     *
     * @return string
     */
    public function getPersonName()
    {
        return $this->values['personName'];
    }

    /**
     * Set phoneNumber
     *
     * 
     * Example: 9013577890
     * @param string $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->values['phoneNumber'] = $phoneNumber;
        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->values['phoneNumber'];
    }
}
