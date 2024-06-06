<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specify the low Value statement necessary for printing the USMCA for Customs documentation.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property boolean $countryOfOriginLowValueDocumentRequested
 * @property string $customsRole

 */
class OpenShipUsmcaLowValueStatementDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipUsmcaLowValueStatementDetail';

    /**
     * Specify the country Of Origin of Low Value Document for Customs declaration.
     *
     * 
     * Example: 1
     * @param boolean $countryOfOriginLowValueDocumentRequested
     * @return $this
     */
    public function setCountryOfOriginLowValueDocumentRequested($countryOfOriginLowValueDocumentRequested)
    {
        $this->values['countryOfOriginLowValueDocumentRequested'] = $countryOfOriginLowValueDocumentRequested;
        return $this;
    }

    /**
     * Get countryOfOriginLowValueDocumentRequested
     *
     * @return boolean
     */
    public function getCountryOfOriginLowValueDocumentRequested()
    {
        return $this->values['countryOfOriginLowValueDocumentRequested'];
    }

    /**
     * Specify the shipper role for Customs declaration.
     *
     * simpleClass: OpenShipCustomsRole
     * Example: EXPORTER
     * @param string $customsRole
     * @return $this
     */
    public function setCustomsRole($customsRole)
    {
        $this->values['customsRole'] = $customsRole;
        return $this;
    }

    /**
     * Get customsRole
     *
     * @return string
     */
    public function getCustomsRole()
    {
        return $this->values['customsRole'];
    }
}
