@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <live-search institutes_json="{{ $institutes }}" institutes_json="{{ $numbers }}"></live-search>
        </div>
    </div>
</div>
@endsection
