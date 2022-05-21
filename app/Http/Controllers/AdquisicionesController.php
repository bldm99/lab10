<?php

namespace App\Http\Controllers;

use App\Models\Adquisiciones;
use Illuminate\Http\Request;

class AdquisicionesController extends Controller
{

    public function index()
    {
        //
    }

    public function listadoadq()
    {
        $r = Adquisiciones::all();
        echo 'tabla adquisiciones vacia aun';
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

    public function show(Adquisiciones $adquisiciones)
    {
        //
    }


    public function edit(Adquisiciones $adquisiciones)
    {
        //
    }


    public function update(Request $request, Adquisiciones $adquisiciones)
    {
        //
    }


    public function destroy(Adquisiciones $adquisiciones)
    {
        //
    }
}
