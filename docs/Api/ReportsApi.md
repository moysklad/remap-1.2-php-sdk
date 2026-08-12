# OpenAPI\Client\ReportsApi

All URIs are relative to https://api.moysklad.ru/api/remap/1.2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getReportDashboardDay()**](ReportsApi.md#getReportDashboardDay) | **GET** /report/dashboard/day | Получить показатели за день |
| [**getReportDashboardMonth()**](ReportsApi.md#getReportDashboardMonth) | **GET** /report/dashboard/month | Получить показатели за месяц |
| [**getReportDashboardWeek()**](ReportsApi.md#getReportDashboardWeek) | **GET** /report/dashboard/week | Получить показатели за неделю |
| [**getReportOrdersPlotSeries()**](ReportsApi.md#getReportOrdersPlotSeries) | **GET** /report/orders/plotseries | Получить показатели заказов |
| [**getReportSalesPlotSeries()**](ReportsApi.md#getReportSalesPlotSeries) | **GET** /report/sales/plotseries | Получить показатели продаж |


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
