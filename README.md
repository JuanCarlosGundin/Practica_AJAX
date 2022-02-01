# Practica_AJAX
Documentacion Laravel

Crear proyecto---
composer create-project laravel/laravel escuela 
--------------------------------------------------

Modelo vista controlador crear clase---
php artisan make:model Alumno ****-m(model)c(controler)r(resourcer)**** CONSTRUYE EL CONTROLLER 
-------------------------------------------------
Servidor
php artisan serve
---------------------------------
Correr la base de datos
php artisan migrate
//actualizar
php artisan migrate:refresh
//borrar
php artisan migrate:fresh

---------------------------------------------------------------
Seeder

php artisan make:seeder AuthorSeeder
php artisan make:seeder BooksSeeder
//lanza los seeders
php artisan migrate:fresh --seed

-------------------------------------------------------------
Subir un archivo

php artisan storage:link

---------------------------------------------------------
para consultar la base de datos necesito esta linea en controller
use Illuminate\Support\Facades\DB;

--------------------------------------------------------------
Cuando coges un proyecto de laravel ya hecho faltan ficheros, 
una vez que estas dentro del proyecto tienes que lanzar el comando

composer install

alomejor te pide el fichero .env (crealo vago de mierda)

despues te puede pedir el comando

php artisan key:generate 

//MAIL

php artisan :mail EnviarMensaje
