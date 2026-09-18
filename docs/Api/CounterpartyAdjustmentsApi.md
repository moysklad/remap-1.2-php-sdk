# OpenAPI\Client\CounterpartyAdjustmentsApi

All URIs are relative to https://api.moysklad.ru/api/remap/1.2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addCounterpartyAdjustmentFiles()**](CounterpartyAdjustmentsApi.md#addCounterpartyAdjustmentFiles) | **POST** /entity/counterpartyadjustment/{id}/files | Добавить файлы к Корректировке взаиморасчетов |
| [**createCounterpartyAdjustment()**](CounterpartyAdjustmentsApi.md#createCounterpartyAdjustment) | **POST** /entity/counterpartyadjustment | Создать Корректировку взаиморасчетов |
| [**createCounterpartyAdjustmentBatch()**](CounterpartyAdjustmentsApi.md#createCounterpartyAdjustmentBatch) | **POST** /entity/counterpartyadjustment/batch | Массовое создание и обновление Корректировок взаиморасчетов |
| [**createCounterpartyAdjustmentMetadataAttribute()**](CounterpartyAdjustmentsApi.md#createCounterpartyAdjustmentMetadataAttribute) | **POST** /entity/counterpartyadjustment/metadata/attributes | Создать доп. поле Корректировки взаиморасчетов |
| [**deleteCounterpartyAdjustment()**](CounterpartyAdjustmentsApi.md#deleteCounterpartyAdjustment) | **DELETE** /entity/counterpartyadjustment/{id} | Удалить Корректировку взаиморасчетов |
| [**deleteCounterpartyAdjustmentBatch()**](CounterpartyAdjustmentsApi.md#deleteCounterpartyAdjustmentBatch) | **POST** /entity/counterpartyadjustment/delete | Массовое удаление Корректировок взаиморасчетов |
| [**deleteCounterpartyAdjustmentFile()**](CounterpartyAdjustmentsApi.md#deleteCounterpartyAdjustmentFile) | **DELETE** /entity/counterpartyadjustment/{id}/files/{fileId} | Удалить файл Корректировки взаиморасчетов |
| [**deleteCounterpartyAdjustmentMetadataAttributeById()**](CounterpartyAdjustmentsApi.md#deleteCounterpartyAdjustmentMetadataAttributeById) | **DELETE** /entity/counterpartyadjustment/metadata/attributes/{id} | Удалить отдельное доп. поле Корректировки взаиморасчетов |
| [**getCounterpartyAdjustmentById()**](CounterpartyAdjustmentsApi.md#getCounterpartyAdjustmentById) | **GET** /entity/counterpartyadjustment/{id} | Получить Корректировку взаиморасчетов |
| [**getCounterpartyAdjustmentFile()**](CounterpartyAdjustmentsApi.md#getCounterpartyAdjustmentFile) | **GET** /entity/counterpartyadjustment/{id}/files/{fileId} | Получить файл Корректировки взаиморасчетов |
| [**getCounterpartyAdjustmentFiles()**](CounterpartyAdjustmentsApi.md#getCounterpartyAdjustmentFiles) | **GET** /entity/counterpartyadjustment/{id}/files | Получить файлы Корректировки взаиморасчетов |
| [**getCounterpartyAdjustmentList()**](CounterpartyAdjustmentsApi.md#getCounterpartyAdjustmentList) | **GET** /entity/counterpartyadjustment | Получить список Корректировок взаиморасчетов |
| [**getCounterpartyAdjustmentMetadata()**](CounterpartyAdjustmentsApi.md#getCounterpartyAdjustmentMetadata) | **GET** /entity/counterpartyadjustment/metadata | Метаданные Корректировок взаиморасчетов |
| [**getCounterpartyAdjustmentMetadataAttribute()**](CounterpartyAdjustmentsApi.md#getCounterpartyAdjustmentMetadataAttribute) | **GET** /entity/counterpartyadjustment/metadata/attributes | Доп. поля Корректировок взаиморасчетов |
| [**getCounterpartyAdjustmentMetadataAttributeById()**](CounterpartyAdjustmentsApi.md#getCounterpartyAdjustmentMetadataAttributeById) | **GET** /entity/counterpartyadjustment/metadata/attributes/{id} | Отдельное доп. поле Корректировки взаиморасчетов |
| [**moveCounterpartyAdjustmentToTrash()**](CounterpartyAdjustmentsApi.md#moveCounterpartyAdjustmentToTrash) | **POST** /entity/counterpartyadjustment/{id}/trash | Удалить Корректировку взаиморасчетов в корзину |
| [**updateCounterpartyAdjustment()**](CounterpartyAdjustmentsApi.md#updateCounterpartyAdjustment) | **PUT** /entity/counterpartyadjustment/{id} | Изменить Корректировку взаиморасчетов |
| [**updateCounterpartyAdjustmentMetadataAttributeById()**](CounterpartyAdjustmentsApi.md#updateCounterpartyAdjustmentMetadataAttributeById) | **PUT** /entity/counterpartyadjustment/metadata/attributes/{id} | Обновить отдельное доп. поле Корректировки взаиморасчетов |


## `addCounterpartyAdjustmentFiles()`

```php
addCounterpartyAdjustmentFiles($id, $file_upload, $accept, $accept_encoding, $content_type): \OpenAPI\Client\Model\File[]
```

Добавить файлы к Корректировке взаиморасчетов

Добавить новые Файлы к Корректировке взаиморасчетов. В одном запросе можно добавить максимум 10 Файлов. В поле `content` нужно указать файл, закодированный в Base64, в поле `filename` — имя файла с расширением.

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


$apiInstance = new OpenAPI\Client\Api\CounterpartyAdjustmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID сущности
$file_upload = array(new \OpenAPI\Client\Model\FileUpload()); // \OpenAPI\Client\Model\FileUpload[]
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string
$content_type = 'application/json'; // string

try {
    $result = $apiInstance->addCounterpartyAdjustmentFiles($id, $file_upload, $accept, $accept_encoding, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CounterpartyAdjustmentsApi->addCounterpartyAdjustmentFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID сущности | |
| **file_upload** | [**\OpenAPI\Client\Model\FileUpload[]**](../Model/FileUpload.md)|  | |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |
| **content_type** | **string**|  | [optional] [default to &#39;application/json&#39;] |

### Return type

[**\OpenAPI\Client\Model\File[]**](../Model/File.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCounterpartyAdjustment()`

```php
createCounterpartyAdjustment($counterparty_adjustment, $expand, $accept, $accept_encoding, $content_type): \OpenAPI\Client\Model\CounterpartyAdjustment
```

Создать Корректировку взаиморасчетов

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


$apiInstance = new OpenAPI\Client\Api\CounterpartyAdjustmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$counterparty_adjustment = new \OpenAPI\Client\Model\CounterpartyAdjustment(); // \OpenAPI\Client\Model\CounterpartyAdjustment
$expand = 'expand_example'; // string | Замена ссылок объектами с помощью expand
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string
$content_type = 'application/json'; // string

try {
    $result = $apiInstance->createCounterpartyAdjustment($counterparty_adjustment, $expand, $accept, $accept_encoding, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CounterpartyAdjustmentsApi->createCounterpartyAdjustment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **counterparty_adjustment** | [**\OpenAPI\Client\Model\CounterpartyAdjustment**](../Model/CounterpartyAdjustment.md)|  | |
| **expand** | **string**| Замена ссылок объектами с помощью expand | [optional] |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |
| **content_type** | **string**|  | [optional] [default to &#39;application/json&#39;] |

### Return type

[**\OpenAPI\Client\Model\CounterpartyAdjustment**](../Model/CounterpartyAdjustment.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCounterpartyAdjustmentBatch()`

```php
createCounterpartyAdjustmentBatch($counterparty_adjustment, $expand, $accept, $accept_encoding, $content_type): \OpenAPI\Client\Model\BatchResponseEntity[]
```

Массовое создание и обновление Корректировок взаиморасчетов

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


$apiInstance = new OpenAPI\Client\Api\CounterpartyAdjustmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$counterparty_adjustment = array(new \OpenAPI\Client\Model\CounterpartyAdjustment()); // \OpenAPI\Client\Model\CounterpartyAdjustment[]
$expand = 'expand_example'; // string | Замена ссылок объектами с помощью expand
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string
$content_type = 'application/json'; // string

try {
    $result = $apiInstance->createCounterpartyAdjustmentBatch($counterparty_adjustment, $expand, $accept, $accept_encoding, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CounterpartyAdjustmentsApi->createCounterpartyAdjustmentBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **counterparty_adjustment** | [**\OpenAPI\Client\Model\CounterpartyAdjustment[]**](../Model/CounterpartyAdjustment.md)|  | |
| **expand** | **string**| Замена ссылок объектами с помощью expand | [optional] |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |
| **content_type** | **string**|  | [optional] [default to &#39;application/json&#39;] |

### Return type

[**\OpenAPI\Client\Model\BatchResponseEntity[]**](../Model/BatchResponseEntity.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCounterpartyAdjustmentMetadataAttribute()`

```php
createCounterpartyAdjustmentMetadataAttribute($attribute_meta_info, $accept, $accept_encoding, $content_type): \OpenAPI\Client\Model\AttributeMetaInfo
```

Создать доп. поле Корректировки взаиморасчетов

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


$apiInstance = new OpenAPI\Client\Api\CounterpartyAdjustmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_meta_info = new \OpenAPI\Client\Model\AttributeMetaInfo(); // \OpenAPI\Client\Model\AttributeMetaInfo
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string
$content_type = 'application/json'; // string

try {
    $result = $apiInstance->createCounterpartyAdjustmentMetadataAttribute($attribute_meta_info, $accept, $accept_encoding, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CounterpartyAdjustmentsApi->createCounterpartyAdjustmentMetadataAttribute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attribute_meta_info** | [**\OpenAPI\Client\Model\AttributeMetaInfo**](../Model/AttributeMetaInfo.md)|  | |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |
| **content_type** | **string**|  | [optional] [default to &#39;application/json&#39;] |

### Return type

[**\OpenAPI\Client\Model\AttributeMetaInfo**](../Model/AttributeMetaInfo.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCounterpartyAdjustment()`

```php
deleteCounterpartyAdjustment($id, $accept, $accept_encoding)
```

Удалить Корректировку взаиморасчетов

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


$apiInstance = new OpenAPI\Client\Api\CounterpartyAdjustmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID сущности
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string

try {
    $apiInstance->deleteCounterpartyAdjustment($id, $accept, $accept_encoding);
} catch (Exception $e) {
    echo 'Exception when calling CounterpartyAdjustmentsApi->deleteCounterpartyAdjustment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID сущности | |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |

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

## `deleteCounterpartyAdjustmentBatch()`

```php
deleteCounterpartyAdjustmentBatch($counterparty_adjustment, $accept, $accept_encoding, $content_type): \OpenAPI\Client\Model\DeleteRowResult[]
```

Массовое удаление Корректировок взаиморасчетов

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


$apiInstance = new OpenAPI\Client\Api\CounterpartyAdjustmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$counterparty_adjustment = array(new \OpenAPI\Client\Model\CounterpartyAdjustment()); // \OpenAPI\Client\Model\CounterpartyAdjustment[]
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string
$content_type = 'application/json'; // string

try {
    $result = $apiInstance->deleteCounterpartyAdjustmentBatch($counterparty_adjustment, $accept, $accept_encoding, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CounterpartyAdjustmentsApi->deleteCounterpartyAdjustmentBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **counterparty_adjustment** | [**\OpenAPI\Client\Model\CounterpartyAdjustment[]**](../Model/CounterpartyAdjustment.md)|  | |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |
| **content_type** | **string**|  | [optional] [default to &#39;application/json&#39;] |

### Return type

[**\OpenAPI\Client\Model\DeleteRowResult[]**](../Model/DeleteRowResult.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCounterpartyAdjustmentFile()`

```php
deleteCounterpartyAdjustmentFile($id, $file_id, $accept, $accept_encoding)
```

Удалить файл Корректировки взаиморасчетов

Удаление Файла Корректировки взаиморасчетов.

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


$apiInstance = new OpenAPI\Client\Api\CounterpartyAdjustmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID сущности
$file_id = 'file_id_example'; // string | ID файла
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string

try {
    $apiInstance->deleteCounterpartyAdjustmentFile($id, $file_id, $accept, $accept_encoding);
} catch (Exception $e) {
    echo 'Exception when calling CounterpartyAdjustmentsApi->deleteCounterpartyAdjustmentFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID сущности | |
| **file_id** | **string**| ID файла | |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |

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

## `deleteCounterpartyAdjustmentMetadataAttributeById()`

```php
deleteCounterpartyAdjustmentMetadataAttributeById($id, $accept, $accept_encoding)
```

Удалить отдельное доп. поле Корректировки взаиморасчетов

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


$apiInstance = new OpenAPI\Client\Api\CounterpartyAdjustmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID сущности
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string

try {
    $apiInstance->deleteCounterpartyAdjustmentMetadataAttributeById($id, $accept, $accept_encoding);
} catch (Exception $e) {
    echo 'Exception when calling CounterpartyAdjustmentsApi->deleteCounterpartyAdjustmentMetadataAttributeById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID сущности | |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |

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

## `getCounterpartyAdjustmentById()`

```php
getCounterpartyAdjustmentById($id, $expand, $accept, $accept_encoding): \OpenAPI\Client\Model\CounterpartyAdjustment
```

Получить Корректировку взаиморасчетов

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


$apiInstance = new OpenAPI\Client\Api\CounterpartyAdjustmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID сущности
$expand = 'expand_example'; // string | Замена ссылок объектами с помощью expand
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string

try {
    $result = $apiInstance->getCounterpartyAdjustmentById($id, $expand, $accept, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CounterpartyAdjustmentsApi->getCounterpartyAdjustmentById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID сущности | |
| **expand** | **string**| Замена ссылок объектами с помощью expand | [optional] |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |

### Return type

[**\OpenAPI\Client\Model\CounterpartyAdjustment**](../Model/CounterpartyAdjustment.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCounterpartyAdjustmentFile()`

```php
getCounterpartyAdjustmentFile($id, $file_id, $accept, $accept_encoding): \OpenAPI\Client\Model\File
```

Получить файл Корректировки взаиморасчетов

Получение Файла Корректировки взаиморасчетов.

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


$apiInstance = new OpenAPI\Client\Api\CounterpartyAdjustmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID сущности
$file_id = 'file_id_example'; // string | ID файла
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string

try {
    $result = $apiInstance->getCounterpartyAdjustmentFile($id, $file_id, $accept, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CounterpartyAdjustmentsApi->getCounterpartyAdjustmentFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID сущности | |
| **file_id** | **string**| ID файла | |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |

### Return type

[**\OpenAPI\Client\Model\File**](../Model/File.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCounterpartyAdjustmentFiles()`

```php
getCounterpartyAdjustmentFiles($id, $limit, $offset, $accept, $accept_encoding): \OpenAPI\Client\Model\GetProductFiles200Response
```

Получить файлы Корректировки взаиморасчетов

Запрос на получение списка всех Файлов данной Корректировки взаиморасчетов.

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


$apiInstance = new OpenAPI\Client\Api\CounterpartyAdjustmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID сущности
$limit = 1000; // int | Максимальное количество элементов в выданном списке (максимум 1000)
$offset = 0; // int | Отступ в выданном списке
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string

try {
    $result = $apiInstance->getCounterpartyAdjustmentFiles($id, $limit, $offset, $accept, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CounterpartyAdjustmentsApi->getCounterpartyAdjustmentFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID сущности | |
| **limit** | **int**| Максимальное количество элементов в выданном списке (максимум 1000) | [optional] [default to 1000] |
| **offset** | **int**| Отступ в выданном списке | [optional] [default to 0] |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |

### Return type

[**\OpenAPI\Client\Model\GetProductFiles200Response**](../Model/GetProductFiles200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCounterpartyAdjustmentList()`

```php
getCounterpartyAdjustmentList($limit, $offset, $search, $filter, $expand, $order, $accept, $accept_encoding): \OpenAPI\Client\Model\CounterpartyAdjustmentList
```

Получить список Корректировок взаиморасчетов

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


$apiInstance = new OpenAPI\Client\Api\CounterpartyAdjustmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 1000; // int | Максимальное количество элементов в выданном списке (максимум 1000)
$offset = 0; // int | Отступ в выданном списке
$search = 'search_example'; // string | Контекстный поиск по строковым полям сущностей
$filter = 'filter_example'; // string | Фильтрация выборки
$expand = 'expand_example'; // string | Замена ссылок объектами с помощью expand
$order = 'order_example'; // string | Сортировка
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string

try {
    $result = $apiInstance->getCounterpartyAdjustmentList($limit, $offset, $search, $filter, $expand, $order, $accept, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CounterpartyAdjustmentsApi->getCounterpartyAdjustmentList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Максимальное количество элементов в выданном списке (максимум 1000) | [optional] [default to 1000] |
| **offset** | **int**| Отступ в выданном списке | [optional] [default to 0] |
| **search** | **string**| Контекстный поиск по строковым полям сущностей | [optional] |
| **filter** | **string**| Фильтрация выборки | [optional] |
| **expand** | **string**| Замена ссылок объектами с помощью expand | [optional] |
| **order** | **string**| Сортировка | [optional] |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |

### Return type

[**\OpenAPI\Client\Model\CounterpartyAdjustmentList**](../Model/CounterpartyAdjustmentList.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCounterpartyAdjustmentMetadata()`

```php
getCounterpartyAdjustmentMetadata($accept, $accept_encoding): \OpenAPI\Client\Model\Metadata
```

Метаданные Корректировок взаиморасчетов

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


$apiInstance = new OpenAPI\Client\Api\CounterpartyAdjustmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string

try {
    $result = $apiInstance->getCounterpartyAdjustmentMetadata($accept, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CounterpartyAdjustmentsApi->getCounterpartyAdjustmentMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |

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

## `getCounterpartyAdjustmentMetadataAttribute()`

```php
getCounterpartyAdjustmentMetadataAttribute($offset, $limit, $accept, $accept_encoding): \OpenAPI\Client\Model\AttributeMetaInfoList
```

Доп. поля Корректировок взаиморасчетов

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


$apiInstance = new OpenAPI\Client\Api\CounterpartyAdjustmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 0; // int | Отступ в выданном списке
$limit = 1000; // int | Максимальное количество элементов в выданном списке (максимум 1000)
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string

try {
    $result = $apiInstance->getCounterpartyAdjustmentMetadataAttribute($offset, $limit, $accept, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CounterpartyAdjustmentsApi->getCounterpartyAdjustmentMetadataAttribute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**| Отступ в выданном списке | [optional] [default to 0] |
| **limit** | **int**| Максимальное количество элементов в выданном списке (максимум 1000) | [optional] [default to 1000] |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |

### Return type

[**\OpenAPI\Client\Model\AttributeMetaInfoList**](../Model/AttributeMetaInfoList.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCounterpartyAdjustmentMetadataAttributeById()`

```php
getCounterpartyAdjustmentMetadataAttributeById($id, $accept, $accept_encoding): \OpenAPI\Client\Model\AttributeMetaInfo
```

Отдельное доп. поле Корректировки взаиморасчетов

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


$apiInstance = new OpenAPI\Client\Api\CounterpartyAdjustmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID сущности
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string

try {
    $result = $apiInstance->getCounterpartyAdjustmentMetadataAttributeById($id, $accept, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CounterpartyAdjustmentsApi->getCounterpartyAdjustmentMetadataAttributeById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID сущности | |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |

### Return type

[**\OpenAPI\Client\Model\AttributeMetaInfo**](../Model/AttributeMetaInfo.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `moveCounterpartyAdjustmentToTrash()`

```php
moveCounterpartyAdjustmentToTrash($id, $accept, $accept_encoding)
```

Удалить Корректировку взаиморасчетов в корзину

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


$apiInstance = new OpenAPI\Client\Api\CounterpartyAdjustmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID сущности
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string

try {
    $apiInstance->moveCounterpartyAdjustmentToTrash($id, $accept, $accept_encoding);
} catch (Exception $e) {
    echo 'Exception when calling CounterpartyAdjustmentsApi->moveCounterpartyAdjustmentToTrash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID сущности | |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |

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

## `updateCounterpartyAdjustment()`

```php
updateCounterpartyAdjustment($id, $counterparty_adjustment, $expand, $accept, $accept_encoding, $content_type): \OpenAPI\Client\Model\CounterpartyAdjustment
```

Изменить Корректировку взаиморасчетов

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


$apiInstance = new OpenAPI\Client\Api\CounterpartyAdjustmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID сущности
$counterparty_adjustment = new \OpenAPI\Client\Model\CounterpartyAdjustment(); // \OpenAPI\Client\Model\CounterpartyAdjustment
$expand = 'expand_example'; // string | Замена ссылок объектами с помощью expand
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string
$content_type = 'application/json'; // string

try {
    $result = $apiInstance->updateCounterpartyAdjustment($id, $counterparty_adjustment, $expand, $accept, $accept_encoding, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CounterpartyAdjustmentsApi->updateCounterpartyAdjustment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID сущности | |
| **counterparty_adjustment** | [**\OpenAPI\Client\Model\CounterpartyAdjustment**](../Model/CounterpartyAdjustment.md)|  | |
| **expand** | **string**| Замена ссылок объектами с помощью expand | [optional] |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |
| **content_type** | **string**|  | [optional] [default to &#39;application/json&#39;] |

### Return type

[**\OpenAPI\Client\Model\CounterpartyAdjustment**](../Model/CounterpartyAdjustment.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCounterpartyAdjustmentMetadataAttributeById()`

```php
updateCounterpartyAdjustmentMetadataAttributeById($id, $attribute_meta_info, $accept, $accept_encoding, $content_type): \OpenAPI\Client\Model\AttributeMetaInfo
```

Обновить отдельное доп. поле Корректировки взаиморасчетов

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


$apiInstance = new OpenAPI\Client\Api\CounterpartyAdjustmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID сущности
$attribute_meta_info = new \OpenAPI\Client\Model\AttributeMetaInfo(); // \OpenAPI\Client\Model\AttributeMetaInfo
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string
$content_type = 'application/json'; // string

try {
    $result = $apiInstance->updateCounterpartyAdjustmentMetadataAttributeById($id, $attribute_meta_info, $accept, $accept_encoding, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CounterpartyAdjustmentsApi->updateCounterpartyAdjustmentMetadataAttributeById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID сущности | |
| **attribute_meta_info** | [**\OpenAPI\Client\Model\AttributeMetaInfo**](../Model/AttributeMetaInfo.md)|  | |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |
| **content_type** | **string**|  | [optional] [default to &#39;application/json&#39;] |

### Return type

[**\OpenAPI\Client\Model\AttributeMetaInfo**](../Model/AttributeMetaInfo.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
