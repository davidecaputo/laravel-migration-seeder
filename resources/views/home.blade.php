@extends('layout.app')

@section('content')
<h1 class="text-center text-white">Treni</h1>
<div class="container">
    <table class="table table-striped table-hover rounded-5 mt-5">
        <thead>
            <tr>
                <th>Azienda</th>
                <th>Stazione di partenza</th>
                <th>Stazione di arrivo</th>
                <th>Orario di partenza</th>
                <th>Orario di arrivo</th>
                <th>In orario</th>
                <th>Cancellato</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
            <tr>
                <td>{{$train->company}}</td>
                <td>{{$train->departureStation}}</td>
                <td>{{$train->arrivalStation}}</td>
                <td>{{$train->departureTime}}</td>
                <td>{{$train->arrivalTime}}</td>
                <td class="{{$train->inTime === 1? 'bg-success' : 'bg-danger'}} text-white">{{$train->inTime === 1? 'Sì' : 'No'}}</td>
                <td class="{{$train->deleted === 0? 'bg-success' : 'bg-danger'}} text-white">{{$train->deleted === 1? 'Sì' : 'No'}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
