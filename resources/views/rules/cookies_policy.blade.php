@extends('layouts.user')

@section('content')
    <div class="container p-3">
        {!! $text->cookies_policy !!}
    </div>

@stop
