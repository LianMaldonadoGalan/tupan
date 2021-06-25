<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        Gate::authorize('auth-user');

        $producto = Producto::with('categoria')->get();

        //dd($producto->toArray());

        return view('producto.index', compact('producto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('auth-user');

        $categoria = Categoria::all();

        return view('producto.create', compact('categoria'));
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
            'nombre' => 'required',
            'desc' => 'required',
            'precio' => 'required',
            'imgpath' => 'image'
        ]);

        if ($request->File('imgpath')) {

            $URL = Storage::disk('uploads')->put('images', $request->file('imgpath'));

            $name = basename($URL);

            $request = new Request($request->all());

            $request->merge([
                'imgpath' => $name,
            ]);
        }

        $producto = Producto::create($request->all());

        return redirect()->route('producto.edit', $producto)->with('info', 'El producto se creó correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        Gate::authorize('auth-user');
        return view('producto.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        Gate::authorize('auth-user');
        $categoria = Categoria::all();

        return view('producto.edit', compact('producto'), compact('categoria'));
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
            'nombre' => 'required',
            'desc' => 'required',
            'precio' => 'required'
        ]);

        if ($request->File('imgpath')) {

            $URL = Storage::disk('uploads')->put('images', $request->file('imgpath'));

            $name = basename($URL);

            $request = new Request($request->all());

            $request->merge([
                'imgpath' => $name,
            ]);

            $imgname = 'images/';
            $imgname .= $producto->imgpath;

            if ($imgname != 'default.png') {
                Storage::disk('uploads')->delete($imgname);
            }
        }

        $producto->update($request->all());

        return redirect()->route('producto.edit', $producto)->with('info', 'El producto se actualizó correctamente');
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

        $imgname = 'images/';
        $imgname .= $producto->imgpath;

        if ($imgname != 'default.png') {
            Storage::disk('uploads')->delete($imgname);
        }

        return redirect()->route('producto.index', $producto)->with('info', 'El producto se eliminó correctamente');
    }

}
