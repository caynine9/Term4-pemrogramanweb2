<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Instructions

Usually after pushing files to GitHub there are huge files/sensitive informations (app tokens/keys) that were not included in the commit (.gitignore).
To ensure that you are able to run Laravel's webserver properly you need to do few things after cloning a Laravel project repos:

* **Issues with 500 Server Error:** 
This is usually caused by missing `.env` file. All you need to do is rename `.env.example` file to `.env`

* **Missing APP_KEY:**
All you need to do is generate a new key. Paste it in the `.env` file on the `APP_KEY=` section.

* **Failed to find file "/%dir%/vendor/autoload.php/":**
Copy existing `vendor` folder from another Laravel project to the project directory.

## Resources

* SB-Admin2 Theme by StartBootstrap https://startbootstrap.com/theme/sb-admin-2
* Blog Post Template by StartBootstrap https://startbootstrap.com/template/blog-post
* TinyMCE by Tiny https://www.tiny.cloud/tinymce/ | https://www.tiny.cloud/docs/tinymce/6/laravel-composer-install/

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
