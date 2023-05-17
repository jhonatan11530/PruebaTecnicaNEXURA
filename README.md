## Prueba Tecnica NEXURA

en esta prueba tecnica encontrara el codigo fuente de la prueba tecnica basada en el lenguaje php usando el framework LARAVEL

- En este Framework se implementa migrador de base de datos 
- la configuracion de la base de datos se configura en la siguiente ruta config/database.php
- se deja una ruta GET donde se ejecutara la configuracion de forma automaticamente para no tener que realizar tantos comandos en POWER SHELL o CMD

# Datos de usuario y contraseña de base de datos MYSQL

- usuario : root
- contraseña : este campo esta totalmente vacio

# AL INICIAR LA APLICACION WEB FRAMEWORK LARAVEL

1. clone el codigo fuente

3. verifique en la base de datos MYSQL que exista la base de datos llamado "prueba_tecnica_dev"

2. abra visual studio code y abra la carpeta donde esta el proyecto y en la terminal de VSCODE ejecute el comando : composer install

3. luego de que aya terminado el composer de instalar todas las librerias ejecute en la terminal de VSCODE : php artisan serve

4. eso es todo dentro del proyecto laravel se dejo configurado el framework para que ejecute los migradores de tablas e insertes los datos igual como esta en la prueba tecnica

NO TIENE QUE COPIAR EL ARCHIVO .env.example YA QUE SE DEJO CONFIGURADO EL LARAVEL PARA QUE HAGA TODO EL PROCESO DE FORMA AUTOMATICA DE COPIAR EL ARCHIVO .ENV Y GENERAR LA CLAVE DEL ARCHIVO DE CONFIGURACION

PUEDE VALIDAR ESTE ARCHIVO DE CONFIGURACION EN LA RUTA app/Providers/AppServiceProvider.php linea 26

TAMBIEN PUEDE VALIDAR LA CONFIGURACIONDE LA BASE DE DATOS EN LA RUTA config/database.php linea 46 al 64

