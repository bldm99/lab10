<?php

namespace App\Http\Controllers;

use App\Models\Asociacion;
use Illuminate\Http\Request;

class AsociacionController extends Controller
{

    public function index()
    {
        //
    }

    public function listadoaso()
    {
        $r = Asociacion::all();
        echo 'tabla Asociacion vacia aun';
        return $r;

    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Asociacion $asociacion)
    {
        //
    }


    public function edit(Asociacion $asociacion)
    {
        //
    }


    public function update(Request $request, Asociacion $asociacion)
    {
        //
    }


    public function destroy(Asociacion $asociacion)
    {
        //
    }
}
