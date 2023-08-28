<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de personsajes</title>
    <link rel="stylesheet" href="tu_estilo.css">
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1 {
            color: #333;
        }

        /* Estilos para la tabla */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }
        th {
            background-color: #007bff;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        a.btn {
            text-decoration: none;
            color: #fff;
            padding: 6px 12px;
        }
        .btn-primary {
            background-color: #007bff;
        }
        .btn-danger {
            background-color: #dc3545;
        }

        /* Estilos para el paginador */
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            font-family: Arial, sans-serif;
        }

        .pagination ul {
            list-style: none;
            padding: 0;
            display: flex;
        }

        .pagination li {
            margin-right: 5px;
        }

        .pagination a, .pagination span {
            display: block;
            padding: 8px 12px;
            border: 1px solid #007bff;
            background-color: #fff;
            color: #007bff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s, color 0.3s;
        }

        .pagination a:hover {
            background-color: #007bff;
            color: #fff;
        }

        .pagination .active a, .pagination .active span {
            background-color: #007bff;
            color: #fff;
        }

        .pagination div:nth-child(2) {
            display: none;
        }
        .prev, .next {
            display: none !important;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Listado de personajes</h1>
        <a href="{{ route('characters.create') }}" class="btn btn-primary">Agregar Personaje</a>
        <a href="{{ route('episodes.index') }}" class="btn btn-primary">Listado de episodios</a>
        <a href="{{ route('locations.index') }}" class="btn btn-primary">Listado de ubicaciones</a>
        
        <table class="table">
            <thead>
                <tr>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($characters as $character)
                    <tr>
                        <td><img width="50px" height="50px" src={{ $character->image }} /></td>
                        <td>{{ $character->name }}</td>
                        <td>{{ $character->status }}</td>
                        <td>
                            <a href="{{ route('characters.edit', $character->id) }}" class="btn btn-primary">Editar</a>
                            <form action="{{ route('characters.destroy', $character->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- Paginador -->
    <div class="pagination">
        {{ $characters->links() }}
    </div>
    
</body>
</html>
