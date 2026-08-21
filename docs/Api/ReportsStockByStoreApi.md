# OpenAPI\Client\ReportsStockByStoreApi

All URIs are relative to https://api.moysklad.ru/api/remap/1.2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getStockByStore()**](ReportsStockByStoreApi.md#getStockByStore) | **GET** /report/stock/bystore | Получить Остатки по складам |


## `getStockByStore()`

```php
getStockByStore($limit, $offset, $filter, $order, $group_by, $accept, $accept_encoding): \OpenAPI\Client\Model\StockByStoreList
```

Получить Остатки по складам

Запрос отчета «Остатки по складам» — остаток по каждому товару на каждом складе. Тип объектов в выдаче задается параметром `groupBy`: товары (product), товары и модификации (variant), товары, модификации и партии (consignment).

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


$apiInstance = new OpenAPI\Client\Api\ReportsStockByStoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 1000; // int | Максимальное количество элементов в выданном списке (максимум 1000)
$offset = 0; // int | Отступ в выданном списке
$filter = 'filter_example'; // string | Фильтрация выборки
$order = 'order_example'; // string | Сортировка
$group_by = 'group_by_example'; // string | Тип, по которому нужно сгруппировать выдачу. Значение по умолчанию `variant`. - `product` — выдает только товары - `variant` — выдает товары и модификации - `consignment` — выдает товары, модификации, партии
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string

try {
    $result = $apiInstance->getStockByStore($limit, $offset, $filter, $order, $group_by, $accept, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsStockByStoreApi->getStockByStore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Максимальное количество элементов в выданном списке (максимум 1000) | [optional] [default to 1000] |
| **offset** | **int**| Отступ в выданном списке | [optional] [default to 0] |
| **filter** | **string**| Фильтрация выборки | [optional] |
| **order** | **string**| Сортировка | [optional] |
| **group_by** | **string**| Тип, по которому нужно сгруппировать выдачу. Значение по умолчанию &#x60;variant&#x60;. - &#x60;product&#x60; — выдает только товары - &#x60;variant&#x60; — выдает товары и модификации - &#x60;consignment&#x60; — выдает товары, модификации, партии | [optional] |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |

### Return type

[**\OpenAPI\Client\Model\StockByStoreList**](../Model/StockByStoreList.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
