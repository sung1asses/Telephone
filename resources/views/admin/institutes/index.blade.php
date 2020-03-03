@extends('adminlte::page')

@section('title', 'IPphone')

@section('content_header')
    <h1>Институты</h1>
@endsection

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card card-primary">
          <div class="card-header with-border">
            <h3 class="card-title">Добавить информацию</h3>
          </div>
          <form method="POST" enctype="multipart/form-data" action="{{ route('redactor.institutes.create') }}">
              <div class="card-body">
                {{ csrf_field() }}
                    <div class="form-group">
                       <label for="name" class="col-md-5 col-form-label text-md-right">{{ __('Название института') }}</label>
                       <input type="text" min="0" class="form-control" value="{{ old('name') }}" name="name" required="">
                      @error('name')
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
              <h3 class="card-title">Список</h3>  
            </div>
            <div class="card-body">
              <sort-list institutes_json="{{ $institutes }}">
            </div>
        </div>
    </div>
</div>
@endsection
