@extends('backend')

@section('title')

@endsection

@section('main')
    <div class="container">
        <div class="top-left">
            <a href="/patients">Zurück</a>
        </div>
        <div class="row">
            <h1>Update Profile</h1>
        </div>
        <form method="post" action="/patients/{{$details->id}}">
            @method('PATCH')
            @csrf
            <div class="form-group row">
                <label for="svnr" class="col-sm-2 col-form-label">Svnr </label>
                <input name="svnr"
                       class="form-control"
                       type="text"
                       placeholder="svnr"
                       value="{{ old('svnr') ?? $details->svnr }}"
                       autocomplete="svnr" autofocus>
            </div>
            <div class="form-group row">
                <label for="firstname" class="">First Name </label>
                <input name="firstname"
                       class="form-control"
                       type="text"
                       placeholder="First Name"
                       value="{{ old('firstname') ?? $details->firstname }}"
                       autocomplete="firstname" autofocus>
            </div>
            <div class="form-group row">
                <label for="lastname" class="">Last Name </label>
                <input name="lastname"
                       class="form-control"
                       type="text"
                       placeholder="Last Name"
                       value="{{ old('lastname') ?? $details->lastname }}"
                       autocomplete="lastname" autofocus>
            </div>
            <div class="form-group row">
                <label for="email" class="">Email </label>
                <input name="email"
                       class="form-control"
                       type="text"
                       placeholder="Email"
                       value="{{ old('email') ?? $details->email }}"
                       autocomplete="email" autofocus>
            </div>
            <div class="form-group row">
                <label for="address" class="">Address </label>
                <input name="address"
                       class="form-control"
                       type="text"
                       placeholder="Address"
                       value="{{ old('address') ?? $details->address }}"
                       autocomplete="address" autofocus>
            </div>
            <div class="form-group row">
                <label for="plz" class="">PLZ </label>
                <input name="plz"
                       class="form-control"
                       type="text"
                       placeholder="PLZ"
                       value="{{ old('plz') ?? $details->plz }}"
                       autocomplete="plz" autofocus>
            </div>
            <div class="form-group row">
                <label for="city" class="">City </label>
                <input name="city"
                       class="form-control"
                       type="text"
                       placeholder="City"
                       value="{{ old('city') ?? $details->city }}"
                       autocomplete="city" autofocus>
            </div>
            <div class="form-group row">
                <label for="country" class="">Country </label>
                <input name="country"
                       class="form-control"
                       type="text"
                       placeholder="country"
                       value="{{ old('city') ?? $details->country }}"
                       autocomplete="country" autofocus>
            </div>

            <button class="btn btn-primary" type="submit">Update</button>
        </form>
    </div>
@endsection
