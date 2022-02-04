# My FAQ

## Description

This project is a test of speed for me

## Build with

### Server :

- [PHP v8.1.2](https://www.php.net/releases/index.php)

* [MariaDB v10.6.4 / MySQL 5.5.5](https://mariadb.com/kb/en/installing-mariadb-on-macos-using-homebrew/https://downloads.mysql.com/archives/installer/)
* **Server** : *for the server you can turn to the classics: [WAMP](https://www.wampserver.com/), [MAMP](https://www.mamp.info/en/downloads/), [XAMPP](https://www.apachefriends.org/fr/index.html) ...Or test the best of the swiss knives server: [Laragon](https://laragon.org/), my favorite ❤️ for Windows or [Valet](https://laravel.com/docs/8.x/valet) by Laravel my favorite ❤️ for mac OS*

### Framework & Libraries :

- [Symfony 6.0.4](https://symfony.com/)

* [Composer](https://getcomposer.org/download/)
* [FakerPHP/Faker v1.18.0](https://packagist.org/packages/fakerphp/faker)
* [Bootstrap v5.1.3](https://getbootstrap.com/)

## Installation

### **Clone or download the repository**, and put files into your environment,

```
https://github.com/leCheveuCodeur/my_faq.git
```

### Install libraries with **composer**,

```
composer install
```

### Configure your environment with `.env` file :

```
# DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/db_name?serverVersion=mariadb-10.6.4"
```

### Initialise your Database :

1 - create your database :

````
php bin/console d:d:c
````

2 - create the structure in your database :

```
php bin/console d:m:m
```

3 - and install fixturesfor have first contents and your Admin account :

```
php bin/console d:f:l -n
```

### And Voilà !

## How to use it ?

On the home page or in the 'Categories' tab, you will find the existing categories and a badge for each of them, indicating the number of questions.

It is possible to select a category to see the questions attached to it or to edit the category directly.

In the "Questions" tab, you will find all the questions with their visibility status as well as their answers and associated categories in the collapsible part.

It is possible to edit directly a question/answer or to find all the questions/answers of the same category by clicking on one of the category badges associated to a question/answer.
