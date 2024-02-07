<p align="center"><a href="https://laravel.com" target="_blank"><img src="./public/img/PMJLogoFondo.png" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Concesionario PMJ

Este proyecto representa un concesionario, con vista de administrador y usuario, permite pedir citas para ver un vehiculo y gestionar marcas, coches y citas, para el administrador.

## Iniciando el Proyecto

Sigue estos pasos para iniciar el proyecto en tu máquina local.

### Prerrequisitos

Asegúrate de tener instalados los siguientes programas:

- [PHP](https://www.php.net/downloads)
- [Composer](https://getcomposer.org/download/)
- [Node.js](https://nodejs.org/en/download/)
- [npm](https://www.npmjs.com/get-npm)
- [Git](https://git-scm.com/downloads)

### Pasos de Inicio

1. Clona este repositorio en tu máquina local:

    ```bash
    git clone https://github.com/pablovacasgarcia/ProyectoLaravel.git
    ```

2. Navega hasta el directorio del proyecto:

    ```bash
    cd ProyectoLaravel
    ```

3. Instala las dependencias PHP a través de Composer:

    ```bash
    composer install
    ```

4. Instala las dependencias de JavaScript a través de npm:

    ```bash
    npm install
    ```

5. Copia el archivo de configuración de entorno y configura tu base de datos:

    ```bash
    cp .env.example .env
    ```

6. Genera una nueva clave de aplicación:

    ```bash
    php artisan key:generate
    ```

7. Ejecuta las migraciones de la base de datos para crear las tablas necesarias:

    ```bash
    php artisan migrate
    ```

8. Inicia el servidor de desarrollo:

    ```bash
    php artisan serve
    ```

9. Para cargar JS y estilos:

    ```bash
    npm run dev
    ```

10. Visita `http://localhost` con la ip que genere artisan serve en tu navegador para ver la aplicación en funcionamiento.

## Contribuyentes

- [@pablovacasgarcia](https://github.com/pablovacasgarcia)
- [@MiguelHurtadoDevelop](https://github.com/MiguelHurtadoDevelop)
- [@jorgeherrero00](https://github.com/jorgeherrero00)

