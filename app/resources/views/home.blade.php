@extends('layouts.app')

@section('breadcrumbs', '')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block-brands-list block-module">
                    <div class="block-brands-list-title block-title">
                        Популярные марки автомобилей
                    </div>
                    <div class="row">
                        @foreach($brands as $brand)
                            <div class="col-md-2">
                                <div class="brands-list-item">
                                    <div class="brands-list-item-title">
                                        <a href="{{ route('adverts', $brand->id) }}">{{ $brand->name}}
                                            <span class="text-muted">{{ $brand->adverts_count }}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="block-adverts-related block-module">
                    <div class="block-adverts-related block-title">
                        Подборка
                    </div>
                    <div class="adverts-grid-items">
                        <div class="row">
                            @foreach($relatedAdverts as $advert)
                                <div class="col-md-3">
                                    <div class="adverts-item">
                                        <div class="advert-item-image">
                                            <a href="{{ route('advert', $advert->id) }}">
                                                <img class="img-fluid" src="{{ $advert->getMainImage() }}" alt="{{ $advert->getName() }}">
                                            </a>
                                        </div>
                                        <div class="advert-item-title">
                                            <a href="{{ route('advert', $advert->id) }}">{{ $advert->getName() }}</a>
                                        </div>
                                        <div class="advert-item-info">
                                            {{ $advert->year }} г, {{ $advert->engine_capacity }} см<sup>3</sup>,
                                            {{ $advert->autoEngineType->name }}, {{ $advert->autoTransmission->name }}
                                        </div>
                                        <div class="advert-item-location">
                                            {{ $advert->region->name }}, {{ $advert->city->name }}
                                        </div>
                                        <div class="advert-item-price">
                                            {{ $advert->getPrice() }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
