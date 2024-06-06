<?php


namespace FedExRestApi\AuthorizationService\ComplexType;


use FedExRestApi\AbstractComplexType;

class AuthorizationRequest extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AuthorizationRequest';

    /**
     *
     *
     * @var string $grantType
     *
     * description: Specify Type of customer requesting the Oauth token.<br>Valid Values: client_credentials, csp_credentials, client_pc_credentials<br>Note:<br>client_credentials - should be used for customers and brand new Compatible Provider customers who are yet to unboard child accounts.<br>csp_credentials - should be used for Compatible Provider customers with existing child accounts.<br>client_pc_credentials – should be used for Proprietary Parent Child customers.
     * use GrantTypeSimple
     */
    public function setGrantType(string $grantType)
    {
        $this->values['grant_type'] = $grantType;
        return $this;
    }

    /**
     * description: Specify the Client secret also known as Secret Key received during FedEx Developer portal registration.<br>Example: XXXX-XXX-XXXX-XXX
     *
     * @param string|null $clientSecret
     * @return $this
     */
    public function setClientSecret(?string $clientSecret)
    {
        $this->values['client_secret'] = $clientSecret;
        return $this;
    }

    /**
     *
     *  description:  Specify the Client ID also known as API Key received during FedEx Developer portal registration.<br>Example: XXXX-XXX-XXXX-XXX
     * @param string $clientId
     * @return $this
     */
    public function setClientId(string $clientId)
    {
        $this->values['client_id'] = $clientId;
        return $this;
    }

    /**
     *
     * "Specify the Client ID also known as Customer Key. This element is used as a login credential for a Compatible customer or a Proprietary Parent Child customer to access the application on behalf of their customer.<br>Example: XXXX-XXX-XXXX-XXX<br>Note: This element should be used by Compatible and Proprietary Parent Child customers.
     * @param string $childKey
     * @return $this
     *
     */
    public function setChildKey(string $childKey)
    {
        $this->values['child_Key'] = $childKey;
        return $this;
    }

    /**
     *
     * Specify the Client secret also known as Customer Secret. This element is used as a login credential for a Compatible customer or a Proprietary Parent Child customer to access the application on behalf of their customer.<br>Example: XXXX-XXX-XXXX-XXX<br>Note: This element should be used by Compatible and Proprietary Parent Child customers.
     * @param string $childSecret
     * @return $this
     */
    public function setChildSecret(string $childSecret)
    {
        $this->values['child_secret'] = $childSecret;
        return $this;
    }
}
