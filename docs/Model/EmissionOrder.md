# # EmissionOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta** | [**\OpenAPI\Client\Model\Meta**](Meta.md) |  | [optional]
**id** | **string** | ID Заказа кодов маркировки | [optional] [readonly]
**account_id** | **string** | ID учетной записи | [optional] [readonly]
**created** | **string** | Момент создания Заказа кодов маркировки | [optional] [readonly]
**description** | **string** | Комментарий | [optional]
**document_state** | **string** | Состояние документов маркировки. Известные значения описаны в EmissionOrderDocumentState | [optional] [readonly]
**emission_type** | **string** | Способ ввода в оборот. Известные значения описаны в EmissionOrderEmissionType | [optional]
**external_code** | **string** | Внешний код Заказа кодов маркировки | [optional]
**group** | [**\OpenAPI\Client\Model\Group**](Group.md) |  | [optional]
**moment** | **string** | Дата документа | [optional]
**name** | **string** | Наименование Заказа кодов маркировки | [optional]
**organization** | [**\OpenAPI\Client\Model\Organization**](Organization.md) |  | [optional]
**owner** | [**\OpenAPI\Client\Model\Employee**](Employee.md) | Владелец (Сотрудник) | [optional]
**positions** | [**\OpenAPI\Client\Model\EmissionOrderPositionList**](EmissionOrderPositionList.md) |  | [optional]
**printed** | **bool** | Напечатан ли документ | [optional] [readonly]
**production_tasks** | [**\OpenAPI\Client\Model\ProductionTask[]**](ProductionTask.md) | Массив ссылок на связанные производственные задания | [optional]
**published** | **bool** | Опубликован ли документ | [optional] [readonly]
**shared** | **bool** | Общий доступ | [optional]
**state** | [**\OpenAPI\Client\Model\State**](State.md) | Метаданные статуса Заказа кодов маркировки | [optional]
**tracking_type** | **string** | Тип маркируемой продукции. Известные значения описаны в TrackingType | [optional]
**updated** | **string** | Момент последнего обновления | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
