# OpenAPI\Client\ReportsByOperationsApi

All URIs are relative to https://api.moysklad.ru/api/remap/1.2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getByOperationsInTransit()**](ReportsByOperationsApi.md#getByOperationsInTransit) | **GET** /report/byoperations/intransit | Получить Отчет по документам, отображающий ожидание |
| [**getByOperationsReserve()**](ReportsByOperationsApi.md#getByOperationsReserve) | **GET** /report/byoperations/reserve | Получить Отчет по документам, отображающий резервы |
| [**getByOperationsStock()**](ReportsByOperationsApi.md#getByOperationsStock) | **GET** /report/byoperations/stock | Получить Отчет по документам, отображающий остатки |


## `getByOperationsInTransit()`

```php
getByOperationsInTransit($filter, $limit, $offset, $accept, $accept_encoding): \OpenAPI\Client\Model\ByOperationsInTransitList
```

Получить Отчет по документам, отображающий ожидание

Отчет по документам номенклатуры, формирующим ожидания. Обязательный параметр фильтрации — `filter` с полем `assortment` (ссылка на товар, модификацию или партию; только одна номенклатура). Для доступа нужны права на просмотр товаров и остатков.

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


$apiInstance = new OpenAPI\Client\Api\ReportsByOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string | Фильтрация выборки. Обязательно указать `assortment=<href>` — ссылку на товар, модификацию или партию. Можно фильтровать только по одной номенклатуре.
$limit = 1000; // int | Максимальное количество элементов в выданном списке (максимум 1000)
$offset = 0; // int | Отступ в выданном списке
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string

try {
    $result = $apiInstance->getByOperationsInTransit($filter, $limit, $offset, $accept, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsByOperationsApi->getByOperationsInTransit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| Фильтрация выборки. Обязательно указать &#x60;assortment&#x3D;&lt;href&gt;&#x60; — ссылку на товар, модификацию или партию. Можно фильтровать только по одной номенклатуре. | |
| **limit** | **int**| Максимальное количество элементов в выданном списке (максимум 1000) | [optional] [default to 1000] |
| **offset** | **int**| Отступ в выданном списке | [optional] [default to 0] |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |

### Return type

[**\OpenAPI\Client\Model\ByOperationsInTransitList**](../Model/ByOperationsInTransitList.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getByOperationsReserve()`

```php
getByOperationsReserve($filter, $limit, $offset, $accept, $accept_encoding): \OpenAPI\Client\Model\ByOperationsReserveList
```

Получить Отчет по документам, отображающий резервы

Отчет по документам номенклатуры, формирующим резервы. Обязательный параметр фильтрации — `filter` с полем `assortment` (ссылка на товар, модификацию или партию; только одна номенклатура). Для доступа нужны права на просмотр товаров и остатков.

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


$apiInstance = new OpenAPI\Client\Api\ReportsByOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string | Фильтрация выборки. Обязательно указать `assortment=<href>` — ссылку на товар, модификацию или партию. Можно фильтровать только по одной номенклатуре.
$limit = 1000; // int | Максимальное количество элементов в выданном списке (максимум 1000)
$offset = 0; // int | Отступ в выданном списке
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string

try {
    $result = $apiInstance->getByOperationsReserve($filter, $limit, $offset, $accept, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsByOperationsApi->getByOperationsReserve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| Фильтрация выборки. Обязательно указать &#x60;assortment&#x3D;&lt;href&gt;&#x60; — ссылку на товар, модификацию или партию. Можно фильтровать только по одной номенклатуре. | |
| **limit** | **int**| Максимальное количество элементов в выданном списке (максимум 1000) | [optional] [default to 1000] |
| **offset** | **int**| Отступ в выданном списке | [optional] [default to 0] |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |

### Return type

[**\OpenAPI\Client\Model\ByOperationsReserveList**](../Model/ByOperationsReserveList.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getByOperationsStock()`

```php
getByOperationsStock($filter, $limit, $offset, $accept, $accept_encoding): \OpenAPI\Client\Model\ByOperationsStockList
```

Получить Отчет по документам, отображающий остатки

Отчет по документам номенклатуры, формирующим остатки. Обязательный параметр фильтрации — `filter` с полем `assortment` (ссылка на товар, модификацию или партию; только одна номенклатура). Для доступа нужны права на просмотр товаров и остатков. Поля себестоимости (`costPerUnit`, `sumCost`) не возвращаются без пермиссии «Видеть себестоимость, цену закупки, прибыль товаров».

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


$apiInstance = new OpenAPI\Client\Api\ReportsByOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string | Фильтрация выборки. Обязательно указать `assortment=<href>` — ссылку на товар, модификацию или партию. Можно фильтровать только по одной номенклатуре.
$limit = 1000; // int | Максимальное количество элементов в выданном списке (максимум 1000)
$offset = 0; // int | Отступ в выданном списке
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string

try {
    $result = $apiInstance->getByOperationsStock($filter, $limit, $offset, $accept, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsByOperationsApi->getByOperationsStock: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| Фильтрация выборки. Обязательно указать &#x60;assortment&#x3D;&lt;href&gt;&#x60; — ссылку на товар, модификацию или партию. Можно фильтровать только по одной номенклатуре. | |
| **limit** | **int**| Максимальное количество элементов в выданном списке (максимум 1000) | [optional] [default to 1000] |
| **offset** | **int**| Отступ в выданном списке | [optional] [default to 0] |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |

### Return type

[**\OpenAPI\Client\Model\ByOperationsStockList**](../Model/ByOperationsStockList.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
