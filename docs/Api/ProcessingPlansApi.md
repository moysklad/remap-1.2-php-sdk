# OpenAPI\Client\ProcessingPlansApi

All URIs are relative to https://api.moysklad.ru/api/remap/1.2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createProcessingPlan()**](ProcessingPlansApi.md#createProcessingPlan) | **POST** /entity/processingplan | Создать Техкарту |
| [**createProcessingPlanBatch()**](ProcessingPlansApi.md#createProcessingPlanBatch) | **POST** /entity/processingplan/batch | Создать или изменить Техкарты |
| [**createProcessingPlanMaterials()**](ProcessingPlansApi.md#createProcessingPlanMaterials) | **POST** /entity/processingplan/{id}/materials | Создать материал Техкарты |
| [**createProcessingPlanMetadataAttribute()**](ProcessingPlansApi.md#createProcessingPlanMetadataAttribute) | **POST** /entity/processingplan/metadata/attributes | Создать Доп. поле ProcessingPlan |
| [**createProcessingPlanProducts()**](ProcessingPlansApi.md#createProcessingPlanProducts) | **POST** /entity/processingplan/{id}/products | Создать продукт Техкарты |
| [**deleteProcessingPlan()**](ProcessingPlansApi.md#deleteProcessingPlan) | **DELETE** /entity/processingplan/{id} | Удалить Техкарту |
| [**deleteProcessingPlanMaterial()**](ProcessingPlansApi.md#deleteProcessingPlanMaterial) | **DELETE** /entity/processingplan/{id}/materials/{positionId} | Удалить материал Техкарты |
| [**deleteProcessingPlanMaterialsBatch()**](ProcessingPlansApi.md#deleteProcessingPlanMaterialsBatch) | **POST** /entity/processingplan/{id}/materials/delete | Массовое удаление материалов Техкарты |
| [**deleteProcessingPlanMetadataAttributeById()**](ProcessingPlansApi.md#deleteProcessingPlanMetadataAttributeById) | **DELETE** /entity/processingplan/metadata/attributes/{id} | Удалить отдельное доп. поле ProcessingPlan |
| [**deleteProcessingPlanProduct()**](ProcessingPlansApi.md#deleteProcessingPlanProduct) | **DELETE** /entity/processingplan/{id}/products/{positionId} | Удалить продукт Техкарты |
| [**deleteProcessingPlanProductsBatch()**](ProcessingPlansApi.md#deleteProcessingPlanProductsBatch) | **POST** /entity/processingplan/{id}/products/delete | Массовое удаление продуктов Техкарты |
| [**deleteProcessingPlansBatch()**](ProcessingPlansApi.md#deleteProcessingPlansBatch) | **POST** /entity/processingplan/delete | Массовое удаление Техкарт |
| [**getProcessingPlanById()**](ProcessingPlansApi.md#getProcessingPlanById) | **GET** /entity/processingplan/{id} | Получить Техкарту |
| [**getProcessingPlanMaterialById()**](ProcessingPlansApi.md#getProcessingPlanMaterialById) | **GET** /entity/processingplan/{id}/materials/{positionId} | Получить материал Техкарты |
| [**getProcessingPlanMaterials()**](ProcessingPlansApi.md#getProcessingPlanMaterials) | **GET** /entity/processingplan/{id}/materials | Получить материалы Техкарты |
| [**getProcessingPlanMetadata()**](ProcessingPlansApi.md#getProcessingPlanMetadata) | **GET** /entity/processingplan/metadata | Метаданные Складов |
| [**getProcessingPlanMetadataAttribute()**](ProcessingPlansApi.md#getProcessingPlanMetadataAttribute) | **GET** /entity/processingplan/metadata/attributes | Доп. поля ProcessingPlan |
| [**getProcessingPlanMetadataAttributeById()**](ProcessingPlansApi.md#getProcessingPlanMetadataAttributeById) | **GET** /entity/processingplan/metadata/attributes/{id} | Отдельное доп. поле Техкарты |
| [**getProcessingPlanProductById()**](ProcessingPlansApi.md#getProcessingPlanProductById) | **GET** /entity/processingplan/{id}/products/{positionId} | Получить продукт Техкарты |
| [**getProcessingPlanProducts()**](ProcessingPlansApi.md#getProcessingPlanProducts) | **GET** /entity/processingplan/{id}/products | Получить продукты Техкарты |
| [**getProcessingPlanStageById()**](ProcessingPlansApi.md#getProcessingPlanStageById) | **GET** /entity/processingplan/{id}/stages/{positionId} | Получить отдельный этап Техкарты |
| [**getProcessingPlanStages()**](ProcessingPlansApi.md#getProcessingPlanStages) | **GET** /entity/processingplan/{id}/stages | Получить этапы Техкарты |
| [**getProcessingPlans()**](ProcessingPlansApi.md#getProcessingPlans) | **GET** /entity/processingplan | Получить список Техкарт |
| [**updateProcessingPlan()**](ProcessingPlansApi.md#updateProcessingPlan) | **PUT** /entity/processingplan/{id} | Изменить Техкарту |
| [**updateProcessingPlanMaterial()**](ProcessingPlansApi.md#updateProcessingPlanMaterial) | **PUT** /entity/processingplan/{id}/materials/{positionId} | Изменить материал Техкарты |
| [**updateProcessingPlanMetadataAttributeById()**](ProcessingPlansApi.md#updateProcessingPlanMetadataAttributeById) | **PUT** /entity/processingplan/metadata/attributes/{id} | Обновить отдельное доп. поле ProcessingPlan |
| [**updateProcessingPlanProduct()**](ProcessingPlansApi.md#updateProcessingPlanProduct) | **PUT** /entity/processingplan/{id}/products/{positionId} | Изменить продукт Техкарты |
| [**updateProcessingPlanStage()**](ProcessingPlansApi.md#updateProcessingPlanStage) | **PUT** /entity/processingplan/{id}/stages/{positionId} | Изменить отдельный этап Техкарты |


## `createProcessingPlan()`

```php
createProcessingPlan($processing_plan, $expand, $accept, $accept_encoding, $content_type): \OpenAPI\Client\Model\ProcessingPlan
```

Создать Техкарту

Создание новой Техкарты

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


$apiInstance = new OpenAPI\Client\Api\ProcessingPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$processing_plan = new \OpenAPI\Client\Model\ProcessingPlan(); // \OpenAPI\Client\Model\ProcessingPlan
$expand = agent,organization; // string | Замена ссылок объектами с помощью expand
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = gzip, deflate, br; // string
$content_type = 'application/json'; // string

try {
    $result = $apiInstance->createProcessingPlan($processing_plan, $expand, $accept, $accept_encoding, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessingPlansApi->createProcessingPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **processing_plan** | [**\OpenAPI\Client\Model\ProcessingPlan**](../Model/ProcessingPlan.md)|  | |
| **expand** | **string**| Замена ссылок объектами с помощью expand | [optional] |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |
| **content_type** | **string**|  | [optional] [default to &#39;application/json&#39;] |

### Return type

[**\OpenAPI\Client\Model\ProcessingPlan**](../Model/ProcessingPlan.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createProcessingPlanBatch()`

```php
createProcessingPlanBatch($processing_plan, $expand, $accept, $accept_encoding, $content_type): \OpenAPI\Client\Model\CreateProcessingPlanBatch200ResponseInner[]
```

Создать или изменить Техкарты

Создать или изменить Техкарты.

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


$apiInstance = new OpenAPI\Client\Api\ProcessingPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$processing_plan = array(new \OpenAPI\Client\Model\ProcessingPlan()); // \OpenAPI\Client\Model\ProcessingPlan[]
$expand = agent,organization; // string | Замена ссылок объектами с помощью expand
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = gzip, deflate, br; // string
$content_type = 'application/json'; // string

try {
    $result = $apiInstance->createProcessingPlanBatch($processing_plan, $expand, $accept, $accept_encoding, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessingPlansApi->createProcessingPlanBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **processing_plan** | [**\OpenAPI\Client\Model\ProcessingPlan[]**](../Model/ProcessingPlan.md)|  | |
| **expand** | **string**| Замена ссылок объектами с помощью expand | [optional] |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |
| **content_type** | **string**|  | [optional] [default to &#39;application/json&#39;] |

### Return type

[**\OpenAPI\Client\Model\CreateProcessingPlanBatch200ResponseInner[]**](../Model/CreateProcessingPlanBatch200ResponseInner.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createProcessingPlanMaterials()`

```php
createProcessingPlanMaterials($id, $processing_plan_material, $expand, $accept, $accept_encoding, $content_type): \OpenAPI\Client\Model\ProcessingPlanMaterial
```

Создать материал Техкарты

Запрос на создание нового материала в Техкарте

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


$apiInstance = new OpenAPI\Client\Api\ProcessingPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 12a8b923-692c-11e6-8a84-bae500000053; // string | ID сущности
$processing_plan_material = new \OpenAPI\Client\Model\ProcessingPlanMaterial(); // \OpenAPI\Client\Model\ProcessingPlanMaterial
$expand = agent,organization; // string | Замена ссылок объектами с помощью expand
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = gzip, deflate, br; // string
$content_type = 'application/json'; // string

try {
    $result = $apiInstance->createProcessingPlanMaterials($id, $processing_plan_material, $expand, $accept, $accept_encoding, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessingPlansApi->createProcessingPlanMaterials: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID сущности | |
| **processing_plan_material** | [**\OpenAPI\Client\Model\ProcessingPlanMaterial**](../Model/ProcessingPlanMaterial.md)|  | |
| **expand** | **string**| Замена ссылок объектами с помощью expand | [optional] |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |
| **content_type** | **string**|  | [optional] [default to &#39;application/json&#39;] |

### Return type

[**\OpenAPI\Client\Model\ProcessingPlanMaterial**](../Model/ProcessingPlanMaterial.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createProcessingPlanMetadataAttribute()`

```php
createProcessingPlanMetadataAttribute($attribute_meta_info, $accept, $accept_encoding, $content_type): \OpenAPI\Client\Model\AttributeMetaInfo
```

Создать Доп. поле ProcessingPlan

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


$apiInstance = new OpenAPI\Client\Api\ProcessingPlansApi(
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
    $result = $apiInstance->createProcessingPlanMetadataAttribute($attribute_meta_info, $accept, $accept_encoding, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessingPlansApi->createProcessingPlanMetadataAttribute: ', $e->getMessage(), PHP_EOL;
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

## `createProcessingPlanProducts()`

```php
createProcessingPlanProducts($id, $processing_plan_product, $expand, $accept, $accept_encoding, $content_type): \OpenAPI\Client\Model\ProcessingPlanProduct
```

Создать продукт Техкарты

Запрос на создание нового продукта в Техкарте

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


$apiInstance = new OpenAPI\Client\Api\ProcessingPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 12a8b923-692c-11e6-8a84-bae500000053; // string | ID сущности
$processing_plan_product = new \OpenAPI\Client\Model\ProcessingPlanProduct(); // \OpenAPI\Client\Model\ProcessingPlanProduct
$expand = agent,organization; // string | Замена ссылок объектами с помощью expand
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = gzip, deflate, br; // string
$content_type = 'application/json'; // string

try {
    $result = $apiInstance->createProcessingPlanProducts($id, $processing_plan_product, $expand, $accept, $accept_encoding, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessingPlansApi->createProcessingPlanProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID сущности | |
| **processing_plan_product** | [**\OpenAPI\Client\Model\ProcessingPlanProduct**](../Model/ProcessingPlanProduct.md)|  | |
| **expand** | **string**| Замена ссылок объектами с помощью expand | [optional] |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |
| **content_type** | **string**|  | [optional] [default to &#39;application/json&#39;] |

### Return type

[**\OpenAPI\Client\Model\ProcessingPlanProduct**](../Model/ProcessingPlanProduct.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProcessingPlan()`

```php
deleteProcessingPlan($id, $accept, $accept_encoding, $content_type)
```

Удалить Техкарту

Запрос на удаление Техкарты с указанным id

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


$apiInstance = new OpenAPI\Client\Api\ProcessingPlansApi(
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
    $apiInstance->deleteProcessingPlan($id, $accept, $accept_encoding, $content_type);
} catch (Exception $e) {
    echo 'Exception when calling ProcessingPlansApi->deleteProcessingPlan: ', $e->getMessage(), PHP_EOL;
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

## `deleteProcessingPlanMaterial()`

```php
deleteProcessingPlanMaterial($id, $position_id, $accept, $accept_encoding)
```

Удалить материал Техкарты

Запрос на удаление материала Техкарты с указанным id

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


$apiInstance = new OpenAPI\Client\Api\ProcessingPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 12a8b923-692c-11e6-8a84-bae500000053; // string | ID сущности
$position_id = 12a8b923-692c-11e6-8a84-bae500000054; // string | ID позиции
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = gzip, deflate, br; // string

try {
    $apiInstance->deleteProcessingPlanMaterial($id, $position_id, $accept, $accept_encoding);
} catch (Exception $e) {
    echo 'Exception when calling ProcessingPlansApi->deleteProcessingPlanMaterial: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID сущности | |
| **position_id** | **string**| ID позиции | |
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

## `deleteProcessingPlanMaterialsBatch()`

```php
deleteProcessingPlanMaterialsBatch($id, $processing_plan_material, $accept, $accept_encoding, $content_type): \OpenAPI\Client\Model\DeleteContractsBatch200ResponseInner[]
```

Массовое удаление материалов Техкарты

Массовое удаление материалов Техкарты по их мета-объектам

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


$apiInstance = new OpenAPI\Client\Api\ProcessingPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 12a8b923-692c-11e6-8a84-bae500000053; // string | ID сущности
$processing_plan_material = array(new \OpenAPI\Client\Model\ProcessingPlanMaterial()); // \OpenAPI\Client\Model\ProcessingPlanMaterial[]
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = gzip, deflate, br; // string
$content_type = 'application/json'; // string

try {
    $result = $apiInstance->deleteProcessingPlanMaterialsBatch($id, $processing_plan_material, $accept, $accept_encoding, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessingPlansApi->deleteProcessingPlanMaterialsBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID сущности | |
| **processing_plan_material** | [**\OpenAPI\Client\Model\ProcessingPlanMaterial[]**](../Model/ProcessingPlanMaterial.md)|  | |
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

## `deleteProcessingPlanMetadataAttributeById()`

```php
deleteProcessingPlanMetadataAttributeById($id, $accept, $accept_encoding, $content_type)
```

Удалить отдельное доп. поле ProcessingPlan

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


$apiInstance = new OpenAPI\Client\Api\ProcessingPlansApi(
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
    $apiInstance->deleteProcessingPlanMetadataAttributeById($id, $accept, $accept_encoding, $content_type);
} catch (Exception $e) {
    echo 'Exception when calling ProcessingPlansApi->deleteProcessingPlanMetadataAttributeById: ', $e->getMessage(), PHP_EOL;
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

## `deleteProcessingPlanProduct()`

```php
deleteProcessingPlanProduct($id, $position_id, $accept, $accept_encoding)
```

Удалить продукт Техкарты

Запрос на удаление продукта Техкарты с указанным id

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


$apiInstance = new OpenAPI\Client\Api\ProcessingPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 12a8b923-692c-11e6-8a84-bae500000053; // string | ID сущности
$position_id = 12a8b923-692c-11e6-8a84-bae500000054; // string | ID позиции
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = gzip, deflate, br; // string

try {
    $apiInstance->deleteProcessingPlanProduct($id, $position_id, $accept, $accept_encoding);
} catch (Exception $e) {
    echo 'Exception when calling ProcessingPlansApi->deleteProcessingPlanProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID сущности | |
| **position_id** | **string**| ID позиции | |
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

## `deleteProcessingPlanProductsBatch()`

```php
deleteProcessingPlanProductsBatch($id, $processing_plan_product, $accept, $accept_encoding, $content_type): \OpenAPI\Client\Model\DeleteContractsBatch200ResponseInner[]
```

Массовое удаление продуктов Техкарты

Массовое удаление продуктов Техкарты по их мета-объектам

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


$apiInstance = new OpenAPI\Client\Api\ProcessingPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 12a8b923-692c-11e6-8a84-bae500000053; // string | ID сущности
$processing_plan_product = array(new \OpenAPI\Client\Model\ProcessingPlanProduct()); // \OpenAPI\Client\Model\ProcessingPlanProduct[]
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = gzip, deflate, br; // string
$content_type = 'application/json'; // string

try {
    $result = $apiInstance->deleteProcessingPlanProductsBatch($id, $processing_plan_product, $accept, $accept_encoding, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessingPlansApi->deleteProcessingPlanProductsBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID сущности | |
| **processing_plan_product** | [**\OpenAPI\Client\Model\ProcessingPlanProduct[]**](../Model/ProcessingPlanProduct.md)|  | |
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

## `deleteProcessingPlansBatch()`

```php
deleteProcessingPlansBatch($processing_plan, $accept, $accept_encoding, $content_type): \OpenAPI\Client\Model\DeleteContractsBatch200ResponseInner[]
```

Массовое удаление Техкарт

Массовое удаление Техкарт по их мета-объектам

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


$apiInstance = new OpenAPI\Client\Api\ProcessingPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$processing_plan = array(new \OpenAPI\Client\Model\ProcessingPlan()); // \OpenAPI\Client\Model\ProcessingPlan[]
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = gzip, deflate, br; // string
$content_type = 'application/json'; // string

try {
    $result = $apiInstance->deleteProcessingPlansBatch($processing_plan, $accept, $accept_encoding, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessingPlansApi->deleteProcessingPlansBatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **processing_plan** | [**\OpenAPI\Client\Model\ProcessingPlan[]**](../Model/ProcessingPlan.md)|  | |
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

## `getProcessingPlanById()`

```php
getProcessingPlanById($id, $expand, $accept, $accept_encoding, $content_type): \OpenAPI\Client\Model\ProcessingPlan
```

Получить Техкарту

Запрос на получение отдельной Техкарты с указанным id

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


$apiInstance = new OpenAPI\Client\Api\ProcessingPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 12a8b923-692c-11e6-8a84-bae500000053; // string | ID сущности
$expand = agent,organization; // string | Замена ссылок объектами с помощью expand
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = gzip, deflate, br; // string
$content_type = 'application/json'; // string

try {
    $result = $apiInstance->getProcessingPlanById($id, $expand, $accept, $accept_encoding, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessingPlansApi->getProcessingPlanById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID сущности | |
| **expand** | **string**| Замена ссылок объектами с помощью expand | [optional] |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |
| **content_type** | **string**|  | [optional] [default to &#39;application/json&#39;] |

### Return type

[**\OpenAPI\Client\Model\ProcessingPlan**](../Model/ProcessingPlan.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProcessingPlanMaterialById()`

```php
getProcessingPlanMaterialById($id, $position_id, $expand, $accept, $accept_encoding): \OpenAPI\Client\Model\ProcessingPlanMaterial
```

Получить материал Техкарты

Запрос на получение отдельного материала Техкарты с указанным id

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


$apiInstance = new OpenAPI\Client\Api\ProcessingPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 12a8b923-692c-11e6-8a84-bae500000053; // string | ID сущности
$position_id = 12a8b923-692c-11e6-8a84-bae500000054; // string | ID позиции
$expand = agent,organization; // string | Замена ссылок объектами с помощью expand
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = gzip, deflate, br; // string

try {
    $result = $apiInstance->getProcessingPlanMaterialById($id, $position_id, $expand, $accept, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessingPlansApi->getProcessingPlanMaterialById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID сущности | |
| **position_id** | **string**| ID позиции | |
| **expand** | **string**| Замена ссылок объектами с помощью expand | [optional] |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |

### Return type

[**\OpenAPI\Client\Model\ProcessingPlanMaterial**](../Model/ProcessingPlanMaterial.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProcessingPlanMaterials()`

```php
getProcessingPlanMaterials($id, $limit, $offset, $expand, $accept, $accept_encoding): \OpenAPI\Client\Model\ProcessingPlanMaterialList
```

Получить материалы Техкарты

Запрос на получение списка всех материалов данной Техкарты

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


$apiInstance = new OpenAPI\Client\Api\ProcessingPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 12a8b923-692c-11e6-8a84-bae500000053; // string | ID сущности
$limit = 1000; // int | Максимальное количество элементов в выданном списке (максимум 1000)
$offset = 0; // int | Отступ в выданном списке
$expand = agent,organization; // string | Замена ссылок объектами с помощью expand
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = gzip, deflate, br; // string

try {
    $result = $apiInstance->getProcessingPlanMaterials($id, $limit, $offset, $expand, $accept, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessingPlansApi->getProcessingPlanMaterials: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID сущности | |
| **limit** | **int**| Максимальное количество элементов в выданном списке (максимум 1000) | [optional] [default to 1000] |
| **offset** | **int**| Отступ в выданном списке | [optional] [default to 0] |
| **expand** | **string**| Замена ссылок объектами с помощью expand | [optional] |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |

### Return type

[**\OpenAPI\Client\Model\ProcessingPlanMaterialList**](../Model/ProcessingPlanMaterialList.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProcessingPlanMetadata()`

```php
getProcessingPlanMetadata($expand, $accept, $accept_encoding): \OpenAPI\Client\Model\Metadata
```

Метаданные Складов

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


$apiInstance = new OpenAPI\Client\Api\ProcessingPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$expand = agent,organization; // string | Замена ссылок объектами с помощью expand
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = gzip, deflate, br; // string

try {
    $result = $apiInstance->getProcessingPlanMetadata($expand, $accept, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessingPlansApi->getProcessingPlanMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **expand** | **string**| Замена ссылок объектами с помощью expand | [optional] |
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

## `getProcessingPlanMetadataAttribute()`

```php
getProcessingPlanMetadataAttribute($offset, $limit, $accept, $accept_encoding, $content_type): \OpenAPI\Client\Model\AttributeMetaInfoList
```

Доп. поля ProcessingPlan

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


$apiInstance = new OpenAPI\Client\Api\ProcessingPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 0; // int | Отступ в выданном списке
$limit = 1000; // int | Максимальное количество элементов в выданном списке (максимум 1000)
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = gzip, deflate, br; // string
$content_type = 'application/json'; // string

try {
    $result = $apiInstance->getProcessingPlanMetadataAttribute($offset, $limit, $accept, $accept_encoding, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessingPlansApi->getProcessingPlanMetadataAttribute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**| Отступ в выданном списке | [optional] [default to 0] |
| **limit** | **int**| Максимальное количество элементов в выданном списке (максимум 1000) | [optional] [default to 1000] |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |
| **content_type** | **string**|  | [optional] [default to &#39;application/json&#39;] |

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

## `getProcessingPlanMetadataAttributeById()`

```php
getProcessingPlanMetadataAttributeById($id, $accept, $accept_encoding): \OpenAPI\Client\Model\AttributeMetaInfoList
```

Отдельное доп. поле Техкарты

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


$apiInstance = new OpenAPI\Client\Api\ProcessingPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 12a8b923-692c-11e6-8a84-bae500000053; // string | ID сущности
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = gzip, deflate, br; // string

try {
    $result = $apiInstance->getProcessingPlanMetadataAttributeById($id, $accept, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessingPlansApi->getProcessingPlanMetadataAttributeById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID сущности | |
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

## `getProcessingPlanProductById()`

```php
getProcessingPlanProductById($id, $position_id, $expand, $accept, $accept_encoding): \OpenAPI\Client\Model\ProcessingPlanProduct[]
```

Получить продукт Техкарты

Запрос на получение отдельного продукта Техкарты с указанным id

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


$apiInstance = new OpenAPI\Client\Api\ProcessingPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 12a8b923-692c-11e6-8a84-bae500000053; // string | ID сущности
$position_id = 12a8b923-692c-11e6-8a84-bae500000054; // string | ID позиции
$expand = agent,organization; // string | Замена ссылок объектами с помощью expand
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = gzip, deflate, br; // string

try {
    $result = $apiInstance->getProcessingPlanProductById($id, $position_id, $expand, $accept, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessingPlansApi->getProcessingPlanProductById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID сущности | |
| **position_id** | **string**| ID позиции | |
| **expand** | **string**| Замена ссылок объектами с помощью expand | [optional] |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |

### Return type

[**\OpenAPI\Client\Model\ProcessingPlanProduct[]**](../Model/ProcessingPlanProduct.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProcessingPlanProducts()`

```php
getProcessingPlanProducts($id, $limit, $offset, $expand, $accept, $accept_encoding): \OpenAPI\Client\Model\ProcessingPlanProductList
```

Получить продукты Техкарты

Запрос на получение списка всех продуктов данной Техкарты

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


$apiInstance = new OpenAPI\Client\Api\ProcessingPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 12a8b923-692c-11e6-8a84-bae500000053; // string | ID сущности
$limit = 1000; // int | Максимальное количество элементов в выданном списке (максимум 1000)
$offset = 0; // int | Отступ в выданном списке
$expand = agent,organization; // string | Замена ссылок объектами с помощью expand
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = gzip, deflate, br; // string

try {
    $result = $apiInstance->getProcessingPlanProducts($id, $limit, $offset, $expand, $accept, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessingPlansApi->getProcessingPlanProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID сущности | |
| **limit** | **int**| Максимальное количество элементов в выданном списке (максимум 1000) | [optional] [default to 1000] |
| **offset** | **int**| Отступ в выданном списке | [optional] [default to 0] |
| **expand** | **string**| Замена ссылок объектами с помощью expand | [optional] |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |

### Return type

[**\OpenAPI\Client\Model\ProcessingPlanProductList**](../Model/ProcessingPlanProductList.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProcessingPlanStageById()`

```php
getProcessingPlanStageById($id, $position_id, $expand, $accept, $accept_encoding): \OpenAPI\Client\Model\ProcessingPlanStage
```

Получить отдельный этап Техкарты

Запрос на получение отдельного этапа Техкарты с указанным id

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


$apiInstance = new OpenAPI\Client\Api\ProcessingPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 12a8b923-692c-11e6-8a84-bae500000053; // string | ID сущности
$position_id = 12a8b923-692c-11e6-8a84-bae500000054; // string | ID позиции
$expand = agent,organization; // string | Замена ссылок объектами с помощью expand
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = gzip, deflate, br; // string

try {
    $result = $apiInstance->getProcessingPlanStageById($id, $position_id, $expand, $accept, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessingPlansApi->getProcessingPlanStageById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID сущности | |
| **position_id** | **string**| ID позиции | |
| **expand** | **string**| Замена ссылок объектами с помощью expand | [optional] |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |

### Return type

[**\OpenAPI\Client\Model\ProcessingPlanStage**](../Model/ProcessingPlanStage.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProcessingPlanStages()`

```php
getProcessingPlanStages($id, $limit, $offset, $expand, $accept, $accept_encoding): \OpenAPI\Client\Model\ProcessingPlanStageList
```

Получить этапы Техкарты

Запрос на получение списка всех этапов данной Техкарты

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


$apiInstance = new OpenAPI\Client\Api\ProcessingPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 12a8b923-692c-11e6-8a84-bae500000053; // string | ID сущности
$limit = 1000; // int | Максимальное количество элементов в выданном списке (максимум 1000)
$offset = 0; // int | Отступ в выданном списке
$expand = agent,organization; // string | Замена ссылок объектами с помощью expand
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = gzip, deflate, br; // string

try {
    $result = $apiInstance->getProcessingPlanStages($id, $limit, $offset, $expand, $accept, $accept_encoding);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessingPlansApi->getProcessingPlanStages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID сущности | |
| **limit** | **int**| Максимальное количество элементов в выданном списке (максимум 1000) | [optional] [default to 1000] |
| **offset** | **int**| Отступ в выданном списке | [optional] [default to 0] |
| **expand** | **string**| Замена ссылок объектами с помощью expand | [optional] |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |

### Return type

[**\OpenAPI\Client\Model\ProcessingPlanStageList**](../Model/ProcessingPlanStageList.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProcessingPlans()`

```php
getProcessingPlans($limit, $offset, $search, $filter, $expand, $order, $accept, $accept_encoding, $content_type): \OpenAPI\Client\Model\ProcessingPlanList
```

Получить список Техкарт

Запрос всех Техкарт на данной учетной записи

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


$apiInstance = new OpenAPI\Client\Api\ProcessingPlansApi(
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
$content_type = 'application/json'; // string

try {
    $result = $apiInstance->getProcessingPlans($limit, $offset, $search, $filter, $expand, $order, $accept, $accept_encoding, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessingPlansApi->getProcessingPlans: ', $e->getMessage(), PHP_EOL;
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
| **content_type** | **string**|  | [optional] [default to &#39;application/json&#39;] |

### Return type

[**\OpenAPI\Client\Model\ProcessingPlanList**](../Model/ProcessingPlanList.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProcessingPlan()`

```php
updateProcessingPlan($id, $processing_plan, $expand, $accept, $accept_encoding, $content_type): \OpenAPI\Client\Model\ProcessingPlan
```

Изменить Техкарту

Запрос на обновление Техкарты с указанным id

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


$apiInstance = new OpenAPI\Client\Api\ProcessingPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 12a8b923-692c-11e6-8a84-bae500000053; // string | ID сущности
$processing_plan = new \OpenAPI\Client\Model\ProcessingPlan(); // \OpenAPI\Client\Model\ProcessingPlan
$expand = agent,organization; // string | Замена ссылок объектами с помощью expand
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = gzip, deflate, br; // string
$content_type = 'application/json'; // string

try {
    $result = $apiInstance->updateProcessingPlan($id, $processing_plan, $expand, $accept, $accept_encoding, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessingPlansApi->updateProcessingPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID сущности | |
| **processing_plan** | [**\OpenAPI\Client\Model\ProcessingPlan**](../Model/ProcessingPlan.md)|  | |
| **expand** | **string**| Замена ссылок объектами с помощью expand | [optional] |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |
| **content_type** | **string**|  | [optional] [default to &#39;application/json&#39;] |

### Return type

[**\OpenAPI\Client\Model\ProcessingPlan**](../Model/ProcessingPlan.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProcessingPlanMaterial()`

```php
updateProcessingPlanMaterial($id, $position_id, $processing_plan_material, $expand, $accept, $accept_encoding, $content_type): \OpenAPI\Client\Model\ProcessingPlanMaterial[]
```

Изменить материал Техкарты

Запрос на обновление отдельного материала Техкарты

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


$apiInstance = new OpenAPI\Client\Api\ProcessingPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 12a8b923-692c-11e6-8a84-bae500000053; // string | ID сущности
$position_id = 12a8b923-692c-11e6-8a84-bae500000054; // string | ID позиции
$processing_plan_material = new \OpenAPI\Client\Model\ProcessingPlanMaterial(); // \OpenAPI\Client\Model\ProcessingPlanMaterial
$expand = agent,organization; // string | Замена ссылок объектами с помощью expand
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = gzip, deflate, br; // string
$content_type = 'application/json'; // string

try {
    $result = $apiInstance->updateProcessingPlanMaterial($id, $position_id, $processing_plan_material, $expand, $accept, $accept_encoding, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessingPlansApi->updateProcessingPlanMaterial: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID сущности | |
| **position_id** | **string**| ID позиции | |
| **processing_plan_material** | [**\OpenAPI\Client\Model\ProcessingPlanMaterial**](../Model/ProcessingPlanMaterial.md)|  | |
| **expand** | **string**| Замена ссылок объектами с помощью expand | [optional] |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |
| **content_type** | **string**|  | [optional] [default to &#39;application/json&#39;] |

### Return type

[**\OpenAPI\Client\Model\ProcessingPlanMaterial[]**](../Model/ProcessingPlanMaterial.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProcessingPlanMetadataAttributeById()`

```php
updateProcessingPlanMetadataAttributeById($id, $attribute_meta_info, $accept, $accept_encoding, $content_type): \OpenAPI\Client\Model\AttributeMetaInfo
```

Обновить отдельное доп. поле ProcessingPlan

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


$apiInstance = new OpenAPI\Client\Api\ProcessingPlansApi(
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
    $result = $apiInstance->updateProcessingPlanMetadataAttributeById($id, $attribute_meta_info, $accept, $accept_encoding, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessingPlansApi->updateProcessingPlanMetadataAttributeById: ', $e->getMessage(), PHP_EOL;
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

## `updateProcessingPlanProduct()`

```php
updateProcessingPlanProduct($id, $position_id, $processing_plan_product, $expand, $accept, $accept_encoding, $content_type): \OpenAPI\Client\Model\ProcessingPlanProduct[]
```

Изменить продукт Техкарты

Запрос на обновление отдельного продукта Техкарты

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


$apiInstance = new OpenAPI\Client\Api\ProcessingPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 12a8b923-692c-11e6-8a84-bae500000053; // string | ID сущности
$position_id = 12a8b923-692c-11e6-8a84-bae500000054; // string | ID позиции
$processing_plan_product = new \OpenAPI\Client\Model\ProcessingPlanProduct(); // \OpenAPI\Client\Model\ProcessingPlanProduct
$expand = agent,organization; // string | Замена ссылок объектами с помощью expand
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = gzip, deflate, br; // string
$content_type = 'application/json'; // string

try {
    $result = $apiInstance->updateProcessingPlanProduct($id, $position_id, $processing_plan_product, $expand, $accept, $accept_encoding, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessingPlansApi->updateProcessingPlanProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID сущности | |
| **position_id** | **string**| ID позиции | |
| **processing_plan_product** | [**\OpenAPI\Client\Model\ProcessingPlanProduct**](../Model/ProcessingPlanProduct.md)|  | |
| **expand** | **string**| Замена ссылок объектами с помощью expand | [optional] |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |
| **content_type** | **string**|  | [optional] [default to &#39;application/json&#39;] |

### Return type

[**\OpenAPI\Client\Model\ProcessingPlanProduct[]**](../Model/ProcessingPlanProduct.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProcessingPlanStage()`

```php
updateProcessingPlanStage($id, $position_id, $processing_plan_stage, $expand, $accept, $accept_encoding, $content_type): \OpenAPI\Client\Model\ProcessingPlanStage
```

Изменить отдельный этап Техкарты

Запрос на обновление отдельного этапа Техкарты

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


$apiInstance = new OpenAPI\Client\Api\ProcessingPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 12a8b923-692c-11e6-8a84-bae500000053; // string | ID сущности
$position_id = 12a8b923-692c-11e6-8a84-bae500000054; // string | ID позиции
$processing_plan_stage = new \OpenAPI\Client\Model\ProcessingPlanStage(); // \OpenAPI\Client\Model\ProcessingPlanStage
$expand = agent,organization; // string | Замена ссылок объектами с помощью expand
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = gzip, deflate, br; // string
$content_type = 'application/json'; // string

try {
    $result = $apiInstance->updateProcessingPlanStage($id, $position_id, $processing_plan_stage, $expand, $accept, $accept_encoding, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessingPlansApi->updateProcessingPlanStage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID сущности | |
| **position_id** | **string**| ID позиции | |
| **processing_plan_stage** | [**\OpenAPI\Client\Model\ProcessingPlanStage**](../Model/ProcessingPlanStage.md)|  | |
| **expand** | **string**| Замена ссылок объектами с помощью expand | [optional] |
| **accept** | **string**|  | [optional] [default to &#39;application/json;charset&#x3D;utf-8&#39;] |
| **accept_encoding** | **string**|  | [optional] [default to &#39;gzip, deflate, br&#39;] |
| **content_type** | **string**|  | [optional] [default to &#39;application/json&#39;] |

### Return type

[**\OpenAPI\Client\Model\ProcessingPlanStage**](../Model/ProcessingPlanStage.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/html;charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
