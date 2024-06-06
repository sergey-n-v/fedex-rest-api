<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies how to e-mail shipping documents.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property ShipShippingDocumentEmailRecipient[] $eMailRecipients
 * @property string $locale
 * @property string $grouping

 */
class ShipShippingDocumentEmailDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipShippingDocumentEmailDetail';

    /**
     * Set eMailRecipients
     *
     * 
     * Example: 
     * @param ShipShippingDocumentEmailRecipient[] $eMailRecipients
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
     * @return ShipShippingDocumentEmailRecipient[]
     */
    public function getEMailRecipients()
    {
        return $this->values['eMailRecipients'];
    }

    /**
     * Set locale
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
     * Set grouping
     *
     * simpleClass: ShipGrouping
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
