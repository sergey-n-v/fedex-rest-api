<?php
namespace FedExRestApi\AuthorizationService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * This is the response of OAuth token and having access token details.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $access_token
 * @property string $token_type
 * @property int $expires_in
 * @property string $scope

 */
class AuthResponse extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AuthResponse';

    /**
     * This is an encrypted OAuth token used to authenticate your API requests. Use it in the authorization header of your API requests.<br>Example:  eyJhbGciOiJIUzI1NiIsInR5cCI6IkpX……
     *
     * @param string $access_token
     * @return $this
     */
    public function setAccessToken($access_token)
    {
        $this->values['access_token'] = $access_token;
        return $this;
    }

    /**
     * This is an encrypted OAuth token used to authenticate your API requests. Use it in the authorization header of your API requests.<br>Example:  eyJhbGciOiJIUzI1NiIsInR5cCI6IkpX……
     *
     * @return string
     */
    public function getAccessToken()
    {
        return $this->values['access_token'];
    }

    /**
     * This is a token type. In this case, it is 'bearer authentication'.
     *
     * @param string $token_type
     * @return $this
     */
    public function setTokenType($token_type)
    {
        $this->values['token_type'] = $token_type;
        return $this;
    }

    /**
     * This is a token type. In this case, it is 'bearer authentication'.
     *
     * @return string
     */
    public function getTokenType()
    {
        return $this->values['token_type'];
    }

    /**
     * Indicates the token expiration time in seconds. The standard token expiration time is one hour. <br>Example: 3600
     *
     * @param int $expires_in
     * @return $this
     */
    public function setExpiresIn($expires_in)
    {
        $this->values['expires_in'] = $expires_in;
        return $this;
    }

    /**
     * Indicates the token expiration time in seconds. The standard token expiration time is one hour. <br>Example: 3600
     *
     * @return int
     */
    public function getExpiresIn()
    {
        return $this->values['expires_in'];
    }

    /**
     * Indicates the scope of authorization provided to the consumer.<br> Example: CXS
     *
     * @param string $scope
     * @return $this
     */
    public function setScope($scope)
    {
        $this->values['scope'] = $scope;
        return $this;
    }

    /**
     * Indicates the scope of authorization provided to the consumer.<br> Example: CXS
     *
     * @return string
     */
    public function getScope()
    {
        return $this->values['scope'];
    }
}
