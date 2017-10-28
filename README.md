# dakmarkfoods

1. Config .env file
```
cp .env.example .env
php artisan key:generate
composer dump-autoload
```
2. Resore package
```
composer install
```
3. Create empty database first then
```
php artisan migrate 
php artisan db:seed
php artisan migrate --seed
php artisan migrate:refresh --seed
```

3. Run
```
php artisan serve --port=2017
```
