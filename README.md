# Env铆os Kanguro Laravel Challenge

_Proyecto desarrollado en laravel para el proceso de reclutamiento_

## Comenzando 馃殌

_Estas instrucciones te permitir谩n obtener una copia del proyecto en funcionamiento en tu m谩quina local para prop贸sitos de desarrollo y pruebas._


### Instalaci贸n 馃敡

_Clonar el repositorio_


```
git clone https://github.com/CruzLS/retoKanguro.git
```

_Una vez clonado, ingresamos al directorio del proyecto_

```
cd retoKanguro
```
_Ejecutamos el siguiente comando para crear nuestro archivo .env_

```
cp .env.example .env
```
_Abrimos nuestro archivo .env, para a帽adir los datos de conexi贸n a la base de datos_

```
nano .env
```
_Cambiar la informaci贸n del siguiente bloque, por informaci贸n de la base de datos a utilizar_

```
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=laraveluser
DB_PASSWORD=your_laravel_db_password
```
_Estando dentro de el directorio del proyecto ejecutar el siguiente compando para la instalaci贸n/actualziaci贸n de dependencias con composer_

```
composer install
```
_Generar la llave del proyecto_

```
php artisan key:generate
```
_Limpiar cache de configuraci贸n_

```
php artisan config:cache
```
_Ejecutar las migraciones para crear las tablas de la base de datos_

```
php artisan migrate
```
_Ejecutar los siguiente comando para insertar datos en las tablas Estados, Paqueterias y Statuses_

```
php artisan db:seed --class=EstadosTableSeeder
php artisan db:seed --class=EnvioStatusTableSeeder
php artisan db:seed --class=PaqueteriaTableSeeder
```
_Una vez realizados todos los pasos anteriores, puedes iniciar la aplicaci贸n con el comando_

```
php artisan serve
```
_Para cambiar el status de los env铆os es necesario ejecutar el siguiente comando en otra terminal mientras el proyecto este activo_

```
php artisan change:status
```

## Construido con 馃洜锔?

* [Laravel](https://laravel.com/)
* [Bootstrap](https://getbootstrap.com/)
* [Datatables](https://datatables.net/)

## Autor 鉁掞笍

* **Cruz Eduardo L贸pez Sandoval 馃懝 ** -  [CruzLS](https://github.com/CruzLS)
