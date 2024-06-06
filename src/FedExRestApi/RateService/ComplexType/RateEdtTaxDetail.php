<?php
namespace FedExRestApi\RateService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Specifies the Estimated duties and taxes detail.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $edtTaxType
 * @property float $amount
 * @property float $taxableValue
 * @property string $name
 * @property string $description
 * @property string $formula
 * @property string $effectiveDate

 */
class RateEdtTaxDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateEdtTaxDetail';

    /**
     * Set edtTaxType
     *
     *
     * Example: TaxType
     * @param string $edtTaxType
     * @return $this
     */
    public function setEdtTaxType($edtTaxType)
    {
        $this->values['edtTaxType'] = $edtTaxType;
        return $this;
    }

    /**
     * Get edtTaxType
     *
     * @return string
     */
    public function getEdtTaxType()
    {
        return $this->values['edtTaxType'];
    }

    /**
     * Set amount
     *
     *
     * Example: 785.12
     * @param float $amount
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->values['amount'] = $amount;
        return $this;
    }

    /**
     * Get amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->values['amount'];
    }

    /**
     * Set taxableValue
     *
     *
     * Example: 562.23
     * @param float $taxableValue
     * @return $this
     */
    public function setTaxableValue($taxableValue)
    {
        $this->values['taxableValue'] = $taxableValue;
        return $this;
    }

    /**
     * Get taxableValue
     *
     * @return float
     */
    public function getTaxableValue()
    {
        return $this->values['taxableValue'];
    }

    /**
     * Set name
     *
     *
     * Example: name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->values['name'] = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->values['name'];
    }

    /**
     * Set description
     *
     *
     * Example: description
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->values['description'] = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->values['description'];
    }

    /**
     * Set formula
     *
     *
     * Example: formula
     * @param string $formula
     * @return $this
     */
    public function setFormula($formula)
    {
        $this->values['formula'] = $formula;
        return $this;
    }

    /**
     * Get formula
     *
     * @return string
     */
    public function getFormula()
    {
        return $this->values['formula'];
    }

    /**
     * Set effectiveDate
     *
     *
     * Example: 2019-12-06
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
}
