# DoSomething Software Engineering Internship Homework

### The Assignment

This repo contains all the code for a simple todo list application built using the [Laravel](https://laravel.com) Framework and the Bootstrap CSS Framework.

Your assignment is to add a feature that satisfies this user story:

```
As a user, I want to be able to click on a individual todo to see more detail about the task.
```

* You will notice that the application allows you to add a todo, view all todos, and delete a todo. Todos are composed of a `name` and a `description`. Your assignment is to link each todo to it's own page (`i.e. http://ds-todos.test/todo/2`) that displays both the name and description of the todo.

### Vagrant & Homestead installation
Using the Laravel Homestead virtual machine, we don't have to worry about Laravel's system requirements or install PHP, both of which can be pretty frustrating (as with most setups!).
* For local development, we will fork and clone this repository and set it up as a local app running inside Homestead:
	* First, download the correct version of [Vagrant](https://www.vagrantup.com/downloads.html) for your system. Check out the first few parts of [this link](https://24ways.org/2014/what-is-vagrant-and-why-should-i-care/) if you're curious about what it's actually for.
	*  Then, download [Homestead](https://laravel.com/docs/5.2/homestead). Since we've already installed Vagrant, follow the directions from the "Installing the Homestead Vagrant Box" and "Installing Homestead" sections. You shouldn't need to play with the configuration, unless you want to change, for example, the default domain for the application (homestead.app).
	*  Finally, from your home directory (~) navigate  to your Homestead folder with  ```$ cd Homestead```. From here we will fork and clone the repository - all of the Laravel projects you make should be inside this Homestead folder!
* Follow the installation instructions below once you have this set up. Make sure everything is installed correctly before moving on!

### Dependencies and Project Setup 

*IMPORTANT: This repo uses Laravel 5.2, make sure you are viewing the correct documentation at https://laravel.com/docs/5.2/*

Now we get to play with our virtual machine. While still inside the Homestead folder, run `vagrant init laravel/homestead`. This creates a Vagrantfile for the Homestead vagrant box that we installed in the previous section. From there, run `vagrant up`, which will configure the machine based on that Vagrantfile.  Finally, we can run `vagrant ssh` and our terminal should look something like this: 

![alt text](https://puu.sh/zDPKo/2f7b67ab2a.png)

We're now operating on the virtual machine! 

You should be able to `ls` and see that there is a single folder called `code`. If you `cd` into it and `ls` again, notice that these are all our project files! Now we can run composer to install all the project dependencies:

```shell
$ composer install
```

Once all vendor dependencies are installed, copy the `.env.example` file to a new `.env` (hint: save it as a `.env.` file and the second period will magically disappear)  and run `php artisan key:generate`

Then, while still ssh'ed in your Homestead box, run the migrations to setup the database and seed it:

```shell
$ php artisan migrate
$ php artisan db:seed
```

Now you should be all set! Go to the url you set up in Homestead (the default will be `http://homestead.app`, but feel free to change it to `http://ds-todos.test` or whatever url you setup in your /etc/hosts file) in your browser and you should see your freshly installed application. 

---

### Notes

* If you need any clarification on these instructions, send questions my way and I will answer them to the best of my ability. My email address is `ssmith@dosomething.org`
* Use any further documentation you want to complete the assignment, but the [laravel documentation](https://laravel.com/docs/5.2/) is pretty solid. Check it out!
* Here are some links for common issues and extra help:
  * [private key doesn't exist,check Homestead.yaml file](https://stackoverflow.com/questions/44463987/homestead-installation)
  * [modifying hosts file to change domain name](https://support.rackspace.com/how-to/modify-your-hosts-file/#Windows_Vista)
  * [Homestead YAML folder mapping](https://laravel.io/forum/05-16-2014-homestead-yaml-folder-mapping)
  * [Google Chrome Privacy Error](https://github.com/laravel/homestead/issues/755)
* Bonus: feel free to make the app look better, not required, but it is pretty hard to look at as it stands now.

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
