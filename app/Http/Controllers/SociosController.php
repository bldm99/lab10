<?php

namespace App\Http\Controllers;

use App\Models\Socios;
use Illuminate\Http\Request;
use App\Models\Centropoblado;
class SociosController extends Controller
{

    public function homesc()
    {
        return view('principal');

    }

    public function listadosc()
    {
        $dsocio= Socios::all();
        return view('versocios',compact('dsocio'));
    }

    public function consultas()
    {


        $multitabla=Socios :: join('Centropoblado','Socios.id_cp','=','Centropoblado.id_cp')
        ->select('Socios.id_cs as id_cs','Socios.nombre as nombre','Centropoblado.nombre as Asentamiento')
        ->get();


        return view('versocios',compact('multitabla'));
    }



    public function create()
    {
        return view('agregarsc');


    }


    public function store(Request $request)
    {
        //
    }


    public function show(Socios $socios)
    {
        //
    }


    public function edit(Socios $socios)
    {
        //
    }


    public function update(Request $request, Socios $socios)
    {
        //
    }


    public function destroy(Socios $socios)
    {
        //
    }
}
