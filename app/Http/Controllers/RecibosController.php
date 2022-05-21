<?php

namespace App\Http\Controllers;

use App\Models\Recibos;
use Illuminate\Http\Request;

class RecibosController extends Controller
{

    public function index()
    {

    }
    public function listadore()
    {
        $r = Recibos::all();
        echo 'tabla recibos vacia aun';
        return $r;

    }


    public function create()
    {

    }


    public function store(Request $request)
    {
        //
    }


    public function show(Recibos $recibos)
    {
        //
    }


    public function edit(Recibos $recibos)
    {
        //
    }


    public function update(Request $request, Recibos $recibos)
    {
        //
    }


    public function destroy(Recibos $recibos)
    {
        //
    }
}
