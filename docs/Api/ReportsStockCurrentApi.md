# OpenAPI\Client\ReportsStockCurrentApi

All URIs are relative to https://api.moysklad.ru/api/remap/1.2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getStockAllCurrent()**](ReportsStockCurrentApi.md#getStockAllCurrent) | **GET** /report/stock/all/current | Получить Краткий отчет об остатках |
| [**getStockBySlotCurrent()**](ReportsStockCurrentApi.md#getStockBySlotCurrent) | **GET** /report/stock/byslot/current | Получить Краткий отчет об остатках по ячейкам |
| [**getStockByStoreCurrent()**](ReportsStockCurrentApi.md#getStockByStoreCurrent) | **GET** /report/stock/bystore/current | Получить Краткий отчет об остатках по складам |


## `getStockAllCurrent()`

```php
getStockAllCurrent($include, $changed_since, $stock_type, $filter, $accept, $accept_encoding): \OpenAPI\Client\Model\StockCurrentAll[]
```

Получить Краткий отчет об остатках

Краткий отчет об остатках для частого обновления данных по номенклатуре. Возвращает один тип значения остатка, выбранный параметром `stockType`.

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


$apiInstance = new OpenAPI\Client\Api\ReportsStockCurrentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include = 'include_example'; // string | Управляет включением нулевых остатков. По умолчанию выводятся только ненулевые значения.
$changed_since = 'changed_since_example'; // string | Выводит фактические остатки по позициям, у которых остаток изменился с указанного момента. Формат: `yyyy-MM-dd HH:mm:ss`.
$stock_type = 'stock'; // string | Тип рассчитываемого значения остатка. По умолчанию `stock`.
$filter = 'filter_example'; // string | Фильтрация отчета по ID сущностей. Поддерживаемые поля: `assortmentId`, `storeId`.
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string

try {
    $result = $apiInstance->getStockAllCurrent($include, $changed_since, $stock_type, $filter, $accept, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsStockCurrentApi->getStockAllCurrent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **include** | **string**| Управляет включением нулевых остатков. По умолчанию выводятся только ненулевые значения. | [optional] |
| **changed_since** | **string**| Выводит фактические остатки по позициям, у которых остаток изменился с указанного момента. Формат: &#x60;yyyy-MM-dd HH:mm:ss&#x60;. | [optional] |
| **stock_type** | **string**| Тип рассчитываемого значения остатка. По умолчанию &#x60;stock&#x60;. | [optional] [default to &#39;stock&#39;] |
| **filter** | **string**| Фильтрация отчета по ID сущностей. Поддерживаемые поля: &#x60;assortmentId&#x60;, &#x60;storeId&#x60;. | [optional] |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |

### Return type

[**\OpenAPI\Client\Model\StockCurrentAll[]**](../Model/StockCurrentAll.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStockBySlotCurrent()`

```php
getStockBySlotCurrent($include, $stock_type, $filter, $accept, $accept_encoding): \OpenAPI\Client\Model\StockCurrentBySlot[]
```

Получить Краткий отчет об остатках по ячейкам

Краткий отчет об остатках с группировкой по номенклатуре, складам и ячейкам. Возвращает один тип значения остатка, выбранный параметром `stockType`.  Для запроса требуется фильтрация по `assortmentId` или `storeId`.

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


$apiInstance = new OpenAPI\Client\Api\ReportsStockCurrentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include = 'include_example'; // string | Управляет включением нулевых остатков. По умолчанию выводятся только ненулевые значения.
$stock_type = 'stock'; // string | Тип рассчитываемого значения остатка. По умолчанию `stock`.
$filter = 'filter_example'; // string | Фильтрация отчета по ID сущностей. Поддерживаемые поля: `assortmentId`, `storeId`.
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string

try {
    $result = $apiInstance->getStockBySlotCurrent($include, $stock_type, $filter, $accept, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsStockCurrentApi->getStockBySlotCurrent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **include** | **string**| Управляет включением нулевых остатков. По умолчанию выводятся только ненулевые значения. | [optional] |
| **stock_type** | **string**| Тип рассчитываемого значения остатка. По умолчанию &#x60;stock&#x60;. | [optional] [default to &#39;stock&#39;] |
| **filter** | **string**| Фильтрация отчета по ID сущностей. Поддерживаемые поля: &#x60;assortmentId&#x60;, &#x60;storeId&#x60;. | [optional] |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |

### Return type

[**\OpenAPI\Client\Model\StockCurrentBySlot[]**](../Model/StockCurrentBySlot.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStockByStoreCurrent()`

```php
getStockByStoreCurrent($include, $changed_since, $stock_type, $with_recalculate, $filter, $accept, $accept_encoding): \OpenAPI\Client\Model\StockCurrentByStore[]
```

Получить Краткий отчет об остатках по складам

Краткий отчет об остатках с группировкой по номенклатуре и складам. Возвращает один тип значения остатка, выбранный параметром `stockType`.

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


$apiInstance = new OpenAPI\Client\Api\ReportsStockCurrentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include = 'include_example'; // string | Управляет включением нулевых остатков. По умолчанию выводятся только ненулевые значения.
$changed_since = 'changed_since_example'; // string | Выводит фактические остатки по позициям, у которых остаток изменился с указанного момента. Формат: `yyyy-MM-dd HH:mm:ss`.
$stock_type = 'stock'; // string | Тип рассчитываемого значения остатка. По умолчанию `stock`.
$with_recalculate = True; // bool | Включает позиции, по которым остаток пересчитывается. Для таких позиций значение остатка может быть `null`.
$filter = 'filter_example'; // string | Фильтрация отчета по ID сущностей. Поддерживаемые поля: `assortmentId`, `storeId`.
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string

try {
    $result = $apiInstance->getStockByStoreCurrent($include, $changed_since, $stock_type, $with_recalculate, $filter, $accept, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsStockCurrentApi->getStockByStoreCurrent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **include** | **string**| Управляет включением нулевых остатков. По умолчанию выводятся только ненулевые значения. | [optional] |
| **changed_since** | **string**| Выводит фактические остатки по позициям, у которых остаток изменился с указанного момента. Формат: &#x60;yyyy-MM-dd HH:mm:ss&#x60;. | [optional] |
| **stock_type** | **string**| Тип рассчитываемого значения остатка. По умолчанию &#x60;stock&#x60;. | [optional] [default to &#39;stock&#39;] |
| **with_recalculate** | **bool**| Включает позиции, по которым остаток пересчитывается. Для таких позиций значение остатка может быть &#x60;null&#x60;. | [optional] |
| **filter** | **string**| Фильтрация отчета по ID сущностей. Поддерживаемые поля: &#x60;assortmentId&#x60;, &#x60;storeId&#x60;. | [optional] |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |

### Return type

[**\OpenAPI\Client\Model\StockCurrentByStore[]**](../Model/StockCurrentByStore.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
