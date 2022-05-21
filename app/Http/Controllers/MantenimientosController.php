<?php

namespace App\Http\Controllers;

use App\Models\Mantenimientos;
use Illuminate\Http\Request;

class MantenimientosController extends Controller
{

    public function index()
    {
        //
    }

    public function listadoman()
    {
        $r = Mantenimientos::all();
        echo 'tabla mantenimientos vacia aun';
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


    public function show(Mantenimientos $mantenimientos)
    {
        //
    }


    public function edit(Mantenimientos $mantenimientos)
    {
        //
    }


    public function update(Request $request, Mantenimientos $mantenimientos)
    {
        //
    }


    public function destroy(Mantenimientos $mantenimientos)
    {
        //
    }
}
