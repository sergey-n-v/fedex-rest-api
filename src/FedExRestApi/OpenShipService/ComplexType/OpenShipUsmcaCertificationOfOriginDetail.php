<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * The instructions indicating how to print the USMCA Certificate of Origin (e.g. whether or not to include the instructions, image type, etc ...).
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property OpenShipCustomerImageUsage[] $customerImageUsages
 * @property OpenShipShippingDocumentFormat $documentFormat
 * @property string $certifierSpecification
 * @property string $importerSpecification
 * @property string $producerSpecification
 * @property OpenShipParty_3 $producer
 * @property OpenShipRetrieveDateRange $blanketPeriod
 * @property string $certifierJobTitle

 */
class OpenShipUsmcaCertificationOfOriginDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipUsmcaCertificationOfOriginDetail';

    /**
     * Specifies the usage and identification of customer supplied images to be used on this document.
     *
     *
     * Example:
     * @param OpenShipCustomerImageUsage[] $customerImageUsages
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
     * @return OpenShipCustomerImageUsage[]
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
     * @param OpenShipShippingDocumentFormat $documentFormat
     * @return $this
     */
    public function setDocumentFormat(OpenShipShippingDocumentFormat $documentFormat)
    {
        $this->values['documentFormat'] = $documentFormat;
        return $this;
    }

    /**
     * Get documentFormat
     *
     * @return OpenShipShippingDocumentFormat
     */
    public function getDocumentFormat()
    {
        return $this->values['documentFormat'];
    }

    /**
     * This is certifier specification.
     *
     * simpleClass: OpenShipCertifierSpecification
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
     * This is importer specification.
     *
     * simpleClass: OpenShipImporterSpecification
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
     * This is producer specification.
     *
     * simpleClass: OpenShipProducerSpecification
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
     * @param OpenShipParty_3 $producer
     * @return $this
     */
    public function setProducer(OpenShipParty_3 $producer)
    {
        $this->values['producer'] = $producer;
        return $this;
    }

    /**
     * Get producer
     *
     * @return OpenShipParty_3
     */
    public function getProducer()
    {
        return $this->values['producer'];
    }

    /**
     * Set blanketPeriod
     *
     *
     * Example:
     * @param OpenShipRetrieveDateRange $blanketPeriod
     * @return $this
     */
    public function setBlanketPeriod(OpenShipRetrieveDateRange $blanketPeriod)
    {
        $this->values['blanketPeriod'] = $blanketPeriod;
        return $this;
    }

    /**
     * Get blanketPeriod
     *
     * @return OpenShipRetrieveDateRange
     */
    public function getBlanketPeriod()
    {
        return $this->values['blanketPeriod'];
    }

    /**
     * Specify the job title of the certifier
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
