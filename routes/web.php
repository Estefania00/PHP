<?php

use App\Http\Controllers\MetabuscadorController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('Paises', function () {
    //definir arreglo
    //ARREGLOS asociativos
    $Paises = [
        //cambio el indice
        'CO' => [
            "Nombre" => "Colombia",
            "Moneda" => "Peso",
            "Capital" => "Bogotá",
            "Poblacion" => 50
        ],
        'PE' => [
            "Nombre" => "Perú",
            "Moneda" => "sol",
            "Capital" => "Lima",
            "Poblacion" => 34
        ],
        'ECU' => [
            "Nombre" => "Ecuador",
            "Moneda" => "Dolar",
            "Capital" => "Quito",
            "Poblacion" => 17
        ]
    ];
    /*//var_dump: analizar variables
    echo "<pre>";
    var_dump($paises);
    echo "<pre>";*/

    //vista: Presenta datos
    return view("paises")->with("paises", $Paises);
});

Route::get(
    'mostrar_formulario',
    [
        MetabuscadorController::class,
        "mostrar_formulario"
    ]
);

Route::post(
    'buscar',
    [
        MetabuscadorController::class,
        "buscar"
    ]
);
