@extends('backend')

@section('title')
Add New Documentation
@endsection

@section('main')
    <div class="container">
        <div class="top-left">
            <a href="/patients/{{$id}}">Zurück</a>
        </div>
        <p>Autor: {{ auth()->user()->name }}</p>
        <div class="row">
            <form method="post" action="{{ route('newDocumentation', $id) }}">
                @csrf
                {{--@method('patch')--}}
                <div class="form-group row">
                    <label for="text" class="col-sm-2 col-form-label">Text </label>
                    <textarea name="text" cols="50" rows="8" placeholder="Text" class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Speichern</button>
            </form>
        </div>

    </div>
@endsection
