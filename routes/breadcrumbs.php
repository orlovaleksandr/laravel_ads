<?php

use DaveJamesMiller\Breadcrumbs\BreadcrumbsGenerator as Crumbs;

Breadcrumbs::for('home', function (Crumbs $trail){
    $trail->push('Home', route('home'));
});

Breadcrumbs::for('login', function (Crumbs $trail){
    $trail->parent('home');
    $trail->push('Login', route('login'));
});

Breadcrumbs::for('register', function (Crumbs $trail){
    $trail->parent('home');
    $trail->push('Register', route('register'));
});


Breadcrumbs::for('password.reset', function (Crumbs $trail){
    $trail->parent('login');
    $trail->push('email', route('password.reset'));
});

Breadcrumbs::for('password.request', function (Crumbs $trail){
    $trail->parent('login');
    $trail->push('email', route('password.request'));
});

Breadcrumbs::register('cabinet', function (Crumbs $trail){
    $trail->push('Cabinet', route('cabinet'));
});


