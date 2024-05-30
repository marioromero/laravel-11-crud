@extends('layout')

@section('content')

    <h1>Autos</h1>
    <table id="myTable" class="table table-bordered table-hover">
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

