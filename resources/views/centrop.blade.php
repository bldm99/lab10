<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/st.css')}}" >
</head>
<body>
    <h1>Centros poblados</h1>
    <h1>B y C</h1>
    <div class="table table-responsibe">
        <table>
            <thead>

                <th>ID</th>
                <th>Nombre</th>

            </thead>

            <tbody>
            @foreach($dcentro as $item)

                <tr>

                    <td>{{ $item->id_cp }}</td>
                    <td>{{ $item->nombre }}</td>


                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="lugares">
            @foreach($dcentro as $itemy)

                <h2>{{ $itemy->nombre }}</h2>

            @endforeach

        </div>

    </div>




</body>
</html>
