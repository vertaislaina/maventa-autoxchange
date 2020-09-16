<?php
/**
 * Oauth2Api
 * PHP version 5
 *
 * @category Class
 * @package  Vertaislaina\Maventa\AutoXChange
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * AutoXChange API
 *
 * ### Changelog #### 2020-09-11 06:25 UTC id:0720329d (0.85.68)  #### 2020-09-10 10:07 UTC id:a3db7237 (0.85.67)  #### 2020-09-10 07:28 UTC id:6cfd3373 (0.85.66) - Start failing API calls for generating order responses for EHF30/BIS30 orders  #### 2020-09-08 10:37 UTC id:b24b532a (0.85.65) - Moved the B2CNO related features to /v1/services  #### 2020-09-08 05:19 UTC id:27fe367a (0.85.64) - Update API framework components - Use reference to vendor key in the token   ### Credentials  The API consumer is authenticated as a company and a user using the Company UUID and the personal User API Key. OAuth2 client_credentials flow is used for authentication, more details about the authentication can be found from the OAuth2 endpoint.  ### Timestamps  Timestamps returned by the API is be presented as UTC and in the ISO8601 format. Timestamps provided in the requests should also be presented in this way.   ``` 2016-09-23T09:09:06Z ```  ### Error handling Errors are presented using the HTTP status codes 400-599. The response include a more detailed explanation about the error in the body.  ``` {   \"code\": \"internal_error_code\",   \"message\": \"Cleartext explanation of the error that occurred\",   \"details\": [     \"More details\",     \"about the error\"   ] } ```  ### Generic API errors These error responses can be returned by any of the described endpoints.  | HTTP status  |  Description | |---|---| | 400| Bad input parameters or invalid request. More information can be found in the response body. | 401| The consumer does not have access to the requested resource or the provided token is not valid. | 404| The requested resource can not be found or the user does not have access to the resource. | 5XX| A server error has occurred while processing the request.
 *
 * OpenAPI spec version: 0.85.68
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.15
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Vertaislaina\Maventa\AutoXChange\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Vertaislaina\Maventa\AutoXChange\ApiException;
use Vertaislaina\Maventa\AutoXChange\Configuration;
use Vertaislaina\Maventa\AutoXChange\HeaderSelector;
use Vertaislaina\Maventa\AutoXChange\ObjectSerializer;

/**
 * Oauth2Api Class Doc Comment
 *
 * @category Class
 * @package  Vertaislaina\Maventa\AutoXChange
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Oauth2Api
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getOauth2Current
     *
     * Fetch information about the authenticated user and company
     *
     *
     * @throws \Vertaislaina\Maventa\AutoXChange\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Vertaislaina\Maventa\AutoXChange\Entity\OAuthCurrent
     */
    public function getOauth2Current()
    {
        list($response) = $this->getOauth2CurrentWithHttpInfo();
        return $response;
    }

    /**
     * Operation getOauth2CurrentWithHttpInfo
     *
     * Fetch information about the authenticated user and company
     *
     *
     * @throws \Vertaislaina\Maventa\AutoXChange\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Vertaislaina\Maventa\AutoXChange\Entity\OAuthCurrent, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOauth2CurrentWithHttpInfo()
    {
        $returnType = '\Vertaislaina\Maventa\AutoXChange\Entity\OAuthCurrent';
        $request = $this->getOauth2CurrentRequest();

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Vertaislaina\Maventa\AutoXChange\Entity\OAuthCurrent',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getOauth2CurrentAsync
     *
     * Fetch information about the authenticated user and company
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOauth2CurrentAsync()
    {
        return $this->getOauth2CurrentAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getOauth2CurrentAsyncWithHttpInfo
     *
     * Fetch information about the authenticated user and company
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOauth2CurrentAsyncWithHttpInfo()
    {
        $returnType = '\Vertaislaina\Maventa\AutoXChange\Entity\OAuthCurrent';
        $request = $this->getOauth2CurrentRequest();

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getOauth2Current'
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getOauth2CurrentRequest()
    {

        $resourcePath = '/oauth2/current';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation postOauth2Token
     *
     * OAuth2 token endpoint
     *
     * @param  string $grantType The grant type (required)
     * @param  string $clientId The client id (optional)
     * @param  string $clientSecret The client secret (optional)
     * @param  string $scope Scope of the requested token (optional)
     * @param  string $vendorApiKey Software API key (optional)
     * @param  string $licenseData License data (optional)
     *
     * @throws \Vertaislaina\Maventa\AutoXChange\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Vertaislaina\Maventa\AutoXChange\Entity\OAuthToken
     */
    public function postOauth2Token($grantType, $clientId = null, $clientSecret = null, $scope = null, $vendorApiKey = null, $licenseData = null)
    {
        list($response) = $this->postOauth2TokenWithHttpInfo($grantType, $clientId, $clientSecret, $scope, $vendorApiKey, $licenseData);
        return $response;
    }

    /**
     * Operation postOauth2TokenWithHttpInfo
     *
     * OAuth2 token endpoint
     *
     * @param  string $grantType The grant type (required)
     * @param  string $clientId The client id (optional)
     * @param  string $clientSecret The client secret (optional)
     * @param  string $scope Scope of the requested token (optional)
     * @param  string $vendorApiKey Software API key (optional)
     * @param  string $licenseData License data (optional)
     *
     * @throws \Vertaislaina\Maventa\AutoXChange\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Vertaislaina\Maventa\AutoXChange\Entity\OAuthToken, HTTP status code, HTTP response headers (array of strings)
     */
    public function postOauth2TokenWithHttpInfo($grantType, $clientId = null, $clientSecret = null, $scope = null, $vendorApiKey = null, $licenseData = null)
    {
        $returnType = '\Vertaislaina\Maventa\AutoXChange\Entity\OAuthToken';
        $request = $this->postOauth2TokenRequest($grantType, $clientId, $clientSecret, $scope, $vendorApiKey, $licenseData);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Vertaislaina\Maventa\AutoXChange\Entity\OAuthToken',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation postOauth2TokenAsync
     *
     * OAuth2 token endpoint
     *
     * @param  string $grantType The grant type (required)
     * @param  string $clientId The client id (optional)
     * @param  string $clientSecret The client secret (optional)
     * @param  string $scope Scope of the requested token (optional)
     * @param  string $vendorApiKey Software API key (optional)
     * @param  string $licenseData License data (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postOauth2TokenAsync($grantType, $clientId = null, $clientSecret = null, $scope = null, $vendorApiKey = null, $licenseData = null)
    {
        return $this->postOauth2TokenAsyncWithHttpInfo($grantType, $clientId, $clientSecret, $scope, $vendorApiKey, $licenseData)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation postOauth2TokenAsyncWithHttpInfo
     *
     * OAuth2 token endpoint
     *
     * @param  string $grantType The grant type (required)
     * @param  string $clientId The client id (optional)
     * @param  string $clientSecret The client secret (optional)
     * @param  string $scope Scope of the requested token (optional)
     * @param  string $vendorApiKey Software API key (optional)
     * @param  string $licenseData License data (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postOauth2TokenAsyncWithHttpInfo($grantType, $clientId = null, $clientSecret = null, $scope = null, $vendorApiKey = null, $licenseData = null)
    {
        $returnType = '\Vertaislaina\Maventa\AutoXChange\Entity\OAuthToken';
        $request = $this->postOauth2TokenRequest($grantType, $clientId, $clientSecret, $scope, $vendorApiKey, $licenseData);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'postOauth2Token'
     *
     * @param  string $grantType The grant type (required)
     * @param  string $clientId The client id (optional)
     * @param  string $clientSecret The client secret (optional)
     * @param  string $scope Scope of the requested token (optional)
     * @param  string $vendorApiKey Software API key (optional)
     * @param  string $licenseData License data (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postOauth2TokenRequest($grantType, $clientId = null, $clientSecret = null, $scope = null, $vendorApiKey = null, $licenseData = null)
    {
        // verify the required parameter 'grantType' is set
        if ($grantType === null || (is_array($grantType) && count($grantType) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $grantType when calling postOauth2Token'
            );
        }

        $resourcePath = '/oauth2/token';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // form params
        if ($grantType !== null) {
            $formParams['grant_type'] = ObjectSerializer::toFormValue($grantType);
        }
        // form params
        if ($clientId !== null) {
            $formParams['client_id'] = ObjectSerializer::toFormValue($clientId);
        }
        // form params
        if ($clientSecret !== null) {
            $formParams['client_secret'] = ObjectSerializer::toFormValue($clientSecret);
        }
        // form params
        if ($scope !== null) {
            $formParams['scope'] = ObjectSerializer::toFormValue($scope);
        }
        // form params
        if ($vendorApiKey !== null) {
            $formParams['vendor_api_key'] = ObjectSerializer::toFormValue($vendorApiKey);
        }
        // form params
        if ($licenseData !== null) {
            $formParams['license_data'] = ObjectSerializer::toFormValue($licenseData);
        }
        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['multipart/form-data']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
