# OpenAPIClient-php

API для манипуляции с сущностями и создания отчетов в онлайн-сервисе МойСклад

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
$accept_encoding = 'gzip, deflate, br'; // string
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
*BonusTransactionsApi* | [**createBonusTransactionsBatch**](docs/Api/BonusTransactionsApi.md#createbonustransactionsbatch) | **POST** /entity/bonustransaction/batch | Создать или изменить бонусные операции
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
*CashInsApi* | [**createCashInMetadataStatesBatch**](docs/Api/CashInsApi.md#createcashinmetadatastatesbatch) | **POST** /entity/cashin/metadata/states/batch | Массовое создание и обновление статусов CashIn
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
*CashOutsApi* | [**createCashOutMetadataStatesBatch**](docs/Api/CashOutsApi.md#createcashoutmetadatastatesbatch) | **POST** /entity/cashout/metadata/states/batch | Массовое создание и обновление статусов CashOut
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
*CommissionReportInsApi* | [**createCommissionReportInMetadataStatesBatch**](docs/Api/CommissionReportInsApi.md#createcommissionreportinmetadatastatesbatch) | **POST** /entity/commissionreportin/metadata/states/batch | Массовое создание и обновление статусов CommissionReportIn
*CommissionReportInsApi* | [**createCommissionReportInPosition**](docs/Api/CommissionReportInsApi.md#createcommissionreportinposition) | **POST** /entity/commissionreportin/{id}/positions | Создать и обновить позицию Полученного отчета комиссионера
*CommissionReportInsApi* | [**createCommissionReportInPositions**](docs/Api/CommissionReportInsApi.md#createcommissionreportinpositions) | **POST** /entity/commissionreportin/{id}/positions/batch | Массовое создание и обновление позиций Полученного отчета комиссионера
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
*CommissionReportOutsApi* | [**addCommissionReportOutFiles**](docs/Api/CommissionReportOutsApi.md#addcommissionreportoutfiles) | **POST** /entity/commissionreportout/{id}/files | Добавить файлы к Выданному отчету комиссионера
*CommissionReportOutsApi* | [**createCommissionReportOut**](docs/Api/CommissionReportOutsApi.md#createcommissionreportout) | **POST** /entity/commissionreportout | Создать CommissionReportOut
*CommissionReportOutsApi* | [**createCommissionReportOutBatch**](docs/Api/CommissionReportOutsApi.md#createcommissionreportoutbatch) | **POST** /entity/commissionreportout/batch | Массовое создание и обновление CommissionReportOut
*CommissionReportOutsApi* | [**createCommissionReportOutMetadataAttribute**](docs/Api/CommissionReportOutsApi.md#createcommissionreportoutmetadataattribute) | **POST** /entity/commissionreportout/metadata/attributes | Создать доп. поле CommissionReportOut
*CommissionReportOutsApi* | [**createCommissionReportOutMetadataState**](docs/Api/CommissionReportOutsApi.md#createcommissionreportoutmetadatastate) | **POST** /entity/commissionreportout/metadata/states | Создать статус CommissionReportOut
*CommissionReportOutsApi* | [**createCommissionReportOutMetadataStatesBatch**](docs/Api/CommissionReportOutsApi.md#createcommissionreportoutmetadatastatesbatch) | **POST** /entity/commissionreportout/metadata/states/batch | Массовое создание и обновление статусов CommissionReportOut
*CommissionReportOutsApi* | [**createCommissionReportOutNote**](docs/Api/CommissionReportOutsApi.md#createcommissionreportoutnote) | **POST** /entity/commissionreportout/{id}/notes | Добавить Событие Выданного отчета комиссионера
*CommissionReportOutsApi* | [**createCommissionReportOutPosition**](docs/Api/CommissionReportOutsApi.md#createcommissionreportoutposition) | **POST** /entity/commissionreportout/{id}/positions | Создать и обновить позицию Выданного отчета комиссионера
*CommissionReportOutsApi* | [**createCommissionReportOutPositions**](docs/Api/CommissionReportOutsApi.md#createcommissionreportoutpositions) | **POST** /entity/commissionreportout/{id}/positions/batch | Массовое создание и обновление позиций Выданного отчета комиссионера
*CommissionReportOutsApi* | [**deleteCommissionReportOut**](docs/Api/CommissionReportOutsApi.md#deletecommissionreportout) | **DELETE** /entity/commissionreportout/{id} | Удалить CommissionReportOut
*CommissionReportOutsApi* | [**deleteCommissionReportOutBatch**](docs/Api/CommissionReportOutsApi.md#deletecommissionreportoutbatch) | **POST** /entity/commissionreportout/delete | Массовое удаление CommissionReportOut
*CommissionReportOutsApi* | [**deleteCommissionReportOutFile**](docs/Api/CommissionReportOutsApi.md#deletecommissionreportoutfile) | **DELETE** /entity/commissionreportout/{id}/files/{fileId} | Удалить файл Выданного отчета комиссионера
*CommissionReportOutsApi* | [**deleteCommissionReportOutMetadataAttributeById**](docs/Api/CommissionReportOutsApi.md#deletecommissionreportoutmetadataattributebyid) | **DELETE** /entity/commissionreportout/metadata/attributes/{id} | Удалить отдельное доп. поле CommissionReportOut
*CommissionReportOutsApi* | [**deleteCommissionReportOutMetadataStateById**](docs/Api/CommissionReportOutsApi.md#deletecommissionreportoutmetadatastatebyid) | **DELETE** /entity/commissionreportout/metadata/states/{id} | Удалить отдельный статус CommissionReportOut
*CommissionReportOutsApi* | [**deleteCommissionReportOutNote**](docs/Api/CommissionReportOutsApi.md#deletecommissionreportoutnote) | **DELETE** /entity/commissionreportout/{id}/notes/{noteId} | Удалить Событие Выданного отчета комиссионера
*CommissionReportOutsApi* | [**deleteCommissionReportOutPosition**](docs/Api/CommissionReportOutsApi.md#deletecommissionreportoutposition) | **DELETE** /entity/commissionreportout/{id}/positions/{positionId} | Удалить позицию CommissionReportOut
*CommissionReportOutsApi* | [**deleteCommissionReportOutPositionsBatch**](docs/Api/CommissionReportOutsApi.md#deletecommissionreportoutpositionsbatch) | **POST** /entity/commissionreportout/{id}/positions/delete | Массовое удаление позиций CommissionReportOut
*CommissionReportOutsApi* | [**getCommissionReportOutById**](docs/Api/CommissionReportOutsApi.md#getcommissionreportoutbyid) | **GET** /entity/commissionreportout/{id} | Получить CommissionReportOut по ID
*CommissionReportOutsApi* | [**getCommissionReportOutFiles**](docs/Api/CommissionReportOutsApi.md#getcommissionreportoutfiles) | **GET** /entity/commissionreportout/{id}/files | Получить файлы Выданного отчета комиссионера
*CommissionReportOutsApi* | [**getCommissionReportOutList**](docs/Api/CommissionReportOutsApi.md#getcommissionreportoutlist) | **GET** /entity/commissionreportout | Получить список CommissionReportOut
*CommissionReportOutsApi* | [**getCommissionReportOutMetadata**](docs/Api/CommissionReportOutsApi.md#getcommissionreportoutmetadata) | **GET** /entity/commissionreportout/metadata | Метаданные CommissionReportOut
*CommissionReportOutsApi* | [**getCommissionReportOutMetadataAttribute**](docs/Api/CommissionReportOutsApi.md#getcommissionreportoutmetadataattribute) | **GET** /entity/commissionreportout/metadata/attributes | Доп. поля CommissionReportOut
*CommissionReportOutsApi* | [**getCommissionReportOutMetadataAttributeById**](docs/Api/CommissionReportOutsApi.md#getcommissionreportoutmetadataattributebyid) | **GET** /entity/commissionreportout/metadata/attributes/{id} | Отдельное доп. поле CommissionReportOut
*CommissionReportOutsApi* | [**getCommissionReportOutMetadataStateById**](docs/Api/CommissionReportOutsApi.md#getcommissionreportoutmetadatastatebyid) | **GET** /entity/commissionreportout/metadata/states/{id} | Отдельный статус CommissionReportOut
*CommissionReportOutsApi* | [**getCommissionReportOutNoteById**](docs/Api/CommissionReportOutsApi.md#getcommissionreportoutnotebyid) | **GET** /entity/commissionreportout/{id}/notes/{noteId} | Получить Событие Выданного отчета комиссионера по ID
*CommissionReportOutsApi* | [**getCommissionReportOutNotes**](docs/Api/CommissionReportOutsApi.md#getcommissionreportoutnotes) | **GET** /entity/commissionreportout/{id}/notes | Получить список Событий Выданного отчета комиссионера
*CommissionReportOutsApi* | [**getCommissionReportOutPositionById**](docs/Api/CommissionReportOutsApi.md#getcommissionreportoutpositionbyid) | **GET** /entity/commissionreportout/{id}/positions/{positionId} | Получить позицию CommissionReportOut
*CommissionReportOutsApi* | [**getCommissionReportOutPositions**](docs/Api/CommissionReportOutsApi.md#getcommissionreportoutpositions) | **GET** /entity/commissionreportout/{id}/positions | Получить позиции CommissionReportOut
*CommissionReportOutsApi* | [**updateCommissionReportOut**](docs/Api/CommissionReportOutsApi.md#updatecommissionreportout) | **PUT** /entity/commissionreportout/{id} | Изменить CommissionReportOut
*CommissionReportOutsApi* | [**updateCommissionReportOutMetadataAttributeById**](docs/Api/CommissionReportOutsApi.md#updatecommissionreportoutmetadataattributebyid) | **PUT** /entity/commissionreportout/metadata/attributes/{id} | Обновить отдельное доп. поле CommissionReportOut
*CommissionReportOutsApi* | [**updateCommissionReportOutMetadataStateById**](docs/Api/CommissionReportOutsApi.md#updatecommissionreportoutmetadatastatebyid) | **PUT** /entity/commissionreportout/metadata/states/{id} | Обновить отдельный статус CommissionReportOut
*CommissionReportOutsApi* | [**updateCommissionReportOutNote**](docs/Api/CommissionReportOutsApi.md#updatecommissionreportoutnote) | **PUT** /entity/commissionreportout/{id}/notes/{noteId} | Обновить Событие Выданного отчета комиссионера
*CommissionReportOutsApi* | [**updateCommissionReportOutPosition**](docs/Api/CommissionReportOutsApi.md#updatecommissionreportoutposition) | **PUT** /entity/commissionreportout/{id}/positions/{positionId} | Изменить позицию CommissionReportOut
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
*CounterpartiesApi* | [**createCounterpartyMetadataAttribute**](docs/Api/CounterpartiesApi.md#createcounterpartymetadataattribute) | **POST** /entity/counterparty/metadata/attributes | Создать доп. поле контрагента
*CounterpartiesApi* | [**createCounterpartyMetadataState**](docs/Api/CounterpartiesApi.md#createcounterpartymetadatastate) | **POST** /entity/counterparty/metadata/states | Создать статус Counterparty
*CounterpartiesApi* | [**createCounterpartyNote**](docs/Api/CounterpartiesApi.md#createcounterpartynote) | **POST** /entity/counterparty/{id}/notes | Создать событие контрагента
*CounterpartiesApi* | [**deleteCounterpartiesBatch**](docs/Api/CounterpartiesApi.md#deletecounterpartiesbatch) | **POST** /entity/counterparty/delete | Удалить контрагентов
*CounterpartiesApi* | [**deleteCounterparty**](docs/Api/CounterpartiesApi.md#deletecounterparty) | **DELETE** /entity/counterparty/{id} | Удалить контрагента
*CounterpartiesApi* | [**deleteCounterpartyAccount**](docs/Api/CounterpartiesApi.md#deletecounterpartyaccount) | **DELETE** /entity/counterparty/{id}/accounts/{accountId} | Удалить счёт контрагента
*CounterpartiesApi* | [**deleteCounterpartyContactPerson**](docs/Api/CounterpartiesApi.md#deletecounterpartycontactperson) | **DELETE** /entity/counterparty/{id}/contactpersons/{contactPersonId} | Удалить контактное лицо контрагента
*CounterpartiesApi* | [**deleteCounterpartyFile**](docs/Api/CounterpartiesApi.md#deletecounterpartyfile) | **DELETE** /entity/counterparty/{id}/files/{fileId} | Удалить файл контрагента
*CounterpartiesApi* | [**deleteCounterpartyMetadataAttributeById**](docs/Api/CounterpartiesApi.md#deletecounterpartymetadataattributebyid) | **DELETE** /entity/counterparty/metadata/attributes/{id} | Удалить отдельное доп. поле контрагента
*CounterpartiesApi* | [**deleteCounterpartyMetadataStateById**](docs/Api/CounterpartiesApi.md#deletecounterpartymetadatastatebyid) | **DELETE** /entity/counterparty/metadata/states/{id} | Удалить отдельный статус Контрагента
*CounterpartiesApi* | [**deleteCounterpartyNote**](docs/Api/CounterpartiesApi.md#deletecounterpartynote) | **DELETE** /entity/counterparty/{id}/notes/{noteId} | Удалить событие контрагента
*CounterpartiesApi* | [**getCounterparties**](docs/Api/CounterpartiesApi.md#getcounterparties) | **GET** /entity/counterparty | Получить список контрагентов
*CounterpartiesApi* | [**getCounterpartyAccountById**](docs/Api/CounterpartiesApi.md#getcounterpartyaccountbyid) | **GET** /entity/counterparty/{id}/accounts/{accountId} | Получить счёт контрагента по ID
*CounterpartiesApi* | [**getCounterpartyAccounts**](docs/Api/CounterpartiesApi.md#getcounterpartyaccounts) | **GET** /entity/counterparty/{id}/accounts | Получить счета контрагента
*CounterpartiesApi* | [**getCounterpartyAuditEvents**](docs/Api/CounterpartiesApi.md#getcounterpartyauditevents) | **GET** /entity/counterparty/{id}/audit | Получить события аудита контрагента
*CounterpartiesApi* | [**getCounterpartyById**](docs/Api/CounterpartiesApi.md#getcounterpartybyid) | **GET** /entity/counterparty/{id} | Получить контрагента по ID
*CounterpartiesApi* | [**getCounterpartyContactPersonById**](docs/Api/CounterpartiesApi.md#getcounterpartycontactpersonbyid) | **GET** /entity/counterparty/{id}/contactpersons/{contactPersonId} | Получить контактное лицо контрагента по ID
*CounterpartiesApi* | [**getCounterpartyContactPersons**](docs/Api/CounterpartiesApi.md#getcounterpartycontactpersons) | **GET** /entity/counterparty/{id}/contactpersons | Получить контактные лица контрагента
*CounterpartiesApi* | [**getCounterpartyFiles**](docs/Api/CounterpartiesApi.md#getcounterpartyfiles) | **GET** /entity/counterparty/{id}/files | Получить файлы контрагента
*CounterpartiesApi* | [**getCounterpartyMetadata**](docs/Api/CounterpartiesApi.md#getcounterpartymetadata) | **GET** /entity/counterparty/metadata | Получить метаданные контрагентов
*CounterpartiesApi* | [**getCounterpartyMetadataAttributeById**](docs/Api/CounterpartiesApi.md#getcounterpartymetadataattributebyid) | **GET** /entity/counterparty/metadata/attributes/{id} | Получить доп. поле контрагента по ID
*CounterpartiesApi* | [**getCounterpartyMetadataAttributes**](docs/Api/CounterpartiesApi.md#getcounterpartymetadataattributes) | **GET** /entity/counterparty/metadata/attributes | Получить доп. поля контрагентов
*CounterpartiesApi* | [**getCounterpartyMetadataStateById**](docs/Api/CounterpartiesApi.md#getcounterpartymetadatastatebyid) | **GET** /entity/counterparty/metadata/states/{id} | Отдельный статус Контрагента
*CounterpartiesApi* | [**getCounterpartyNoteById**](docs/Api/CounterpartiesApi.md#getcounterpartynotebyid) | **GET** /entity/counterparty/{id}/notes/{noteId} | Получить событие контрагента по ID
*CounterpartiesApi* | [**getCounterpartyNotes**](docs/Api/CounterpartiesApi.md#getcounterpartynotes) | **GET** /entity/counterparty/{id}/notes | Получить события контрагента
*CounterpartiesApi* | [**updateCounterparty**](docs/Api/CounterpartiesApi.md#updatecounterparty) | **PUT** /entity/counterparty/{id} | Обновить контрагента
*CounterpartiesApi* | [**updateCounterpartyAccount**](docs/Api/CounterpartiesApi.md#updatecounterpartyaccount) | **PUT** /entity/counterparty/{id}/accounts/{accountId} | Обновить счёт контрагента
*CounterpartiesApi* | [**updateCounterpartyContactPerson**](docs/Api/CounterpartiesApi.md#updatecounterpartycontactperson) | **PUT** /entity/counterparty/{id}/contactpersons/{contactPersonId} | Обновить контактное лицо контрагента
*CounterpartiesApi* | [**updateCounterpartyMetadataAttributeById**](docs/Api/CounterpartiesApi.md#updatecounterpartymetadataattributebyid) | **PUT** /entity/counterparty/metadata/attributes/{id} | Обновить отдельное доп. поле контрагента
*CounterpartiesApi* | [**updateCounterpartyMetadataStateById**](docs/Api/CounterpartiesApi.md#updatecounterpartymetadatastatebyid) | **PUT** /entity/counterparty/metadata/states/{id} | Обновить отдельный статус Контрагента
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
*CustomRolesApi* | [**createCustomRole**](docs/Api/CustomRolesApi.md#createcustomrole) | **POST** /entity/role | Создать пользовательскую роль
*CustomRolesApi* | [**deleteCustomRole**](docs/Api/CustomRolesApi.md#deletecustomrole) | **DELETE** /entity/role/{id} | Удалить пользовательскую роль
*CustomRolesApi* | [**getCustomRoleById**](docs/Api/CustomRolesApi.md#getcustomrolebyid) | **GET** /entity/role/{id} | Получить пользовательскую роль по ID
*CustomRolesApi* | [**getCustomRoles**](docs/Api/CustomRolesApi.md#getcustomroles) | **GET** /entity/role | Получить список пользовательских ролей
*CustomRolesApi* | [**updateCustomRole**](docs/Api/CustomRolesApi.md#updatecustomrole) | **PUT** /entity/role/{id} | Обновить пользовательскую роль
*CustomerOrdersApi* | [**createCustomerOrder**](docs/Api/CustomerOrdersApi.md#createcustomerorder) | **POST** /entity/customerorder | Создать CustomerOrders
*CustomerOrdersApi* | [**createCustomerOrderBatch**](docs/Api/CustomerOrdersApi.md#createcustomerorderbatch) | **POST** /entity/customerorder/batch | Массовое создание и обновление CustomerOrders
*CustomerOrdersApi* | [**createCustomerOrderMetadataAttribute**](docs/Api/CustomerOrdersApi.md#createcustomerordermetadataattribute) | **POST** /entity/customerorder/metadata/attributes | Создать Доп. поле CustomerOrder
*CustomerOrdersApi* | [**createCustomerOrderMetadataState**](docs/Api/CustomerOrdersApi.md#createcustomerordermetadatastate) | **POST** /entity/customerorder/metadata/states | Создать статус CustomerOrder
*CustomerOrdersApi* | [**createCustomerOrderMetadataStatesBatch**](docs/Api/CustomerOrdersApi.md#createcustomerordermetadatastatesbatch) | **POST** /entity/customerorder/metadata/states/batch | Массовое создание и обновление статусов CustomerOrder
*CustomerOrdersApi* | [**createCustomerOrderNote**](docs/Api/CustomerOrdersApi.md#createcustomerordernote) | **POST** /entity/customerorder/{id}/notes | Добавить Событие Заказа покупателя
*CustomerOrdersApi* | [**createCustomerOrderPosition**](docs/Api/CustomerOrdersApi.md#createcustomerorderposition) | **POST** /entity/customerorder/{id}/positions | Создать и обновить позицию Заказа покупателя
*CustomerOrdersApi* | [**createCustomerOrderPositions**](docs/Api/CustomerOrdersApi.md#createcustomerorderpositions) | **POST** /entity/customerorder/{id}/positions/batch | Массовое создание и обновление позиций Заказа покупателя
*CustomerOrdersApi* | [**createCustomerOrderPublication**](docs/Api/CustomerOrdersApi.md#createcustomerorderpublication) | **POST** /entity/customerorder/{id}/publication | Создать Публикацию Заказа покупателя
*CustomerOrdersApi* | [**deleteCustomerOrder**](docs/Api/CustomerOrdersApi.md#deletecustomerorder) | **DELETE** /entity/customerorder/{id} | Удалить CustomerOrders
*CustomerOrdersApi* | [**deleteCustomerOrderBatch**](docs/Api/CustomerOrdersApi.md#deletecustomerorderbatch) | **POST** /entity/customerorder/delete | Массовое удаление CustomerOrders
*CustomerOrdersApi* | [**deleteCustomerOrderMetadataAttributeById**](docs/Api/CustomerOrdersApi.md#deletecustomerordermetadataattributebyid) | **DELETE** /entity/customerorder/metadata/attributes/{id} | Удалить отдельное доп. поле CustomerOrder
*CustomerOrdersApi* | [**deleteCustomerOrderMetadataStateById**](docs/Api/CustomerOrdersApi.md#deletecustomerordermetadatastatebyid) | **DELETE** /entity/customerorder/metadata/states/{id} | Удалить отдельный статус CustomerOrder
*CustomerOrdersApi* | [**deleteCustomerOrderNote**](docs/Api/CustomerOrdersApi.md#deletecustomerordernote) | **DELETE** /entity/customerorder/{id}/notes/{noteId} | Удалить Событие Заказа покупателя
*CustomerOrdersApi* | [**deleteCustomerOrderPosition**](docs/Api/CustomerOrdersApi.md#deletecustomerorderposition) | **DELETE** /entity/customerorder/{id}/positions/{positionId} | Удалить позицию CustomerOrders
*CustomerOrdersApi* | [**deleteCustomerOrderPositionsBatch**](docs/Api/CustomerOrdersApi.md#deletecustomerorderpositionsbatch) | **POST** /entity/customerorder/{id}/positions/delete | Массовое удаление позиций CustomerOrders
*CustomerOrdersApi* | [**deleteCustomerOrderPublication**](docs/Api/CustomerOrdersApi.md#deletecustomerorderpublication) | **DELETE** /entity/customerorder/{id}/publication/{publicationId} | Удалить Публикацию Заказа покупателя
*CustomerOrdersApi* | [**exportCustomerOrder**](docs/Api/CustomerOrdersApi.md#exportcustomerorder) | **POST** /entity/customerorder/{id}/export | Запрос на печать Заказа покупателя
*CustomerOrdersApi* | [**getCustomerOrderAuditEvents**](docs/Api/CustomerOrdersApi.md#getcustomerorderauditevents) | **GET** /entity/customerorder/{id}/audit | Получить события аудита Заказа покупателя
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
*CustomerOrdersApi* | [**getCustomerOrderPublicationById**](docs/Api/CustomerOrdersApi.md#getcustomerorderpublicationbyid) | **GET** /entity/customerorder/{id}/publication/{publicationId} | Получить Публикацию Заказа покупателя
*CustomerOrdersApi* | [**getCustomerOrderPublications**](docs/Api/CustomerOrdersApi.md#getcustomerorderpublications) | **GET** /entity/customerorder/{id}/publication | Получить список Публикаций Заказа покупателя
*CustomerOrdersApi* | [**getCustomerOrderTemplate**](docs/Api/CustomerOrdersApi.md#getcustomerordertemplate) | **PUT** /entity/customerorder/new | Шаблон CustomerOrders
*CustomerOrdersApi* | [**updateCustomerOrder**](docs/Api/CustomerOrdersApi.md#updatecustomerorder) | **PUT** /entity/customerorder/{id} | Изменить CustomerOrders
*CustomerOrdersApi* | [**updateCustomerOrderMetadataAttributeById**](docs/Api/CustomerOrdersApi.md#updatecustomerordermetadataattributebyid) | **PUT** /entity/customerorder/metadata/attributes/{id} | Обновить отдельное доп. поле CustomerOrder
*CustomerOrdersApi* | [**updateCustomerOrderMetadataStateById**](docs/Api/CustomerOrdersApi.md#updatecustomerordermetadatastatebyid) | **PUT** /entity/customerorder/metadata/states/{id} | Обновить отдельный статус CustomerOrder
*CustomerOrdersApi* | [**updateCustomerOrderNote**](docs/Api/CustomerOrdersApi.md#updatecustomerordernote) | **PUT** /entity/customerorder/{id}/notes/{noteId} | Обновить Событие Заказа покупателя
*CustomerOrdersApi* | [**updateCustomerOrderPosition**](docs/Api/CustomerOrdersApi.md#updatecustomerorderposition) | **PUT** /entity/customerorder/{id}/positions/{positionId} | Изменить позицию CustomerOrders
*DemandsApi* | [**createDemand**](docs/Api/DemandsApi.md#createdemand) | **POST** /entity/demand | Создать Отгрузку
*DemandsApi* | [**createDemandBatch**](docs/Api/DemandsApi.md#createdemandbatch) | **POST** /entity/demand/batch | Массовое создание и обновление Отгрузок
*DemandsApi* | [**createDemandMetadataAttribute**](docs/Api/DemandsApi.md#createdemandmetadataattribute) | **POST** /entity/demand/metadata/attributes | Создать доп. поле Отгрузки
*DemandsApi* | [**createDemandMetadataState**](docs/Api/DemandsApi.md#createdemandmetadatastate) | **POST** /entity/demand/metadata/states | Создать статус Отгрузки
*DemandsApi* | [**createDemandMetadataStatesBatch**](docs/Api/DemandsApi.md#createdemandmetadatastatesbatch) | **POST** /entity/demand/metadata/states/batch | Массовое создание и обновление статусов Отгрузки
*DemandsApi* | [**createDemandPosition**](docs/Api/DemandsApi.md#createdemandposition) | **POST** /entity/demand/{id}/positions | Создать и обновить позицию Отгрузки
*DemandsApi* | [**createDemandPositions**](docs/Api/DemandsApi.md#createdemandpositions) | **POST** /entity/demand/{id}/positions/batch | Массовое создание и обновление позиций Отгрузки
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
*EmissionOrdersApi* | [**createEmissionOrderMetadataState**](docs/Api/EmissionOrdersApi.md#createemissionordermetadatastate) | **POST** /entity/emissionorder/metadata/states | Создать статус Заказа кодов маркировки
*EmissionOrdersApi* | [**createEmissionOrderMetadataStatesBatch**](docs/Api/EmissionOrdersApi.md#createemissionordermetadatastatesbatch) | **POST** /entity/emissionorder/metadata/states/batch | Массовое создание и обновление статусов Заказа кодов маркировки
*EmissionOrdersApi* | [**createEmissionOrderPosition**](docs/Api/EmissionOrdersApi.md#createemissionorderposition) | **POST** /entity/emissionorder/{id}/positions | Создать и обновить позицию Заказа кодов маркировки
*EmissionOrdersApi* | [**createEmissionOrderPositions**](docs/Api/EmissionOrdersApi.md#createemissionorderpositions) | **POST** /entity/emissionorder/{id}/positions/batch | Массовое создание и обновление позиций Заказа кодов маркировки
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
*EmployeesApi* | [**createEmployeeMetadataAttribute**](docs/Api/EmployeesApi.md#createemployeemetadataattribute) | **POST** /entity/employee/metadata/attributes | Создать доп. поле сотрудника
*EmployeesApi* | [**createEmployeesBatch**](docs/Api/EmployeesApi.md#createemployeesbatch) | **POST** /entity/employee/batch | Создать или изменить сотрудников
*EmployeesApi* | [**deactivateEmployee**](docs/Api/EmployeesApi.md#deactivateemployee) | **PUT** /entity/employee/{id}/access/deactivate | Деактивировать сотрудника
*EmployeesApi* | [**deleteEmployee**](docs/Api/EmployeesApi.md#deleteemployee) | **DELETE** /entity/employee/{id} | Удалить сотрудника
*EmployeesApi* | [**deleteEmployeeMetadataAttribute**](docs/Api/EmployeesApi.md#deleteemployeemetadataattribute) | **DELETE** /entity/employee/metadata/attributes/{id} | Удалить доп. поле сотрудника
*EmployeesApi* | [**deleteEmployeesBatch**](docs/Api/EmployeesApi.md#deleteemployeesbatch) | **POST** /entity/employee/delete | Удалить сотрудников
*EmployeesApi* | [**getEmployeeById**](docs/Api/EmployeesApi.md#getemployeebyid) | **GET** /entity/employee/{id} | Получить сотрудника по ID
*EmployeesApi* | [**getEmployeeMetadata**](docs/Api/EmployeesApi.md#getemployeemetadata) | **GET** /entity/employee/metadata | Получить метаданные сотрудников
*EmployeesApi* | [**getEmployeeMetadataAttributeById**](docs/Api/EmployeesApi.md#getemployeemetadataattributebyid) | **GET** /entity/employee/metadata/attributes/{id} | Получить доп. поле сотрудника по ID
*EmployeesApi* | [**getEmployeeMetadataAttributes**](docs/Api/EmployeesApi.md#getemployeemetadataattributes) | **GET** /entity/employee/metadata/attributes | Получить доп. поля сотрудников
*EmployeesApi* | [**getEmployeeSecurity**](docs/Api/EmployeesApi.md#getemployeesecurity) | **GET** /entity/employee/{id}/security | Получить права сотрудника
*EmployeesApi* | [**getEmployees**](docs/Api/EmployeesApi.md#getemployees) | **GET** /entity/employee | Получить список сотрудников
*EmployeesApi* | [**getRoleAdmin**](docs/Api/EmployeesApi.md#getroleadmin) | **GET** /entity/role/admin | Получить роль администратора
*EmployeesApi* | [**getRoleCashier**](docs/Api/EmployeesApi.md#getrolecashier) | **GET** /entity/role/cashier | Получить роль кассира
*EmployeesApi* | [**getRoleIndividual**](docs/Api/EmployeesApi.md#getroleindividual) | **GET** /entity/role/individual | Получить индивидуальную роль
*EmployeesApi* | [**getRoleOwner**](docs/Api/EmployeesApi.md#getroleowner) | **GET** /entity/role/owner | Получить роль владельца аккаунта
*EmployeesApi* | [**getRoleWorker**](docs/Api/EmployeesApi.md#getroleworker) | **GET** /entity/role/worker | Получить роль сотрудника производства
*EmployeesApi* | [**resetEmployeePassword**](docs/Api/EmployeesApi.md#resetemployeepassword) | **PUT** /entity/employee/{id}/access/resetpassword | Сбросить пароль сотрудника
*EmployeesApi* | [**updateEmployee**](docs/Api/EmployeesApi.md#updateemployee) | **PUT** /entity/employee/{id} | Обновить сотрудника
*EmployeesApi* | [**updateEmployeeMetadataAttribute**](docs/Api/EmployeesApi.md#updateemployeemetadataattribute) | **PUT** /entity/employee/metadata/attributes/{id} | Обновить доп. поле сотрудника
*EmployeesApi* | [**updateEmployeeSecurity**](docs/Api/EmployeesApi.md#updateemployeesecurity) | **PUT** /entity/employee/{id}/security | Изменить права сотрудника
*EntersApi* | [**addEnterFiles**](docs/Api/EntersApi.md#addenterfiles) | **POST** /entity/enter/{id}/files | Добавить файлы к Оприходованию
*EntersApi* | [**createEnter**](docs/Api/EntersApi.md#createenter) | **POST** /entity/enter | Создать Оприходование
*EntersApi* | [**createEnterBatch**](docs/Api/EntersApi.md#createenterbatch) | **POST** /entity/enter/batch | Массовое создание и обновление Оприходований
*EntersApi* | [**createEnterMetadataAttribute**](docs/Api/EntersApi.md#createentermetadataattribute) | **POST** /entity/enter/metadata/attributes | Создать доп. поле Оприходований
*EntersApi* | [**createEnterMetadataState**](docs/Api/EntersApi.md#createentermetadatastate) | **POST** /entity/enter/metadata/states | Создать статус Оприходования
*EntersApi* | [**createEnterMetadataStatesBatch**](docs/Api/EntersApi.md#createentermetadatastatesbatch) | **POST** /entity/enter/metadata/states/batch | Массовое создание и обновление статусов Оприходования
*EntersApi* | [**createEnterPosition**](docs/Api/EntersApi.md#createenterposition) | **POST** /entity/enter/{id}/positions | Создать и обновить позицию Оприходования
*EntersApi* | [**createEnterPositions**](docs/Api/EntersApi.md#createenterpositions) | **POST** /entity/enter/{id}/positions/batch | Массовое создание и обновление позиций Оприходования
*EntersApi* | [**deleteEnter**](docs/Api/EntersApi.md#deleteenter) | **DELETE** /entity/enter/{id} | Удалить Оприходование
*EntersApi* | [**deleteEnterBatch**](docs/Api/EntersApi.md#deleteenterbatch) | **POST** /entity/enter/delete | Массовое удаление Оприходований
*EntersApi* | [**deleteEnterFile**](docs/Api/EntersApi.md#deleteenterfile) | **DELETE** /entity/enter/{id}/files/{fileId} | Удалить файл Оприходования
*EntersApi* | [**deleteEnterMetadataAttributeById**](docs/Api/EntersApi.md#deleteentermetadataattributebyid) | **DELETE** /entity/enter/metadata/attributes/{id} | Удалить отдельное доп. поле Оприходований
*EntersApi* | [**deleteEnterMetadataStateById**](docs/Api/EntersApi.md#deleteentermetadatastatebyid) | **DELETE** /entity/enter/metadata/states/{id} | Удалить отдельный статус Оприходования
*EntersApi* | [**deleteEnterPosition**](docs/Api/EntersApi.md#deleteenterposition) | **DELETE** /entity/enter/{id}/positions/{positionId} | Удалить позицию Оприходования
*EntersApi* | [**deleteEnterPositions**](docs/Api/EntersApi.md#deleteenterpositions) | **POST** /entity/enter/{id}/positions/delete | Массовое удаление позиций Оприходования
*EntersApi* | [**getEnterById**](docs/Api/EntersApi.md#getenterbyid) | **GET** /entity/enter/{id} | Получить Оприходование
*EntersApi* | [**getEnterFiles**](docs/Api/EntersApi.md#getenterfiles) | **GET** /entity/enter/{id}/files | Получить файлы Оприходования
*EntersApi* | [**getEnterList**](docs/Api/EntersApi.md#getenterlist) | **GET** /entity/enter | Получить список Оприходований
*EntersApi* | [**getEnterMetadata**](docs/Api/EntersApi.md#getentermetadata) | **GET** /entity/enter/metadata | Метаданные Оприходований
*EntersApi* | [**getEnterMetadataAttribute**](docs/Api/EntersApi.md#getentermetadataattribute) | **GET** /entity/enter/metadata/attributes | Доп. поля Оприходований
*EntersApi* | [**getEnterMetadataAttributeById**](docs/Api/EntersApi.md#getentermetadataattributebyid) | **GET** /entity/enter/metadata/attributes/{id} | Отдельное доп. поле Оприходований
*EntersApi* | [**getEnterMetadataStateById**](docs/Api/EntersApi.md#getentermetadatastatebyid) | **GET** /entity/enter/metadata/states/{id} | Отдельный статус Оприходования
*EntersApi* | [**getEnterPositionById**](docs/Api/EntersApi.md#getenterpositionbyid) | **GET** /entity/enter/{id}/positions/{positionId} | Получить позицию Оприходования
*EntersApi* | [**getEnterPositions**](docs/Api/EntersApi.md#getenterpositions) | **GET** /entity/enter/{id}/positions | Получить позиции Оприходования
*EntersApi* | [**getEnterTemplate**](docs/Api/EntersApi.md#getentertemplate) | **PUT** /entity/enter/new | Шаблон Оприходования
*EntersApi* | [**updateEnter**](docs/Api/EntersApi.md#updateenter) | **PUT** /entity/enter/{id} | Изменить Оприходование
*EntersApi* | [**updateEnterMetadataAttributeById**](docs/Api/EntersApi.md#updateentermetadataattributebyid) | **PUT** /entity/enter/metadata/attributes/{id} | Обновить отдельное доп. поле Оприходований
*EntersApi* | [**updateEnterMetadataStateById**](docs/Api/EntersApi.md#updateentermetadatastatebyid) | **PUT** /entity/enter/metadata/states/{id} | Обновить отдельный статус Оприходования
*EntersApi* | [**updateEnterPosition**](docs/Api/EntersApi.md#updateenterposition) | **PUT** /entity/enter/{id}/positions/{positionId} | Изменить позицию Оприходования
*ExpenseItemsApi* | [**createExpenseItem**](docs/Api/ExpenseItemsApi.md#createexpenseitem) | **POST** /entity/expenseitem | Создать статью расходов
*ExpenseItemsApi* | [**createExpenseItemsBatch**](docs/Api/ExpenseItemsApi.md#createexpenseitemsbatch) | **POST** /entity/expenseitem/batch | Создать или изменить статьи расходов
*ExpenseItemsApi* | [**deleteExpenseItem**](docs/Api/ExpenseItemsApi.md#deleteexpenseitem) | **DELETE** /entity/expenseitem/{id} | Удалить статью расходов
*ExpenseItemsApi* | [**deleteExpenseItemsBatch**](docs/Api/ExpenseItemsApi.md#deleteexpenseitemsbatch) | **POST** /entity/expenseitem/delete | Удалить статьи расходов
*ExpenseItemsApi* | [**getExpenseItemById**](docs/Api/ExpenseItemsApi.md#getexpenseitembyid) | **GET** /entity/expenseitem/{id} | Получить статью расходов по ID
*ExpenseItemsApi* | [**getExpenseItems**](docs/Api/ExpenseItemsApi.md#getexpenseitems) | **GET** /entity/expenseitem | Получить список статей расходов
*ExpenseItemsApi* | [**updateExpenseItem**](docs/Api/ExpenseItemsApi.md#updateexpenseitem) | **PUT** /entity/expenseitem/{id} | Обновить статью расходов
*FactureInsApi* | [**createFactureIn**](docs/Api/FactureInsApi.md#createfacturein) | **POST** /entity/facturein | Создать Счет-фактуру полученный
*FactureInsApi* | [**createFactureInMetadataAttribute**](docs/Api/FactureInsApi.md#createfactureinmetadataattribute) | **POST** /entity/facturein/metadata/attributes | Создать доп. поле Счета-фактуры полученного
*FactureInsApi* | [**createFactureInMetadataState**](docs/Api/FactureInsApi.md#createfactureinmetadatastate) | **POST** /entity/facturein/metadata/states | Создать статус Счета-фактуры полученного
*FactureInsApi* | [**createFactureInMetadataStatesBatch**](docs/Api/FactureInsApi.md#createfactureinmetadatastatesbatch) | **POST** /entity/facturein/metadata/states/batch | Массовое создание и обновление статусов Счета-фактуры полученного
*FactureInsApi* | [**createFactureInsBatch**](docs/Api/FactureInsApi.md#createfactureinsbatch) | **POST** /entity/facturein/batch | Массовое создание и обновление Счетов-фактур полученных
*FactureInsApi* | [**deleteFactureIn**](docs/Api/FactureInsApi.md#deletefacturein) | **DELETE** /entity/facturein/{id} | Удалить Счет-фактуру полученный
*FactureInsApi* | [**deleteFactureInMetadataAttributeById**](docs/Api/FactureInsApi.md#deletefactureinmetadataattributebyid) | **DELETE** /entity/facturein/metadata/attributes/{id} | Удалить отдельное доп. поле Счета-фактуры полученного
*FactureInsApi* | [**deleteFactureInMetadataStateById**](docs/Api/FactureInsApi.md#deletefactureinmetadatastatebyid) | **DELETE** /entity/facturein/metadata/states/{id} | Удалить отдельный статус Счета-фактуры полученного
*FactureInsApi* | [**deleteFactureInsBatch**](docs/Api/FactureInsApi.md#deletefactureinsbatch) | **POST** /entity/facturein/delete | Массовое удаление Счетов-фактур полученных
*FactureInsApi* | [**getFactureInById**](docs/Api/FactureInsApi.md#getfactureinbyid) | **GET** /entity/facturein/{id} | Получить Счет-фактуру полученный
*FactureInsApi* | [**getFactureInMetadata**](docs/Api/FactureInsApi.md#getfactureinmetadata) | **GET** /entity/facturein/metadata | Метаданные Счетов-фактур полученных
*FactureInsApi* | [**getFactureInMetadataAttributeById**](docs/Api/FactureInsApi.md#getfactureinmetadataattributebyid) | **GET** /entity/facturein/metadata/attributes/{id} | Отдельное доп. поле Счета-фактуры полученного
*FactureInsApi* | [**getFactureInMetadataAttributes**](docs/Api/FactureInsApi.md#getfactureinmetadataattributes) | **GET** /entity/facturein/metadata/attributes | Доп. поля Счетов-фактур полученных
*FactureInsApi* | [**getFactureInMetadataStateById**](docs/Api/FactureInsApi.md#getfactureinmetadatastatebyid) | **GET** /entity/facturein/metadata/states/{id} | Отдельный статус Счета-фактуры полученного
*FactureInsApi* | [**getFactureInTemplate**](docs/Api/FactureInsApi.md#getfactureintemplate) | **PUT** /entity/facturein/new | Шаблон Счета-фактуры полученного
*FactureInsApi* | [**getFactureIns**](docs/Api/FactureInsApi.md#getfactureins) | **GET** /entity/facturein | Получить список Счетов-фактур полученных
*FactureInsApi* | [**updateFactureIn**](docs/Api/FactureInsApi.md#updatefacturein) | **PUT** /entity/facturein/{id} | Изменить Счет-фактуру полученный
*FactureInsApi* | [**updateFactureInMetadataAttributeById**](docs/Api/FactureInsApi.md#updatefactureinmetadataattributebyid) | **PUT** /entity/facturein/metadata/attributes/{id} | Обновить отдельное доп. поле Счета-фактуры полученного
*FactureInsApi* | [**updateFactureInMetadataStateById**](docs/Api/FactureInsApi.md#updatefactureinmetadatastatebyid) | **PUT** /entity/facturein/metadata/states/{id} | Обновить отдельный статус Счета-фактуры полученного
*FactureOutsApi* | [**createFactureOut**](docs/Api/FactureOutsApi.md#createfactureout) | **POST** /entity/factureout | Создать Счет-фактуру выданный
*FactureOutsApi* | [**createFactureOutMetadataAttribute**](docs/Api/FactureOutsApi.md#createfactureoutmetadataattribute) | **POST** /entity/factureout/metadata/attributes | Создать доп. поле Счета-фактуры выданного
*FactureOutsApi* | [**createFactureOutMetadataState**](docs/Api/FactureOutsApi.md#createfactureoutmetadatastate) | **POST** /entity/factureout/metadata/states | Создать статус Счета-фактуры выданного
*FactureOutsApi* | [**createFactureOutMetadataStatesBatch**](docs/Api/FactureOutsApi.md#createfactureoutmetadatastatesbatch) | **POST** /entity/factureout/metadata/states/batch | Массовое создание и обновление статусов Счета-фактуры выданного
*FactureOutsApi* | [**createFactureOutsBatch**](docs/Api/FactureOutsApi.md#createfactureoutsbatch) | **POST** /entity/factureout/batch | Массовое создание и обновление Счетов-фактур выданных
*FactureOutsApi* | [**deleteFactureOut**](docs/Api/FactureOutsApi.md#deletefactureout) | **DELETE** /entity/factureout/{id} | Удалить Счет-фактуру выданный
*FactureOutsApi* | [**deleteFactureOutMetadataAttributeById**](docs/Api/FactureOutsApi.md#deletefactureoutmetadataattributebyid) | **DELETE** /entity/factureout/metadata/attributes/{id} | Удалить отдельное доп. поле Счета-фактуры выданного
*FactureOutsApi* | [**deleteFactureOutMetadataStateById**](docs/Api/FactureOutsApi.md#deletefactureoutmetadatastatebyid) | **DELETE** /entity/factureout/metadata/states/{id} | Удалить отдельный статус Счета-фактуры выданного
*FactureOutsApi* | [**deleteFactureOutsBatch**](docs/Api/FactureOutsApi.md#deletefactureoutsbatch) | **POST** /entity/factureout/delete | Массовое удаление Счетов-фактур выданных
*FactureOutsApi* | [**getFactureOutById**](docs/Api/FactureOutsApi.md#getfactureoutbyid) | **GET** /entity/factureout/{id} | Получить Счет-фактуру выданный
*FactureOutsApi* | [**getFactureOutMetadata**](docs/Api/FactureOutsApi.md#getfactureoutmetadata) | **GET** /entity/factureout/metadata | Метаданные Счетов-фактур выданных
*FactureOutsApi* | [**getFactureOutMetadataAttributeById**](docs/Api/FactureOutsApi.md#getfactureoutmetadataattributebyid) | **GET** /entity/factureout/metadata/attributes/{id} | Отдельное доп. поле Счета-фактуры выданного
*FactureOutsApi* | [**getFactureOutMetadataAttributes**](docs/Api/FactureOutsApi.md#getfactureoutmetadataattributes) | **GET** /entity/factureout/metadata/attributes | Доп. поля Счетов-фактур выданных
*FactureOutsApi* | [**getFactureOutMetadataStateById**](docs/Api/FactureOutsApi.md#getfactureoutmetadatastatebyid) | **GET** /entity/factureout/metadata/states/{id} | Отдельный статус Счета-фактуры выданного
*FactureOutsApi* | [**getFactureOutTemplate**](docs/Api/FactureOutsApi.md#getfactureouttemplate) | **PUT** /entity/factureout/new | Шаблон Счета-фактуры выданного
*FactureOutsApi* | [**getFactureOuts**](docs/Api/FactureOutsApi.md#getfactureouts) | **GET** /entity/factureout | Получить список Счетов-фактур выданных
*FactureOutsApi* | [**updateFactureOut**](docs/Api/FactureOutsApi.md#updatefactureout) | **PUT** /entity/factureout/{id} | Изменить Счет-фактуру выданный
*FactureOutsApi* | [**updateFactureOutMetadataAttributeById**](docs/Api/FactureOutsApi.md#updatefactureoutmetadataattributebyid) | **PUT** /entity/factureout/metadata/attributes/{id} | Обновить отдельное доп. поле Счета-фактуры выданного
*FactureOutsApi* | [**updateFactureOutMetadataStateById**](docs/Api/FactureOutsApi.md#updatefactureoutmetadatastatebyid) | **PUT** /entity/factureout/metadata/states/{id} | Обновить отдельный статус Счета-фактуры выданного
*GroupsApi* | [**createGroup**](docs/Api/GroupsApi.md#creategroup) | **POST** /entity/group | Создать группу
*GroupsApi* | [**deleteGroup**](docs/Api/GroupsApi.md#deletegroup) | **DELETE** /entity/group/{id} | Удалить группу
*GroupsApi* | [**getGroupById**](docs/Api/GroupsApi.md#getgroupbyid) | **GET** /entity/group/{id} | Получить группу по ID
*GroupsApi* | [**getGroups**](docs/Api/GroupsApi.md#getgroups) | **GET** /entity/group | Получить список групп
*GroupsApi* | [**updateGroup**](docs/Api/GroupsApi.md#updategroup) | **PUT** /entity/group/{id} | Обновить группу
*InternalOrdersApi* | [**createInternalOrder**](docs/Api/InternalOrdersApi.md#createinternalorder) | **POST** /entity/internalorder | Создать InternalOrder
*InternalOrdersApi* | [**createInternalOrderBatch**](docs/Api/InternalOrdersApi.md#createinternalorderbatch) | **POST** /entity/internalorder/batch | Массовое создание и обновление InternalOrder
*InternalOrdersApi* | [**createInternalOrderMetadataAttribute**](docs/Api/InternalOrdersApi.md#createinternalordermetadataattribute) | **POST** /entity/internalorder/metadata/attributes | Создать Доп. поле InternalOrder
*InternalOrdersApi* | [**createInternalOrderMetadataState**](docs/Api/InternalOrdersApi.md#createinternalordermetadatastate) | **POST** /entity/internalorder/metadata/states | Создать статус InternalOrder
*InternalOrdersApi* | [**createInternalOrderMetadataStatesBatch**](docs/Api/InternalOrdersApi.md#createinternalordermetadatastatesbatch) | **POST** /entity/internalorder/metadata/states/batch | Массовое создание и обновление статусов InternalOrder
*InternalOrdersApi* | [**createInternalOrderPosition**](docs/Api/InternalOrdersApi.md#createinternalorderposition) | **POST** /entity/internalorder/{id}/positions | Создать и обновить позицию Внутреннего заказа
*InternalOrdersApi* | [**createInternalOrderPositions**](docs/Api/InternalOrdersApi.md#createinternalorderpositions) | **POST** /entity/internalorder/{id}/positions/batch | Массовое создание и обновление позиций Внутреннего заказа
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
*InventoriesApi* | [**addInventoryFiles**](docs/Api/InventoriesApi.md#addinventoryfiles) | **POST** /entity/inventory/{id}/files | Добавить файлы к Инвентаризации
*InventoriesApi* | [**createInventoriesBatch**](docs/Api/InventoriesApi.md#createinventoriesbatch) | **POST** /entity/inventory/batch | Массовое создание и обновление Инвентаризации
*InventoriesApi* | [**createInventory**](docs/Api/InventoriesApi.md#createinventory) | **POST** /entity/inventory | Создать Инвентаризацию
*InventoriesApi* | [**createInventoryMetadataAttribute**](docs/Api/InventoriesApi.md#createinventorymetadataattribute) | **POST** /entity/inventory/metadata/attributes | Создать доп. поле Инвентаризаций
*InventoriesApi* | [**createInventoryMetadataState**](docs/Api/InventoriesApi.md#createinventorymetadatastate) | **POST** /entity/inventory/metadata/states | Создать статус Инвентаризации
*InventoriesApi* | [**createInventoryMetadataStatesBatch**](docs/Api/InventoriesApi.md#createinventorymetadatastatesbatch) | **POST** /entity/inventory/metadata/states/batch | Массовое создание и обновление статусов Инвентаризации
*InventoriesApi* | [**createInventoryPosition**](docs/Api/InventoriesApi.md#createinventoryposition) | **POST** /entity/inventory/{id}/positions | Создать и обновить позицию Инвентаризации
*InventoriesApi* | [**createInventoryPositions**](docs/Api/InventoriesApi.md#createinventorypositions) | **POST** /entity/inventory/{id}/positions/batch | Массовое создание и обновление позиций Инвентаризации
*InventoriesApi* | [**deleteInventoriesBatch**](docs/Api/InventoriesApi.md#deleteinventoriesbatch) | **POST** /entity/inventory/delete | Массовое удаление Инвентаризации
*InventoriesApi* | [**deleteInventory**](docs/Api/InventoriesApi.md#deleteinventory) | **DELETE** /entity/inventory/{id} | Удалить Инвентаризацию
*InventoriesApi* | [**deleteInventoryFile**](docs/Api/InventoriesApi.md#deleteinventoryfile) | **DELETE** /entity/inventory/{id}/files/{fileId} | Удалить файл Инвентаризации
*InventoriesApi* | [**deleteInventoryMetadataAttributeById**](docs/Api/InventoriesApi.md#deleteinventorymetadataattributebyid) | **DELETE** /entity/inventory/metadata/attributes/{id} | Удалить отдельное доп. поле Инвентаризаций
*InventoriesApi* | [**deleteInventoryMetadataStateById**](docs/Api/InventoriesApi.md#deleteinventorymetadatastatebyid) | **DELETE** /entity/inventory/metadata/states/{id} | Удалить отдельный статус Инвентаризации
*InventoriesApi* | [**deleteInventoryPosition**](docs/Api/InventoriesApi.md#deleteinventoryposition) | **DELETE** /entity/inventory/{id}/positions/{positionId} | Удалить позицию Инвентаризации
*InventoriesApi* | [**deleteInventoryPositionsBatch**](docs/Api/InventoriesApi.md#deleteinventorypositionsbatch) | **POST** /entity/inventory/{id}/positions/delete | Массовое удаление позиций Инвентаризации
*InventoriesApi* | [**getInventoryById**](docs/Api/InventoriesApi.md#getinventorybyid) | **GET** /entity/inventory/{id} | Получить Инвентаризацию с указанным id
*InventoriesApi* | [**getInventoryFiles**](docs/Api/InventoriesApi.md#getinventoryfiles) | **GET** /entity/inventory/{id}/files | Получить файлы Инвентаризации
*InventoriesApi* | [**getInventoryList**](docs/Api/InventoriesApi.md#getinventorylist) | **GET** /entity/inventory | Получить список Инвентаризаций
*InventoriesApi* | [**getInventoryMetadata**](docs/Api/InventoriesApi.md#getinventorymetadata) | **GET** /entity/inventory/metadata | Метаданные Инвентаризаций
*InventoriesApi* | [**getInventoryMetadataAttribute**](docs/Api/InventoriesApi.md#getinventorymetadataattribute) | **GET** /entity/inventory/metadata/attributes | Доп. поля Инвентаризаций
*InventoriesApi* | [**getInventoryMetadataAttributeById**](docs/Api/InventoriesApi.md#getinventorymetadataattributebyid) | **GET** /entity/inventory/metadata/attributes/{id} | Отдельное доп. поле Инвентаризаций
*InventoriesApi* | [**getInventoryMetadataStateById**](docs/Api/InventoriesApi.md#getinventorymetadatastatebyid) | **GET** /entity/inventory/metadata/states/{id} | Отдельный статус Инвентаризации
*InventoriesApi* | [**getInventoryPositionById**](docs/Api/InventoriesApi.md#getinventorypositionbyid) | **GET** /entity/inventory/{id}/positions/{positionId} | Получить позицию Инвентаризации
*InventoriesApi* | [**getInventoryPositions**](docs/Api/InventoriesApi.md#getinventorypositions) | **GET** /entity/inventory/{id}/positions | Получить позиции Инвентаризации
*InventoriesApi* | [**getInventoryTemplate**](docs/Api/InventoriesApi.md#getinventorytemplate) | **PUT** /entity/inventory/new | Шаблон Инвентаризации
*InventoriesApi* | [**recalculateInventoryCalculatedQuantity**](docs/Api/InventoriesApi.md#recalculateinventorycalculatedquantity) | **PUT** /rpc/inventory/{id}/recalcCalculatedQuantity | Пересчитать расчетный остаток в Инвентаризации
*InventoriesApi* | [**updateInventory**](docs/Api/InventoriesApi.md#updateinventory) | **PUT** /entity/inventory/{id} | Изменить Инвентаризацию
*InventoriesApi* | [**updateInventoryMetadataAttributeById**](docs/Api/InventoriesApi.md#updateinventorymetadataattributebyid) | **PUT** /entity/inventory/metadata/attributes/{id} | Обновить отдельное доп. поле Инвентаризаций
*InventoriesApi* | [**updateInventoryMetadataStateById**](docs/Api/InventoriesApi.md#updateinventorymetadatastatebyid) | **PUT** /entity/inventory/metadata/states/{id} | Обновить отдельный статус Инвентаризации
*InventoriesApi* | [**updateInventoryPosition**](docs/Api/InventoriesApi.md#updateinventoryposition) | **PUT** /entity/inventory/{id}/positions/{positionId} | Изменить позицию Инвентаризации
*InvoiceInsApi* | [**addInvoiceInFiles**](docs/Api/InvoiceInsApi.md#addinvoiceinfiles) | **POST** /entity/invoicein/{id}/files | Добавить файлы к Счету поставщику
*InvoiceInsApi* | [**createInvoiceIn**](docs/Api/InvoiceInsApi.md#createinvoicein) | **POST** /entity/invoicein | Создать Счет поставщику
*InvoiceInsApi* | [**createInvoiceInBatch**](docs/Api/InvoiceInsApi.md#createinvoiceinbatch) | **POST** /entity/invoicein/batch | Массовое создание и обновление Счетов поставщикам
*InvoiceInsApi* | [**createInvoiceInMetadataAttribute**](docs/Api/InvoiceInsApi.md#createinvoiceinmetadataattribute) | **POST** /entity/invoicein/metadata/attributes | Создать Доп. поле InvoiceIn
*InvoiceInsApi* | [**createInvoiceInMetadataState**](docs/Api/InvoiceInsApi.md#createinvoiceinmetadatastate) | **POST** /entity/invoicein/metadata/states | Создать статус InvoiceIn
*InvoiceInsApi* | [**createInvoiceInMetadataStatesBatch**](docs/Api/InvoiceInsApi.md#createinvoiceinmetadatastatesbatch) | **POST** /entity/invoicein/metadata/states/batch | Массовое создание и обновление статусов InvoiceIn
*InvoiceInsApi* | [**createInvoiceInNote**](docs/Api/InvoiceInsApi.md#createinvoiceinnote) | **POST** /entity/invoicein/{id}/notes | Добавить Событие Счета поставщику
*InvoiceInsApi* | [**createInvoiceInPositions**](docs/Api/InvoiceInsApi.md#createinvoiceinpositions) | **POST** /entity/invoicein/{id}/positions | Создать позицию Счета поставщику
*InvoiceInsApi* | [**createInvoiceInPositionsBatch**](docs/Api/InvoiceInsApi.md#createinvoiceinpositionsbatch) | **POST** /entity/invoicein/{id}/positions/batch | Создать позиции Счета поставщику
*InvoiceInsApi* | [**deleteInvoiceIn**](docs/Api/InvoiceInsApi.md#deleteinvoicein) | **DELETE** /entity/invoicein/{id} | Удалить Счет поставщику
*InvoiceInsApi* | [**deleteInvoiceInBatch**](docs/Api/InvoiceInsApi.md#deleteinvoiceinbatch) | **POST** /entity/invoicein/delete | Массовое удаление Счетов поставщикам
*InvoiceInsApi* | [**deleteInvoiceInFile**](docs/Api/InvoiceInsApi.md#deleteinvoiceinfile) | **DELETE** /entity/invoicein/{id}/files/{fileId} | Удалить файл Счета поставщику
*InvoiceInsApi* | [**deleteInvoiceInMetadataAttributeById**](docs/Api/InvoiceInsApi.md#deleteinvoiceinmetadataattributebyid) | **DELETE** /entity/invoicein/metadata/attributes/{id} | Удалить отдельное доп. поле InvoiceIn
*InvoiceInsApi* | [**deleteInvoiceInMetadataStateById**](docs/Api/InvoiceInsApi.md#deleteinvoiceinmetadatastatebyid) | **DELETE** /entity/invoicein/metadata/states/{id} | Удалить отдельный статус InvoiceIn
*InvoiceInsApi* | [**deleteInvoiceInNote**](docs/Api/InvoiceInsApi.md#deleteinvoiceinnote) | **DELETE** /entity/invoicein/{id}/notes/{noteId} | Удалить Событие Счета поставщику
*InvoiceInsApi* | [**deleteInvoiceInPosition**](docs/Api/InvoiceInsApi.md#deleteinvoiceinposition) | **DELETE** /entity/invoicein/{id}/positions/{positionId} | Удалить позицию Счета поставщику
*InvoiceInsApi* | [**deleteInvoiceInPositionsBatch**](docs/Api/InvoiceInsApi.md#deleteinvoiceinpositionsbatch) | **POST** /entity/invoicein/{id}/positions/delete | Массовое удаление позиций Счета поставщику
*InvoiceInsApi* | [**getInvoiceInById**](docs/Api/InvoiceInsApi.md#getinvoiceinbyid) | **GET** /entity/invoicein/{id} | Получить Счет поставщику
*InvoiceInsApi* | [**getInvoiceInFile**](docs/Api/InvoiceInsApi.md#getinvoiceinfile) | **GET** /entity/invoicein/{id}/files/{fileId} | Получить файл Счета поставщику
*InvoiceInsApi* | [**getInvoiceInFiles**](docs/Api/InvoiceInsApi.md#getinvoiceinfiles) | **GET** /entity/invoicein/{id}/files | Получить файлы Счета поставщику
*InvoiceInsApi* | [**getInvoiceInList**](docs/Api/InvoiceInsApi.md#getinvoiceinlist) | **GET** /entity/invoicein | Получить список Счетов поставщикам
*InvoiceInsApi* | [**getInvoiceInMetadata**](docs/Api/InvoiceInsApi.md#getinvoiceinmetadata) | **GET** /entity/invoicein/metadata | Метаданные Счетов поставщикам
*InvoiceInsApi* | [**getInvoiceInMetadataAttribute**](docs/Api/InvoiceInsApi.md#getinvoiceinmetadataattribute) | **GET** /entity/invoicein/metadata/attributes | Доп. поля InvoiceIn
*InvoiceInsApi* | [**getInvoiceInMetadataAttributeById**](docs/Api/InvoiceInsApi.md#getinvoiceinmetadataattributebyid) | **GET** /entity/invoicein/metadata/attributes/{id} | Отдельное доп. поле InvoiceIn
*InvoiceInsApi* | [**getInvoiceInMetadataStateById**](docs/Api/InvoiceInsApi.md#getinvoiceinmetadatastatebyid) | **GET** /entity/invoicein/metadata/states/{id} | Отдельный статус InvoiceIn
*InvoiceInsApi* | [**getInvoiceInNoteById**](docs/Api/InvoiceInsApi.md#getinvoiceinnotebyid) | **GET** /entity/invoicein/{id}/notes/{noteId} | Получить Событие Счета поставщику по ID
*InvoiceInsApi* | [**getInvoiceInNotes**](docs/Api/InvoiceInsApi.md#getinvoiceinnotes) | **GET** /entity/invoicein/{id}/notes | Получить список Событий Счета поставщику
*InvoiceInsApi* | [**getInvoiceInPositionById**](docs/Api/InvoiceInsApi.md#getinvoiceinpositionbyid) | **GET** /entity/invoicein/{id}/positions/{positionId} | Получить позицию Счета поставщику
*InvoiceInsApi* | [**getInvoiceInPositions**](docs/Api/InvoiceInsApi.md#getinvoiceinpositions) | **GET** /entity/invoicein/{id}/positions | Получить позиции Счета поставщику
*InvoiceInsApi* | [**getInvoiceInTemplate**](docs/Api/InvoiceInsApi.md#getinvoiceintemplate) | **PUT** /entity/invoicein/new | Шаблон Счета поставщику
*InvoiceInsApi* | [**updateInvoiceIn**](docs/Api/InvoiceInsApi.md#updateinvoicein) | **PUT** /entity/invoicein/{id} | Изменить Счет поставщику
*InvoiceInsApi* | [**updateInvoiceInMetadataAttributeById**](docs/Api/InvoiceInsApi.md#updateinvoiceinmetadataattributebyid) | **PUT** /entity/invoicein/metadata/attributes/{id} | Обновить отдельное доп. поле InvoiceIn
*InvoiceInsApi* | [**updateInvoiceInMetadataStateById**](docs/Api/InvoiceInsApi.md#updateinvoiceinmetadatastatebyid) | **PUT** /entity/invoicein/metadata/states/{id} | Обновить отдельный статус InvoiceIn
*InvoiceInsApi* | [**updateInvoiceInNote**](docs/Api/InvoiceInsApi.md#updateinvoiceinnote) | **PUT** /entity/invoicein/{id}/notes/{noteId} | Обновить Событие Счета поставщику
*InvoiceInsApi* | [**updateInvoiceInPosition**](docs/Api/InvoiceInsApi.md#updateinvoiceinposition) | **PUT** /entity/invoicein/{id}/positions/{positionId} | Изменить позицию Счета поставщику
*InvoiceOutsApi* | [**addInvoiceOutFiles**](docs/Api/InvoiceOutsApi.md#addinvoiceoutfiles) | **POST** /entity/invoiceout/{id}/files | Добавить файлы к Счету покупателю
*InvoiceOutsApi* | [**createInvoiceOut**](docs/Api/InvoiceOutsApi.md#createinvoiceout) | **POST** /entity/invoiceout | Создать Счет покупателю
*InvoiceOutsApi* | [**createInvoiceOutBatch**](docs/Api/InvoiceOutsApi.md#createinvoiceoutbatch) | **POST** /entity/invoiceout/batch | Массовое создание и обновление Счетов покупателям
*InvoiceOutsApi* | [**createInvoiceOutMetadataAttribute**](docs/Api/InvoiceOutsApi.md#createinvoiceoutmetadataattribute) | **POST** /entity/invoiceout/metadata/attributes | Создать Доп. поле InvoiceOut
*InvoiceOutsApi* | [**createInvoiceOutMetadataState**](docs/Api/InvoiceOutsApi.md#createinvoiceoutmetadatastate) | **POST** /entity/invoiceout/metadata/states | Создать статус InvoiceOut
*InvoiceOutsApi* | [**createInvoiceOutMetadataStatesBatch**](docs/Api/InvoiceOutsApi.md#createinvoiceoutmetadatastatesbatch) | **POST** /entity/invoiceout/metadata/states/batch | Массовое создание и обновление статусов InvoiceOut
*InvoiceOutsApi* | [**createInvoiceOutNote**](docs/Api/InvoiceOutsApi.md#createinvoiceoutnote) | **POST** /entity/invoiceout/{id}/notes | Добавить Событие Счета покупателю
*InvoiceOutsApi* | [**createInvoiceOutPositions**](docs/Api/InvoiceOutsApi.md#createinvoiceoutpositions) | **POST** /entity/invoiceout/{id}/positions | Создать позицию Счета покупателю
*InvoiceOutsApi* | [**createInvoiceOutPositionsBatch**](docs/Api/InvoiceOutsApi.md#createinvoiceoutpositionsbatch) | **POST** /entity/invoiceout/{id}/positions/batch | Создать позиции Счета покупателю
*InvoiceOutsApi* | [**deleteInvoiceOut**](docs/Api/InvoiceOutsApi.md#deleteinvoiceout) | **DELETE** /entity/invoiceout/{id} | Удалить Счет покупателю
*InvoiceOutsApi* | [**deleteInvoiceOutBatch**](docs/Api/InvoiceOutsApi.md#deleteinvoiceoutbatch) | **POST** /entity/invoiceout/delete | Массовое удаление Счетов покупателям
*InvoiceOutsApi* | [**deleteInvoiceOutFile**](docs/Api/InvoiceOutsApi.md#deleteinvoiceoutfile) | **DELETE** /entity/invoiceout/{id}/files/{fileId} | Удалить файл Счета покупателю
*InvoiceOutsApi* | [**deleteInvoiceOutMetadataAttributeById**](docs/Api/InvoiceOutsApi.md#deleteinvoiceoutmetadataattributebyid) | **DELETE** /entity/invoiceout/metadata/attributes/{id} | Удалить отдельное доп. поле InvoiceOut
*InvoiceOutsApi* | [**deleteInvoiceOutMetadataStateById**](docs/Api/InvoiceOutsApi.md#deleteinvoiceoutmetadatastatebyid) | **DELETE** /entity/invoiceout/metadata/states/{id} | Удалить отдельный статус InvoiceOut
*InvoiceOutsApi* | [**deleteInvoiceOutNote**](docs/Api/InvoiceOutsApi.md#deleteinvoiceoutnote) | **DELETE** /entity/invoiceout/{id}/notes/{noteId} | Удалить Событие Счета покупателю
*InvoiceOutsApi* | [**deleteInvoiceOutPosition**](docs/Api/InvoiceOutsApi.md#deleteinvoiceoutposition) | **DELETE** /entity/invoiceout/{id}/positions/{positionId} | Удалить позицию Счета покупателю
*InvoiceOutsApi* | [**deleteInvoiceOutPositionsBatch**](docs/Api/InvoiceOutsApi.md#deleteinvoiceoutpositionsbatch) | **POST** /entity/invoiceout/{id}/positions/delete | Массовое удаление позиций Счета покупателю
*InvoiceOutsApi* | [**getInvoiceOutById**](docs/Api/InvoiceOutsApi.md#getinvoiceoutbyid) | **GET** /entity/invoiceout/{id} | Получить Счет покупателю
*InvoiceOutsApi* | [**getInvoiceOutFile**](docs/Api/InvoiceOutsApi.md#getinvoiceoutfile) | **GET** /entity/invoiceout/{id}/files/{fileId} | Получить файл Счета покупателю
*InvoiceOutsApi* | [**getInvoiceOutFiles**](docs/Api/InvoiceOutsApi.md#getinvoiceoutfiles) | **GET** /entity/invoiceout/{id}/files | Получить файлы Счета покупателю
*InvoiceOutsApi* | [**getInvoiceOutList**](docs/Api/InvoiceOutsApi.md#getinvoiceoutlist) | **GET** /entity/invoiceout | Получить список Счетов покупателям
*InvoiceOutsApi* | [**getInvoiceOutMetadata**](docs/Api/InvoiceOutsApi.md#getinvoiceoutmetadata) | **GET** /entity/invoiceout/metadata | Метаданные Счетов покупателям
*InvoiceOutsApi* | [**getInvoiceOutMetadataAttribute**](docs/Api/InvoiceOutsApi.md#getinvoiceoutmetadataattribute) | **GET** /entity/invoiceout/metadata/attributes | Доп. поля InvoiceOut
*InvoiceOutsApi* | [**getInvoiceOutMetadataAttributeById**](docs/Api/InvoiceOutsApi.md#getinvoiceoutmetadataattributebyid) | **GET** /entity/invoiceout/metadata/attributes/{id} | Отдельное доп. поле InvoiceOut
*InvoiceOutsApi* | [**getInvoiceOutMetadataStateById**](docs/Api/InvoiceOutsApi.md#getinvoiceoutmetadatastatebyid) | **GET** /entity/invoiceout/metadata/states/{id} | Отдельный статус InvoiceOut
*InvoiceOutsApi* | [**getInvoiceOutNoteById**](docs/Api/InvoiceOutsApi.md#getinvoiceoutnotebyid) | **GET** /entity/invoiceout/{id}/notes/{noteId} | Получить Событие Счета покупателю по ID
*InvoiceOutsApi* | [**getInvoiceOutNotes**](docs/Api/InvoiceOutsApi.md#getinvoiceoutnotes) | **GET** /entity/invoiceout/{id}/notes | Получить список Событий Счета покупателю
*InvoiceOutsApi* | [**getInvoiceOutPositionById**](docs/Api/InvoiceOutsApi.md#getinvoiceoutpositionbyid) | **GET** /entity/invoiceout/{id}/positions/{positionId} | Получить позицию Счета покупателю
*InvoiceOutsApi* | [**getInvoiceOutPositions**](docs/Api/InvoiceOutsApi.md#getinvoiceoutpositions) | **GET** /entity/invoiceout/{id}/positions | Получить позиции Счета покупателю
*InvoiceOutsApi* | [**getInvoiceOutTemplate**](docs/Api/InvoiceOutsApi.md#getinvoiceouttemplate) | **PUT** /entity/invoiceout/new | Шаблон Счета покупателю
*InvoiceOutsApi* | [**updateInvoiceOut**](docs/Api/InvoiceOutsApi.md#updateinvoiceout) | **PUT** /entity/invoiceout/{id} | Изменить Счет покупателю
*InvoiceOutsApi* | [**updateInvoiceOutMetadataAttributeById**](docs/Api/InvoiceOutsApi.md#updateinvoiceoutmetadataattributebyid) | **PUT** /entity/invoiceout/metadata/attributes/{id} | Обновить отдельное доп. поле InvoiceOut
*InvoiceOutsApi* | [**updateInvoiceOutMetadataStateById**](docs/Api/InvoiceOutsApi.md#updateinvoiceoutmetadatastatebyid) | **PUT** /entity/invoiceout/metadata/states/{id} | Обновить отдельный статус InvoiceOut
*InvoiceOutsApi* | [**updateInvoiceOutNote**](docs/Api/InvoiceOutsApi.md#updateinvoiceoutnote) | **PUT** /entity/invoiceout/{id}/notes/{noteId} | Обновить Событие Счета покупателю
*InvoiceOutsApi* | [**updateInvoiceOutPosition**](docs/Api/InvoiceOutsApi.md#updateinvoiceoutposition) | **PUT** /entity/invoiceout/{id}/positions/{positionId} | Изменить позицию Счета покупателю
*LabelsApi* | [**printLabels**](docs/Api/LabelsApi.md#printlabels) | **POST** /entity/{type}/{id}/export | Запрос на печать этикеток и ценников
*LossesApi* | [**createLoss**](docs/Api/LossesApi.md#createloss) | **POST** /entity/loss | Создать Списание
*LossesApi* | [**createLossBatch**](docs/Api/LossesApi.md#createlossbatch) | **POST** /entity/loss/batch | Массовое создание и обновление Списаний
*LossesApi* | [**createLossMetadataAttribute**](docs/Api/LossesApi.md#createlossmetadataattribute) | **POST** /entity/loss/metadata/attributes | Создать доп. поле Списания
*LossesApi* | [**createLossMetadataState**](docs/Api/LossesApi.md#createlossmetadatastate) | **POST** /entity/loss/metadata/states | Создать статус Списания
*LossesApi* | [**createLossMetadataStatesBatch**](docs/Api/LossesApi.md#createlossmetadatastatesbatch) | **POST** /entity/loss/metadata/states/batch | Массовое создание и обновление статусов Списания
*LossesApi* | [**createLossPosition**](docs/Api/LossesApi.md#createlossposition) | **POST** /entity/loss/{id}/positions | Создать и обновить позицию Списания
*LossesApi* | [**createLossPositions**](docs/Api/LossesApi.md#createlosspositions) | **POST** /entity/loss/{id}/positions/batch | Массовое создание и обновление позиций Списания
*LossesApi* | [**deleteLoss**](docs/Api/LossesApi.md#deleteloss) | **DELETE** /entity/loss/{id} | Удалить Списание
*LossesApi* | [**deleteLossBatch**](docs/Api/LossesApi.md#deletelossbatch) | **POST** /entity/loss/delete | Массовое удаление Списаний
*LossesApi* | [**deleteLossMetadataAttributeById**](docs/Api/LossesApi.md#deletelossmetadataattributebyid) | **DELETE** /entity/loss/metadata/attributes/{id} | Удалить отдельное доп. поле Списания
*LossesApi* | [**deleteLossMetadataStateById**](docs/Api/LossesApi.md#deletelossmetadatastatebyid) | **DELETE** /entity/loss/metadata/states/{id} | Удалить отдельный статус Списания
*LossesApi* | [**deleteLossPosition**](docs/Api/LossesApi.md#deletelossposition) | **DELETE** /entity/loss/{id}/positions/{positionId} | Удалить позицию Списания
*LossesApi* | [**deleteLossPositionsBatch**](docs/Api/LossesApi.md#deletelosspositionsbatch) | **POST** /entity/loss/{id}/positions/delete | Массовое удаление позиций Списания
*LossesApi* | [**getLossById**](docs/Api/LossesApi.md#getlossbyid) | **GET** /entity/loss/{id} | Получить Списание
*LossesApi* | [**getLossList**](docs/Api/LossesApi.md#getlosslist) | **GET** /entity/loss | Получить список Списаний
*LossesApi* | [**getLossMetadata**](docs/Api/LossesApi.md#getlossmetadata) | **GET** /entity/loss/metadata | Метаданные Списаний
*LossesApi* | [**getLossMetadataAttribute**](docs/Api/LossesApi.md#getlossmetadataattribute) | **GET** /entity/loss/metadata/attributes | Доп. поля Списания
*LossesApi* | [**getLossMetadataAttributeById**](docs/Api/LossesApi.md#getlossmetadataattributebyid) | **GET** /entity/loss/metadata/attributes/{id} | Отдельное доп. поле Списания
*LossesApi* | [**getLossMetadataStateById**](docs/Api/LossesApi.md#getlossmetadatastatebyid) | **GET** /entity/loss/metadata/states/{id} | Отдельный статус Списания
*LossesApi* | [**getLossPositionById**](docs/Api/LossesApi.md#getlosspositionbyid) | **GET** /entity/loss/{id}/positions/{positionId} | Получить позицию Списания
*LossesApi* | [**getLossPositions**](docs/Api/LossesApi.md#getlosspositions) | **GET** /entity/loss/{id}/positions | Получить позиции Списания
*LossesApi* | [**getLossTemplate**](docs/Api/LossesApi.md#getlosstemplate) | **PUT** /entity/loss/new | Шаблон Списания
*LossesApi* | [**updateLoss**](docs/Api/LossesApi.md#updateloss) | **PUT** /entity/loss/{id} | Изменить Списание
*LossesApi* | [**updateLossMetadataAttributeById**](docs/Api/LossesApi.md#updatelossmetadataattributebyid) | **PUT** /entity/loss/metadata/attributes/{id} | Обновить отдельное доп. поле Списания
*LossesApi* | [**updateLossMetadataStateById**](docs/Api/LossesApi.md#updatelossmetadatastatebyid) | **PUT** /entity/loss/metadata/states/{id} | Обновить отдельный статус Списания
*LossesApi* | [**updateLossPosition**](docs/Api/LossesApi.md#updatelossposition) | **PUT** /entity/loss/{id}/positions/{positionId} | Изменить позицию Списания
*MetadataApi* | [**getEmbeddedTemplateByTypeAndId**](docs/Api/MetadataApi.md#getembeddedtemplatebytypeandid) | **GET** /entity/{type}/metadata/embeddedtemplate/{id} | Получить Стандартный шаблон печатной формы
*MetadataApi* | [**getEmbeddedTemplatesForType**](docs/Api/MetadataApi.md#getembeddedtemplatesfortype) | **GET** /entity/{type}/metadata/embeddedtemplate | Получить Стандартные шаблоны печатных форм
*MetadataApi* | [**getMetadataForType**](docs/Api/MetadataApi.md#getmetadatafortype) | **GET** /entity/{type}/metadata | Получить метаданные сущности
*MovesApi* | [**addMoveFiles**](docs/Api/MovesApi.md#addmovefiles) | **POST** /entity/move/{id}/files | Добавить файлы к перемещению
*MovesApi* | [**createMove**](docs/Api/MovesApi.md#createmove) | **POST** /entity/move | Создать Перемещение
*MovesApi* | [**createMoveBatch**](docs/Api/MovesApi.md#createmovebatch) | **POST** /entity/move/batch | Массовое создание и обновление Перемещений
*MovesApi* | [**createMoveMetadataAttribute**](docs/Api/MovesApi.md#createmovemetadataattribute) | **POST** /entity/move/metadata/attributes | Создать доп. поле Перемещения
*MovesApi* | [**createMoveMetadataState**](docs/Api/MovesApi.md#createmovemetadatastate) | **POST** /entity/move/metadata/states | Создать статус Перемещения
*MovesApi* | [**createMoveMetadataStatesBatch**](docs/Api/MovesApi.md#createmovemetadatastatesbatch) | **POST** /entity/move/metadata/states/batch | Массовое создание и обновление статусов Перемещения
*MovesApi* | [**createMovePosition**](docs/Api/MovesApi.md#createmoveposition) | **POST** /entity/move/{id}/positions | Создать и обновить позицию Перемещения
*MovesApi* | [**createMovePositions**](docs/Api/MovesApi.md#createmovepositions) | **POST** /entity/move/{id}/positions/batch | Массовое создание и обновление позиций Перемещения
*MovesApi* | [**deleteMove**](docs/Api/MovesApi.md#deletemove) | **DELETE** /entity/move/{id} | Удалить Перемещение
*MovesApi* | [**deleteMoveBatch**](docs/Api/MovesApi.md#deletemovebatch) | **POST** /entity/move/delete | Массовое удаление Перемещений
*MovesApi* | [**deleteMoveFile**](docs/Api/MovesApi.md#deletemovefile) | **DELETE** /entity/move/{id}/files/{fileId} | Удалить файл перемещения
*MovesApi* | [**deleteMoveMetadataAttributeById**](docs/Api/MovesApi.md#deletemovemetadataattributebyid) | **DELETE** /entity/move/metadata/attributes/{id} | Удалить отдельное доп. поле Перемещения
*MovesApi* | [**deleteMoveMetadataStateById**](docs/Api/MovesApi.md#deletemovemetadatastatebyid) | **DELETE** /entity/move/metadata/states/{id} | Удалить отдельный статус Перемещения
*MovesApi* | [**deleteMovePosition**](docs/Api/MovesApi.md#deletemoveposition) | **DELETE** /entity/move/{id}/positions/{positionId} | Удалить позицию Перемещения
*MovesApi* | [**deleteMovePositionsBatch**](docs/Api/MovesApi.md#deletemovepositionsbatch) | **POST** /entity/move/{id}/positions/delete | Массовое удаление позиций Перемещения
*MovesApi* | [**getMoveById**](docs/Api/MovesApi.md#getmovebyid) | **GET** /entity/move/{id} | Получить Перемещение
*MovesApi* | [**getMoveFiles**](docs/Api/MovesApi.md#getmovefiles) | **GET** /entity/move/{id}/files | Получить файлы перемещения
*MovesApi* | [**getMoveList**](docs/Api/MovesApi.md#getmovelist) | **GET** /entity/move | Получить список Перемещений
*MovesApi* | [**getMoveMetadata**](docs/Api/MovesApi.md#getmovemetadata) | **GET** /entity/move/metadata | Метаданные Перемещений
*MovesApi* | [**getMoveMetadataAttribute**](docs/Api/MovesApi.md#getmovemetadataattribute) | **GET** /entity/move/metadata/attributes | Доп. поля Перемещения
*MovesApi* | [**getMoveMetadataAttributeById**](docs/Api/MovesApi.md#getmovemetadataattributebyid) | **GET** /entity/move/metadata/attributes/{id} | Отдельное доп. поле Перемещения
*MovesApi* | [**getMoveMetadataStateById**](docs/Api/MovesApi.md#getmovemetadatastatebyid) | **GET** /entity/move/metadata/states/{id} | Отдельный статус Перемещения
*MovesApi* | [**getMovePositionById**](docs/Api/MovesApi.md#getmovepositionbyid) | **GET** /entity/move/{id}/positions/{positionId} | Получить позицию Перемещения
*MovesApi* | [**getMovePositions**](docs/Api/MovesApi.md#getmovepositions) | **GET** /entity/move/{id}/positions | Получить позиции Перемещения
*MovesApi* | [**getMoveTemplate**](docs/Api/MovesApi.md#getmovetemplate) | **PUT** /entity/move/new | Шаблон Перемещения
*MovesApi* | [**updateMove**](docs/Api/MovesApi.md#updatemove) | **PUT** /entity/move/{id} | Изменить Перемещение
*MovesApi* | [**updateMoveMetadataAttributeById**](docs/Api/MovesApi.md#updatemovemetadataattributebyid) | **PUT** /entity/move/metadata/attributes/{id} | Обновить отдельное доп. поле Перемещения
*MovesApi* | [**updateMoveMetadataStateById**](docs/Api/MovesApi.md#updatemovemetadatastatebyid) | **PUT** /entity/move/metadata/states/{id} | Обновить отдельный статус Перемещения
*MovesApi* | [**updateMovePosition**](docs/Api/MovesApi.md#updatemoveposition) | **PUT** /entity/move/{id}/positions/{positionId} | Изменить позицию Перемещения
*NotificationsApi* | [**deleteNotification**](docs/Api/NotificationsApi.md#deletenotification) | **DELETE** /notification/{id} | Удалить уведомление
*NotificationsApi* | [**getNotificationById**](docs/Api/NotificationsApi.md#getnotificationbyid) | **GET** /notification/{id} | Получить уведомление
*NotificationsApi* | [**getNotificationSettings**](docs/Api/NotificationsApi.md#getnotificationsettings) | **GET** /notification/settings | Получить настройки уведомлений
*NotificationsApi* | [**getNotifications**](docs/Api/NotificationsApi.md#getnotifications) | **GET** /notification | Получить ленту уведомлений
*NotificationsApi* | [**markAllNotificationsAsRead**](docs/Api/NotificationsApi.md#markallnotificationsasread) | **PUT** /notification/markasreadall | Отметить все уведомления как прочитанные
*NotificationsApi* | [**markNotificationAsRead**](docs/Api/NotificationsApi.md#marknotificationasread) | **PUT** /notification/{id}/markasread | Отметить уведомление как прочитанное
*NotificationsApi* | [**updateNotificationSettings**](docs/Api/NotificationsApi.md#updatenotificationsettings) | **PUT** /notification/settings | Изменить настройки уведомлений
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
*PaymentInsApi* | [**addPaymentInFiles**](docs/Api/PaymentInsApi.md#addpaymentinfiles) | **POST** /entity/paymentin/{id}/files | Добавить файлы к входящему платежу
*PaymentInsApi* | [**createPaymentIn**](docs/Api/PaymentInsApi.md#createpaymentin) | **POST** /entity/paymentin | Создать PaymentIn
*PaymentInsApi* | [**createPaymentInBatch**](docs/Api/PaymentInsApi.md#createpaymentinbatch) | **POST** /entity/paymentin/batch | Массовое создание и обновление PaymentIn
*PaymentInsApi* | [**createPaymentInMetadataAttribute**](docs/Api/PaymentInsApi.md#createpaymentinmetadataattribute) | **POST** /entity/paymentin/metadata/attributes | Создать доп. поле PaymentIn
*PaymentInsApi* | [**createPaymentInMetadataState**](docs/Api/PaymentInsApi.md#createpaymentinmetadatastate) | **POST** /entity/paymentin/metadata/states | Создать статус PaymentIn
*PaymentInsApi* | [**createPaymentInMetadataStatesBatch**](docs/Api/PaymentInsApi.md#createpaymentinmetadatastatesbatch) | **POST** /entity/paymentin/metadata/states/batch | Массовое создание и обновление статусов PaymentIn
*PaymentInsApi* | [**deletePaymentIn**](docs/Api/PaymentInsApi.md#deletepaymentin) | **DELETE** /entity/paymentin/{id} | Удалить PaymentIn
*PaymentInsApi* | [**deletePaymentInBatch**](docs/Api/PaymentInsApi.md#deletepaymentinbatch) | **POST** /entity/paymentin/delete | Массовое удаление PaymentIn
*PaymentInsApi* | [**deletePaymentInFile**](docs/Api/PaymentInsApi.md#deletepaymentinfile) | **DELETE** /entity/paymentin/{id}/files/{fileId} | Удалить файл входящего платежа
*PaymentInsApi* | [**deletePaymentInMetadataAttributeById**](docs/Api/PaymentInsApi.md#deletepaymentinmetadataattributebyid) | **DELETE** /entity/paymentin/metadata/attributes/{id} | Удалить отдельное доп. поле PaymentIn
*PaymentInsApi* | [**deletePaymentInMetadataStateById**](docs/Api/PaymentInsApi.md#deletepaymentinmetadatastatebyid) | **DELETE** /entity/paymentin/metadata/states/{id} | Удалить отдельный статус PaymentIn
*PaymentInsApi* | [**getPaymentInById**](docs/Api/PaymentInsApi.md#getpaymentinbyid) | **GET** /entity/paymentin/{id} | Получить PaymentIn
*PaymentInsApi* | [**getPaymentInFile**](docs/Api/PaymentInsApi.md#getpaymentinfile) | **GET** /entity/paymentin/{id}/files/{fileId} | Получить файл Входящего платежа
*PaymentInsApi* | [**getPaymentInFiles**](docs/Api/PaymentInsApi.md#getpaymentinfiles) | **GET** /entity/paymentin/{id}/files | Получить файлы входящего платежа
*PaymentInsApi* | [**getPaymentInList**](docs/Api/PaymentInsApi.md#getpaymentinlist) | **GET** /entity/paymentin | Получить список PaymentIn
*PaymentInsApi* | [**getPaymentInMetadata**](docs/Api/PaymentInsApi.md#getpaymentinmetadata) | **GET** /entity/paymentin/metadata | Метаданные PaymentIn
*PaymentInsApi* | [**getPaymentInMetadataAttribute**](docs/Api/PaymentInsApi.md#getpaymentinmetadataattribute) | **GET** /entity/paymentin/metadata/attributes | Доп. поля PaymentIn
*PaymentInsApi* | [**getPaymentInMetadataAttributeById**](docs/Api/PaymentInsApi.md#getpaymentinmetadataattributebyid) | **GET** /entity/paymentin/metadata/attributes/{id} | Отдельное доп. поле PaymentIn
*PaymentInsApi* | [**getPaymentInMetadataStateById**](docs/Api/PaymentInsApi.md#getpaymentinmetadatastatebyid) | **GET** /entity/paymentin/metadata/states/{id} | Отдельный статус PaymentIn
*PaymentInsApi* | [**getPaymentInTemplate**](docs/Api/PaymentInsApi.md#getpaymentintemplate) | **PUT** /entity/paymentin/new | Шаблон PaymentIns
*PaymentInsApi* | [**updatePaymentIn**](docs/Api/PaymentInsApi.md#updatepaymentin) | **PUT** /entity/paymentin/{id} | Изменить PaymentIn
*PaymentInsApi* | [**updatePaymentInMetadataAttributeById**](docs/Api/PaymentInsApi.md#updatepaymentinmetadataattributebyid) | **PUT** /entity/paymentin/metadata/attributes/{id} | Обновить отдельное доп. поле PaymentIn
*PaymentInsApi* | [**updatePaymentInMetadataStateById**](docs/Api/PaymentInsApi.md#updatepaymentinmetadatastatebyid) | **PUT** /entity/paymentin/metadata/states/{id} | Обновить отдельный статус PaymentIn
*PaymentOutsApi* | [**addPaymentOutFiles**](docs/Api/PaymentOutsApi.md#addpaymentoutfiles) | **POST** /entity/paymentout/{id}/files | Добавить файлы
*PaymentOutsApi* | [**createPaymentOut**](docs/Api/PaymentOutsApi.md#createpaymentout) | **POST** /entity/paymentout | Создать PaymentOut
*PaymentOutsApi* | [**createPaymentOutBatch**](docs/Api/PaymentOutsApi.md#createpaymentoutbatch) | **POST** /entity/paymentout/batch | Массовое создание и обновление PaymentOut
*PaymentOutsApi* | [**createPaymentOutMetadataAttribute**](docs/Api/PaymentOutsApi.md#createpaymentoutmetadataattribute) | **POST** /entity/paymentout/metadata/attributes | Создать доп. поле PaymentOut
*PaymentOutsApi* | [**createPaymentOutMetadataState**](docs/Api/PaymentOutsApi.md#createpaymentoutmetadatastate) | **POST** /entity/paymentout/metadata/states | Создать статус PaymentOut
*PaymentOutsApi* | [**createPaymentOutMetadataStatesBatch**](docs/Api/PaymentOutsApi.md#createpaymentoutmetadatastatesbatch) | **POST** /entity/paymentout/metadata/states/batch | Массовое создание и обновление статусов PaymentOut
*PaymentOutsApi* | [**deletePaymentOut**](docs/Api/PaymentOutsApi.md#deletepaymentout) | **DELETE** /entity/paymentout/{id} | Удалить PaymentOut
*PaymentOutsApi* | [**deletePaymentOutBatch**](docs/Api/PaymentOutsApi.md#deletepaymentoutbatch) | **POST** /entity/paymentout/delete | Массовое удаление PaymentOut
*PaymentOutsApi* | [**deletePaymentOutFile**](docs/Api/PaymentOutsApi.md#deletepaymentoutfile) | **DELETE** /entity/paymentout/{id}/files/{fileId} | Удалить файл
*PaymentOutsApi* | [**deletePaymentOutMetadataAttributeById**](docs/Api/PaymentOutsApi.md#deletepaymentoutmetadataattributebyid) | **DELETE** /entity/paymentout/metadata/attributes/{id} | Удалить отдельное доп. поле PaymentOut
*PaymentOutsApi* | [**deletePaymentOutMetadataStateById**](docs/Api/PaymentOutsApi.md#deletepaymentoutmetadatastatebyid) | **DELETE** /entity/paymentout/metadata/states/{id} | Удалить отдельный статус PaymentOut
*PaymentOutsApi* | [**getPaymentOutById**](docs/Api/PaymentOutsApi.md#getpaymentoutbyid) | **GET** /entity/paymentout/{id} | Получить PaymentOut
*PaymentOutsApi* | [**getPaymentOutFile**](docs/Api/PaymentOutsApi.md#getpaymentoutfile) | **GET** /entity/paymentout/{id}/files/{fileId} | Получить файл
*PaymentOutsApi* | [**getPaymentOutFiles**](docs/Api/PaymentOutsApi.md#getpaymentoutfiles) | **GET** /entity/paymentout/{id}/files | Получить файлы
*PaymentOutsApi* | [**getPaymentOutList**](docs/Api/PaymentOutsApi.md#getpaymentoutlist) | **GET** /entity/paymentout | Получить список PaymentOut
*PaymentOutsApi* | [**getPaymentOutMetadata**](docs/Api/PaymentOutsApi.md#getpaymentoutmetadata) | **GET** /entity/paymentout/metadata | Метаданные PaymentOut
*PaymentOutsApi* | [**getPaymentOutMetadataAttribute**](docs/Api/PaymentOutsApi.md#getpaymentoutmetadataattribute) | **GET** /entity/paymentout/metadata/attributes | Доп. поля PaymentOut
*PaymentOutsApi* | [**getPaymentOutMetadataAttributeById**](docs/Api/PaymentOutsApi.md#getpaymentoutmetadataattributebyid) | **GET** /entity/paymentout/metadata/attributes/{id} | Отдельное доп. поле PaymentOut
*PaymentOutsApi* | [**getPaymentOutMetadataStateById**](docs/Api/PaymentOutsApi.md#getpaymentoutmetadatastatebyid) | **GET** /entity/paymentout/metadata/states/{id} | Отдельный статус PaymentOut
*PaymentOutsApi* | [**getPaymentOutTemplate**](docs/Api/PaymentOutsApi.md#getpaymentouttemplate) | **PUT** /entity/paymentout/new | Шаблон PaymentOut
*PaymentOutsApi* | [**updatePaymentOut**](docs/Api/PaymentOutsApi.md#updatepaymentout) | **PUT** /entity/paymentout/{id} | Изменить PaymentOut
*PaymentOutsApi* | [**updatePaymentOutMetadataAttributeById**](docs/Api/PaymentOutsApi.md#updatepaymentoutmetadataattributebyid) | **PUT** /entity/paymentout/metadata/attributes/{id} | Обновить отдельное доп. поле PaymentOut
*PaymentOutsApi* | [**updatePaymentOutMetadataStateById**](docs/Api/PaymentOutsApi.md#updatepaymentoutmetadatastatebyid) | **PUT** /entity/paymentout/metadata/states/{id} | Обновить отдельный статус PaymentOut
*PrepaymentReturnsApi* | [**createPrepaymentReturnMetadataAttribute**](docs/Api/PrepaymentReturnsApi.md#createprepaymentreturnmetadataattribute) | **POST** /entity/prepaymentreturn/metadata/attributes | Создать доп. поле Возврата предоплаты
*PrepaymentReturnsApi* | [**createPrepaymentReturnMetadataState**](docs/Api/PrepaymentReturnsApi.md#createprepaymentreturnmetadatastate) | **POST** /entity/prepaymentreturn/metadata/states | Создать статус Возврата предоплаты
*PrepaymentReturnsApi* | [**createPrepaymentReturnMetadataStatesBatch**](docs/Api/PrepaymentReturnsApi.md#createprepaymentreturnmetadatastatesbatch) | **POST** /entity/prepaymentreturn/metadata/states/batch | Массовое создание и обновление статусов Возврата предоплаты
*PrepaymentReturnsApi* | [**deletePrepaymentReturn**](docs/Api/PrepaymentReturnsApi.md#deleteprepaymentreturn) | **DELETE** /entity/prepaymentreturn/{id} | Удалить Возврат предоплаты
*PrepaymentReturnsApi* | [**deletePrepaymentReturnMetadataAttributeById**](docs/Api/PrepaymentReturnsApi.md#deleteprepaymentreturnmetadataattributebyid) | **DELETE** /entity/prepaymentreturn/metadata/attributes/{id} | Удалить отдельное доп. поле Возврата предоплаты
*PrepaymentReturnsApi* | [**deletePrepaymentReturnMetadataStateById**](docs/Api/PrepaymentReturnsApi.md#deleteprepaymentreturnmetadatastatebyid) | **DELETE** /entity/prepaymentreturn/metadata/states/{id} | Удалить отдельный статус Возврата предоплаты
*PrepaymentReturnsApi* | [**getPrepaymentReturnById**](docs/Api/PrepaymentReturnsApi.md#getprepaymentreturnbyid) | **GET** /entity/prepaymentreturn/{id} | Получить Возврат предоплаты
*PrepaymentReturnsApi* | [**getPrepaymentReturnList**](docs/Api/PrepaymentReturnsApi.md#getprepaymentreturnlist) | **GET** /entity/prepaymentreturn | Получить список Возвратов предоплаты
*PrepaymentReturnsApi* | [**getPrepaymentReturnMetadata**](docs/Api/PrepaymentReturnsApi.md#getprepaymentreturnmetadata) | **GET** /entity/prepaymentreturn/metadata | Метаданные Возвратов предоплаты
*PrepaymentReturnsApi* | [**getPrepaymentReturnMetadataAttribute**](docs/Api/PrepaymentReturnsApi.md#getprepaymentreturnmetadataattribute) | **GET** /entity/prepaymentreturn/metadata/attributes | Доп. поля Возврата предоплаты
*PrepaymentReturnsApi* | [**getPrepaymentReturnMetadataAttributeById**](docs/Api/PrepaymentReturnsApi.md#getprepaymentreturnmetadataattributebyid) | **GET** /entity/prepaymentreturn/metadata/attributes/{id} | Отдельное доп. поле Возврата предоплаты
*PrepaymentReturnsApi* | [**getPrepaymentReturnMetadataStateById**](docs/Api/PrepaymentReturnsApi.md#getprepaymentreturnmetadatastatebyid) | **GET** /entity/prepaymentreturn/metadata/states/{id} | Отдельный статус Возврата предоплаты
*PrepaymentReturnsApi* | [**getPrepaymentReturnPositionById**](docs/Api/PrepaymentReturnsApi.md#getprepaymentreturnpositionbyid) | **GET** /entity/prepaymentreturn/{id}/positions/{positionId} | Получить позицию Возврата предоплаты
*PrepaymentReturnsApi* | [**getPrepaymentReturnPositions**](docs/Api/PrepaymentReturnsApi.md#getprepaymentreturnpositions) | **GET** /entity/prepaymentreturn/{id}/positions | Получить позиции Возврата предоплаты
*PrepaymentReturnsApi* | [**updatePrepaymentReturnMetadataAttributeById**](docs/Api/PrepaymentReturnsApi.md#updateprepaymentreturnmetadataattributebyid) | **PUT** /entity/prepaymentreturn/metadata/attributes/{id} | Обновить отдельное доп. поле Возврата предоплаты
*PrepaymentReturnsApi* | [**updatePrepaymentReturnMetadataStateById**](docs/Api/PrepaymentReturnsApi.md#updateprepaymentreturnmetadatastatebyid) | **PUT** /entity/prepaymentreturn/metadata/states/{id} | Обновить отдельный статус Возврата предоплаты
*PrepaymentsApi* | [**createPrepaymentMetadataAttribute**](docs/Api/PrepaymentsApi.md#createprepaymentmetadataattribute) | **POST** /entity/prepayment/metadata/attributes | Создать доп. поле Предоплаты
*PriceTypesApi* | [**createPriceTypesBatch**](docs/Api/PriceTypesApi.md#createpricetypesbatch) | **POST** /context/companysettings/pricetype | Создать или изменить типы цен
*PriceTypesApi* | [**getDefaultPriceType**](docs/Api/PriceTypesApi.md#getdefaultpricetype) | **GET** /context/companysettings/pricetype/default | Получить тип цены по умолчанию
*PriceTypesApi* | [**getPriceTypeById**](docs/Api/PriceTypesApi.md#getpricetypebyid) | **GET** /context/companysettings/pricetype/{id} | Получить тип цены по ID
*PriceTypesApi* | [**getPriceTypes**](docs/Api/PriceTypesApi.md#getpricetypes) | **GET** /context/companysettings/pricetype | Получить список типов цен
*ProcessingOrdersApi* | [**addProcessingOrderFiles**](docs/Api/ProcessingOrdersApi.md#addprocessingorderfiles) | **POST** /entity/processingorder/{id}/files | Добавить файлы к Заказу на производство
*ProcessingOrdersApi* | [**createProcessingOrder**](docs/Api/ProcessingOrdersApi.md#createprocessingorder) | **POST** /entity/processingorder | Создать ProcessingOrder
*ProcessingOrdersApi* | [**createProcessingOrderBatch**](docs/Api/ProcessingOrdersApi.md#createprocessingorderbatch) | **POST** /entity/processingorder/batch | Массовое создание и обновление ProcessingOrder
*ProcessingOrdersApi* | [**createProcessingOrderMetadataAttribute**](docs/Api/ProcessingOrdersApi.md#createprocessingordermetadataattribute) | **POST** /entity/processingorder/metadata/attributes | Создать Доп. поле ProcessingOrder
*ProcessingOrdersApi* | [**createProcessingOrderMetadataState**](docs/Api/ProcessingOrdersApi.md#createprocessingordermetadatastate) | **POST** /entity/processingorder/metadata/states | Создать статус ProcessingOrder
*ProcessingOrdersApi* | [**createProcessingOrderMetadataStatesBatch**](docs/Api/ProcessingOrdersApi.md#createprocessingordermetadatastatesbatch) | **POST** /entity/processingorder/metadata/states/batch | Массовое создание и обновление статусов ProcessingOrder
*ProcessingOrdersApi* | [**createProcessingOrderPosition**](docs/Api/ProcessingOrdersApi.md#createprocessingorderposition) | **POST** /entity/processingorder/{id}/positions | Обновить позицию ProcessingOrder
*ProcessingOrdersApi* | [**createProcessingOrderPositions**](docs/Api/ProcessingOrdersApi.md#createprocessingorderpositions) | **POST** /entity/processingorder/{id}/positions/batch | Массовое изменение позиций Заказа на производство
*ProcessingOrdersApi* | [**deleteProcessingOrder**](docs/Api/ProcessingOrdersApi.md#deleteprocessingorder) | **DELETE** /entity/processingorder/{id} | Удалить ProcessingOrder
*ProcessingOrdersApi* | [**deleteProcessingOrderBatch**](docs/Api/ProcessingOrdersApi.md#deleteprocessingorderbatch) | **POST** /entity/processingorder/delete | Массовое удаление ProcessingOrder
*ProcessingOrdersApi* | [**deleteProcessingOrderFile**](docs/Api/ProcessingOrdersApi.md#deleteprocessingorderfile) | **DELETE** /entity/processingorder/{id}/files/{fileId} | Удалить файл Заказа на производство
*ProcessingOrdersApi* | [**deleteProcessingOrderMetadataAttributeById**](docs/Api/ProcessingOrdersApi.md#deleteprocessingordermetadataattributebyid) | **DELETE** /entity/processingorder/metadata/attributes/{id} | Удалить отдельное доп. поле ProcessingOrder
*ProcessingOrdersApi* | [**deleteProcessingOrderMetadataStateById**](docs/Api/ProcessingOrdersApi.md#deleteprocessingordermetadatastatebyid) | **DELETE** /entity/processingorder/metadata/states/{id} | Удалить отдельный статус ProcessingOrder
*ProcessingOrdersApi* | [**deleteProcessingOrderPosition**](docs/Api/ProcessingOrdersApi.md#deleteprocessingorderposition) | **DELETE** /entity/processingorder/{id}/positions/{positionId} | Удалить позицию ProcessingOrder
*ProcessingOrdersApi* | [**deleteProcessingOrderPositionsBatch**](docs/Api/ProcessingOrdersApi.md#deleteprocessingorderpositionsbatch) | **POST** /entity/processingorder/{id}/positions/delete | Массовое удаление позиций ProcessingOrder
*ProcessingOrdersApi* | [**getProcessingOrderById**](docs/Api/ProcessingOrdersApi.md#getprocessingorderbyid) | **GET** /entity/processingorder/{id} | Получить ProcessingOrder
*ProcessingOrdersApi* | [**getProcessingOrderFile**](docs/Api/ProcessingOrdersApi.md#getprocessingorderfile) | **GET** /entity/processingorder/{id}/files/{fileId} | Получить файл Заказа на производство
*ProcessingOrdersApi* | [**getProcessingOrderFiles**](docs/Api/ProcessingOrdersApi.md#getprocessingorderfiles) | **GET** /entity/processingorder/{id}/files | Получить файлы Заказа на производство
*ProcessingOrdersApi* | [**getProcessingOrderList**](docs/Api/ProcessingOrdersApi.md#getprocessingorderlist) | **GET** /entity/processingorder | Получить список ProcessingOrder
*ProcessingOrdersApi* | [**getProcessingOrderMetadata**](docs/Api/ProcessingOrdersApi.md#getprocessingordermetadata) | **GET** /entity/processingorder/metadata | Метаданные ProcessingOrder
*ProcessingOrdersApi* | [**getProcessingOrderMetadataAttribute**](docs/Api/ProcessingOrdersApi.md#getprocessingordermetadataattribute) | **GET** /entity/processingorder/metadata/attributes | Доп. поля ProcessingOrder
*ProcessingOrdersApi* | [**getProcessingOrderMetadataAttributeById**](docs/Api/ProcessingOrdersApi.md#getprocessingordermetadataattributebyid) | **GET** /entity/processingorder/metadata/attributes/{id} | Отдельное доп. поле ProcessingOrder
*ProcessingOrdersApi* | [**getProcessingOrderMetadataStateById**](docs/Api/ProcessingOrdersApi.md#getprocessingordermetadatastatebyid) | **GET** /entity/processingorder/metadata/states/{id} | Отдельный статус ProcessingOrder
*ProcessingOrdersApi* | [**getProcessingOrderPositionById**](docs/Api/ProcessingOrdersApi.md#getprocessingorderpositionbyid) | **GET** /entity/processingorder/{id}/positions/{positionId} | Получить позицию ProcessingOrder
*ProcessingOrdersApi* | [**getProcessingOrderPositions**](docs/Api/ProcessingOrdersApi.md#getprocessingorderpositions) | **GET** /entity/processingorder/{id}/positions | Получить позиции ProcessingOrder
*ProcessingOrdersApi* | [**getProcessingOrderTemplate**](docs/Api/ProcessingOrdersApi.md#getprocessingordertemplate) | **PUT** /entity/processingorder/new | Шаблон ProcessingOrder
*ProcessingOrdersApi* | [**updateProcessingOrder**](docs/Api/ProcessingOrdersApi.md#updateprocessingorder) | **PUT** /entity/processingorder/{id} | Изменить ProcessingOrder
*ProcessingOrdersApi* | [**updateProcessingOrderMetadataAttributeById**](docs/Api/ProcessingOrdersApi.md#updateprocessingordermetadataattributebyid) | **PUT** /entity/processingorder/metadata/attributes/{id} | Обновить отдельное доп. поле ProcessingOrder
*ProcessingOrdersApi* | [**updateProcessingOrderMetadataStateById**](docs/Api/ProcessingOrdersApi.md#updateprocessingordermetadatastatebyid) | **PUT** /entity/processingorder/metadata/states/{id} | Обновить отдельный статус ProcessingOrder
*ProcessingOrdersApi* | [**updateProcessingOrderPosition**](docs/Api/ProcessingOrdersApi.md#updateprocessingorderposition) | **PUT** /entity/processingorder/{id}/positions/{positionId} | Изменить позицию ProcessingOrder
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
*ProcessingProcessesApi* | [**createProcessingProcessPosition**](docs/Api/ProcessingProcessesApi.md#createprocessingprocessposition) | **POST** /entity/processingprocess/{id}/positions | Создать и обновить позицию Техпроцесса
*ProcessingProcessesApi* | [**createProcessingProcessPositions**](docs/Api/ProcessingProcessesApi.md#createprocessingprocesspositions) | **POST** /entity/processingprocess/{id}/positions/batch | Массовое создание и обновление позиций Техпроцесса
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
*ProcessingsApi* | [**addProcessingFiles**](docs/Api/ProcessingsApi.md#addprocessingfiles) | **POST** /entity/processing/{id}/files | Добавить файлы к техоперации
*ProcessingsApi* | [**createProcessing**](docs/Api/ProcessingsApi.md#createprocessing) | **POST** /entity/processing | Создать Processing
*ProcessingsApi* | [**createProcessingBatch**](docs/Api/ProcessingsApi.md#createprocessingbatch) | **POST** /entity/processing/batch | Массовое создание и обновление Processing
*ProcessingsApi* | [**createProcessingMaterials**](docs/Api/ProcessingsApi.md#createprocessingmaterials) | **POST** /entity/processing/{id}/materials | Создать материалы Processing
*ProcessingsApi* | [**createProcessingMetadataAttribute**](docs/Api/ProcessingsApi.md#createprocessingmetadataattribute) | **POST** /entity/processing/metadata/attributes | Создать Доп. поле Processing
*ProcessingsApi* | [**createProcessingMetadataState**](docs/Api/ProcessingsApi.md#createprocessingmetadatastate) | **POST** /entity/processing/metadata/states | Создать статус Processing
*ProcessingsApi* | [**createProcessingMetadataStatesBatch**](docs/Api/ProcessingsApi.md#createprocessingmetadatastatesbatch) | **POST** /entity/processing/metadata/states/batch | Массовое создание и обновление статусов Processing
*ProcessingsApi* | [**createProcessingProducts**](docs/Api/ProcessingsApi.md#createprocessingproducts) | **POST** /entity/processing/{id}/products | Создать продукты Processing
*ProcessingsApi* | [**deleteProcessing**](docs/Api/ProcessingsApi.md#deleteprocessing) | **DELETE** /entity/processing/{id} | Удалить Processing
*ProcessingsApi* | [**deleteProcessingBatch**](docs/Api/ProcessingsApi.md#deleteprocessingbatch) | **POST** /entity/processing/delete | Массовое удаление Processing
*ProcessingsApi* | [**deleteProcessingFile**](docs/Api/ProcessingsApi.md#deleteprocessingfile) | **DELETE** /entity/processing/{id}/files/{fileId} | Удалить файл техоперации
*ProcessingsApi* | [**deleteProcessingMaterial**](docs/Api/ProcessingsApi.md#deleteprocessingmaterial) | **DELETE** /entity/processing/{id}/materials/{positionId} | Удалить материал Processing
*ProcessingsApi* | [**deleteProcessingMaterialsBatch**](docs/Api/ProcessingsApi.md#deleteprocessingmaterialsbatch) | **POST** /entity/processing/{id}/materials/delete | Массовое удаление материалов Processing
*ProcessingsApi* | [**deleteProcessingMetadataAttributeById**](docs/Api/ProcessingsApi.md#deleteprocessingmetadataattributebyid) | **DELETE** /entity/processing/metadata/attributes/{id} | Удалить отдельное доп. поле Processing
*ProcessingsApi* | [**deleteProcessingMetadataStateById**](docs/Api/ProcessingsApi.md#deleteprocessingmetadatastatebyid) | **DELETE** /entity/processing/metadata/states/{id} | Удалить отдельный статус Processing
*ProcessingsApi* | [**deleteProcessingProduct**](docs/Api/ProcessingsApi.md#deleteprocessingproduct) | **DELETE** /entity/processing/{id}/products/{positionId} | Удалить продукт Processing
*ProcessingsApi* | [**deleteProcessingProductsBatch**](docs/Api/ProcessingsApi.md#deleteprocessingproductsbatch) | **POST** /entity/processing/{id}/products/delete | Массовое удаление продуктов Processing
*ProcessingsApi* | [**getProcessingById**](docs/Api/ProcessingsApi.md#getprocessingbyid) | **GET** /entity/processing/{id} | Получить Processing
*ProcessingsApi* | [**getProcessingFile**](docs/Api/ProcessingsApi.md#getprocessingfile) | **GET** /entity/processing/{id}/files/{fileId} | Получить файл техоперации
*ProcessingsApi* | [**getProcessingFiles**](docs/Api/ProcessingsApi.md#getprocessingfiles) | **GET** /entity/processing/{id}/files | Получить файлы техоперации
*ProcessingsApi* | [**getProcessingMaterialById**](docs/Api/ProcessingsApi.md#getprocessingmaterialbyid) | **GET** /entity/processing/{id}/materials/{positionId} | Получить материал Processing
*ProcessingsApi* | [**getProcessingMaterials**](docs/Api/ProcessingsApi.md#getprocessingmaterials) | **GET** /entity/processing/{id}/materials | Получить материалы Processing
*ProcessingsApi* | [**getProcessingMetadata**](docs/Api/ProcessingsApi.md#getprocessingmetadata) | **GET** /entity/processing/metadata | Метаданные Processing
*ProcessingsApi* | [**getProcessingMetadataAttribute**](docs/Api/ProcessingsApi.md#getprocessingmetadataattribute) | **GET** /entity/processing/metadata/attributes | Доп. поля Processing
*ProcessingsApi* | [**getProcessingMetadataAttributeById**](docs/Api/ProcessingsApi.md#getprocessingmetadataattributebyid) | **GET** /entity/processing/metadata/attributes/{id} | Отдельное доп. поле Processing
*ProcessingsApi* | [**getProcessingMetadataStateById**](docs/Api/ProcessingsApi.md#getprocessingmetadatastatebyid) | **GET** /entity/processing/metadata/states/{id} | Отдельный статус Processing
*ProcessingsApi* | [**getProcessingProductById**](docs/Api/ProcessingsApi.md#getprocessingproductbyid) | **GET** /entity/processing/{id}/products/{positionId} | Получить продукт Processing
*ProcessingsApi* | [**getProcessingProducts**](docs/Api/ProcessingsApi.md#getprocessingproducts) | **GET** /entity/processing/{id}/products | Получить продукты Processing
*ProcessingsApi* | [**getProcessingTemplate**](docs/Api/ProcessingsApi.md#getprocessingtemplate) | **PUT** /entity/processing/new | Шаблон Processing
*ProcessingsApi* | [**getProcessings**](docs/Api/ProcessingsApi.md#getprocessings) | **GET** /entity/processing | Получить список Processing
*ProcessingsApi* | [**updateProcessing**](docs/Api/ProcessingsApi.md#updateprocessing) | **PUT** /entity/processing/{id} | Изменить Processing
*ProcessingsApi* | [**updateProcessingMaterial**](docs/Api/ProcessingsApi.md#updateprocessingmaterial) | **PUT** /entity/processing/{id}/materials/{positionId} | Изменить материал Processing
*ProcessingsApi* | [**updateProcessingMetadataAttributeById**](docs/Api/ProcessingsApi.md#updateprocessingmetadataattributebyid) | **PUT** /entity/processing/metadata/attributes/{id} | Обновить отдельное доп. поле Processing
*ProcessingsApi* | [**updateProcessingMetadataStateById**](docs/Api/ProcessingsApi.md#updateprocessingmetadatastatebyid) | **PUT** /entity/processing/metadata/states/{id} | Обновить отдельный статус Processing
*ProcessingsApi* | [**updateProcessingProduct**](docs/Api/ProcessingsApi.md#updateprocessingproduct) | **PUT** /entity/processing/{id}/products/{positionId} | Изменить продукт Processing
*ProductFoldersApi* | [**createProductFolder**](docs/Api/ProductFoldersApi.md#createproductfolder) | **POST** /entity/productfolder | Создать группу товаров
*ProductFoldersApi* | [**createProductFoldersBatch**](docs/Api/ProductFoldersApi.md#createproductfoldersbatch) | **POST** /entity/productfolder/batch | Создать или изменить группы товаров
*ProductFoldersApi* | [**deleteProductFolder**](docs/Api/ProductFoldersApi.md#deleteproductfolder) | **DELETE** /entity/productfolder/{id} | Удалить группу товаров
*ProductFoldersApi* | [**deleteProductFoldersBatch**](docs/Api/ProductFoldersApi.md#deleteproductfoldersbatch) | **POST** /entity/productfolder/delete | Удалить группы товаров
*ProductFoldersApi* | [**getProductFolderById**](docs/Api/ProductFoldersApi.md#getproductfolderbyid) | **GET** /entity/productfolder/{id} | Получить группу товаров по ID
*ProductFoldersApi* | [**getProductFolders**](docs/Api/ProductFoldersApi.md#getproductfolders) | **GET** /entity/productfolder | Получить список групп товаров
*ProductFoldersApi* | [**updateProductFolder**](docs/Api/ProductFoldersApi.md#updateproductfolder) | **PUT** /entity/productfolder/{id} | Обновить группу товаров
*ProductionTasksApi* | [**createProductionTaskMetadataAttribute**](docs/Api/ProductionTasksApi.md#createproductiontaskmetadataattribute) | **POST** /entity/productiontask/metadata/attributes | Создать Доп. поле Производственных задач
*ProductionTasksApi* | [**getProductionTaskMetadataAttribute**](docs/Api/ProductionTasksApi.md#getproductiontaskmetadataattribute) | **GET** /entity/productiontask/metadata/attributes | Доп. поля ProductionTask
*ProductsApi* | [**addProductFiles**](docs/Api/ProductsApi.md#addproductfiles) | **POST** /entity/product/{id}/files | Добавить файлы к товару
*ProductsApi* | [**addProductImages**](docs/Api/ProductsApi.md#addproductimages) | **POST** /entity/product/{id}/images | Добавить изображения к товару
*ProductsApi* | [**createProduct**](docs/Api/ProductsApi.md#createproduct) | **POST** /entity/product | Создать товар
*ProductsApi* | [**createProductMetadataAttribute**](docs/Api/ProductsApi.md#createproductmetadataattribute) | **POST** /entity/product/metadata/attributes | Создать доп. поле товара
*ProductsApi* | [**createProductStoreBalance**](docs/Api/ProductsApi.md#createproductstorebalance) | **POST** /entity/product/{id}/storebalances | Создать НСО товара для склада
*ProductsApi* | [**createProductsBatch**](docs/Api/ProductsApi.md#createproductsbatch) | **POST** /entity/product/batch | Создать или изменить товары
*ProductsApi* | [**deleteProduct**](docs/Api/ProductsApi.md#deleteproduct) | **DELETE** /entity/product/{id} | Удалить товар
*ProductsApi* | [**deleteProductFile**](docs/Api/ProductsApi.md#deleteproductfile) | **DELETE** /entity/product/{id}/files/{fileId} | Удалить файл товара
*ProductsApi* | [**deleteProductImage**](docs/Api/ProductsApi.md#deleteproductimage) | **DELETE** /entity/product/{id}/images/{imageId} | Удалить изображение товара
*ProductsApi* | [**deleteProductImages**](docs/Api/ProductsApi.md#deleteproductimages) | **POST** /entity/product/{id}/images/delete | Массовое удаление изображений товара
*ProductsApi* | [**deleteProductMetadataAttributeById**](docs/Api/ProductsApi.md#deleteproductmetadataattributebyid) | **DELETE** /entity/product/metadata/attributes/{id} | Удалить отдельное доп. поле товара
*ProductsApi* | [**deleteProductStoreBalance**](docs/Api/ProductsApi.md#deleteproductstorebalance) | **DELETE** /entity/product/{id}/storebalances/{storeBalanceId} | Удалить НСО товара по складу
*ProductsApi* | [**deleteProductStoreBalances**](docs/Api/ProductsApi.md#deleteproductstorebalances) | **POST** /entity/product/{id}/storebalances/delete | Массовое удаление НСО товара по складам
*ProductsApi* | [**deleteProductsBatch**](docs/Api/ProductsApi.md#deleteproductsbatch) | **POST** /entity/product/delete | Удалить товары
*ProductsApi* | [**getMetadata**](docs/Api/ProductsApi.md#getmetadata) | **GET** /entity/product/metadata | Получить метаданные товаров
*ProductsApi* | [**getProductById**](docs/Api/ProductsApi.md#getproductbyid) | **GET** /entity/product/{id} | Получить товар по ID
*ProductsApi* | [**getProductFiles**](docs/Api/ProductsApi.md#getproductfiles) | **GET** /entity/product/{id}/files | Получить файлы товара
*ProductsApi* | [**getProductImages**](docs/Api/ProductsApi.md#getproductimages) | **GET** /entity/product/{id}/images | Получить изображения товара
*ProductsApi* | [**getProductMetadataAttributeById**](docs/Api/ProductsApi.md#getproductmetadataattributebyid) | **GET** /entity/product/metadata/attributes/{id} | Получить доп. поле товара по ID
*ProductsApi* | [**getProductMetadataAttributes**](docs/Api/ProductsApi.md#getproductmetadataattributes) | **GET** /entity/product/metadata/attributes | Получить доп. поля товаров
*ProductsApi* | [**getProductStoreBalanceById**](docs/Api/ProductsApi.md#getproductstorebalancebyid) | **GET** /entity/product/{id}/storebalances/{storeBalanceId} | Получить НСО товара по складу
*ProductsApi* | [**getProductStoreBalances**](docs/Api/ProductsApi.md#getproductstorebalances) | **GET** /entity/product/{id}/storebalances | Получить НСО товара по складам
*ProductsApi* | [**getProducts**](docs/Api/ProductsApi.md#getproducts) | **GET** /entity/product | Получить список товаров
*ProductsApi* | [**updateProduct**](docs/Api/ProductsApi.md#updateproduct) | **PUT** /entity/product/{id} | Обновить товар
*ProductsApi* | [**updateProductMetadataAttributeById**](docs/Api/ProductsApi.md#updateproductmetadataattributebyid) | **PUT** /entity/product/metadata/attributes/{id} | Обновить отдельное доп. поле товара
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
*PurchaseOrdersApi* | [**createPurchaseOrderMetadataStatesBatch**](docs/Api/PurchaseOrdersApi.md#createpurchaseordermetadatastatesbatch) | **POST** /entity/purchaseorder/metadata/states/batch | Массовое создание и обновление статусов PurchaseOrder
*PurchaseOrdersApi* | [**createPurchaseOrderNote**](docs/Api/PurchaseOrdersApi.md#createpurchaseordernote) | **POST** /entity/purchaseorder/{id}/notes | Добавить Событие Заказа поставщику
*PurchaseOrdersApi* | [**createPurchaseOrderPosition**](docs/Api/PurchaseOrdersApi.md#createpurchaseorderposition) | **POST** /entity/purchaseorder/{id}/positions | Создать и обновить позицию Заказа поставщику
*PurchaseOrdersApi* | [**createPurchaseOrderPositions**](docs/Api/PurchaseOrdersApi.md#createpurchaseorderpositions) | **POST** /entity/purchaseorder/{id}/positions/batch | Массовое создание и обновление позиций Заказа поставщику
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
*PurchaseReturnsApi* | [**addPurchaseReturnFiles**](docs/Api/PurchaseReturnsApi.md#addpurchasereturnfiles) | **POST** /entity/purchasereturn/{id}/files | Добавить файлы к возврату поставщику
*PurchaseReturnsApi* | [**createPurchaseReturn**](docs/Api/PurchaseReturnsApi.md#createpurchasereturn) | **POST** /entity/purchasereturn | Создать Возврат поставщику
*PurchaseReturnsApi* | [**createPurchaseReturnBatch**](docs/Api/PurchaseReturnsApi.md#createpurchasereturnbatch) | **POST** /entity/purchasereturn/batch | Массовое создание и обновление Возвратов поставщикам
*PurchaseReturnsApi* | [**createPurchaseReturnMetadataAttribute**](docs/Api/PurchaseReturnsApi.md#createpurchasereturnmetadataattribute) | **POST** /entity/purchasereturn/metadata/attributes | Создать доп. поле Возврата поставщику
*PurchaseReturnsApi* | [**createPurchaseReturnMetadataState**](docs/Api/PurchaseReturnsApi.md#createpurchasereturnmetadatastate) | **POST** /entity/purchasereturn/metadata/states | Создать статус Возврата поставщику
*PurchaseReturnsApi* | [**createPurchaseReturnMetadataStatesBatch**](docs/Api/PurchaseReturnsApi.md#createpurchasereturnmetadatastatesbatch) | **POST** /entity/purchasereturn/metadata/states/batch | Массовое создание и обновление статусов Возврата поставщику
*PurchaseReturnsApi* | [**createPurchaseReturnNote**](docs/Api/PurchaseReturnsApi.md#createpurchasereturnnote) | **POST** /entity/purchasereturn/{id}/notes | Добавить Событие Возврата поставщику
*PurchaseReturnsApi* | [**createPurchaseReturnPosition**](docs/Api/PurchaseReturnsApi.md#createpurchasereturnposition) | **POST** /entity/purchasereturn/{id}/positions | Создать и обновить позицию Возврата поставщику
*PurchaseReturnsApi* | [**createPurchaseReturnPositions**](docs/Api/PurchaseReturnsApi.md#createpurchasereturnpositions) | **POST** /entity/purchasereturn/{id}/positions/batch | Массовое создание и обновление позиций Возврата поставщику
*PurchaseReturnsApi* | [**deletePurchaseReturn**](docs/Api/PurchaseReturnsApi.md#deletepurchasereturn) | **DELETE** /entity/purchasereturn/{id} | Удалить Возврат поставщику
*PurchaseReturnsApi* | [**deletePurchaseReturnBatch**](docs/Api/PurchaseReturnsApi.md#deletepurchasereturnbatch) | **POST** /entity/purchasereturn/delete | Массовое удаление Возвратов поставщикам
*PurchaseReturnsApi* | [**deletePurchaseReturnFile**](docs/Api/PurchaseReturnsApi.md#deletepurchasereturnfile) | **DELETE** /entity/purchasereturn/{id}/files/{fileId} | Удалить файл возврата поставщику
*PurchaseReturnsApi* | [**deletePurchaseReturnMetadataAttributeById**](docs/Api/PurchaseReturnsApi.md#deletepurchasereturnmetadataattributebyid) | **DELETE** /entity/purchasereturn/metadata/attributes/{id} | Удалить отдельное доп. поле Возврата поставщику
*PurchaseReturnsApi* | [**deletePurchaseReturnMetadataStateById**](docs/Api/PurchaseReturnsApi.md#deletepurchasereturnmetadatastatebyid) | **DELETE** /entity/purchasereturn/metadata/states/{id} | Удалить отдельный статус Возврата поставщику
*PurchaseReturnsApi* | [**deletePurchaseReturnNote**](docs/Api/PurchaseReturnsApi.md#deletepurchasereturnnote) | **DELETE** /entity/purchasereturn/{id}/notes/{noteId} | Удалить Событие Возврата поставщику
*PurchaseReturnsApi* | [**deletePurchaseReturnPosition**](docs/Api/PurchaseReturnsApi.md#deletepurchasereturnposition) | **DELETE** /entity/purchasereturn/{id}/positions/{positionId} | Удалить позицию Возврата поставщику
*PurchaseReturnsApi* | [**deletePurchaseReturnPositions**](docs/Api/PurchaseReturnsApi.md#deletepurchasereturnpositions) | **POST** /entity/purchasereturn/{id}/positions/delete | Массовое удаление позиций Возврата поставщику
*PurchaseReturnsApi* | [**getPurchaseReturnById**](docs/Api/PurchaseReturnsApi.md#getpurchasereturnbyid) | **GET** /entity/purchasereturn/{id} | Получить Возврат поставщику
*PurchaseReturnsApi* | [**getPurchaseReturnFiles**](docs/Api/PurchaseReturnsApi.md#getpurchasereturnfiles) | **GET** /entity/purchasereturn/{id}/files | Получить файлы возврата поставщику
*PurchaseReturnsApi* | [**getPurchaseReturnList**](docs/Api/PurchaseReturnsApi.md#getpurchasereturnlist) | **GET** /entity/purchasereturn | Получить список Возвратов поставщикам
*PurchaseReturnsApi* | [**getPurchaseReturnMetadata**](docs/Api/PurchaseReturnsApi.md#getpurchasereturnmetadata) | **GET** /entity/purchasereturn/metadata | Метаданные Возвратов поставщикам
*PurchaseReturnsApi* | [**getPurchaseReturnMetadataAttribute**](docs/Api/PurchaseReturnsApi.md#getpurchasereturnmetadataattribute) | **GET** /entity/purchasereturn/metadata/attributes | Доп. поля Возврата поставщику
*PurchaseReturnsApi* | [**getPurchaseReturnMetadataAttributeById**](docs/Api/PurchaseReturnsApi.md#getpurchasereturnmetadataattributebyid) | **GET** /entity/purchasereturn/metadata/attributes/{id} | Отдельное доп. поле Возврата поставщику
*PurchaseReturnsApi* | [**getPurchaseReturnMetadataStateById**](docs/Api/PurchaseReturnsApi.md#getpurchasereturnmetadatastatebyid) | **GET** /entity/purchasereturn/metadata/states/{id} | Отдельный статус Возврата поставщику
*PurchaseReturnsApi* | [**getPurchaseReturnNoteById**](docs/Api/PurchaseReturnsApi.md#getpurchasereturnnotebyid) | **GET** /entity/purchasereturn/{id}/notes/{noteId} | Получить Событие Возврата поставщику по ID
*PurchaseReturnsApi* | [**getPurchaseReturnNotes**](docs/Api/PurchaseReturnsApi.md#getpurchasereturnnotes) | **GET** /entity/purchasereturn/{id}/notes | Получить список Событий Возврата поставщику
*PurchaseReturnsApi* | [**getPurchaseReturnPositionById**](docs/Api/PurchaseReturnsApi.md#getpurchasereturnpositionbyid) | **GET** /entity/purchasereturn/{id}/positions/{positionId} | Получить позицию Возврата поставщику
*PurchaseReturnsApi* | [**getPurchaseReturnPositions**](docs/Api/PurchaseReturnsApi.md#getpurchasereturnpositions) | **GET** /entity/purchasereturn/{id}/positions | Получить позиции Возврата поставщику
*PurchaseReturnsApi* | [**getPurchaseReturnTemplate**](docs/Api/PurchaseReturnsApi.md#getpurchasereturntemplate) | **PUT** /entity/purchasereturn/new | Шаблон Возврата поставщику
*PurchaseReturnsApi* | [**updatePurchaseReturn**](docs/Api/PurchaseReturnsApi.md#updatepurchasereturn) | **PUT** /entity/purchasereturn/{id} | Изменить Возврат поставщику
*PurchaseReturnsApi* | [**updatePurchaseReturnMetadataAttributeById**](docs/Api/PurchaseReturnsApi.md#updatepurchasereturnmetadataattributebyid) | **PUT** /entity/purchasereturn/metadata/attributes/{id} | Обновить отдельное доп. поле Возврата поставщику
*PurchaseReturnsApi* | [**updatePurchaseReturnMetadataStateById**](docs/Api/PurchaseReturnsApi.md#updatepurchasereturnmetadatastatebyid) | **PUT** /entity/purchasereturn/metadata/states/{id} | Обновить отдельный статус Возврата поставщику
*PurchaseReturnsApi* | [**updatePurchaseReturnNote**](docs/Api/PurchaseReturnsApi.md#updatepurchasereturnnote) | **PUT** /entity/purchasereturn/{id}/notes/{noteId} | Обновить Событие Возврата поставщику
*PurchaseReturnsApi* | [**updatePurchaseReturnPosition**](docs/Api/PurchaseReturnsApi.md#updatepurchasereturnposition) | **PUT** /entity/purchasereturn/{id}/positions/{positionId} | Изменить позицию Возврата поставщику
*RegionsApi* | [**getRegionById**](docs/Api/RegionsApi.md#getregionbyid) | **GET** /entity/region/{id} | Получить регион по ID
*RegionsApi* | [**getRegions**](docs/Api/RegionsApi.md#getregions) | **GET** /entity/region | Получить список регионов
*ReportsApi* | [**getReportDashboardDay**](docs/Api/ReportsApi.md#getreportdashboardday) | **GET** /report/dashboard/day | Получить показатели за день
*ReportsApi* | [**getReportDashboardMonth**](docs/Api/ReportsApi.md#getreportdashboardmonth) | **GET** /report/dashboard/month | Получить показатели за месяц
*ReportsApi* | [**getReportDashboardWeek**](docs/Api/ReportsApi.md#getreportdashboardweek) | **GET** /report/dashboard/week | Получить показатели за неделю
*ReportsApi* | [**getReportOrdersPlotSeries**](docs/Api/ReportsApi.md#getreportordersplotseries) | **GET** /report/orders/plotseries | Получить показатели заказов
*ReportsApi* | [**getReportSalesPlotSeries**](docs/Api/ReportsApi.md#getreportsalesplotseries) | **GET** /report/sales/plotseries | Получить показатели продаж
*ReportsByOperationsApi* | [**getByOperationsInTransit**](docs/Api/ReportsByOperationsApi.md#getbyoperationsintransit) | **GET** /report/byoperations/intransit | Получить Отчет по документам, отображающий ожидание
*ReportsByOperationsApi* | [**getByOperationsReserve**](docs/Api/ReportsByOperationsApi.md#getbyoperationsreserve) | **GET** /report/byoperations/reserve | Получить Отчет по документам, отображающий резервы
*ReportsByOperationsApi* | [**getByOperationsStock**](docs/Api/ReportsByOperationsApi.md#getbyoperationsstock) | **GET** /report/byoperations/stock | Получить Отчет по документам, отображающий остатки
*ReportsStockAllApi* | [**getStockAll**](docs/Api/ReportsStockAllApi.md#getstockall) | **GET** /report/stock/all | Получить Расширенный отчет об остатках
*ReportsStockByOperationApi* | [**getStockByOperation**](docs/Api/ReportsStockByOperationApi.md#getstockbyoperation) | **GET** /report/stock/byoperation | Получить Остатки по документу
*ReportsStockByStoreApi* | [**getStockByStore**](docs/Api/ReportsStockByStoreApi.md#getstockbystore) | **GET** /report/stock/bystore | Получить Остатки по складам
*RetailDemandsApi* | [**createRetailDemand**](docs/Api/RetailDemandsApi.md#createretaildemand) | **POST** /entity/retaildemand | Создать Розничную продажу
*RetailDemandsApi* | [**createRetailDemandBatch**](docs/Api/RetailDemandsApi.md#createretaildemandbatch) | **POST** /entity/retaildemand/batch | Массовое создание и обновление Розничных продаж
*RetailDemandsApi* | [**createRetailDemandMetadataAttribute**](docs/Api/RetailDemandsApi.md#createretaildemandmetadataattribute) | **POST** /entity/retaildemand/metadata/attributes | Создать доп. поле Розничной продажи
*RetailDemandsApi* | [**createRetailDemandMetadataState**](docs/Api/RetailDemandsApi.md#createretaildemandmetadatastate) | **POST** /entity/retaildemand/metadata/states | Создать статус Розничной продажи
*RetailDemandsApi* | [**createRetailDemandPosition**](docs/Api/RetailDemandsApi.md#createretaildemandposition) | **POST** /entity/retaildemand/{id}/positions | Создать и обновить позицию Розничной продажи
*RetailDemandsApi* | [**createRetailDemandPositions**](docs/Api/RetailDemandsApi.md#createretaildemandpositions) | **POST** /entity/retaildemand/{id}/positions/batch | Массовое создание и обновление позиций Розничной продажи
*RetailDemandsApi* | [**deleteRetailDemand**](docs/Api/RetailDemandsApi.md#deleteretaildemand) | **DELETE** /entity/retaildemand/{id} | Удалить Розничную продажу
*RetailDemandsApi* | [**deleteRetailDemandBatch**](docs/Api/RetailDemandsApi.md#deleteretaildemandbatch) | **POST** /entity/retaildemand/delete | Массовое удаление Розничных продаж
*RetailDemandsApi* | [**deleteRetailDemandMetadataAttributeById**](docs/Api/RetailDemandsApi.md#deleteretaildemandmetadataattributebyid) | **DELETE** /entity/retaildemand/metadata/attributes/{id} | Удалить отдельное доп. поле Розничной продажи
*RetailDemandsApi* | [**deleteRetailDemandMetadataStateById**](docs/Api/RetailDemandsApi.md#deleteretaildemandmetadatastatebyid) | **DELETE** /entity/retaildemand/metadata/states/{id} | Удалить отдельный статус Розничной продажи
*RetailDemandsApi* | [**deleteRetailDemandPosition**](docs/Api/RetailDemandsApi.md#deleteretaildemandposition) | **DELETE** /entity/retaildemand/{id}/positions/{positionId} | Удалить позицию Розничной продажи
*RetailDemandsApi* | [**deleteRetailDemandPositionsBatch**](docs/Api/RetailDemandsApi.md#deleteretaildemandpositionsbatch) | **POST** /entity/retaildemand/{id}/positions/delete | Массовое удаление позиций Розничной продажи
*RetailDemandsApi* | [**getRetailDemandById**](docs/Api/RetailDemandsApi.md#getretaildemandbyid) | **GET** /entity/retaildemand/{id} | Получить Розничную продажу
*RetailDemandsApi* | [**getRetailDemandList**](docs/Api/RetailDemandsApi.md#getretaildemandlist) | **GET** /entity/retaildemand | Получить список Розничных продаж
*RetailDemandsApi* | [**getRetailDemandMetadata**](docs/Api/RetailDemandsApi.md#getretaildemandmetadata) | **GET** /entity/retaildemand/metadata | Метаданные Розничных продаж
*RetailDemandsApi* | [**getRetailDemandMetadataAttribute**](docs/Api/RetailDemandsApi.md#getretaildemandmetadataattribute) | **GET** /entity/retaildemand/metadata/attributes | Доп. поля Розничной продажи
*RetailDemandsApi* | [**getRetailDemandMetadataAttributeById**](docs/Api/RetailDemandsApi.md#getretaildemandmetadataattributebyid) | **GET** /entity/retaildemand/metadata/attributes/{id} | Отдельное доп. поле Розничной продажи
*RetailDemandsApi* | [**getRetailDemandMetadataStateById**](docs/Api/RetailDemandsApi.md#getretaildemandmetadatastatebyid) | **GET** /entity/retaildemand/metadata/states/{id} | Отдельный статус Розничной продажи
*RetailDemandsApi* | [**getRetailDemandPositionById**](docs/Api/RetailDemandsApi.md#getretaildemandpositionbyid) | **GET** /entity/retaildemand/{id}/positions/{positionId} | Получить позицию Розничной продажи
*RetailDemandsApi* | [**getRetailDemandPositions**](docs/Api/RetailDemandsApi.md#getretaildemandpositions) | **GET** /entity/retaildemand/{id}/positions | Получить позиции Розничной продажи
*RetailDemandsApi* | [**getRetailDemandTemplate**](docs/Api/RetailDemandsApi.md#getretaildemandtemplate) | **PUT** /entity/retaildemand/new | Шаблон Розничной продажи
*RetailDemandsApi* | [**updateRetailDemand**](docs/Api/RetailDemandsApi.md#updateretaildemand) | **PUT** /entity/retaildemand/{id} | Изменить Розничную продажу
*RetailDemandsApi* | [**updateRetailDemandMetadataAttributeById**](docs/Api/RetailDemandsApi.md#updateretaildemandmetadataattributebyid) | **PUT** /entity/retaildemand/metadata/attributes/{id} | Обновить отдельное доп. поле Розничной продажи
*RetailDemandsApi* | [**updateRetailDemandMetadataStateById**](docs/Api/RetailDemandsApi.md#updateretaildemandmetadatastatebyid) | **PUT** /entity/retaildemand/metadata/states/{id} | Обновить отдельный статус Розничной продажи
*RetailDemandsApi* | [**updateRetailDemandPosition**](docs/Api/RetailDemandsApi.md#updateretaildemandposition) | **PUT** /entity/retaildemand/{id}/positions/{positionId} | Изменить позицию Розничной продажи
*RetailDrawerCashInsApi* | [**addRetailDrawerCashInFiles**](docs/Api/RetailDrawerCashInsApi.md#addretaildrawercashinfiles) | **POST** /entity/retaildrawercashin/{id}/files | Добавить файлы к внесению денег
*RetailDrawerCashInsApi* | [**createRetailDrawerCashIn**](docs/Api/RetailDrawerCashInsApi.md#createretaildrawercashin) | **POST** /entity/retaildrawercashin | Создать Внесение денег
*RetailDrawerCashInsApi* | [**createRetailDrawerCashInBatch**](docs/Api/RetailDrawerCashInsApi.md#createretaildrawercashinbatch) | **POST** /entity/retaildrawercashin/batch | Массовое создание и обновление Внесений денег
*RetailDrawerCashInsApi* | [**createRetailDrawerCashInMetadataAttribute**](docs/Api/RetailDrawerCashInsApi.md#createretaildrawercashinmetadataattribute) | **POST** /entity/retaildrawercashin/metadata/attributes | Создать доп. поле Внесений денег
*RetailDrawerCashInsApi* | [**createRetailDrawerCashInMetadataState**](docs/Api/RetailDrawerCashInsApi.md#createretaildrawercashinmetadatastate) | **POST** /entity/retaildrawercashin/metadata/states | Создать статус Внесений денег
*RetailDrawerCashInsApi* | [**createRetailDrawerCashInMetadataStatesBatch**](docs/Api/RetailDrawerCashInsApi.md#createretaildrawercashinmetadatastatesbatch) | **POST** /entity/retaildrawercashin/metadata/states/batch | Массовое создание и обновление статусов Внесений денег
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
*RetailDrawerCashOutsApi* | [**addRetailDrawerCashOutFiles**](docs/Api/RetailDrawerCashOutsApi.md#addretaildrawercashoutfiles) | **POST** /entity/retaildrawercashout/{id}/files | Добавить файлы к выплате денег
*RetailDrawerCashOutsApi* | [**createRetailDrawerCashOut**](docs/Api/RetailDrawerCashOutsApi.md#createretaildrawercashout) | **POST** /entity/retaildrawercashout | Создать Выплату денег
*RetailDrawerCashOutsApi* | [**createRetailDrawerCashOutBatch**](docs/Api/RetailDrawerCashOutsApi.md#createretaildrawercashoutbatch) | **POST** /entity/retaildrawercashout/batch | Массовое создание и обновление Выплат денег
*RetailDrawerCashOutsApi* | [**createRetailDrawerCashOutMetadataAttribute**](docs/Api/RetailDrawerCashOutsApi.md#createretaildrawercashoutmetadataattribute) | **POST** /entity/retaildrawercashout/metadata/attributes | Создать доп. поле Выплат денег
*RetailDrawerCashOutsApi* | [**createRetailDrawerCashOutMetadataState**](docs/Api/RetailDrawerCashOutsApi.md#createretaildrawercashoutmetadatastate) | **POST** /entity/retaildrawercashout/metadata/states | Создать статус Выплат денег
*RetailDrawerCashOutsApi* | [**createRetailDrawerCashOutMetadataStatesBatch**](docs/Api/RetailDrawerCashOutsApi.md#createretaildrawercashoutmetadatastatesbatch) | **POST** /entity/retaildrawercashout/metadata/states/batch | Массовое создание и обновление статусов Выплат денег
*RetailDrawerCashOutsApi* | [**deleteRetailDrawerCashOut**](docs/Api/RetailDrawerCashOutsApi.md#deleteretaildrawercashout) | **DELETE** /entity/retaildrawercashout/{id} | Удалить Выплату денег
*RetailDrawerCashOutsApi* | [**deleteRetailDrawerCashOutBatch**](docs/Api/RetailDrawerCashOutsApi.md#deleteretaildrawercashoutbatch) | **POST** /entity/retaildrawercashout/delete | Массовое удаление Выплат денег
*RetailDrawerCashOutsApi* | [**deleteRetailDrawerCashOutFile**](docs/Api/RetailDrawerCashOutsApi.md#deleteretaildrawercashoutfile) | **DELETE** /entity/retaildrawercashout/{id}/files/{fileId} | Удалить файл выплаты денег
*RetailDrawerCashOutsApi* | [**deleteRetailDrawerCashOutMetadataAttributeById**](docs/Api/RetailDrawerCashOutsApi.md#deleteretaildrawercashoutmetadataattributebyid) | **DELETE** /entity/retaildrawercashout/metadata/attributes/{id} | Удалить отдельное доп. поле Выплат денег
*RetailDrawerCashOutsApi* | [**deleteRetailDrawerCashOutMetadataStateById**](docs/Api/RetailDrawerCashOutsApi.md#deleteretaildrawercashoutmetadatastatebyid) | **DELETE** /entity/retaildrawercashout/metadata/states/{id} | Удалить отдельный статус Выплат денег
*RetailDrawerCashOutsApi* | [**getRetailDrawerCashOutById**](docs/Api/RetailDrawerCashOutsApi.md#getretaildrawercashoutbyid) | **GET** /entity/retaildrawercashout/{id} | Получить Выплату денег
*RetailDrawerCashOutsApi* | [**getRetailDrawerCashOutFile**](docs/Api/RetailDrawerCashOutsApi.md#getretaildrawercashoutfile) | **GET** /entity/retaildrawercashout/{id}/files/{fileId} | Получить файл выплаты денег
*RetailDrawerCashOutsApi* | [**getRetailDrawerCashOutFiles**](docs/Api/RetailDrawerCashOutsApi.md#getretaildrawercashoutfiles) | **GET** /entity/retaildrawercashout/{id}/files | Получить файлы выплаты денег
*RetailDrawerCashOutsApi* | [**getRetailDrawerCashOutList**](docs/Api/RetailDrawerCashOutsApi.md#getretaildrawercashoutlist) | **GET** /entity/retaildrawercashout | Получить список Выплат денег
*RetailDrawerCashOutsApi* | [**getRetailDrawerCashOutMetadata**](docs/Api/RetailDrawerCashOutsApi.md#getretaildrawercashoutmetadata) | **GET** /entity/retaildrawercashout/metadata | Метаданные Выплат денег
*RetailDrawerCashOutsApi* | [**getRetailDrawerCashOutMetadataAttribute**](docs/Api/RetailDrawerCashOutsApi.md#getretaildrawercashoutmetadataattribute) | **GET** /entity/retaildrawercashout/metadata/attributes | Доп. поля Выплат денег
*RetailDrawerCashOutsApi* | [**getRetailDrawerCashOutMetadataAttributeById**](docs/Api/RetailDrawerCashOutsApi.md#getretaildrawercashoutmetadataattributebyid) | **GET** /entity/retaildrawercashout/metadata/attributes/{id} | Отдельное доп. поле Выплат денег
*RetailDrawerCashOutsApi* | [**getRetailDrawerCashOutMetadataStateById**](docs/Api/RetailDrawerCashOutsApi.md#getretaildrawercashoutmetadatastatebyid) | **GET** /entity/retaildrawercashout/metadata/states/{id} | Отдельный статус Выплат денег
*RetailDrawerCashOutsApi* | [**getRetailDrawerCashOutTemplate**](docs/Api/RetailDrawerCashOutsApi.md#getretaildrawercashouttemplate) | **PUT** /entity/retaildrawercashout/new | Шаблон Выплаты денег
*RetailDrawerCashOutsApi* | [**updateRetailDrawerCashOut**](docs/Api/RetailDrawerCashOutsApi.md#updateretaildrawercashout) | **PUT** /entity/retaildrawercashout/{id} | Изменить Выплату денег
*RetailDrawerCashOutsApi* | [**updateRetailDrawerCashOutMetadataAttributeById**](docs/Api/RetailDrawerCashOutsApi.md#updateretaildrawercashoutmetadataattributebyid) | **PUT** /entity/retaildrawercashout/metadata/attributes/{id} | Обновить отдельное доп. поле Выплат денег
*RetailDrawerCashOutsApi* | [**updateRetailDrawerCashOutMetadataStateById**](docs/Api/RetailDrawerCashOutsApi.md#updateretaildrawercashoutmetadatastatebyid) | **PUT** /entity/retaildrawercashout/metadata/states/{id} | Обновить отдельный статус Выплат денег
*RetailSalesReturnsApi* | [**createRetailSalesReturn**](docs/Api/RetailSalesReturnsApi.md#createretailsalesreturn) | **POST** /entity/retailsalesreturn | Создать Розничный возврат
*RetailSalesReturnsApi* | [**createRetailSalesReturnMetadataAttribute**](docs/Api/RetailSalesReturnsApi.md#createretailsalesreturnmetadataattribute) | **POST** /entity/retailsalesreturn/metadata/attributes | Создать доп. поле Розничного возврата
*RetailSalesReturnsApi* | [**createRetailSalesReturnPosition**](docs/Api/RetailSalesReturnsApi.md#createretailsalesreturnposition) | **POST** /entity/retailsalesreturn/{id}/positions | Создать и обновить позицию Розничного возврата
*RetailSalesReturnsApi* | [**createRetailSalesReturnPositions**](docs/Api/RetailSalesReturnsApi.md#createretailsalesreturnpositions) | **POST** /entity/retailsalesreturn/{id}/positions/batch | Массовое создание и обновление позиций Розничного возврата
*RetailSalesReturnsApi* | [**createRetailSalesReturnsBatch**](docs/Api/RetailSalesReturnsApi.md#createretailsalesreturnsbatch) | **POST** /entity/retailsalesreturn/batch | Создать или изменить Розничные возвраты
*RetailSalesReturnsApi* | [**deleteRetailSalesReturn**](docs/Api/RetailSalesReturnsApi.md#deleteretailsalesreturn) | **DELETE** /entity/retailsalesreturn/{id} | Удалить Розничный возврат
*RetailSalesReturnsApi* | [**deleteRetailSalesReturnMetadataAttributeById**](docs/Api/RetailSalesReturnsApi.md#deleteretailsalesreturnmetadataattributebyid) | **DELETE** /entity/retailsalesreturn/metadata/attributes/{id} | Удалить отдельное доп. поле Розничного возврата
*RetailSalesReturnsApi* | [**deleteRetailSalesReturnMetadataStateById**](docs/Api/RetailSalesReturnsApi.md#deleteretailsalesreturnmetadatastatebyid) | **DELETE** /entity/retailsalesreturn/metadata/states/{id} | Удалить отдельный статус Розничного возврата
*RetailSalesReturnsApi* | [**deleteRetailSalesReturnPosition**](docs/Api/RetailSalesReturnsApi.md#deleteretailsalesreturnposition) | **DELETE** /entity/retailsalesreturn/{id}/positions/{positionId} | Удалить позицию Розничного возврата
*RetailSalesReturnsApi* | [**deleteRetailSalesReturnPositionsBatch**](docs/Api/RetailSalesReturnsApi.md#deleteretailsalesreturnpositionsbatch) | **POST** /entity/retailsalesreturn/{id}/positions/delete | Массовое удаление позиций Розничного возврата
*RetailSalesReturnsApi* | [**getRetailSalesReturnById**](docs/Api/RetailSalesReturnsApi.md#getretailsalesreturnbyid) | **GET** /entity/retailsalesreturn/{id} | Получить Розничный возврат
*RetailSalesReturnsApi* | [**getRetailSalesReturnMetadata**](docs/Api/RetailSalesReturnsApi.md#getretailsalesreturnmetadata) | **GET** /entity/retailsalesreturn/metadata | Метаданные Розничных возвратов
*RetailSalesReturnsApi* | [**getRetailSalesReturnMetadataAttribute**](docs/Api/RetailSalesReturnsApi.md#getretailsalesreturnmetadataattribute) | **GET** /entity/retailsalesreturn/metadata/attributes | Доп. поля Розничного возврата
*RetailSalesReturnsApi* | [**getRetailSalesReturnMetadataAttributeById**](docs/Api/RetailSalesReturnsApi.md#getretailsalesreturnmetadataattributebyid) | **GET** /entity/retailsalesreturn/metadata/attributes/{id} | Отдельное доп. поле Розничного возврата
*RetailSalesReturnsApi* | [**getRetailSalesReturnMetadataStateById**](docs/Api/RetailSalesReturnsApi.md#getretailsalesreturnmetadatastatebyid) | **GET** /entity/retailsalesreturn/metadata/states/{id} | Отдельный статус Розничного возврата
*RetailSalesReturnsApi* | [**getRetailSalesReturnPositionById**](docs/Api/RetailSalesReturnsApi.md#getretailsalesreturnpositionbyid) | **GET** /entity/retailsalesreturn/{id}/positions/{positionId} | Получить позицию Розничного возврата
*RetailSalesReturnsApi* | [**getRetailSalesReturnPositions**](docs/Api/RetailSalesReturnsApi.md#getretailsalesreturnpositions) | **GET** /entity/retailsalesreturn/{id}/positions | Получить позиции Розничного возврата
*RetailSalesReturnsApi* | [**getRetailSalesReturnTemplate**](docs/Api/RetailSalesReturnsApi.md#getretailsalesreturntemplate) | **PUT** /entity/retailsalesreturn/new | Шаблон Розничного возврата
*RetailSalesReturnsApi* | [**getRetailSalesReturns**](docs/Api/RetailSalesReturnsApi.md#getretailsalesreturns) | **GET** /entity/retailsalesreturn | Получить список Розничных возвратов
*RetailSalesReturnsApi* | [**updateRetailSalesReturn**](docs/Api/RetailSalesReturnsApi.md#updateretailsalesreturn) | **PUT** /entity/retailsalesreturn/{id} | Изменить Розничный возврат
*RetailSalesReturnsApi* | [**updateRetailSalesReturnMetadataAttributeById**](docs/Api/RetailSalesReturnsApi.md#updateretailsalesreturnmetadataattributebyid) | **PUT** /entity/retailsalesreturn/metadata/attributes/{id} | Обновить отдельное доп. поле Розничного возврата
*RetailSalesReturnsApi* | [**updateRetailSalesReturnMetadataStateById**](docs/Api/RetailSalesReturnsApi.md#updateretailsalesreturnmetadatastatebyid) | **PUT** /entity/retailsalesreturn/metadata/states/{id} | Обновить отдельный статус Розничного возврата
*RetailSalesReturnsApi* | [**updateRetailSalesReturnPosition**](docs/Api/RetailSalesReturnsApi.md#updateretailsalesreturnposition) | **PUT** /entity/retailsalesreturn/{id}/positions/{positionId} | Изменить позицию Розничного возврата
*RetailShiftsApi* | [**createRetailShift**](docs/Api/RetailShiftsApi.md#createretailshift) | **POST** /entity/retailshift | Создать Розничную смену
*RetailShiftsApi* | [**createRetailShiftBatch**](docs/Api/RetailShiftsApi.md#createretailshiftbatch) | **POST** /entity/retailshift/batch | Массовое создание и обновление Розничных смен
*RetailShiftsApi* | [**createRetailShiftMetadataAttribute**](docs/Api/RetailShiftsApi.md#createretailshiftmetadataattribute) | **POST** /entity/retailshift/metadata/attributes | Создать доп. поле Розничной смены
*RetailShiftsApi* | [**deleteRetailShift**](docs/Api/RetailShiftsApi.md#deleteretailshift) | **DELETE** /entity/retailshift/{id} | Удалить Розничную смену
*RetailShiftsApi* | [**deleteRetailShiftBatch**](docs/Api/RetailShiftsApi.md#deleteretailshiftbatch) | **POST** /entity/retailshift/delete | Массовое удаление Розничных смен
*RetailShiftsApi* | [**deleteRetailShiftMetadataAttributeById**](docs/Api/RetailShiftsApi.md#deleteretailshiftmetadataattributebyid) | **DELETE** /entity/retailshift/metadata/attributes/{id} | Удалить отдельное доп. поле Розничной смены
*RetailShiftsApi* | [**getRetailShiftById**](docs/Api/RetailShiftsApi.md#getretailshiftbyid) | **GET** /entity/retailshift/{id} | Получить Розничную смену
*RetailShiftsApi* | [**getRetailShiftMetadata**](docs/Api/RetailShiftsApi.md#getretailshiftmetadata) | **GET** /entity/retailshift/metadata | Метаданные Розничных смен
*RetailShiftsApi* | [**getRetailShiftMetadataAttribute**](docs/Api/RetailShiftsApi.md#getretailshiftmetadataattribute) | **GET** /entity/retailshift/metadata/attributes | Доп. поля Розничной смены
*RetailShiftsApi* | [**getRetailShiftMetadataAttributeById**](docs/Api/RetailShiftsApi.md#getretailshiftmetadataattributebyid) | **GET** /entity/retailshift/metadata/attributes/{id} | Отдельное доп. поле Розничной смены
*RetailShiftsApi* | [**getRetailShifts**](docs/Api/RetailShiftsApi.md#getretailshifts) | **GET** /entity/retailshift | Получить список Розничных смен
*RetailShiftsApi* | [**updateRetailShift**](docs/Api/RetailShiftsApi.md#updateretailshift) | **PUT** /entity/retailshift/{id} | Изменить Розничную смену
*RetailShiftsApi* | [**updateRetailShiftMetadataAttributeById**](docs/Api/RetailShiftsApi.md#updateretailshiftmetadataattributebyid) | **PUT** /entity/retailshift/metadata/attributes/{id} | Обновить отдельное доп. поле Розничной смены
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
*SalesReturnsApi* | [**createSalesReturn**](docs/Api/SalesReturnsApi.md#createsalesreturn) | **POST** /entity/salesreturn | Создать Возврат покупателя
*SalesReturnsApi* | [**createSalesReturnBatch**](docs/Api/SalesReturnsApi.md#createsalesreturnbatch) | **POST** /entity/salesreturn/batch | Массовое создание и обновление Возвратов покупателей
*SalesReturnsApi* | [**createSalesReturnMetadataAttribute**](docs/Api/SalesReturnsApi.md#createsalesreturnmetadataattribute) | **POST** /entity/salesreturn/metadata/attributes | Создать доп. поле Возврата покупателя
*SalesReturnsApi* | [**createSalesReturnPosition**](docs/Api/SalesReturnsApi.md#createsalesreturnposition) | **POST** /entity/salesreturn/{id}/positions | Создать и обновить позицию Возврата покупателя
*SalesReturnsApi* | [**createSalesReturnPositions**](docs/Api/SalesReturnsApi.md#createsalesreturnpositions) | **POST** /entity/salesreturn/{id}/positions/batch | Массовое создание и обновление позиций Возврата покупателя
*SalesReturnsApi* | [**deleteSalesReturn**](docs/Api/SalesReturnsApi.md#deletesalesreturn) | **DELETE** /entity/salesreturn/{id} | Удалить Возврат покупателя
*SalesReturnsApi* | [**deleteSalesReturnBatch**](docs/Api/SalesReturnsApi.md#deletesalesreturnbatch) | **POST** /entity/salesreturn/delete | Массовое удаление Возвратов покупателей
*SalesReturnsApi* | [**deleteSalesReturnMetadataAttributeById**](docs/Api/SalesReturnsApi.md#deletesalesreturnmetadataattributebyid) | **DELETE** /entity/salesreturn/metadata/attributes/{id} | Удалить отдельное доп. поле Возврата покупателя
*SalesReturnsApi* | [**deleteSalesReturnMetadataStateById**](docs/Api/SalesReturnsApi.md#deletesalesreturnmetadatastatebyid) | **DELETE** /entity/salesreturn/metadata/states/{id} | Удалить отдельный статус Возврата покупателя
*SalesReturnsApi* | [**deleteSalesReturnPosition**](docs/Api/SalesReturnsApi.md#deletesalesreturnposition) | **DELETE** /entity/salesreturn/{id}/positions/{positionId} | Удалить позицию Возврата покупателя
*SalesReturnsApi* | [**deleteSalesReturnPositionsBatch**](docs/Api/SalesReturnsApi.md#deletesalesreturnpositionsbatch) | **POST** /entity/salesreturn/{id}/positions/delete | Массовое удаление позиций Возврата покупателя
*SalesReturnsApi* | [**getSalesReturnById**](docs/Api/SalesReturnsApi.md#getsalesreturnbyid) | **GET** /entity/salesreturn/{id} | Получить Возврат покупателя
*SalesReturnsApi* | [**getSalesReturnList**](docs/Api/SalesReturnsApi.md#getsalesreturnlist) | **GET** /entity/salesreturn | Получить список Возвратов покупателей
*SalesReturnsApi* | [**getSalesReturnMetadata**](docs/Api/SalesReturnsApi.md#getsalesreturnmetadata) | **GET** /entity/salesreturn/metadata | Метаданные Возвратов покупателей
*SalesReturnsApi* | [**getSalesReturnMetadataAttribute**](docs/Api/SalesReturnsApi.md#getsalesreturnmetadataattribute) | **GET** /entity/salesreturn/metadata/attributes | Доп. поля Возврата покупателя
*SalesReturnsApi* | [**getSalesReturnMetadataAttributeById**](docs/Api/SalesReturnsApi.md#getsalesreturnmetadataattributebyid) | **GET** /entity/salesreturn/metadata/attributes/{id} | Отдельное доп. поле Возврата покупателя
*SalesReturnsApi* | [**getSalesReturnMetadataStateById**](docs/Api/SalesReturnsApi.md#getsalesreturnmetadatastatebyid) | **GET** /entity/salesreturn/metadata/states/{id} | Отдельный статус Возврата покупателя
*SalesReturnsApi* | [**getSalesReturnPositionById**](docs/Api/SalesReturnsApi.md#getsalesreturnpositionbyid) | **GET** /entity/salesreturn/{id}/positions/{positionId} | Получить позицию Возврата покупателя
*SalesReturnsApi* | [**getSalesReturnPositions**](docs/Api/SalesReturnsApi.md#getsalesreturnpositions) | **GET** /entity/salesreturn/{id}/positions | Получить позиции Возврата покупателя
*SalesReturnsApi* | [**getSalesReturnTemplate**](docs/Api/SalesReturnsApi.md#getsalesreturntemplate) | **PUT** /entity/salesreturn/new | Шаблон Возврата покупателя
*SalesReturnsApi* | [**updateSalesReturn**](docs/Api/SalesReturnsApi.md#updatesalesreturn) | **PUT** /entity/salesreturn/{id} | Изменить Возврат покупателя
*SalesReturnsApi* | [**updateSalesReturnMetadataAttributeById**](docs/Api/SalesReturnsApi.md#updatesalesreturnmetadataattributebyid) | **PUT** /entity/salesreturn/metadata/attributes/{id} | Обновить отдельное доп. поле Возврата покупателя
*SalesReturnsApi* | [**updateSalesReturnMetadataStateById**](docs/Api/SalesReturnsApi.md#updatesalesreturnmetadatastatebyid) | **PUT** /entity/salesreturn/metadata/states/{id} | Обновить отдельный статус Возврата покупателя
*SalesReturnsApi* | [**updateSalesReturnPosition**](docs/Api/SalesReturnsApi.md#updatesalesreturnposition) | **PUT** /entity/salesreturn/{id}/positions/{positionId} | Изменить позицию Возврата покупателя
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
*SuppliesApi* | [**addSupplyFiles**](docs/Api/SuppliesApi.md#addsupplyfiles) | **POST** /entity/supply/{id}/files | Добавить файлы к Приемке
*SuppliesApi* | [**createSupply**](docs/Api/SuppliesApi.md#createsupply) | **POST** /entity/supply | Создать Приемку
*SuppliesApi* | [**createSupplyBatch**](docs/Api/SuppliesApi.md#createsupplybatch) | **POST** /entity/supply/batch | Массовое создание и обновление Приемок
*SuppliesApi* | [**createSupplyMetadataAttribute**](docs/Api/SuppliesApi.md#createsupplymetadataattribute) | **POST** /entity/supply/metadata/attributes | Создать доп. поле Приемки
*SuppliesApi* | [**createSupplyMetadataState**](docs/Api/SuppliesApi.md#createsupplymetadatastate) | **POST** /entity/supply/metadata/states | Создать статус Приемки
*SuppliesApi* | [**createSupplyMetadataStatesBatch**](docs/Api/SuppliesApi.md#createsupplymetadatastatesbatch) | **POST** /entity/supply/metadata/states/batch | Массовое создание и обновление статусов Приемки
*SuppliesApi* | [**createSupplyNote**](docs/Api/SuppliesApi.md#createsupplynote) | **POST** /entity/supply/{id}/notes | Добавить Событие Приемки
*SuppliesApi* | [**createSupplyPosition**](docs/Api/SuppliesApi.md#createsupplyposition) | **POST** /entity/supply/{id}/positions | Создать и обновить позицию Приемки
*SuppliesApi* | [**createSupplyPositions**](docs/Api/SuppliesApi.md#createsupplypositions) | **POST** /entity/supply/{id}/positions/batch | Массовое создание и обновление позиций Приемки
*SuppliesApi* | [**deleteSupply**](docs/Api/SuppliesApi.md#deletesupply) | **DELETE** /entity/supply/{id} | Удалить Приемку
*SuppliesApi* | [**deleteSupplyBatch**](docs/Api/SuppliesApi.md#deletesupplybatch) | **POST** /entity/supply/delete | Массовое удаление Приемок
*SuppliesApi* | [**deleteSupplyFile**](docs/Api/SuppliesApi.md#deletesupplyfile) | **DELETE** /entity/supply/{id}/files/{fileId} | Удалить файл Приемки
*SuppliesApi* | [**deleteSupplyMetadataAttributeById**](docs/Api/SuppliesApi.md#deletesupplymetadataattributebyid) | **DELETE** /entity/supply/metadata/attributes/{id} | Удалить отдельное доп. поле Приемки
*SuppliesApi* | [**deleteSupplyMetadataStateById**](docs/Api/SuppliesApi.md#deletesupplymetadatastatebyid) | **DELETE** /entity/supply/metadata/states/{id} | Удалить отдельный статус Приемки
*SuppliesApi* | [**deleteSupplyNote**](docs/Api/SuppliesApi.md#deletesupplynote) | **DELETE** /entity/supply/{id}/notes/{noteId} | Удалить Событие Приемки
*SuppliesApi* | [**deleteSupplyPosition**](docs/Api/SuppliesApi.md#deletesupplyposition) | **DELETE** /entity/supply/{id}/positions/{positionId} | Удалить позицию Приемки
*SuppliesApi* | [**deleteSupplyPositions**](docs/Api/SuppliesApi.md#deletesupplypositions) | **POST** /entity/supply/{id}/positions/delete | Массовое удаление позиций Приемки
*SuppliesApi* | [**getSupplyById**](docs/Api/SuppliesApi.md#getsupplybyid) | **GET** /entity/supply/{id} | Получить Приемку
*SuppliesApi* | [**getSupplyFiles**](docs/Api/SuppliesApi.md#getsupplyfiles) | **GET** /entity/supply/{id}/files | Получить файлы Приемки
*SuppliesApi* | [**getSupplyList**](docs/Api/SuppliesApi.md#getsupplylist) | **GET** /entity/supply | Получить список Приемок
*SuppliesApi* | [**getSupplyMetadata**](docs/Api/SuppliesApi.md#getsupplymetadata) | **GET** /entity/supply/metadata | Метаданные Приемок
*SuppliesApi* | [**getSupplyMetadataAttribute**](docs/Api/SuppliesApi.md#getsupplymetadataattribute) | **GET** /entity/supply/metadata/attributes | Доп. поля Приемки
*SuppliesApi* | [**getSupplyMetadataAttributeById**](docs/Api/SuppliesApi.md#getsupplymetadataattributebyid) | **GET** /entity/supply/metadata/attributes/{id} | Отдельное доп. поле Приемки
*SuppliesApi* | [**getSupplyMetadataStateById**](docs/Api/SuppliesApi.md#getsupplymetadatastatebyid) | **GET** /entity/supply/metadata/states/{id} | Отдельный статус Приемки
*SuppliesApi* | [**getSupplyNoteById**](docs/Api/SuppliesApi.md#getsupplynotebyid) | **GET** /entity/supply/{id}/notes/{noteId} | Получить Событие Приемки по ID
*SuppliesApi* | [**getSupplyNotes**](docs/Api/SuppliesApi.md#getsupplynotes) | **GET** /entity/supply/{id}/notes | Получить список Событий Приемки
*SuppliesApi* | [**getSupplyPositionById**](docs/Api/SuppliesApi.md#getsupplypositionbyid) | **GET** /entity/supply/{id}/positions/{positionId} | Получить позицию Приемки
*SuppliesApi* | [**getSupplyPositions**](docs/Api/SuppliesApi.md#getsupplypositions) | **GET** /entity/supply/{id}/positions | Получить позиции Приемки
*SuppliesApi* | [**getSupplyTemplate**](docs/Api/SuppliesApi.md#getsupplytemplate) | **PUT** /entity/supply/new | Шаблон Приемки
*SuppliesApi* | [**moveSupplyToTrash**](docs/Api/SuppliesApi.md#movesupplytotrash) | **POST** /entity/supply/{id}/trash | Удалить Приемку в корзину
*SuppliesApi* | [**updateSupply**](docs/Api/SuppliesApi.md#updatesupply) | **PUT** /entity/supply/{id} | Изменить Приемку
*SuppliesApi* | [**updateSupplyMetadataAttributeById**](docs/Api/SuppliesApi.md#updatesupplymetadataattributebyid) | **PUT** /entity/supply/metadata/attributes/{id} | Обновить отдельное доп. поле Приемки
*SuppliesApi* | [**updateSupplyMetadataStateById**](docs/Api/SuppliesApi.md#updatesupplymetadatastatebyid) | **PUT** /entity/supply/metadata/states/{id} | Обновить отдельный статус Приемки
*SuppliesApi* | [**updateSupplyNote**](docs/Api/SuppliesApi.md#updatesupplynote) | **PUT** /entity/supply/{id}/notes/{noteId} | Обновить Событие Приемки
*SuppliesApi* | [**updateSupplyPosition**](docs/Api/SuppliesApi.md#updatesupplyposition) | **PUT** /entity/supply/{id}/positions/{positionId} | Изменить позицию Приемки
*TasksApi* | [**createTask**](docs/Api/TasksApi.md#createtask) | **POST** /entity/task | Создать задачу
*TasksApi* | [**createTaskMetadataStates**](docs/Api/TasksApi.md#createtaskmetadatastates) | **POST** /entity/task/metadata/states | Создать или изменить типы задач
*TasksApi* | [**createTaskMetadataStatesBatch**](docs/Api/TasksApi.md#createtaskmetadatastatesbatch) | **POST** /entity/task/metadata/states/batch | Массовое создание и обновление типов задач
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
- [AccumulationDiscountLevelsInner](docs/Model/AccumulationDiscountLevelsInner.md)
- [ActivateEmployee200Response](docs/Model/ActivateEmployee200Response.md)
- [ActivateEmployeeRequest](docs/Model/ActivateEmployeeRequest.md)
- [AddProductImagesRequest](docs/Model/AddProductImagesRequest.md)
- [Address](docs/Model/Address.md)
- [Agent](docs/Model/Agent.md)
- [AgentDiscount](docs/Model/AgentDiscount.md)
- [AppAsyncButton](docs/Model/AppAsyncButton.md)
- [AppChangePermissions](docs/Model/AppChangePermissions.md)
- [Application](docs/Model/Application.md)
- [Assortment](docs/Model/Assortment.md)
- [AssortmentList](docs/Model/AssortmentList.md)
- [AssortmentSettings](docs/Model/AssortmentSettings.md)
- [AssortmentSettingsBarcodeRules](docs/Model/AssortmentSettingsBarcodeRules.md)
- [AssortmentSettingsUniqueCodeRules](docs/Model/AssortmentSettingsUniqueCodeRules.md)
- [AssortmentWithoutBundle](docs/Model/AssortmentWithoutBundle.md)
- [AttributeAbstract](docs/Model/AttributeAbstract.md)
- [AttributeBool](docs/Model/AttributeBool.md)
- [AttributeContractEntity](docs/Model/AttributeContractEntity.md)
- [AttributeCounterpartyEntity](docs/Model/AttributeCounterpartyEntity.md)
- [AttributeCustomEntity](docs/Model/AttributeCustomEntity.md)
- [AttributeDateTime](docs/Model/AttributeDateTime.md)
- [AttributeDouble](docs/Model/AttributeDouble.md)
- [AttributeEmployeeEntity](docs/Model/AttributeEmployeeEntity.md)
- [AttributeFile](docs/Model/AttributeFile.md)
- [AttributeLink](docs/Model/AttributeLink.md)
- [AttributeLong](docs/Model/AttributeLong.md)
- [AttributeMetaField](docs/Model/AttributeMetaField.md)
- [AttributeMetaInfo](docs/Model/AttributeMetaInfo.md)
- [AttributeMetaInfoList](docs/Model/AttributeMetaInfoList.md)
- [AttributeProductEntity](docs/Model/AttributeProductEntity.md)
- [AttributeProjectEntity](docs/Model/AttributeProjectEntity.md)
- [AttributeStoreEntity](docs/Model/AttributeStoreEntity.md)
- [AttributeString](docs/Model/AttributeString.md)
- [AttributeText](docs/Model/AttributeText.md)
- [AttributeType](docs/Model/AttributeType.md)
- [Barcode](docs/Model/Barcode.md)
- [BatchResponseEntity](docs/Model/BatchResponseEntity.md)
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
- [ByOperationsInTransit](docs/Model/ByOperationsInTransit.md)
- [ByOperationsInTransitList](docs/Model/ByOperationsInTransitList.md)
- [ByOperationsReserve](docs/Model/ByOperationsReserve.md)
- [ByOperationsReserveList](docs/Model/ByOperationsReserveList.md)
- [ByOperationsStock](docs/Model/ByOperationsStock.md)
- [ByOperationsStockAssortment](docs/Model/ByOperationsStockAssortment.md)
- [ByOperationsStockList](docs/Model/ByOperationsStockList.md)
- [ByOperationsStockOperation](docs/Model/ByOperationsStockOperation.md)
- [ByOperationsStockStore](docs/Model/ByOperationsStockStore.md)
- [CashIn](docs/Model/CashIn.md)
- [CashInList](docs/Model/CashInList.md)
- [CashOut](docs/Model/CashOut.md)
- [CashOutList](docs/Model/CashOutList.md)
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
- [CommissionReportOutList](docs/Model/CommissionReportOutList.md)
- [CommissionReportOutPosition](docs/Model/CommissionReportOutPosition.md)
- [CommissionReportOutPositionList](docs/Model/CommissionReportOutPositionList.md)
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
- [CreateBundleComponentsRequest](docs/Model/CreateBundleComponentsRequest.md)
- [CreateCommissionReportInPositions200ResponseInner](docs/Model/CreateCommissionReportInPositions200ResponseInner.md)
- [CreateCommissionReportInReturnedPositions200ResponseInner](docs/Model/CreateCommissionReportInReturnedPositions200ResponseInner.md)
- [CreateCommissionReportInReturnedPositionsRequest](docs/Model/CreateCommissionReportInReturnedPositionsRequest.md)
- [CreateCustomerOrderPositions200ResponseInner](docs/Model/CreateCustomerOrderPositions200ResponseInner.md)
- [CreateDemandPositions200ResponseInner](docs/Model/CreateDemandPositions200ResponseInner.md)
- [CreateEnterPositions200ResponseInner](docs/Model/CreateEnterPositions200ResponseInner.md)
- [CreateFactureInsBatch200ResponseInner](docs/Model/CreateFactureInsBatch200ResponseInner.md)
- [CreateFactureOutsBatch200ResponseInner](docs/Model/CreateFactureOutsBatch200ResponseInner.md)
- [CreateInternalOrderPositions200ResponseInner](docs/Model/CreateInternalOrderPositions200ResponseInner.md)
- [CreateInventoryPositions200ResponseInner](docs/Model/CreateInventoryPositions200ResponseInner.md)
- [CreateInvoiceInBatch200ResponseInner](docs/Model/CreateInvoiceInBatch200ResponseInner.md)
- [CreateInvoiceInPositionsBatch200ResponseInner](docs/Model/CreateInvoiceInPositionsBatch200ResponseInner.md)
- [CreateInvoiceOutBatch200ResponseInner](docs/Model/CreateInvoiceOutBatch200ResponseInner.md)
- [CreateInvoiceOutPositionsBatch200ResponseInner](docs/Model/CreateInvoiceOutPositionsBatch200ResponseInner.md)
- [CreateLossPositions200ResponseInner](docs/Model/CreateLossPositions200ResponseInner.md)
- [CreateProcessingOrderPositions200ResponseInner](docs/Model/CreateProcessingOrderPositions200ResponseInner.md)
- [CreateProcessingProcessPositions200ResponseInner](docs/Model/CreateProcessingProcessPositions200ResponseInner.md)
- [CreatePurchaseOrderPositions200ResponseInner](docs/Model/CreatePurchaseOrderPositions200ResponseInner.md)
- [CreatePurchaseReturnPositions200ResponseInner](docs/Model/CreatePurchaseReturnPositions200ResponseInner.md)
- [CreateRetailDemandMetadataStateRequest](docs/Model/CreateRetailDemandMetadataStateRequest.md)
- [CreateRetailDemandPositions200ResponseInner](docs/Model/CreateRetailDemandPositions200ResponseInner.md)
- [CreateRetailSalesReturnPositions200ResponseInner](docs/Model/CreateRetailSalesReturnPositions200ResponseInner.md)
- [CreateRetailSalesReturnsBatch200ResponseInner](docs/Model/CreateRetailSalesReturnsBatch200ResponseInner.md)
- [CreateRetailShiftBatch200ResponseInner](docs/Model/CreateRetailShiftBatch200ResponseInner.md)
- [CreateSalesReturnPositions200ResponseInner](docs/Model/CreateSalesReturnPositions200ResponseInner.md)
- [CreateStoreSlotsRequest](docs/Model/CreateStoreSlotsRequest.md)
- [CreateStoreZonesRequest](docs/Model/CreateStoreZonesRequest.md)
- [Currency](docs/Model/Currency.md)
- [CurrencyList](docs/Model/CurrencyList.md)
- [CurrencyMajorUnit](docs/Model/CurrencyMajorUnit.md)
- [CurrencyMinorUnit](docs/Model/CurrencyMinorUnit.md)
- [CurrencyRate](docs/Model/CurrencyRate.md)
- [CustomEntity](docs/Model/CustomEntity.md)
- [CustomEntityElement](docs/Model/CustomEntityElement.md)
- [CustomEntityElementList](docs/Model/CustomEntityElementList.md)
- [CustomEntityMetadata](docs/Model/CustomEntityMetadata.md)
- [CustomRole](docs/Model/CustomRole.md)
- [CustomRoleList](docs/Model/CustomRoleList.md)
- [CustomerOrder](docs/Model/CustomerOrder.md)
- [CustomerOrderList](docs/Model/CustomerOrderList.md)
- [CustomerOrderPosition](docs/Model/CustomerOrderPosition.md)
- [CustomerOrderPositionList](docs/Model/CustomerOrderPositionList.md)
- [DeclarationInner](docs/Model/DeclarationInner.md)
- [DefaultScreen](docs/Model/DefaultScreen.md)
- [DeleteInfo](docs/Model/DeleteInfo.md)
- [DeleteInvoiceOutBatch200ResponseInner](docs/Model/DeleteInvoiceOutBatch200ResponseInner.md)
- [DeleteProductImagesRequestInner](docs/Model/DeleteProductImagesRequestInner.md)
- [DeleteRowResult](docs/Model/DeleteRowResult.md)
- [Demand](docs/Model/Demand.md)
- [DemandList](docs/Model/DemandList.md)
- [DemandPosition](docs/Model/DemandPosition.md)
- [DemandPositionList](docs/Model/DemandPositionList.md)
- [DemandPositionTrackingCode1162](docs/Model/DemandPositionTrackingCode1162.md)
- [Discount](docs/Model/Discount.md)
- [DiscountAbstract](docs/Model/DiscountAbstract.md)
- [DiscountAssortmentItem](docs/Model/DiscountAssortmentItem.md)
- [DiscountBase](docs/Model/DiscountBase.md)
- [DiscountList](docs/Model/DiscountList.md)
- [DiscountStrategy](docs/Model/DiscountStrategy.md)
- [DocumentMetadata](docs/Model/DocumentMetadata.md)
- [EmbeddedTemplate](docs/Model/EmbeddedTemplate.md)
- [EmbeddedTemplateList](docs/Model/EmbeddedTemplateList.md)
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
- [EmployeeRolePermissions](docs/Model/EmployeeRolePermissions.md)
- [EmployeeSalary](docs/Model/EmployeeSalary.md)
- [EmployeeSecurity](docs/Model/EmployeeSecurity.md)
- [EmployeeSecurityGroup](docs/Model/EmployeeSecurityGroup.md)
- [Enter](docs/Model/Enter.md)
- [EnterList](docs/Model/EnterList.md)
- [EnterPosition](docs/Model/EnterPosition.md)
- [EnterPositionList](docs/Model/EnterPositionList.md)
- [EntityWithMeta](docs/Model/EntityWithMeta.md)
- [Error](docs/Model/Error.md)
- [Errors](docs/Model/Errors.md)
- [EventNote](docs/Model/EventNote.md)
- [EventNoteList](docs/Model/EventNoteList.md)
- [ExpenseItem](docs/Model/ExpenseItem.md)
- [ExpenseItemList](docs/Model/ExpenseItemList.md)
- [ExportRequest](docs/Model/ExportRequest.md)
- [FacebookTokenExpirationNotification](docs/Model/FacebookTokenExpirationNotification.md)
- [FactureIn](docs/Model/FactureIn.md)
- [FactureInList](docs/Model/FactureInList.md)
- [FactureOut](docs/Model/FactureOut.md)
- [FactureOutList](docs/Model/FactureOutList.md)
- [File](docs/Model/File.md)
- [FileList](docs/Model/FileList.md)
- [FileUpload](docs/Model/FileUpload.md)
- [FinanceInOperationAbstract](docs/Model/FinanceInOperationAbstract.md)
- [FinanceInOperationCommissionReportIn](docs/Model/FinanceInOperationCommissionReportIn.md)
- [FinanceInOperationCustomerOrder](docs/Model/FinanceInOperationCustomerOrder.md)
- [FinanceInOperationDemand](docs/Model/FinanceInOperationDemand.md)
- [FinanceInOperationInvoiceOut](docs/Model/FinanceInOperationInvoiceOut.md)
- [FinanceInOperationPurchaseReturn](docs/Model/FinanceInOperationPurchaseReturn.md)
- [FinanceInOperationRetailShift](docs/Model/FinanceInOperationRetailShift.md)
- [FinanceOutOperationAbstract](docs/Model/FinanceOutOperationAbstract.md)
- [FinanceOutOperationCommissionReportOut](docs/Model/FinanceOutOperationCommissionReportOut.md)
- [FinanceOutOperationInvoiceIn](docs/Model/FinanceOutOperationInvoiceIn.md)
- [FinanceOutOperationPurchaseOrder](docs/Model/FinanceOutOperationPurchaseOrder.md)
- [FinanceOutOperationSalesReturn](docs/Model/FinanceOutOperationSalesReturn.md)
- [FinanceOutOperationSupply](docs/Model/FinanceOutOperationSupply.md)
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
- [Gtd](docs/Model/Gtd.md)
- [Image](docs/Model/Image.md)
- [ImageList](docs/Model/ImageList.md)
- [InternalOrder](docs/Model/InternalOrder.md)
- [InternalOrderList](docs/Model/InternalOrderList.md)
- [InternalOrderPosition](docs/Model/InternalOrderPosition.md)
- [InternalOrderPositionList](docs/Model/InternalOrderPositionList.md)
- [Inventory](docs/Model/Inventory.md)
- [InventoryList](docs/Model/InventoryList.md)
- [InventoryPosition](docs/Model/InventoryPosition.md)
- [InventoryPositionList](docs/Model/InventoryPositionList.md)
- [InvoiceIn](docs/Model/InvoiceIn.md)
- [InvoiceInList](docs/Model/InvoiceInList.md)
- [InvoiceInPosition](docs/Model/InvoiceInPosition.md)
- [InvoiceInPositionList](docs/Model/InvoiceInPositionList.md)
- [InvoiceOut](docs/Model/InvoiceOut.md)
- [InvoiceOutList](docs/Model/InvoiceOutList.md)
- [InvoiceOutPosition](docs/Model/InvoiceOutPosition.md)
- [InvoiceOutPositionList](docs/Model/InvoiceOutPositionList.md)
- [LabelPrintRequest](docs/Model/LabelPrintRequest.md)
- [Locale](docs/Model/Locale.md)
- [Loss](docs/Model/Loss.md)
- [LossList](docs/Model/LossList.md)
- [LossPosition](docs/Model/LossPosition.md)
- [LossPositionList](docs/Model/LossPositionList.md)
- [MarkingSellingMode](docs/Model/MarkingSellingMode.md)
- [MarksCheckMode](docs/Model/MarksCheckMode.md)
- [Meta](docs/Model/Meta.md)
- [MetaList](docs/Model/MetaList.md)
- [Metadata](docs/Model/Metadata.md)
- [MinimumStockAbstract](docs/Model/MinimumStockAbstract.md)
- [MinimumStockAllWarehouseSame](docs/Model/MinimumStockAllWarehouseSame.md)
- [MinimumStockAllWarehouseSum](docs/Model/MinimumStockAllWarehouseSum.md)
- [MinimumStockWarehouseVaried](docs/Model/MinimumStockWarehouseVaried.md)
- [MinionToMasterType](docs/Model/MinionToMasterType.md)
- [Move](docs/Model/Move.md)
- [MoveList](docs/Model/MoveList.md)
- [MovePosition](docs/Model/MovePosition.md)
- [MovePositionList](docs/Model/MovePositionList.md)
- [NewEventInEventFeed](docs/Model/NewEventInEventFeed.md)
- [NewMentionInEvent](docs/Model/NewMentionInEvent.md)
- [NewMentionInTaskNote](docs/Model/NewMentionInTaskNote.md)
- [Note](docs/Model/Note.md)
- [NotificationAbstract](docs/Model/NotificationAbstract.md)
- [NotificationBonusMoney](docs/Model/NotificationBonusMoney.md)
- [NotificationChannelSettings](docs/Model/NotificationChannelSettings.md)
- [NotificationDeletedTask](docs/Model/NotificationDeletedTask.md)
- [NotificationDiffValue](docs/Model/NotificationDiffValue.md)
- [NotificationEventType](docs/Model/NotificationEventType.md)
- [NotificationExportCompleted](docs/Model/NotificationExportCompleted.md)
- [NotificationExportType](docs/Model/NotificationExportType.md)
- [NotificationGoodCountTooLow](docs/Model/NotificationGoodCountTooLow.md)
- [NotificationGroupSettings](docs/Model/NotificationGroupSettings.md)
- [NotificationImportCompleted](docs/Model/NotificationImportCompleted.md)
- [NotificationImportType](docs/Model/NotificationImportType.md)
- [NotificationInvoice](docs/Model/NotificationInvoice.md)
- [NotificationInvoiceOutOverdue](docs/Model/NotificationInvoiceOutOverdue.md)
- [NotificationList](docs/Model/NotificationList.md)
- [NotificationNamedEntity](docs/Model/NotificationNamedEntity.md)
- [NotificationOrder](docs/Model/NotificationOrder.md)
- [NotificationOrderNew](docs/Model/NotificationOrderNew.md)
- [NotificationOrderOverdue](docs/Model/NotificationOrderOverdue.md)
- [NotificationRetailShift](docs/Model/NotificationRetailShift.md)
- [NotificationRetailShiftClosed](docs/Model/NotificationRetailShiftClosed.md)
- [NotificationRetailShiftOpened](docs/Model/NotificationRetailShiftOpened.md)
- [NotificationSalesManagerChatMessage](docs/Model/NotificationSalesManagerChatMessage.md)
- [NotificationScript](docs/Model/NotificationScript.md)
- [NotificationSettings](docs/Model/NotificationSettings.md)
- [NotificationSubscribeExpired](docs/Model/NotificationSubscribeExpired.md)
- [NotificationSubscribeTermsExpired](docs/Model/NotificationSubscribeTermsExpired.md)
- [NotificationTask](docs/Model/NotificationTask.md)
- [NotificationTaskAssigned](docs/Model/NotificationTaskAssigned.md)
- [NotificationTaskChanged](docs/Model/NotificationTaskChanged.md)
- [NotificationTaskCommentChanged](docs/Model/NotificationTaskCommentChanged.md)
- [NotificationTaskCommentDeleted](docs/Model/NotificationTaskCommentDeleted.md)
- [NotificationTaskCommentDiff](docs/Model/NotificationTaskCommentDiff.md)
- [NotificationTaskCompleted](docs/Model/NotificationTaskCompleted.md)
- [NotificationTaskDeleted](docs/Model/NotificationTaskDeleted.md)
- [NotificationTaskDiff](docs/Model/NotificationTaskDiff.md)
- [NotificationTaskNewComment](docs/Model/NotificationTaskNewComment.md)
- [NotificationTaskOverdue](docs/Model/NotificationTaskOverdue.md)
- [NotificationTaskReopened](docs/Model/NotificationTaskReopened.md)
- [NotificationTaskState](docs/Model/NotificationTaskState.md)
- [NotificationTaskUnassigned](docs/Model/NotificationTaskUnassigned.md)
- [OperationLinkedSum](docs/Model/OperationLinkedSum.md)
- [Organization](docs/Model/Organization.md)
- [OrganizationAccounts](docs/Model/OrganizationAccounts.md)
- [OrganizationList](docs/Model/OrganizationList.md)
- [Overhead](docs/Model/Overhead.md)
- [OverheadDistribution](docs/Model/OverheadDistribution.md)
- [Pack](docs/Model/Pack.md)
- [PaymentIn](docs/Model/PaymentIn.md)
- [PaymentInList](docs/Model/PaymentInList.md)
- [PaymentItemType](docs/Model/PaymentItemType.md)
- [PaymentOut](docs/Model/PaymentOut.md)
- [PaymentOutList](docs/Model/PaymentOutList.md)
- [PermissionValue](docs/Model/PermissionValue.md)
- [Permissions](docs/Model/Permissions.md)
- [PersonalDiscount](docs/Model/PersonalDiscount.md)
- [PositionStock](docs/Model/PositionStock.md)
- [PositionTrackingCode](docs/Model/PositionTrackingCode.md)
- [PositionTrackingCodeType](docs/Model/PositionTrackingCodeType.md)
- [PpeType](docs/Model/PpeType.md)
- [Prepayment](docs/Model/Prepayment.md)
- [PrepaymentReturn](docs/Model/PrepaymentReturn.md)
- [PrepaymentReturnList](docs/Model/PrepaymentReturnList.md)
- [PrepaymentReturnPosition](docs/Model/PrepaymentReturnPosition.md)
- [PrepaymentReturnPositionList](docs/Model/PrepaymentReturnPositionList.md)
- [Price](docs/Model/Price.md)
- [PriceType](docs/Model/PriceType.md)
- [PrintFormat](docs/Model/PrintFormat.md)
- [PriorityOfdSend](docs/Model/PriorityOfdSend.md)
- [Processing](docs/Model/Processing.md)
- [ProcessingList](docs/Model/ProcessingList.md)
- [ProcessingMaterial](docs/Model/ProcessingMaterial.md)
- [ProcessingMaterialList](docs/Model/ProcessingMaterialList.md)
- [ProcessingOrder](docs/Model/ProcessingOrder.md)
- [ProcessingOrderList](docs/Model/ProcessingOrderList.md)
- [ProcessingOrderPosition](docs/Model/ProcessingOrderPosition.md)
- [ProcessingOrderPositionList](docs/Model/ProcessingOrderPositionList.md)
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
- [ProcessingProduct](docs/Model/ProcessingProduct.md)
- [ProcessingProductList](docs/Model/ProcessingProductList.md)
- [ProcessingStage](docs/Model/ProcessingStage.md)
- [ProcessingStageList](docs/Model/ProcessingStageList.md)
- [Product](docs/Model/Product.md)
- [ProductAlcoholic](docs/Model/ProductAlcoholic.md)
- [ProductFolder](docs/Model/ProductFolder.md)
- [ProductFolderList](docs/Model/ProductFolderList.md)
- [ProductList](docs/Model/ProductList.md)
- [ProductMarker](docs/Model/ProductMarker.md)
- [ProductionTask](docs/Model/ProductionTask.md)
- [Project](docs/Model/Project.md)
- [ProjectList](docs/Model/ProjectList.md)
- [Publication](docs/Model/Publication.md)
- [PublicationList](docs/Model/PublicationList.md)
- [PurchaseOrder](docs/Model/PurchaseOrder.md)
- [PurchaseOrderList](docs/Model/PurchaseOrderList.md)
- [PurchaseOrderPosition](docs/Model/PurchaseOrderPosition.md)
- [PurchaseOrderPositionList](docs/Model/PurchaseOrderPositionList.md)
- [PurchaseOrderRate](docs/Model/PurchaseOrderRate.md)
- [PurchaseReturn](docs/Model/PurchaseReturn.md)
- [PurchaseReturnList](docs/Model/PurchaseReturnList.md)
- [PurchaseReturnPosition](docs/Model/PurchaseReturnPosition.md)
- [PurchaseReturnPositionList](docs/Model/PurchaseReturnPositionList.md)
- [RateUpdateType](docs/Model/RateUpdateType.md)
- [Region](docs/Model/Region.md)
- [RegionList](docs/Model/RegionList.md)
- [ReportDashboard](docs/Model/ReportDashboard.md)
- [ReportDashboardMoney](docs/Model/ReportDashboardMoney.md)
- [ReportDashboardPeriodMetrics](docs/Model/ReportDashboardPeriodMetrics.md)
- [ReportOrdersPlotSeriesList](docs/Model/ReportOrdersPlotSeriesList.md)
- [ReportPlotSeries](docs/Model/ReportPlotSeries.md)
- [ReportSalesPlotSeriesList](docs/Model/ReportSalesPlotSeriesList.md)
- [RetailDemand](docs/Model/RetailDemand.md)
- [RetailDemandCheque](docs/Model/RetailDemandCheque.md)
- [RetailDemandGiftCard](docs/Model/RetailDemandGiftCard.md)
- [RetailDemandList](docs/Model/RetailDemandList.md)
- [RetailDemandPosition](docs/Model/RetailDemandPosition.md)
- [RetailDemandPositionList](docs/Model/RetailDemandPositionList.md)
- [RetailDrawerCashIn](docs/Model/RetailDrawerCashIn.md)
- [RetailDrawerCashInList](docs/Model/RetailDrawerCashInList.md)
- [RetailDrawerCashOut](docs/Model/RetailDrawerCashOut.md)
- [RetailDrawerCashOutList](docs/Model/RetailDrawerCashOutList.md)
- [RetailSalesReturn](docs/Model/RetailSalesReturn.md)
- [RetailSalesReturnList](docs/Model/RetailSalesReturnList.md)
- [RetailSalesReturnPosition](docs/Model/RetailSalesReturnPosition.md)
- [RetailSalesReturnPositionList](docs/Model/RetailSalesReturnPositionList.md)
- [RetailShift](docs/Model/RetailShift.md)
- [RetailShiftCheque](docs/Model/RetailShiftCheque.md)
- [RetailShiftChequeEnd](docs/Model/RetailShiftChequeEnd.md)
- [RetailShiftChequeStart](docs/Model/RetailShiftChequeStart.md)
- [RetailShiftList](docs/Model/RetailShiftList.md)
- [RetailShiftOperation](docs/Model/RetailShiftOperation.md)
- [RetailShiftOperationPrepayment](docs/Model/RetailShiftOperationPrepayment.md)
- [RetailShiftOperationPrepaymentReturn](docs/Model/RetailShiftOperationPrepaymentReturn.md)
- [RetailShiftOperationRetailDemand](docs/Model/RetailShiftOperationRetailDemand.md)
- [RetailShiftOperationRetailDrawerCashIn](docs/Model/RetailShiftOperationRetailDrawerCashIn.md)
- [RetailShiftOperationRetailDrawerCashOut](docs/Model/RetailShiftOperationRetailDrawerCashOut.md)
- [RetailShiftOperationRetailSalesReturn](docs/Model/RetailShiftOperationRetailSalesReturn.md)
- [RetailShiftPaymentOperation](docs/Model/RetailShiftPaymentOperation.md)
- [RetailShiftPaymentOperationCashIn](docs/Model/RetailShiftPaymentOperationCashIn.md)
- [RetailShiftPaymentOperationPaymentIn](docs/Model/RetailShiftPaymentOperationPaymentIn.md)
- [RetailShiftPaymentsInner](docs/Model/RetailShiftPaymentsInner.md)
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
- [RetailStoreUpsert](docs/Model/RetailStoreUpsert.md)
- [RetireOrderByDemandNotificationCompleted](docs/Model/RetireOrderByDemandNotificationCompleted.md)
- [RewardType](docs/Model/RewardType.md)
- [SalePlatform](docs/Model/SalePlatform.md)
- [SalePlatformGroup](docs/Model/SalePlatformGroup.md)
- [SalePlatformList](docs/Model/SalePlatformList.md)
- [SalePrice](docs/Model/SalePrice.md)
- [SalesChannel](docs/Model/SalesChannel.md)
- [SalesChannelList](docs/Model/SalesChannelList.md)
- [SalesChannelType](docs/Model/SalesChannelType.md)
- [SalesManagerChatMessage](docs/Model/SalesManagerChatMessage.md)
- [SalesReturn](docs/Model/SalesReturn.md)
- [SalesReturnList](docs/Model/SalesReturnList.md)
- [SalesReturnPaymentsInner](docs/Model/SalesReturnPaymentsInner.md)
- [SalesReturnPosition](docs/Model/SalesReturnPosition.md)
- [SalesReturnPositionList](docs/Model/SalesReturnPositionList.md)
- [ScriptPermissionValue](docs/Model/ScriptPermissionValue.md)
- [ScriptPermissions](docs/Model/ScriptPermissions.md)
- [ScriptTemplatePermissions](docs/Model/ScriptTemplatePermissions.md)
- [Service](docs/Model/Service.md)
- [ServiceList](docs/Model/ServiceList.md)
- [Sex](docs/Model/Sex.md)
- [SpecialPriceDiscount](docs/Model/SpecialPriceDiscount.md)
- [SpecialPriceDiscountSpecialPrice](docs/Model/SpecialPriceDiscountSpecialPrice.md)
- [State](docs/Model/State.md)
- [StateRowResult](docs/Model/StateRowResult.md)
- [StateType](docs/Model/StateType.md)
- [StockAll](docs/Model/StockAll.md)
- [StockAllList](docs/Model/StockAllList.md)
- [StockByOperation](docs/Model/StockByOperation.md)
- [StockByOperationList](docs/Model/StockByOperationList.md)
- [StockByOperationPosition](docs/Model/StockByOperationPosition.md)
- [StockByStore](docs/Model/StockByStore.md)
- [StockByStoreItem](docs/Model/StockByStoreItem.md)
- [StockByStoreList](docs/Model/StockByStoreList.md)
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
- [SupplyList](docs/Model/SupplyList.md)
- [SupplyPaymentsInner](docs/Model/SupplyPaymentsInner.md)
- [SupplyPosition](docs/Model/SupplyPosition.md)
- [SupplyPositionList](docs/Model/SupplyPositionList.md)
- [SupplyReturnsInner](docs/Model/SupplyReturnsInner.md)
- [Task](docs/Model/Task.md)
- [TaskList](docs/Model/TaskList.md)
- [TaskNote](docs/Model/TaskNote.md)
- [TaskNoteList](docs/Model/TaskNoteList.md)
- [TaskNotes](docs/Model/TaskNotes.md)
- [TaxRate](docs/Model/TaxRate.md)
- [TaxRateList](docs/Model/TaxRateList.md)
- [TaxSystem](docs/Model/TaxSystem.md)
- [TemplateComposition](docs/Model/TemplateComposition.md)
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
