@extends('layout')

@section('content')
    <div class="container">

    <h1>Autos</h1>
    <table id="myTable" class="display">
        <thead>
            <tr>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Año</th>
                <th>Color</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cars as $car)
                <tr>
                    <td>{{ $car->marca }}</td>
                    <td>{{ $car->modelo }}</td>
                    <td>{{ $car->anio }}</td>
                    <td>{{ $car->color }}</td>
                    <td>{{ $car->precio }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
    </div>
