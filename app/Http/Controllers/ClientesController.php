<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;

class ClientesController extends Controller
{
    
    public function index()
    {
        $clientes=DB::table('clientes')
        ->orderBy('apellido_cliente','asc')
        ->get();
        return view('logclientes.showclientes',['clientes'=>$clientes]);
    }

    public function create()
    {
        return view('logclientes.altacliente');
    }


    public function save(Request $request)
    {
        $clientes=DB::table('clientes')->insert([
            'nombre'=>$request->input('nombre'),
            'apellido'=>$request->input('apellido'),
            'direccion'=>$request->input('direccion'),
            'codigopostal'=>$request->input('codigopostal'),
            'telefono'=>$request->input('telefono')
            ]);
            return redirect()->action('ClientesController@index');
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        $clientes=DB::table('clientes')
        ->where('idcliente','=',$id)
        ->first();
        return view('logclientes.altacliente',['clientes'=>$clientes]);
    }

    
    public function edit($id)
    {
        //
    }

    public function update(Request $request)
    {
        $clientes=DB::table('clientes')
        ->where('idcliente','=',$request->input('id'))
        ->update([
            'nombre'=>$request->input('nombre'),
            'apellido'=>$request->input('apellido'),
            'direccion'=>$request->input('direccion'),
            'codigopostal'=>$request->input('codigopostal'),
            'telefono'=>$request->input('telefono')
            ]);
            return redirect()->action('ClientesController@index')
            ->with('status','usuario actualizado');
    }

    
    public function destroy($id)
    {
        $clientes=DB::table('clientes')
        ->where('idcliente','=',$id)
        ->delete();

            return redirect()->action('ClientesController@index')
            ->with('status','usuario eliminado');
    }
}
