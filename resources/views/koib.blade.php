@extends('layouts.master')

@section('title')

{{ 'WDDB17 - Jameel Haider' }}
@endsection



@section('jameel')
<div class="container h1 bg-success text-light text-center">
    Hello Class, Bootstrap Implementation in laravel
</div>

<h1>{{ $data }}</h1>

    @foreach ($students as $var)
    <h4>{{ $var }}</h4>
    @endforeach
@endsection
