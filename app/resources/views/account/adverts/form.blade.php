@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Новое объявление</h1>
        <form action="">
            @csrf

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Тип автомобиля</label>
                <div class="col-sm-6">
                    <select name="type" class="custom-select" required>
                        @foreach ($autoTypes as $autoType)
                            <option value="{{ $autoType->id }}">{{ $autoType->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Марка автомобиля</label>
                <div class="col-sm-6">
                    <select name="brand_id" class="custom-select" required>
                        @foreach ($autoBrands as $autoBrand)
                            <option value="">{{ $autoBrand->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Модель</label>
                <div class="col-sm-10">
                    <select name="model_id" class="custom-select" required>
                    </select>
                </div>
            </div>
        </form>
    </div>
@endsection
