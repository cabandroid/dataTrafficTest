<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Episodios</title>
    <link rel="stylesheet" href="ruta/a/tu/estilo.css">
    
    <style>
        /* Estilos para el encabezado */
        h1 {
            font-size: 24px;
            text-align: center;
            margin-top: 20px;
        }

        /* Estilos para la tabla */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f0f0f0;
            font-weight: bold;
        }

        /* Estilos para las filas impares */
        tbody tr:nth-child(odd) {
            background-color: #f9f9f9;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Listado de Episodios</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Fecha de Emisión</th>
                    <th>Episodio</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($episodesData['results'] as $episode)
                    <tr>
                        <td>{{ $episode['name'] }}</td>
                        <td>{{ $episode['air_date'] }}</td>
                        <td>{{ $episode['episode'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
