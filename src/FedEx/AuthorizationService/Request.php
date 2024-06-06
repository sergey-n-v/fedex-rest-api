<?php


namespace FedEx\AuthorizationService;


use FedEx\AbstractRequest;
use FedEx\AuthorizationService\ComplexType\AuthorizationRequest;
use FedEx\AuthorizationService\SimpleType\GrantTypeSimple;
use FedEx\Exceptions\MissingAccessTokenException;
use FedEx\Exceptions\MissingAuthCredentialsException;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class Request extends AbstractRequest
{
    /**
     * {@inheritDoc}
     */
    public function setApiEndpoint()
    {
        return '/oauth/token';
    }

    /**
     * @return ComplexType\AuthErrorResponseVO|ComplexType\AuthResponse|mixed|\Psr\Http\Message\ResponseInterface|string|void|null
     * @throws MissingAccessTokenException
     */
    public function authorize()
    {
        $replay = $this->getAuthorize(
            (new AuthorizationRequest())
            ->setGrantType(GrantTypeSimple::CLIENT_CREDENTIALS)
            ->setClientId($this->clientId)
            ->setClientSecret(($this->clientSecret))
        );

        return $replay;
    }

    /**
     * @throws MissingAccessTokenException
     */
    public function getAuthorize(AuthorizationRequest $authorizationRequest)
    {
        $this->setData($authorizationRequest->toArray());
        $response = $this->request();

        if ($this->raw) {
            return $response;
        }
        if ($this->getResponseCode()==200){
            $rateReply = new ComplexType\AuthResponse;
        }else{
            $rateReply = new ComplexType\AuthErrorResponseVO;
        }

        $rateReply->populateFromStdClass($response);
        return $rateReply;
    }

    public function request()
    {
        $httpClient = new Client();
            try {
                $query = $httpClient->request('POST', $this->getApiUri('/oauth/token'), [
                    'headers' => [
                        'Content-Type' => 'application/x-www-form-urlencoded',
                    ],
                    'form_params' => $this->getData()
                ]);
                $this->setResponseCode($query->getStatusCode());
                if ($query->getStatusCode() === 200) {
                    return ($this->raw === true) ? $query : json_decode($query->getBody()->getContents());
                }
            }catch (ClientException $e){
                return ($this->raw === true) ? $e->getResponse() : json_decode($e->getResponse()->getBody()->getContents());
            }
            catch (\Exception $e) {
                return $e->getMessage();
            }
        return null;
    }
}
