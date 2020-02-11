@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Номера</h1>
      {{ $error ?? '' }}
      {{ $succ ?? '' }}
@endsection

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card card-primary">
          <div class="card-header with-border">
            <h3 class="card-title">Добавить информацию</h3>
          </div>
          <form method="POST" enctype="multipart/form-data" action="{{ route('redactor.numbers.create') }}">
              <div class="card-body">
                {{ csrf_field() }}
                    <div class="form-group">
                       <label for="name" class="col-md-5 col-form-label text-md-right">{{ __('Структура универсистета') }}</label>
                       <select type="text" min="0" class="form-control" value="{{ old('institute_id') }}" name="institute_id" required="">
                          <option selected>Выберите...</option>
                          @foreach($institutes as $institute)
                            <option value="{{ $institute->id }}">{{ $institute->name }}</option>
                          @endforeach
                       </select>
                    </div>
                    <div class="form-group">
                       <label for="name" class="col-md-5 col-form-label text-md-right">{{ __('ФИО сотрудника') }}</label>
                       <input type="text" min="0" class="form-control" value="{{ old('name') }}" name="name" required="">
                    </div>
                    <div class="form-group">
                       <label for="name" class="col-md-5 col-form-label text-md-right">{{ __('Должность') }}</label>
                       <input type="text" min="0" class="form-control" value="{{ old('position') }}" name="position" required="">
                    </div>
                    <div class="form-group">
                       <label for="name" class="col-md-5 col-form-label text-md-right">{{ __('Кабинет') }}</label>
                       <input type="text" min="0" class="form-control" value="{{ old('cabinet') }}" name="cabinet" required="">
                    </div>
                    <div class="form-group">
                       <label for="name" class="col-md-5 col-form-label text-md-right">{{ __('Почта') }}</label>
                       <input type="text" min="0" class="form-control" value="{{ old('email') }}" name="email" required="">
                    </div>
                    <div class="form-group">
                       <label for="name" class="col-md-5 col-form-label text-md-right">{{ __('Корпоративный номер') }}</label>
                       <input type="text" min="0" class="form-control" value="{{ old('local_number') }}" name="local_number" required="">
                    </div>
                    <div class="form-group">
                       <label for="name" class="col-md-5 col-form-label text-md-right">{{ __('Телефонный номер') }}</label>
                       <input type="text" min="0" class="form-control" value="{{ old('telephone_number') }}" name="telephone_number" required="">
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Отправить</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-12">
      
        <!-- <div class="card card-primary">
            <div class="card-header with-border">
              <h3 class="card-title">Список</h3>
            </div>
            <div class="card-body">
            @foreach($numbers as $number)
              <div class="d-flex justify-content-between align-items-center">
                <p>{{ $number->name }}</p>
                <a href="{{ route('redactor.numbers.delete',['id'=> $number->id]) }}">
                  {{ __('Удалить') }}
                </a>
              </div>
            @endforeach
            </div>
        </div> -->
    </div>
</div>
@endsection
