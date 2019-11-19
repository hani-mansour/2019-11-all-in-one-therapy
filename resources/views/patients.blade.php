@extends('backend')

@section('title')Patienten &ndash;
@parent  {{--der Title die von Eltern('base') erzeugen--}}
@endsection

@section('main')
    <div class="container">
        <form method="post" action="{{route('authenticate')}}">
            @csrf
            @if( $errors->any() )
                <p class="alert alert-danger">Nice try.</p>
            @endif
            <p><input type="text" name="name" placeholder="Patient Name"></p>
            <p><button type="submit">Filter</button></p>
        </form>

        <table class="table table-bordered">
            <tr>
                <th>@sortablelink('svnr')</th>
                <th>@sortablelink('firstname')</th>
                <th>@sortablelink('lastname')</th>
                <th>@sortablelink('email')</th>
                <th>@sortablelink('address')</th>
                <th>@sortablelink('plz ')</th>
                <th>@sortablelink('city')</th>
                <th>@sortablelink('country')</th>
            </tr>
            @if($patients->count())
                @foreach($patients as $patient)
                    <tr>
                        <td>{{ $patient->svnr }}</td>
                        <td>{{ $patient->firstname }}</td>
                        <td>{{ $patient->lastname }}</td>
                        <td>{{ $patient->email }}</td>
                        <td>{{ $patient->address }}</td>
                        <td>{{ $patient->plz }}</td>
                        <td>{{ $patient->city }}</td>
                        <td>{{ $patient->country }}</td>
                    </tr>
                @endforeach
            @endif
        </table>
        {!! $patients->appends(\Request::except('page'))->render() !!}
    </div>
@endsection
