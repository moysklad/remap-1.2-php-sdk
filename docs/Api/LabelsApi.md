# OpenAPI\Client\LabelsApi

All URIs are relative to https://api.moysklad.ru/api/remap/1.2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**printLabels()**](LabelsApi.md#printLabels) | **POST** /entity/{type}/{id}/export | Запрос на печать этикеток и ценников |


## `printLabels()`

```php
printLabels($id, $type, $label_print_request, $accept, $accept_encoding, $content_type)
```

Запрос на печать этикеток и ценников

Запрос на формирование печатной формы с этикетками и ценниками. В случае готовности сервер возвращает пустой ответ с кодом 303 и заголовком Location.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID сущности
$type = 'type_example'; // string | Тип сущности, для которой запрашивается печать
$label_print_request = new \OpenAPI\Client\Model\LabelPrintRequest(); // \OpenAPI\Client\Model\LabelPrintRequest
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string
$content_type = 'application/json'; // string

try {
    $apiInstance->printLabels($id, $type, $label_print_request, $accept, $accept_encoding, $content_type);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->printLabels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID сущности | |
| **type** | **string**| Тип сущности, для которой запрашивается печать | |
| **label_print_request** | [**\OpenAPI\Client\Model\LabelPrintRequest**](../Model/LabelPrintRequest.md)|  | |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |
| **content_type** | **string**|  | [optional] [default to &#39;application/json&#39;] |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
