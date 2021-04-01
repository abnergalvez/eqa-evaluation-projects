<p align="center"><a href="https://eqa.es" target="_blank">
    <img src="https://github.com/abnergalvez/eqa-evaluation-projects/blob/develop/documentation/images/Logo%20EQA.png" width="">
    </a>
</p>

## Sobre el Proyecto

Esta plataforma es desarrollada para llevar el control y gestión del trabajo de EQA IDI, donde están sus procesos de evaluación de proyectos e interacciones con expertos, donde entre otras cosas servirá como base de datos de expertos y su respectiva mantencion, como así también en el registro de convocatorias, sus proyectos y sus respectivas evaluaciones. También se registrara el proceso de selección de expertos para evaluar y el seguimiento respectivo (propuestas, respuestas, correcciones, etc). Esto sera de gran utilidad ya que a futuro podrán automatizarse procesos como el envío de correos, notificaciones, etc...y ya no sera necesario la utilización de planillas de calculo para llevar el control general del proceso.


## Tecnologias 

La plataforma esta desarrollada en base de PHP con el Framework <a href="https://laravel.com/" target="_blank">Laravel 8</a> , con incorporacion de 
<a href="https://jetstream.laravel.com" target="_blank">Jetstream</a> configurado con <a href="https://laravel-livewire.com/" target="_blank">Livewire</a> y <a href="https://tailwindcss.com" target="_blank">Tailwind</a>


## Estado  

01-04-2021 - Iniciando el desarrollo


## Instalacion (desarrollo)

Para la instalacion es necesario tener instalado lo siguiente:
* composer
* nodejs (utilizacion npm)
* servidor apache/nginx
* mysql (base de datos)
* php 7.3+
* git

Para iniciar la instalacion se debe bajar el contenido del repositorio o clonar en un directorio especifico
```
$ git clone https://github.com/abnergalvez/eqa-evaluation-projects.git
```
Luego es necesario entrar al directorio 
```
$ cd /eqa-evaluation-projects
```
y ejecutar distintos comandos de configuracion
```
$ composer install
$ npm install
$ npm run dev

```
Luego configurar la base de datos:

* crear base de datos en tu cliente preferido de mysql (le llamaremos "bdeqa")

Luego configurar el acceso a la base de datos del framework laravel esto haciendo lo siguiente:

* dentro del directorio del repositorio (eqa-evaluation-projects) copiar el archivo **.env.example** a **.env**
```
$ cp .env.example .env
```

* y luego dentro del archivo agregar cambiar el valor de las siguientes variables:
```
DB_CONNECTION=mysql

#ip de tu host base de datos en este caso 127.0.0.1 es el localhost
DB_HOST=127.0.0.1

#puerto de tu base de datos
DB_PORT=3306 

#nombre de tu base de datos
DB_DATABASE=bdeqa 

#nombre de usuario de tu base de datos
DB_USERNAME=db_username  

#contraseña de usuario de tu base de datos
DB_PASSWORD=password   
```
* Ya acabando de configurar lo anterior deben ejecutarse los siguientes comandos:
```
$ php artisan key:generate
$ php artisan migrate --seed
```

* para levantar el servidor y visualizar la aplicacion lo siguiente:

```
$ php artisan serve
```
que inicia la aplicacion en la siguiente URL : http://127.0.0.1:8000

## Documentacion (en progreso)

* https://github.com/abnergalvez/eqa-evaluation-projects/wiki

## Licencia Laravel

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
