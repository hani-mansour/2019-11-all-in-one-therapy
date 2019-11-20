@extends('backend')

@section('title')Patienten &ndash;
@parent  {{--der Title die von Eltern('base') erzeugen--}}
@endsection

@section('main')
    <div class="container">
        <div class="m-3">
            <a href="/patients/create">Add New Patient</a>
        </div>
        <form method="post" action="{{route('patients')}}">
            @csrf
            <p><input class="form-control" type="text" name="name" placeholder="Patient First Name"></p>
            <p><button class="btn btn-primary" type="submit">Search</button></p>
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
                <th>Details</th>
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
                        <td><a href="/patients/{{$patient->id}}">View Details</a></td>
                    </tr>
                @endforeach
            @endif
        </table>

        <p>{!! $patients->appends(\Request::except('page'))->render() !!}</p>
        {{--<p>{{$patients->links()}}</p>--}}
    </div>

@endsection
