# # Subscription

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**role** | **string** | Роль авторизованного пользователя (USER/ADMIN) | [optional] [readonly]
**tariff** | **string** | Действующий тариф Аккаунта. Известные значения описаны в SubscriptionTariff | [optional] [readonly]
**is_subscription_change_available** | **bool** | Доступность изменения подписки | [optional] [readonly]
**subscription_end_date** | **int** | Дата (в миллисекундах) окончания действия текущего тарифа, если тариф отличается от \&quot;Пробный\&quot; и \&quot;Бесплатный\&quot; | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
