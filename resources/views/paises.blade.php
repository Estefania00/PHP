<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Ejercicio 1. paises.blade.php</title>
</head>
<body>
 <marquee><h1>Lista de Paises</h1></marquee>
    {{-- <ul>
        @foreach ($paises as $pais)
         <li>{{$pais}}</li>
        @endforeach
    </ul> --}}
<div class="table-responsive">
    <table  class="table table-striped" >
        <thead>
            <tr class="thead-dark">
                <th>Pais</th>
                <th>Capital</th>
                <th>Moneda</th>
                <th>Poblacion</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($paises as $pais)
                <tr>
                    <th class="bg-dark text text-light" >{{$pais["Nombre"]}}</th>
                    <td>{{$pais["Capital"]}}</td>
                     <td>{{$pais["Moneda"]}}</td>
                     <td>{{$pais["Poblacion"]}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>