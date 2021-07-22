<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

##### Laravel 6.4 + Excel : import & export

requisitos:

Ref: https://laravel-excel.com/

````$xslt
composer require maatwebsite/excel

config/app.php
----------------
    'providers' => [
    ....
	Maatwebsite\Excel\ExcelServiceProvider::class,
    ],

    'aliases' => [
	....
	'Excel' => Maatwebsite\Excel\Facades\Excel::class,
    ],
----------------
````

Lista básica:
![img](public/img/laravel_excel_import_export.png)
