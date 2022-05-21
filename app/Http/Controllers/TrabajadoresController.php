<?php

namespace App\Http\Controllers;

use App\Models\Trabajadores;
use Illuminate\Http\Request;

class TrabajadoresController extends Controller
{

    public function index()
    {
        //
    }

    public function listadotra()
    {
        $r = Trabajadores::all();
        echo 'tabla trabajadores vacia aun';
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


    public function show(Trabajadores $trabajadores)
    {
        //
    }


    public function edit(Trabajadores $trabajadores)
    {
        //
    }


    public function update(Request $request, Trabajadores $trabajadores)
    {
        //
    }


    public function destroy(Trabajadores $trabajadores)
    {
        //
    }
}
