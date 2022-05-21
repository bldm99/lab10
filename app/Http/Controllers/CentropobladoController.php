<?php

namespace App\Http\Controllers;

use App\Models\Centropoblado;
use Illuminate\Http\Request;

class CentropobladoController extends Controller
{

    public function indexc()
    {
        $datos = Centropoblado::all();
        return view('principal',compact('datos'));
    }

    public function listado()
    {
        $dcentro= Centropoblado::all();
        return view('centrop',compact('dcentro'));
    }


    public function createc()
    {
        return"funcionando";
    }



    public function store(Request $request)
    {
        //
    }


    public function show(Centropoblado $centropoblado)
    {
        //
    }


    public function edit(Centropoblado $centropoblado)
    {
        //
    }


    public function update(Request $request, Centropoblado $centropoblado)
    {
        //
    }


    public function destroy(Centropoblado $centropoblado)
    {
        //
    }
}
