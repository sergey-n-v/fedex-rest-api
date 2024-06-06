<?php
namespace FedExRestApi\OpenShipService\ComplexType;

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
class OpenShipDestinationControlDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipDestinationControlDetail';

    /**
     * Specify End User name. Its is required if StatementTypes is entered as DEPARTMENT_OF_STATE. <br>Example: John Wick
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
     * Specify appropriate destination control statement type(s), Also make sure to specify destination country and end user.
     *
     * simpleClass: OpenShipStatementTypes
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
     * Specify DCS shipment destination country. You may enter up to four country codes in this element. Up to 11 alphanumeric characters are allowed.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>click here to see Country codes</a>
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
