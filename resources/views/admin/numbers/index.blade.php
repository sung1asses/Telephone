@extends('adminlte::page')

@section('title', 'IPphone')

@section('content_header')
    <h1>Номера</h1>
      {{ $error ?? '' }}
      {{ $succ ?? '' }}
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-primary">
          <div class="card-header with-border">
            <h3 class="card-title">Добавить информацию</h3>
          </div>
          <form method="POST" enctype="multipart/form-data" action="{{ route('redactor.numbers.create') }}">
              <div class="card-body row">
                {{ csrf_field() }}
                    <div class="form-group col-lg-3 col-md-4 col-sm-6">
                       <label for="name" class="col col-form-label text-md-right">{{ __('Структура универсистета') }}</label>
                       <select type="text" min="0" class="form-control" value="{{ old('institute_id') }}" name="institute_id" required="">
                          <option selected>Выберите...</option>
                          @foreach($institutes as $institute)
                            <option value="{{ $institute->id }}">{{ $institute->name }}</option>
                          @endforeach
                       </select>
                    </div>
                    <div class="form-group col-lg-3 col-md-4 col-sm-6">
                       <label for="name" class="col col-form-label text-md-right">{{ __('Почта') }}</label>
                       <input type="text" min="0" class="form-control" value="{{ old('email') }}" name="email" required="">
                      @error('email')
                          <div class="text-danger p-2">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="form-group col-lg-3 col-md-4 col-sm-6">
                       <label for="name" class="col col-form-label text-md-right">{{ __('ФИО сотрудника') }}</label>
                       <input type="text" min="0" class="form-control" value="{{ old('name') }}" name="name" required="">
                      @error('name')
                          <div class="text-danger p-2">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="form-group col-lg-3 col-md-4 col-sm-6">
                       <label for="name" class="col col-form-label text-md-right">{{ __('Должность') }}</label>
                       <input type="text" min="0" class="form-control" value="{{ old('position') }}" name="position">
                      @error('position')
                          <div class="text-danger p-2">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="form-group col-lg-3 col-md-4 col-sm-6">
                       <label for="name" class="col col-form-label text-md-right">{{ __('Кабинет') }}</label>
                       <input type="text" min="0" class="form-control" value="{{ old('cabinet') }}" name="cabinet">
                      @error('cabinet')
                          <div class="text-danger p-2">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="form-group col-lg-3 col-md-4 col-sm-6">
                       <label for="name" class="col col-form-label text-md-right">{{ __('Внутренний номер') }}</label>
                       <input type="text" min="0" class="form-control" value="{{ old('local_number') }}" name="local_number">
                      @error('local_number')
                          <div class="text-danger p-2">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="form-group col-lg-3 col-md-4 col-sm-6">
                       <label for="name" class="col col-form-label text-md-right">{{ __('Мобильный номер') }}</label>
                       <input type="text" min="0" class="form-control" value="{{ old('telephone_number') }}" name="telephone_number">
                      @error('telephone_number')
                          <div class="text-danger p-2">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="card-footer col-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Отправить</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
