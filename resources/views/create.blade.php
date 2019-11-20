@extends('backend')

@section('title')
Add New Patient
@endsection

@section('main')
    <div class="container">
        <div class="top-left">
            <a href="/patients">Zurück</a>
        </div>

        <form method="post" action="{{route('newPatient')}}">
            @csrf
            <div class="form-group row">
                <label for="svnr" class="col-sm-2 col-form-label">Svnr </label>
                <input name="svnr"
                       class="form-control"
                       type="text"
                       placeholder="svnr"
                       autocomplete="svnr" autofocus>
            </div>
            <div class="form-group row">
                <label for="firstname" class="">First Name </label>
                <input name="firstname"
                       class="form-control"
                       type="text"
                       placeholder="First Name"
                       autocomplete="firstname" autofocus>
            </div>
            <div class="form-group row">
                <label for="lastname" class="">Last Name </label>
                <input name="lastname"
                       class="form-control"
                       type="text"
                       placeholder="Last Name"
                       autocomplete="lastname" autofocus>
            </div>
            <div class="form-group row">
                <label for="email" class="">Email </label>
                <input name="email"
                       class="form-control"
                       type="text"
                       placeholder="Email"
                       autocomplete="email" autofocus>
            </div>
            <div class="form-group row">
                <label for="address" class="">Address </label>
                <input name="address"
                       class="form-control"
                       type="text"
                       placeholder="Address"
                       autocomplete="address" autofocus>
            </div>
            <div class="form-group row">
                <label for="plz" class="">PLZ </label>
                <input name="plz"
                       class="form-control"
                       type="text"
                       placeholder="PLZ"
                       autocomplete="plz" autofocus>
            </div>
            <div class="form-group row">
                <label for="city" class="">City </label>
                <input name="city"
                       class="form-control"
                       type="text"
                       placeholder="City"
                       autocomplete="city" autofocus>
            </div>
            <div class="form-group row">
                <label for="country" class="">Country </label>
                <input name="country"
                       class="form-control"
                       type="text"
                       placeholder="country"
                       autocomplete="country" autofocus>
            </div>

            <button class="btn btn-primary" type="submit">Add</button>
        </form>
    </div>
@endsection
