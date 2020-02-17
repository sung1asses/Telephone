@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Работа с пользователями</h1>
@endsection

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card card-primary">
          <div class="card-header with-border">
            <h3 class="card-title">Создание редактора</h3>
          </div>
          <form method="POST" enctype="multipart/form-data" action="{{ route('admin.watcher.create') }}">
              <div class="card-body">
                {{ csrf_field() }}
                
                    <div class="form-group">
                       <label for="name" class="col-md-5 col-form-label text-md-right">{{ __('Фамилия редактора') }}</label>
                       <input type="text" min="0" class="form-control" value="{{ old('sname') }}" name="sname" required="">
                      @error('sname')
                          <div class="text-danger p-2">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                       <label for="name" class="col-md-5 col-form-label text-md-right">{{ __('Имя редактора') }}</label>
                       <input type="text" min="0" class="form-control" value="{{ old('fname') }}" name="fname" required="">
                      @error('fname')
                          <div class="text-danger p-2">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                       <label for="name" class="col-md-5 col-form-label text-md-right">{{ __('Введите пароль') }}</label>
                       <input type="password" min="8" class="form-control" value="{{ old('pass') }}" name="password" required="">
                      @error('password')
                          <div class="text-danger p-2">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                       <label for="name" class="col-md-5 col-form-label text-md-right">{{ __('Повторите пароль') }}</label>
                       <input type="password" min="8" class="form-control" value="{{ old('password_confirmation') }}" name="password_confirmation" required="">
                      @error('password_confirmation')
                          <div class="text-danger p-2">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Отправить</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header with-border">
              <h3 class="card-title">Список пользователей</h3>
            </div>
            <div class="card-body">
            @foreach($watchers as $watcher)
              <div class="d-flex justify-content-between align-items-center">
                <p>{{ $watcher->name }}</p>
                <a href="{{ route('admin.watcher.delete',['id'=> $watcher->id]) }}">
                  {{ __('Удалить') }}
                </a>
              </div>
            @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
