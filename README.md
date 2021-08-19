# Envíos Kanguro Laravel Challenge

_Proyecto desarrollado en laravel para el proceso de reclutamiento_

## Comenzando 🚀

_Estas instrucciones te permitirán obtener una copia del proyecto en funcionamiento en tu máquina local para propósitos de desarrollo y pruebas._


### Instalación 🔧

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
_Abrimos nuestro archivo .env, para añadir los datos de conexión a la base de datos_

```
nano .env
```
_Cambiar la información del siguiente bloque, por información de la base de datos a utilizar_

```
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=laraveluser
DB_PASSWORD=your_laravel_db_password
```
_Estando dentro de el directorio del proyecto ejecutar el siguiente compando para la instalación/actualziación de dependencias con composer_

```
composer install
```
_Generar la llave del proyecto_

```
php artisan key:generate
```
_Limpiar cache de configuración_

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
_Una vez realizados todos los pasos anteriores, puedes iniciar la aplicación con el comando_

```
php artisan serve
```
_Para cambiar el status de los envíos es necesario ejecutar el siguiente comando en otra terminal mientras el proyecto este activo_

```
php artisan change:status
```

## Construido con 🛠️

* [Laravel](https://laravel.com/)
* [Bootstrap](https://getbootstrap.com/)
* [Datatables](https://datatables.net/)

## Autor ✒️

* **Cruz Eduardo López Sandoval 👹 ** -  [CruzLS](https://github.com/CruzLS)
