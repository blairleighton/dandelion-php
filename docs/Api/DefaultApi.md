# Swagger\Client\DefaultApi

All URIs are relative to *https://api.dandelion.eu/datatxt*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEntities**](DefaultApi.md#getEntities) | **GET** /nex/v1 | Entity Extraction
[**getSentiment**](DefaultApi.md#getSentiment) | **GET** /sent/v1 | 


# **getEntities**
> \Swagger\Client\Model\EntityExtractionResponse getEntities($text, $url, $html, $html_fragment, $lang, $country)

Entity Extraction

This is a named entity extraction & linking API that performs very well even on short texts, on which many other similar services do not. It currently works on texts in English, French, German, Italian, Portuguese, Russian, Spanish and many other languages. With this API you will be able to automatically tag your texts, extracting Wikipedia entities and enriching your data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new Swagger\Client\Api\DefaultApi();
$text = "text_example"; // string | use \"text\" when you have plain text that doesn't need any pre-processing
$url = "url_example"; // string | use \"url\" when you have an URL and you want the Entity Extraction API to work on its main content; it will fetch the URL for you, and use an AI algorithm to extract the relevant part of the document to work on; in this case, the main content will also be returned by the API to allow you to properly use the annotation offsets
$html = "html_example"; // string | use \"html\" when you have an HTML document and you want the Entity Extraction API to work on its main content, similarly to what the \"url\" parameter does.
$html_fragment = "html_fragment_example"; // string | use \"html_fragment\" when you have an HTML snippet and you want the Entity Extraction API to work on its content. It will remove all HTML tags before analyzing it.
$lang = "lang_example"; // string | The language of the text to be annotated; currently English, French, German, Italian and Portuguese are supported. Leave this parameter out to let the Entity Extraction API automatically detect the language for you.
$country = "country_example"; // string | This parameter specifies the country which we assume VAT and telephone numbers to be coming from. This is important to get correct results, as different countries may adopt different formats.

try {
    $result = $api_instance->getEntities($text, $url, $html, $html_fragment, $lang, $country);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getEntities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **text** | **string**| use \&quot;text\&quot; when you have plain text that doesn&#39;t need any pre-processing | [optional]
 **url** | **string**| use \&quot;url\&quot; when you have an URL and you want the Entity Extraction API to work on its main content; it will fetch the URL for you, and use an AI algorithm to extract the relevant part of the document to work on; in this case, the main content will also be returned by the API to allow you to properly use the annotation offsets | [optional]
 **html** | **string**| use \&quot;html\&quot; when you have an HTML document and you want the Entity Extraction API to work on its main content, similarly to what the \&quot;url\&quot; parameter does. | [optional]
 **html_fragment** | **string**| use \&quot;html_fragment\&quot; when you have an HTML snippet and you want the Entity Extraction API to work on its content. It will remove all HTML tags before analyzing it. | [optional]
 **lang** | **string**| The language of the text to be annotated; currently English, French, German, Italian and Portuguese are supported. Leave this parameter out to let the Entity Extraction API automatically detect the language for you. | [optional]
 **country** | **string**| This parameter specifies the country which we assume VAT and telephone numbers to be coming from. This is important to get correct results, as different countries may adopt different formats. | [optional]

### Return type

[**\Swagger\Client\Model\EntityExtractionResponse**](../Model/EntityExtractionResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSentiment**
> getSentiment($text, $url, $html, $html_fragment, $lang)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new Swagger\Client\Api\DefaultApi();
$text = "text_example"; // string | use \"text\" when you have plain text that doesn't need any pre-processing
$url = "url_example"; // string | use \"url\" when you have an URL and you want the Entity Extraction API to work on its main content; it will fetch the URL for you, and use an AI algorithm to extract the relevant part of the document to work on; in this case, the main content will also be returned by the API to allow you to properly use the annotation offsets;
$html = "html_example"; // string | use \"html\" when you have an HTML document and you want the Entity Extraction API to work on its main content, similarly to what the \"url\" parameter does.
$html_fragment = "html_fragment_example"; // string | use \"html_fragment\" when you have an HTML snippet and you want the Entity Extraction API to work on its content. It will remove all HTML tags before analyzing it.
$lang = "lang_example"; // string | The language of the text to be annotated; currently only English and Italian are supported.

try {
    $api_instance->getSentiment($text, $url, $html, $html_fragment, $lang);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getSentiment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **text** | **string**| use \&quot;text\&quot; when you have plain text that doesn&#39;t need any pre-processing | [optional]
 **url** | **string**| use \&quot;url\&quot; when you have an URL and you want the Entity Extraction API to work on its main content; it will fetch the URL for you, and use an AI algorithm to extract the relevant part of the document to work on; in this case, the main content will also be returned by the API to allow you to properly use the annotation offsets; | [optional]
 **html** | **string**| use \&quot;html\&quot; when you have an HTML document and you want the Entity Extraction API to work on its main content, similarly to what the \&quot;url\&quot; parameter does. | [optional]
 **html_fragment** | **string**| use \&quot;html_fragment\&quot; when you have an HTML snippet and you want the Entity Extraction API to work on its content. It will remove all HTML tags before analyzing it. | [optional]
 **lang** | **string**| The language of the text to be annotated; currently only English and Italian are supported. | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
