<form method="POST" action="{{ route('user.login') }}">
    @csrf
    <div class="form-group">
        <label for="nombre">Nombre de usuario</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required>
    </div>
    <div class="form-group">
        <label for="contraseña">Contraseña</label>
        <input type="password" class="form-control" id="contraseña" name="contraseña" required>
    </div>
    <button type="submit" class="btn btn-primary">Iniciar sesión</button>
</form>
