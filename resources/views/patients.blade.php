@extends('backend')

@section('title')Patienten &ndash;
@parent
@endsection

@section('main')
    <table class="table">
        <tr>
            <th>Svrn</th>
            <th>Name</th>
            <th>Adresse</th>
            <th>PLZ</th>
            <th>Ort</th>
            <th>Land</th>
        </tr>
    @foreach($patients as $patient)
        <tr>
            <td><p>{{$patient->svnr}}</p></td>
            <td><p>{{$patient->lastname}},{{$patient->firstname}}</p></td>
            <td><p>{{$patient->address}}</p></td>
            <td><p>{{$patient->plz}}</p></td>
            <td><p>{{$patient->city}}</p></td>
            <td><p>{{$patient->country}}</p></td>
        </tr>
    @endforeach
    </table>
@endsection
