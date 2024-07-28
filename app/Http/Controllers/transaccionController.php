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
        //
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
        $course = new transaccion();
        $course-> idtipodetransaccion  = $request ->input('idtipodetransaccion');
        $course-> idmunicipio  = $request ->input('idmunicipio');
        $course-> fecha  = $request ->input('fecha');
        $course-> hora  = $request ->input('hora');
        $course-> monto  = $request ->input('monto');
        $course-> idcuentaorigen  = $request ->input('idcuentaorigen');
        $course-> idcuentadestino  = $request ->input('idcuentadestino');
        $course-> save();
        return 'guardado con exito';

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
