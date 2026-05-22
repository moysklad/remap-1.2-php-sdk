# OpenAPI\Client\ProcessingPlanFoldersApi

All URIs are relative to https://api.moysklad.ru/api/remap/1.2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createProcessingPlanFolder()**](ProcessingPlanFoldersApi.md#createProcessingPlanFolder) | **POST** /entity/processingplanfolder | Создать группу техкарт |
| [**createProcessingPlanFoldersBatch()**](ProcessingPlanFoldersApi.md#createProcessingPlanFoldersBatch) | **POST** /entity/processingplanfolder/batch | Массовое создание и обновление групп техкарт |
| [**deleteProcessingPlanFolder()**](ProcessingPlanFoldersApi.md#deleteProcessingPlanFolder) | **DELETE** /entity/processingplanfolder/{id} | Удалить группу техкарт |
| [**deleteProcessingPlanFoldersBatch()**](ProcessingPlanFoldersApi.md#deleteProcessingPlanFoldersBatch) | **POST** /entity/processingplanfolder/delete | Массовое удаление групп техкарт |
| [**getProcessingPlanFolderById()**](ProcessingPlanFoldersApi.md#getProcessingPlanFolderById) | **GET** /entity/processingplanfolder/{id} | Получить группу техкарт |
| [**getProcessingPlanFolderMetadata()**](ProcessingPlanFoldersApi.md#getProcessingPlanFolderMetadata) | **GET** /entity/processingplanfolder/metadata | Метаданные групп техкарт |
| [**getProcessingPlanFolders()**](ProcessingPlanFoldersApi.md#getProcessingPlanFolders) | **GET** /entity/processingplanfolder | Получить список групп техкарт |
| [**updateProcessingPlanFolder()**](ProcessingPlanFoldersApi.md#updateProcessingPlanFolder) | **PUT** /entity/processingplanfolder/{id} | Изменить группу техкарт |


## `createProcessingPlanFolder()`

```php
createProcessingPlanFolder($processing_plan_folder, $accept, $accept_encoding, $content_type): \OpenAPI\Client\Model\ProcessingPlanFolder
```

Создать группу техкарт

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


$apiInstance = new OpenAPI\Client\Api\ProcessingPlanFoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$processing_plan_folder = new \OpenAPI\Client\Model\ProcessingPlanFolder(); // \OpenAPI\Client\Model\ProcessingPlanFolder
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = gzip, deflate, br; // string
$content_type = 'application/json'; // string

try {
    $result = $apiInstance->createProcessingPlanFolder($processing_plan_folder, $accept, $accept_encoding, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessingPlanFoldersApi->createProcessingPlanFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **processing_plan_folder** | [**\OpenAPI\Client\Model\ProcessingPlanFolder**](../Model/ProcessingPlanFolder.md)|  | |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |
| **content_type** | **string**|  | [optional] [default to &#39;application/json&#39;] |

### Return type

[**\OpenAPI\Client\Model\ProcessingPlanFolder**](../Model/ProcessingPlanFolder.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createProcessingPlanFoldersBatch()`

```php
createProcessingPlanFoldersBatch($processing_plan_folder, $accept, $accept_encoding, $content_type): \OpenAPI\Client\Model\CreateProcessingPlanFoldersBatch200ResponseInner[]
```

Массовое создание и обновление групп техкарт

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


$apiInstance = new OpenAPI\Client\Api\ProcessingPlanFoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$processing_plan_folder = array(new \OpenAPI\Client\Model\ProcessingPlanFolder()); // \OpenAPI\Client\Model\ProcessingPlanFolder[]
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = gzip, deflate, br; // string
$content_type = 'application/json'; // string

try {
    $result = $apiInstance->createProcessingPlanFoldersBatch($processing_plan_folder, $accept, $accept_encoding, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessingPlanFoldersApi->createProcessingPlanFoldersBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **processing_plan_folder** | [**\OpenAPI\Client\Model\ProcessingPlanFolder[]**](../Model/ProcessingPlanFolder.md)|  | |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |
| **content_type** | **string**|  | [optional] [default to &#39;application/json&#39;] |

### Return type

[**\OpenAPI\Client\Model\CreateProcessingPlanFoldersBatch200ResponseInner[]**](../Model/CreateProcessingPlanFoldersBatch200ResponseInner.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProcessingPlanFolder()`

```php
deleteProcessingPlanFolder($id, $accept, $accept_encoding, $content_type)
```

Удалить группу техкарт

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


$apiInstance = new OpenAPI\Client\Api\ProcessingPlanFoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 12a8b923-692c-11e6-8a84-bae500000053; // string | ID сущности
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = gzip, deflate, br; // string
$content_type = 'application/json'; // string

try {
    $apiInstance->deleteProcessingPlanFolder($id, $accept, $accept_encoding, $content_type);
} catch (Exception $e) {
    echo 'Exception when calling ProcessingPlanFoldersApi->deleteProcessingPlanFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID сущности | |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |
| **content_type** | **string**|  | [optional] [default to &#39;application/json&#39;] |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProcessingPlanFoldersBatch()`

```php
deleteProcessingPlanFoldersBatch($processing_plan_folder, $accept, $accept_encoding, $content_type): \OpenAPI\Client\Model\DeleteContractsBatch200ResponseInner[]
```

Массовое удаление групп техкарт

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


$apiInstance = new OpenAPI\Client\Api\ProcessingPlanFoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$processing_plan_folder = array(new \OpenAPI\Client\Model\ProcessingPlanFolder()); // \OpenAPI\Client\Model\ProcessingPlanFolder[]
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = gzip, deflate, br; // string
$content_type = 'application/json'; // string

try {
    $result = $apiInstance->deleteProcessingPlanFoldersBatch($processing_plan_folder, $accept, $accept_encoding, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessingPlanFoldersApi->deleteProcessingPlanFoldersBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **processing_plan_folder** | [**\OpenAPI\Client\Model\ProcessingPlanFolder[]**](../Model/ProcessingPlanFolder.md)|  | |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |
| **content_type** | **string**|  | [optional] [default to &#39;application/json&#39;] |

### Return type

[**\OpenAPI\Client\Model\DeleteContractsBatch200ResponseInner[]**](../Model/DeleteContractsBatch200ResponseInner.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProcessingPlanFolderById()`

```php
getProcessingPlanFolderById($id, $accept, $accept_encoding): \OpenAPI\Client\Model\ProcessingPlanFolder
```

Получить группу техкарт

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


$apiInstance = new OpenAPI\Client\Api\ProcessingPlanFoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 12a8b923-692c-11e6-8a84-bae500000053; // string | ID сущности
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = gzip, deflate, br; // string

try {
    $result = $apiInstance->getProcessingPlanFolderById($id, $accept, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessingPlanFoldersApi->getProcessingPlanFolderById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID сущности | |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |

### Return type

[**\OpenAPI\Client\Model\ProcessingPlanFolder**](../Model/ProcessingPlanFolder.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProcessingPlanFolderMetadata()`

```php
getProcessingPlanFolderMetadata($accept, $accept_encoding, $content_type): \OpenAPI\Client\Model\Metadata
```

Метаданные групп техкарт

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


$apiInstance = new OpenAPI\Client\Api\ProcessingPlanFoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = gzip, deflate, br; // string
$content_type = 'application/json'; // string

try {
    $result = $apiInstance->getProcessingPlanFolderMetadata($accept, $accept_encoding, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessingPlanFoldersApi->getProcessingPlanFolderMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |
| **content_type** | **string**|  | [optional] [default to &#39;application/json&#39;] |

### Return type

[**\OpenAPI\Client\Model\Metadata**](../Model/Metadata.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProcessingPlanFolders()`

```php
getProcessingPlanFolders($limit, $offset, $accept, $accept_encoding, $content_type): \OpenAPI\Client\Model\ProcessingPlanFolderList
```

Получить список групп техкарт

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


$apiInstance = new OpenAPI\Client\Api\ProcessingPlanFoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 1000; // int | Максимальное количество элементов в выданном списке (максимум 1000)
$offset = 0; // int | Отступ в выданном списке
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = gzip, deflate, br; // string
$content_type = 'application/json'; // string

try {
    $result = $apiInstance->getProcessingPlanFolders($limit, $offset, $accept, $accept_encoding, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessingPlanFoldersApi->getProcessingPlanFolders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Максимальное количество элементов в выданном списке (максимум 1000) | [optional] [default to 1000] |
| **offset** | **int**| Отступ в выданном списке | [optional] [default to 0] |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |
| **content_type** | **string**|  | [optional] [default to &#39;application/json&#39;] |

### Return type

[**\OpenAPI\Client\Model\ProcessingPlanFolderList**](../Model/ProcessingPlanFolderList.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProcessingPlanFolder()`

```php
updateProcessingPlanFolder($id, $processing_plan_folder, $accept, $accept_encoding, $content_type): \OpenAPI\Client\Model\ProcessingPlanFolder
```

Изменить группу техкарт

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


$apiInstance = new OpenAPI\Client\Api\ProcessingPlanFoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 12a8b923-692c-11e6-8a84-bae500000053; // string | ID сущности
$processing_plan_folder = new \OpenAPI\Client\Model\ProcessingPlanFolder(); // \OpenAPI\Client\Model\ProcessingPlanFolder
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = gzip, deflate, br; // string
$content_type = 'application/json'; // string

try {
    $result = $apiInstance->updateProcessingPlanFolder($id, $processing_plan_folder, $accept, $accept_encoding, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessingPlanFoldersApi->updateProcessingPlanFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID сущности | |
| **processing_plan_folder** | [**\OpenAPI\Client\Model\ProcessingPlanFolder**](../Model/ProcessingPlanFolder.md)|  | |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |
| **content_type** | **string**|  | [optional] [default to &#39;application/json&#39;] |

### Return type

[**\OpenAPI\Client\Model\ProcessingPlanFolder**](../Model/ProcessingPlanFolder.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
