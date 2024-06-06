<?php
namespace FedExRestApi\AvailabilityService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Indicate additional contact details such as email and phone information.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property AvEMailDetail[] $emailAddresses
 * @property string $prefix
 * @property AvPhoneNumberDetail[] $phoneNumberDetails
 * @property AvCompanyName $companyName
 * @property string $title

 */
class AvContactAncillaryDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvContactAncillaryDetail';

    /**
     * These are contact email addresses.
     *
     *
     * Example:
     * @param AvEMailDetail[] $emailAddresses
     * @return $this
     */
    public function setEmailAddresses(array $emailAddresses)
    {
        $this->values['emailAddresses'] = $emailAddresses;
        return $this;
    }

    /**
     * Get emailAddresses
     *
     * @return AvEMailDetail[]
     */
    public function getEmailAddresses()
    {
        return $this->values['emailAddresses'];
    }

    /**
     * Specify the Prefix.
     *
     *
     * Example:
     * @param string $prefix
     * @return $this
     */
    public function setPrefix($prefix)
    {
        $this->values['prefix'] = $prefix;
        return $this;
    }

    /**
     * Get prefix
     *
     * @return string
     */
    public function getPrefix()
    {
        return $this->values['prefix'];
    }

    /**
     * Phone Number Details
     *
     *
     * Example:
     * @param AvPhoneNumberDetail[] $phoneNumberDetails
     * @return $this
     */
    public function setPhoneNumberDetails(array $phoneNumberDetails)
    {
        $this->values['phoneNumberDetails'] = $phoneNumberDetails;
        return $this;
    }

    /**
     * Get phoneNumberDetails
     *
     * @return AvPhoneNumberDetail[]
     */
    public function getPhoneNumberDetails()
    {
        return $this->values['phoneNumberDetails'];
    }

    /**
     * Set companyName
     *
     *
     * Example:
     * @param AvCompanyName $companyName
     * @return $this
     */
    public function setCompanyName(AvCompanyName $companyName)
    {
        $this->values['companyName'] = $companyName;
        return $this;
    }

    /**
     * Get companyName
     *
     * @return AvCompanyName
     */
    public function getCompanyName()
    {
        return $this->values['companyName'];
    }

    /**
     * Indicate the contact title.
     *
     *
     * Example:
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->values['title'] = $title;
        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->values['title'];
    }
}
