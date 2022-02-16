<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Productos::all();
        return view('home', ['productos' => $productos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data)
    {
        return view('backend.productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Producto::create([
            'articulo' => $data['articulo'],
            'descripcion' => $data['descripcion'],
            'categoria_id' => $data['categoria_id'],
            'precio' => $data['precio'],
            'cantidad' => $data['cantidad']
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(Productos $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit(Productos $productos)
    {
        return view('backend.productos.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Productos $productos, id $id)
    {
        $productoid = Productos::find($id);
        $productoid->assign([
            'articulo' => $this->request('articulo'),
            'descripcion' => $this->request('descripcion'),
            'categoria_id' => $this->request('categoria_id'),
            'precio' => $this->request('precio'),
            'cantidad' => $this->request('cantidad')
        ]);
        $productoid->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productos $productos)
    {
        $productoid = Productos::find($id);
        $productoid->delete();
    }
}
