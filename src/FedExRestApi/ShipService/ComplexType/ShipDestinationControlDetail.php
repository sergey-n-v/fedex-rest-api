<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Use this object to specify the appropriate destination control statement type(s). Also make sure to specify destination country and end user.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $endUser
 * @property string $statementTypes
 * @property string $destinationCountries

 */
class ShipDestinationControlDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipDestinationControlDetail';

    /**
     * Set endUser
     *
     *
     * Example: dest country user
     * @param string $endUser
     * @return $this
     */
    public function setEndUser($endUser)
    {
        $this->values['endUser'] = $endUser;
        return $this;
    }

    /**
     * Get endUser
     *
     * @return string
     */
    public function getEndUser()
    {
        return $this->values['endUser'];
    }

    /**
     * Set statementTypes
     *
     * simpleClass: ShipStatementTypes
     * Example: DEPARTMENT_OF_COMMERCE
     * @param string $statementTypes
     * @return $this
     */
    public function setStatementTypes($statementTypes)
    {
        $this->values['statementTypes'] = $statementTypes;
        return $this;
    }

    /**
     * Get statementTypes
     *
     * @return string
     */
    public function getStatementTypes()
    {
        return $this->values['statementTypes'];
    }

    /**
     * Set destinationCountries
     *
     *
     * Example: ["USA","India"]
     * @param string $destinationCountries
     * @return $this
     */
    public function setDestinationCountries(array $destinationCountries)
    {
        $this->values['destinationCountries'] = $destinationCountries;
        return $this;
    }

    /**
     * Get destinationCountries
     *
     * @return string
     */
    public function getDestinationCountries()
    {
        return $this->values['destinationCountries'];
    }
}
