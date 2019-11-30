@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="account-title">Ваше объявление</h1>
        {{ $advert->year }}
    </div>
@endsection
