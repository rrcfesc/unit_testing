# Uso de PhpUnit4.x
Para descargar la phpunit4 que ya no esta soportada, pero es común para versiones
de PHP 5.1,5.2,5.3, 5.4 5.5,5.6
```
$ wget -O phpunit https://phar.phpunit.de/phpunit-4.phar
$ chmod +x phpunit
$ ./phpunit --version
$ ./phpunit --bootstrap index.php  classTest
```
## Empezar a testear
Solo se puede hacer test con classes, no se puede testear las funciones

        - Todos las Clases deberán de Terminar en Test ejemplo RealTestCaseTEST.php
        - Tambien todos los metodos deberán de empezar con la palabra test

### Assersiones
Que es un assersion? es la validación de un resultado esperado, ejemplo tu sabes
que el sistema que tu vas a programar tiene la entrada de 2 enteros, y realiza por ejemplo
la suma de los numero y la division entre 7, la assersion es para verificar que si
alguien no seamos nosotros, otro desarrollador, hace un cambio, no haya un defecto

```
$ ./phpunit  RealTestCaseTest
```
