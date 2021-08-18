# Laravel-Clase3Ej2
<<<<<<< HEAD
## Ejemplo 2 del Tutorial de Laravel Framework Clase 3

  * Ejemplo CRUD básico

## Como instalar y utilizar este ejemplo

1. Instalar paquetes o dependencias, desde la terminal de VS Code o del OS estando en la carpeta del proyecto tipear
```bash
commposer install
``` 
```bash
composer update
```
```bash
composer fund
 ```

2. Realizar una copia del archivo .env.example
```bash
cp .env.example .env
```

3. Generar APP_KEY que es una cadena de caracteres generada aleatoriamente por Laravel que utiliza para todas las cookies cifradas, como las cookies de sesión. Para generar la APP_KEY del proyecto ejecutar el siguiente comando
```bash
php artisan key:generate
```

4. Deberá crear en su motor de base de datos la BD llamada **ejcrud** y ejecutar el servicio.

5. Para crear la tabla de migraciones en la BD se deberá ejecutar desde la Terminal de VS Code o del OS estando en la carpeta del proyecto
```bash
php artisan migrate:install
```

6. Para lanzar las migraciones de este ejemplo e impacten en la BD se deberá ejecutar desde la Terminal de VS Code o del OS estando en la carpeta del proyecto
```bash
php artisan migrate
```

## Apunte Tutorial de Laravel Framework Clase 3
[Laravel-Clase3](https://www.profmatiasgarcia.com.ar/uploads/tutoriales/Laravel-Clase3.pdf)

## Licencia
[GPLv3](https://www.gnu.org/licenses/gpl-3.0.en.html)
=======
<p>Ejemplo 2 del Tutorial de Laravel Framework <b>Clase 3</b> </p> 
<ul>
  <li> Ejemplo CRUD básico</li>
</ul>
<br>
<p> <b> Como instalar y utilizar este ejemplo </b></p>
<ol>
    <li>Instalar paquetes o dependencias, desde la terminal de VS Code o del OS estando en la carpeta del proyecto tipear </li>
    <ul type="square">
        <li>composer install</li>
        <li>composer update</li>
        <li>composer fund</li>
    </ul>
    <li>Realizar una copia del archivo .env.example</li>
    <ul type="square">
        <li>cp .env.example .env</li>
    </ul>
        <li>Generar APP_KEY que es una cadena de caracteres generada aleatoriamente por Laravel que utiliza para todas las cookies cifradas, como las cookies de sesión. Para generar la APP_KEY del proyecto ejecutar el siguiente comando </li>
    <ul type="square">
        <li>php artisan key:generate</li>
    </ul>
    <li>Deberá crear una BD llamada ejcrud y ejecutar el servicio del motor de BD</li>
    <li> Para crear la tabla de migraciones en la BD se deberá ejecutar desde la Terminal de VS Code o del OS estando en la carpeta del proyecto</li>
    <ul type="square">
        <li>php artisan migrate:install</li>
    </ul>
    <li> Para lanzar las migraciones de este ejemplo e impacten en la BD se deberá ejecutar desde la Terminal de VS Code o del OS estando en la carpeta del proyecto</li>
    <ul type="square">
        <li>php artisan migrate</li>
    </ul>
</ol>
>>>>>>> 66adc625cec75ae276ee36f9ee51ebfc175bca22
