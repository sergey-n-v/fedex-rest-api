<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This contains the ADR license information, which identifies the license number, the effective date and the expiration date under which the customer is allowed to ship.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $number
 * @property string $effectiveDate
 * @property string $expirationDate

 */
class ShipLicenseOrPermitDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipLicenseOrPermitDetail';

    /**
     * Set number
     *
     * 
     * Example: 12345
     * @param string $number
     * @return $this
     */
    public function setNumber($number)
    {
        $this->values['number'] = $number;
        return $this;
    }

    /**
     * Get number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->values['number'];
    }

    /**
     * Set effectiveDate
     *
     * 
     * Example: 2019-08-09
     * @param string $effectiveDate
     * @return $this
     */
    public function setEffectiveDate($effectiveDate)
    {
        $this->values['effectiveDate'] = $effectiveDate;
        return $this;
    }

    /**
     * Get effectiveDate
     *
     * @return string
     */
    public function getEffectiveDate()
    {
        return $this->values['effectiveDate'];
    }

    /**
     * Set expirationDate
     *
     * 
     * Example: 2019-04-09
     * @param string $expirationDate
     * @return $this
     */
    public function setExpirationDate($expirationDate)
    {
        $this->values['expirationDate'] = $expirationDate;
        return $this;
    }

    /**
     * Get expirationDate
     *
     * @return string
     */
    public function getExpirationDate()
    {
        return $this->values['expirationDate'];
    }
}
