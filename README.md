# Brief information
This is the project for class and sequence diagram demonstration. Guideline for installation as follow.
This project is written using PHP and Laravel Framework


# Installation
To run application, you need to run this in order

1. XAMPP (Windows): Use PHP version 8.2. You download from
https://www.apachefriends.org/download.html

2. MAMP (MacOS): Use latest version from https://www.mamp.info/en/mamp/mac/

3. Composer: Download latest version of composer here
https://getcomposer.org/ and install to your machine

# Usage
1. After downloading this application to your machine. At project folder, where has `app`, `bootstrap`, `config` folders, run 
`composer install` to install necessary package

2. Copy file .env.example to .env, and modify from line 11 to line 16. Line 14 refers to DATABASE_NAME in phpmyadmin, you should use
`test_laravel` as in file. DB_USERNAME to be `root` and DB_PASSWORD='' if using XAMPP. If using MAMP, then use `root` as password

3. Run `php artisan key:generate`

4. Import data file (test_laravel.sql) to your database of XAMPP. Go to `localhost/phpmyadmin` and
perform as in the guide: https://www.youtube.com/watch?v=jW5lrS6EUPM

5. Run `php artisan serve` in Powershell / Terminal / CMD / Gitbash

# Flow of code
1. Application trigger to routes/web.php
2. If in the list of url matches, take the controller in the array (1st position) and the action (2nd position) accordingly
3. Find controller and action(method) in folder Http/Controllers for controller, and method for action.
4. Controller will call model, here is `Book` to exchange information with database, and model return controllers data for result back.
5. Controller will pass to view, in the `return view()` method, along with data in the `array([])` format.
6. In case there is a redirect, then instead of `return view()`, it returns `return redirect(to_url)` to perform redirection.

# Extend the code
You can create new controller, make new model and create new view similar to 
BookController by copying BookController.php and modify as needed. For validation, seek here: https://www.youtube.com/watch?v=WbGbKuct6lI.
