<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>login</title>

</head>
    <body class="bg-dark text-white">

<div class="col-auto ">


    <form method="POST" action="{{url('buscar')}}" class="form-horizontal">
    {{-- token de seguridad(si no esta, no funciona) --}}
    @csrf
    <fieldset>

    <!-- Form Name -->
    <legend>Metabuscador</legend>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-4 control-label" for="textinput">1. Ingrese el termino a buscar</label>
    <div class="col-md-4">
    <input name="termino" type="text" class="form-control mr-sm-2">
    </div>
    </div>

    <!-- Multiple Radios -->
    <div class="form-group">
    <label class="col-md-4 control-label" for="motor">2. Seleccione motor de búsqueda</label>
    <div class="col-md-4">
    <div class="radio">
        <label for="motor-0">
        <input type="radio" name="motor"  value="G" checked="checked">
        Google
        </label>
        </div>
    <div class="radio">
        <label for="motor-1">
        <input type="radio" name="motor"  value="B">
        Bing
        </label>
        </div>
    <div class="radio">
        <label for="motor-2">
        <input type="radio" name="motor"  value="Y">
        Yahoo
        </label>
        </div>
     <div class="radio">
        <label for="motor-2">
        <input type="radio" name="motor"  value="A">
        Ask.com
        </label>
        </div>
    <div class="radio">
        <label for="motor-2">
        <input type="radio" name="motor"  value="Q">
        Qwant
        </label>
        </div>
    <div class="radio">
        <label for="motor-2">
        <input type="radio" name="motor"  value="M">
        Mojeek
        </label>
        </div>
    <div class="radio">
        <label for="motor-2">
        <input type="radio" name="motor"  value="GS">
        Google Escolar
        </label>
        </div>
    <div class="radio">
        <label for="motor-2">
        <input type="radio" name="motor"  value="D">
        Duckduck go
        </label>
        </div>
    <div class="radio">
        <label for="motor-2">
        <input type="radio" name="motor"  value="C">
        Consumer
        </label>
        </div>
    <div class="radio">
        <label for="motor-2">
        <input type="radio" name="motor"  value="P">
        Picsearch
        </label>
        </div>
    </div>
    </div>

    <!-- Button -->
    <div class="form-group">
    <label class="col-md-4 control-label" for="singlebutton">Realizar Busqueda</label>
    <div class="col-md-4">
        <button id="singlebutton" name="singlebutton" class="btn btn-success">Button</button>
    </div>
    </div>

    </fieldset>
</form>

</div>
</body>
</html>
