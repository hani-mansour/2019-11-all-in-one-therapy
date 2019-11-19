@extends('base')

@section('title','Willkommen')

@section('top-links')
    @auth
    <a href="/backend">Backend</a>
    @endauth
@endsection
@section('main')
   <br>
    Willkomen bei AIOT.
@endsection
