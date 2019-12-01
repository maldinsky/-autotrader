@extends('layouts.app')

@section('breadcrumbs', '')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="adverts-related">
                    <div class="adverts-grid-items">
                        <div class="row">
                            @foreach($adverts as $advert)
                                <div class="col-md-3">
                                    <div class="adverts-item">
                                        <div class="advert-item-image">
                                            <img class="img-fluid" src="{{ $advert->getMainImage() }}" alt="{{ $advert->getName() }}">
                                        </div>
                                        <div class="advert-item-title">
                                            {{ $advert->getName() }}
                                        </div>
                                        <div class="advert-item-info">
                                            {{ $advert->year }}
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
