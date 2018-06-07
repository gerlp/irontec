# irontec

prueba técnica para Irontec: Una instalación básica Drupal que sirve mediante API REST entidades "coche".

### Prerrequisitos

El proyecto ha sido desarrollado utilizando un entorno XAMPP en el sistema operativo Windows 10, cualquier otro entorno de desarrollo local es válido. 


## Getting Started

Clonar o descargar el repositorio en la carpeta web del servidor local (en XAMPP, htdocs).  
Si no se crea el directorio irontec/ al clonar el repositorio, crearlo manualmente y clonar el repositorio dentro de él.
Funcionaría igual sin este directorio, pero el resto de instrucciones de este readme.md dan por hecho su existencia y que el proyecto está en él. 


Cargar el archivo del directorio BBDD/ en la base de datos del servidor y establecer en el archivo testirontec/sites/default/settings.php el username y password de acceso a la base de datos. 

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

### Comprobar la instalación

En un navegador abrir la url http://localhost/irontec/testirontec/coches y se mostrará la instalación drupal listando los coches dados de alta en la base de datos.

## Cliente / Servicio API REST

El cliente Javascript solicitado ha sido desarrollado con jQuery. 

En un navegador abrir http://localhost/irontec/index.html y cada vez que se realice una consulta, se realizará una petición a la instalación Drupal por medio de .ajax. 
La instalación drupal devolverá el resultado de la consulta y se actualizará la interfaz. 
Es posible hacer consultas buscando todos los coches, coches por su id en base de datos o por su color. 

## Authors

* **Germán López** 

