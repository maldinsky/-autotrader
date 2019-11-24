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

Breadcrumbs::for('account', function ($trail) {
    $trail->parent('home');
    $trail->push('Аккаунт', route('account.home'));
});

Breadcrumbs::for('account.adverts', function ($trail) {
    $trail->parent('account');
    $trail->push('Объявления', route('account.home'));
});

Breadcrumbs::for('account.adverts.index', function ($trail) {
    $trail->parent('account.adverts');
    $trail->push('Объявления', route('account.adverts.index'));
});

Breadcrumbs::for('account.adverts.create', function ($trail) {
    $trail->parent('account.adverts');
    $trail->push('Создание объявления', route('account.adverts.create'));
});
