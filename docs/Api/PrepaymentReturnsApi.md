# OpenAPI\Client\PrepaymentReturnsApi

All URIs are relative to https://api.moysklad.ru/api/remap/1.2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPrepaymentReturnMetadataAttribute()**](PrepaymentReturnsApi.md#createPrepaymentReturnMetadataAttribute) | **POST** /entity/prepaymentreturn/metadata/attributes | Создать доп. поле Возврата предоплаты |
| [**createPrepaymentReturnMetadataState()**](PrepaymentReturnsApi.md#createPrepaymentReturnMetadataState) | **POST** /entity/prepaymentreturn/metadata/states | Создать статус Возврата предоплаты |
| [**createPrepaymentReturnMetadataStatesBatch()**](PrepaymentReturnsApi.md#createPrepaymentReturnMetadataStatesBatch) | **POST** /entity/prepaymentreturn/metadata/states/batch | Массовое создание и обновление статусов Возврата предоплаты |
| [**deletePrepaymentReturn()**](PrepaymentReturnsApi.md#deletePrepaymentReturn) | **DELETE** /entity/prepaymentreturn/{id} | Удалить Возврат предоплаты |
| [**deletePrepaymentReturnMetadataAttributeById()**](PrepaymentReturnsApi.md#deletePrepaymentReturnMetadataAttributeById) | **DELETE** /entity/prepaymentreturn/metadata/attributes/{id} | Удалить отдельное доп. поле Возврата предоплаты |
| [**deletePrepaymentReturnMetadataStateById()**](PrepaymentReturnsApi.md#deletePrepaymentReturnMetadataStateById) | **DELETE** /entity/prepaymentreturn/metadata/states/{id} | Удалить отдельный статус Возврата предоплаты |
| [**getPrepaymentReturnById()**](PrepaymentReturnsApi.md#getPrepaymentReturnById) | **GET** /entity/prepaymentreturn/{id} | Получить Возврат предоплаты |
| [**getPrepaymentReturnList()**](PrepaymentReturnsApi.md#getPrepaymentReturnList) | **GET** /entity/prepaymentreturn | Получить список Возвратов предоплаты |
| [**getPrepaymentReturnMetadata()**](PrepaymentReturnsApi.md#getPrepaymentReturnMetadata) | **GET** /entity/prepaymentreturn/metadata | Метаданные Возвратов предоплаты |
| [**getPrepaymentReturnMetadataAttribute()**](PrepaymentReturnsApi.md#getPrepaymentReturnMetadataAttribute) | **GET** /entity/prepaymentreturn/metadata/attributes | Доп. поля Возврата предоплаты |
| [**getPrepaymentReturnMetadataAttributeById()**](PrepaymentReturnsApi.md#getPrepaymentReturnMetadataAttributeById) | **GET** /entity/prepaymentreturn/metadata/attributes/{id} | Отдельное доп. поле Возврата предоплаты |
| [**getPrepaymentReturnMetadataStateById()**](PrepaymentReturnsApi.md#getPrepaymentReturnMetadataStateById) | **GET** /entity/prepaymentreturn/metadata/states/{id} | Отдельный статус Возврата предоплаты |
| [**getPrepaymentReturnPositionById()**](PrepaymentReturnsApi.md#getPrepaymentReturnPositionById) | **GET** /entity/prepaymentreturn/{id}/positions/{positionId} | Получить позицию Возврата предоплаты |
| [**getPrepaymentReturnPositions()**](PrepaymentReturnsApi.md#getPrepaymentReturnPositions) | **GET** /entity/prepaymentreturn/{id}/positions | Получить позиции Возврата предоплаты |
| [**movePrepaymentReturnToTrash()**](PrepaymentReturnsApi.md#movePrepaymentReturnToTrash) | **POST** /entity/prepaymentreturn/{id}/trash | Удалить Возврат предоплаты в корзину |
| [**updatePrepaymentReturnMetadataAttributeById()**](PrepaymentReturnsApi.md#updatePrepaymentReturnMetadataAttributeById) | **PUT** /entity/prepaymentreturn/metadata/attributes/{id} | Обновить отдельное доп. поле Возврата предоплаты |
| [**updatePrepaymentReturnMetadataStateById()**](PrepaymentReturnsApi.md#updatePrepaymentReturnMetadataStateById) | **PUT** /entity/prepaymentreturn/metadata/states/{id} | Обновить отдельный статус Возврата предоплаты |


## `createPrepaymentReturnMetadataAttribute()`

```php
createPrepaymentReturnMetadataAttribute($attribute_meta_info, $accept, $accept_encoding, $content_type): \OpenAPI\Client\Model\AttributeMetaInfo
```

Создать доп. поле Возврата предоплаты

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


$apiInstance = new OpenAPI\Client\Api\PrepaymentReturnsApi(
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
    $result = $apiInstance->createPrepaymentReturnMetadataAttribute($attribute_meta_info, $accept, $accept_encoding, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrepaymentReturnsApi->createPrepaymentReturnMetadataAttribute: ', $e->getMessage(), PHP_EOL;
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

## `createPrepaymentReturnMetadataState()`

```php
createPrepaymentReturnMetadataState($state, $accept, $accept_encoding, $content_type): \OpenAPI\Client\Model\State
```

Создать статус Возврата предоплаты

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


$apiInstance = new OpenAPI\Client\Api\PrepaymentReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$state = new \OpenAPI\Client\Model\State(); // \OpenAPI\Client\Model\State
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string
$content_type = 'application/json'; // string

try {
    $result = $apiInstance->createPrepaymentReturnMetadataState($state, $accept, $accept_encoding, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrepaymentReturnsApi->createPrepaymentReturnMetadataState: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **state** | [**\OpenAPI\Client\Model\State**](../Model/State.md)|  | |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |
| **content_type** | **string**|  | [optional] [default to &#39;application/json&#39;] |

### Return type

[**\OpenAPI\Client\Model\State**](../Model/State.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPrepaymentReturnMetadataStatesBatch()`

```php
createPrepaymentReturnMetadataStatesBatch($state, $accept, $accept_encoding, $content_type): \OpenAPI\Client\Model\StateRowResult[]
```

Массовое создание и обновление статусов Возврата предоплаты

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


$apiInstance = new OpenAPI\Client\Api\PrepaymentReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$state = array(new \OpenAPI\Client\Model\State()); // \OpenAPI\Client\Model\State[]
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string
$content_type = 'application/json'; // string

try {
    $result = $apiInstance->createPrepaymentReturnMetadataStatesBatch($state, $accept, $accept_encoding, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrepaymentReturnsApi->createPrepaymentReturnMetadataStatesBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **state** | [**\OpenAPI\Client\Model\State[]**](../Model/State.md)|  | |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |
| **content_type** | **string**|  | [optional] [default to &#39;application/json&#39;] |

### Return type

[**\OpenAPI\Client\Model\StateRowResult[]**](../Model/StateRowResult.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePrepaymentReturn()`

```php
deletePrepaymentReturn($id, $accept, $accept_encoding)
```

Удалить Возврат предоплаты

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


$apiInstance = new OpenAPI\Client\Api\PrepaymentReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID сущности
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string

try {
    $apiInstance->deletePrepaymentReturn($id, $accept, $accept_encoding);
} catch (Exception $e) {
    echo 'Exception when calling PrepaymentReturnsApi->deletePrepaymentReturn: ', $e->getMessage(), PHP_EOL;
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

## `deletePrepaymentReturnMetadataAttributeById()`

```php
deletePrepaymentReturnMetadataAttributeById($id, $accept, $accept_encoding)
```

Удалить отдельное доп. поле Возврата предоплаты

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


$apiInstance = new OpenAPI\Client\Api\PrepaymentReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID сущности
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string

try {
    $apiInstance->deletePrepaymentReturnMetadataAttributeById($id, $accept, $accept_encoding);
} catch (Exception $e) {
    echo 'Exception when calling PrepaymentReturnsApi->deletePrepaymentReturnMetadataAttributeById: ', $e->getMessage(), PHP_EOL;
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

## `deletePrepaymentReturnMetadataStateById()`

```php
deletePrepaymentReturnMetadataStateById($id, $accept, $accept_encoding)
```

Удалить отдельный статус Возврата предоплаты

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


$apiInstance = new OpenAPI\Client\Api\PrepaymentReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID сущности
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string

try {
    $apiInstance->deletePrepaymentReturnMetadataStateById($id, $accept, $accept_encoding);
} catch (Exception $e) {
    echo 'Exception when calling PrepaymentReturnsApi->deletePrepaymentReturnMetadataStateById: ', $e->getMessage(), PHP_EOL;
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

## `getPrepaymentReturnById()`

```php
getPrepaymentReturnById($id, $expand, $fields, $accept, $accept_encoding): \OpenAPI\Client\Model\PrepaymentReturn
```

Получить Возврат предоплаты

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


$apiInstance = new OpenAPI\Client\Api\PrepaymentReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID сущности
$expand = 'expand_example'; // string | Замена ссылок объектами с помощью expand
$fields = 'fields_example'; // string | Включить в ответ скрытые поля, не выводимые по умолчанию. В одном запросе можно передать только одно значение. - `minimumStock` — неснижаемый остаток (товар, модификация) - `downloadPermanentHref` — постоянная ссылка на изображение (платный тариф) - `stock` — остатки и себестоимость в позициях документов - `declaration` — прослеживаемость импортных товаров в позициях документов
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string

try {
    $result = $apiInstance->getPrepaymentReturnById($id, $expand, $fields, $accept, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrepaymentReturnsApi->getPrepaymentReturnById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID сущности | |
| **expand** | **string**| Замена ссылок объектами с помощью expand | [optional] |
| **fields** | **string**| Включить в ответ скрытые поля, не выводимые по умолчанию. В одном запросе можно передать только одно значение. - &#x60;minimumStock&#x60; — неснижаемый остаток (товар, модификация) - &#x60;downloadPermanentHref&#x60; — постоянная ссылка на изображение (платный тариф) - &#x60;stock&#x60; — остатки и себестоимость в позициях документов - &#x60;declaration&#x60; — прослеживаемость импортных товаров в позициях документов | [optional] |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |

### Return type

[**\OpenAPI\Client\Model\PrepaymentReturn**](../Model/PrepaymentReturn.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPrepaymentReturnList()`

```php
getPrepaymentReturnList($limit, $offset, $search, $expand, $fields, $accept, $accept_encoding): \OpenAPI\Client\Model\PrepaymentReturnList
```

Получить список Возвратов предоплаты

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


$apiInstance = new OpenAPI\Client\Api\PrepaymentReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 1000; // int | Максимальное количество элементов в выданном списке (максимум 1000)
$offset = 0; // int | Отступ в выданном списке
$search = 'search_example'; // string | Контекстный поиск по строковым полям сущностей
$expand = 'expand_example'; // string | Замена ссылок объектами с помощью expand
$fields = 'fields_example'; // string | Включить в ответ скрытые поля, не выводимые по умолчанию. В одном запросе можно передать только одно значение. - `minimumStock` — неснижаемый остаток (товар, модификация) - `downloadPermanentHref` — постоянная ссылка на изображение (платный тариф) - `stock` — остатки и себестоимость в позициях документов - `declaration` — прослеживаемость импортных товаров в позициях документов
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string

try {
    $result = $apiInstance->getPrepaymentReturnList($limit, $offset, $search, $expand, $fields, $accept, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrepaymentReturnsApi->getPrepaymentReturnList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Максимальное количество элементов в выданном списке (максимум 1000) | [optional] [default to 1000] |
| **offset** | **int**| Отступ в выданном списке | [optional] [default to 0] |
| **search** | **string**| Контекстный поиск по строковым полям сущностей | [optional] |
| **expand** | **string**| Замена ссылок объектами с помощью expand | [optional] |
| **fields** | **string**| Включить в ответ скрытые поля, не выводимые по умолчанию. В одном запросе можно передать только одно значение. - &#x60;minimumStock&#x60; — неснижаемый остаток (товар, модификация) - &#x60;downloadPermanentHref&#x60; — постоянная ссылка на изображение (платный тариф) - &#x60;stock&#x60; — остатки и себестоимость в позициях документов - &#x60;declaration&#x60; — прослеживаемость импортных товаров в позициях документов | [optional] |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |

### Return type

[**\OpenAPI\Client\Model\PrepaymentReturnList**](../Model/PrepaymentReturnList.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPrepaymentReturnMetadata()`

```php
getPrepaymentReturnMetadata($accept, $accept_encoding): \OpenAPI\Client\Model\DocumentMetadata
```

Метаданные Возвратов предоплаты

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


$apiInstance = new OpenAPI\Client\Api\PrepaymentReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string

try {
    $result = $apiInstance->getPrepaymentReturnMetadata($accept, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrepaymentReturnsApi->getPrepaymentReturnMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |

### Return type

[**\OpenAPI\Client\Model\DocumentMetadata**](../Model/DocumentMetadata.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPrepaymentReturnMetadataAttribute()`

```php
getPrepaymentReturnMetadataAttribute($offset, $limit, $accept, $accept_encoding): \OpenAPI\Client\Model\AttributeMetaInfoList
```

Доп. поля Возврата предоплаты

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


$apiInstance = new OpenAPI\Client\Api\PrepaymentReturnsApi(
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
    $result = $apiInstance->getPrepaymentReturnMetadataAttribute($offset, $limit, $accept, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrepaymentReturnsApi->getPrepaymentReturnMetadataAttribute: ', $e->getMessage(), PHP_EOL;
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

## `getPrepaymentReturnMetadataAttributeById()`

```php
getPrepaymentReturnMetadataAttributeById($id, $accept, $accept_encoding): \OpenAPI\Client\Model\AttributeMetaInfo
```

Отдельное доп. поле Возврата предоплаты

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


$apiInstance = new OpenAPI\Client\Api\PrepaymentReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID сущности
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string

try {
    $result = $apiInstance->getPrepaymentReturnMetadataAttributeById($id, $accept, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrepaymentReturnsApi->getPrepaymentReturnMetadataAttributeById: ', $e->getMessage(), PHP_EOL;
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

## `getPrepaymentReturnMetadataStateById()`

```php
getPrepaymentReturnMetadataStateById($id, $accept, $accept_encoding): \OpenAPI\Client\Model\State
```

Отдельный статус Возврата предоплаты

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


$apiInstance = new OpenAPI\Client\Api\PrepaymentReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID сущности
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string

try {
    $result = $apiInstance->getPrepaymentReturnMetadataStateById($id, $accept, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrepaymentReturnsApi->getPrepaymentReturnMetadataStateById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID сущности | |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |

### Return type

[**\OpenAPI\Client\Model\State**](../Model/State.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPrepaymentReturnPositionById()`

```php
getPrepaymentReturnPositionById($id, $position_id, $expand, $fields, $accept, $accept_encoding): \OpenAPI\Client\Model\PrepaymentReturnPosition
```

Получить позицию Возврата предоплаты

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


$apiInstance = new OpenAPI\Client\Api\PrepaymentReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID сущности
$position_id = 'position_id_example'; // string | ID позиции
$expand = 'expand_example'; // string | Замена ссылок объектами с помощью expand
$fields = 'fields_example'; // string | Включить в ответ скрытые поля, не выводимые по умолчанию. В одном запросе можно передать только одно значение. - `minimumStock` — неснижаемый остаток (товар, модификация) - `downloadPermanentHref` — постоянная ссылка на изображение (платный тариф) - `stock` — остатки и себестоимость в позициях документов - `declaration` — прослеживаемость импортных товаров в позициях документов
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string

try {
    $result = $apiInstance->getPrepaymentReturnPositionById($id, $position_id, $expand, $fields, $accept, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrepaymentReturnsApi->getPrepaymentReturnPositionById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID сущности | |
| **position_id** | **string**| ID позиции | |
| **expand** | **string**| Замена ссылок объектами с помощью expand | [optional] |
| **fields** | **string**| Включить в ответ скрытые поля, не выводимые по умолчанию. В одном запросе можно передать только одно значение. - &#x60;minimumStock&#x60; — неснижаемый остаток (товар, модификация) - &#x60;downloadPermanentHref&#x60; — постоянная ссылка на изображение (платный тариф) - &#x60;stock&#x60; — остатки и себестоимость в позициях документов - &#x60;declaration&#x60; — прослеживаемость импортных товаров в позициях документов | [optional] |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |

### Return type

[**\OpenAPI\Client\Model\PrepaymentReturnPosition**](../Model/PrepaymentReturnPosition.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPrepaymentReturnPositions()`

```php
getPrepaymentReturnPositions($id, $limit, $offset, $expand, $fields, $accept, $accept_encoding): \OpenAPI\Client\Model\PrepaymentReturnPositionList
```

Получить позиции Возврата предоплаты

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


$apiInstance = new OpenAPI\Client\Api\PrepaymentReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID сущности
$limit = 1000; // int | Максимальное количество элементов в выданном списке (максимум 1000)
$offset = 0; // int | Отступ в выданном списке
$expand = 'expand_example'; // string | Замена ссылок объектами с помощью expand
$fields = 'fields_example'; // string | Включить в ответ скрытые поля, не выводимые по умолчанию. В одном запросе можно передать только одно значение. - `minimumStock` — неснижаемый остаток (товар, модификация) - `downloadPermanentHref` — постоянная ссылка на изображение (платный тариф) - `stock` — остатки и себестоимость в позициях документов - `declaration` — прослеживаемость импортных товаров в позициях документов
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string

try {
    $result = $apiInstance->getPrepaymentReturnPositions($id, $limit, $offset, $expand, $fields, $accept, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrepaymentReturnsApi->getPrepaymentReturnPositions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID сущности | |
| **limit** | **int**| Максимальное количество элементов в выданном списке (максимум 1000) | [optional] [default to 1000] |
| **offset** | **int**| Отступ в выданном списке | [optional] [default to 0] |
| **expand** | **string**| Замена ссылок объектами с помощью expand | [optional] |
| **fields** | **string**| Включить в ответ скрытые поля, не выводимые по умолчанию. В одном запросе можно передать только одно значение. - &#x60;minimumStock&#x60; — неснижаемый остаток (товар, модификация) - &#x60;downloadPermanentHref&#x60; — постоянная ссылка на изображение (платный тариф) - &#x60;stock&#x60; — остатки и себестоимость в позициях документов - &#x60;declaration&#x60; — прослеживаемость импортных товаров в позициях документов | [optional] |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |

### Return type

[**\OpenAPI\Client\Model\PrepaymentReturnPositionList**](../Model/PrepaymentReturnPositionList.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `movePrepaymentReturnToTrash()`

```php
movePrepaymentReturnToTrash($id, $accept, $accept_encoding)
```

Удалить Возврат предоплаты в корзину

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


$apiInstance = new OpenAPI\Client\Api\PrepaymentReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID сущности
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string

try {
    $apiInstance->movePrepaymentReturnToTrash($id, $accept, $accept_encoding);
} catch (Exception $e) {
    echo 'Exception when calling PrepaymentReturnsApi->movePrepaymentReturnToTrash: ', $e->getMessage(), PHP_EOL;
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

## `updatePrepaymentReturnMetadataAttributeById()`

```php
updatePrepaymentReturnMetadataAttributeById($id, $attribute_meta_info, $accept, $accept_encoding, $content_type): \OpenAPI\Client\Model\AttributeMetaInfo
```

Обновить отдельное доп. поле Возврата предоплаты

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


$apiInstance = new OpenAPI\Client\Api\PrepaymentReturnsApi(
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
    $result = $apiInstance->updatePrepaymentReturnMetadataAttributeById($id, $attribute_meta_info, $accept, $accept_encoding, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrepaymentReturnsApi->updatePrepaymentReturnMetadataAttributeById: ', $e->getMessage(), PHP_EOL;
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

## `updatePrepaymentReturnMetadataStateById()`

```php
updatePrepaymentReturnMetadataStateById($id, $state, $accept, $accept_encoding, $content_type): \OpenAPI\Client\Model\State
```

Обновить отдельный статус Возврата предоплаты

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


$apiInstance = new OpenAPI\Client\Api\PrepaymentReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID сущности
$state = new \OpenAPI\Client\Model\State(); // \OpenAPI\Client\Model\State
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string
$content_type = 'application/json'; // string

try {
    $result = $apiInstance->updatePrepaymentReturnMetadataStateById($id, $state, $accept, $accept_encoding, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrepaymentReturnsApi->updatePrepaymentReturnMetadataStateById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID сущности | |
| **state** | [**\OpenAPI\Client\Model\State**](../Model/State.md)|  | |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |
| **content_type** | **string**|  | [optional] [default to &#39;application/json&#39;] |

### Return type

[**\OpenAPI\Client\Model\State**](../Model/State.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
