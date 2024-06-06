<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

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
class ShipUsmcaLowValueStatementDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipUsmcaLowValueStatementDetail';

    /**
     * Set countryOfOriginLowValueDocumentRequested
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
     * Set customsRole
     *
     * simpleClass: ShipCustomsRole
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
