@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Список номеров</div>

                <div class="card-body">
                  <ol>
                    @foreach($numbers as $number)
                      <li>
                        {{ $number->name }}
                      </li>
                    @endforeach
                  </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
