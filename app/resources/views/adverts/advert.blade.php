@extends('layouts.app')

@section('breadcrumbs')

@section('content')
    <div class="container">
        <div class="advert-header">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="advert-title">{{ $advert->getName() }}</h1>
                    <div>
                        <span>{{ $advert->created_at }}</span>
                        <span><i class="fas fa-eye"></i> {{ $advert->views }}</span>
                        <span>№ {{ $advert->id }}</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="advert-price">
                        {{ $advert->price }}
                    </div>
                </div>
            </div>
        </div>
        <div class="advert-main">
            <div class="row">
                <div class="col-md-8">
                    <div class="advert-images">
                        <div class="slider">
                            @foreach($advert->getImages() as $image)
                                <div>
                                    <img src="{{ $image }}" alt="{{ $advert->getName() }}">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="slider-nav">
                        @foreach($advert->getImages() as $image)
                            <div>
                                <img src="{{ $image }}" alt="{{ $advert->getName() }}">
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="advert-main-info">
                        <div class="advert-main-info-item">
                            <div class="advert-main-info-title">Год выпуска</div>
                            <div class="advert-main-info-value">
                                {{ $advert->year }}
                            </div>
                        </div>
                        <div class="advert-main-info-item">
                            <div class="advert-main-info-title">Пробег</div>
                            <div class="advert-main-info-value">
                                {{ $advert->mileage }}
                            </div>
                        </div>
                        <div class="advert-main-info-item">
                            <div class="advert-main-info-title">Кузов</div>
                            <div class="advert-main-info-value">
                                {{ $advert->autoBody->name }}
                            </div>
                        </div>
                        <div class="advert-main-info-item">
                            <div class="advert-main-info-title">Двигатель</div>
                            <div class="advert-main-info-value">
                                {{ $advert->engine_type }}
                            </div>
                        </div>
                        <div class="advert-main-info-item">
                            <div class="advert-main-info-title">Коробка</div>
                            <div class="advert-main-info-value">
                                {{ $advert->transmission_id }}
                            </div>
                        </div>
                        <div class="advert-main-info-item">
                            <div class="advert-main-info-title">Привод</div>
                            <div class="advert-main-info-value">
                                {{ $advert->driving_id }}
                            </div>
                        </div>
                        <div class="advert-main-info-item">
                            <div class="advert-main-info-title">Состояние</div>
                            <div class="advert-main-info-value">
                                {{ $advert->condition_id }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="advert-attributes">
            @foreach($advert->attributes as $attribute)
                <div>
                    <b>{{ $attribute->autoAttributeGroup->name }}:</b> {{ $attribute->name }}
                </div>
            @endforeach
        </div>
        <div class="advert-description">
            {{ $advert->description }}
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('.slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: '.slider-nav'
            });
            $('.slider-nav').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                asNavFor: '.slider',
                dots: false,
                arrows: false,
                centerMode: true,
                focusOnSelect: true
            });
        });
    </script>
@endsection
