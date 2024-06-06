<?php
namespace FedEx\AuthorizationService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The request elements for OAuth API.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $grant_type
 * @property string $client_id
 * @property string $client_secret
 * @property string $child_Key
 * @property string $child_secret

 */
class AuthFullSchema extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AuthFullSchema';

    /**
     * Specify Type of customer requesting the Oauth token.<br>Valid Values: client_credentials, csp_credentials, client_pc_credentials<br>Note:<br>client_credentials - should be used for customers and brand new Compatible Provider customers who are yet to unboard child accounts.<br>csp_credentials - should be used for Compatible Provider customers with existing child accounts.<br>client_pc_credentials – should be used for Proprietary Parent Child customers.
     *
     * @param string $grant_type
     * @return $this
     */
    public function setGrantType($grant_type)
    {
        $this->values['grant_type'] = $grant_type;
        return $this;
    }

    /**
     * Specify Type of customer requesting the Oauth token.<br>Valid Values: client_credentials, csp_credentials, client_pc_credentials<br>Note:<br>client_credentials - should be used for customers and brand new Compatible Provider customers who are yet to unboard child accounts.<br>csp_credentials - should be used for Compatible Provider customers with existing child accounts.<br>client_pc_credentials – should be used for Proprietary Parent Child customers.
     *
     * @return string
     */
    public function getGrantType()
    {
        return $this->values['grant_type'];
    }

    /**
     * Specify the Client ID also known as API Key received during FedEx Developer portal registration.<br>Example: XXXX-XXX-XXXX-XXX
     *
     * @param string $client_id
     * @return $this
     */
    public function setClientId($client_id)
    {
        $this->values['client_id'] = $client_id;
        return $this;
    }

    /**
     * Specify the Client ID also known as API Key received during FedEx Developer portal registration.<br>Example: XXXX-XXX-XXXX-XXX
     *
     * @return string
     */
    public function getClientId()
    {
        return $this->values['client_id'];
    }

    /**
     * Specify the Client secret also known as Secret Key received during FedEx Developer portal registration.<br>Example: XXXX-XXX-XXXX-XXX
     *
     * @param string $client_secret
     * @return $this
     */
    public function setClientSecret($client_secret)
    {
        $this->values['client_secret'] = $client_secret;
        return $this;
    }

    /**
     * Specify the Client secret also known as Secret Key received during FedEx Developer portal registration.<br>Example: XXXX-XXX-XXXX-XXX
     *
     * @return string
     */
    public function getClientSecret()
    {
        return $this->values['client_secret'];
    }

    /**
     * Specify the Client ID also known as Customer Key. This element is used as a login credential for a Compatible customer or a Proprietary Parent Child customer to access the application on behalf of their customer.<br>Example: XXXX-XXX-XXXX-XXX<br>Note: This element should be used by Compatible and Proprietary Parent Child customers.
     *
     * @param string $child_Key
     * @return $this
     */
    public function setChildKey($child_Key)
    {
        $this->values['child_Key'] = $child_Key;
        return $this;
    }

    /**
     * Specify the Client ID also known as Customer Key. This element is used as a login credential for a Compatible customer or a Proprietary Parent Child customer to access the application on behalf of their customer.<br>Example: XXXX-XXX-XXXX-XXX<br>Note: This element should be used by Compatible and Proprietary Parent Child customers.
     *
     * @return string
     */
    public function getChildKey()
    {
        return $this->values['child_Key'];
    }

    /**
     * Specify the Client secret also known as Customer Secret. This element is used as a login credential for a Compatible customer or a Proprietary Parent Child customer to access the application on behalf of their customer.<br>Example: XXXX-XXX-XXXX-XXX<br>Note: This element should be used by Compatible and Proprietary Parent Child customers.
     *
     * @param string $child_secret
     * @return $this
     */
    public function setChildSecret($child_secret)
    {
        $this->values['child_secret'] = $child_secret;
        return $this;
    }

    /**
     * Specify the Client secret also known as Customer Secret. This element is used as a login credential for a Compatible customer or a Proprietary Parent Child customer to access the application on behalf of their customer.<br>Example: XXXX-XXX-XXXX-XXX<br>Note: This element should be used by Compatible and Proprietary Parent Child customers.
     *
     * @return string
     */
    public function getChildSecret()
    {
        return $this->values['child_secret'];
    }
}
