@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="account-title">Редактирование объявления</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
        @endif
        <form action="{{ route('account.adverts.update', $advert->id) }}" method="POST" >
            {{ method_field('PUT') }}
            @csrf
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Марка автомобиля</label>
                <div class="col-sm-6">
                    <select name="brand_id" class="custom-select" required>
                        @foreach ($autoBrands as $autoBrand)
                            <option value="{{ $autoBrand->id }}" {{ $advert->brand_id == $autoBrand->id ? 'selected' : '' }}>{{ $autoBrand->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Модель</label>
                <div class="col-sm-6">
                    <select name="model_id" class="custom-select" required>
                        @foreach ($autoModels as $autoModel)
                            <option value="{{ $autoModel->id }}" {{ $advert->model_id == $autoModel->id ? 'selected' : '' }}>{{ $autoModel->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-4">
                    <small class="text-muted">
                        Нет нужной марки или модели? Обратитесь в техподдержку и мы оперативно ее добавим
                    </small>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Поколение</label>
                <div class="col-sm-6">
                    <select name="generation_id" class="custom-select" required>
                        @foreach ($autoGenerations as $autoGeneration)
                            <option value="{{ $autoGeneration->id }}" {{ $advert->generation_id == $autoGeneration->id ? 'selected' : '' }}>{{ ($autoGeneration->name) ? $autoGeneration->name . '(' . $autoGeneration->years . ')' : $autoGeneration->years }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Год выпуска</label>
                <div class="col-sm-6">
                    <input name="year" type="text" class="form-control" placeholder="Введите год выпуска" value="{{ $advert->year }}" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Тип кузова</label>
                <div class="col-sm-6">
                    <select name="body_id" class="custom-select" required>
                        @foreach ($autoBodies as $autoBody)
                            <option value="{{ $autoBody->id }}" {{ $advert->body_id == $autoBody->id ? 'selected' : '' }}>{{ $autoBody->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Модификация</label>
                <div class="col-sm-6">
                    <input name="modification" type="text" class="form-control" placeholder="Модификация автомобиля" value="{{ $advert->modification }}">
                </div>
                <div class="col-sm-4">
                    <small class="text-muted">
                        Cпециальная серия определенной модели
                    </small>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Состояние</label>
                <div class="col-sm-10">
                    @foreach($conditions as $condition)
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="condition_id" type="radio" id="condition-id-{{ $condition->id }}" class="custom-control-input" value="{{ $condition->id }}" {{ $advert->condition_id == $condition->id ? 'checked' : '' }} required >
                            <label class="custom-control-label" for="condition-id-{{ $condition->id }}">{{ $condition->name }}</label>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Цена</label>
                <div class="col-sm-4">
                    <input name="price" class="form-control" type="text" placeholder="Цена автомобиля" value="{{ $advert->price }}" required>
                </div>
                <div class="col-sm-2">
                    <select name="currency_id" class="custom-select" required>
                        @foreach($currencies as $currency)
                            <option value="{{ $currency->id }}" {{ $advert->currency_id == $currency->id ? 'selected' : '' }}>{{ $currency->name }}, {{ $currency->symbol }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Текст объявления</label>
                <div class="col-sm-6">
                    <textarea name="description" class="form-control" rows="5" required>{{ $advert->description }}</textarea>
                </div>
                <div class="col-sm-4">
                    <small class="text-muted">
                        Запрещается давать ссылки, указывать адреса эл. почты, адрес места осмотра, телефоны, цену, предлагать услуги.
                    </small>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Тип двигателя</label>
                <div class="col-sm-6">
                    <select name="engine_type_id" class="custom-select" required>
                        @foreach($engines as $engine)
                            <option value="{{ $engine->id  }}" {{ $advert->engine_type_id == $engine->id ? 'selected' : '' }}>{{ $engine->name }}</option>
                        @endforeach
                    </select>
                    <div class="custom-control custom-checkbox">
                        <input name="engine_hybrid" type="checkbox" id="checkbox-engine-hybrid" class="custom-control-input" value="1" {{ $advert->engine_hybrid ? 'checked' : '' }}>
                        <label class="custom-control-label" for="checkbox-engine-hybrid">Гибридный</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input name="engine_gas" type="checkbox" id="checkbox-engine-gas" class="custom-control-input" value="1" {{ $advert->engine_gas ? 'checked' : '' }}>
                        <label class="custom-control-label" for="checkbox-engine-gas">Газовое оборудование</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Объем двигателя, см</label>
                <div class="col-sm-6">
                    <input name="engine_capacity" type="text" class="form-control" placeholder="Объем двигателя" value="{{ $advert->engine_capacity }}" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Пробег, км</label>
                <div class="col-sm-6">
                    <input name="mileage" type="text" class="form-control" placeholder="Пробег автомобиля" value="{{ $advert->mileage }}" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Трансмиссия</label>
                <div class="col-sm-6">
                    <select name="transmission_id" class="custom-select" required>
                        @foreach($transmissions as $transmission)
                            <option value="{{ $transmission->id  }}" {{ $advert->transmission_id == $transmission->id ? 'selected' : '' }}>{{ $transmission->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Тип привода</label>
                <div class="col-sm-6">
                    <select name="driving_id" class="custom-select" required>
                        @foreach($drivings as $driving)
                            <option value="{{ $driving->id  }}" {{ $advert->driving_id == $driving->id ? 'selected' : '' }}>{{ $driving->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">VIN</label>
                <div class="col-sm-6">
                    <input name="vin" type="text" class="form-control" placeholder="Vin-код автомобиля" value="{{ $advert->vin }}" required>
                </div>
                <div class="col-sm-4">
                    <small class="text-muted">
                        Мы просим покупателей cверять VIN и госномер при осмотре, указывайте их верно.
                    </small>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Цвет автомобиля</label>
                <div class="col-sm-6">
                    <select name="color_id" class="custom-select" required>
                        @foreach($colors as $color)
                            <option value="{{ $color->id }}" {{ $advert->color_id == $color->id ? 'selected' : '' }}>{{ $color->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Материал отделки салона</label>
                <div class="col-sm-6">
                    <select name="interior_material_id" class="custom-select" required>
                        @foreach($interiorMaterials as $interiorMaterial)
                            <option value="{{ $interiorMaterial->id }}" {{ $advert->interior_material_id == $interiorMaterial->id ? 'selected' : '' }}>{{ $interiorMaterial->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Цвет салона</label>
                <div class="col-sm-6">
                    <select name="interior_color_id" class="custom-select" required>
                        @foreach($interiorColors as $interiorColor)
                            <option value="{{ $interiorColor->id }}" {{ $advert->interior_color_id == $interiorColor->id ? 'selected' : '' }}>{{ $interiorColor->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Обмен</label>
                <div class="col-sm-6">
                    <select name="exchange_id" class="custom-select" required>
                        @foreach($exchanges as $exchange)
                            <option value="{{ $exchange->id }}" {{ $advert->exchange_id == $exchange->id ? 'selected' : '' }}>{{ $exchange->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Область</label>
                <div class="col-sm-6">
                    <select name="region_id" class="custom-select" required>
                        @foreach($regions as $region)
                            <option value="{{ $region->id }}" {{ $advert->region_id == $region->id ? 'selected' : '' }}>{{ $region->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Город</label>
                <div class="col-sm-6">
                    <select name="city_id" class="custom-select" required>
                        @foreach($cities as $city)
                            <option value="{{ $city->id }}" {{ $advert->city_id == $city->id ? 'selected' : '' }}>{{ $city->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Ваше имя</label>
                <div class="col-sm-6">
                    <input name="name" type="text" class="form-control" placeholder="Ваше имя" value="{{ $advert->name }}" required>
                </div>
                <div class="col-sm-4">
                    <small class="text-muted">
                        Имя будет указано в объявлении
                    </small>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Контакный телефон</label>
                <div class="col-sm-6">
                    <input name="phone" type="text" class="form-control" placeholder="Контакный телефон" value="{{ $advert->phone }}" required>
                </div>
            </div>
            <div class="my-5">
                <h3>Дополнительные параметры</h3>
                <div class="row">
                    @foreach($attributeGroups as $attributeGroup)
                        <div class="col-sm-4">
                            <h5>{{ $attributeGroup->name }}</h5>
                            <div>
                                @foreach($attributeGroup->autoAttributes as $attribute)
                                    <div class="custom-control custom-checkbox">
                                        <input name="attribute_id[]" type="checkbox" class="custom-control-input" id="attribute-id-{{ $attribute->id }}" {{ is_array($advert->attribute_id) && in_array($attribute->id, $advert->attribute_id) ? 'checked' : '' }} value="{{ $attribute->id }}">
                                        <label class="custom-control-label" for="attribute-id-{{ $attribute->id }}">{{ $attribute->name }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="my-3">
                <input id="advert-load-image" type="file" name="advert_image" data-fileuploader-files='@json($images)'>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Отправить</button>
            </div>
        </form>
    </div>
@endsection
