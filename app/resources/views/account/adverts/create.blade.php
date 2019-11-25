@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Новое объявление</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
        @endif
        <form action="{{ route('account.adverts.store') }}" method="POST">
            @csrf
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Тип автомобиля</label>
                <div class="col-sm-6">
                    <select name="type" class="custom-select" required>
                        @foreach ($autoTypes as $autoType)
                            <option value="{{ $autoType->id }}" {{ old('type') == $autoType->id ? 'selected' : '' }}>{{ $autoType->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Марка автомобиля</label>
                <div class="col-sm-6">
                    <select name="brand_id" class="custom-select" required>
                        @foreach ($autoBrands as $autoBrand)
                            <option value="{{ $autoBrand->id }}" {{ old('brand_id') == $autoBrand->id ? 'selected' : '' }}>{{ $autoBrand->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Модель</label>
                <div class="col-sm-6">
                    <select name="model_id" class="custom-select" required>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Год выпуска</label>
                <div class="col-sm-6">
                    <input name="year" type="text" class="form-control" placeholder="Введите год выпуска" value="{{ old('year') }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Тип кузова</label>
                <div class="col-sm-6">
                    <select name="body_id" class="custom-select" required>
                        @foreach ($autoBodies as $autoBody)
                            <option value="{{ $autoBody->id }}" {{ old('body_id') == $autoBody->id ? 'selected' : '' }}>{{ $autoBody->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Модификация</label>
                <div class="col-sm-6">
                    <input name="modification" type="text" class="form-control" placeholder="Модификация автомобиля" value="{{ old('modification') }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Состояние</label>
                <div class="col-sm-10">
                    @foreach($conditions as $condition_id => $condition_name)
                        <div class="form-check form-check-inline">
                            <input name="condition_id" class="form-check-input" type="radio" value="{{ $condition_id }}">
                            <label class="form-check-label">{{ $condition_name }}</label>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Цена</label>
                <div class="col-sm-4">
                    <input name="price" class="form-control" type="text" placeholder="Цена автомобиля" value="{{ old('price') }}">
                </div>
                <div class="col-sm-2">
                    <select name="currency_id" class="custom-select" required>
                        @foreach($currencies as $currency)
                            <option value="{{ $currency->id }}">{{ $currency->name }}, {{ $currency->symbol }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Текст объявления</label>
                <div class="col-sm-6">
                    <textarea name="description" class="form-control" rows="5">{{ old('description') }}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Тип двигателя</label>
                <div class="col-sm-6">
                    <select name="engine_type" class="custom-select" required>
                        @foreach($engines as $engine_id => $engine_name)
                            <option value="{{ $engine_id  }}">{{ $engine_name }}</option>
                        @endforeach
                    </select>
                    <div class="form-check">
                        <input name="engine_hybrid" type="checkbox" class="form-check-input" value="1">
                        <label class="form-check-label">Гибридный</label>
                    </div>
                    <div class="form-check">
                        <input name="engine_gas" type="checkbox" class="form-check-input" value="1">
                        <label class="form-check-label">Газовое оборудование</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Пробег</label>
                <div class="col-sm-6">
                    <input name="mileage" type="text" class="form-control" placeholder="Пробег автомобиля" value="{{ old('mileage') }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Трансмиссия</label>
                <div class="col-sm-6">
                    <select name="transmission_id" class="custom-select" required>
                        @foreach($transmissions as $transmission_id => $transmission_name)
                            <option value="{{ $transmission_id  }}">{{ $transmission_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Тип привода</label>
                <div class="col-sm-6">
                    <select name="driving_id" class="custom-select" required>
                        @foreach($drivings as $driving_id => $driving_name)
                            <option value="{{ $driving_id  }}">{{ $driving_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">VIN</label>
                <div class="col-sm-6">
                    <input name="vin" type="text" class="form-control" placeholder="Vin-код автомобиля" value="{{ old('vin') }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Цвет автомобиля</label>
                <div class="col-sm-6">
                    <select name="color_id" class="custom-select" required>
                        @foreach($colors as $color)
                            <option value="{{ $color->id  }}">{{ $color->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Материал отделки салона</label>
                <div class="col-sm-6">
                    <select name="interior_material_id" class="custom-select" required>
                        @foreach($interiorMaterials as $interiorMaterial)
                            <option value="{{ $interiorMaterial->id }}">{{ $interiorMaterial->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Цвет салона</label>
                <div class="col-sm-6">
                    <select name="interior_color_id" class="custom-select" required>
                        @foreach($interiorColors as $interiorColor)
                            <option value="{{ $interiorColor->id }}">{{ $interiorColor->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Обмен</label>
                <div class="col-sm-6">
                    <select name="exchange" class="custom-select" required>
                        @foreach($exchanges as $exchange_id => $exchange_name)
                            <option value="{{ $exchange_id }}">{{ $exchange_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Область</label>
                <div class="col-sm-6">
                    <select name="region_id" class="custom-select" required>
                        @foreach($regions as $region)
                            <option value="{{ $region->id }}">{{ $region->name }}</option>
                        @endforeach
                        <option value="2">Тестовое</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Город</label>
                <div class="col-sm-6">
                    <select name="city_id" class="custom-select" required>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Ваше имя</label>
                <div class="col-sm-6">
                    <input name="name" type="text" class="form-control" placeholder="Ваше имя" value="{{ old('name') }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Контакный телефон</label>
                <div class="col-sm-6">
                    <input name="phone" type="text" class="form-control" placeholder="Контакный телефон" value="{{ old('phone') }}">
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Отправить</button>
            </div>
        </form>
    </div>
@endsection
