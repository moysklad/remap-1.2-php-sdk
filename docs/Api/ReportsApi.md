# OpenAPI\Client\ReportsApi

All URIs are relative to https://api.moysklad.ru/api/remap/1.2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getReportCounterparty()**](ReportsApi.md#getReportCounterparty) | **GET** /report/counterparty | Получить показатели контрагентов |
| [**getReportCounterpartyById()**](ReportsApi.md#getReportCounterpartyById) | **GET** /report/counterparty/{id} | Получить показатели контрагента |
| [**getReportDashboardDay()**](ReportsApi.md#getReportDashboardDay) | **GET** /report/dashboard/day | Получить показатели за день |
| [**getReportDashboardMonth()**](ReportsApi.md#getReportDashboardMonth) | **GET** /report/dashboard/month | Получить показатели за месяц |
| [**getReportDashboardWeek()**](ReportsApi.md#getReportDashboardWeek) | **GET** /report/dashboard/week | Получить показатели за неделю |
| [**getReportMoneyByAccount()**](ReportsApi.md#getReportMoneyByAccount) | **GET** /report/money/byaccount | Получить остатки денежных средств по кассам и счетам |
| [**getReportMoneyPlotSeries()**](ReportsApi.md#getReportMoneyPlotSeries) | **GET** /report/money/plotseries | Получить график движения денежных средств |
| [**getReportOrdersPlotSeries()**](ReportsApi.md#getReportOrdersPlotSeries) | **GET** /report/orders/plotseries | Получить показатели заказов |
| [**getReportProfitByCounterparty()**](ReportsApi.md#getReportProfitByCounterparty) | **GET** /report/profit/bycounterparty | Получить прибыльность по покупателям |
| [**getReportProfitByEmployee()**](ReportsApi.md#getReportProfitByEmployee) | **GET** /report/profit/byemployee | Получить прибыльность по сотрудникам |
| [**getReportProfitByProduct()**](ReportsApi.md#getReportProfitByProduct) | **GET** /report/profit/byproduct | Получить прибыльность по товарам |
| [**getReportProfitBySalesChannel()**](ReportsApi.md#getReportProfitBySalesChannel) | **GET** /report/profit/bysaleschannel | Получить прибыльность по каналам продаж |
| [**getReportProfitByVariant()**](ReportsApi.md#getReportProfitByVariant) | **GET** /report/profit/byvariant | Получить прибыльность по модификациям |
| [**getReportSalesPlotSeries()**](ReportsApi.md#getReportSalesPlotSeries) | **GET** /report/sales/plotseries | Получить показатели продаж |
| [**getReportTurnoverAll()**](ReportsApi.md#getReportTurnoverAll) | **GET** /report/turnover/all | Получить Обороты по товарам |
| [**getReportTurnoverByOperations()**](ReportsApi.md#getReportTurnoverByOperations) | **GET** /report/turnover/byoperations | Получить Обороты по товару с детализацией по документам |
| [**getReportTurnoverByStore()**](ReportsApi.md#getReportTurnoverByStore) | **GET** /report/turnover/bystore | Получить Обороты по товару с детализацией по складам |
| [**queryReportCounterparty()**](ReportsApi.md#queryReportCounterparty) | **POST** /report/counterparty | Получить выборочные показатели контрагентов |


## `getReportCounterparty()`

```php
getReportCounterparty($limit, $offset, $filter, $accept, $accept_encoding): \OpenAPI\Client\Model\ReportCounterpartyList
```

Получить показатели контрагентов

Запрос отчета «Показатели контрагентов» по всем контрагентам.

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


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 1000; // int | Максимальное количество элементов в выданном списке (максимум 1000)
$offset = 0; // int | Отступ в выданном списке
$filter = 'filter_example'; // string | Фильтрация выборки
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string

try {
    $result = $apiInstance->getReportCounterparty($limit, $offset, $filter, $accept, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getReportCounterparty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Максимальное количество элементов в выданном списке (максимум 1000) | [optional] [default to 1000] |
| **offset** | **int**| Отступ в выданном списке | [optional] [default to 0] |
| **filter** | **string**| Фильтрация выборки | [optional] |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |

### Return type

[**\OpenAPI\Client\Model\ReportCounterpartyList**](../Model/ReportCounterpartyList.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReportCounterpartyById()`

```php
getReportCounterpartyById($id, $accept, $accept_encoding): \OpenAPI\Client\Model\ReportCounterparty
```

Получить показатели контрагента

Запрос отчета «Показатели контрагентов» по контрагенту с указанным id.

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


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID сущности
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string

try {
    $result = $apiInstance->getReportCounterpartyById($id, $accept, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getReportCounterpartyById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID сущности | |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |

### Return type

[**\OpenAPI\Client\Model\ReportCounterparty**](../Model/ReportCounterparty.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReportDashboardDay()`

```php
getReportDashboardDay($accept, $accept_encoding): \OpenAPI\Client\Model\ReportDashboard
```

Получить показатели за день

Запрос показателей за день. Для доступа к отчету требуется право на просмотр показателей `viewDashboard`.

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


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string

try {
    $result = $apiInstance->getReportDashboardDay($accept, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getReportDashboardDay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |

### Return type

[**\OpenAPI\Client\Model\ReportDashboard**](../Model/ReportDashboard.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReportDashboardMonth()`

```php
getReportDashboardMonth($accept, $accept_encoding): \OpenAPI\Client\Model\ReportDashboard
```

Получить показатели за месяц

Запрос показателей за месяц. Для доступа к отчету требуется право на просмотр показателей `viewDashboard`.

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


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string

try {
    $result = $apiInstance->getReportDashboardMonth($accept, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getReportDashboardMonth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |

### Return type

[**\OpenAPI\Client\Model\ReportDashboard**](../Model/ReportDashboard.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReportDashboardWeek()`

```php
getReportDashboardWeek($accept, $accept_encoding): \OpenAPI\Client\Model\ReportDashboard
```

Получить показатели за неделю

Запрос показателей за неделю. Для доступа к отчету требуется право на просмотр показателей `viewDashboard`.

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


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string

try {
    $result = $apiInstance->getReportDashboardWeek($accept, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getReportDashboardWeek: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |

### Return type

[**\OpenAPI\Client\Model\ReportDashboard**](../Model/ReportDashboard.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReportMoneyByAccount()`

```php
getReportMoneyByAccount($accept, $accept_encoding): \OpenAPI\Client\Model\ReportMoneyByAccountList
```

Получить остатки денежных средств по кассам и счетам

Запрос текущих остатков денежных средств по кассам и счетам организаций. Для доступа к отчету требуется право на просмотр показателей `viewDashboard` и право «Видеть остатки денег» `viewMoneyDashboard`.

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


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string

try {
    $result = $apiInstance->getReportMoneyByAccount($accept, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getReportMoneyByAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |

### Return type

[**\OpenAPI\Client\Model\ReportMoneyByAccountList**](../Model/ReportMoneyByAccountList.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReportMoneyPlotSeries()`

```php
getReportMoneyPlotSeries($moment_from, $moment_to, $interval, $filter, $accept, $accept_encoding, $x_lognex_accept_timezone): \OpenAPI\Client\Model\ReportMoneyPlotSeries
```

Получить график движения денежных средств

Запрос отчета о движении денежных средств за период с разбивкой по часам, дням или месяцам. Для доступа к отчету требуется право на просмотр показателей `viewDashboard` и право «Видеть остатки денег» `viewMoneyDashboard`.

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


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$moment_from = 'moment_from_example'; // string | Начало периода отчета в формате YYYY-MM-DD HH:MM:SS
$moment_to = 'moment_to_example'; // string | Конец периода отчета в формате YYYY-MM-DD HH:MM:SS
$interval = 'interval_example'; // string | Интервал построения отчета
$filter = 'filter_example'; // string | Фильтрация выборки
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string
$x_lognex_accept_timezone = 'x_lognex_accept_timezone_example'; // string | Опциональный заголовок, в котором указана текущая дата на клиенте в RFC 3522. Таймзону обязательно указывать в формате знак и 4 символа. Пример: `Wed, 16 Aug 2017 23:07:01 +0700`. При подсчете показателей даты операций смещаются в таймзону клиента.

try {
    $result = $apiInstance->getReportMoneyPlotSeries($moment_from, $moment_to, $interval, $filter, $accept, $accept_encoding, $x_lognex_accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getReportMoneyPlotSeries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **moment_from** | **string**| Начало периода отчета в формате YYYY-MM-DD HH:MM:SS | |
| **moment_to** | **string**| Конец периода отчета в формате YYYY-MM-DD HH:MM:SS | |
| **interval** | **string**| Интервал построения отчета | |
| **filter** | **string**| Фильтрация выборки | [optional] |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |
| **x_lognex_accept_timezone** | **string**| Опциональный заголовок, в котором указана текущая дата на клиенте в RFC 3522. Таймзону обязательно указывать в формате знак и 4 символа. Пример: &#x60;Wed, 16 Aug 2017 23:07:01 +0700&#x60;. При подсчете показателей даты операций смещаются в таймзону клиента. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ReportMoneyPlotSeries**](../Model/ReportMoneyPlotSeries.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReportOrdersPlotSeries()`

```php
getReportOrdersPlotSeries($moment_from, $moment_to, $interval, $filter, $accept, $accept_encoding, $x_lognex_accept_timezone): \OpenAPI\Client\Model\ReportOrdersPlotSeriesList
```

Получить показатели заказов

Запрос показателей заказов покупателей за период с разбивкой по часам, дням или месяцам. Для доступа к отчету требуется право на просмотр показателей `viewDashboard`.

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


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$moment_from = 'moment_from_example'; // string | Начало периода отчета в формате YYYY-MM-DD HH:MM:SS
$moment_to = 'moment_to_example'; // string | Конец периода отчета в формате YYYY-MM-DD HH:MM:SS
$interval = 'interval_example'; // string | Интервал построения отчета
$filter = 'filter_example'; // string | Фильтрация показателей заказов. Доступные поля: `organization`, `store`, `project`. Можно указать несколько значений; пустые значения недопустимы.
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string
$x_lognex_accept_timezone = 'x_lognex_accept_timezone_example'; // string | Опциональный заголовок, в котором указана текущая дата на клиенте в RFC 3522. Таймзону обязательно указывать в формате знак и 4 символа. Пример: `Wed, 16 Aug 2017 23:07:01 +0700`. При подсчете показателей даты операций смещаются в таймзону клиента.

try {
    $result = $apiInstance->getReportOrdersPlotSeries($moment_from, $moment_to, $interval, $filter, $accept, $accept_encoding, $x_lognex_accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getReportOrdersPlotSeries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **moment_from** | **string**| Начало периода отчета в формате YYYY-MM-DD HH:MM:SS | |
| **moment_to** | **string**| Конец периода отчета в формате YYYY-MM-DD HH:MM:SS | |
| **interval** | **string**| Интервал построения отчета | |
| **filter** | **string**| Фильтрация показателей заказов. Доступные поля: &#x60;organization&#x60;, &#x60;store&#x60;, &#x60;project&#x60;. Можно указать несколько значений; пустые значения недопустимы. | [optional] |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |
| **x_lognex_accept_timezone** | **string**| Опциональный заголовок, в котором указана текущая дата на клиенте в RFC 3522. Таймзону обязательно указывать в формате знак и 4 символа. Пример: &#x60;Wed, 16 Aug 2017 23:07:01 +0700&#x60;. При подсчете показателей даты операций смещаются в таймзону клиента. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ReportOrdersPlotSeriesList**](../Model/ReportOrdersPlotSeriesList.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReportProfitByCounterparty()`

```php
getReportProfitByCounterparty($limit, $offset, $filter, $moment_from, $moment_to, $accept, $accept_encoding, $x_lognex_accept_timezone): \OpenAPI\Client\Model\ReportProfitByCounterpartyList
```

Получить прибыльность по покупателям

Запрос отчета «Прибыльность по покупателям». Для доступа к отчету требуется право на просмотр отчета «Прибыльность».

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


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 1000; // int | Максимальное количество элементов в выданном списке (максимум 1000)
$offset = 0; // int | Отступ в выданном списке
$filter = 'filter_example'; // string | Фильтрация выборки
$moment_from = 'moment_from_example'; // string | Начало периода отчета в формате YYYY-MM-DD HH:MM:SS
$moment_to = 'moment_to_example'; // string | Конец периода отчета в формате YYYY-MM-DD HH:MM:SS
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string
$x_lognex_accept_timezone = 'x_lognex_accept_timezone_example'; // string | Опциональный заголовок, в котором указана текущая дата на клиенте в RFC 3522. Таймзону обязательно указывать в формате знак и 4 символа. Пример: `Wed, 16 Aug 2017 23:07:01 +0700`. При подсчете показателей даты операций смещаются в таймзону клиента.

try {
    $result = $apiInstance->getReportProfitByCounterparty($limit, $offset, $filter, $moment_from, $moment_to, $accept, $accept_encoding, $x_lognex_accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getReportProfitByCounterparty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Максимальное количество элементов в выданном списке (максимум 1000) | [optional] [default to 1000] |
| **offset** | **int**| Отступ в выданном списке | [optional] [default to 0] |
| **filter** | **string**| Фильтрация выборки | [optional] |
| **moment_from** | **string**| Начало периода отчета в формате YYYY-MM-DD HH:MM:SS | [optional] |
| **moment_to** | **string**| Конец периода отчета в формате YYYY-MM-DD HH:MM:SS | [optional] |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |
| **x_lognex_accept_timezone** | **string**| Опциональный заголовок, в котором указана текущая дата на клиенте в RFC 3522. Таймзону обязательно указывать в формате знак и 4 символа. Пример: &#x60;Wed, 16 Aug 2017 23:07:01 +0700&#x60;. При подсчете показателей даты операций смещаются в таймзону клиента. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ReportProfitByCounterpartyList**](../Model/ReportProfitByCounterpartyList.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReportProfitByEmployee()`

```php
getReportProfitByEmployee($limit, $offset, $filter, $moment_from, $moment_to, $accept, $accept_encoding, $x_lognex_accept_timezone): \OpenAPI\Client\Model\ReportProfitByEmployeeList
```

Получить прибыльность по сотрудникам

Запрос отчета «Прибыльность по сотрудникам». Для доступа к отчету требуется право на просмотр отчета «Прибыльность».

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


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 1000; // int | Максимальное количество элементов в выданном списке (максимум 1000)
$offset = 0; // int | Отступ в выданном списке
$filter = 'filter_example'; // string | Фильтрация выборки
$moment_from = 'moment_from_example'; // string | Начало периода отчета в формате YYYY-MM-DD HH:MM:SS
$moment_to = 'moment_to_example'; // string | Конец периода отчета в формате YYYY-MM-DD HH:MM:SS
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string
$x_lognex_accept_timezone = 'x_lognex_accept_timezone_example'; // string | Опциональный заголовок, в котором указана текущая дата на клиенте в RFC 3522. Таймзону обязательно указывать в формате знак и 4 символа. Пример: `Wed, 16 Aug 2017 23:07:01 +0700`. При подсчете показателей даты операций смещаются в таймзону клиента.

try {
    $result = $apiInstance->getReportProfitByEmployee($limit, $offset, $filter, $moment_from, $moment_to, $accept, $accept_encoding, $x_lognex_accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getReportProfitByEmployee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Максимальное количество элементов в выданном списке (максимум 1000) | [optional] [default to 1000] |
| **offset** | **int**| Отступ в выданном списке | [optional] [default to 0] |
| **filter** | **string**| Фильтрация выборки | [optional] |
| **moment_from** | **string**| Начало периода отчета в формате YYYY-MM-DD HH:MM:SS | [optional] |
| **moment_to** | **string**| Конец периода отчета в формате YYYY-MM-DD HH:MM:SS | [optional] |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |
| **x_lognex_accept_timezone** | **string**| Опциональный заголовок, в котором указана текущая дата на клиенте в RFC 3522. Таймзону обязательно указывать в формате знак и 4 символа. Пример: &#x60;Wed, 16 Aug 2017 23:07:01 +0700&#x60;. При подсчете показателей даты операций смещаются в таймзону клиента. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ReportProfitByEmployeeList**](../Model/ReportProfitByEmployeeList.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReportProfitByProduct()`

```php
getReportProfitByProduct($limit, $offset, $filter, $moment_from, $moment_to, $accept, $accept_encoding, $x_lognex_accept_timezone): \OpenAPI\Client\Model\ReportProfitByProductList
```

Получить прибыльность по товарам

Запрос отчета «Прибыльность по товарам». В отчете учитываются товары, услуги и комплекты. Для доступа к отчету требуется право на просмотр отчета «Прибыльность».

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


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 1000; // int | Максимальное количество элементов в выданном списке (максимум 1000)
$offset = 0; // int | Отступ в выданном списке
$filter = 'filter_example'; // string | Фильтрация выборки
$moment_from = 'moment_from_example'; // string | Начало периода отчета в формате YYYY-MM-DD HH:MM:SS
$moment_to = 'moment_to_example'; // string | Конец периода отчета в формате YYYY-MM-DD HH:MM:SS
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string
$x_lognex_accept_timezone = 'x_lognex_accept_timezone_example'; // string | Опциональный заголовок, в котором указана текущая дата на клиенте в RFC 3522. Таймзону обязательно указывать в формате знак и 4 символа. Пример: `Wed, 16 Aug 2017 23:07:01 +0700`. При подсчете показателей даты операций смещаются в таймзону клиента.

try {
    $result = $apiInstance->getReportProfitByProduct($limit, $offset, $filter, $moment_from, $moment_to, $accept, $accept_encoding, $x_lognex_accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getReportProfitByProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Максимальное количество элементов в выданном списке (максимум 1000) | [optional] [default to 1000] |
| **offset** | **int**| Отступ в выданном списке | [optional] [default to 0] |
| **filter** | **string**| Фильтрация выборки | [optional] |
| **moment_from** | **string**| Начало периода отчета в формате YYYY-MM-DD HH:MM:SS | [optional] |
| **moment_to** | **string**| Конец периода отчета в формате YYYY-MM-DD HH:MM:SS | [optional] |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |
| **x_lognex_accept_timezone** | **string**| Опциональный заголовок, в котором указана текущая дата на клиенте в RFC 3522. Таймзону обязательно указывать в формате знак и 4 символа. Пример: &#x60;Wed, 16 Aug 2017 23:07:01 +0700&#x60;. При подсчете показателей даты операций смещаются в таймзону клиента. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ReportProfitByProductList**](../Model/ReportProfitByProductList.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReportProfitBySalesChannel()`

```php
getReportProfitBySalesChannel($limit, $offset, $filter, $moment_from, $moment_to, $accept, $accept_encoding, $x_lognex_accept_timezone): \OpenAPI\Client\Model\ReportProfitBySalesChannelList
```

Получить прибыльность по каналам продаж

Запрос отчета «Прибыльность по каналам продаж». Для доступа к отчету требуется право на просмотр отчета «Прибыльность».

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


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 1000; // int | Максимальное количество элементов в выданном списке (максимум 1000)
$offset = 0; // int | Отступ в выданном списке
$filter = 'filter_example'; // string | Фильтрация выборки
$moment_from = 'moment_from_example'; // string | Начало периода отчета в формате YYYY-MM-DD HH:MM:SS
$moment_to = 'moment_to_example'; // string | Конец периода отчета в формате YYYY-MM-DD HH:MM:SS
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string
$x_lognex_accept_timezone = 'x_lognex_accept_timezone_example'; // string | Опциональный заголовок, в котором указана текущая дата на клиенте в RFC 3522. Таймзону обязательно указывать в формате знак и 4 символа. Пример: `Wed, 16 Aug 2017 23:07:01 +0700`. При подсчете показателей даты операций смещаются в таймзону клиента.

try {
    $result = $apiInstance->getReportProfitBySalesChannel($limit, $offset, $filter, $moment_from, $moment_to, $accept, $accept_encoding, $x_lognex_accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getReportProfitBySalesChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Максимальное количество элементов в выданном списке (максимум 1000) | [optional] [default to 1000] |
| **offset** | **int**| Отступ в выданном списке | [optional] [default to 0] |
| **filter** | **string**| Фильтрация выборки | [optional] |
| **moment_from** | **string**| Начало периода отчета в формате YYYY-MM-DD HH:MM:SS | [optional] |
| **moment_to** | **string**| Конец периода отчета в формате YYYY-MM-DD HH:MM:SS | [optional] |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |
| **x_lognex_accept_timezone** | **string**| Опциональный заголовок, в котором указана текущая дата на клиенте в RFC 3522. Таймзону обязательно указывать в формате знак и 4 символа. Пример: &#x60;Wed, 16 Aug 2017 23:07:01 +0700&#x60;. При подсчете показателей даты операций смещаются в таймзону клиента. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ReportProfitBySalesChannelList**](../Model/ReportProfitBySalesChannelList.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReportProfitByVariant()`

```php
getReportProfitByVariant($limit, $offset, $filter, $moment_from, $moment_to, $accept, $accept_encoding, $x_lognex_accept_timezone): \OpenAPI\Client\Model\ReportProfitByVariantList
```

Получить прибыльность по модификациям

Запрос отчета «Прибыльность по модификациям». В отчете учитываются модификации, товары, услуги и комплекты. Для доступа к отчету требуется право на просмотр отчета «Прибыльность».

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


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 1000; // int | Максимальное количество элементов в выданном списке (максимум 1000)
$offset = 0; // int | Отступ в выданном списке
$filter = 'filter_example'; // string | Фильтрация выборки
$moment_from = 'moment_from_example'; // string | Начало периода отчета в формате YYYY-MM-DD HH:MM:SS
$moment_to = 'moment_to_example'; // string | Конец периода отчета в формате YYYY-MM-DD HH:MM:SS
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string
$x_lognex_accept_timezone = 'x_lognex_accept_timezone_example'; // string | Опциональный заголовок, в котором указана текущая дата на клиенте в RFC 3522. Таймзону обязательно указывать в формате знак и 4 символа. Пример: `Wed, 16 Aug 2017 23:07:01 +0700`. При подсчете показателей даты операций смещаются в таймзону клиента.

try {
    $result = $apiInstance->getReportProfitByVariant($limit, $offset, $filter, $moment_from, $moment_to, $accept, $accept_encoding, $x_lognex_accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getReportProfitByVariant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Максимальное количество элементов в выданном списке (максимум 1000) | [optional] [default to 1000] |
| **offset** | **int**| Отступ в выданном списке | [optional] [default to 0] |
| **filter** | **string**| Фильтрация выборки | [optional] |
| **moment_from** | **string**| Начало периода отчета в формате YYYY-MM-DD HH:MM:SS | [optional] |
| **moment_to** | **string**| Конец периода отчета в формате YYYY-MM-DD HH:MM:SS | [optional] |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |
| **x_lognex_accept_timezone** | **string**| Опциональный заголовок, в котором указана текущая дата на клиенте в RFC 3522. Таймзону обязательно указывать в формате знак и 4 символа. Пример: &#x60;Wed, 16 Aug 2017 23:07:01 +0700&#x60;. При подсчете показателей даты операций смещаются в таймзону клиента. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ReportProfitByVariantList**](../Model/ReportProfitByVariantList.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReportSalesPlotSeries()`

```php
getReportSalesPlotSeries($moment_from, $moment_to, $interval, $filter, $accept, $accept_encoding, $x_lognex_accept_timezone): \OpenAPI\Client\Model\ReportSalesPlotSeriesList
```

Получить показатели продаж

Запрос показателей продаж за период с разбивкой по часам, дням или месяцам. В показателях продаж учитываются отгрузки, розничные продажи и полученные отчеты комиссионера. Для доступа к отчету требуется право на просмотр показателей `viewDashboard`.

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


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$moment_from = 'moment_from_example'; // string | Начало периода отчета в формате YYYY-MM-DD HH:MM:SS
$moment_to = 'moment_to_example'; // string | Конец периода отчета в формате YYYY-MM-DD HH:MM:SS
$interval = 'interval_example'; // string | Интервал построения отчета
$filter = 'filter_example'; // string | Фильтрация показателей продаж. Доступные поля: `organization`, `store`, `project`, `retailStore`. Можно указать несколько значений; пустые значения недопустимы.
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string
$x_lognex_accept_timezone = 'x_lognex_accept_timezone_example'; // string | Опциональный заголовок, в котором указана текущая дата на клиенте в RFC 3522. Таймзону обязательно указывать в формате знак и 4 символа. Пример: `Wed, 16 Aug 2017 23:07:01 +0700`. При подсчете показателей даты операций смещаются в таймзону клиента.

try {
    $result = $apiInstance->getReportSalesPlotSeries($moment_from, $moment_to, $interval, $filter, $accept, $accept_encoding, $x_lognex_accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getReportSalesPlotSeries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **moment_from** | **string**| Начало периода отчета в формате YYYY-MM-DD HH:MM:SS | |
| **moment_to** | **string**| Конец периода отчета в формате YYYY-MM-DD HH:MM:SS | |
| **interval** | **string**| Интервал построения отчета | |
| **filter** | **string**| Фильтрация показателей продаж. Доступные поля: &#x60;organization&#x60;, &#x60;store&#x60;, &#x60;project&#x60;, &#x60;retailStore&#x60;. Можно указать несколько значений; пустые значения недопустимы. | [optional] |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |
| **x_lognex_accept_timezone** | **string**| Опциональный заголовок, в котором указана текущая дата на клиенте в RFC 3522. Таймзону обязательно указывать в формате знак и 4 символа. Пример: &#x60;Wed, 16 Aug 2017 23:07:01 +0700&#x60;. При подсчете показателей даты операций смещаются в таймзону клиента. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ReportSalesPlotSeriesList**](../Model/ReportSalesPlotSeriesList.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReportTurnoverAll()`

```php
getReportTurnoverAll($limit, $offset, $filter, $moment_from, $moment_to, $group_by, $accept, $accept_encoding, $x_lognex_accept_timezone): \OpenAPI\Client\Model\ReportTurnoverList
```

Получить Обороты по товарам

Запрос отчета «Обороты по товарам» — общий отчет по оборотам товаров и модификаций.

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


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 1000; // int | Максимальное количество элементов в выданном списке (максимум 1000)
$offset = 0; // int | Отступ в выданном списке
$filter = 'filter_example'; // string | Фильтрация выборки
$moment_from = 'moment_from_example'; // string | Начало периода отчета в формате YYYY-MM-DD HH:MM:SS
$moment_to = 'moment_to_example'; // string | Конец периода отчета в формате YYYY-MM-DD HH:MM:SS
$group_by = 'product'; // string | Тип, по которому нужно сгруппировать выдачу. Значение по умолчанию `product`.
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string
$x_lognex_accept_timezone = 'x_lognex_accept_timezone_example'; // string | Опциональный заголовок, в котором указана текущая дата на клиенте в RFC 3522. Таймзону обязательно указывать в формате знак и 4 символа. Пример: `Wed, 16 Aug 2017 23:07:01 +0700`. При подсчете показателей даты операций смещаются в таймзону клиента.

try {
    $result = $apiInstance->getReportTurnoverAll($limit, $offset, $filter, $moment_from, $moment_to, $group_by, $accept, $accept_encoding, $x_lognex_accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getReportTurnoverAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Максимальное количество элементов в выданном списке (максимум 1000) | [optional] [default to 1000] |
| **offset** | **int**| Отступ в выданном списке | [optional] [default to 0] |
| **filter** | **string**| Фильтрация выборки | [optional] |
| **moment_from** | **string**| Начало периода отчета в формате YYYY-MM-DD HH:MM:SS | [optional] |
| **moment_to** | **string**| Конец периода отчета в формате YYYY-MM-DD HH:MM:SS | [optional] |
| **group_by** | **string**| Тип, по которому нужно сгруппировать выдачу. Значение по умолчанию &#x60;product&#x60;. | [optional] [default to &#39;product&#39;] |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |
| **x_lognex_accept_timezone** | **string**| Опциональный заголовок, в котором указана текущая дата на клиенте в RFC 3522. Таймзону обязательно указывать в формате знак и 4 символа. Пример: &#x60;Wed, 16 Aug 2017 23:07:01 +0700&#x60;. При подсчете показателей даты операций смещаются в таймзону клиента. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ReportTurnoverList**](../Model/ReportTurnoverList.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReportTurnoverByOperations()`

```php
getReportTurnoverByOperations($filter, $moment_from, $moment_to, $accept, $accept_encoding, $x_lognex_accept_timezone): \OpenAPI\Client\Model\ReportTurnoverByOperationList
```

Получить Обороты по товару с детализацией по документам

Запрос отчета «Обороты по товару с детализацией по документам».

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


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string | Фильтрация выборки
$moment_from = 'moment_from_example'; // string | Начало периода отчета в формате YYYY-MM-DD HH:MM:SS
$moment_to = 'moment_to_example'; // string | Конец периода отчета в формате YYYY-MM-DD HH:MM:SS
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string
$x_lognex_accept_timezone = 'x_lognex_accept_timezone_example'; // string | Опциональный заголовок, в котором указана текущая дата на клиенте в RFC 3522. Таймзону обязательно указывать в формате знак и 4 символа. Пример: `Wed, 16 Aug 2017 23:07:01 +0700`. При подсчете показателей даты операций смещаются в таймзону клиента.

try {
    $result = $apiInstance->getReportTurnoverByOperations($filter, $moment_from, $moment_to, $accept, $accept_encoding, $x_lognex_accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getReportTurnoverByOperations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| Фильтрация выборки | [optional] |
| **moment_from** | **string**| Начало периода отчета в формате YYYY-MM-DD HH:MM:SS | [optional] |
| **moment_to** | **string**| Конец периода отчета в формате YYYY-MM-DD HH:MM:SS | [optional] |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |
| **x_lognex_accept_timezone** | **string**| Опциональный заголовок, в котором указана текущая дата на клиенте в RFC 3522. Таймзону обязательно указывать в формате знак и 4 символа. Пример: &#x60;Wed, 16 Aug 2017 23:07:01 +0700&#x60;. При подсчете показателей даты операций смещаются в таймзону клиента. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ReportTurnoverByOperationList**](../Model/ReportTurnoverByOperationList.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReportTurnoverByStore()`

```php
getReportTurnoverByStore($filter, $moment_from, $moment_to, $accept, $accept_encoding, $x_lognex_accept_timezone): \OpenAPI\Client\Model\ReportTurnoverByStoreList
```

Получить Обороты по товару с детализацией по складам

Запрос отчета «Обороты по товару с детализацией по складам».

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


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string | Фильтрация выборки
$moment_from = 'moment_from_example'; // string | Начало периода отчета в формате YYYY-MM-DD HH:MM:SS
$moment_to = 'moment_to_example'; // string | Конец периода отчета в формате YYYY-MM-DD HH:MM:SS
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string
$x_lognex_accept_timezone = 'x_lognex_accept_timezone_example'; // string | Опциональный заголовок, в котором указана текущая дата на клиенте в RFC 3522. Таймзону обязательно указывать в формате знак и 4 символа. Пример: `Wed, 16 Aug 2017 23:07:01 +0700`. При подсчете показателей даты операций смещаются в таймзону клиента.

try {
    $result = $apiInstance->getReportTurnoverByStore($filter, $moment_from, $moment_to, $accept, $accept_encoding, $x_lognex_accept_timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getReportTurnoverByStore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**| Фильтрация выборки | [optional] |
| **moment_from** | **string**| Начало периода отчета в формате YYYY-MM-DD HH:MM:SS | [optional] |
| **moment_to** | **string**| Конец периода отчета в формате YYYY-MM-DD HH:MM:SS | [optional] |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |
| **x_lognex_accept_timezone** | **string**| Опциональный заголовок, в котором указана текущая дата на клиенте в RFC 3522. Таймзону обязательно указывать в формате знак и 4 символа. Пример: &#x60;Wed, 16 Aug 2017 23:07:01 +0700&#x60;. При подсчете показателей даты операций смещаются в таймзону клиента. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ReportTurnoverByStoreList**](../Model/ReportTurnoverByStoreList.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryReportCounterparty()`

```php
queryReportCounterparty($report_counterparty_query, $accept, $accept_encoding, $content_type): \OpenAPI\Client\Model\ReportCounterpartyList
```

Получить выборочные показатели контрагентов

Запрос отчета «Показатели контрагентов» по указанным контрагентам.

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


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_counterparty_query = new \OpenAPI\Client\Model\ReportCounterpartyQuery(); // \OpenAPI\Client\Model\ReportCounterpartyQuery
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = 'gzip, deflate, br'; // string
$content_type = 'application/json'; // string

try {
    $result = $apiInstance->queryReportCounterparty($report_counterparty_query, $accept, $accept_encoding, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->queryReportCounterparty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **report_counterparty_query** | [**\OpenAPI\Client\Model\ReportCounterpartyQuery**](../Model/ReportCounterpartyQuery.md)|  | |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |
| **content_type** | **string**|  | [optional] [default to &#39;application/json&#39;] |

### Return type

[**\OpenAPI\Client\Model\ReportCounterpartyList**](../Model/ReportCounterpartyList.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
