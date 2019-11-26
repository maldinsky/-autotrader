@extends('layouts.app')

@section('breadcrumbs')

@section('content')
    <div class="container">
        <h1>Страница пользователя</h1>
        <div class="row justify-content-center">
            <div class="col-md-3">
                @include('layouts.partials.account._menu')
            </div>
            <div class="col-md-9">
                <div>
                    @foreach($adverts as $advert)
                        <div>
                            <p>Объявление # {{ $advert->id }}</p>
                            <p>{{ $advert->year }}</p>
                            <p>{{ $advert->mileage }}</p>
                            <p>{{ $advert->user->name }}</p>
                            <p>{{ $advert->autoType->name }}</p>
                            <a href="{{ route('account.adverts.edit', $advert) }}">Изменить</a>
                            <a href="{{ route('account.adverts.show', $advert) }}">Посмотреть</a>
                            <a href="{{ route('account.adverts.destroy', $advert) }}">Удалить</a>
                            <hr>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
