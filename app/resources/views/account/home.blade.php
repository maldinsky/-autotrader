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
                    Страница пользователя
                </div>
            </div>
        </div>
    </div>
@endsection
