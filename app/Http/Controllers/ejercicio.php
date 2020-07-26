<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agenda;

class AgendaController extends Controllers
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $buscar = $request->get('buscarpor');

        $tipo = $request->get('tipo');

        $Agenda = Agenda::buscarpor($tipo, $buscar)->paginate(5);

        return view('agenda.index', compact('Agenda'));
    }

    public function create()
    {
        return view('agenda.create');
    }
    public function store(Request $request)
    {
        $Agenda = new Agenda;
        $Agenda->nombre=$request->nombre;
        $Agenda->apellido = $request->apellido;
        $Agenda->telefono = $request->telefono;
        $Agenda->save();
        return redirect()->route('agenda.index')
        ->with('datos','Registro guardado correctamente');
    }
    public function show($id)
    {
        $Agenda = Agenda::findOrFail($id);
        return view('agenda.show', compact('Agenda'));
    }

    public function edit($id)
    {
        $Agenda = Agenda::findOrFail($id);
        return view('agenda.edit', compact('Agenda'));
    }

    public function update(Request $request, $id)
    {
        $Agenda = Agenda::findOrFail($id);
        $Agenda->nombre = $request->nombres;
        $Agenda->apellidos = $request->apellidos;
        $Agenda->save();

        return redirect()->route('agenda.index')
        ->with('datos','Regsitro actualizado');
    }
    public function destroy($id)
    {
        $Agenda = Agenda::findOrFail($id);
        $Agenda->delete();
        return redirect()->route('agenda.index')
    }
}


?>