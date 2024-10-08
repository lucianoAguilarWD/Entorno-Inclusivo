# Entorno Inclusivo - Sistema de Evaluación de Accesibilidad Universitaria

## Descripción

Entorno Inclusivo es una plataforma digital desarrollada con Laravel 11, Inertia y React, diseñada para mejorar la accesibilidad en entornos universitarios. El sistema permite a los evaluadores realizar diagnósticos sobre la accesibilidad de los distintos elementos arquitectónicos y generar informes detallados para planificar mejoras.

## Características Principales

-   Gestión de usuarios y roles
-   Evaluación de accesibilidad mediante cuestionarios
-   Generación automática de informes
-   Gestión y seguimiento de informes de accesibilidad

## Requisitos del Sistema

-   PHP 8.1+
-   Composer
-   Node.js y npm
-   MySQL
-   Git

## Instalación

1. Clonar el repositorio:

    ```
    git clone https://github.com/lucianoAguilarWD/Entorno-Inclusivo.git
    ```

### Dentro de la carpeta del proyecto abrir terminal y ejecutar los siguientes comandos

2. Instalar dependencias de PHP:

    ```
    composer install
    ```

3. Instalar dependencias de JavaScript:

    ```
    npm install
    ```

4. Copiar el archivo de configuración:

    ```
    cp .env.example .env
    ```

5. Generar la clave de la aplicación:

    ```
    php artisan key:generate
    ```

6. Configurar la base de datos en el archivo `.env`

7. Ejecutar las migraciones:

    ```
    php artisan migrate
    ```

8. Ejecutar el seeder de usuario:

    ```
    php artisan db:seed UserSeeder
    ```

9. Compilar los assets, idealmente tener una terminal para:

    ```
    npm run dev
    ```

10. Iniciar el servidor y abrir otra terminal para:
    ```
    php artisan serve
    ```
### De manera opcional le dejo un export de la base de datos en la raiz del proyecto
   entorno-inclusivo.sql
   
## Uso

Después de la instalación, puedes acceder al sistema a través del link que da artisan serve.

-   Puede probar los distintos roles usando las siguientes cuentas:
    -   luciano@gmail.com || pw: lucho123 || rol:evaluador/técnico
    -   samus@gmail.com || pw: samus123 || rol: administrador

## Licencia

Este proyecto está licenciado bajo la Licencia MIT - ver el archivo [LICENSE.md](LICENSE.md) para más detalles.
