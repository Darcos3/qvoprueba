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

La prueba la hice con laravel 8, la ayuda por terminal sigue siendo la misma, solo que ha cambiado un poco
antes habia probado con laravel 5, la ayuda para crear el auth, incluidos el controlador, rutas y vistas ya no se obtienen con make:auth sino ahora hubo que instalar por medio de composer el paquete de laravel/ui y ahi si poder crear el auth.

Otro problema con el que me tope, es con las rutas. Segun los fundamentos con laravel 5, uno podia crear dichas rutas con una linea similar a Productos::routes(); o en este caso tambien Categorias::routes(); y ahi se tomaba todas las rutas que se hayan asignado en el controlador, similar a como se presenta la línea 25 en el archivo de rutas para web. Pero en ningun momento creo que me funcionó. Haciendo uso del comando php artisan route:list se puede ver que las rutas si se han establecido pero no se las puede usar dentro de la plantilla, al intentar colocarla {{ route('categorias') }} o {{ route('/categorias') }} sale que la ruta no ha sido declarada, pero si la ruta se la intenta agregar en el campo para buscar por la url, ahi si mas o menos dejaba navegar. Dejé comentada la linea del action en la vista de backend/categorias/create como referencia.

El resto de los elementos si no los alcance a desarrollar.