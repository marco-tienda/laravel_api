# Laravel API

## Notas importantes
### Configuración respecto a la creación y migración de la DB
1. Crear un enlace simbólico.
Más informacion: https://laravel.com/docs/9.x/filesystem#the-public-disk
```
php artisan storage:link
```
2. Cambiar la configuración de almecenamiento en nuestras variables de entorno
```
FILESYSTEM_DISK=public
```
3. Existe un error en el proveedor de imágenes de la librería faker, por lo que hay que cambiarlo para una correcta función de los seeders en el proyectos
```
Ruta: vendor\fakerphp\faker\src\Faker\Provider\Image.php

/** Sustituir siguiente línea: */
public const BASE_URL = 'https://via.placeholder.com';

/** Linea que da correcto funcionamiento */
public const BASE_URL = 'https://dummyimage.com/';
```
