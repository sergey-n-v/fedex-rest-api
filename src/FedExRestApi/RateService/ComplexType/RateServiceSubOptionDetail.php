<?php
namespace FedExRestApi\RateService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * These are supporting detail for applied options identified in a rate quote.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $smartPostIndiciaType

 */
class RateServiceSubOptionDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateServiceSubOptionDetail';

    /**
     * Set smartPostIndiciaType
     *
     * simpleClass: RateSmartPostIndiciaType
     * Example: PRESORTED_STANDARD
     * @param string $smartPostIndiciaType
     * @return $this
     */
    public function setSmartPostIndiciaType($smartPostIndiciaType)
    {
        $this->values['smartPostIndiciaType'] = $smartPostIndiciaType;
        return $this;
    }

    /**
     * Get smartPostIndiciaType
     *
     * @return string
     */
    public function getSmartPostIndiciaType()
    {
        return $this->values['smartPostIndiciaType'];
    }
}
