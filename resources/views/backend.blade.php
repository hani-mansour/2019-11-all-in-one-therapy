@extends('base')
@section('title','Willkommen in Backend')
@section('top-links')
    @auth
        <a href="/patients">Patient</a>
        <a href="/backend">kalender</a>
        <a href="/backend">Doku</a>
        <a href="/">Frontend</a>
    @endauth
@endsection

@section('main')
    <br>
    Willkomen bei AIOT.
@endsection