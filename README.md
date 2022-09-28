# LCARS with Laravel

- LCARS Theme by https://www.thelcars.com/

##### Installation history:

```
laravel new lcars-laravel
php artisan sail:install

sail composer require laravel/breeze --dev
sail artisan breeze:install
sail artisan migrate

sail npm install
```

##### Modification history:

- Downloaded Classic and Red Template from https://www.thelcars.com/download.php
- resulting files:
    `resources/css/lcars/classic.css`
    `resources/css/lcars/red.css`
    `resources/js/lcars.js`
- added lcars to `vite.config.js`
- added logged-in user status and logout to top-left of lcars-template
- modified `routes/web.php` to group the routes