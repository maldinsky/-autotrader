<?php

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Главная', route('home'));
});

// Home > login
Breadcrumbs::for('login', function ($trail) {
    $trail->parent('home');
    $trail->push('Авторизация', route('login'));
});

// Home > register
Breadcrumbs::for('register', function ($trail) {
    $trail->parent('home');
    $trail->push('Регистрация', route('register'));
});
