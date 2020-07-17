<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>


## Laravel Module Based Application System
You can develop your laravel application based on your module. In this system you can create seperate directory for every module, where every resurses files and folder(like model, view, controller, migrations, and any other classes) will be included in your custom generated folder or directory. Let's see the process step by step.

### In here I will create two module
- Account.
- Hrm.

Listen, my laravel application name is Laravel Moduler App, and the root directory is laravel-moduler-app, So create a directory "module" on the application root directory, like

<img src="root-directory.png" width="200" height="160x" style="align:left">

### Now create two module Account and Hrm, Follow the screenshot

<img src="modules.png" wiidth="200" height="160x" style="align:left">

### Create your necessary file and folders, like this

<img src="resources.png" wiidth="200" height="160x" style="align:left">


### Now open composer.json and make the changes,
add ```"Module\\": "module/",``` on autoload, like this

<img src="composer_json.png" wiidth="300" height="160x" style="align:left">

### Open config/view.php and add this two line on paths array, followed by screenshot
```php 
        base_path('module/Account/views'),
        base_path('module/Hrm/views'),
```
This code will help you to load your views from your module directory

<img src="view_php.png" wiidth="300" height="160x" style="align:left">


### Now run a comman ``` php artisan make:provider MigrationServiceProvider```
This command will create a new MigrationServiceProvider. After this command go to ```app/Providers/MigrationServiceProvider.php```
and add this 4 line of code into boot method 
```php 
$this->loadMigrationsFrom([
    base_path().DIRECTORY_SEPARATOR.'module'.DIRECTORY_SEPARATOR.'Account'.DIRECTORY_SEPARATOR.'migrations',
    base_path().DIRECTORY_SEPARATOR.'module'.DIRECTORY_SEPARATOR.'Hrm'.DIRECTORY_SEPARATOR.'migrations',
]);
```

<img src="migration_service_provider.png" wiidth="300" height="160x" style="align:left">

### Now open config/app.php
add ```App\Providers\MigrationServiceProvider::class,``` this line in `providers` array


<img src="config_app.png" wiidth="300" height="160x" style="align:left">
