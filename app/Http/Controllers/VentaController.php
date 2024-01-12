<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['ventas']=Order::paginate(5);
        return view ('ventas.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $datos['ventas']=Order::paginate(5);
        return view ('ventas.show', $datos);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //      
        $venta = Order::findOrFail($id);
        return view ('ventas.edit', compact('venta'));  

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ventas $ventas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ventas $ventas)
    {
        //
    }
}
