# Uso de composer
Deberas de descargar composer para hacer uso de las ventjas del autoload.
Puedes usar la maquin virtual la cual ya provee composer instalado
## Agregar phpunit
```
$ composer require --dev phpunit/phpunit ^4
$ composer update 
```
## Correr prueba
```
./vendor/bin/phpunit --bootstrap vendor/autoload.php tests/EmailTest
```
## Que es el bootstrap
El archivo boostrap es aquella herramienta o pedazo de código que nos ayuda a cargar
todas las classes que necesitamos, en este caso dentro de la carpeta vendor existe
un autoloader que esta basado en los estandares PSR-1, para que no usemos como en el
ejercicio anterior un require_once de los archivos.

Existen otros tipos de bootrapFiles
