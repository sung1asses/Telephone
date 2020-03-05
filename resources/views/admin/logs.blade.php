@extends('adminlte::page')

@section('title', 'IPphone')

@section('content_header')
    <h1 class="m-0 text-dark">Логирование</h1>
@stop

@section('content')

<div class="container">
	<div class="row">
		<div class="col">
			<?php $i=1 ?>
			@foreach($logs as $log)
				<p class="h5"><?= $i++ ?> : {!! $log->text !!}</p>
			@endforeach
		</div>
	</div>
</div>
@stop
