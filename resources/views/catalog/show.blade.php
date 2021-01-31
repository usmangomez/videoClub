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
                <p><strong>Estado:</strong> {{ $pelicula['rented']? 'Pelicula actualmente alquilada' : 'Pelicula disponible' }}</p>

                @if ($pelicula['rented'])
                    <a href="" class="btn btn-danger">Devolver pelicula</a>
                @else
                    <a href="" class="btn btn-success">Alquilar pelicula</a>
                @endif

                <a href="{{ route('catalogEdit', $id) }}" class="btn btn-warning">Editar</a>
                <a href="{{ route('catalogIndex') }}" class="btn btn-outline-dark"><i class="fas fa-chevron-left"></i> Volver al listado</a>
            </div>
        </div>

    </div>

@endsection
