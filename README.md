#HyperTraid 

#Общая концепция и архитектура

Сайт содержит три области пользователей и три точки входа:

* "/" - страница (ленидинг ) на которую попадают все незарегистрированные и незалогиненные пользователи
* "/admin" - админпанель, доступ к которой имеют только администраторы
* "/terminal" - торговый терминал, доступ к которому есть у трейдеров

## Фреймворки и готовые решения

### Backend 
[Laravel 8+](https://laravel.com/docs/8.x/)

### Frontend UI фреймворки
Фронтент простроен с помощью [Vue 2](https://ru.vuejs.org/v2/guide/)

## Биржи и торговые площадки
[Binance](https://binance-docs.github.io/apidocs/spot/en/#change-log)

https://academy.binance.com/en/articles/binance-api-series-pt-1-spot-trading-with-postman
  

## Безопасность

### Права поользователей

Для назначения прав пользователям используется готовое решение [Laravel-permission](https://spatie.be/docs/laravel-permission/v4/introduction).

**Права пользователей**
* "manage admin" - пользователь имеет все права админа, т.е. может проводить все действия в админке сайта
* "manage terminal" - пользователь имеет все права для управления терминалом, может проводить торговые операции

**Роли**
* trader - Трейдер
* admin - Админ

**Тестовые пользователи**

Админка:
https://ex.profglobal.top/admin
admin@ex.profglobal.top
hHM7MtCSXfFv552

Терминал:
https://ex.profglobal.top/terminal
admin@ex.profglobal.top
hHM7MtCSXfFv552




