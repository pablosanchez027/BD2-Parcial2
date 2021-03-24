<?php

namespace App\Http\Controllers;

use App\Models\objetos;
use Illuminate\Http\Request;

class ObjetosController extends Controller
{
    public function index() {
        $objetos = objetos::all(); 

        return view('index', ['objetos' => $objetos]);
    }

    public function vistaAgregar() {
        return view('agregar');
    }

    public function crear(Request $request){
        objetos::create([
            'codigo' => $request->input('codigo'),
            'descripcion' => $request->input('descripcion'),
            'contenido' => $request->input('contenido'),
            'precio' => $request->input('precio'),
        ]);
        return redirect('/');
    }

    public function edit($id){
        $objetos = objetos::find($id); 
        return view('editar', ['objetos' => $objetos]);
    }

    public function update(objetos $objetos, Request $request){
        $objetos->update([
            'codigo' => $request->input('codigo'),
            'descripcion' => $request->input('descripcion'),
            'contenido' => $request->input('contenido'),
            'precio' => $request->input('precio'),
        ]);
        return redirect('/');
    }

    public function destroy($id){
        $objetos = objetos::find($id);

        $objetos->delete();

        return redirect('/');
    }
}