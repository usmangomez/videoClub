@extends('layouts.master')

@section('title', 'Show')

@section('content')

    <div class="container">

        <div class="row">
            <div class="col-sm-4">
                <img src="{{$pelicula['poster']}}" alt="">
            </div>
            <div class="col-sm-8">
                <h1>{{$pelicula['title']}}</h1>
                <h3>Año: {{$pelicula['year']}}</h3>
                <h3>Director: {{$pelicula['director']}}</h3>
                <p><strong>Resumen:</strong> {{ $pelicula['synopsis']}}</p>
                <p><strong>Estado:</strong> {{ $pelicula['rented']? 'Pelicula disponible' : 'Pelicula actualmente alquilada' }}</p>
            </div>
        </div>

    </div>

@endsection
