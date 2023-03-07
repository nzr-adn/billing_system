## Requirement
- Laravel Version : 8 
- Database : PostgreSQL

## Instalation
- composer install
- php artisan migrate:refresh --seed
- php artisan serve

## Command
php artisan make:model Flight --migration
php artisan make:migration create_users_table --create=users
php artisan make:seeder UserSeeder
composer dump-autoload
php artisan make:request ProductTypes/StoreProductTypeRequest
