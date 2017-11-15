Artisan Factory Command
==

A small addition to add the use of `php artisan factory:create` to create an existing model and store it into your 
database.

This is in early development and all feedback and contributions are welcome!

Install
--
`composer require bretterer/artisan-factory`

Usage
--
`php artisan factory:create App\\User`

**Extended Usage**

`php artisan factory:create App\\User --iterations=3` This will create 3 new users.