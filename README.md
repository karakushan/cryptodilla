#HyperTraid 

#Общая концепция и архитектура

Сайт содержит три области пользователей и три точки входа:

* "/" - страница (ленидинг ) на которую попадают все незарегистрированные и незалогиненные пользователи
* "/admin" - админпанель, доступ к которой имеют только администраторы
* "/terminal" - торговый терминал, доступ к которому есть у трейдеров

## Фреймворки и готовые решения

### Backend 
[Laravel 8+](https://laravel.com/docs/8.x/)

### Frontend и UI фреймворки
Фронтент простроен с помощью [Vue 2](https://ru.vuejs.org/v2/guide/)

## Используемые API
[Binance](https://binance-docs.github.io/apidocs/spot/en/#change-log),
[Kraken](https://docs.kraken.com/rest/#section/General-Usage),
[Bittrex](https://bittrex.github.io/api/v3),
[Poloniex](https://docs.poloniex.com/#introduction),
[Bitfinex](https://docs.bitfinex.com/docs/introduction),
[HitBTC](https://api.hitbtc.com/#about-api) 
  
## Безопасность

### Права пользователей

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

### Команды которые будут полезны разработчикам
-- PHPDoc generation for Laravel Facades

```php artisan ide-helper:generate```

-- PHPDocs for models

```php artisan ide-helper:models```

-- PhpStorm Meta file

```php artisan ide-helper:meta``` 




