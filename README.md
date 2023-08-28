# Prueba Técnica

Esta es una prueba técnica que incluye la creación de una aplicación web en Laravel para gestionar información de personajes de la serie "Rick y Morty". La aplicación consulta un API remoto y almacena los datos en una base de datos SQLite local. Fué realizado en Laravel PHP

## Instrucciones para la Ejecución

A continuación, se detallan las instrucciones para ejecutar esta prueba técnica en tu entorno local:

### 1. Clonar el Repositorio

Clona este repositorio en tu máquina local utilizando el siguiente comando:

git clone https://github.com/cabandroid/dataTrafficTest.git

### 2. Ejecuta las siguientes migraciones que son necesarias ya que se tuvieron que crear para almacenar nuestros personajes

 php artisan migrate --path=database/migrations/2023_08_28_030733_create_characters_table.php
 php artisan migrate --path=database/migrations/2023_08_28_031719_add_timestamps_to_characters_table.php

 ### 3. Instala las dependencias utilizadas

cd dataTrafficPrueba
composer install

### 4. Configura el archivo .env debe ser la ruta local ya que para el crud fué necesario almacenar la .bd en /database

DB_CONNECTION=sqlite
DB_DATABASE=C:\xampp\htdocs\xampp\dataTrafficPrueba\database\rickandmorty_v1.db

###  5. Inicia el servidor
php artisan serve
La aplicación estará disponible en http://localhost:8000.

### 6. Complicaciones
    Durante el desarrollo de esta prueba técnica, se enfrentaron las siguientes complicaciones:

    Acceso a un API Externo: La aplicación consulta un API remoto para obtener datos de la serie. Esto requiere el uso de solicitudes HTTP para recuperar y almacenar datos en la base de datos local.

    Gestión de SQLite: Se utiliza una base de datos SQLite local para almacenar datos. Configurar correctamente la base de datos y ejecutar las migraciones fue un desafío.

    Rutas y Controladores: Configurar las rutas y controladores en Laravel para realizar operaciones CRUD en las entidades (personajes, ubicaciones, episodios) fue una parte fundamental del desarrollo.

    Vistas y Estilos: Crear vistas atractivas y aplicar estilos adecuados para la interfaz de usuario fue un aspecto importante para una experiencia de usuario agradable.


```bash
