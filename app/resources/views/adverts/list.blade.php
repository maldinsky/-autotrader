@extends('layouts.app')

@section('breadcrumbs')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">


                <div class="block-adverts-filter my-4">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="adverts-filter-item">
                                <select name="brand_id" class="custom-select">
                                    <option value="">Марка</option>
                                    @foreach ($filterAutoBrands as $filterAutoBrand)
                                        <option value="{{ $filterAutoBrand->id }}">{{ $filterAutoBrand->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="adverts-filter-item">
                                <div class="form-row">
                                    <div class="col">
                                        <select name="body_id" class="custom-select">
                                            <option value="">Кузов</option>
                                            @foreach ($filterAutoBodies as $filterAutoBody)
                                                <option value="{{ $filterAutoBody->id }}">{{ $filterAutoBody->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select name="transmission_id" class="custom-select">
                                            <option value="">Коробка</option>
                                            @foreach($filterTransmissions as $filterTransmission)
                                                <option value="{{ $filterTransmission->id  }}">{{ $filterTransmission->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="adverts-filter-item">
                                <div class="form-row">
                                    <div class="col">
                                        <select name="year_start" class="custom-select">
                                            <option value="">Год от</option>
                                            @for($year = 2019; $year > 1890; $year--)
                                                <option value="{{ $year }}">{{ $year }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select name="year_final" class="custom-select">
                                            <option value="">до</option>
                                            @for($year = 2019; $year > 1890; $year--)
                                                <option value="{{ $year }}">{{ $year }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="adverts-filter-item">
                                <select name="model_id" class="custom-select" disabled>
                                    <option value="">Модель</option>
                                </select>
                            </div>
                            <div class="adverts-filter-item">
                                <div class="form-row">
                                    <div class="col">
                                        <select name="engine_type_id" class="custom-select">
                                            <option value="">Двигатель</option>
                                            @foreach($filterEngines as $filterEngine)
                                                <option value="{{ $filterEngine->id  }}">{{ $filterEngine->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select name="driving_id" class="custom-select">
                                            <option value="">Привод</option>
                                            @foreach($filterDrivings as $filterDriving)
                                                <option value="{{ $filterDriving->id  }}">{{ $filterDriving->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <input name="mileage_start" type="text" class="form-control" placeholder="Пробег от, км">
                                </div>
                                <div class="col">
                                    <input name="mileage_final" type="text" class="form-control" placeholder="до">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="adverts-filter-item">
                                <select name="generation_id" class="custom-select" disabled>
                                    <option value="">Поколение</option>
                                </select>
                            </div>
                            <div class="adverts-filter-item">
                                <div class="form-row">
                                    <div class="col">
                                        <select name="engine_capacity_start" class="custom-select">
                                            <option value="">Объем от, л</option>
                                            <option value="500">0.5 л</option>
                                            <option value="1000">1 л</option>
                                            <option value="1500">1.5 л</option>
                                            <option value="2000">2 л</option>
                                            <option value="2500">2.5 л</option>
                                            <option value="3000">3 л</option>
                                            <option value="3000">4 л</option>
                                            <option value="3000">5 л</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select name="engine_capacity_final" class="custom-select">
                                            <option value="">до</option>
                                            <option value="">Объем от, л</option>
                                            <option value="500">0.5 л</option>
                                            <option value="1000">1 л</option>
                                            <option value="1500">1.5 л</option>
                                            <option value="2000">2 л</option>
                                            <option value="2500">2.5 л</option>
                                            <option value="3000">3 л</option>
                                            <option value="3000">4 л</option>
                                            <option value="3000">5 л</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <input name="price_start" type="text" class="form-control" placeholder="Цена от, руб">
                                </div>
                                <div class="col">
                                    <input name="price_final" type="text" class="form-control" placeholder="до">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="row">
                            <div class="col-auto ml-auto">
                                <button class="btn btn-primary">Показать <span>555</span> предложений</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="adverts-related">
                    <div class="adverts-list-items">
                        @foreach($adverts as $advert)
                            <div class="adverts-item">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="advert-item-image">
                                            <a href="{{ route('advert', $advert->id) }}">
                                                <img class="img-fluid" src="{{ $advert->getMainImage() }}" alt="{{ $advert->getName() }}">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
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
                                    </div>
                                    <div class="col-md-1">
                                        <div class="advert-item-info">
                                            {{ $advert->year }}
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="advert-item-mileage">
                                            {{ $advert->mileage }} км
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="advert-item-price">
                                            {{ $advert->getPrice() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{ $adverts->onEachSide(5)->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
