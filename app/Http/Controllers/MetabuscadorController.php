<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Echo_;

class MetabuscadorController extends Controller
{
    //Funcionalidad del sistema
    //un controlador se compone de acciones:metodos

    public function mostrar_formulario()
    {
        return view('metabuscador');
    }

    public function buscar()
    {
        $termino = $_POST["termino"];
        $motor = $_POST["motor"];

        //busqueda especifica por MOTOR DE BUSQUEDA
        switch ($motor) {
            case 'G':
                return redirect()->to("https://www.google.com/search?q=$termino");
                break;
            case 'B':
                return redirect()->to("https://www.bing.com/search?q=$termino");
                break;
            case 'Y':
                return redirect()->to("https://co.search.yahoo.com/search?p=$termino");
                break;

            case 'A':
                return redirect()->to("https://www.ask.com/web?q=$termino");
                break;

            case 'Q':
                return redirect()->to("https://www.qwant.com/?l=es&q=$termino");
                break;

            case 'M':
                return redirect()->to("https://www.mojeek.com/search?q=$termino");
                break;

            case 'GS':
                return redirect()->to("https://scholar.google.com/scholar?hl=es&as_sdt=0%2C5&q=$termino");
                break;

            case 'D':
                return redirect()->to("https://duckduckgo.com/?q=$termino");
                break;
            case 'C':
                return redirect()->to("https://www.consumer.es/busquedas?q=$termino");
                break;

            case 'P':
                return redirect()->to("http://www.picsearch.es/index.cgi?q=$termino");
                break;
        }
    }
}
