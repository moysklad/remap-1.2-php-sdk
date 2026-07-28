# # ProcessingPlan

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta** | [**\OpenAPI\Client\Model\Meta**](Meta.md) |  | [optional]
**id** | **string** | ID Техкарты | [optional] [readonly]
**account_id** | **string** | ID учетной записи | [optional] [readonly]
**archived** | **bool** | Добавлена ли Техкарта в архив | [optional]
**code** | **string** | Код Техкарты | [optional]
**description** | **string** | Описание Техкарт | [optional]
**cost** | **float** | Стоимость производства | [optional]
**cost_distribution_type** | **string** | Тип распределения себестоимости. Возможные значения описаны в CostDistributionType | [optional] [readonly]
**external_code** | **string** | Внешний код Техкарты | [optional]
**group** | [**\OpenAPI\Client\Model\Group**](Group.md) |  | [optional]
**name** | **string** | Наименование Техкарты | [optional]
**owner** | [**\OpenAPI\Client\Model\Employee**](Employee.md) | Владелец (Сотрудник) | [optional]
**parent** | [**\OpenAPI\Client\Model\ProcessingPlanFolder**](ProcessingPlanFolder.md) |  | [optional]
**path_name** | **string** | Наименование группы, в которую входит Техкарта | [optional] [readonly]
**processing_process** | [**\OpenAPI\Client\Model\ProcessingProcess**](ProcessingProcess.md) |  | [optional]
**shared** | **bool** | Общий доступ | [optional]
**updated** | **string** | Момент последнего обновления Техкарты | [optional] [readonly]
**stages** | [**\OpenAPI\Client\Model\ProcessingPlanStageList**](ProcessingPlanStageList.md) | Коллекция метаданных этапов Техкарты | [optional]
**materials** | [**\OpenAPI\Client\Model\ProcessingPlanMaterialList**](ProcessingPlanMaterialList.md) | Коллекция метаданных материалов Техкарты | [optional]
**products** | [**\OpenAPI\Client\Model\ProcessingPlanProductList**](ProcessingPlanProductList.md) | Коллекция метаданных готовых продуктов Техкарты | [optional]
**attributes** | [**\OpenAPI\Client\Model\AttributeAbstract[]**](AttributeAbstract.md) | Коллекция метаданных доп. полей | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
