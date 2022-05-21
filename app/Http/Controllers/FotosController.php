<?php

namespace App\Http\Controllers;

use App\Models\Fotos;
use Illuminate\Http\Request;

class FotosController extends Controller
{

    public function index()
    {
        //
    }

    public function listadofo()
    {
        $r = Fotos::all();
        echo 'tabla fotos vacia aun';
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


    public function show(Fotos $fotos)
    {
        //
    }


    public function edit(Fotos $fotos)
    {
        //
    }


    public function update(Request $request, Fotos $fotos)
    {
        //
    }


    public function destroy(Fotos $fotos)
    {
        //
    }
}
