# simpleapp

Setup On local Machine
=====

To run on your local machine you have to install apache2, PHP7 and sqlite.

Delete the local composer.lock file first and create on your own server by following method.

```
git clone <repo>
cd <repo>
composer install
```

Then setup Apache configuration file to point to public folder.

```xml
<VirtualHost *:80>
	<Directory "/var/www/html/simpleapp/public">
	  AllowOverride All
	</Directory>
</VirtualHost>
```

How It's working
======

The app is combination of laravel and angularjs1.

*. Laravel is handling all routes. which are decalred in [web.php](https://github.com/mabdullah353/simpleapp/blob/master/routes/web.php)

*. These routes are calling views, these views generate html document. Their is one common view [layout](https://github.com/mabdullah353/simpleapp/blob/master/resources/views/layout.blade.php) From which all views are extended.
This common view creates an angular js file by calling it's library from CDN.

*. Angular Directives are declared in single [app.js](https://github.com/mabdullah353/simpleapp/blob/master/public/js/app.js) file;
The structure of public folder is

```
public/js
+-- app.js
+-- templates/
+--+-- login.html   (HTML for customer-login directive)
+--+-- logout.html  (HTML for customer-logout directive)
+--+-- alert.html   (HTML for alerts messages directive)
```

Security
====

## XCSRF

All Endpoints are XCSRF protected. the way angular communicate with xscrf tokken is by utilizing meta tag. So Backend adjust this value and then angularjs set's it's value for all the forms.
- https://github.com/mabdullah353/simpleapp/blob/master/resources/views/layout.blade.php#L11
- https://github.com/mabdullah353/simpleapp/blob/master/public/js/app.js#L5

## Passwords

Hash values are stored against each passwords in database https://github.com/mabdullah353/simpleapp/blob/master/app/Http/Controllers/LoginController.php#L67 And before sotring any user it's validated against rules defined in it's model https://github.com/mabdullah353/simpleapp/blob/master/app/User.php#L47

Random Image
====

I have used this url https://api.adorable.io/avatars/285/ which generates random avatars based on random time.
So instead of storing images on local server i am using this service. And To generate this value for against each user i am using a default function in migration which will automatically fill the default value.
https://github.com/mabdullah353/simpleapp/blob/master/database/migrations/2017_08_07_171852_add_image_to_users.php#L18 this way after some times new images will appear in dashboard.

Migration
====

Database migrations are in this folder https://github.com/mabdullah353/simpleapp/tree/master/database/migrations

And to seed with dummy users then this file holds the user information https://github.com/mabdullah353/simpleapp/tree/master/database/seeds

```
php artisan migrate:refresh --seed
```
This command will refresh the migration and seed the data base with dummy users.

