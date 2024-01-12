<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use PDF;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $datos['productos']=Product::paginate(5);
        return view ('producto.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('producto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datosproducto = request()->except('_token');
        Product::insert($datosproducto);
        
        return redirect('producto')->with('mensaje', 'Producto registrado con exito');
        
    }
    public function exportJson()
    {
            $productos = Product::all();
            $data = ['sucess'=>true, 'productos'=>$productos];
            $dataJson= json_encode($data);
            $rutaArchivo = storage_path('app/productlist.json');
            File::put($rutaArchivo, $dataJson);   

            if (file_exists($rutaArchivo)) {
                $contenido = File::get($rutaArchivo);
                $respuesta = Response::make($contenido);
                $respuesta->header('Content-Type', 'application/json');
                $respuesta->header('Content-Disposition', 'attachment; filename=productlist.json');
                Session::flash('mensaje', 'Descarga exitosa');
                return $respuesta;
            } else {
                return response()->json(['error' => 'El archivo no existe'], 404);
            }
    }

    public function pdf()
    {
        //
        $productos=Product::paginate();
        $pdf = PDF::loadView('producto.pdf',['productos'=>$productos]);
        return $pdf->download('productlist.pdf');
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $producto = Product::findOrFail($id);
        return view ('producto.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $datosproducto = request()->except('_token', '_method');
        Product::where('id', '=', $id)->update($datosproducto);

        $producto = Product::findOrFail($id);
        return view ('producto.edit', compact('producto'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        //
    }

    
}
