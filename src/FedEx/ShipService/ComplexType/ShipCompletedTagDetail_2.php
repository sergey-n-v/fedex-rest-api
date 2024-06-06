<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ShipCompletedTagDetail_2
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $confirmationNumber
 * @property string $location
 * @property string $dispatchDate

 */
class ShipCompletedTagDetail_2 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipCompletedTagDetail_2';

    /**
     * Set confirmationNumber
     *
     * 
     * Example: 275
     * @param string $confirmationNumber
     * @return $this
     */
    public function setConfirmationNumber($confirmationNumber)
    {
        $this->values['confirmationNumber'] = $confirmationNumber;
        return $this;
    }

    /**
     * Get confirmationNumber
     *
     * @return string
     */
    public function getConfirmationNumber()
    {
        return $this->values['confirmationNumber'];
    }

    /**
     * Set location
     *
     * 
     * Example: NQAA
     * @param string $location
     * @return $this
     */
    public function setLocation($location)
    {
        $this->values['location'] = $location;
        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->values['location'];
    }

    /**
     * Set dispatchDate
     *
     * 
     * Example: 2019-08-03
     * @param string $dispatchDate
     * @return $this
     */
    public function setDispatchDate($dispatchDate)
    {
        $this->values['dispatchDate'] = $dispatchDate;
        return $this;
    }

    /**
     * Get dispatchDate
     *
     * @return string
     */
    public function getDispatchDate()
    {
        return $this->values['dispatchDate'];
    }
}
