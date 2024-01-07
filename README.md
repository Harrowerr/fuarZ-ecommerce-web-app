# fuarZ E-commerce Web Application

[![Windows](https://img.shields.io/badge/Windows-blue?logo=windows)](https://github.com/topics/windows)
[![PHP 8.3](https://img.shields.io/badge/PHP-8.3-blue?logo=php)](https://github.com/topics/php)
[![Laravel](https://img.shields.io/badge/Laravel%20Framework-9.0-blue?logo=laravel)](https://github.com/topics/laravel)


## About the Project 
<ul>
    <li>fuarZ is an MVC e-commerce web application built by using PHP, Laravel Framework, SQL and JavaScript for selling of the clothes (t-shirts, jeans etc.)</li>
    <li>Web application contains an admin panel that allows admin to control products, categories of the products and orders. This web application also allows users to order the products.</li>
    <li>The payment system built by using Stripe API. </li>
</ul>

## Installation

```php
// Step 1: Creating the Laravel project by using composer after instaling PHP and Composer successfully
composer create-project laravel/laravel EcommercePro

// Step 2: Running the web app in the local server
php artisan serve

// Step 3: Setting up the database connection in .env file

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ecommercepro
DB_USERNAME=root
DB_PASSWORD=

// Step 4: Installing the laravel jetstream package
composer require laravel/jetstream


// Step 5: Installing the laravel livewire package
php artisan jetstream:install livewire

//Step 6: Running the npm install and npm run dev commands
npm install

npm run dev

//Step 7: Changes in User table
 public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('usertype')->default(0);
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
        });
    }

//Step 8: Migration all the tables in the project
php artisan migrate

```

## Preview

https://github.com/Harrowerr/fuarZ-ecommerce-web-app/assets/106821964/641badbf-d1b3-45ff-809e-3a9a0b3565ca


## Development
- Language: **[PHP](https://github.com/dotnet/csharplang) 10.0**
- Framework: **[.Laravel](https://github.com/topics/laravel) Framework 9.0** 
- IDE: **[VSCode](https://github.com/microsoft)**

## License

The fuarZ MVC e-commerce web application is open-source software licensed under the [MIT license](License.md).
