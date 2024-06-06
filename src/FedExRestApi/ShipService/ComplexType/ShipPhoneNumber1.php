<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Indicate the phone number. Only numeric values allowed.<br> Note that phoneNumber is mandatory when homedeliveryPremiumType is DATE_CERTAIN or EVENING.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $areaCode
 * @property string $localNumber
 * @property string $extension
 * @property string $personalIdentificationNumber

 */
class ShipPhoneNumber1 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipPhoneNumber1';

    /**
     * Set areaCode
     *
     *
     * Example:
     * @param string $areaCode
     * @return $this
     */
    public function setAreaCode($areaCode)
    {
        $this->values['areaCode'] = $areaCode;
        return $this;
    }

    /**
     * Get areaCode
     *
     * @return string
     */
    public function getAreaCode()
    {
        return $this->values['areaCode'];
    }

    /**
     * Set localNumber
     *
     *
     * Example:
     * @param string $localNumber
     * @return $this
     */
    public function setLocalNumber($localNumber)
    {
        $this->values['localNumber'] = $localNumber;
        return $this;
    }

    /**
     * Get localNumber
     *
     * @return string
     */
    public function getLocalNumber()
    {
        return $this->values['localNumber'];
    }

    /**
     * Set extension
     *
     *
     * Example:
     * @param string $extension
     * @return $this
     */
    public function setExtension($extension)
    {
        $this->values['extension'] = $extension;
        return $this;
    }

    /**
     * Get extension
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->values['extension'];
    }

    /**
     * Set personalIdentificationNumber
     *
     *
     * Example:
     * @param string $personalIdentificationNumber
     * @return $this
     */
    public function setPersonalIdentificationNumber($personalIdentificationNumber)
    {
        $this->values['personalIdentificationNumber'] = $personalIdentificationNumber;
        return $this;
    }

    /**
     * Get personalIdentificationNumber
     *
     * @return string
     */
    public function getPersonalIdentificationNumber()
    {
        return $this->values['personalIdentificationNumber'];
    }
}
