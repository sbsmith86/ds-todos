# DoSomething Software Engineering Fall Internship Homework

### The Assignment

This repo contains all the code for a simple todo list application built using the [Laravel](https://laravel.com) Framework and the Bootstrap CSS Framework.

Your assignment is to add a feature that satisfies this user story:

```
As a user, I want to be able to click on a individual todo to see more detail about the task.
```

* Fork and clone this repository and set it up as a locall app running inside [Homestead](https://github.com/laravel/homestead).
* Follow the installation instructions below onces you have set it up in Homestead.
* You will notice that the application allows you to add a Todo, view all todos, and delete a todo. Your assignment is to link each todo to it's own page that displays more information about the todo.

### Installation instructions

After the initial Homestead installation `vagrant ssh` into the vagrant box, head to the project directory and run composer to install all the project dependencies:

```shell
$ composer install
```

Once all vendor dependencies are installed, run the migrations to setup the database and seed it:

```shell
$ php artisan migrate
$ php artisan db:seed
```

Now you should be all set! Go to the url you set up in Homestead (i.e `http://ds-todos.app`) in your browser and you should see your freshly installed application.

---

### Notes

* You have until 8/24 at 3:00pm (EST) to complete the assignment
* If you need any clarification on these instructions, send questions my way and I will answer them to the best of my ability. My email address is `ssmith@dosomething.org`
* Use any further documentation you want to complete the assignment, but the [laravel documentation](http://laravel.com) is pretty solid. Check it out!

## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
