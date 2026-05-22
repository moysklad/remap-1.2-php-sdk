# OpenAPI\Client\ProjectsApi

All URIs are relative to https://api.moysklad.ru/api/remap/1.2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createProject()**](ProjectsApi.md#createProject) | **POST** /entity/project | Создать проект |
| [**createProjectMetadataAttribute()**](ProjectsApi.md#createProjectMetadataAttribute) | **POST** /entity/project/metadata/attributes | Создать доп. поле проекта |
| [**createProjectsBatch()**](ProjectsApi.md#createProjectsBatch) | **POST** /entity/project/batch | Создать или изменить проекты |
| [**deleteProject()**](ProjectsApi.md#deleteProject) | **DELETE** /entity/project/{id} | Удалить проект |
| [**deleteProjectMetadataAttribute()**](ProjectsApi.md#deleteProjectMetadataAttribute) | **DELETE** /entity/project/metadata/attributes/{id} | Удалить доп. поле проекта |
| [**deleteProjectsBatch()**](ProjectsApi.md#deleteProjectsBatch) | **POST** /entity/project/delete | Удалить проекты |
| [**getProjectById()**](ProjectsApi.md#getProjectById) | **GET** /entity/project/{id} | Получить проект по ID |
| [**getProjectMetadata()**](ProjectsApi.md#getProjectMetadata) | **GET** /entity/project/metadata | Получить метаданные проектов |
| [**getProjectMetadataAttributeById()**](ProjectsApi.md#getProjectMetadataAttributeById) | **GET** /entity/project/metadata/attributes/{id} | Получить доп. поле проекта по ID |
| [**getProjectMetadataAttributes()**](ProjectsApi.md#getProjectMetadataAttributes) | **GET** /entity/project/metadata/attributes | Получить доп. поля проектов |
| [**getProjects()**](ProjectsApi.md#getProjects) | **GET** /entity/project | Получить список проектов |
| [**updateProject()**](ProjectsApi.md#updateProject) | **PUT** /entity/project/{id} | Обновить проект |
| [**updateProjectMetadataAttribute()**](ProjectsApi.md#updateProjectMetadataAttribute) | **PUT** /entity/project/metadata/attributes/{id} | Обновить доп. поле проекта |


## `createProject()`

```php
createProject($project, $expand, $accept, $accept_encoding, $content_type): \OpenAPI\Client\Model\Project
```

Создать проект

Создание нового проекта

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


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project = new \OpenAPI\Client\Model\Project(); // \OpenAPI\Client\Model\Project
$expand = agent,organization; // string | Замена ссылок объектами с помощью expand
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = gzip, deflate, br; // string
$content_type = 'application/json'; // string

try {
    $result = $apiInstance->createProject($project, $expand, $accept, $accept_encoding, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->createProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project** | [**\OpenAPI\Client\Model\Project**](../Model/Project.md)|  | |
| **expand** | **string**| Замена ссылок объектами с помощью expand | [optional] |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |
| **content_type** | **string**|  | [optional] [default to &#39;application/json&#39;] |

### Return type

[**\OpenAPI\Client\Model\Project**](../Model/Project.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createProjectMetadataAttribute()`

```php
createProjectMetadataAttribute($attribute_meta_info, $accept, $accept_encoding, $content_type): \OpenAPI\Client\Model\AttributeMetaInfo
```

Создать доп. поле проекта

Создание нового доп. поля для проектов

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


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_meta_info = new \OpenAPI\Client\Model\AttributeMetaInfo(); // \OpenAPI\Client\Model\AttributeMetaInfo
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = gzip, deflate, br; // string
$content_type = 'application/json'; // string

try {
    $result = $apiInstance->createProjectMetadataAttribute($attribute_meta_info, $accept, $accept_encoding, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->createProjectMetadataAttribute: ', $e->getMessage(), PHP_EOL;
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

## `createProjectsBatch()`

```php
createProjectsBatch($project, $expand, $accept, $accept_encoding, $content_type): \OpenAPI\Client\Model\CreateProjectsBatch200ResponseInner[]
```

Создать или изменить проекты

Создание или изменение нескольких проектов.

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


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project = array(new \OpenAPI\Client\Model\Project()); // \OpenAPI\Client\Model\Project[]
$expand = agent,organization; // string | Замена ссылок объектами с помощью expand
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = gzip, deflate, br; // string
$content_type = 'application/json'; // string

try {
    $result = $apiInstance->createProjectsBatch($project, $expand, $accept, $accept_encoding, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->createProjectsBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project** | [**\OpenAPI\Client\Model\Project[]**](../Model/Project.md)|  | |
| **expand** | **string**| Замена ссылок объектами с помощью expand | [optional] |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |
| **content_type** | **string**|  | [optional] [default to &#39;application/json&#39;] |

### Return type

[**\OpenAPI\Client\Model\CreateProjectsBatch200ResponseInner[]**](../Model/CreateProjectsBatch200ResponseInner.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProject()`

```php
deleteProject($id, $accept, $accept_encoding)
```

Удалить проект

Удаление проекта с указанным id

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


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 12a8b923-692c-11e6-8a84-bae500000053; // string | ID сущности
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = gzip, deflate, br; // string

try {
    $apiInstance->deleteProject($id, $accept, $accept_encoding);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->deleteProject: ', $e->getMessage(), PHP_EOL;
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

## `deleteProjectMetadataAttribute()`

```php
deleteProjectMetadataAttribute($id, $accept, $accept_encoding)
```

Удалить доп. поле проекта

Удаление доп. поля

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


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 12a8b923-692c-11e6-8a84-bae500000053; // string | ID сущности
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = gzip, deflate, br; // string

try {
    $apiInstance->deleteProjectMetadataAttribute($id, $accept, $accept_encoding);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->deleteProjectMetadataAttribute: ', $e->getMessage(), PHP_EOL;
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

## `deleteProjectsBatch()`

```php
deleteProjectsBatch($project, $accept, $accept_encoding, $content_type): \OpenAPI\Client\Model\DeleteContractsBatch200ResponseInner[]
```

Удалить проекты

Массовое удаление проектов по их мета-объектам.

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


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project = array(new \OpenAPI\Client\Model\Project()); // \OpenAPI\Client\Model\Project[]
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = gzip, deflate, br; // string
$content_type = 'application/json'; // string

try {
    $result = $apiInstance->deleteProjectsBatch($project, $accept, $accept_encoding, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->deleteProjectsBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project** | [**\OpenAPI\Client\Model\Project[]**](../Model/Project.md)|  | |
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

## `getProjectById()`

```php
getProjectById($id, $expand, $accept, $accept_encoding): \OpenAPI\Client\Model\Project
```

Получить проект по ID

Запрос на получение отдельного проекта с указанным id

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


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 12a8b923-692c-11e6-8a84-bae500000053; // string | ID сущности
$expand = agent,organization; // string | Замена ссылок объектами с помощью expand
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = gzip, deflate, br; // string

try {
    $result = $apiInstance->getProjectById($id, $expand, $accept, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->getProjectById: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\Project**](../Model/Project.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProjectMetadata()`

```php
getProjectMetadata($accept, $accept_encoding): \OpenAPI\Client\Model\Metadata
```

Получить метаданные проектов

Запрос на получение метаданных проектов

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


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = gzip, deflate, br; // string

try {
    $result = $apiInstance->getProjectMetadata($accept, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->getProjectMetadata: ', $e->getMessage(), PHP_EOL;
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

## `getProjectMetadataAttributeById()`

```php
getProjectMetadataAttributeById($id, $accept, $accept_encoding): \OpenAPI\Client\Model\AttributeMetaInfo
```

Получить доп. поле проекта по ID

Запрос на получение отдельного доп. поля

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


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 12a8b923-692c-11e6-8a84-bae500000053; // string | ID сущности
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = gzip, deflate, br; // string

try {
    $result = $apiInstance->getProjectMetadataAttributeById($id, $accept, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->getProjectMetadataAttributeById: ', $e->getMessage(), PHP_EOL;
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

## `getProjectMetadataAttributes()`

```php
getProjectMetadataAttributes($accept, $accept_encoding): \OpenAPI\Client\Model\AttributeMetaInfoList
```

Получить доп. поля проектов

Запрос на получение всех доп. полей для проектов

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


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = gzip, deflate, br; // string

try {
    $result = $apiInstance->getProjectMetadataAttributes($accept, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->getProjectMetadataAttributes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `getProjects()`

```php
getProjects($limit, $offset, $search, $filter, $expand, $order, $accept, $accept_encoding): \OpenAPI\Client\Model\ProjectList
```

Получить список проектов

Запрос всех проектов на данной учетной записи

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


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 1000; // int | Максимальное количество элементов в выданном списке (максимум 1000)
$offset = 0; // int | Отступ в выданном списке
$search = name=123; // string | Контекстный поиск по строковым полям сущностей
$filter = archived=false; // string | Фильтрация выборки
$expand = agent,organization; // string | Замена ссылок объектами с помощью expand
$order = name; // string | Сортировка
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = gzip, deflate, br; // string

try {
    $result = $apiInstance->getProjects($limit, $offset, $search, $filter, $expand, $order, $accept, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->getProjects: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\ProjectList**](../Model/ProjectList.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProject()`

```php
updateProject($id, $project, $expand, $accept, $accept_encoding, $content_type): \OpenAPI\Client\Model\Project
```

Обновить проект

Обновление проекта с указанным id

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


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 12a8b923-692c-11e6-8a84-bae500000053; // string | ID сущности
$project = new \OpenAPI\Client\Model\Project(); // \OpenAPI\Client\Model\Project
$expand = agent,organization; // string | Замена ссылок объектами с помощью expand
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = gzip, deflate, br; // string
$content_type = 'application/json'; // string

try {
    $result = $apiInstance->updateProject($id, $project, $expand, $accept, $accept_encoding, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->updateProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID сущности | |
| **project** | [**\OpenAPI\Client\Model\Project**](../Model/Project.md)|  | |
| **expand** | **string**| Замена ссылок объектами с помощью expand | [optional] |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |
| **content_type** | **string**|  | [optional] [default to &#39;application/json&#39;] |

### Return type

[**\OpenAPI\Client\Model\Project**](../Model/Project.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProjectMetadataAttribute()`

```php
updateProjectMetadataAttribute($id, $attribute_meta_info, $accept, $accept_encoding, $content_type): \OpenAPI\Client\Model\AttributeMetaInfo
```

Обновить доп. поле проекта

Обновление доп. поля для проектов

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


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 12a8b923-692c-11e6-8a84-bae500000053; // string | ID сущности
$attribute_meta_info = new \OpenAPI\Client\Model\AttributeMetaInfo(); // \OpenAPI\Client\Model\AttributeMetaInfo
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = gzip, deflate, br; // string
$content_type = 'application/json'; // string

try {
    $result = $apiInstance->updateProjectMetadataAttribute($id, $attribute_meta_info, $accept, $accept_encoding, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->updateProjectMetadataAttribute: ', $e->getMessage(), PHP_EOL;
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
