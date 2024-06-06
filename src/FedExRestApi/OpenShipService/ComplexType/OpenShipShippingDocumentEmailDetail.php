<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Specifies how to e-mail shipping documents.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property OpenShipShippingDocumentEmailRecipient[] $eMailRecipients
 * @property string $locale
 * @property string $grouping

 */
class OpenShipShippingDocumentEmailDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipShippingDocumentEmailDetail';

    /**
     * Indicates the shipping document email recipients.
     *
     *
     * Example:
     * @param OpenShipShippingDocumentEmailRecipient[] $eMailRecipients
     * @return $this
     */
    public function setEMailRecipients(array $eMailRecipients)
    {
        $this->values['eMailRecipients'] = $eMailRecipients;
        return $this;
    }

    /**
     * Get eMailRecipients
     *
     * @return OpenShipShippingDocumentEmailRecipient[]
     */
    public function getEMailRecipients()
    {
        return $this->values['eMailRecipients'];
    }

    /**
     * These are locale details.<br>Example: 'en_US'<br><a onclick='loadDocReference("locales")'>click here to see locales</a><br>Note: If the locale is left blank or an invalid locale is entered, an error message is returned in response.
     *
     *
     * Example: en_US
     * @param string $locale
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->values['locale'] = $locale;
        return $this;
    }

    /**
     * Get locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->values['locale'];
    }

    /**
     * Identifies the convention by which documents are to be grouped as email attachment.
     *
     * simpleClass: OpenShipGrouping
     * Example: NONE
     * @param string $grouping
     * @return $this
     */
    public function setGrouping($grouping)
    {
        $this->values['grouping'] = $grouping;
        return $this;
    }

    /**
     * Get grouping
     *
     * @return string
     */
    public function getGrouping()
    {
        return $this->values['grouping'];
    }
}
