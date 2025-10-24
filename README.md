<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Proyecto Laravel - Módulo de Tareas

Aplicación Laravel sencilla que permite crear, editar y eliminar tareas.  
Usa MySQL (puerto 3307) y migraciones automáticas.

## Requisitos
- PHP 8.1+
- Composer
- MySQL en puerto 3307
- Laravel 10+

## Instalación
```bash
git clone https://github.com/SebastianVega22/pruebalaravel.git
cd pruebalaravel
composer install
cp .env
php artisan key:generate
php artisan migrate
php artisan serve


Luego visita http://127.0.0.1:8000/tareas
