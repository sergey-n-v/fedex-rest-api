<?php


namespace FedExRestApi\ETDService;


use Exception;
use FedExRestApi\AbstractRequest;
use FedExRestApi\ETDService\ComplexType\EtdsUploadRequest;
use FedExRestApi\ETDService\ComplexType\ImagesUploadRequest;
use FedExRestApi\Exceptions\MissingAccessTokenException;
use FedExRestApi\Utility\RequestMethod;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Psr7\Utils;

class Request  extends AbstractRequest
{
    /**
     * Request constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setProductionUrl('https://documentapi.prod.fedex.com');
        $this->setTestingUrl('https://documentapitest.prod.fedex.com/sandbox');
    }


    /**
     * {@inheritDoc}
     */
    public function setApiEndpoint()
    {
        return '/documents/v1';
    }


    /**
     * Upload Document
     * Use this endpoint to upload the trade documents electronically before (pre-shipment) and after (post-shipment) the shipment is created.
     * <br>
     * <i>Note&#58; FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param EtdsUploadRequest $trackRequest
     * @return ComplexType\EtdDocumentResponseOutputVO|ComplexType\EtdErrorResponseVO|ComplexType\EtdErrorResponseVO401|ComplexType\EtdErrorResponseVO403|ComplexType\EtdErrorResponseVO404|ComplexType\EtdErrorResponseVO500|ComplexType\EtdErrorResponseVO503|mixed|\Psr\Http\Message\ResponseInterface|string|null
     * @throws MissingAccessTokenException
     */
    public function etdsUpload( $trackRequest)
    {
        $this->api_endpoint .= '/etds/upload';
        $this->setData($trackRequest->toArray());

        $response = $this->request();

        if ($this->raw) {
            return $response;
        }

        switch ($this->getResponseCode()):
            case 201:
                $trackReply = new ComplexType\EtdDocumentResponseOutputVO();
                break;
            case 401:
                $trackReply = new ComplexType\EtdErrorResponseVO401();
                break;
            case 403:
                $trackReply = new ComplexType\EtdErrorResponseVO403();
                break;
            case 404:
                $trackReply = new ComplexType\EtdErrorResponseVO404();
                break;
            case 500:
                $trackReply = new ComplexType\EtdErrorResponseVO500();
                break;
            case 503:
                $trackReply = new ComplexType\EtdErrorResponseVO503();
                break;
            default:
                $trackReply = new ComplexType\EtdErrorResponseVO();
        endswitch;

        $trackReply->populateFromStdClass($response);
        return $trackReply;
    }


    /**
     * Upload Images
     *
     * Use this endpoint to upload customized Company Letterhead/Logo and Digital signature images which can be used in the FedEx generated paperwork or reports.
     * <br>
     * <i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.<i>
     *
     * @param ImagesUploadRequest $trackRequest
     * @return ComplexType\EtdErrorResponseVO|ComplexType\EtdErrorResponseVO401|ComplexType\EtdErrorResponseVO403_1|ComplexType\EtdErrorResponseVO404|ComplexType\EtdErrorResponseVO500|ComplexType\EtdImageUploadServiceOutputVO|mixed|\Psr\Http\Message\ResponseInterface|string|null
     * @throws MissingAccessTokenException
     */
    public function imagesUpload( $trackRequest)
    {
        $this->api_endpoint .= '/lhsimages/upload"';
        $this->setData($trackRequest->toArray());

        $response = parent::request();

        if ($this->raw) {
            return $response;
        }
        switch ($this->getResponseCode()):
            case 201:
                $trackReply = new ComplexType\EtdImageUploadServiceOutputVO();
                break;
            case 401:
                $trackReply = new ComplexType\EtdErrorResponseVO401();
                break;
            case 403:
                $trackReply = new ComplexType\EtdErrorResponseVO403_1();
                break;
            case 404:
                $trackReply = new ComplexType\EtdErrorResponseVO404();
                break;
            case 500:
                $trackReply = new ComplexType\EtdErrorResponseVO500();
                break;
            case 503:
                $trackReply = new ComplexType\EtdErrorResponseVO();
                break;
            default:
                $trackReply = new ComplexType\EtdErrorResponseVO();
        endswitch;

        $trackReply->populateFromStdClass($response);
        return $trackReply;
    }


    /**
     * @throws MissingAccessTokenException
     */
    public function request()
    {
        if (empty($this->access_token)) {
            throw new MissingAccessTokenException('Authorization token is missing. Make sure it is included');
        }
        $http_client = new Client([
            'headers' => [
                'Authorization' => "Bearer {$this->access_token}",
                'Content-Type' => 'multipart/form-data'
            ],
        ]);

                try {
                    $response = $http_client->post($this->getApiUri($this->api_endpoint), [
                        'multipart' =>  [
                            [
                            'name'     => 'document',
                            'contents' => json_encode($this->getData()['document'])
                        ],
                        [
                            'name'     => 'attachment',
                            'contents' =>  Utils::tryFopen($this->getData()['attachment'], 'r'),
                        ]
                        ],
                        'http_errors' => false
                    ]);

            $this->setResponseCode($response->getStatusCode());
                return ($this->raw === true) ? $response : json_decode($response->getBody()->getContents());
        } catch (ClientException $e) {
            return ($this->raw === true) ? $e->getResponse() : json_decode($e->getResponse()->getBody()->getContents());
        } catch (Exception $e) {
            return json_decode(json_encode(["errors"=>["code"=>"system error","message"=>$e->getMessage()]]));
        }
        return null;
    }
}
