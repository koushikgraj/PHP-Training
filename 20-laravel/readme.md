## Some commands

### Composer commands to create a project
composer create-project --prefer-dist laravel/laravel laravel8crudapplication


### Artisan command to create a migration file
php artisan make:migration create_post_tbl --create=posts


### Artisan command to migrage the DB table
php artisan migrate


### Artisan command to create a controller & model
php artisan make:controller PostController --resource --model=Post


### Artisan command to create a server
php artisan serve
