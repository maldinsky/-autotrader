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

Breadcrumbs::for('account.home', function ($trail) {
    $trail->parent('account');
    $trail->push('Профиль', route('account.home'));
});

Breadcrumbs::for('account.adverts.index', function ($trail) {
    $trail->parent('account');
    $trail->push('Ваши объявления', route('account.adverts.index'));
});

Breadcrumbs::for('account.adverts.show', function ($trail, $advert) {
    $trail->parent('account.adverts.index');
    $trail->push('Редактирование объявления', route('account.adverts.show', $advert));
});

Breadcrumbs::for('account.adverts.create', function ($trail) {
    $trail->parent('account.adverts.index');
    $trail->push('Создание объявления', route('account.adverts.create'));
});

Breadcrumbs::for('account.adverts.edit', function ($trail, $advert) {
    $trail->parent('account.adverts.index');
    $trail->push('Редактирование объявления', route('account.adverts.edit', $advert));
});

// Adverts
Breadcrumbs::for('adverts', function ($trail) {
    $trail->parent('home');
    $trail->push('Список объявлений', route('adverts'));
});

Breadcrumbs::for('advert', function ($trail, $advert) {
    $trail->parent('home');
    $trail->push('Страница объявления', route('advert', $advert));
});
