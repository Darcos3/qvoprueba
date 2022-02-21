<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Acerca de la prueba

La prueba consistia en realizar los siguientes procesos:
    - Crear dos CRUD, uno para productos y otro para categorias
    - Relacionarlos para consultar producto y conocer categoria
    - Creacion o delimitacion de rutas por rol de usuario
        - El usuario administrador podia administrar categorias y productos
        - El usuario cliente solo podia ver los productos

## Inconvenientes con los cuales me tope en el desarrollo

- Con el tema de las relaciones, la relacion de categoria en un producto, declare la funcion dentro del modelo, sin embargo al llamar dicha funcion dentro de la plantilla blade, me traia todo la informacion y se mostraba mal.

- Me falto desarrollar el tema de los roles, intente con el middleware de auth cerrar algunas rutas, como por ejemplo las categorias.

La idea mia era usar el middleware guest para abrir la ruta de productos.index y con el middleware auth cerrar las demas rutas. No me dió resultado, sin embargo las deje comentada esas lineas.