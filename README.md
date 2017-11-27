# Simple MVC
A very simple PHP MVC application skeleton. It's designed to be lightweight and modular, allowing developers to build better and easy to maintain code with PHP.

## Requirements

**The framework requirements are limited.**

- PHP 7.0 or greater.
- Apache Web Server or equivalent with mod_rewrite support (like Mamp, Xampp or etc).

### Installation Overview

To clone the app, run:

```git
git clone https://github.com/EdsonLucas/simple-mvc.git
```
It will create a directory called `simples-mvc` inside the current folder.
Inside that directory, it will generate the initial project structure and install the transitive dependencies

```
simple-mvc
├── README.md
├── index.php
├── config.php
├── .htaccess
├── assets
│   └── images
│   └── css
│   └── js
├── core
│   └── Core.php
│   └── controller.php
├── controllers
│   └── homeController.php
│   └── empresaController.php
│   └── servicosController.php
│   └── contatoController.php  
└── views
	  └── template.php
    └── home.php
    └── empresa.php
    └── servicos.php
    └── contato.php
```

## Observations

If you have problems with the file Core, remember to change the `$url` name to your `folder name`, or you project will break. If you are using OSX, remember to change the `$_SERVER['REQUEST_URI']` to `$_SERVER['PHP_SELF']`.
