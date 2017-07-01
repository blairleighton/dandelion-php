<?php
/**
 * DefaultApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Dandelion Swagger API
 *
 * Unofficial Dandelion Swagger API definition
 *
 * OpenAPI spec version: 1.0.0
 * Contact: g.prinaricotti@gmail.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\Configuration;
use \Swagger\Client\ObjectSerializer;

/**
 * DefaultApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DefaultApi
{
    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return DefaultApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getEntities
     *
     * Entity Extraction
     *
     * @param string $text use \&quot;text\&quot; when you have plain text that doesn&#39;t need any pre-processing (optional)
     * @param string $url use \&quot;url\&quot; when you have an URL and you want the Entity Extraction API to work on its main content; it will fetch the URL for you, and use an AI algorithm to extract the relevant part of the document to work on; in this case, the main content will also be returned by the API to allow you to properly use the annotation offsets (optional)
     * @param string $html use \&quot;html\&quot; when you have an HTML document and you want the Entity Extraction API to work on its main content, similarly to what the \&quot;url\&quot; parameter does. (optional)
     * @param string $html_fragment use \&quot;html_fragment\&quot; when you have an HTML snippet and you want the Entity Extraction API to work on its content. It will remove all HTML tags before analyzing it. (optional)
     * @param string $lang The language of the text to be annotated; currently English, French, German, Italian and Portuguese are supported. Leave this parameter out to let the Entity Extraction API automatically detect the language for you. (optional)
     * @param string $country This parameter specifies the country which we assume VAT and telephone numbers to be coming from. This is important to get correct results, as different countries may adopt different formats. (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\EntityExtractionResponse
     */
    public function getEntities($text = null, $url = null, $html = null, $html_fragment = null, $lang = null, $country = null)
    {
        list($response) = $this->getEntitiesWithHttpInfo($text, $url, $html, $html_fragment, $lang, $country);
        return $response;
    }

    /**
     * Operation getEntitiesWithHttpInfo
     *
     * Entity Extraction
     *
     * @param string $text use \&quot;text\&quot; when you have plain text that doesn&#39;t need any pre-processing (optional)
     * @param string $url use \&quot;url\&quot; when you have an URL and you want the Entity Extraction API to work on its main content; it will fetch the URL for you, and use an AI algorithm to extract the relevant part of the document to work on; in this case, the main content will also be returned by the API to allow you to properly use the annotation offsets (optional)
     * @param string $html use \&quot;html\&quot; when you have an HTML document and you want the Entity Extraction API to work on its main content, similarly to what the \&quot;url\&quot; parameter does. (optional)
     * @param string $html_fragment use \&quot;html_fragment\&quot; when you have an HTML snippet and you want the Entity Extraction API to work on its content. It will remove all HTML tags before analyzing it. (optional)
     * @param string $lang The language of the text to be annotated; currently English, French, German, Italian and Portuguese are supported. Leave this parameter out to let the Entity Extraction API automatically detect the language for you. (optional)
     * @param string $country This parameter specifies the country which we assume VAT and telephone numbers to be coming from. This is important to get correct results, as different countries may adopt different formats. (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\EntityExtractionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getEntitiesWithHttpInfo($text = null, $url = null, $html = null, $html_fragment = null, $lang = null, $country = null)
    {
        // parse inputs
        $resourcePath = "/nex/v1";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($text !== null) {
            $queryParams['text'] = $this->apiClient->getSerializer()->toQueryValue($text);
        }
        // query params
        if ($url !== null) {
            $queryParams['url'] = $this->apiClient->getSerializer()->toQueryValue($url);
        }
        // query params
        if ($html !== null) {
            $queryParams['html'] = $this->apiClient->getSerializer()->toQueryValue($html);
        }
        // query params
        if ($html_fragment !== null) {
            $queryParams['html_fragment'] = $this->apiClient->getSerializer()->toQueryValue($html_fragment);
        }
        // query params
        if ($lang !== null) {
            $queryParams['lang'] = $this->apiClient->getSerializer()->toQueryValue($lang);
        }
        // query params
        if ($country !== null) {
            $queryParams['country'] = $this->apiClient->getSerializer()->toQueryValue($country);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('token');
        if (strlen($apiKey) !== 0) {
            $queryParams['token'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\EntityExtractionResponse',
                '/nex/v1'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\EntityExtractionResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\EntityExtractionResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ApiResponseError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getSentiment
     *
     * 
     *
     * @param string $text use \&quot;text\&quot; when you have plain text that doesn&#39;t need any pre-processing (optional)
     * @param string $url use \&quot;url\&quot; when you have an URL and you want the Entity Extraction API to work on its main content; it will fetch the URL for you, and use an AI algorithm to extract the relevant part of the document to work on; in this case, the main content will also be returned by the API to allow you to properly use the annotation offsets; (optional)
     * @param string $html use \&quot;html\&quot; when you have an HTML document and you want the Entity Extraction API to work on its main content, similarly to what the \&quot;url\&quot; parameter does. (optional)
     * @param string $html_fragment use \&quot;html_fragment\&quot; when you have an HTML snippet and you want the Entity Extraction API to work on its content. It will remove all HTML tags before analyzing it. (optional)
     * @param string $lang The language of the text to be annotated; currently only English and Italian are supported. (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return void
     */
    public function getSentiment($text = null, $url = null, $html = null, $html_fragment = null, $lang = null)
    {
        list($response) = $this->getSentimentWithHttpInfo($text, $url, $html, $html_fragment, $lang);
        return $response;
    }

    /**
     * Operation getSentimentWithHttpInfo
     *
     * 
     *
     * @param string $text use \&quot;text\&quot; when you have plain text that doesn&#39;t need any pre-processing (optional)
     * @param string $url use \&quot;url\&quot; when you have an URL and you want the Entity Extraction API to work on its main content; it will fetch the URL for you, and use an AI algorithm to extract the relevant part of the document to work on; in this case, the main content will also be returned by the API to allow you to properly use the annotation offsets; (optional)
     * @param string $html use \&quot;html\&quot; when you have an HTML document and you want the Entity Extraction API to work on its main content, similarly to what the \&quot;url\&quot; parameter does. (optional)
     * @param string $html_fragment use \&quot;html_fragment\&quot; when you have an HTML snippet and you want the Entity Extraction API to work on its content. It will remove all HTML tags before analyzing it. (optional)
     * @param string $lang The language of the text to be annotated; currently only English and Italian are supported. (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSentimentWithHttpInfo($text = null, $url = null, $html = null, $html_fragment = null, $lang = null)
    {
        // parse inputs
        $resourcePath = "/sent/v1";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($text !== null) {
            $queryParams['text'] = $this->apiClient->getSerializer()->toQueryValue($text);
        }
        // query params
        if ($url !== null) {
            $queryParams['url'] = $this->apiClient->getSerializer()->toQueryValue($url);
        }
        // query params
        if ($html !== null) {
            $queryParams['html'] = $this->apiClient->getSerializer()->toQueryValue($html);
        }
        // query params
        if ($html_fragment !== null) {
            $queryParams['html_fragment'] = $this->apiClient->getSerializer()->toQueryValue($html_fragment);
        }
        // query params
        if ($lang !== null) {
            $queryParams['lang'] = $this->apiClient->getSerializer()->toQueryValue($lang);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('token');
        if (strlen($apiKey) !== 0) {
            $queryParams['token'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/sent/v1'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
}