@extends('layout')

@section('content')
    <div class="container">
        <h1 class="mb-4">Agregar nuevo auto</h1>

        <form action="" method="POST">
            @csrf

            <div class="form-group">
                <label for="marca">Marca</label>
                <input type="text" class="form-control" id="marca" name="marca" required>
            </div>

            <div class="form-group">
                <label for="modelo">Modelo</label>
                <input type="text" class="form-control" id="modelo" name="modelo" required>
            </div>

            <div class="form-group">
                <label for="anio">Año</label>
                <input type="number" class="form-control" id="anio" name="anio" required>
            </div>

            <div class="form-group">
                <label for="color">Color</label>
                <input type="text" class="form-control" id="color" name="color" required>
            </div>

            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="number" class="form-control" id="precio" name="precio" required>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection
