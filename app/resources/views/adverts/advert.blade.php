@extends('layouts.app')

@section('breadcrumbs')

@section('content')
    <div class="container">
        <div class="advert-page">
            <div class="advert-header">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="advert-title">{{ $advert->getName() }}</h1>
                        <div class="advert-intro-list">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="advert-intro-item">
                                        {{ $advert->created_at }}
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="advert-intro-item">
                                        <i class="fas fa-eye"></i> {{ $advert->views }}
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="advert-intro-item">
                                        № {{ $advert->id }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="advert-price">
                            {{ $advert->getPrice() }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="advert-main">
                <div class="row">
                    <div class="col-md-8">
                        <div class="advert-images">
                            <div class="slider advert-main-images">
                                @foreach($advert->getImages() as $image)
                                    <div class="advert-main-image">
                                        <img class="img-fluid" src="{{ $image }}" alt="{{ $advert->getName() }}">
                                    </div>
                                @endforeach
                            </div>
                            <div class="slider-nav advert-thumb-images">
                                @foreach($advert->getImages() as $image)
                                    <div class="advert-thumb-image">
                                        <img class="img-fluid" src="{{ $image }}" alt="{{ $advert->getName() }}">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="advert-main-info">
                            <div class="advert-main-info-item row">
                                <div class="advert-main-info-title col">Год выпуска</div>
                                <div class="advert-main-info-value col">
                                    {{ $advert->year }}
                                </div>
                            </div>
                            <div class="advert-main-info-item row">
                                <div class="advert-main-info-title col">Пробег</div>
                                <div class="advert-main-info-value col">
                                    {{ $advert->mileage }}
                                </div>
                            </div>
                            <div class="advert-main-info-item row">
                                <div class="advert-main-info-title col">Кузов</div>
                                <div class="advert-main-info-value col">
                                    {{ $advert->autoBody->name }}
                                </div>
                            </div>
                            <div class="advert-main-info-item row">
                                <div class="advert-main-info-title col">Цвет</div>
                                <div class="advert-main-info-value col">
                                    {{ $advert->autoColor->name }}
                                </div>
                            </div>
                            <div class="advert-main-info-item row">
                                <div class="advert-main-info-title col">Двигатель</div>
                                <div class="advert-main-info-value col">
                                    {{ $advert->engine_capacity }} см <sup>3</sup> / {{ $advert->autoEngineType->name }}
                                </div>
                            </div>
                            <div class="advert-main-info-item row">
                                <div class="advert-main-info-title col">Коробка</div>
                                <div class="advert-main-info-value col">
                                    {{ $advert->autoTransmission->name }}
                                </div>
                            </div>
                            <div class="advert-main-info-item row">
                                <div class="advert-main-info-title col">Привод</div>
                                <div class="advert-main-info-value col">
                                    {{ $advert->autoDriving->name }}
                                </div>
                            </div>
                            <div class="advert-main-info-item row">
                                <div class="advert-main-info-title col">Состояние</div>
                                <div class="advert-main-info-value col">
                                    {{ $advert->autoCondition->name }}
                                </div>
                            </div>
                            <div class="advert-main-info-item row">
                                <div class="advert-main-info-title col">VIN</div>
                                <div class="advert-main-info-value col">
                                    <a href="">{{ $advert->vin }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="advert-contact-info">
                            <div class="advert-contact-info-name">
                                {{ $advert->name }}
                            </div>
                            <div class="advert-contact-info-phone">
                                <a href="tel:{{ $advert->phone }}">{{ $advert->phone }}</a>
                            </div>
                            <div class="advert-contact-info-location">
                                {{ $advert->getLocation() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="advert-attributes">
                <div class="advert-attributes-title block-title">
                    Комплектация
                </div>
                <div class="advert-attribute-groups">
                    @foreach($advertAttributeGroups as $attributeGroupName => $attributes)
                        <div class="advert-attribute-group">
                            <div class="advert-attribute-group-title">
                                <button class="btn btn-block" data-toggle="collapse" data-target="#advert-attribute-group-{{ $loop->iteration }}" aria-expanded="true">
                                    {{ $attributeGroupName }}
                                </button>
                            </div>
                            <div id="advert-attribute-group-{{ $loop->iteration }}" class="collapse advert-attribute-group-content">
                                <div class="advert-attribute-items">
                                    @foreach($attributes as $attribute)
                                        <div class="advert-attribute-item">
                                            {{ $attribute->name }}
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="advert-description">
                <div class="advert-description-title block-title">
                    Комментарий продавца
                </div>
                <div class="advert-description-content">
                    {{ $advert->description }}
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('.advert-main-images').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: '.slider-nav'
            });
            $('.advert-thumb-images').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                asNavFor: '.slider',
                dots: false,
                arrows: false,
                focusOnSelect: true
            });
        });
    </script>
@endsection
