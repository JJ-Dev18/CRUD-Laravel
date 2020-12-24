<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;
class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ventas = Venta::get();
        return view('ventas.index',compact('ventas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('ventas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $fields = $request->validate([
             'cliente'=> 'required',
             'empresa_id'=>'required'
         ]);
        
         Venta::create($fields); // $request()->only('nombre)
         
          return redirect()->route('ventas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Venta $venta)
    {
        //
        return  view('ventas.show', [ 
            'venta' => $venta
            
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return  view('ventas.edit', [ 
            'venta' =>   Venta::findOrFail($id)
            
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Venta $venta)
    {
        //
         $venta->update([
            'cliente'=>request('cliente')
        ]);

        return redirect()->route('ventas.show',$venta);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Venta $venta)
    {
        //
         $venta->delete();

         return redirect()->route('ventas.index');
    }
}
