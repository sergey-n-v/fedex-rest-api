<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ShipTaxpayerIdentification
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $number
 * @property string $tinType
 * @property string $usage
 * @property string $effectiveDate
 * @property string $expirationDate

 */
class ShipTaxpayerIdentification extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipTaxpayerIdentification';

    /**
     * Set number
     *
     * 
     * Example: 123567
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
     * Set tinType
     *
     * simpleClass: ShipTinType
     * Example: FEDERAL
     * @param string $tinType
     * @return $this
     */
    public function setTinType($tinType)
    {
        $this->values['tinType'] = $tinType;
        return $this;
    }

    /**
     * Get tinType
     *
     * @return string
     */
    public function getTinType()
    {
        return $this->values['tinType'];
    }

    /**
     * Set usage
     *
     * 
     * Example: usage
     * @param string $usage
     * @return $this
     */
    public function setUsage($usage)
    {
        $this->values['usage'] = $usage;
        return $this;
    }

    /**
     * Get usage
     *
     * @return string
     */
    public function getUsage()
    {
        return $this->values['usage'];
    }

    /**
     * Set effectiveDate
     *
     * 
     * Example: 2000-01-23T04:56:07.000+00:00
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
     * Example: 2000-01-23T04:56:07.000+00:00
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
