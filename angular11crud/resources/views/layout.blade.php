<!DOCTYPE html>
<html lang="en">
<head>
    <title>Aplicación</title>
    <!-- Incluir DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <header>
        <!-- Aquí puedes incluir tu barra de navegación -->
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Aquí puedes incluir tu pie de página -->
    </footer>

    <!-- Incluir jQuery y DataTables JavaScript -->
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>

    <!-- Inicializar DataTables -->
    <script type="text/javascript">
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
</body>
</html>
