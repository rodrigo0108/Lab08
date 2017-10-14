<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab 08</title>
</head>
<body>
<a href="/auto/nuevo"> Nuevo </a>
<table>
    <tr>

    </tr>
    @foreach($autos as $auto){
        <tr>
            <th>{{$auto->placa}}</th>
            <th>{{$auto->color}}</th>
            <th>{{$auto->id}}</th>
            <th>
                <a href="/autos/editar/{{$auto->id}}">Editar</a>
                <a href="/autos/eliminar/{{$auto->id}}">Eliminar</a>
            </th>
        </tr>
    @endforeach
</table>
</body>
</html>