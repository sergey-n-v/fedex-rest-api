<?php
namespace FedExRestApi\RateService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Specifies Shipment COD Detail
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property RateCODTransportationChargesDetail $addTransportationChargesDetail
 * @property RateParty_2 $codRecipient
 * @property string $remitToName
 * @property string $codCollectionType
 * @property RateContactAndAddress $financialInstitutionContactAndAddress
 * @property string $returnReferenceIndicatorType

 */
class RateShipmentCODDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateShipmentCODDetail';

    /**
     * Set addTransportationChargesDetail
     *
     *
     * Example:
     * @param RateCODTransportationChargesDetail $addTransportationChargesDetail
     * @return $this
     */
    public function setAddTransportationChargesDetail(RateCODTransportationChargesDetail $addTransportationChargesDetail)
    {
        $this->values['addTransportationChargesDetail'] = $addTransportationChargesDetail;
        return $this;
    }

    /**
     * Get addTransportationChargesDetail
     *
     * @return RateCODTransportationChargesDetail
     */
    public function getAddTransportationChargesDetail()
    {
        return $this->values['addTransportationChargesDetail'];
    }

    /**
     * Set codRecipient
     *
     *
     * Example:
     * @param RateParty_2 $codRecipient
     * @return $this
     */
    public function setCodRecipient(RateParty_2 $codRecipient)
    {
        $this->values['codRecipient'] = $codRecipient;
        return $this;
    }

    /**
     * Get codRecipient
     *
     * @return RateParty_2
     */
    public function getCodRecipient()
    {
        return $this->values['codRecipient'];
    }

    /**
     * Set remitToName
     *
     *
     * Example: FedEx
     * @param string $remitToName
     * @return $this
     */
    public function setRemitToName($remitToName)
    {
        $this->values['remitToName'] = $remitToName;
        return $this;
    }

    /**
     * Get remitToName
     *
     * @return string
     */
    public function getRemitToName()
    {
        return $this->values['remitToName'];
    }

    /**
     * Set codCollectionType
     *
     * simpleClass: RateCodCollectionType
     * Example:
     * @param string $codCollectionType
     * @return $this
     */
    public function setCodCollectionType($codCollectionType)
    {
        $this->values['codCollectionType'] = $codCollectionType;
        return $this;
    }

    /**
     * Get codCollectionType
     *
     * @return string
     */
    public function getCodCollectionType()
    {
        return $this->values['codCollectionType'];
    }

    /**
     * Set financialInstitutionContactAndAddress
     *
     *
     * Example:
     * @param RateContactAndAddress $financialInstitutionContactAndAddress
     * @return $this
     */
    public function setFinancialInstitutionContactAndAddress(RateContactAndAddress $financialInstitutionContactAndAddress)
    {
        $this->values['financialInstitutionContactAndAddress'] = $financialInstitutionContactAndAddress;
        return $this;
    }

    /**
     * Get financialInstitutionContactAndAddress
     *
     * @return RateContactAndAddress
     */
    public function getFinancialInstitutionContactAndAddress()
    {
        return $this->values['financialInstitutionContactAndAddress'];
    }

    /**
     * Set returnReferenceIndicatorType
     *
     * simpleClass: RateReturnReferenceIndicatorType
     * Example:
     * @param string $returnReferenceIndicatorType
     * @return $this
     */
    public function setReturnReferenceIndicatorType($returnReferenceIndicatorType)
    {
        $this->values['returnReferenceIndicatorType'] = $returnReferenceIndicatorType;
        return $this;
    }

    /**
     * Get returnReferenceIndicatorType
     *
     * @return string
     */
    public function getReturnReferenceIndicatorType()
    {
        return $this->values['returnReferenceIndicatorType'];
    }
}
