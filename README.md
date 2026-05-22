# OpenAPIClient-php

API для манипуляции с сущностями и создания отчетов в онлайн-сервисе МойСклад.

## Аутентификация

МойСклад поддерживает аутентификацию по протоколу Basic Auth и с использованием токена доступа:
- Basic Auth: заголовок `Authorization` со значением пары `логин:пароль`, закодированным в Base64
- Bearer Token: заголовок `Authorization` со значением `Bearer <Access-Token>`

## Ограничения

- Не более 45 запросов за 3 секундный период от аккаунта
- Не более 5 параллельных запросов от одного пользователя  
- Не более 20 параллельных запросов от аккаунта
- Не более 20 Мб данных в одном запросе
- Максимум 1000 элементов в массиве
- Обязательное использование сжатия gzip



## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AssortmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$assortment = array(new \OpenAPI\Client\Model\Assortment()); // \OpenAPI\Client\Model\Assortment[]
$accept = 'application/json;charset=utf-8'; // string
$accept_encoding = gzip, deflate, br; // string
$content_type = 'application/json'; // string

try {
    $result = $apiInstance->deleteAssortmentPositionsBatch($assortment, $accept, $accept_encoding, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssortmentApi->deleteAssortmentPositionsBatch: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.moysklad.ru/api/remap/1.2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AssortmentApi* | [**deleteAssortmentPositionsBatch**](docs/Api/AssortmentApi.md#deleteassortmentpositionsbatch) | **POST** /entity/assortment/delete | Удалить позиции ассортимента
*AssortmentApi* | [**getAssortment**](docs/Api/AssortmentApi.md#getassortment) | **GET** /entity/assortment | Получить список ассортимента
*AssortmentApi* | [**getAssortmentSettings**](docs/Api/AssortmentApi.md#getassortmentsettings) | **GET** /entity/assortment/settings | Получить настройки ассортимента
*AssortmentApi* | [**updateAssortmentSettings**](docs/Api/AssortmentApi.md#updateassortmentsettings) | **PUT** /entity/assortment/settings | Изменить настройки ассортимента
*BonusProgramsApi* | [**createBonusProgram**](docs/Api/BonusProgramsApi.md#createbonusprogram) | **POST** /entity/bonusprogram | Создать бонусную программу
*BonusProgramsApi* | [**deleteBonusProgram**](docs/Api/BonusProgramsApi.md#deletebonusprogram) | **DELETE** /entity/bonusprogram/{id} | Удалить бонусную программу
*BonusProgramsApi* | [**deleteBonusProgramsBatch**](docs/Api/BonusProgramsApi.md#deletebonusprogramsbatch) | **POST** /entity/bonusprogram/delete | Удалить бонусные программы
*BonusProgramsApi* | [**getBonusProgramById**](docs/Api/BonusProgramsApi.md#getbonusprogrambyid) | **GET** /entity/bonusprogram/{id} | Получить бонусную программу по ID
*BonusProgramsApi* | [**getBonusPrograms**](docs/Api/BonusProgramsApi.md#getbonusprograms) | **GET** /entity/bonusprogram | Получить список бонусных программ
*BonusProgramsApi* | [**updateBonusProgram**](docs/Api/BonusProgramsApi.md#updatebonusprogram) | **PUT** /entity/bonusprogram/{id} | Изменить бонусную программу
*BonusTransactionsApi* | [**createBonusTransaction**](docs/Api/BonusTransactionsApi.md#createbonustransaction) | **POST** /entity/bonustransaction | Создать бонусную операцию
*BonusTransactionsApi* | [**deleteBonusTransaction**](docs/Api/BonusTransactionsApi.md#deletebonustransaction) | **DELETE** /entity/bonustransaction/{id} | Удалить бонусную операцию
*BonusTransactionsApi* | [**deleteBonusTransactionsBatch**](docs/Api/BonusTransactionsApi.md#deletebonustransactionsbatch) | **POST** /entity/bonustransaction/delete | Удалить бонусные операции
*BonusTransactionsApi* | [**getBonusTransactionById**](docs/Api/BonusTransactionsApi.md#getbonustransactionbyid) | **GET** /entity/bonustransaction/{id} | Получить бонусную операцию по ID
*BonusTransactionsApi* | [**getBonusTransactions**](docs/Api/BonusTransactionsApi.md#getbonustransactions) | **GET** /entity/bonustransaction | Получить список бонусных операций
*BonusTransactionsApi* | [**updateBonusTransaction**](docs/Api/BonusTransactionsApi.md#updatebonustransaction) | **PUT** /entity/bonustransaction/{id} | Изменить бонусную операцию
*BundlesApi* | [**createBundle**](docs/Api/BundlesApi.md#createbundle) | **POST** /entity/bundle | Создать Комплект
*BundlesApi* | [**createBundleComponents**](docs/Api/BundlesApi.md#createbundlecomponents) | **POST** /entity/bundle/{id}/components | Добавить компонент Комплекта
*BundlesApi* | [**createBundlesBatch**](docs/Api/BundlesApi.md#createbundlesbatch) | **POST** /entity/bundle/batch | Массовое создание и обновление Комплектов
*BundlesApi* | [**deleteBundle**](docs/Api/BundlesApi.md#deletebundle) | **DELETE** /entity/bundle/{id} | Удалить Комплект
*BundlesApi* | [**deleteBundleComponent**](docs/Api/BundlesApi.md#deletebundlecomponent) | **DELETE** /entity/bundle/{id}/components/{componentId} | Удалить компонент
*BundlesApi* | [**deleteBundleComponentsBatch**](docs/Api/BundlesApi.md#deletebundlecomponentsbatch) | **POST** /entity/bundle/{id}/components/delete | Массовое удаление компонентов Комплекта
*BundlesApi* | [**deleteBundlesBatch**](docs/Api/BundlesApi.md#deletebundlesbatch) | **POST** /entity/bundle/delete | Массовое удаление Комплектов
*BundlesApi* | [**getBundleById**](docs/Api/BundlesApi.md#getbundlebyid) | **GET** /entity/bundle/{id} | Получить Комплект
*BundlesApi* | [**getBundleComponentById**](docs/Api/BundlesApi.md#getbundlecomponentbyid) | **GET** /entity/bundle/{id}/components/{componentId} | Получить компонент
*BundlesApi* | [**getBundleComponents**](docs/Api/BundlesApi.md#getbundlecomponents) | **GET** /entity/bundle/{id}/components | Получить компоненты Комплекта
*BundlesApi* | [**getBundles**](docs/Api/BundlesApi.md#getbundles) | **GET** /entity/bundle | Получить список комплектов
*BundlesApi* | [**updateBundle**](docs/Api/BundlesApi.md#updatebundle) | **PUT** /entity/bundle/{id} | Изменить Комплект
*BundlesApi* | [**updateBundleComponent**](docs/Api/BundlesApi.md#updatebundlecomponent) | **PUT** /entity/bundle/{id}/components/{componentId} | Изменить компонент
*CashInsApi* | [**createCashIn**](docs/Api/CashInsApi.md#createcashin) | **POST** /entity/cashin | Создать CashIn
*CashInsApi* | [**createCashInBatch**](docs/Api/CashInsApi.md#createcashinbatch) | **POST** /entity/cashin/batch | Массовое создание и обновление CashIn
*CashInsApi* | [**createCashInMetadataAttribute**](docs/Api/CashInsApi.md#createcashinmetadataattribute) | **POST** /entity/cashin/metadata/attributes | Создать доп. поле CashIn
*CashInsApi* | [**createCashInMetadataState**](docs/Api/CashInsApi.md#createcashinmetadatastate) | **POST** /entity/cashin/metadata/states | Создать статус CashIn
*CashInsApi* | [**deleteCashIn**](docs/Api/CashInsApi.md#deletecashin) | **DELETE** /entity/cashin/{id} | Удалить CashIn
*CashInsApi* | [**deleteCashInBatch**](docs/Api/CashInsApi.md#deletecashinbatch) | **POST** /entity/cashin/delete | Массовое удаление CashIn
*CashInsApi* | [**deleteCashInMetadataAttributeById**](docs/Api/CashInsApi.md#deletecashinmetadataattributebyid) | **DELETE** /entity/cashin/metadata/attributes/{id} | Удалить отдельное доп. поле CashIn
*CashInsApi* | [**deleteCashInMetadataStateById**](docs/Api/CashInsApi.md#deletecashinmetadatastatebyid) | **DELETE** /entity/cashin/metadata/states/{id} | Удалить отдельный статус CashIn
*CashInsApi* | [**getCashInById**](docs/Api/CashInsApi.md#getcashinbyid) | **GET** /entity/cashin/{id} | Получить CashIn
*CashInsApi* | [**getCashInList**](docs/Api/CashInsApi.md#getcashinlist) | **GET** /entity/cashin | Получить список CashIn
*CashInsApi* | [**getCashInMetadata**](docs/Api/CashInsApi.md#getcashinmetadata) | **GET** /entity/cashin/metadata | Метаданные CashIn
*CashInsApi* | [**getCashInMetadataAttribute**](docs/Api/CashInsApi.md#getcashinmetadataattribute) | **GET** /entity/cashin/metadata/attributes | Доп. поля CashIn
*CashInsApi* | [**getCashInMetadataAttributeById**](docs/Api/CashInsApi.md#getcashinmetadataattributebyid) | **GET** /entity/cashin/metadata/attributes/{id} | Отдельное доп. поле CashIn
*CashInsApi* | [**getCashInMetadataStateById**](docs/Api/CashInsApi.md#getcashinmetadatastatebyid) | **GET** /entity/cashin/metadata/states/{id} | Отдельный статус CashIn
*CashInsApi* | [**getCashInTemplate**](docs/Api/CashInsApi.md#getcashintemplate) | **PUT** /entity/cashin/new | Шаблон CashIns
*CashInsApi* | [**updateCashIn**](docs/Api/CashInsApi.md#updatecashin) | **PUT** /entity/cashin/{id} | Изменить CashIn
*CashInsApi* | [**updateCashInMetadataAttributeById**](docs/Api/CashInsApi.md#updatecashinmetadataattributebyid) | **PUT** /entity/cashin/metadata/attributes/{id} | Обновить отдельное доп. поле CashIn
*CashInsApi* | [**updateCashInMetadataStateById**](docs/Api/CashInsApi.md#updatecashinmetadatastatebyid) | **PUT** /entity/cashin/metadata/states/{id} | Обновить отдельный статус CashIn
*CashOutsApi* | [**createCashOut**](docs/Api/CashOutsApi.md#createcashout) | **POST** /entity/cashout | Создать CashOut
*CashOutsApi* | [**createCashOutBatch**](docs/Api/CashOutsApi.md#createcashoutbatch) | **POST** /entity/cashout/batch | Массовое создание и обновление CashOut
*CashOutsApi* | [**createCashOutMetadataAttribute**](docs/Api/CashOutsApi.md#createcashoutmetadataattribute) | **POST** /entity/cashout/metadata/attributes | Создать доп. поле CashOut
*CashOutsApi* | [**createCashOutMetadataState**](docs/Api/CashOutsApi.md#createcashoutmetadatastate) | **POST** /entity/cashout/metadata/states | Создать статус CashOut
*CashOutsApi* | [**deleteCashOut**](docs/Api/CashOutsApi.md#deletecashout) | **DELETE** /entity/cashout/{id} | Удалить CashOut
*CashOutsApi* | [**deleteCashOutBatch**](docs/Api/CashOutsApi.md#deletecashoutbatch) | **POST** /entity/cashout/delete | Массовое удаление CashOut
*CashOutsApi* | [**deleteCashOutMetadataAttributeById**](docs/Api/CashOutsApi.md#deletecashoutmetadataattributebyid) | **DELETE** /entity/cashout/metadata/attributes/{id} | Удалить отдельное доп. поле CashOut
*CashOutsApi* | [**deleteCashOutMetadataStateById**](docs/Api/CashOutsApi.md#deletecashoutmetadatastatebyid) | **DELETE** /entity/cashout/metadata/states/{id} | Удалить отдельный статус CashOut
*CashOutsApi* | [**getCashOutById**](docs/Api/CashOutsApi.md#getcashoutbyid) | **GET** /entity/cashout/{id} | Получить CashOut
*CashOutsApi* | [**getCashOutList**](docs/Api/CashOutsApi.md#getcashoutlist) | **GET** /entity/cashout | Получить список CashOut
*CashOutsApi* | [**getCashOutMetadata**](docs/Api/CashOutsApi.md#getcashoutmetadata) | **GET** /entity/cashout/metadata | Метаданные CashOut
*CashOutsApi* | [**getCashOutMetadataAttribute**](docs/Api/CashOutsApi.md#getcashoutmetadataattribute) | **GET** /entity/cashout/metadata/attributes | Доп. поля CashOut
*CashOutsApi* | [**getCashOutMetadataAttributeById**](docs/Api/CashOutsApi.md#getcashoutmetadataattributebyid) | **GET** /entity/cashout/metadata/attributes/{id} | Отдельное доп. поле CashOut
*CashOutsApi* | [**getCashOutMetadataStateById**](docs/Api/CashOutsApi.md#getcashoutmetadatastatebyid) | **GET** /entity/cashout/metadata/states/{id} | Отдельный статус CashOut
*CashOutsApi* | [**getCashOutTemplate**](docs/Api/CashOutsApi.md#getcashouttemplate) | **PUT** /entity/cashout/new | Шаблон CashOut
*CashOutsApi* | [**updateCashOut**](docs/Api/CashOutsApi.md#updatecashout) | **PUT** /entity/cashout/{id} | Изменить CashOut
*CashOutsApi* | [**updateCashOutMetadataAttributeById**](docs/Api/CashOutsApi.md#updatecashoutmetadataattributebyid) | **PUT** /entity/cashout/metadata/attributes/{id} | Обновить отдельное доп. поле CashOut
*CashOutsApi* | [**updateCashOutMetadataStateById**](docs/Api/CashOutsApi.md#updatecashoutmetadatastatebyid) | **PUT** /entity/cashout/metadata/states/{id} | Обновить отдельный статус CashOut
*CashiersApi* | [**getCashierById**](docs/Api/CashiersApi.md#getcashierbyid) | **GET** /entity/retailstore/{retailStoreId}/cashiers/{id} | Получить Кассира
*CashiersApi* | [**getCashiers**](docs/Api/CashiersApi.md#getcashiers) | **GET** /entity/retailstore/{retailStoreId}/cashiers | Получить Кассиров
*CommissionReportInsApi* | [**createCommissionReportIn**](docs/Api/CommissionReportInsApi.md#createcommissionreportin) | **POST** /entity/commissionreportin | Создать CommissionReportIn
*CommissionReportInsApi* | [**createCommissionReportInBatch**](docs/Api/CommissionReportInsApi.md#createcommissionreportinbatch) | **POST** /entity/commissionreportin/batch | Массовое создание и обновление CommissionReportIn
*CommissionReportInsApi* | [**createCommissionReportInMetadataAttribute**](docs/Api/CommissionReportInsApi.md#createcommissionreportinmetadataattribute) | **POST** /entity/commissionreportin/metadata/attributes | Создать доп. поле CommissionReportIn
*CommissionReportInsApi* | [**createCommissionReportInMetadataState**](docs/Api/CommissionReportInsApi.md#createcommissionreportinmetadatastate) | **POST** /entity/commissionreportin/metadata/states | Создать статус CommissionReportIn
*CommissionReportInsApi* | [**createCommissionReportInPositions**](docs/Api/CommissionReportInsApi.md#createcommissionreportinpositions) | **POST** /entity/commissionreportin/{id}/positions | Создать позиции CommissionReportIn
*CommissionReportInsApi* | [**createCommissionReportInReturnedPositions**](docs/Api/CommissionReportInsApi.md#createcommissionreportinreturnedpositions) | **POST** /entity/commissionreportin/{id}/returntocommissionerpositions | Создать позиции возврата на склад комиссионера
*CommissionReportInsApi* | [**deleteCommissionReportIn**](docs/Api/CommissionReportInsApi.md#deletecommissionreportin) | **DELETE** /entity/commissionreportin/{id} | Удалить CommissionReportIn
*CommissionReportInsApi* | [**deleteCommissionReportInBatch**](docs/Api/CommissionReportInsApi.md#deletecommissionreportinbatch) | **POST** /entity/commissionreportin/delete | Массовое удаление CommissionReportIn
*CommissionReportInsApi* | [**deleteCommissionReportInMetadataAttributeById**](docs/Api/CommissionReportInsApi.md#deletecommissionreportinmetadataattributebyid) | **DELETE** /entity/commissionreportin/metadata/attributes/{id} | Удалить отдельное доп. поле CommissionReportIn
*CommissionReportInsApi* | [**deleteCommissionReportInMetadataStateById**](docs/Api/CommissionReportInsApi.md#deletecommissionreportinmetadatastatebyid) | **DELETE** /entity/commissionreportin/metadata/states/{id} | Удалить отдельный статус CommissionReportIn
*CommissionReportInsApi* | [**deleteCommissionReportInPosition**](docs/Api/CommissionReportInsApi.md#deletecommissionreportinposition) | **DELETE** /entity/commissionreportin/{id}/positions/{positionId} | Удалить позицию CommissionReportIn
*CommissionReportInsApi* | [**deleteCommissionReportInPositionsBatch**](docs/Api/CommissionReportInsApi.md#deletecommissionreportinpositionsbatch) | **POST** /entity/commissionreportin/{id}/positions/delete | Массовое удаление позиций CommissionReportIn
*CommissionReportInsApi* | [**deleteCommissionReportInReturnedPosition**](docs/Api/CommissionReportInsApi.md#deletecommissionreportinreturnedposition) | **DELETE** /entity/commissionreportin/{id}/returntocommissionerpositions/{positionId} | Удалить позицию возврата на склад комиссионера
*CommissionReportInsApi* | [**deleteCommissionReportInReturnedPositionsBatch**](docs/Api/CommissionReportInsApi.md#deletecommissionreportinreturnedpositionsbatch) | **POST** /entity/commissionreportin/{id}/returntocommissionerpositions/delete | Массовое удаление позиций возврата на склад комиссионера
*CommissionReportInsApi* | [**getCommissionReportInById**](docs/Api/CommissionReportInsApi.md#getcommissionreportinbyid) | **GET** /entity/commissionreportin/{id} | Получить CommissionReportIn по ID
*CommissionReportInsApi* | [**getCommissionReportInList**](docs/Api/CommissionReportInsApi.md#getcommissionreportinlist) | **GET** /entity/commissionreportin | Получить список CommissionReportIn
*CommissionReportInsApi* | [**getCommissionReportInMetadata**](docs/Api/CommissionReportInsApi.md#getcommissionreportinmetadata) | **GET** /entity/commissionreportin/metadata | Метаданные CommissionReportIn
*CommissionReportInsApi* | [**getCommissionReportInMetadataAttribute**](docs/Api/CommissionReportInsApi.md#getcommissionreportinmetadataattribute) | **GET** /entity/commissionreportin/metadata/attributes | Доп. поля CommissionReportIn
*CommissionReportInsApi* | [**getCommissionReportInMetadataAttributeById**](docs/Api/CommissionReportInsApi.md#getcommissionreportinmetadataattributebyid) | **GET** /entity/commissionreportin/metadata/attributes/{id} | Отдельное доп. поле CommissionReportIn
*CommissionReportInsApi* | [**getCommissionReportInMetadataStateById**](docs/Api/CommissionReportInsApi.md#getcommissionreportinmetadatastatebyid) | **GET** /entity/commissionreportin/metadata/states/{id} | Отдельный статус CommissionReportIn
*CommissionReportInsApi* | [**getCommissionReportInPositionById**](docs/Api/CommissionReportInsApi.md#getcommissionreportinpositionbyid) | **GET** /entity/commissionreportin/{id}/positions/{positionId} | Получить позицию CommissionReportIn
*CommissionReportInsApi* | [**getCommissionReportInPositions**](docs/Api/CommissionReportInsApi.md#getcommissionreportinpositions) | **GET** /entity/commissionreportin/{id}/positions | Получить позиции CommissionReportIn
*CommissionReportInsApi* | [**getCommissionReportInReturnedPositionById**](docs/Api/CommissionReportInsApi.md#getcommissionreportinreturnedpositionbyid) | **GET** /entity/commissionreportin/{id}/returntocommissionerpositions/{positionId} | Получить позицию возврата на склад комиссионера
*CommissionReportInsApi* | [**getCommissionReportInReturnedPositions**](docs/Api/CommissionReportInsApi.md#getcommissionreportinreturnedpositions) | **GET** /entity/commissionreportin/{id}/returntocommissionerpositions | Получить позиции возврата на склад комиссионера
*CommissionReportInsApi* | [**updateCommissionReportIn**](docs/Api/CommissionReportInsApi.md#updatecommissionreportin) | **PUT** /entity/commissionreportin/{id} | Изменить CommissionReportIn
*CommissionReportInsApi* | [**updateCommissionReportInMetadataAttributeById**](docs/Api/CommissionReportInsApi.md#updatecommissionreportinmetadataattributebyid) | **PUT** /entity/commissionreportin/metadata/attributes/{id} | Обновить отдельное доп. поле CommissionReportIn
*CommissionReportInsApi* | [**updateCommissionReportInMetadataStateById**](docs/Api/CommissionReportInsApi.md#updatecommissionreportinmetadatastatebyid) | **PUT** /entity/commissionreportin/metadata/states/{id} | Обновить отдельный статус CommissionReportIn
*CommissionReportInsApi* | [**updateCommissionReportInPosition**](docs/Api/CommissionReportInsApi.md#updatecommissionreportinposition) | **PUT** /entity/commissionreportin/{id}/positions/{positionId} | Изменить позицию CommissionReportIn
*CommissionReportInsApi* | [**updateCommissionReportInReturnedPosition**](docs/Api/CommissionReportInsApi.md#updatecommissionreportinreturnedposition) | **PUT** /entity/commissionreportin/{id}/returntocommissionerpositions/{positionId} | Изменить позицию возврата на склад комиссионера
*CompanySettingsApi* | [**getCompanySettings**](docs/Api/CompanySettingsApi.md#getcompanysettings) | **GET** /context/companysettings | Получить настройки компании
*CompanySettingsApi* | [**getCompanySettingsMetadata**](docs/Api/CompanySettingsApi.md#getcompanysettingsmetadata) | **GET** /context/companysettings/metadata | Получить метаданные настроек компании
*CompanySettingsApi* | [**updateCompanySettings**](docs/Api/CompanySettingsApi.md#updatecompanysettings) | **PUT** /context/companysettings | Изменить настройки компании
*ConsignmentsApi* | [**createConsignment**](docs/Api/ConsignmentsApi.md#createconsignment) | **POST** /entity/consignment | Создать партию
*ConsignmentsApi* | [**createConsignmentMetadataAttribute**](docs/Api/ConsignmentsApi.md#createconsignmentmetadataattribute) | **POST** /entity/consignment/metadata/attributes | Создать доп. поле партии
*ConsignmentsApi* | [**createConsignmentsBatch**](docs/Api/ConsignmentsApi.md#createconsignmentsbatch) | **POST** /entity/consignment/batch | Создать или изменить партии
*ConsignmentsApi* | [**deleteConsignment**](docs/Api/ConsignmentsApi.md#deleteconsignment) | **DELETE** /entity/consignment/{id} | Удалить партию
*ConsignmentsApi* | [**deleteConsignmentMetadataAttribute**](docs/Api/ConsignmentsApi.md#deleteconsignmentmetadataattribute) | **DELETE** /entity/consignment/metadata/attributes/{id} | Удалить доп. поле партии
*ConsignmentsApi* | [**deleteConsignmentsBatch**](docs/Api/ConsignmentsApi.md#deleteconsignmentsbatch) | **POST** /entity/consignment/delete | Удалить партии
*ConsignmentsApi* | [**getConsignmentById**](docs/Api/ConsignmentsApi.md#getconsignmentbyid) | **GET** /entity/consignment/{id} | Получить партию по ID
*ConsignmentsApi* | [**getConsignmentMetadata**](docs/Api/ConsignmentsApi.md#getconsignmentmetadata) | **GET** /entity/consignment/metadata | Получить метаданные партий
*ConsignmentsApi* | [**getConsignmentMetadataAttributeById**](docs/Api/ConsignmentsApi.md#getconsignmentmetadataattributebyid) | **GET** /entity/consignment/metadata/attributes/{id} | Получить доп. поле партии по ID
*ConsignmentsApi* | [**getConsignmentMetadataAttributes**](docs/Api/ConsignmentsApi.md#getconsignmentmetadataattributes) | **GET** /entity/consignment/metadata/attributes | Получить доп. поля партий
*ConsignmentsApi* | [**getConsignments**](docs/Api/ConsignmentsApi.md#getconsignments) | **GET** /entity/consignment | Получить список партий
*ConsignmentsApi* | [**updateConsignment**](docs/Api/ConsignmentsApi.md#updateconsignment) | **PUT** /entity/consignment/{id} | Обновить партию
*ConsignmentsApi* | [**updateConsignmentMetadataAttribute**](docs/Api/ConsignmentsApi.md#updateconsignmentmetadataattribute) | **PUT** /entity/consignment/metadata/attributes/{id} | Обновить доп. поле партии
*ContractsApi* | [**createContract**](docs/Api/ContractsApi.md#createcontract) | **POST** /entity/contract | Создать договор
*ContractsApi* | [**createContractMetadataAttribute**](docs/Api/ContractsApi.md#createcontractmetadataattribute) | **POST** /entity/contract/metadata/attributes | Создать доп. поле договора
*ContractsApi* | [**createContractsBatch**](docs/Api/ContractsApi.md#createcontractsbatch) | **POST** /entity/contract/batch | Создать или изменить договоры
*ContractsApi* | [**deleteContract**](docs/Api/ContractsApi.md#deletecontract) | **DELETE** /entity/contract/{id} | Удалить договор
*ContractsApi* | [**deleteContractMetadataAttribute**](docs/Api/ContractsApi.md#deletecontractmetadataattribute) | **DELETE** /entity/contract/metadata/attributes/{id} | Удалить доп. поле договора
*ContractsApi* | [**deleteContractMetadataStateById**](docs/Api/ContractsApi.md#deletecontractmetadatastatebyid) | **DELETE** /entity/contract/metadata/states/{id} | Удалить отдельный статус Contract
*ContractsApi* | [**deleteContractsBatch**](docs/Api/ContractsApi.md#deletecontractsbatch) | **POST** /entity/contract/delete | Удалить договоры
*ContractsApi* | [**getContractById**](docs/Api/ContractsApi.md#getcontractbyid) | **GET** /entity/contract/{id} | Получить договор по ID
*ContractsApi* | [**getContractMetadata**](docs/Api/ContractsApi.md#getcontractmetadata) | **GET** /entity/contract/metadata | Получить метаданные договоров
*ContractsApi* | [**getContractMetadataAttributeById**](docs/Api/ContractsApi.md#getcontractmetadataattributebyid) | **GET** /entity/contract/metadata/attributes/{id} | Получить доп. поле договора по ID
*ContractsApi* | [**getContractMetadataAttributes**](docs/Api/ContractsApi.md#getcontractmetadataattributes) | **GET** /entity/contract/metadata/attributes | Получить доп. поля договоров
*ContractsApi* | [**getContractMetadataStateById**](docs/Api/ContractsApi.md#getcontractmetadatastatebyid) | **GET** /entity/contract/metadata/states/{id} | Отдельный статус Contracts
*ContractsApi* | [**getContracts**](docs/Api/ContractsApi.md#getcontracts) | **GET** /entity/contract | Получить список договоров
*ContractsApi* | [**updateContract**](docs/Api/ContractsApi.md#updatecontract) | **PUT** /entity/contract/{id} | Обновить договор
*ContractsApi* | [**updateContractMetadataAttribute**](docs/Api/ContractsApi.md#updatecontractmetadataattribute) | **PUT** /entity/contract/metadata/attributes/{id} | Обновить доп. поле договора
*ContractsApi* | [**updateContractMetadataStateById**](docs/Api/ContractsApi.md#updatecontractmetadatastatebyid) | **PUT** /entity/contract/metadata/states/{id} | Обновить отдельный статус Contract
*CounterpartiesApi* | [**addCounterpartyFiles**](docs/Api/CounterpartiesApi.md#addcounterpartyfiles) | **POST** /entity/counterparty/{id}/files | Добавить файлы к контрагенту
*CounterpartiesApi* | [**createCounterpartiesBatch**](docs/Api/CounterpartiesApi.md#createcounterpartiesbatch) | **POST** /entity/counterparty/batch | Создать или изменить контрагентов
*CounterpartiesApi* | [**createCounterparty**](docs/Api/CounterpartiesApi.md#createcounterparty) | **POST** /entity/counterparty | Создать контрагента
*CounterpartiesApi* | [**createCounterpartyAccount**](docs/Api/CounterpartiesApi.md#createcounterpartyaccount) | **POST** /entity/counterparty/{id}/accounts | Создать счёт контрагента
*CounterpartiesApi* | [**createCounterpartyContactPerson**](docs/Api/CounterpartiesApi.md#createcounterpartycontactperson) | **POST** /entity/counterparty/{id}/contactpersons | Создать контактное лицо контрагента
*CounterpartiesApi* | [**createCounterpartyNote**](docs/Api/CounterpartiesApi.md#createcounterpartynote) | **POST** /entity/counterparty/{id}/notes | Создать событие контрагента
*CounterpartiesApi* | [**deleteCounterpartiesBatch**](docs/Api/CounterpartiesApi.md#deletecounterpartiesbatch) | **POST** /entity/counterparty/delete | Удалить контрагентов
*CounterpartiesApi* | [**deleteCounterparty**](docs/Api/CounterpartiesApi.md#deletecounterparty) | **DELETE** /entity/counterparty/{id} | Удалить контрагента
*CounterpartiesApi* | [**deleteCounterpartyAccount**](docs/Api/CounterpartiesApi.md#deletecounterpartyaccount) | **DELETE** /entity/counterparty/{id}/accounts/{accountId} | Удалить счёт контрагента
*CounterpartiesApi* | [**deleteCounterpartyContactPerson**](docs/Api/CounterpartiesApi.md#deletecounterpartycontactperson) | **DELETE** /entity/counterparty/{id}/contactpersons/{contactPersonId} | Удалить контактное лицо контрагента
*CounterpartiesApi* | [**deleteCounterpartyFile**](docs/Api/CounterpartiesApi.md#deletecounterpartyfile) | **DELETE** /entity/counterparty/{id}/files/{fileId} | Удалить файл контрагента
*CounterpartiesApi* | [**deleteCounterpartyNote**](docs/Api/CounterpartiesApi.md#deletecounterpartynote) | **DELETE** /entity/counterparty/{id}/notes/{noteId} | Удалить событие контрагента
*CounterpartiesApi* | [**getCounterparties**](docs/Api/CounterpartiesApi.md#getcounterparties) | **GET** /entity/counterparty | Получить список контрагентов
*CounterpartiesApi* | [**getCounterpartyAccountById**](docs/Api/CounterpartiesApi.md#getcounterpartyaccountbyid) | **GET** /entity/counterparty/{id}/accounts/{accountId} | Получить счёт контрагента по ID
*CounterpartiesApi* | [**getCounterpartyAccounts**](docs/Api/CounterpartiesApi.md#getcounterpartyaccounts) | **GET** /entity/counterparty/{id}/accounts | Получить счета контрагента
*CounterpartiesApi* | [**getCounterpartyById**](docs/Api/CounterpartiesApi.md#getcounterpartybyid) | **GET** /entity/counterparty/{id} | Получить контрагента по ID
*CounterpartiesApi* | [**getCounterpartyContactPersonById**](docs/Api/CounterpartiesApi.md#getcounterpartycontactpersonbyid) | **GET** /entity/counterparty/{id}/contactpersons/{contactPersonId} | Получить контактное лицо контрагента по ID
*CounterpartiesApi* | [**getCounterpartyContactPersons**](docs/Api/CounterpartiesApi.md#getcounterpartycontactpersons) | **GET** /entity/counterparty/{id}/contactpersons | Получить контактные лица контрагента
*CounterpartiesApi* | [**getCounterpartyFiles**](docs/Api/CounterpartiesApi.md#getcounterpartyfiles) | **GET** /entity/counterparty/{id}/files | Получить файлы контрагента
*CounterpartiesApi* | [**getCounterpartyMetadata**](docs/Api/CounterpartiesApi.md#getcounterpartymetadata) | **GET** /entity/counterparty/metadata | Получить метаданные контрагентов
*CounterpartiesApi* | [**getCounterpartyNoteById**](docs/Api/CounterpartiesApi.md#getcounterpartynotebyid) | **GET** /entity/counterparty/{id}/notes/{noteId} | Получить событие контрагента по ID
*CounterpartiesApi* | [**getCounterpartyNotes**](docs/Api/CounterpartiesApi.md#getcounterpartynotes) | **GET** /entity/counterparty/{id}/notes | Получить события контрагента
*CounterpartiesApi* | [**updateCounterparty**](docs/Api/CounterpartiesApi.md#updatecounterparty) | **PUT** /entity/counterparty/{id} | Обновить контрагента
*CounterpartiesApi* | [**updateCounterpartyAccount**](docs/Api/CounterpartiesApi.md#updatecounterpartyaccount) | **PUT** /entity/counterparty/{id}/accounts/{accountId} | Обновить счёт контрагента
*CounterpartiesApi* | [**updateCounterpartyContactPerson**](docs/Api/CounterpartiesApi.md#updatecounterpartycontactperson) | **PUT** /entity/counterparty/{id}/contactpersons/{contactPersonId} | Обновить контактное лицо контрагента
*CounterpartiesApi* | [**updateCounterpartyNote**](docs/Api/CounterpartiesApi.md#updatecounterpartynote) | **PUT** /entity/counterparty/{id}/notes/{noteId} | Обновить событие контрагента
*CountriesApi* | [**createCountriesBatch**](docs/Api/CountriesApi.md#createcountriesbatch) | **POST** /entity/country/batch | Создать или изменить страны
*CountriesApi* | [**createCountry**](docs/Api/CountriesApi.md#createcountry) | **POST** /entity/country | Создать страну
*CountriesApi* | [**deleteCountriesBatch**](docs/Api/CountriesApi.md#deletecountriesbatch) | **POST** /entity/country/delete | Удалить страны
*CountriesApi* | [**deleteCountry**](docs/Api/CountriesApi.md#deletecountry) | **DELETE** /entity/country/{id} | Удалить страну
*CountriesApi* | [**getCountries**](docs/Api/CountriesApi.md#getcountries) | **GET** /entity/country | Получить список стран
*CountriesApi* | [**getCountryById**](docs/Api/CountriesApi.md#getcountrybyid) | **GET** /entity/country/{id} | Получить страну по id
*CountriesApi* | [**updateCountry**](docs/Api/CountriesApi.md#updatecountry) | **PUT** /entity/country/{id} | Обновить страну
*CurrenciesApi* | [**createCurrenciesBatch**](docs/Api/CurrenciesApi.md#createcurrenciesbatch) | **POST** /entity/currency/batch | Создать или изменить валюту
*CurrenciesApi* | [**createCurrency**](docs/Api/CurrenciesApi.md#createcurrency) | **POST** /entity/currency | Создать валюту
*CurrenciesApi* | [**deleteCurrenciesBatch**](docs/Api/CurrenciesApi.md#deletecurrenciesbatch) | **POST** /entity/currency/delete | Удалить валюту
*CurrenciesApi* | [**deleteCurrency**](docs/Api/CurrenciesApi.md#deletecurrency) | **DELETE** /entity/currency/{id} | Удалить валюту
*CurrenciesApi* | [**getCurrencies**](docs/Api/CurrenciesApi.md#getcurrencies) | **GET** /entity/currency | Получить список валют
*CurrenciesApi* | [**getCurrencyById**](docs/Api/CurrenciesApi.md#getcurrencybyid) | **GET** /entity/currency/{id} | Получить валюту по ID
*CurrenciesApi* | [**updateCurrency**](docs/Api/CurrenciesApi.md#updatecurrency) | **PUT** /entity/currency/{id} | Обновить валюту
*CustomEntitiesApi* | [**createCustomEntity**](docs/Api/CustomEntitiesApi.md#createcustomentity) | **POST** /entity/customentity | Создать пользовательский справочник
*CustomEntitiesApi* | [**createCustomEntityElement**](docs/Api/CustomEntitiesApi.md#createcustomentityelement) | **POST** /entity/customentity/{id} | Создать элемент пользовательского справочника
*CustomEntitiesApi* | [**deleteCustomEntity**](docs/Api/CustomEntitiesApi.md#deletecustomentity) | **DELETE** /entity/customentity/{id} | Удалить пользовательский справочник
*CustomEntitiesApi* | [**deleteCustomEntityElement**](docs/Api/CustomEntitiesApi.md#deletecustomentityelement) | **DELETE** /entity/customentity/{metadataId}/{id} | Удалить элемент пользовательского справочника
*CustomEntitiesApi* | [**getCustomEntityElementById**](docs/Api/CustomEntitiesApi.md#getcustomentityelementbyid) | **GET** /entity/customentity/{metadataId}/{id} | Получить элемент пользовательского справочника
*CustomEntitiesApi* | [**getCustomEntityElements**](docs/Api/CustomEntitiesApi.md#getcustomentityelements) | **GET** /entity/customentity/{id} | Получить элементы пользовательского справочника
*CustomEntitiesApi* | [**getCustomEntityMetadata**](docs/Api/CustomEntitiesApi.md#getcustomentitymetadata) | **GET** /entity/customentity/{id}/metadata | Метаданные пользовательского справочника
*CustomEntitiesApi* | [**updateCustomEntity**](docs/Api/CustomEntitiesApi.md#updatecustomentity) | **PUT** /entity/customentity/{id} | Изменить пользовательский справочник
*CustomEntitiesApi* | [**updateCustomEntityElement**](docs/Api/CustomEntitiesApi.md#updatecustomentityelement) | **PUT** /entity/customentity/{metadataId}/{id} | Изменить элемент пользовательского справочника
*CustomerOrdersApi* | [**createCustomerOrder**](docs/Api/CustomerOrdersApi.md#createcustomerorder) | **POST** /entity/customerorder | Создать CustomerOrders
*CustomerOrdersApi* | [**createCustomerOrderBatch**](docs/Api/CustomerOrdersApi.md#createcustomerorderbatch) | **POST** /entity/customerorder/batch | Массовое создание и обновление CustomerOrders
*CustomerOrdersApi* | [**createCustomerOrderMetadataAttribute**](docs/Api/CustomerOrdersApi.md#createcustomerordermetadataattribute) | **POST** /entity/customerorder/metadata/attributes | Создать Доп. поле CustomerOrder
*CustomerOrdersApi* | [**createCustomerOrderMetadataState**](docs/Api/CustomerOrdersApi.md#createcustomerordermetadatastate) | **POST** /entity/customerorder/metadata/states | Создать статус CustomerOrder
*CustomerOrdersApi* | [**createCustomerOrderNote**](docs/Api/CustomerOrdersApi.md#createcustomerordernote) | **POST** /entity/customerorder/{id}/notes | Добавить Событие Заказа покупателя
*CustomerOrdersApi* | [**createCustomerOrderPositions**](docs/Api/CustomerOrdersApi.md#createcustomerorderpositions) | **POST** /entity/customerorder/{id}/positions | Создать позиции CustomerOrders
*CustomerOrdersApi* | [**deleteCustomerOrder**](docs/Api/CustomerOrdersApi.md#deletecustomerorder) | **DELETE** /entity/customerorder/{id} | Удалить CustomerOrders
*CustomerOrdersApi* | [**deleteCustomerOrderBatch**](docs/Api/CustomerOrdersApi.md#deletecustomerorderbatch) | **POST** /entity/customerorder/delete | Массовое удаление CustomerOrders
*CustomerOrdersApi* | [**deleteCustomerOrderMetadataAttributeById**](docs/Api/CustomerOrdersApi.md#deletecustomerordermetadataattributebyid) | **DELETE** /entity/customerorder/metadata/attributes/{id} | Удалить отдельное доп. поле CustomerOrder
*CustomerOrdersApi* | [**deleteCustomerOrderMetadataStateById**](docs/Api/CustomerOrdersApi.md#deletecustomerordermetadatastatebyid) | **DELETE** /entity/customerorder/metadata/states/{id} | Удалить отдельный статус CustomerOrder
*CustomerOrdersApi* | [**deleteCustomerOrderNote**](docs/Api/CustomerOrdersApi.md#deletecustomerordernote) | **DELETE** /entity/customerorder/{id}/notes/{noteId} | Удалить Событие Заказа покупателя
*CustomerOrdersApi* | [**deleteCustomerOrderPosition**](docs/Api/CustomerOrdersApi.md#deletecustomerorderposition) | **DELETE** /entity/customerorder/{id}/positions/{positionId} | Удалить позицию CustomerOrders
*CustomerOrdersApi* | [**deleteCustomerOrderPositionsBatch**](docs/Api/CustomerOrdersApi.md#deletecustomerorderpositionsbatch) | **POST** /entity/customerorder/{id}/positions/delete | Массовое удаление позиций CustomerOrders
*CustomerOrdersApi* | [**getCustomerOrderById**](docs/Api/CustomerOrdersApi.md#getcustomerorderbyid) | **GET** /entity/customerorder/{id} | Получить CustomerOrders
*CustomerOrdersApi* | [**getCustomerOrderList**](docs/Api/CustomerOrdersApi.md#getcustomerorderlist) | **GET** /entity/customerorder | Получить список CustomerOrders
*CustomerOrdersApi* | [**getCustomerOrderMetadata**](docs/Api/CustomerOrdersApi.md#getcustomerordermetadata) | **GET** /entity/customerorder/metadata | Метаданные CustomerOrders
*CustomerOrdersApi* | [**getCustomerOrderMetadataAttribute**](docs/Api/CustomerOrdersApi.md#getcustomerordermetadataattribute) | **GET** /entity/customerorder/metadata/attributes | Доп. поля CustomerOrder
*CustomerOrdersApi* | [**getCustomerOrderMetadataAttributeById**](docs/Api/CustomerOrdersApi.md#getcustomerordermetadataattributebyid) | **GET** /entity/customerorder/metadata/attributes/{id} | Отдельное доп. поле CustomerOrder
*CustomerOrdersApi* | [**getCustomerOrderMetadataStateById**](docs/Api/CustomerOrdersApi.md#getcustomerordermetadatastatebyid) | **GET** /entity/customerorder/metadata/states/{id} | Отдельный статус CustomerOrder
*CustomerOrdersApi* | [**getCustomerOrderNoteById**](docs/Api/CustomerOrdersApi.md#getcustomerordernotebyid) | **GET** /entity/customerorder/{id}/notes/{noteId} | Получить Событие Заказа покупателя по ID
*CustomerOrdersApi* | [**getCustomerOrderNotes**](docs/Api/CustomerOrdersApi.md#getcustomerordernotes) | **GET** /entity/customerorder/{id}/notes | Получить список Событий Заказа покупателя
*CustomerOrdersApi* | [**getCustomerOrderPositionById**](docs/Api/CustomerOrdersApi.md#getcustomerorderpositionbyid) | **GET** /entity/customerorder/{id}/positions/{positionId} | Получить позицию CustomerOrders
*CustomerOrdersApi* | [**getCustomerOrderPositions**](docs/Api/CustomerOrdersApi.md#getcustomerorderpositions) | **GET** /entity/customerorder/{id}/positions | Получить позиции CustomerOrders
*CustomerOrdersApi* | [**getCustomerOrderTemplate**](docs/Api/CustomerOrdersApi.md#getcustomerordertemplate) | **PUT** /entity/customerorder/new | Шаблон CustomerOrders
*CustomerOrdersApi* | [**updateCustomerOrder**](docs/Api/CustomerOrdersApi.md#updatecustomerorder) | **PUT** /entity/customerorder/{id} | Изменить CustomerOrders
*CustomerOrdersApi* | [**updateCustomerOrderMetadataAttributeById**](docs/Api/CustomerOrdersApi.md#updatecustomerordermetadataattributebyid) | **PUT** /entity/customerorder/metadata/attributes/{id} | Обновить отдельное доп. поле CustomerOrder
*CustomerOrdersApi* | [**updateCustomerOrderMetadataStateById**](docs/Api/CustomerOrdersApi.md#updatecustomerordermetadatastatebyid) | **PUT** /entity/customerorder/metadata/states/{id} | Обновить отдельный статус CustomerOrder
*CustomerOrdersApi* | [**updateCustomerOrderNote**](docs/Api/CustomerOrdersApi.md#updatecustomerordernote) | **PUT** /entity/customerorder/{id}/notes/{noteId} | Обновить Событие Заказа покупателя
*CustomerOrdersApi* | [**updateCustomerOrderPosition**](docs/Api/CustomerOrdersApi.md#updatecustomerorderposition) | **PUT** /entity/customerorder/{id}/positions/{positionId} | Изменить позицию CustomerOrders
*DemandsApi* | [**createDemand**](docs/Api/DemandsApi.md#createdemand) | **POST** /entity/demand | Создать Отгрузку
*DemandsApi* | [**createDemandBatch**](docs/Api/DemandsApi.md#createdemandbatch) | **POST** /entity/demand/batch | Массовое создание и обновление Отгрузок
*DemandsApi* | [**createDemandMetadataAttribute**](docs/Api/DemandsApi.md#createdemandmetadataattribute) | **POST** /entity/demand/metadata/attributes | Создать доп. поле Отгрузки
*DemandsApi* | [**createDemandPositions**](docs/Api/DemandsApi.md#createdemandpositions) | **POST** /entity/demand/{id}/positions | Создать позиции Отгрузки
*DemandsApi* | [**deleteDemand**](docs/Api/DemandsApi.md#deletedemand) | **DELETE** /entity/demand/{id} | Удалить Отгрузку
*DemandsApi* | [**deleteDemandBatch**](docs/Api/DemandsApi.md#deletedemandbatch) | **POST** /entity/demand/delete | Массовое удаление Отгрузок
*DemandsApi* | [**deleteDemandMetadataAttributeById**](docs/Api/DemandsApi.md#deletedemandmetadataattributebyid) | **DELETE** /entity/demand/metadata/attributes/{id} | Удалить отдельное доп. поле Отгрузки
*DemandsApi* | [**deleteDemandMetadataStateById**](docs/Api/DemandsApi.md#deletedemandmetadatastatebyid) | **DELETE** /entity/demand/metadata/states/{id} | Удалить отдельный статус Отгрузки
*DemandsApi* | [**deleteDemandPosition**](docs/Api/DemandsApi.md#deletedemandposition) | **DELETE** /entity/demand/{id}/positions/{positionId} | Удалить позицию Отгрузки
*DemandsApi* | [**deleteDemandPositionsBatch**](docs/Api/DemandsApi.md#deletedemandpositionsbatch) | **POST** /entity/demand/{id}/positions/delete | Массовое удаление позиций Отгрузки
*DemandsApi* | [**getDemandById**](docs/Api/DemandsApi.md#getdemandbyid) | **GET** /entity/demand/{id} | Получить Отгрузку
*DemandsApi* | [**getDemandList**](docs/Api/DemandsApi.md#getdemandlist) | **GET** /entity/demand | Получить список Отгрузок
*DemandsApi* | [**getDemandMetadata**](docs/Api/DemandsApi.md#getdemandmetadata) | **GET** /entity/demand/metadata | Метаданные Отгрузок
*DemandsApi* | [**getDemandMetadataAttribute**](docs/Api/DemandsApi.md#getdemandmetadataattribute) | **GET** /entity/demand/metadata/attributes | Доп. поля Отгрузки
*DemandsApi* | [**getDemandMetadataAttributeById**](docs/Api/DemandsApi.md#getdemandmetadataattributebyid) | **GET** /entity/demand/metadata/attributes/{id} | Отдельное доп. поле Отгрузки
*DemandsApi* | [**getDemandMetadataStateById**](docs/Api/DemandsApi.md#getdemandmetadatastatebyid) | **GET** /entity/demand/metadata/states/{id} | Отдельный статус Отгрузки
*DemandsApi* | [**getDemandPositionById**](docs/Api/DemandsApi.md#getdemandpositionbyid) | **GET** /entity/demand/{id}/positions/{positionId} | Получить позицию Отгрузки
*DemandsApi* | [**getDemandPositions**](docs/Api/DemandsApi.md#getdemandpositions) | **GET** /entity/demand/{id}/positions | Получить позиции Отгрузки
*DemandsApi* | [**getDemandTemplate**](docs/Api/DemandsApi.md#getdemandtemplate) | **PUT** /entity/demand/new | Шаблон Отгрузки
*DemandsApi* | [**updateDemand**](docs/Api/DemandsApi.md#updatedemand) | **PUT** /entity/demand/{id} | Изменить Отгрузку
*DemandsApi* | [**updateDemandMetadataAttributeById**](docs/Api/DemandsApi.md#updatedemandmetadataattributebyid) | **PUT** /entity/demand/metadata/attributes/{id} | Обновить отдельное доп. поле Отгрузки
*DemandsApi* | [**updateDemandMetadataStateById**](docs/Api/DemandsApi.md#updatedemandmetadatastatebyid) | **PUT** /entity/demand/metadata/states/{id} | Обновить отдельный статус Отгрузки
*DemandsApi* | [**updateDemandPosition**](docs/Api/DemandsApi.md#updatedemandposition) | **PUT** /entity/demand/{id}/positions/{positionId} | Изменить позицию Отгрузки
*DiscountsApi* | [**createAccumulationDiscount**](docs/Api/DiscountsApi.md#createaccumulationdiscount) | **POST** /entity/accumulationdiscount | Создать накопительную скидку
*DiscountsApi* | [**createPersonalDiscount**](docs/Api/DiscountsApi.md#createpersonaldiscount) | **POST** /entity/personaldiscount | Создать персональную скидку
*DiscountsApi* | [**createSpecialPriceDiscount**](docs/Api/DiscountsApi.md#createspecialpricediscount) | **POST** /entity/specialpricediscount | Создать специальную цену (specialpricediscount)
*DiscountsApi* | [**deleteAccumulationDiscount**](docs/Api/DiscountsApi.md#deleteaccumulationdiscount) | **DELETE** /entity/accumulationdiscount/{id} | Удалить накопительную скидку
*DiscountsApi* | [**deletePersonalDiscount**](docs/Api/DiscountsApi.md#deletepersonaldiscount) | **DELETE** /entity/personaldiscount/{id} | Удалить персональную скидку
*DiscountsApi* | [**deleteSpecialPriceDiscount**](docs/Api/DiscountsApi.md#deletespecialpricediscount) | **DELETE** /entity/specialpricediscount/{id} | Удалить специальную цену
*DiscountsApi* | [**getAccumulationDiscountById**](docs/Api/DiscountsApi.md#getaccumulationdiscountbyid) | **GET** /entity/accumulationdiscount/{id} | Получить накопительную скидку по ID
*DiscountsApi* | [**getDiscounts**](docs/Api/DiscountsApi.md#getdiscounts) | **GET** /entity/discount | Получить список скидок
*DiscountsApi* | [**getPersonalDiscountById**](docs/Api/DiscountsApi.md#getpersonaldiscountbyid) | **GET** /entity/personaldiscount/{id} | Получить персональную скидку по ID
*DiscountsApi* | [**getSpecialPriceDiscountById**](docs/Api/DiscountsApi.md#getspecialpricediscountbyid) | **GET** /entity/specialpricediscount/{id} | Получить специальную цену по ID
*DiscountsApi* | [**updateAccumulationDiscount**](docs/Api/DiscountsApi.md#updateaccumulationdiscount) | **PUT** /entity/accumulationdiscount/{id} | Изменить накопительную скидку
*DiscountsApi* | [**updateDiscountRoundingById**](docs/Api/DiscountsApi.md#updatediscountroundingbyid) | **PUT** /entity/discount/{id} | Изменить округление копеек
*DiscountsApi* | [**updatePersonalDiscount**](docs/Api/DiscountsApi.md#updatepersonaldiscount) | **PUT** /entity/personaldiscount/{id} | Изменить персональную скидку
*DiscountsApi* | [**updateSpecialPriceDiscount**](docs/Api/DiscountsApi.md#updatespecialpricediscount) | **PUT** /entity/specialpricediscount/{id} | Изменить специальную цену
*EmissionOrdersApi* | [**createEmissionOrder**](docs/Api/EmissionOrdersApi.md#createemissionorder) | **POST** /entity/emissionorder | Создать Заказ кодов маркировки
*EmissionOrdersApi* | [**createEmissionOrderBatch**](docs/Api/EmissionOrdersApi.md#createemissionorderbatch) | **POST** /entity/emissionorder/batch | Массовое создание и обновление Заказов кодов маркировки
*EmissionOrdersApi* | [**createEmissionOrderPositions**](docs/Api/EmissionOrdersApi.md#createemissionorderpositions) | **POST** /entity/emissionorder/{id}/positions | Создать позицию Заказа кодов маркировки
*EmissionOrdersApi* | [**createEmissionOrderPositionsBatch**](docs/Api/EmissionOrdersApi.md#createemissionorderpositionsbatch) | **POST** /entity/emissionorder/{id}/positions/batch | Создать позиции Заказа кодов маркировки
*EmissionOrdersApi* | [**deleteEmissionOrderMetadataStateById**](docs/Api/EmissionOrdersApi.md#deleteemissionordermetadatastatebyid) | **DELETE** /entity/emissionorder/metadata/states/{id} | Удалить отдельный статус Заказа кодов маркировки
*EmissionOrdersApi* | [**getEmissionOrderById**](docs/Api/EmissionOrdersApi.md#getemissionorderbyid) | **GET** /entity/emissionorder/{id} | Получить Заказ кодов маркировки
*EmissionOrdersApi* | [**getEmissionOrderList**](docs/Api/EmissionOrdersApi.md#getemissionorderlist) | **GET** /entity/emissionorder | Получить список Заказов кодов маркировки
*EmissionOrdersApi* | [**getEmissionOrderMetadata**](docs/Api/EmissionOrdersApi.md#getemissionordermetadata) | **GET** /entity/emissionorder/metadata | Метаданные Заказов кодов маркировки
*EmissionOrdersApi* | [**getEmissionOrderMetadataStateById**](docs/Api/EmissionOrdersApi.md#getemissionordermetadatastatebyid) | **GET** /entity/emissionorder/metadata/states/{id} | Отдельный статус Заказа кодов маркировки
*EmissionOrdersApi* | [**getEmissionOrderPositionById**](docs/Api/EmissionOrdersApi.md#getemissionorderpositionbyid) | **GET** /entity/emissionorder/{id}/positions/{positionId} | Получить позицию Заказа кодов маркировки
*EmissionOrdersApi* | [**getEmissionOrderPositions**](docs/Api/EmissionOrdersApi.md#getemissionorderpositions) | **GET** /entity/emissionorder/{id}/positions | Получить позиции Заказа кодов маркировки
*EmissionOrdersApi* | [**updateEmissionOrder**](docs/Api/EmissionOrdersApi.md#updateemissionorder) | **PUT** /entity/emissionorder/{id} | Изменить Заказ кодов маркировки
*EmissionOrdersApi* | [**updateEmissionOrderMetadataStateById**](docs/Api/EmissionOrdersApi.md#updateemissionordermetadatastatebyid) | **PUT** /entity/emissionorder/metadata/states/{id} | Обновить отдельный статус Заказа кодов маркировки
*EmissionOrdersApi* | [**updateEmissionOrderPosition**](docs/Api/EmissionOrdersApi.md#updateemissionorderposition) | **PUT** /entity/emissionorder/{id}/positions/{positionId} | Изменить позицию Заказа кодов маркировки
*EmployeesApi* | [**activateEmployee**](docs/Api/EmployeesApi.md#activateemployee) | **PUT** /entity/employee/{id}/access/activate | Активировать сотрудника
*EmployeesApi* | [**createEmployee**](docs/Api/EmployeesApi.md#createemployee) | **POST** /entity/employee | Создать сотрудника
*EmployeesApi* | [**createEmployeesBatch**](docs/Api/EmployeesApi.md#createemployeesbatch) | **POST** /entity/employee/batch | Создать или изменить сотрудников
*EmployeesApi* | [**deactivateEmployee**](docs/Api/EmployeesApi.md#deactivateemployee) | **PUT** /entity/employee/{id}/access/deactivate | Деактивировать сотрудника
*EmployeesApi* | [**deleteEmployee**](docs/Api/EmployeesApi.md#deleteemployee) | **DELETE** /entity/employee/{id} | Удалить сотрудника
*EmployeesApi* | [**deleteEmployeesBatch**](docs/Api/EmployeesApi.md#deleteemployeesbatch) | **POST** /entity/employee/delete | Удалить сотрудников
*EmployeesApi* | [**getEmployeeById**](docs/Api/EmployeesApi.md#getemployeebyid) | **GET** /entity/employee/{id} | Получить сотрудника по ID
*EmployeesApi* | [**getEmployeeMetadata**](docs/Api/EmployeesApi.md#getemployeemetadata) | **GET** /entity/employee/metadata | Получить метаданные товаров
*EmployeesApi* | [**getEmployeeSecurity**](docs/Api/EmployeesApi.md#getemployeesecurity) | **GET** /entity/employee/{id}/security | Получить права сотрудника
*EmployeesApi* | [**getEmployees**](docs/Api/EmployeesApi.md#getemployees) | **GET** /entity/employee | Получить список сотрудников
*EmployeesApi* | [**getRoleAdmin**](docs/Api/EmployeesApi.md#getroleadmin) | **GET** /entity/role/admin | Получить роль администратора
*EmployeesApi* | [**getRoleCashier**](docs/Api/EmployeesApi.md#getrolecashier) | **GET** /entity/role/cashier | Получить роль кассира
*EmployeesApi* | [**getRoleIndividual**](docs/Api/EmployeesApi.md#getroleindividual) | **GET** /entity/role/individual | Получить индивидуальную роль
*EmployeesApi* | [**getRoleOwner**](docs/Api/EmployeesApi.md#getroleowner) | **GET** /entity/role/owner | Получить роль владельца аккаунта
*EmployeesApi* | [**getRoleWorker**](docs/Api/EmployeesApi.md#getroleworker) | **GET** /entity/role/worker | Получить роль сотрудника производства
*EmployeesApi* | [**resetEmployeePassword**](docs/Api/EmployeesApi.md#resetemployeepassword) | **PUT** /entity/employee/{id}/access/resetpassword | Сбросить пароль сотрудника
*EmployeesApi* | [**updateEmployee**](docs/Api/EmployeesApi.md#updateemployee) | **PUT** /entity/employee/{id} | Обновить сотрудника
*EmployeesApi* | [**updateEmployeeSecurity**](docs/Api/EmployeesApi.md#updateemployeesecurity) | **PUT** /entity/employee/{id}/security | Изменить права сотрудника
*ExpenseItemsApi* | [**createExpenseItem**](docs/Api/ExpenseItemsApi.md#createexpenseitem) | **POST** /entity/expenseitem | Создать статью расходов
*ExpenseItemsApi* | [**createExpenseItemsBatch**](docs/Api/ExpenseItemsApi.md#createexpenseitemsbatch) | **POST** /entity/expenseitem/batch | Создать или изменить статьи расходов
*ExpenseItemsApi* | [**deleteExpenseItem**](docs/Api/ExpenseItemsApi.md#deleteexpenseitem) | **DELETE** /entity/expenseitem/{id} | Удалить статью расходов
*ExpenseItemsApi* | [**deleteExpenseItemsBatch**](docs/Api/ExpenseItemsApi.md#deleteexpenseitemsbatch) | **POST** /entity/expenseitem/delete | Удалить статьи расходов
*ExpenseItemsApi* | [**getExpenseItemById**](docs/Api/ExpenseItemsApi.md#getexpenseitembyid) | **GET** /entity/expenseitem/{id} | Получить статью расходов по ID
*ExpenseItemsApi* | [**getExpenseItems**](docs/Api/ExpenseItemsApi.md#getexpenseitems) | **GET** /entity/expenseitem | Получить список статей расходов
*ExpenseItemsApi* | [**updateExpenseItem**](docs/Api/ExpenseItemsApi.md#updateexpenseitem) | **PUT** /entity/expenseitem/{id} | Обновить статью расходов
*GroupsApi* | [**createGroup**](docs/Api/GroupsApi.md#creategroup) | **POST** /entity/group | Создать группу
*GroupsApi* | [**deleteGroup**](docs/Api/GroupsApi.md#deletegroup) | **DELETE** /entity/group/{id} | Удалить группу
*GroupsApi* | [**getGroupById**](docs/Api/GroupsApi.md#getgroupbyid) | **GET** /entity/group/{id} | Получить группу по ID
*GroupsApi* | [**getGroups**](docs/Api/GroupsApi.md#getgroups) | **GET** /entity/group | Получить список групп
*GroupsApi* | [**updateGroup**](docs/Api/GroupsApi.md#updategroup) | **PUT** /entity/group/{id} | Обновить группу
*InternalOrdersApi* | [**createInternalOrder**](docs/Api/InternalOrdersApi.md#createinternalorder) | **POST** /entity/internalorder | Создать InternalOrder
*InternalOrdersApi* | [**createInternalOrderBatch**](docs/Api/InternalOrdersApi.md#createinternalorderbatch) | **POST** /entity/internalorder/batch | Массовое создание и обновление InternalOrder
*InternalOrdersApi* | [**createInternalOrderMetadataAttribute**](docs/Api/InternalOrdersApi.md#createinternalordermetadataattribute) | **POST** /entity/internalorder/metadata/attributes | Создать Доп. поле InternalOrder
*InternalOrdersApi* | [**createInternalOrderMetadataState**](docs/Api/InternalOrdersApi.md#createinternalordermetadatastate) | **POST** /entity/internalorder/metadata/states | Создать статус InternalOrder
*InternalOrdersApi* | [**createInternalOrderPositions**](docs/Api/InternalOrdersApi.md#createinternalorderpositions) | **POST** /entity/internalorder/{id}/positions | Создать позиции InternalOrder
*InternalOrdersApi* | [**deleteInternalOrder**](docs/Api/InternalOrdersApi.md#deleteinternalorder) | **DELETE** /entity/internalorder/{id} | Удалить InternalOrder
*InternalOrdersApi* | [**deleteInternalOrderBatch**](docs/Api/InternalOrdersApi.md#deleteinternalorderbatch) | **POST** /entity/internalorder/delete | Массовое удаление InternalOrder
*InternalOrdersApi* | [**deleteInternalOrderMetadataAttributeById**](docs/Api/InternalOrdersApi.md#deleteinternalordermetadataattributebyid) | **DELETE** /entity/internalorder/metadata/attributes/{id} | Удалить отдельное доп. поле InternalOrder
*InternalOrdersApi* | [**deleteInternalOrderMetadataStateById**](docs/Api/InternalOrdersApi.md#deleteinternalordermetadatastatebyid) | **DELETE** /entity/internalorder/metadata/states/{id} | Удалить отдельный статус InternalOrder
*InternalOrdersApi* | [**deleteInternalOrderPosition**](docs/Api/InternalOrdersApi.md#deleteinternalorderposition) | **DELETE** /entity/internalorder/{id}/positions/{positionId} | Удалить позицию InternalOrder
*InternalOrdersApi* | [**deleteInternalOrderPositionsBatch**](docs/Api/InternalOrdersApi.md#deleteinternalorderpositionsbatch) | **POST** /entity/internalorder/{id}/positions/delete | Массовое удаление позиций InternalOrder
*InternalOrdersApi* | [**getInternalOrderById**](docs/Api/InternalOrdersApi.md#getinternalorderbyid) | **GET** /entity/internalorder/{id} | Получить InternalOrder
*InternalOrdersApi* | [**getInternalOrderList**](docs/Api/InternalOrdersApi.md#getinternalorderlist) | **GET** /entity/internalorder | Получить список InternalOrder
*InternalOrdersApi* | [**getInternalOrderMetadata**](docs/Api/InternalOrdersApi.md#getinternalordermetadata) | **GET** /entity/internalorder/metadata | Метаданные InternalOrder
*InternalOrdersApi* | [**getInternalOrderMetadataAttribute**](docs/Api/InternalOrdersApi.md#getinternalordermetadataattribute) | **GET** /entity/internalorder/metadata/attributes | Доп. поля InternalOrder
*InternalOrdersApi* | [**getInternalOrderMetadataAttributeById**](docs/Api/InternalOrdersApi.md#getinternalordermetadataattributebyid) | **GET** /entity/internalorder/metadata/attributes/{id} | Отдельное доп. поле InternalOrder
*InternalOrdersApi* | [**getInternalOrderMetadataStateById**](docs/Api/InternalOrdersApi.md#getinternalordermetadatastatebyid) | **GET** /entity/internalorder/metadata/states/{id} | Отдельный статус InternalOrder
*InternalOrdersApi* | [**getInternalOrderPositionById**](docs/Api/InternalOrdersApi.md#getinternalorderpositionbyid) | **GET** /entity/internalorder/{id}/positions/{positionId} | Получить позицию InternalOrder
*InternalOrdersApi* | [**getInternalOrderPositions**](docs/Api/InternalOrdersApi.md#getinternalorderpositions) | **GET** /entity/internalorder/{id}/positions | Получить позиции InternalOrder
*InternalOrdersApi* | [**getInternalOrderTemplate**](docs/Api/InternalOrdersApi.md#getinternalordertemplate) | **PUT** /entity/internalorder/new | Шаблон InternalOrder
*InternalOrdersApi* | [**updateInternalOrder**](docs/Api/InternalOrdersApi.md#updateinternalorder) | **PUT** /entity/internalorder/{id} | Изменить InternalOrder
*InternalOrdersApi* | [**updateInternalOrderMetadataAttributeById**](docs/Api/InternalOrdersApi.md#updateinternalordermetadataattributebyid) | **PUT** /entity/internalorder/metadata/attributes/{id} | Обновить отдельное доп. поле InternalOrder
*InternalOrdersApi* | [**updateInternalOrderMetadataStateById**](docs/Api/InternalOrdersApi.md#updateinternalordermetadatastatebyid) | **PUT** /entity/internalorder/metadata/states/{id} | Обновить отдельный статус InternalOrder
*InternalOrdersApi* | [**updateInternalOrderPosition**](docs/Api/InternalOrdersApi.md#updateinternalorderposition) | **PUT** /entity/internalorder/{id}/positions/{positionId} | Изменить позицию InternalOrder
*LabelsApi* | [**printLabels**](docs/Api/LabelsApi.md#printlabels) | **POST** /entity/{type}/{id}/export | Запрос на печать этикеток и ценников
*OrganizationsApi* | [**createOrganization**](docs/Api/OrganizationsApi.md#createorganization) | **POST** /entity/organization | Создать юрлицо
*OrganizationsApi* | [**createOrganizationMetadataAttribute**](docs/Api/OrganizationsApi.md#createorganizationmetadataattribute) | **POST** /entity/organization/metadata/attributes | Создать доп. поле юрлица
*OrganizationsApi* | [**createOrganizationsBatch**](docs/Api/OrganizationsApi.md#createorganizationsbatch) | **POST** /entity/organization/batch | Создать или изменить юрлица
*OrganizationsApi* | [**deleteOrganization**](docs/Api/OrganizationsApi.md#deleteorganization) | **DELETE** /entity/organization/{id} | Удалить юрлицо
*OrganizationsApi* | [**deleteOrganizationAccount**](docs/Api/OrganizationsApi.md#deleteorganizationaccount) | **DELETE** /entity/organization/{id}/accounts/{accountId} | Удалить счёт юрлица
*OrganizationsApi* | [**deleteOrganizationAccountsBatch**](docs/Api/OrganizationsApi.md#deleteorganizationaccountsbatch) | **POST** /entity/organization/{id}/accounts/delete | Удалить счета юрлица
*OrganizationsApi* | [**deleteOrganizationMetadataAttributeById**](docs/Api/OrganizationsApi.md#deleteorganizationmetadataattributebyid) | **DELETE** /entity/organization/metadata/attributes/{id} | Удалить отдельное доп. поле юрлица
*OrganizationsApi* | [**deleteOrganizationsBatch**](docs/Api/OrganizationsApi.md#deleteorganizationsbatch) | **POST** /entity/organization/delete | Удалить юрлица
*OrganizationsApi* | [**getOrganizationAccountById**](docs/Api/OrganizationsApi.md#getorganizationaccountbyid) | **GET** /entity/organization/{id}/accounts/{accountId} | Получить счёт юрлица по ID
*OrganizationsApi* | [**getOrganizationAccounts**](docs/Api/OrganizationsApi.md#getorganizationaccounts) | **GET** /entity/organization/{id}/accounts | Получить счета юрлица
*OrganizationsApi* | [**getOrganizationById**](docs/Api/OrganizationsApi.md#getorganizationbyid) | **GET** /entity/organization/{id} | Получить юрлицо по ID
*OrganizationsApi* | [**getOrganizationMetadata**](docs/Api/OrganizationsApi.md#getorganizationmetadata) | **GET** /entity/organization/metadata | Получить метаданные юрлиц
*OrganizationsApi* | [**getOrganizationMetadataAttributeById**](docs/Api/OrganizationsApi.md#getorganizationmetadataattributebyid) | **GET** /entity/organization/metadata/attributes/{id} | Получить доп. поле юрлица по ID
*OrganizationsApi* | [**getOrganizationMetadataAttributes**](docs/Api/OrganizationsApi.md#getorganizationmetadataattributes) | **GET** /entity/organization/metadata/attributes | Получить доп. поля юрлиц
*OrganizationsApi* | [**getOrganizations**](docs/Api/OrganizationsApi.md#getorganizations) | **GET** /entity/organization | Получить список юрлиц
*OrganizationsApi* | [**updateOrganization**](docs/Api/OrganizationsApi.md#updateorganization) | **PUT** /entity/organization/{id} | Обновить юрлицо
*OrganizationsApi* | [**updateOrganizationAccount**](docs/Api/OrganizationsApi.md#updateorganizationaccount) | **PUT** /entity/organization/{id}/accounts/{accountId} | Обновить счёт юрлица
*OrganizationsApi* | [**updateOrganizationAccounts**](docs/Api/OrganizationsApi.md#updateorganizationaccounts) | **POST** /entity/organization/{id}/accounts | Изменить счета юрлица
*OrganizationsApi* | [**updateOrganizationMetadataAttributeById**](docs/Api/OrganizationsApi.md#updateorganizationmetadataattributebyid) | **PUT** /entity/organization/metadata/attributes/{id} | Обновить отдельное доп. поле юрлица
*PriceTypesApi* | [**createPriceTypesBatch**](docs/Api/PriceTypesApi.md#createpricetypesbatch) | **POST** /context/companysettings/pricetype | Создать или изменить типы цен
*PriceTypesApi* | [**getDefaultPriceType**](docs/Api/PriceTypesApi.md#getdefaultpricetype) | **GET** /context/companysettings/pricetype/default | Получить тип цены по умолчанию
*PriceTypesApi* | [**getPriceTypeById**](docs/Api/PriceTypesApi.md#getpricetypebyid) | **GET** /context/companysettings/pricetype/{id} | Получить тип цены по ID
*PriceTypesApi* | [**getPriceTypes**](docs/Api/PriceTypesApi.md#getpricetypes) | **GET** /context/companysettings/pricetype | Получить список типов цен
*ProcessingPlanFoldersApi* | [**createProcessingPlanFolder**](docs/Api/ProcessingPlanFoldersApi.md#createprocessingplanfolder) | **POST** /entity/processingplanfolder | Создать группу техкарт
*ProcessingPlanFoldersApi* | [**createProcessingPlanFoldersBatch**](docs/Api/ProcessingPlanFoldersApi.md#createprocessingplanfoldersbatch) | **POST** /entity/processingplanfolder/batch | Массовое создание и обновление групп техкарт
*ProcessingPlanFoldersApi* | [**deleteProcessingPlanFolder**](docs/Api/ProcessingPlanFoldersApi.md#deleteprocessingplanfolder) | **DELETE** /entity/processingplanfolder/{id} | Удалить группу техкарт
*ProcessingPlanFoldersApi* | [**deleteProcessingPlanFoldersBatch**](docs/Api/ProcessingPlanFoldersApi.md#deleteprocessingplanfoldersbatch) | **POST** /entity/processingplanfolder/delete | Массовое удаление групп техкарт
*ProcessingPlanFoldersApi* | [**getProcessingPlanFolderById**](docs/Api/ProcessingPlanFoldersApi.md#getprocessingplanfolderbyid) | **GET** /entity/processingplanfolder/{id} | Получить группу техкарт
*ProcessingPlanFoldersApi* | [**getProcessingPlanFolderMetadata**](docs/Api/ProcessingPlanFoldersApi.md#getprocessingplanfoldermetadata) | **GET** /entity/processingplanfolder/metadata | Метаданные групп техкарт
*ProcessingPlanFoldersApi* | [**getProcessingPlanFolders**](docs/Api/ProcessingPlanFoldersApi.md#getprocessingplanfolders) | **GET** /entity/processingplanfolder | Получить список групп техкарт
*ProcessingPlanFoldersApi* | [**updateProcessingPlanFolder**](docs/Api/ProcessingPlanFoldersApi.md#updateprocessingplanfolder) | **PUT** /entity/processingplanfolder/{id} | Изменить группу техкарт
*ProcessingPlansApi* | [**createProcessingPlan**](docs/Api/ProcessingPlansApi.md#createprocessingplan) | **POST** /entity/processingplan | Создать Техкарту
*ProcessingPlansApi* | [**createProcessingPlanBatch**](docs/Api/ProcessingPlansApi.md#createprocessingplanbatch) | **POST** /entity/processingplan/batch | Создать или изменить Техкарты
*ProcessingPlansApi* | [**createProcessingPlanMaterials**](docs/Api/ProcessingPlansApi.md#createprocessingplanmaterials) | **POST** /entity/processingplan/{id}/materials | Создать материал Техкарты
*ProcessingPlansApi* | [**createProcessingPlanMetadataAttribute**](docs/Api/ProcessingPlansApi.md#createprocessingplanmetadataattribute) | **POST** /entity/processingplan/metadata/attributes | Создать Доп. поле ProcessingPlan
*ProcessingPlansApi* | [**createProcessingPlanProducts**](docs/Api/ProcessingPlansApi.md#createprocessingplanproducts) | **POST** /entity/processingplan/{id}/products | Создать продукт Техкарты
*ProcessingPlansApi* | [**deleteProcessingPlan**](docs/Api/ProcessingPlansApi.md#deleteprocessingplan) | **DELETE** /entity/processingplan/{id} | Удалить Техкарту
*ProcessingPlansApi* | [**deleteProcessingPlanMaterial**](docs/Api/ProcessingPlansApi.md#deleteprocessingplanmaterial) | **DELETE** /entity/processingplan/{id}/materials/{positionId} | Удалить материал Техкарты
*ProcessingPlansApi* | [**deleteProcessingPlanMaterialsBatch**](docs/Api/ProcessingPlansApi.md#deleteprocessingplanmaterialsbatch) | **POST** /entity/processingplan/{id}/materials/delete | Массовое удаление материалов Техкарты
*ProcessingPlansApi* | [**deleteProcessingPlanMetadataAttributeById**](docs/Api/ProcessingPlansApi.md#deleteprocessingplanmetadataattributebyid) | **DELETE** /entity/processingplan/metadata/attributes/{id} | Удалить отдельное доп. поле ProcessingPlan
*ProcessingPlansApi* | [**deleteProcessingPlanProduct**](docs/Api/ProcessingPlansApi.md#deleteprocessingplanproduct) | **DELETE** /entity/processingplan/{id}/products/{positionId} | Удалить продукт Техкарты
*ProcessingPlansApi* | [**deleteProcessingPlanProductsBatch**](docs/Api/ProcessingPlansApi.md#deleteprocessingplanproductsbatch) | **POST** /entity/processingplan/{id}/products/delete | Массовое удаление продуктов Техкарты
*ProcessingPlansApi* | [**deleteProcessingPlansBatch**](docs/Api/ProcessingPlansApi.md#deleteprocessingplansbatch) | **POST** /entity/processingplan/delete | Массовое удаление Техкарт
*ProcessingPlansApi* | [**getProcessingPlanById**](docs/Api/ProcessingPlansApi.md#getprocessingplanbyid) | **GET** /entity/processingplan/{id} | Получить Техкарту
*ProcessingPlansApi* | [**getProcessingPlanMaterialById**](docs/Api/ProcessingPlansApi.md#getprocessingplanmaterialbyid) | **GET** /entity/processingplan/{id}/materials/{positionId} | Получить материал Техкарты
*ProcessingPlansApi* | [**getProcessingPlanMaterials**](docs/Api/ProcessingPlansApi.md#getprocessingplanmaterials) | **GET** /entity/processingplan/{id}/materials | Получить материалы Техкарты
*ProcessingPlansApi* | [**getProcessingPlanMetadata**](docs/Api/ProcessingPlansApi.md#getprocessingplanmetadata) | **GET** /entity/processingplan/metadata | Метаданные Складов
*ProcessingPlansApi* | [**getProcessingPlanMetadataAttribute**](docs/Api/ProcessingPlansApi.md#getprocessingplanmetadataattribute) | **GET** /entity/processingplan/metadata/attributes | Доп. поля ProcessingPlan
*ProcessingPlansApi* | [**getProcessingPlanMetadataAttributeById**](docs/Api/ProcessingPlansApi.md#getprocessingplanmetadataattributebyid) | **GET** /entity/processingplan/metadata/attributes/{id} | Отдельное доп. поле Техкарты
*ProcessingPlansApi* | [**getProcessingPlanProductById**](docs/Api/ProcessingPlansApi.md#getprocessingplanproductbyid) | **GET** /entity/processingplan/{id}/products/{positionId} | Получить продукт Техкарты
*ProcessingPlansApi* | [**getProcessingPlanProducts**](docs/Api/ProcessingPlansApi.md#getprocessingplanproducts) | **GET** /entity/processingplan/{id}/products | Получить продукты Техкарты
*ProcessingPlansApi* | [**getProcessingPlanStageById**](docs/Api/ProcessingPlansApi.md#getprocessingplanstagebyid) | **GET** /entity/processingplan/{id}/stages/{positionId} | Получить отдельный этап Техкарты
*ProcessingPlansApi* | [**getProcessingPlanStages**](docs/Api/ProcessingPlansApi.md#getprocessingplanstages) | **GET** /entity/processingplan/{id}/stages | Получить этапы Техкарты
*ProcessingPlansApi* | [**getProcessingPlans**](docs/Api/ProcessingPlansApi.md#getprocessingplans) | **GET** /entity/processingplan | Получить список Техкарт
*ProcessingPlansApi* | [**updateProcessingPlan**](docs/Api/ProcessingPlansApi.md#updateprocessingplan) | **PUT** /entity/processingplan/{id} | Изменить Техкарту
*ProcessingPlansApi* | [**updateProcessingPlanMaterial**](docs/Api/ProcessingPlansApi.md#updateprocessingplanmaterial) | **PUT** /entity/processingplan/{id}/materials/{positionId} | Изменить материал Техкарты
*ProcessingPlansApi* | [**updateProcessingPlanMetadataAttributeById**](docs/Api/ProcessingPlansApi.md#updateprocessingplanmetadataattributebyid) | **PUT** /entity/processingplan/metadata/attributes/{id} | Обновить отдельное доп. поле ProcessingPlan
*ProcessingPlansApi* | [**updateProcessingPlanProduct**](docs/Api/ProcessingPlansApi.md#updateprocessingplanproduct) | **PUT** /entity/processingplan/{id}/products/{positionId} | Изменить продукт Техкарты
*ProcessingPlansApi* | [**updateProcessingPlanStage**](docs/Api/ProcessingPlansApi.md#updateprocessingplanstage) | **PUT** /entity/processingplan/{id}/stages/{positionId} | Изменить отдельный этап Техкарты
*ProcessingProcessesApi* | [**createProcessingProcess**](docs/Api/ProcessingProcessesApi.md#createprocessingprocess) | **POST** /entity/processingprocess | Создать Техпроцесс
*ProcessingProcessesApi* | [**createProcessingProcessPositions**](docs/Api/ProcessingProcessesApi.md#createprocessingprocesspositions) | **POST** /entity/processingprocess/{id}/positions | Создать позицию Техпроцесса
*ProcessingProcessesApi* | [**createProcessingProcessesBatch**](docs/Api/ProcessingProcessesApi.md#createprocessingprocessesbatch) | **POST** /entity/processingprocess/batch | Создать или изменить Техпроцессы
*ProcessingProcessesApi* | [**deleteProcessingProcess**](docs/Api/ProcessingProcessesApi.md#deleteprocessingprocess) | **DELETE** /entity/processingprocess/{id} | Удалить Техпроцесс
*ProcessingProcessesApi* | [**deleteProcessingProcessPosition**](docs/Api/ProcessingProcessesApi.md#deleteprocessingprocessposition) | **DELETE** /entity/processingprocess/{id}/positions/{positionId} | Удалить позицию Техпроцесса
*ProcessingProcessesApi* | [**deleteProcessingProcessPositionsBatch**](docs/Api/ProcessingProcessesApi.md#deleteprocessingprocesspositionsbatch) | **POST** /entity/processingprocess/{id}/positions/delete | Массовое удаление позиций Техпроцесса
*ProcessingProcessesApi* | [**deleteProcessingProcessesBatch**](docs/Api/ProcessingProcessesApi.md#deleteprocessingprocessesbatch) | **POST** /entity/processingprocess/delete | Удалить Техпроцессы
*ProcessingProcessesApi* | [**getProcessingProcessById**](docs/Api/ProcessingProcessesApi.md#getprocessingprocessbyid) | **GET** /entity/processingprocess/{id} | Получить Техпроцесс по ID
*ProcessingProcessesApi* | [**getProcessingProcessPositionById**](docs/Api/ProcessingProcessesApi.md#getprocessingprocesspositionbyid) | **GET** /entity/processingprocess/{id}/positions/{positionId} | Получить позицию Техпроцесса
*ProcessingProcessesApi* | [**getProcessingProcessPositions**](docs/Api/ProcessingProcessesApi.md#getprocessingprocesspositions) | **GET** /entity/processingprocess/{id}/positions | Получить позиции Техпроцесса
*ProcessingProcessesApi* | [**getProcessingProcesses**](docs/Api/ProcessingProcessesApi.md#getprocessingprocesses) | **GET** /entity/processingprocess | Получить список Техпроцессов
*ProcessingProcessesApi* | [**updateProcessingProcess**](docs/Api/ProcessingProcessesApi.md#updateprocessingprocess) | **PUT** /entity/processingprocess/{id} | Обновить Техпроцесс
*ProcessingProcessesApi* | [**updateProcessingProcessPosition**](docs/Api/ProcessingProcessesApi.md#updateprocessingprocessposition) | **PUT** /entity/processingprocess/{id}/positions/{positionId} | Изменить позицию Техпроцесса
*ProcessingStagesApi* | [**createProcessingStage**](docs/Api/ProcessingStagesApi.md#createprocessingstage) | **POST** /entity/processingstage | Создать Этап производства
*ProcessingStagesApi* | [**createProcessingStagesBatch**](docs/Api/ProcessingStagesApi.md#createprocessingstagesbatch) | **POST** /entity/processingstage/batch | Создать или изменить Этапы производства
*ProcessingStagesApi* | [**deleteProcessingStage**](docs/Api/ProcessingStagesApi.md#deleteprocessingstage) | **DELETE** /entity/processingstage/{id} | Удалить Этап производства
*ProcessingStagesApi* | [**deleteProcessingStagesBatch**](docs/Api/ProcessingStagesApi.md#deleteprocessingstagesbatch) | **POST** /entity/processingstage/delete | Удалить Этапы производства
*ProcessingStagesApi* | [**getProcessingStageById**](docs/Api/ProcessingStagesApi.md#getprocessingstagebyid) | **GET** /entity/processingstage/{id} | Получить Этап производства по ID
*ProcessingStagesApi* | [**getProcessingStages**](docs/Api/ProcessingStagesApi.md#getprocessingstages) | **GET** /entity/processingstage | Получить список Этапов производства
*ProcessingStagesApi* | [**updateProcessingStage**](docs/Api/ProcessingStagesApi.md#updateprocessingstage) | **PUT** /entity/processingstage/{id} | Обновить Этап производства
*ProductFoldersApi* | [**createProductFolder**](docs/Api/ProductFoldersApi.md#createproductfolder) | **POST** /entity/productfolder | Создать группу товаров
*ProductFoldersApi* | [**createProductFoldersBatch**](docs/Api/ProductFoldersApi.md#createproductfoldersbatch) | **POST** /entity/productfolder/batch | Создать или изменить группы товаров
*ProductFoldersApi* | [**deleteProductFolder**](docs/Api/ProductFoldersApi.md#deleteproductfolder) | **DELETE** /entity/productfolder/{id} | Удалить группу товаров
*ProductFoldersApi* | [**deleteProductFoldersBatch**](docs/Api/ProductFoldersApi.md#deleteproductfoldersbatch) | **POST** /entity/productfolder/delete | Удалить группы товаров
*ProductFoldersApi* | [**getProductFolderById**](docs/Api/ProductFoldersApi.md#getproductfolderbyid) | **GET** /entity/productfolder/{id} | Получить группу товаров по ID
*ProductFoldersApi* | [**getProductFolders**](docs/Api/ProductFoldersApi.md#getproductfolders) | **GET** /entity/productfolder | Получить список групп товаров
*ProductFoldersApi* | [**updateProductFolder**](docs/Api/ProductFoldersApi.md#updateproductfolder) | **PUT** /entity/productfolder/{id} | Обновить группу товаров
*ProductsApi* | [**addProductFiles**](docs/Api/ProductsApi.md#addproductfiles) | **POST** /entity/product/{id}/files | Добавить файлы к товару
*ProductsApi* | [**addProductImages**](docs/Api/ProductsApi.md#addproductimages) | **POST** /entity/product/{id}/images | Добавить изображения к товару
*ProductsApi* | [**createProduct**](docs/Api/ProductsApi.md#createproduct) | **POST** /entity/product | Создать товар
*ProductsApi* | [**createProductStoreBalance**](docs/Api/ProductsApi.md#createproductstorebalance) | **POST** /entity/product/{id}/storebalances | Создать НСО товара для склада
*ProductsApi* | [**createProductsBatch**](docs/Api/ProductsApi.md#createproductsbatch) | **POST** /entity/product/batch | Создать или изменить товары
*ProductsApi* | [**deleteProduct**](docs/Api/ProductsApi.md#deleteproduct) | **DELETE** /entity/product/{id} | Удалить товар
*ProductsApi* | [**deleteProductFile**](docs/Api/ProductsApi.md#deleteproductfile) | **DELETE** /entity/product/{id}/files/{fileId} | Удалить файл товара
*ProductsApi* | [**deleteProductImage**](docs/Api/ProductsApi.md#deleteproductimage) | **DELETE** /entity/product/{id}/images/{imageId} | Удалить изображение товара
*ProductsApi* | [**deleteProductImages**](docs/Api/ProductsApi.md#deleteproductimages) | **POST** /entity/product/{id}/images/delete | Массовое удаление изображений товара
*ProductsApi* | [**deleteProductStoreBalance**](docs/Api/ProductsApi.md#deleteproductstorebalance) | **DELETE** /entity/product/{id}/storebalances/{storeBalanceId} | Удалить НСО товара по складу
*ProductsApi* | [**deleteProductStoreBalances**](docs/Api/ProductsApi.md#deleteproductstorebalances) | **POST** /entity/product/{id}/storebalances/delete | Массовое удаление НСО товара по складам
*ProductsApi* | [**deleteProductsBatch**](docs/Api/ProductsApi.md#deleteproductsbatch) | **POST** /entity/product/delete | Удалить товары
*ProductsApi* | [**getMetadata**](docs/Api/ProductsApi.md#getmetadata) | **GET** /entity/product/metadata | Получить метаданные товаров
*ProductsApi* | [**getProductById**](docs/Api/ProductsApi.md#getproductbyid) | **GET** /entity/product/{id} | Получить товар по ID
*ProductsApi* | [**getProductFiles**](docs/Api/ProductsApi.md#getproductfiles) | **GET** /entity/product/{id}/files | Получить файлы товара
*ProductsApi* | [**getProductImages**](docs/Api/ProductsApi.md#getproductimages) | **GET** /entity/product/{id}/images | Получить изображения товара
*ProductsApi* | [**getProductStoreBalanceById**](docs/Api/ProductsApi.md#getproductstorebalancebyid) | **GET** /entity/product/{id}/storebalances/{storeBalanceId} | Получить НСО товара по складу
*ProductsApi* | [**getProductStoreBalances**](docs/Api/ProductsApi.md#getproductstorebalances) | **GET** /entity/product/{id}/storebalances | Получить НСО товара по складам
*ProductsApi* | [**getProducts**](docs/Api/ProductsApi.md#getproducts) | **GET** /entity/product | Получить список товаров
*ProductsApi* | [**updateProduct**](docs/Api/ProductsApi.md#updateproduct) | **PUT** /entity/product/{id} | Обновить товар
*ProductsApi* | [**updateProductStoreBalance**](docs/Api/ProductsApi.md#updateproductstorebalance) | **PUT** /entity/product/{id}/storebalances/{storeBalanceId} | Изменить НСО товара по складу
*ProjectsApi* | [**createProject**](docs/Api/ProjectsApi.md#createproject) | **POST** /entity/project | Создать проект
*ProjectsApi* | [**createProjectMetadataAttribute**](docs/Api/ProjectsApi.md#createprojectmetadataattribute) | **POST** /entity/project/metadata/attributes | Создать доп. поле проекта
*ProjectsApi* | [**createProjectsBatch**](docs/Api/ProjectsApi.md#createprojectsbatch) | **POST** /entity/project/batch | Создать или изменить проекты
*ProjectsApi* | [**deleteProject**](docs/Api/ProjectsApi.md#deleteproject) | **DELETE** /entity/project/{id} | Удалить проект
*ProjectsApi* | [**deleteProjectMetadataAttribute**](docs/Api/ProjectsApi.md#deleteprojectmetadataattribute) | **DELETE** /entity/project/metadata/attributes/{id} | Удалить доп. поле проекта
*ProjectsApi* | [**deleteProjectsBatch**](docs/Api/ProjectsApi.md#deleteprojectsbatch) | **POST** /entity/project/delete | Удалить проекты
*ProjectsApi* | [**getProjectById**](docs/Api/ProjectsApi.md#getprojectbyid) | **GET** /entity/project/{id} | Получить проект по ID
*ProjectsApi* | [**getProjectMetadata**](docs/Api/ProjectsApi.md#getprojectmetadata) | **GET** /entity/project/metadata | Получить метаданные проектов
*ProjectsApi* | [**getProjectMetadataAttributeById**](docs/Api/ProjectsApi.md#getprojectmetadataattributebyid) | **GET** /entity/project/metadata/attributes/{id} | Получить доп. поле проекта по ID
*ProjectsApi* | [**getProjectMetadataAttributes**](docs/Api/ProjectsApi.md#getprojectmetadataattributes) | **GET** /entity/project/metadata/attributes | Получить доп. поля проектов
*ProjectsApi* | [**getProjects**](docs/Api/ProjectsApi.md#getprojects) | **GET** /entity/project | Получить список проектов
*ProjectsApi* | [**updateProject**](docs/Api/ProjectsApi.md#updateproject) | **PUT** /entity/project/{id} | Обновить проект
*ProjectsApi* | [**updateProjectMetadataAttribute**](docs/Api/ProjectsApi.md#updateprojectmetadataattribute) | **PUT** /entity/project/metadata/attributes/{id} | Обновить доп. поле проекта
*PurchaseOrdersApi* | [**createPurchaseOrder**](docs/Api/PurchaseOrdersApi.md#createpurchaseorder) | **POST** /entity/purchaseorder | Создать PurchaseOrder
*PurchaseOrdersApi* | [**createPurchaseOrderBatch**](docs/Api/PurchaseOrdersApi.md#createpurchaseorderbatch) | **POST** /entity/purchaseorder/batch | Массовое создание и обновление PurchaseOrder
*PurchaseOrdersApi* | [**createPurchaseOrderMetadataAttribute**](docs/Api/PurchaseOrdersApi.md#createpurchaseordermetadataattribute) | **POST** /entity/purchaseorder/metadata/attributes | Создать Доп. поле PurchaseOrder
*PurchaseOrdersApi* | [**createPurchaseOrderMetadataState**](docs/Api/PurchaseOrdersApi.md#createpurchaseordermetadatastate) | **POST** /entity/purchaseorder/metadata/states | Создать статус PurchaseOrder
*PurchaseOrdersApi* | [**createPurchaseOrderNote**](docs/Api/PurchaseOrdersApi.md#createpurchaseordernote) | **POST** /entity/purchaseorder/{id}/notes | Добавить Событие Заказа поставщику
*PurchaseOrdersApi* | [**createPurchaseOrderPositions**](docs/Api/PurchaseOrdersApi.md#createpurchaseorderpositions) | **POST** /entity/purchaseorder/{id}/positions | Создать позиции PurchaseOrder
*PurchaseOrdersApi* | [**deletePurchaseOrder**](docs/Api/PurchaseOrdersApi.md#deletepurchaseorder) | **DELETE** /entity/purchaseorder/{id} | Удалить PurchaseOrder
*PurchaseOrdersApi* | [**deletePurchaseOrderBatch**](docs/Api/PurchaseOrdersApi.md#deletepurchaseorderbatch) | **POST** /entity/purchaseorder/delete | Массовое удаление PurchaseOrder
*PurchaseOrdersApi* | [**deletePurchaseOrderMetadataAttributeById**](docs/Api/PurchaseOrdersApi.md#deletepurchaseordermetadataattributebyid) | **DELETE** /entity/purchaseorder/metadata/attributes/{id} | Удалить отдельное доп. поле PurchaseOrder
*PurchaseOrdersApi* | [**deletePurchaseOrderMetadataStateById**](docs/Api/PurchaseOrdersApi.md#deletepurchaseordermetadatastatebyid) | **DELETE** /entity/purchaseorder/metadata/states/{id} | Удалить отдельный статус PurchaseOrder
*PurchaseOrdersApi* | [**deletePurchaseOrderNote**](docs/Api/PurchaseOrdersApi.md#deletepurchaseordernote) | **DELETE** /entity/purchaseorder/{id}/notes/{noteId} | Удалить Событие Заказа поставщику
*PurchaseOrdersApi* | [**deletePurchaseOrderPosition**](docs/Api/PurchaseOrdersApi.md#deletepurchaseorderposition) | **DELETE** /entity/purchaseorder/{id}/positions/{positionId} | Удалить позицию PurchaseOrder
*PurchaseOrdersApi* | [**deletePurchaseOrderPositionsBatch**](docs/Api/PurchaseOrdersApi.md#deletepurchaseorderpositionsbatch) | **POST** /entity/purchaseorder/{id}/positions/delete | Массовое удаление позиций PurchaseOrder
*PurchaseOrdersApi* | [**getPurchaseOrderById**](docs/Api/PurchaseOrdersApi.md#getpurchaseorderbyid) | **GET** /entity/purchaseorder/{id} | Получить PurchaseOrder
*PurchaseOrdersApi* | [**getPurchaseOrderList**](docs/Api/PurchaseOrdersApi.md#getpurchaseorderlist) | **GET** /entity/purchaseorder | Получить список PurchaseOrder
*PurchaseOrdersApi* | [**getPurchaseOrderMetadata**](docs/Api/PurchaseOrdersApi.md#getpurchaseordermetadata) | **GET** /entity/purchaseorder/metadata | Метаданные PurchaseOrder
*PurchaseOrdersApi* | [**getPurchaseOrderMetadataAttribute**](docs/Api/PurchaseOrdersApi.md#getpurchaseordermetadataattribute) | **GET** /entity/purchaseorder/metadata/attributes | Доп. поля PurchaseOrder
*PurchaseOrdersApi* | [**getPurchaseOrderMetadataAttributeById**](docs/Api/PurchaseOrdersApi.md#getpurchaseordermetadataattributebyid) | **GET** /entity/purchaseorder/metadata/attributes/{id} | Отдельное доп. поле PurchaseOrder
*PurchaseOrdersApi* | [**getPurchaseOrderMetadataStateById**](docs/Api/PurchaseOrdersApi.md#getpurchaseordermetadatastatebyid) | **GET** /entity/purchaseorder/metadata/states/{id} | Отдельный статус PurchaseOrder
*PurchaseOrdersApi* | [**getPurchaseOrderNoteById**](docs/Api/PurchaseOrdersApi.md#getpurchaseordernotebyid) | **GET** /entity/purchaseorder/{id}/notes/{noteId} | Получить Событие Заказа поставщику по ID
*PurchaseOrdersApi* | [**getPurchaseOrderNotes**](docs/Api/PurchaseOrdersApi.md#getpurchaseordernotes) | **GET** /entity/purchaseorder/{id}/notes | Получить список Событий Заказа поставщику
*PurchaseOrdersApi* | [**getPurchaseOrderPositionById**](docs/Api/PurchaseOrdersApi.md#getpurchaseorderpositionbyid) | **GET** /entity/purchaseorder/{id}/positions/{positionId} | Получить позицию PurchaseOrder
*PurchaseOrdersApi* | [**getPurchaseOrderPositions**](docs/Api/PurchaseOrdersApi.md#getpurchaseorderpositions) | **GET** /entity/purchaseorder/{id}/positions | Получить позиции PurchaseOrder
*PurchaseOrdersApi* | [**getPurchaseOrderTemplate**](docs/Api/PurchaseOrdersApi.md#getpurchaseordertemplate) | **PUT** /entity/purchaseorder/new | Шаблон PurchaseOrder
*PurchaseOrdersApi* | [**updatePurchaseOrder**](docs/Api/PurchaseOrdersApi.md#updatepurchaseorder) | **PUT** /entity/purchaseorder/{id} | Изменить PurchaseOrder
*PurchaseOrdersApi* | [**updatePurchaseOrderMetadataAttributeById**](docs/Api/PurchaseOrdersApi.md#updatepurchaseordermetadataattributebyid) | **PUT** /entity/purchaseorder/metadata/attributes/{id} | Обновить отдельное доп. поле PurchaseOrder
*PurchaseOrdersApi* | [**updatePurchaseOrderMetadataStateById**](docs/Api/PurchaseOrdersApi.md#updatepurchaseordermetadatastatebyid) | **PUT** /entity/purchaseorder/metadata/states/{id} | Обновить отдельный статус PurchaseOrder
*PurchaseOrdersApi* | [**updatePurchaseOrderNote**](docs/Api/PurchaseOrdersApi.md#updatepurchaseordernote) | **PUT** /entity/purchaseorder/{id}/notes/{noteId} | Обновить Событие Заказа поставщику
*PurchaseOrdersApi* | [**updatePurchaseOrderPosition**](docs/Api/PurchaseOrdersApi.md#updatepurchaseorderposition) | **PUT** /entity/purchaseorder/{id}/positions/{positionId} | Изменить позицию PurchaseOrder
*RegionsApi* | [**getRegionById**](docs/Api/RegionsApi.md#getregionbyid) | **GET** /entity/region/{id} | Получить регион по ID
*RegionsApi* | [**getRegions**](docs/Api/RegionsApi.md#getregions) | **GET** /entity/region | Получить список регионов
*RetailDrawerCashInsApi* | [**addRetailDrawerCashInFiles**](docs/Api/RetailDrawerCashInsApi.md#addretaildrawercashinfiles) | **POST** /entity/retaildrawercashin/{id}/files | Добавить файлы к внесению денег
*RetailDrawerCashInsApi* | [**createRetailDrawerCashIn**](docs/Api/RetailDrawerCashInsApi.md#createretaildrawercashin) | **POST** /entity/retaildrawercashin | Создать Внесение денег
*RetailDrawerCashInsApi* | [**createRetailDrawerCashInBatch**](docs/Api/RetailDrawerCashInsApi.md#createretaildrawercashinbatch) | **POST** /entity/retaildrawercashin/batch | Массовое создание и обновление Внесений денег
*RetailDrawerCashInsApi* | [**createRetailDrawerCashInMetadataAttribute**](docs/Api/RetailDrawerCashInsApi.md#createretaildrawercashinmetadataattribute) | **POST** /entity/retaildrawercashin/metadata/attributes | Создать доп. поле Внесений денег
*RetailDrawerCashInsApi* | [**createRetailDrawerCashInMetadataState**](docs/Api/RetailDrawerCashInsApi.md#createretaildrawercashinmetadatastate) | **POST** /entity/retaildrawercashin/metadata/states | Создать статус Внесений денег
*RetailDrawerCashInsApi* | [**deleteRetailDrawerCashIn**](docs/Api/RetailDrawerCashInsApi.md#deleteretaildrawercashin) | **DELETE** /entity/retaildrawercashin/{id} | Удалить Внесение денег
*RetailDrawerCashInsApi* | [**deleteRetailDrawerCashInBatch**](docs/Api/RetailDrawerCashInsApi.md#deleteretaildrawercashinbatch) | **POST** /entity/retaildrawercashin/delete | Массовое удаление Внесений денег
*RetailDrawerCashInsApi* | [**deleteRetailDrawerCashInFile**](docs/Api/RetailDrawerCashInsApi.md#deleteretaildrawercashinfile) | **DELETE** /entity/retaildrawercashin/{id}/files/{fileId} | Удалить файл внесения денег
*RetailDrawerCashInsApi* | [**deleteRetailDrawerCashInMetadataAttributeById**](docs/Api/RetailDrawerCashInsApi.md#deleteretaildrawercashinmetadataattributebyid) | **DELETE** /entity/retaildrawercashin/metadata/attributes/{id} | Удалить отдельное доп. поле Внесений денег
*RetailDrawerCashInsApi* | [**deleteRetailDrawerCashInMetadataStateById**](docs/Api/RetailDrawerCashInsApi.md#deleteretaildrawercashinmetadatastatebyid) | **DELETE** /entity/retaildrawercashin/metadata/states/{id} | Удалить отдельный статус Внесений денег
*RetailDrawerCashInsApi* | [**getRetailDrawerCashInById**](docs/Api/RetailDrawerCashInsApi.md#getretaildrawercashinbyid) | **GET** /entity/retaildrawercashin/{id} | Получить Внесение денег
*RetailDrawerCashInsApi* | [**getRetailDrawerCashInFiles**](docs/Api/RetailDrawerCashInsApi.md#getretaildrawercashinfiles) | **GET** /entity/retaildrawercashin/{id}/files | Получить файлы внесения денег
*RetailDrawerCashInsApi* | [**getRetailDrawerCashInList**](docs/Api/RetailDrawerCashInsApi.md#getretaildrawercashinlist) | **GET** /entity/retaildrawercashin | Получить список Внесений денег
*RetailDrawerCashInsApi* | [**getRetailDrawerCashInMetadata**](docs/Api/RetailDrawerCashInsApi.md#getretaildrawercashinmetadata) | **GET** /entity/retaildrawercashin/metadata | Метаданные Внесений денег
*RetailDrawerCashInsApi* | [**getRetailDrawerCashInMetadataAttribute**](docs/Api/RetailDrawerCashInsApi.md#getretaildrawercashinmetadataattribute) | **GET** /entity/retaildrawercashin/metadata/attributes | Доп. поля Внесений денег
*RetailDrawerCashInsApi* | [**getRetailDrawerCashInMetadataAttributeById**](docs/Api/RetailDrawerCashInsApi.md#getretaildrawercashinmetadataattributebyid) | **GET** /entity/retaildrawercashin/metadata/attributes/{id} | Отдельное доп. поле Внесений денег
*RetailDrawerCashInsApi* | [**getRetailDrawerCashInMetadataStateById**](docs/Api/RetailDrawerCashInsApi.md#getretaildrawercashinmetadatastatebyid) | **GET** /entity/retaildrawercashin/metadata/states/{id} | Отдельный статус Внесений денег
*RetailDrawerCashInsApi* | [**getRetailDrawerCashInTemplate**](docs/Api/RetailDrawerCashInsApi.md#getretaildrawercashintemplate) | **PUT** /entity/retaildrawercashin/new | Шаблон Внесения денег
*RetailDrawerCashInsApi* | [**updateRetailDrawerCashIn**](docs/Api/RetailDrawerCashInsApi.md#updateretaildrawercashin) | **PUT** /entity/retaildrawercashin/{id} | Изменить Внесение денег
*RetailDrawerCashInsApi* | [**updateRetailDrawerCashInMetadataAttributeById**](docs/Api/RetailDrawerCashInsApi.md#updateretaildrawercashinmetadataattributebyid) | **PUT** /entity/retaildrawercashin/metadata/attributes/{id} | Обновить отдельное доп. поле Внесений денег
*RetailDrawerCashInsApi* | [**updateRetailDrawerCashInMetadataStateById**](docs/Api/RetailDrawerCashInsApi.md#updateretaildrawercashinmetadatastatebyid) | **PUT** /entity/retaildrawercashin/metadata/states/{id} | Обновить отдельный статус Внесений денег
*RetailStoresApi* | [**addMasterRetailStore**](docs/Api/RetailStoresApi.md#addmasterretailstore) | **POST** /entity/retailstore/{retailStoreId}/masterRetailStores | Добавить мастер точку продаж
*RetailStoresApi* | [**createRetailStore**](docs/Api/RetailStoresApi.md#createretailstore) | **POST** /entity/retailstore | Создать точку продаж
*RetailStoresApi* | [**createRetailStoresBatch**](docs/Api/RetailStoresApi.md#createretailstoresbatch) | **POST** /entity/retailstore/batch | Массовое создание и обновление точек продаж
*RetailStoresApi* | [**deleteRetailStore**](docs/Api/RetailStoresApi.md#deleteretailstore) | **DELETE** /entity/retailstore/{id} | Удалить точку продаж
*RetailStoresApi* | [**deleteRetailStoresBatch**](docs/Api/RetailStoresApi.md#deleteretailstoresbatch) | **POST** /entity/retailstore/delete | Массовое удаление точек продаж
*RetailStoresApi* | [**getMasterRetailStores**](docs/Api/RetailStoresApi.md#getmasterretailstores) | **GET** /entity/retailstore/{retailStoreId}/masterRetailStores | Получить мастер точки продаж
*RetailStoresApi* | [**getRetailStoreById**](docs/Api/RetailStoresApi.md#getretailstorebyid) | **GET** /entity/retailstore/{id} | Получить точку продаж
*RetailStoresApi* | [**getRetailStores**](docs/Api/RetailStoresApi.md#getretailstores) | **GET** /entity/retailstore | Получить точки продаж
*RetailStoresApi* | [**updateRetailStore**](docs/Api/RetailStoresApi.md#updateretailstore) | **PUT** /entity/retailstore/{id} | Изменить точку продаж
*SalePlatformsApi* | [**getSalePlatformById**](docs/Api/SalePlatformsApi.md#getsaleplatformbyid) | **GET** /entity/saleplatform/{id} | Получить Площадку для продаж по ID
*SalePlatformsApi* | [**getSalePlatforms**](docs/Api/SalePlatformsApi.md#getsaleplatforms) | **GET** /entity/saleplatform | Получить список площадок для продаж
*SalesChannelsApi* | [**createSalesChannel**](docs/Api/SalesChannelsApi.md#createsaleschannel) | **POST** /entity/saleschannel | Создать Канал продаж
*SalesChannelsApi* | [**createSalesChannelsBatch**](docs/Api/SalesChannelsApi.md#createsaleschannelsbatch) | **POST** /entity/saleschannel/batch | Создать или изменить Каналы продаж
*SalesChannelsApi* | [**deleteSalesChannel**](docs/Api/SalesChannelsApi.md#deletesaleschannel) | **DELETE** /entity/saleschannel/{id} | Удалить Канал продаж
*SalesChannelsApi* | [**deleteSalesChannelsBatch**](docs/Api/SalesChannelsApi.md#deletesaleschannelsbatch) | **POST** /entity/saleschannel/delete | Удалить Каналы продаж
*SalesChannelsApi* | [**getSalesChannelById**](docs/Api/SalesChannelsApi.md#getsaleschannelbyid) | **GET** /entity/saleschannel/{id} | Получить Канал продаж по ID
*SalesChannelsApi* | [**getSalesChannels**](docs/Api/SalesChannelsApi.md#getsaleschannels) | **GET** /entity/saleschannel | Получить Каналы продаж
*SalesChannelsApi* | [**updateSalesChannel**](docs/Api/SalesChannelsApi.md#updatesaleschannel) | **PUT** /entity/saleschannel/{id} | Обновить Канал продаж
*ServicesApi* | [**addServiceFiles**](docs/Api/ServicesApi.md#addservicefiles) | **POST** /entity/service/{id}/files | Добавить файлы к услуге
*ServicesApi* | [**createService**](docs/Api/ServicesApi.md#createservice) | **POST** /entity/service | Создать услугу
*ServicesApi* | [**createServicesBatch**](docs/Api/ServicesApi.md#createservicesbatch) | **POST** /entity/service/batch | Создать или изменить услуги
*ServicesApi* | [**deleteService**](docs/Api/ServicesApi.md#deleteservice) | **DELETE** /entity/service/{id} | Удалить услугу
*ServicesApi* | [**deleteServiceFile**](docs/Api/ServicesApi.md#deleteservicefile) | **DELETE** /entity/service/{id}/files/{fileId} | Удалить файл услуги
*ServicesApi* | [**deleteServicesBatch**](docs/Api/ServicesApi.md#deleteservicesbatch) | **POST** /entity/service/delete | Удалить услугу
*ServicesApi* | [**getServiceById**](docs/Api/ServicesApi.md#getservicebyid) | **GET** /entity/service/{id} | Получить услугу по ID
*ServicesApi* | [**getServiceFiles**](docs/Api/ServicesApi.md#getservicefiles) | **GET** /entity/service/{id}/files | Получить файлы услуги
*ServicesApi* | [**getServices**](docs/Api/ServicesApi.md#getservices) | **GET** /entity/service | Получить список товаров
*ServicesApi* | [**updateService**](docs/Api/ServicesApi.md#updateservice) | **PUT** /entity/service/{id} | Обновить услугу
*StoresApi* | [**createStore**](docs/Api/StoresApi.md#createstore) | **POST** /entity/store | Создать Склад
*StoresApi* | [**createStoreMetadataAttribute**](docs/Api/StoresApi.md#createstoremetadataattribute) | **POST** /entity/store/metadata/attributes | Создать Доп. поле Store
*StoresApi* | [**createStoreSlots**](docs/Api/StoresApi.md#createstoreslots) | **POST** /entity/store/{storeId}/slots | Создать ячейку склада
*StoresApi* | [**createStoreZones**](docs/Api/StoresApi.md#createstorezones) | **POST** /entity/store/{storeId}/zones | Создать зону склада
*StoresApi* | [**createStoresBatch**](docs/Api/StoresApi.md#createstoresbatch) | **POST** /entity/store/batch | Массовое создание и обновление Складов
*StoresApi* | [**deleteStore**](docs/Api/StoresApi.md#deletestore) | **DELETE** /entity/store/{id} | Удалить Склад
*StoresApi* | [**deleteStoreSlot**](docs/Api/StoresApi.md#deletestoreslot) | **DELETE** /entity/store/{storeId}/slots/{id} | Удалить ячейку склада
*StoresApi* | [**deleteStoreSlotsBatch**](docs/Api/StoresApi.md#deletestoreslotsbatch) | **POST** /entity/store/{storeId}/slots/delete | Массовое удаление ячеек склада
*StoresApi* | [**deleteStoreZone**](docs/Api/StoresApi.md#deletestorezone) | **DELETE** /entity/store/{storeId}/zones/{id} | Удалить зону склада
*StoresApi* | [**deleteStoreZonesBatch**](docs/Api/StoresApi.md#deletestorezonesbatch) | **POST** /entity/store/{storeId}/zones/delete | Массовое удаление зон склада
*StoresApi* | [**deleteStoresBatch**](docs/Api/StoresApi.md#deletestoresbatch) | **POST** /entity/store/delete | Массовое удаление Складов
*StoresApi* | [**getStoreById**](docs/Api/StoresApi.md#getstorebyid) | **GET** /entity/store/{id} | Получить Склад
*StoresApi* | [**getStoreMetadata**](docs/Api/StoresApi.md#getstoremetadata) | **GET** /entity/store/metadata | Метаданные Складов
*StoresApi* | [**getStoreMetadataAttribute**](docs/Api/StoresApi.md#getstoremetadataattribute) | **GET** /entity/store/metadata/attributes | Доп. поля Store
*StoresApi* | [**getStoreMetadataAttributeById**](docs/Api/StoresApi.md#getstoremetadataattributebyid) | **GET** /entity/store/metadata/attributes/{id} | Отдельное доп. поле Склада
*StoresApi* | [**getStoreSlotById**](docs/Api/StoresApi.md#getstoreslotbyid) | **GET** /entity/store/{storeId}/slots/{id} | Получить ячейку склада
*StoresApi* | [**getStoreSlots**](docs/Api/StoresApi.md#getstoreslots) | **GET** /entity/store/{storeId}/slots | Получить ячейки склада
*StoresApi* | [**getStoreZoneById**](docs/Api/StoresApi.md#getstorezonebyid) | **GET** /entity/store/{storeId}/zones/{id} | Получить зону склада
*StoresApi* | [**getStoreZones**](docs/Api/StoresApi.md#getstorezones) | **GET** /entity/store/{storeId}/zones | Получить зоны склада
*StoresApi* | [**getStores**](docs/Api/StoresApi.md#getstores) | **GET** /entity/store | Получить Склады
*StoresApi* | [**updateStore**](docs/Api/StoresApi.md#updatestore) | **PUT** /entity/store/{id} | Изменить Склад
*StoresApi* | [**updateStoreSlot**](docs/Api/StoresApi.md#updatestoreslot) | **PUT** /entity/store/{storeId}/slots/{id} | Изменить ячейку склада
*StoresApi* | [**updateStoreZone**](docs/Api/StoresApi.md#updatestorezone) | **PUT** /entity/store/{storeId}/zones/{id} | Изменить зону склада
*SubscriptionsApi* | [**getSubscription**](docs/Api/SubscriptionsApi.md#getsubscription) | **GET** /accountSettings/subscription | Получить Подписку компании
*TasksApi* | [**createTask**](docs/Api/TasksApi.md#createtask) | **POST** /entity/task | Создать задачу
*TasksApi* | [**createTaskMetadataStates**](docs/Api/TasksApi.md#createtaskmetadatastates) | **POST** /entity/task/metadata/states | Создать или изменить типы задач
*TasksApi* | [**createTaskNote**](docs/Api/TasksApi.md#createtasknote) | **POST** /entity/task/{id}/notes | Создать комментарий Задачи
*TasksApi* | [**createTaskNotesBatch**](docs/Api/TasksApi.md#createtasknotesbatch) | **POST** /entity/task/{id}/notes/batch | Создать комментарии Задачи
*TasksApi* | [**createTasksBatch**](docs/Api/TasksApi.md#createtasksbatch) | **POST** /entity/task/batch | Создать или изменить задачи
*TasksApi* | [**deleteTask**](docs/Api/TasksApi.md#deletetask) | **DELETE** /entity/task/{id} | Удалить задачу
*TasksApi* | [**deleteTaskMetadataStateById**](docs/Api/TasksApi.md#deletetaskmetadatastatebyid) | **DELETE** /entity/task/metadata/states/{id} | Удалить тип задачи
*TasksApi* | [**deleteTaskNote**](docs/Api/TasksApi.md#deletetasknote) | **DELETE** /entity/task/{id}/notes/{noteId} | Удалить комментарий к Задаче
*TasksApi* | [**deleteTaskNotesBatch**](docs/Api/TasksApi.md#deletetasknotesbatch) | **POST** /entity/task/{id}/notes/delete | Удалить комментарии к Задаче
*TasksApi* | [**deleteTasksBatch**](docs/Api/TasksApi.md#deletetasksbatch) | **POST** /entity/task/delete | Удалить задачи
*TasksApi* | [**getTaskById**](docs/Api/TasksApi.md#gettaskbyid) | **GET** /entity/task/{id} | Получить задачу по ID
*TasksApi* | [**getTaskMetadata**](docs/Api/TasksApi.md#gettaskmetadata) | **GET** /entity/task/metadata | Получить метаданные задач
*TasksApi* | [**getTaskNoteById**](docs/Api/TasksApi.md#gettasknotebyid) | **GET** /entity/task/{id}/notes/{noteId} | Получить комментарий к Задаче по ID
*TasksApi* | [**getTaskNotes**](docs/Api/TasksApi.md#gettasknotes) | **GET** /entity/task/{id}/notes | Получить комментарии Задачи
*TasksApi* | [**getTasks**](docs/Api/TasksApi.md#gettasks) | **GET** /entity/task | Получить список задач
*TasksApi* | [**updateTask**](docs/Api/TasksApi.md#updatetask) | **PUT** /entity/task/{id} | Обновить задачу
*TasksApi* | [**updateTaskMetadataStateById**](docs/Api/TasksApi.md#updatetaskmetadatastatebyid) | **PUT** /entity/task/metadata/states/{id} | Обновить тип задачи
*TasksApi* | [**updateTaskNote**](docs/Api/TasksApi.md#updatetasknote) | **PUT** /entity/task/{id}/notes/{noteId} | Обновить комментарий к Задаче
*TaxRatesApi* | [**createTaxRate**](docs/Api/TaxRatesApi.md#createtaxrate) | **POST** /entity/taxrate | Создать ставку НДС
*TaxRatesApi* | [**createTaxRatesBatch**](docs/Api/TaxRatesApi.md#createtaxratesbatch) | **POST** /entity/taxrate/batch | Создать или изменить ставки НДС
*TaxRatesApi* | [**deleteTaxRate**](docs/Api/TaxRatesApi.md#deletetaxrate) | **DELETE** /entity/taxrate/{id} | Удалить ставку НДС
*TaxRatesApi* | [**deleteTaxRatesBatch**](docs/Api/TaxRatesApi.md#deletetaxratesbatch) | **POST** /entity/taxrate/delete | Удалить ставки НДС
*TaxRatesApi* | [**getTaxRateById**](docs/Api/TaxRatesApi.md#gettaxratebyid) | **GET** /entity/taxrate/{id} | Получить ставку НДС по ID
*TaxRatesApi* | [**getTaxRates**](docs/Api/TaxRatesApi.md#gettaxrates) | **GET** /entity/taxrate | Получить список ставок НДС
*TaxRatesApi* | [**updateTaxRate**](docs/Api/TaxRatesApi.md#updatetaxrate) | **PUT** /entity/taxrate/{id} | Обновить ставку НДС
*ThingsApi* | [**getThingById**](docs/Api/ThingsApi.md#getthingbyid) | **GET** /entity/thing/{id} | Получить Серийный номер
*ThingsApi* | [**getThings**](docs/Api/ThingsApi.md#getthings) | **GET** /entity/thing | Получить Серийные номера
*UomsApi* | [**createUom**](docs/Api/UomsApi.md#createuom) | **POST** /entity/uom | Создать единицу измерения
*UomsApi* | [**createUomsBatch**](docs/Api/UomsApi.md#createuomsbatch) | **POST** /entity/uom/batch | Создать или изменить единицу измерения
*UomsApi* | [**deleteUom**](docs/Api/UomsApi.md#deleteuom) | **DELETE** /entity/uom/{id} | Удалить единицу измерения
*UomsApi* | [**deleteUomsBatch**](docs/Api/UomsApi.md#deleteuomsbatch) | **POST** /entity/uom/delete | Удалить единицу измерения
*UomsApi* | [**getUomById**](docs/Api/UomsApi.md#getuombyid) | **GET** /entity/uom/{id} | Получить единицу измерения по ID
*UomsApi* | [**getUoms**](docs/Api/UomsApi.md#getuoms) | **GET** /entity/uom | Получить список единиц измерения
*UomsApi* | [**updateUom**](docs/Api/UomsApi.md#updateuom) | **PUT** /entity/uom/{id} | Обновить единицы измерения
*UserSettingsApi* | [**getUserSettings**](docs/Api/UserSettingsApi.md#getusersettings) | **GET** /context/usersettings | Получить настройки пользователя
*UserSettingsApi* | [**updateUserSettings**](docs/Api/UserSettingsApi.md#updateusersettings) | **PUT** /context/usersettings | Изменить настройки пользователя
*VariantCharacteristicsApi* | [**createVariantCharacteristic**](docs/Api/VariantCharacteristicsApi.md#createvariantcharacteristic) | **POST** /entity/variant/metadata/characteristics | Создать Характеристику модификаций
*VariantCharacteristicsApi* | [**getVariantCharacteristicById**](docs/Api/VariantCharacteristicsApi.md#getvariantcharacteristicbyid) | **GET** /entity/variant/metadata/characteristics/{id} | Получить Характеристику модификаций
*VariantCharacteristicsApi* | [**getVariantCharacteristics**](docs/Api/VariantCharacteristicsApi.md#getvariantcharacteristics) | **GET** /entity/variant/metadata/characteristics | Получить список Характеристики модификаций
*VariantsApi* | [**createVariant**](docs/Api/VariantsApi.md#createvariant) | **POST** /entity/variant | Создать Модификацию
*VariantsApi* | [**createVariantsBatch**](docs/Api/VariantsApi.md#createvariantsbatch) | **POST** /entity/variant/batch | Массовое создание и обновление Модификаций
*VariantsApi* | [**deleteVariant**](docs/Api/VariantsApi.md#deletevariant) | **DELETE** /entity/variant/{id} | Удалить Модификацию
*VariantsApi* | [**deleteVariantsBatch**](docs/Api/VariantsApi.md#deletevariantsbatch) | **POST** /entity/variant/delete | Массовое удаление Модификаций
*VariantsApi* | [**getVariantById**](docs/Api/VariantsApi.md#getvariantbyid) | **GET** /entity/variant/{id} | Получить Модификацию
*VariantsApi* | [**getVariantMetadata**](docs/Api/VariantsApi.md#getvariantmetadata) | **GET** /entity/variant/metadata | Метаданные Модификаций
*VariantsApi* | [**getVariants**](docs/Api/VariantsApi.md#getvariants) | **GET** /entity/variant | Получить список Модификаций
*VariantsApi* | [**updateVariant**](docs/Api/VariantsApi.md#updatevariant) | **PUT** /entity/variant/{id} | Изменить Модификацию
*WebhookStocksApi* | [**createOrUpdateWebhookStocksBatch**](docs/Api/WebhookStocksApi.md#createorupdatewebhookstocksbatch) | **POST** /entity/webhookstock/batch | Массово создать/обновить вебхуки на изменение остатков
*WebhookStocksApi* | [**createWebhookStock**](docs/Api/WebhookStocksApi.md#createwebhookstock) | **POST** /entity/webhookstock | Создать вебхук на изменение остатков
*WebhookStocksApi* | [**deleteWebhookStock**](docs/Api/WebhookStocksApi.md#deletewebhookstock) | **DELETE** /entity/webhookstock/{id} | Удалить вебхук на изменение остатков
*WebhookStocksApi* | [**deleteWebhookStocksBatch**](docs/Api/WebhookStocksApi.md#deletewebhookstocksbatch) | **POST** /entity/webhookstock/delete | Массовое удаление вебхуков на изменение остатков
*WebhookStocksApi* | [**getWebhookStockById**](docs/Api/WebhookStocksApi.md#getwebhookstockbyid) | **GET** /entity/webhookstock/{id} | Получить вебхук на изменение остатков по ID
*WebhookStocksApi* | [**getWebhookStocks**](docs/Api/WebhookStocksApi.md#getwebhookstocks) | **GET** /entity/webhookstock | Получить список вебхуков на изменение остатков
*WebhookStocksApi* | [**updateWebhookStock**](docs/Api/WebhookStocksApi.md#updatewebhookstock) | **PUT** /entity/webhookstock/{id} | Изменить вебхук на изменение остатков
*WebhooksApi* | [**createOrUpdateWebhooksBatch**](docs/Api/WebhooksApi.md#createorupdatewebhooksbatch) | **POST** /entity/webhook/batch | Массовое создание и обновление вебхуков
*WebhooksApi* | [**createWebhook**](docs/Api/WebhooksApi.md#createwebhook) | **POST** /entity/webhook | Создать вебхук
*WebhooksApi* | [**deleteWebhook**](docs/Api/WebhooksApi.md#deletewebhook) | **DELETE** /entity/webhook/{id} | Удалить вебхук
*WebhooksApi* | [**deleteWebhooksBatch**](docs/Api/WebhooksApi.md#deletewebhooksbatch) | **POST** /entity/webhook/delete | Массовое удаление вебхуков
*WebhooksApi* | [**getWebhookById**](docs/Api/WebhooksApi.md#getwebhookbyid) | **GET** /entity/webhook/{id} | Получить вебхук по ID
*WebhooksApi* | [**getWebhooks**](docs/Api/WebhooksApi.md#getwebhooks) | **GET** /entity/webhook | Получить список вебхуков
*WebhooksApi* | [**updateWebhook**](docs/Api/WebhooksApi.md#updatewebhook) | **PUT** /entity/webhook/{id} | Изменить вебхук

## Models

- [Account](docs/Model/Account.md)
- [AccumulationDiscount](docs/Model/AccumulationDiscount.md)
- [ActivateEmployee200Response](docs/Model/ActivateEmployee200Response.md)
- [ActivateEmployeeRequest](docs/Model/ActivateEmployeeRequest.md)
- [ActivateEmployeeRequestGroup](docs/Model/ActivateEmployeeRequestGroup.md)
- [AddProductImagesRequest](docs/Model/AddProductImagesRequest.md)
- [Address](docs/Model/Address.md)
- [AgentDiscount](docs/Model/AgentDiscount.md)
- [Application](docs/Model/Application.md)
- [Assortment](docs/Model/Assortment.md)
- [AssortmentList](docs/Model/AssortmentList.md)
- [AssortmentSettings](docs/Model/AssortmentSettings.md)
- [AssortmentSettingsBarcodeRules](docs/Model/AssortmentSettingsBarcodeRules.md)
- [AssortmentSettingsUniqueCodeRules](docs/Model/AssortmentSettingsUniqueCodeRules.md)
- [AssortmentWithoutBundle](docs/Model/AssortmentWithoutBundle.md)
- [AttributeAbstract](docs/Model/AttributeAbstract.md)
- [AttributeBool](docs/Model/AttributeBool.md)
- [AttributeCustomEntity](docs/Model/AttributeCustomEntity.md)
- [AttributeDateTime](docs/Model/AttributeDateTime.md)
- [AttributeDouble](docs/Model/AttributeDouble.md)
- [AttributeFile](docs/Model/AttributeFile.md)
- [AttributeLink](docs/Model/AttributeLink.md)
- [AttributeLong](docs/Model/AttributeLong.md)
- [AttributeMetaField](docs/Model/AttributeMetaField.md)
- [AttributeMetaInfo](docs/Model/AttributeMetaInfo.md)
- [AttributeMetaInfoList](docs/Model/AttributeMetaInfoList.md)
- [AttributeObject](docs/Model/AttributeObject.md)
- [AttributeString](docs/Model/AttributeString.md)
- [AttributeText](docs/Model/AttributeText.md)
- [Barcode](docs/Model/Barcode.md)
- [BonusProgram](docs/Model/BonusProgram.md)
- [BonusProgramList](docs/Model/BonusProgramList.md)
- [BonusTransaction](docs/Model/BonusTransaction.md)
- [BonusTransactionList](docs/Model/BonusTransactionList.md)
- [BonusTransactionParentDocument](docs/Model/BonusTransactionParentDocument.md)
- [Bundle](docs/Model/Bundle.md)
- [BundleComponent](docs/Model/BundleComponent.md)
- [BundleComponentList](docs/Model/BundleComponentList.md)
- [BundleList](docs/Model/BundleList.md)
- [BundleOverhead](docs/Model/BundleOverhead.md)
- [BuyPrice](docs/Model/BuyPrice.md)
- [CashIn](docs/Model/CashIn.md)
- [CashInList](docs/Model/CashInList.md)
- [CashInOperation](docs/Model/CashInOperation.md)
- [CashInOperationAnyOf](docs/Model/CashInOperationAnyOf.md)
- [CashInOperationAnyOf1](docs/Model/CashInOperationAnyOf1.md)
- [CashInOperationAnyOf2](docs/Model/CashInOperationAnyOf2.md)
- [CashInOperationAnyOf3](docs/Model/CashInOperationAnyOf3.md)
- [CashInOperationAnyOf4](docs/Model/CashInOperationAnyOf4.md)
- [CashInOperationAnyOf5](docs/Model/CashInOperationAnyOf5.md)
- [CashInOperationLinkedSum](docs/Model/CashInOperationLinkedSum.md)
- [CashOut](docs/Model/CashOut.md)
- [CashOutList](docs/Model/CashOutList.md)
- [CashOutOperation](docs/Model/CashOutOperation.md)
- [CashOutOperationAnyOf](docs/Model/CashOutOperationAnyOf.md)
- [CashOutOperationAnyOf1](docs/Model/CashOutOperationAnyOf1.md)
- [CashOutOperationAnyOf2](docs/Model/CashOutOperationAnyOf2.md)
- [CashOutOperationAnyOf3](docs/Model/CashOutOperationAnyOf3.md)
- [CashOutOperationAnyOf4](docs/Model/CashOutOperationAnyOf4.md)
- [CashOutOperationLinkedSum](docs/Model/CashOutOperationLinkedSum.md)
- [Cashier](docs/Model/Cashier.md)
- [CashierList](docs/Model/CashierList.md)
- [CategoryType](docs/Model/CategoryType.md)
- [CommissionReportIn](docs/Model/CommissionReportIn.md)
- [CommissionReportInCommissionOverhead](docs/Model/CommissionReportInCommissionOverhead.md)
- [CommissionReportInList](docs/Model/CommissionReportInList.md)
- [CommissionReportInPosition](docs/Model/CommissionReportInPosition.md)
- [CommissionReportInPositionList](docs/Model/CommissionReportInPositionList.md)
- [CommissionReportInReturnedPosition](docs/Model/CommissionReportInReturnedPosition.md)
- [CommissionReportInReturnedPositionList](docs/Model/CommissionReportInReturnedPositionList.md)
- [CommissionReportOut](docs/Model/CommissionReportOut.md)
- [CompanySettings](docs/Model/CompanySettings.md)
- [CompanySettingsMetadata](docs/Model/CompanySettingsMetadata.md)
- [CompanyType](docs/Model/CompanyType.md)
- [Consignment](docs/Model/Consignment.md)
- [ConsignmentList](docs/Model/ConsignmentList.md)
- [ContactPerson](docs/Model/ContactPerson.md)
- [Context](docs/Model/Context.md)
- [Contract](docs/Model/Contract.md)
- [ContractList](docs/Model/ContractList.md)
- [ContractType](docs/Model/ContractType.md)
- [CostDistributionType](docs/Model/CostDistributionType.md)
- [Counterparty](docs/Model/Counterparty.md)
- [CounterpartyAccounts](docs/Model/CounterpartyAccounts.md)
- [CounterpartyContactpersons](docs/Model/CounterpartyContactpersons.md)
- [CounterpartyList](docs/Model/CounterpartyList.md)
- [CounterpartyMetadata](docs/Model/CounterpartyMetadata.md)
- [CounterpartyNotes](docs/Model/CounterpartyNotes.md)
- [Country](docs/Model/Country.md)
- [CountryList](docs/Model/CountryList.md)
- [CreateBonusTransaction200Response](docs/Model/CreateBonusTransaction200Response.md)
- [CreateBonusTransactionRequest](docs/Model/CreateBonusTransactionRequest.md)
- [CreateBundleComponentsRequest](docs/Model/CreateBundleComponentsRequest.md)
- [CreateBundlesBatch200ResponseInner](docs/Model/CreateBundlesBatch200ResponseInner.md)
- [CreateCashInBatch200ResponseInner](docs/Model/CreateCashInBatch200ResponseInner.md)
- [CreateCashOutBatch200ResponseInner](docs/Model/CreateCashOutBatch200ResponseInner.md)
- [CreateCommissionReportInBatch200ResponseInner](docs/Model/CreateCommissionReportInBatch200ResponseInner.md)
- [CreateCommissionReportInPositions200ResponseInner](docs/Model/CreateCommissionReportInPositions200ResponseInner.md)
- [CreateCommissionReportInPositionsRequest](docs/Model/CreateCommissionReportInPositionsRequest.md)
- [CreateCommissionReportInReturnedPositions200ResponseInner](docs/Model/CreateCommissionReportInReturnedPositions200ResponseInner.md)
- [CreateCommissionReportInReturnedPositionsRequest](docs/Model/CreateCommissionReportInReturnedPositionsRequest.md)
- [CreateConsignmentsBatch200ResponseInner](docs/Model/CreateConsignmentsBatch200ResponseInner.md)
- [CreateContractsBatch200ResponseInner](docs/Model/CreateContractsBatch200ResponseInner.md)
- [CreateCounterpartiesBatch200ResponseInner](docs/Model/CreateCounterpartiesBatch200ResponseInner.md)
- [CreateCountriesBatch200ResponseInner](docs/Model/CreateCountriesBatch200ResponseInner.md)
- [CreateCurrenciesBatch200ResponseInner](docs/Model/CreateCurrenciesBatch200ResponseInner.md)
- [CreateCustomerOrderBatch200ResponseInner](docs/Model/CreateCustomerOrderBatch200ResponseInner.md)
- [CreateCustomerOrderPositions200ResponseInner](docs/Model/CreateCustomerOrderPositions200ResponseInner.md)
- [CreateCustomerOrderPositionsRequest](docs/Model/CreateCustomerOrderPositionsRequest.md)
- [CreateDemandBatch200ResponseInner](docs/Model/CreateDemandBatch200ResponseInner.md)
- [CreateDemandPositions200ResponseInner](docs/Model/CreateDemandPositions200ResponseInner.md)
- [CreateDemandPositionsRequest](docs/Model/CreateDemandPositionsRequest.md)
- [CreateEmissionOrderBatch200ResponseInner](docs/Model/CreateEmissionOrderBatch200ResponseInner.md)
- [CreateEmissionOrderPositionsBatch200ResponseInner](docs/Model/CreateEmissionOrderPositionsBatch200ResponseInner.md)
- [CreateEmployeesBatch200ResponseInner](docs/Model/CreateEmployeesBatch200ResponseInner.md)
- [CreateExpenseItemsBatch200ResponseInner](docs/Model/CreateExpenseItemsBatch200ResponseInner.md)
- [CreateInternalOrderBatch200ResponseInner](docs/Model/CreateInternalOrderBatch200ResponseInner.md)
- [CreateInternalOrderMetadataStateRequest](docs/Model/CreateInternalOrderMetadataStateRequest.md)
- [CreateInternalOrderPositions200ResponseInner](docs/Model/CreateInternalOrderPositions200ResponseInner.md)
- [CreateInternalOrderPositionsRequest](docs/Model/CreateInternalOrderPositionsRequest.md)
- [CreateOrUpdateWebhookStocksBatch200ResponseInner](docs/Model/CreateOrUpdateWebhookStocksBatch200ResponseInner.md)
- [CreateOrUpdateWebhooksBatch200ResponseInner](docs/Model/CreateOrUpdateWebhooksBatch200ResponseInner.md)
- [CreateOrganizationsBatch200ResponseInner](docs/Model/CreateOrganizationsBatch200ResponseInner.md)
- [CreatePriceTypesBatch200ResponseInner](docs/Model/CreatePriceTypesBatch200ResponseInner.md)
- [CreateProcessingPlanBatch200ResponseInner](docs/Model/CreateProcessingPlanBatch200ResponseInner.md)
- [CreateProcessingPlanFoldersBatch200ResponseInner](docs/Model/CreateProcessingPlanFoldersBatch200ResponseInner.md)
- [CreateProcessingProcessesBatch200ResponseInner](docs/Model/CreateProcessingProcessesBatch200ResponseInner.md)
- [CreateProcessingStagesBatch200ResponseInner](docs/Model/CreateProcessingStagesBatch200ResponseInner.md)
- [CreateProductFoldersBatch200ResponseInner](docs/Model/CreateProductFoldersBatch200ResponseInner.md)
- [CreateProductsBatch200ResponseInner](docs/Model/CreateProductsBatch200ResponseInner.md)
- [CreateProjectsBatch200ResponseInner](docs/Model/CreateProjectsBatch200ResponseInner.md)
- [CreatePurchaseOrderBatch200ResponseInner](docs/Model/CreatePurchaseOrderBatch200ResponseInner.md)
- [CreatePurchaseOrderPositions200ResponseInner](docs/Model/CreatePurchaseOrderPositions200ResponseInner.md)
- [CreatePurchaseOrderPositionsRequest](docs/Model/CreatePurchaseOrderPositionsRequest.md)
- [CreateRetailDrawerCashInBatch200ResponseInner](docs/Model/CreateRetailDrawerCashInBatch200ResponseInner.md)
- [CreateRetailStoresBatch200ResponseInner](docs/Model/CreateRetailStoresBatch200ResponseInner.md)
- [CreateSalesChannelsBatch200ResponseInner](docs/Model/CreateSalesChannelsBatch200ResponseInner.md)
- [CreateServicesBatch200ResponseInner](docs/Model/CreateServicesBatch200ResponseInner.md)
- [CreateStoreSlotsRequest](docs/Model/CreateStoreSlotsRequest.md)
- [CreateStoreZonesRequest](docs/Model/CreateStoreZonesRequest.md)
- [CreateStoresBatch200ResponseInner](docs/Model/CreateStoresBatch200ResponseInner.md)
- [CreateTaskMetadataStates200Response](docs/Model/CreateTaskMetadataStates200Response.md)
- [CreateTaskMetadataStates200ResponseOneOfInner](docs/Model/CreateTaskMetadataStates200ResponseOneOfInner.md)
- [CreateTaskMetadataStatesRequest](docs/Model/CreateTaskMetadataStatesRequest.md)
- [CreateTaskNotesBatch200ResponseInner](docs/Model/CreateTaskNotesBatch200ResponseInner.md)
- [CreateTasksBatch200ResponseInner](docs/Model/CreateTasksBatch200ResponseInner.md)
- [CreateTaxRatesBatch200ResponseInner](docs/Model/CreateTaxRatesBatch200ResponseInner.md)
- [CreateUomsBatch200ResponseInner](docs/Model/CreateUomsBatch200ResponseInner.md)
- [CreateVariantsBatch200ResponseInner](docs/Model/CreateVariantsBatch200ResponseInner.md)
- [Currency](docs/Model/Currency.md)
- [CurrencyList](docs/Model/CurrencyList.md)
- [CurrencyMajorUnit](docs/Model/CurrencyMajorUnit.md)
- [CurrencyMinorUnit](docs/Model/CurrencyMinorUnit.md)
- [CurrencyRate](docs/Model/CurrencyRate.md)
- [CustomEntity](docs/Model/CustomEntity.md)
- [CustomEntityElement](docs/Model/CustomEntityElement.md)
- [CustomEntityElementList](docs/Model/CustomEntityElementList.md)
- [CustomEntityMetadata](docs/Model/CustomEntityMetadata.md)
- [CustomerOrder](docs/Model/CustomerOrder.md)
- [CustomerOrderAgent](docs/Model/CustomerOrderAgent.md)
- [CustomerOrderList](docs/Model/CustomerOrderList.md)
- [CustomerOrderPaymentsInner](docs/Model/CustomerOrderPaymentsInner.md)
- [CustomerOrderPosition](docs/Model/CustomerOrderPosition.md)
- [CustomerOrderPositionList](docs/Model/CustomerOrderPositionList.md)
- [DefaultScreen](docs/Model/DefaultScreen.md)
- [DeleteContractsBatch200ResponseInner](docs/Model/DeleteContractsBatch200ResponseInner.md)
- [DeleteInfo](docs/Model/DeleteInfo.md)
- [DeleteProductImagesRequestInner](docs/Model/DeleteProductImagesRequestInner.md)
- [Demand](docs/Model/Demand.md)
- [DemandCarrier](docs/Model/DemandCarrier.md)
- [DemandConsignee](docs/Model/DemandConsignee.md)
- [DemandList](docs/Model/DemandList.md)
- [DemandOverhead](docs/Model/DemandOverhead.md)
- [DemandOverheadDistribution](docs/Model/DemandOverheadDistribution.md)
- [DemandPosition](docs/Model/DemandPosition.md)
- [DemandPositionDeclarationInner](docs/Model/DemandPositionDeclarationInner.md)
- [DemandPositionList](docs/Model/DemandPositionList.md)
- [DemandPositionTrackingCode](docs/Model/DemandPositionTrackingCode.md)
- [DemandPositionTrackingCode1162](docs/Model/DemandPositionTrackingCode1162.md)
- [DemandPositionTrackingCodeType](docs/Model/DemandPositionTrackingCodeType.md)
- [Discount](docs/Model/Discount.md)
- [DiscountAssortmentItem](docs/Model/DiscountAssortmentItem.md)
- [DiscountBase](docs/Model/DiscountBase.md)
- [DiscountList](docs/Model/DiscountList.md)
- [DiscountListRowsInner](docs/Model/DiscountListRowsInner.md)
- [DiscountStrategy](docs/Model/DiscountStrategy.md)
- [DocumentMetadata](docs/Model/DocumentMetadata.md)
- [EmbeddedTemplate](docs/Model/EmbeddedTemplate.md)
- [EmissionOrder](docs/Model/EmissionOrder.md)
- [EmissionOrderDocumentState](docs/Model/EmissionOrderDocumentState.md)
- [EmissionOrderEmissionType](docs/Model/EmissionOrderEmissionType.md)
- [EmissionOrderList](docs/Model/EmissionOrderList.md)
- [EmissionOrderPosition](docs/Model/EmissionOrderPosition.md)
- [EmissionOrderPositionList](docs/Model/EmissionOrderPositionList.md)
- [EmissionOrderPositionStatus](docs/Model/EmissionOrderPositionStatus.md)
- [Employee](docs/Model/Employee.md)
- [EmployeeList](docs/Model/EmployeeList.md)
- [EmployeeRole](docs/Model/EmployeeRole.md)
- [EmployeeSalary](docs/Model/EmployeeSalary.md)
- [EmployeeSecurity](docs/Model/EmployeeSecurity.md)
- [EmployeeSecurityGroup](docs/Model/EmployeeSecurityGroup.md)
- [Error](docs/Model/Error.md)
- [ErrorErrorsInner](docs/Model/ErrorErrorsInner.md)
- [ErrorOrArray](docs/Model/ErrorOrArray.md)
- [EventNote](docs/Model/EventNote.md)
- [EventNoteList](docs/Model/EventNoteList.md)
- [ExpenseItem](docs/Model/ExpenseItem.md)
- [ExpenseItemList](docs/Model/ExpenseItemList.md)
- [FactureIn](docs/Model/FactureIn.md)
- [FactureOut](docs/Model/FactureOut.md)
- [File](docs/Model/File.md)
- [FileList](docs/Model/FileList.md)
- [FileUpload](docs/Model/FileUpload.md)
- [FiscalType](docs/Model/FiscalType.md)
- [Gender](docs/Model/Gender.md)
- [GetCounterpartyAccounts200Response](docs/Model/GetCounterpartyAccounts200Response.md)
- [GetCounterpartyContactPersons200Response](docs/Model/GetCounterpartyContactPersons200Response.md)
- [GetCounterpartyNotes200Response](docs/Model/GetCounterpartyNotes200Response.md)
- [GetOrganizationAccounts200Response](docs/Model/GetOrganizationAccounts200Response.md)
- [GetProductFiles200Response](docs/Model/GetProductFiles200Response.md)
- [GetProductImages200Response](docs/Model/GetProductImages200Response.md)
- [GetVariantCharacteristics200Response](docs/Model/GetVariantCharacteristics200Response.md)
- [Group](docs/Model/Group.md)
- [GroupList](docs/Model/GroupList.md)
- [Image](docs/Model/Image.md)
- [ImageList](docs/Model/ImageList.md)
- [InternalOrder](docs/Model/InternalOrder.md)
- [InternalOrderList](docs/Model/InternalOrderList.md)
- [InternalOrderPosition](docs/Model/InternalOrderPosition.md)
- [InternalOrderPositionList](docs/Model/InternalOrderPositionList.md)
- [InvoiceIn](docs/Model/InvoiceIn.md)
- [InvoiceOut](docs/Model/InvoiceOut.md)
- [LabelPrintRequest](docs/Model/LabelPrintRequest.md)
- [Locale](docs/Model/Locale.md)
- [MarkingSellingMode](docs/Model/MarkingSellingMode.md)
- [MarksCheckMode](docs/Model/MarksCheckMode.md)
- [Meta](docs/Model/Meta.md)
- [MetaList](docs/Model/MetaList.md)
- [Metadata](docs/Model/Metadata.md)
- [MinPrice](docs/Model/MinPrice.md)
- [MinimumStockAbstract](docs/Model/MinimumStockAbstract.md)
- [MinimumStockAllWarehouseSame](docs/Model/MinimumStockAllWarehouseSame.md)
- [MinimumStockAllWarehouseSum](docs/Model/MinimumStockAllWarehouseSum.md)
- [MinimumStockWarehouseVaried](docs/Model/MinimumStockWarehouseVaried.md)
- [MinionToMasterType](docs/Model/MinionToMasterType.md)
- [Move](docs/Model/Move.md)
- [Note](docs/Model/Note.md)
- [Organization](docs/Model/Organization.md)
- [OrganizationAccounts](docs/Model/OrganizationAccounts.md)
- [OrganizationList](docs/Model/OrganizationList.md)
- [Pack](docs/Model/Pack.md)
- [PaymentIn](docs/Model/PaymentIn.md)
- [PaymentItemType](docs/Model/PaymentItemType.md)
- [PaymentOut](docs/Model/PaymentOut.md)
- [PersonalDiscount](docs/Model/PersonalDiscount.md)
- [PositionStock](docs/Model/PositionStock.md)
- [PpeType](docs/Model/PpeType.md)
- [Prepayment](docs/Model/Prepayment.md)
- [PriceType](docs/Model/PriceType.md)
- [PrintFormat](docs/Model/PrintFormat.md)
- [PriorityOfdSend](docs/Model/PriorityOfdSend.md)
- [ProcessingOrder](docs/Model/ProcessingOrder.md)
- [ProcessingPlan](docs/Model/ProcessingPlan.md)
- [ProcessingPlanFolder](docs/Model/ProcessingPlanFolder.md)
- [ProcessingPlanFolderList](docs/Model/ProcessingPlanFolderList.md)
- [ProcessingPlanList](docs/Model/ProcessingPlanList.md)
- [ProcessingPlanMaterial](docs/Model/ProcessingPlanMaterial.md)
- [ProcessingPlanMaterialList](docs/Model/ProcessingPlanMaterialList.md)
- [ProcessingPlanMetadata](docs/Model/ProcessingPlanMetadata.md)
- [ProcessingPlanProduct](docs/Model/ProcessingPlanProduct.md)
- [ProcessingPlanProductList](docs/Model/ProcessingPlanProductList.md)
- [ProcessingPlanStage](docs/Model/ProcessingPlanStage.md)
- [ProcessingPlanStageList](docs/Model/ProcessingPlanStageList.md)
- [ProcessingProcess](docs/Model/ProcessingProcess.md)
- [ProcessingProcessList](docs/Model/ProcessingProcessList.md)
- [ProcessingProcessPosition](docs/Model/ProcessingProcessPosition.md)
- [ProcessingProcessPositionList](docs/Model/ProcessingProcessPositionList.md)
- [ProcessingProcessPositionNextPositionsInner](docs/Model/ProcessingProcessPositionNextPositionsInner.md)
- [ProcessingStage](docs/Model/ProcessingStage.md)
- [ProcessingStageList](docs/Model/ProcessingStageList.md)
- [Product](docs/Model/Product.md)
- [ProductAlcoholic](docs/Model/ProductAlcoholic.md)
- [ProductFolder](docs/Model/ProductFolder.md)
- [ProductFolderList](docs/Model/ProductFolderList.md)
- [ProductList](docs/Model/ProductList.md)
- [ProductionTask](docs/Model/ProductionTask.md)
- [Project](docs/Model/Project.md)
- [ProjectList](docs/Model/ProjectList.md)
- [PurchaseOrder](docs/Model/PurchaseOrder.md)
- [PurchaseOrderList](docs/Model/PurchaseOrderList.md)
- [PurchaseOrderPaymentsInner](docs/Model/PurchaseOrderPaymentsInner.md)
- [PurchaseOrderPosition](docs/Model/PurchaseOrderPosition.md)
- [PurchaseOrderPositionList](docs/Model/PurchaseOrderPositionList.md)
- [PurchaseOrderRate](docs/Model/PurchaseOrderRate.md)
- [PurchaseReturn](docs/Model/PurchaseReturn.md)
- [RateUpdateType](docs/Model/RateUpdateType.md)
- [Region](docs/Model/Region.md)
- [RegionList](docs/Model/RegionList.md)
- [RetailDrawerCashIn](docs/Model/RetailDrawerCashIn.md)
- [RetailDrawerCashInList](docs/Model/RetailDrawerCashInList.md)
- [RetailShift](docs/Model/RetailShift.md)
- [RetailStore](docs/Model/RetailStore.md)
- [RetailStoreEnvironment](docs/Model/RetailStoreEnvironment.md)
- [RetailStoreEnvironmentChequePrinter](docs/Model/RetailStoreEnvironmentChequePrinter.md)
- [RetailStoreEnvironmentChequePrinterDriver](docs/Model/RetailStoreEnvironmentChequePrinterDriver.md)
- [RetailStoreEnvironmentChequePrinterFiscalMemory](docs/Model/RetailStoreEnvironmentChequePrinterFiscalMemory.md)
- [RetailStoreEnvironmentSoftware](docs/Model/RetailStoreEnvironmentSoftware.md)
- [RetailStoreLastOperationNamesInner](docs/Model/RetailStoreLastOperationNamesInner.md)
- [RetailStoreList](docs/Model/RetailStoreList.md)
- [RetailStoreReceiptTemplate](docs/Model/RetailStoreReceiptTemplate.md)
- [RetailStoreState](docs/Model/RetailStoreState.md)
- [RetailStoreStateFiscalMemory](docs/Model/RetailStoreStateFiscalMemory.md)
- [RetailStoreStateFiscalMemoryError](docs/Model/RetailStoreStateFiscalMemoryError.md)
- [RetailStoreStatePaymentTerminal](docs/Model/RetailStoreStatePaymentTerminal.md)
- [RetailStoreStateSync](docs/Model/RetailStoreStateSync.md)
- [RewardType](docs/Model/RewardType.md)
- [SalePlatform](docs/Model/SalePlatform.md)
- [SalePlatformGroup](docs/Model/SalePlatformGroup.md)
- [SalePlatformList](docs/Model/SalePlatformList.md)
- [SalePrice](docs/Model/SalePrice.md)
- [SalesChannel](docs/Model/SalesChannel.md)
- [SalesChannelList](docs/Model/SalesChannelList.md)
- [SalesChannelType](docs/Model/SalesChannelType.md)
- [SalesReturn](docs/Model/SalesReturn.md)
- [Service](docs/Model/Service.md)
- [ServiceList](docs/Model/ServiceList.md)
- [Sex](docs/Model/Sex.md)
- [SpecialPriceDiscount](docs/Model/SpecialPriceDiscount.md)
- [State](docs/Model/State.md)
- [StateType](docs/Model/StateType.md)
- [Store](docs/Model/Store.md)
- [StoreBalance](docs/Model/StoreBalance.md)
- [StoreBalanceList](docs/Model/StoreBalanceList.md)
- [StoreList](docs/Model/StoreList.md)
- [StoreMetadata](docs/Model/StoreMetadata.md)
- [StoreSlot](docs/Model/StoreSlot.md)
- [StoreSlotList](docs/Model/StoreSlotList.md)
- [StoreZone](docs/Model/StoreZone.md)
- [StoreZoneList](docs/Model/StoreZoneList.md)
- [Subscription](docs/Model/Subscription.md)
- [SubscriptionTariff](docs/Model/SubscriptionTariff.md)
- [Supply](docs/Model/Supply.md)
- [Task](docs/Model/Task.md)
- [TaskAgent](docs/Model/TaskAgent.md)
- [TaskList](docs/Model/TaskList.md)
- [TaskNote](docs/Model/TaskNote.md)
- [TaskNoteFile](docs/Model/TaskNoteFile.md)
- [TaskNoteFileList](docs/Model/TaskNoteFileList.md)
- [TaskNoteList](docs/Model/TaskNoteList.md)
- [TaskNotes](docs/Model/TaskNotes.md)
- [TaxRate](docs/Model/TaxRate.md)
- [TaxRateList](docs/Model/TaxRateList.md)
- [TaxSystem](docs/Model/TaxSystem.md)
- [Thing](docs/Model/Thing.md)
- [ThingList](docs/Model/ThingList.md)
- [TobaccoMrcControlType](docs/Model/TobaccoMrcControlType.md)
- [TrackingType](docs/Model/TrackingType.md)
- [TransactionStatus](docs/Model/TransactionStatus.md)
- [TransactionType](docs/Model/TransactionType.md)
- [Uom](docs/Model/Uom.md)
- [UomList](docs/Model/UomList.md)
- [UserSettings](docs/Model/UserSettings.md)
- [Variant](docs/Model/Variant.md)
- [VariantCharacteristic](docs/Model/VariantCharacteristic.md)
- [VariantCharacteristicType](docs/Model/VariantCharacteristicType.md)
- [VariantCharacteristicValue](docs/Model/VariantCharacteristicValue.md)
- [VariantList](docs/Model/VariantList.md)
- [VariantMetadata](docs/Model/VariantMetadata.md)
- [VariantPack](docs/Model/VariantPack.md)
- [Webhook](docs/Model/Webhook.md)
- [WebhookAction](docs/Model/WebhookAction.md)
- [WebhookAuditContext](docs/Model/WebhookAuditContext.md)
- [WebhookDiffType](docs/Model/WebhookDiffType.md)
- [WebhookEvent](docs/Model/WebhookEvent.md)
- [WebhookList](docs/Model/WebhookList.md)
- [WebhookMethod](docs/Model/WebhookMethod.md)
- [WebhookNotificationPayload](docs/Model/WebhookNotificationPayload.md)
- [WebhookStock](docs/Model/WebhookStock.md)
- [WebhookStockList](docs/Model/WebhookStockList.md)
- [WebhookStockNotificationPayload](docs/Model/WebhookStockNotificationPayload.md)
- [WebhookStockReportType](docs/Model/WebhookStockReportType.md)
- [WebhookStockStockType](docs/Model/WebhookStockStockType.md)
- [WelcomeBonusesMode](docs/Model/WelcomeBonusesMode.md)

## Authorization

Authentication schemes defined for the API:
### basicAuth

- **Type**: HTTP basic authentication

### bearerAuth

- **Type**: Bearer authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
    - Generator version: `7.14.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
