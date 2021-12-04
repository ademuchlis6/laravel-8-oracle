# laravel-8-oracle
laravel 8 with oracle database connection

I use laravel 8, php 8, and oracle 11g, and flexstart(https://bootstrapmade.com/flexstart-bootstrap-startup-template/download/) <br>
this is just how to connect your laravel 8 to oracle
![1](https://user-images.githubusercontent.com/82435592/144710543-19ea085f-d633-4def-b207-f79e1009bfde.PNG)

first you need a php oci8 extention extension, I download here<br>
https://pecl.php.net/package/oci8/3.0.1/windows
open command extension in php.ini<br>
extension=php_oci8_11g.dll

run composer require yajra/laravel-oci8 in your project<br>

make sure in composer.json yajra already available<br>
in laravel go to config/app.php and add provider :
Yajra\Oci8\Oci8ServiceProvider::class

run : php artisan vendor:publish --tag=oracle

open .env and adjust to your oracle connection<br>
DB_CONNECTION=oracle<br>
DB_HOST=localhost<br>
DB_PORT=1521<br>
DB_DATABASE=ORCL<br>
DB_USERNAME=USERNAME<br>
DB_PASSWORD=PASSWORD

to test the connection no need to bother just run :<br>
php artisan migrate

and voila your table is created

![Capture](https://user-images.githubusercontent.com/82435592/144710485-47d8d5bf-e285-44ab-84fc-7e171a6c17ca.PNG)
