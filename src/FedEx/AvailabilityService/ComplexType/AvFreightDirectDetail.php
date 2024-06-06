<?php
namespace FedEx\AvailabilityService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the freight Direct Detail.It is used for Fedex Freight Direct.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property AvFreightDirectDataDetails[] $freightDirectDataDetails

 */
class AvFreightDirectDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvFreightDirectDetail';

    /**
     * This field provides the list of data for Fedex Direct Detail service.There can be maximum of two allowed values for this field.
     *
     * 
     * Example: 
     * @param AvFreightDirectDataDetails[] $freightDirectDataDetails
     * @return $this
     */
    public function setFreightDirectDataDetails(array $freightDirectDataDetails)
    {
        $this->values['freightDirectDataDetails'] = $freightDirectDataDetails;
        return $this;
    }

    /**
     * Get freightDirectDataDetails
     *
     * @return AvFreightDirectDataDetails[]
     */
    public function getFreightDirectDataDetails()
    {
        return $this->values['freightDirectDataDetails'];
    }
}
