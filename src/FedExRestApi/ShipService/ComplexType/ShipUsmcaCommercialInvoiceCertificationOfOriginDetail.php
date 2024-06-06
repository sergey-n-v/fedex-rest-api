<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * The instructions indicating commercial invoice certification of origin.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property ShipCustomerImageUsage[] $customerImageUsages
 * @property ShipShippingDocumentFormat $documentFormat
 * @property string $certifierSpecification
 * @property string $importerSpecification
 * @property string $producerSpecification
 * @property ShipParty_3 $producer
 * @property string $certifierJobTitle

 */
class ShipUsmcaCommercialInvoiceCertificationOfOriginDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipUsmcaCommercialInvoiceCertificationOfOriginDetail';

    /**
     * Set customerImageUsages
     *
     *
     * Example:
     * @param ShipCustomerImageUsage[] $customerImageUsages
     * @return $this
     */
    public function setCustomerImageUsages(array $customerImageUsages)
    {
        $this->values['customerImageUsages'] = $customerImageUsages;
        return $this;
    }

    /**
     * Get customerImageUsages
     *
     * @return ShipCustomerImageUsage[]
     */
    public function getCustomerImageUsages()
    {
        return $this->values['customerImageUsages'];
    }

    /**
     * Set documentFormat
     *
     *
     * Example:
     * @param ShipShippingDocumentFormat $documentFormat
     * @return $this
     */
    public function setDocumentFormat(ShipShippingDocumentFormat $documentFormat)
    {
        $this->values['documentFormat'] = $documentFormat;
        return $this;
    }

    /**
     * Get documentFormat
     *
     * @return ShipShippingDocumentFormat
     */
    public function getDocumentFormat()
    {
        return $this->values['documentFormat'];
    }

    /**
     * Set certifierSpecification
     *
     * simpleClass: ShipCertifierSpecification
     * Example: EXPORTER
     * @param string $certifierSpecification
     * @return $this
     */
    public function setCertifierSpecification($certifierSpecification)
    {
        $this->values['certifierSpecification'] = $certifierSpecification;
        return $this;
    }

    /**
     * Get certifierSpecification
     *
     * @return string
     */
    public function getCertifierSpecification()
    {
        return $this->values['certifierSpecification'];
    }

    /**
     * Set importerSpecification
     *
     * simpleClass: ShipImporterSpecification
     * Example: UNKNOWN
     * @param string $importerSpecification
     * @return $this
     */
    public function setImporterSpecification($importerSpecification)
    {
        $this->values['importerSpecification'] = $importerSpecification;
        return $this;
    }

    /**
     * Get importerSpecification
     *
     * @return string
     */
    public function getImporterSpecification()
    {
        return $this->values['importerSpecification'];
    }

    /**
     * Set producerSpecification
     *
     * simpleClass: ShipProducerSpecification
     * Example: SAME_AS_EXPORTER
     * @param string $producerSpecification
     * @return $this
     */
    public function setProducerSpecification($producerSpecification)
    {
        $this->values['producerSpecification'] = $producerSpecification;
        return $this;
    }

    /**
     * Get producerSpecification
     *
     * @return string
     */
    public function getProducerSpecification()
    {
        return $this->values['producerSpecification'];
    }

    /**
     * Set producer
     *
     *
     * Example:
     * @param ShipParty_3 $producer
     * @return $this
     */
    public function setProducer(ShipParty_3 $producer)
    {
        $this->values['producer'] = $producer;
        return $this;
    }

    /**
     * Get producer
     *
     * @return ShipParty_3
     */
    public function getProducer()
    {
        return $this->values['producer'];
    }

    /**
     * Set certifierJobTitle
     *
     *
     * Example: Manager
     * @param string $certifierJobTitle
     * @return $this
     */
    public function setCertifierJobTitle($certifierJobTitle)
    {
        $this->values['certifierJobTitle'] = $certifierJobTitle;
        return $this;
    }

    /**
     * Get certifierJobTitle
     *
     * @return string
     */
    public function getCertifierJobTitle()
    {
        return $this->values['certifierJobTitle'];
    }
}
