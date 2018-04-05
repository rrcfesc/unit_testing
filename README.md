# Tutorial
Tutorial de TDD con Phpunit

## Container
Deberás de compilar el container con el repositorio donde viene la maquina virtual en el branch de Php55
```
git clone git@github.com:rrcfesc/dockerFilesMagento2.git
```
Cambia el id de tu usuario del archivo DockerFile:
```
ENV CURRENT_USER_UID	"501"
```
Compila con el nombre y tag:
```
$docker build -t apachephp:5.5 .
```
Entra a la carpeta y corre:
```
$docker-compose up -d
```