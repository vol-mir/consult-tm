# Vicar project

### Quick Start
```shell
$ composer install
$ composer install --verbose --prefer-dist --no-progress --no-interaction --no-dev --optimize-autoloader
$ cp .env.example .env
$ php artisan key:generate
$ php artisan migrate:refresh --seed
$ composer ft
$ npm install
```

### Generate Site Map
```shell
$ php artisan app:generate-sitemap
```

### Add storage link
```shell
$ php artisan storage:link
```
