<?php
namespace FedEx;

use Exception;
use FedEx\Exceptions\MissingAccessTokenException;
use FedEx\Traits\rawable;
use FedEx\Traits\switchableEnv;
use FedEx\Utility\RequestMethod;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;

/**
 * Abstract class for Request classes
 *
 * @property string $access_token
 * @property string $clientId
 * @property string $clientSecret
 * @property string $accountId
 *
 **/
abstract class AbstractRequest implements RequestInterface
{
    use switchableEnv, rawable;
    public string $api_endpoint = '';
    protected string $access_token;
    protected Client $http_client;
    protected string $clientId;
    protected string $clientSecret;
    protected array $data = [];
    protected ?string $accountId;

    protected string|null $responseCode = null;

    protected string $requestMethod;
    /**
     * AbstractRequest constructor.
     */
    public function __construct()
    {
        $this->init();
        $this->api_endpoint = $this->setApiEndpoint();
    }

    protected function init()
    {
        $this->requestMethod = RequestMethod::METHOD_POST;

        if (defined('FEDEX_MODE')){
            if (FEDEX_MODE == 'prod'){
                $this->useProduction();
            }
        }

        if (defined('FEDEX_ACCOUNT_NUMBER')){
                $this->setAccountId(FEDEX_ACCOUNT_NUMBER);
        }

        if (defined('FEDEX_KEY')){
           $this->setClientId(FEDEX_KEY);
        }
        if (defined('FEDEX_PASSWORD')){
         $this->setClientSecret(FEDEX_PASSWORD);
        }

        if (defined('FEDEX_MODE')){
            if (FEDEX_MODE == 'prod'){
                $this->useProduction();
            }
        }
    }

    /**
     * @param  string  $access_token
     * @return $this|mixed
     */
    public function setAccessToken(string $access_token)
    {
        $this->access_token = $access_token;
        return $this;
    }


    /**
     * @param $clientId
     * @return $this
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;
        return $this;
    }

    /**
     * @param $client_secret
     * @return $this|string
     */
    public function setClientSecret($client_secret)
    {
        $this->clientSecret = $client_secret;
        return $this;
    }


    /**
     * @throws MissingAccessTokenException
     */
    public function request()
    {
        if (empty($this->access_token)) {
            throw new MissingAccessTokenException('Authorization token is missing. Make sure it is included');
        }
        $this->http_client = new Client([
            'headers' => [
                'Authorization' => "Bearer {$this->access_token}",
                'Content-Type' => 'application/json'
            ],
        ]);

        try {
            switch ($this->requestMethod):
                case RequestMethod::METHOD_GET:
                    $response = $this->http_client->get($this->getApiUri($this->api_endpoint), [
                        'json' => $this->getData(),
                        'http_errors' => true
                    ]);
                    break;
                case RequestMethod::METHOD_PUT:
                    $response = $this->http_client->put($this->getApiUri($this->api_endpoint), [
                        'json' => $this->getData(),
                        'http_errors' => true
                    ]);
                    break;
                default:
                    $response = $this->http_client->post($this->getApiUri($this->api_endpoint), [
                        'json' => $this->getData(),
                        'http_errors' => false
                    ]);
                endswitch;

            $this->setResponseCode($response->getStatusCode());
//            if ($response->getStatusCode() === 200 || $response->getStatusCode() === 201) {
                return ($this->raw === true) ? $response : json_decode($response->getBody()->getContents());
//            }
        } catch (ClientException $e) {
            return ($this->raw === true) ? $e->getResponse() : json_decode($e->getResponse()->getBody()->getContents());
        } catch (\Throwable $e) {
            return json_decode(json_encode(["errors"=>["code"=>"system error","message"=>$e->getMessage()]]));
        }
        return null;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param array $data
     * @return AbstractRequest
     */
    public function setData(array $data): AbstractRequest
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getResponseCode(): ?string
    {
        return $this->responseCode;
    }

    /**
     * @param string|null $responseCode
     * @return AbstractRequest
     */
    public function setResponseCode(?string $responseCode): AbstractRequest
    {
        $this->responseCode = $responseCode;
        return $this;
    }

    /**
     * @param string $accountId
     * @return AbstractRequest
     */
    public function setAccountId(string $accountId): AbstractRequest
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountId(): string
    {
        return $this->accountId;
    }
}
