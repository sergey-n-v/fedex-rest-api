<?php
namespace FedExRestApi\RateService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Specifies Printed Reference.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $printedReferenceType
 * @property string $value

 */
class RateEMailNotificationDetail_PrintedReference extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateEMailNotificationDetail_PrintedReference';

    /**
     * Set printedReferenceType
     *
     * simpleClass: RatePrintedReferenceType
     * Example:
     * @param string $printedReferenceType
     * @return $this
     */
    public function setPrintedReferenceType($printedReferenceType)
    {
        $this->values['printedReferenceType'] = $printedReferenceType;
        return $this;
    }

    /**
     * Get printedReferenceType
     *
     * @return string
     */
    public function getPrintedReferenceType()
    {
        return $this->values['printedReferenceType'];
    }

    /**
     * Set value
     *
     *
     * Example:
     * @param string $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->values['value'] = $value;
        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->values['value'];
    }
}
