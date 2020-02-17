@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Телефонный справочник</h1>
@stop

@section('content')

<div class="container">
	<div class="row">
		<div class="col d-flex justify-content-end align-items-center">
		  <h4>
		    Скачать <a class="text-aues" href="{{ route('numbers.short') }}">Кратко</a> / <a class="text-aues" href="{{ route('admin.numbers.full') }}">Всё</a>
		  </h4>
		</div>
	</div>
</div>
<live-search-admin institutes_json="{{ $institutes }}"></live-search-admin>
@stop
