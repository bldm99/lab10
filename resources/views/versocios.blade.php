

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
<h1>Socios</h1>
<h1>-----------------------------------------------------------</h1>
<div class="table table-responsibe">







    <table>
        <thead>

        <th>ID Socio</th>
        <th>Nombre</th>
        <th>Asentamiento</th>

        </thead>

        <tbody>
        @foreach($multitabla as $item1)

            <tr>

                <td>{{ $item1->id_cs }}</td>
                <td>{{ $item1->nombre }}</td>
                <td>{{ $item1->Asentamiento }}</td>


            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{route('socios.create')}}"> Agregar</a>





</div>




</body>
</html>
