# Laravel PHP Framework 5

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Sistema de para el control de las tareas de los proyectos que necesite el usuario.

## Requirements

Php version 7.2
Laravel version 5

## How to use

<ul>
  <li>Clonar el repositorio con el comando $git clone https://github.com/ShinobiDev/TestDomina.git</li>
  <li>Ubicarse dentro de la carpeta del proyecto con el comando $cd TestDomina</li>
  <li>Ya hubicados dentro de la carpeta del proyecto TestDomina ejecutamos el comando $composer install</li>
  <li>En la raiz del proyecto se debe crear el archivo .env con los datos del archivo .env.xample</li>
  <li>Ejecutamos ahora el comando $php artisan key:generate</li>
  <li>Ejecutamos el comando $php artisan migrate</li>
  <li>Ejecutamos el comando $php artisan db:seed</li>
  <li>
    <p>Este comando nos creara el usuario para poder tener acceso a la aplicación en este caso: 
      <br><b>User:</b> stalindesarrollador@gmail.com  
      <br><b>Pass:</b> 80793167  
    </p>
  </li>
  <li>
    <p>Este usuario se puede cambiar ingresando al archivo del proyecto UsersTableSeeder.php que esta ubicado en la ruta database/seeds/UsersTableSeeder.php</p>
  </li>
  <li>Para levantar el proyecto abrimos una terminal desde la raiz y ejecutamos el comando $php artisan serve el sistema nos mostrara la ruta donde podemos ingresar. Ejemplo: Laravel development server started on http://localhost:8000/ </li>
  <li>Para este caso en el navegador colocamos la url http://localhost:8000/ </li>
</ul>

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
