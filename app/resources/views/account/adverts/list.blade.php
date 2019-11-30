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
                <div class="adverts-list">
                    @foreach($adverts as $advert)
                        <div class="adverts-list-item">
                            <div class="row">
                                <div class="col-md-3">
                                    @if(!empty($advert->images[0]))
                                        <img class="img-fluid" src="{{ Storage::url($advert->images[0]->image) }}" alt="">
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    <div class="adverts-list-item-title">
                                        <a href="{{ route('account.adverts.show', $advert) }}">{{ $advert->autoBrand->name }} {{ $advert->autoModel->name }}</a>
                                    </div>
                                    <div class="adverts-list-item-attributes">
                                        <div class="adverts-list-item-attribute">
                                            <i class="fas fa-phone-alt"></i> {{ $advert->phone }} - {{ $advert->name }}
                                        </div>
                                        <div class="adverts-list-item-attribute">
                                            <i class="far fa-eye"></i> {{ $advert->views }}
                                        </div>
                                        <div class="adverts-list-item-attribute">
                                            <i class="fas fa-car"></i> {{ $advert->autoBody->name }}
                                        </div>
                                        <div class="adverts-list-item-attribute">
                                            <i class="far fa-clock"></i> {{ $advert->created_at }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    {{ $advert->mileage }} км. / {{ $advert->year }} г.
                                </div>
                                <div class="col-md-3 text-right">
                                    <div class="btn-group" role="group">
                                        <a class="btn btn-success" href="{{ route('account.adverts.show', $advert) }}"><i class="far fa-eye"></i></a>
                                        <a class="btn btn-primary" href="{{ route('account.adverts.edit', $advert) }}"><i class="fas fa-edit"></i></a>
                                        <a class="btn btn-danger" href="{{ route('account.adverts.destroy', $advert) }}"><i class="far fa-trash-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
