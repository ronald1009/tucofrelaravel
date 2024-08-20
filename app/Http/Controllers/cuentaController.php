<?php

namespace App\Http\Controllers;

use App\Models\cuenta;
use Illuminate\Http\Request;

class cuentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cuenta = cuenta::all();
        return view('cuenta.index', compact('cuenta'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cuenta.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cuenta = new cuenta();
        $cuenta-> numerodecuenta  = $request ->input('numerodecuenta');
        $cuenta-> estadodecuenta  = $request ->input('estadodecuenta');
        $cuenta-> idusuario  = $request ->input('idusuario');


        $cuenta-> save();

        return redirect('cuenta');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cuenta = cuenta::find($id);
        return view('cuenta.show', compact('cuenta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cuenta = cuenta::find($id);
        return view('cuenta.edit',compact('cuenta') );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cuenta = cuenta::find($id);
        $cuenta-> estadodecuenta  = $request ->input('estadodecuenta');
        //$cuenta->fill($request);

        $cuenta->save();
        return redirect('cuenta');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cuenta = cuenta::find($id);
        $cuenta->delete();
        return redirect('cuenta');

    }
}


