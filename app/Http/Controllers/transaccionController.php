<?php

namespace App\Http\Controllers;

use App\Models\transaccion;
use Illuminate\Http\Request;

class transaccionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaccion = transaccion::all();
        return view('transaccion.index', compact('transaccion'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('transaccion.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $transaccion = new transaccion();
        $transaccion-> idtipodetransaccion  = $request ->input('idtipodetransaccion');
        $transaccion-> idmunicipio  = $request ->input('idmunicipio');
        $transaccion-> fecha  = $request ->input('fecha');
        $transaccion-> hora  = $request ->input('hora');
        $transaccion-> monto  = $request ->input('monto');
        $transaccion-> idcuentaorigen  = $request ->input('idcuentaorigen');
        $transaccion-> idcuentadestino  = $request ->input('idcuentadestino');
        if($request->hasFile('imagen')){
            $transaccion->imagen = $request->file('imagen')->store('public/transaccion');
        }
        $transaccion-> save();

        return redirect('transaccion');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $transaccion = transaccion::find($id);
        return view('transaccion.show', compact('transaccion'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $transaccion = transaccion::find($id);
        return view('transaccion.edit',compact('transaccion') );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $transaccion = transaccion::find($id);
        $transaccion-> fecha  = $request ->input('fecha');
        $transaccion-> hora  = $request ->input('hora');
        $transaccion-> monto  = $request ->input('monto');
        if($request->hasfile('imagen'));
        $transaccion->imagen = $request->file('imagen')->store('public/transaccion');
        $transaccion->save();
        return redirect('transaccion');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $transaccion = transaccion::find($id);
        $transaccion->delete();
        return redirect('transaccion');

    }
}
