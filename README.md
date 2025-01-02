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
