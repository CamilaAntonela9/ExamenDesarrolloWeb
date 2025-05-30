<?php

namespace App\Http\Controllers;

use App\Models\Computador;
use Illuminate\Http\Request;

class ComputadorController extends Controller
{
    /**
     * Mostrar listado de computadores
     */
    public function index()
    {
        $computadores = Computador::all();
        return view('computadores.index', compact('computadores'));
    }

    /**
     * Mostrar formulario para crear nuevo computador
     */
    public function create()
    {
        return view('computadores.create');
    }

    /**
     * Guardar computador nuevo
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'codigo_tienda' => 'required|unique:computadors,codigo_tienda|max:50',
            'almacenamiento' => 'required|string|max:100',
            'ram' => 'required|string|max:50',
            'tarjeta_grafica' => 'required|string|max:100',
            'precio' => 'required|numeric|min:0',
            'descripcion' => 'nullable|string',
            'imagen' => 'nullable|string|max:255',
            'procesador' => 'required|string|max:100',
        ]);

        Computador::create($validated);

        return redirect()->route('computadores.index')->with('success', 'Computador creado exitosamente.');
    }

    /**
     * Mostrar formulario para editar un computador específico
     */
    public function edit($id)
    {
        $computador = Computador::findOrFail($id);
        return view('computadores.edit', compact('computador'));
    }

    /**
     * Actualizar computador en base de datos
     */
    public function update(Request $request, $id)
    {
        $computador = Computador::findOrFail($id);

        $validated = $request->validate([
            'codigo_tienda' => 'required|max:50|unique:computadors,codigo_tienda,' . $id,
            'almacenamiento' => 'required|string|max:100',
            'ram' => 'required|string|max:50',
            'tarjeta_grafica' => 'required|string|max:100',
            'precio' => 'required|numeric|min:0',
            'descripcion' => 'nullable|string',
            'imagen' => 'nullable|string|max:255',
            'procesador' => 'required|string|max:100',
        ]);

        $computador->update($validated);

        return redirect()->route('computadores.index')->with('success', 'Computador actualizado correctamente.');
    }

    /**
     * Mostrar formulario para buscar computador por ID y editarlo
     */
    public function search(Request $request)
    {
        $id = $request->input('id');
        $computador = Computador::find($id);

        return view('computadores.search', compact('computador', 'id'));
    }
}
