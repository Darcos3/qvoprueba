<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Contracts\Pagination\Paginator;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // $categorias = Categoria::find(1)->categoria;
        $categorias = Categoria::all();
        $productos = Producto::orderBy('id', 'desc')->paginate(10);

        //$datos = ['productos'=> $productos, 'categorias', $categorias];
        
        // return json_encode($datos);
        // var_dump( $dat );
        // exit;

        return view('productos.index')->with('productos', $productos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('productos.create')->with('categorias', $categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'articulo' => 'required|max:20',
            'descripcion' => 'required|max:50',
            'id_categoria' => 'required|max:11',
            'precio' => 'required|max:4',
            'cantidad' => 'required|max:4'
        ]);

        Producto::create($request->only('articulo','descripcion','id_categoria','precio','cantidad'));
        Session::flash('msg', 'producto creado');
        return redirect()->route('producto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        $categorias = Category::all();
        return view('productos.create')->with(['producto'=> $producto, 'categorias'=> $categorias]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'articulo' => 'required|max:20',
            'descripcion' => 'required|max:50',
            'id_categoria' => 'required|max:11',
            'precio' => 'required|max:4',
            'cantidad' => 'required|max:4'
        ]);

        $producto->articulo = $request['articulo'];
        $producto->descripcion = $request['descripcion'];
        $producto->id_categoria = $request['id_categoria'];
        $producto->precio = $request['precio'];
        $producto->cantidad = $request['cantidad'];
        $producto->save();

        Session::flash('msg', '¡el producto ha sido actualizado!');
        return redirect()->route('producto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        Session::flash('msg', '¡el producto ha sido eliminado!');
        return redirect()->route('producto.index');
    }

    public function boot(){
        Paginator::useBootstrap();
    }
}
