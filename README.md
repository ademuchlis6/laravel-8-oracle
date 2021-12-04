# laravel-8-oracle
laravel 8 with oracle database connection

I use laravel 8, php 8, and oracle 11g <br>
this is just how to connect your laravel 8 to oracle

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

