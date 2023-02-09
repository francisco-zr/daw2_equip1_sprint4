@extends('layouts.user')

@section('content')

<div id="perfilPersonal" :user="{{json_encode($authenticatedUser)}}"></div>

@endsection