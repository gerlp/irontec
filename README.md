# irontec

prueba tecnica de irontec: Una instalación básica Drupal que sirve mediante una API REST entidades "coche".

## Getting Started

Clonar o descargar el repositorio en la carpeta root del servidor local. 


### Installing

Cargar el archivo del directorio BBDD/ en la base de datos del servidor y establecer en el archivo testirontec/sites/default/settings.php los datos de acceso a la base de datos. 

```
$databases['default']['default'] = array (
  'database' => 'irontec',
  'username' => 'root',
  'password' => '',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);
```

## Comprobar la instalación

En un navegador abrir la url http://localhost/irontec/testirontec/coches y aparecerán listados todos los coches que están dados de alta en la Base de datos. 


### Cliente / Servicio API REST

El cliente Javascript solicitado ha sido desarrollado con jQuery. 

En un navegador abrir http://localhost/irontec/index.html
Cada vez que se realice una consulta, una petición ajax será realizada a la instalación Drupal. 

## Authors

* **Germán López** 

