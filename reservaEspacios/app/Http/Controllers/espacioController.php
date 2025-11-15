<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Espacio;

class espacioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $espacios = Espacio::all();
        return view('espacios.index', compact('espacios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('espacios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => ['required', 'string', 'max:100'],
            'tipo' => ['required', 'string', 'max:100'],
            'capacidad' => ['required', 'integer','min:1'],
            'ubicacion' => ['required', 'string', 'max:100'],
        ]);
        \App\Models\Espacio::create($data);
        return redirect()->route('espacios.index')->with('ok', 'Espacio creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $espacio = \App\Models\Espacio::findOrFail($id);
        return view('espacios.edit', compact('espacio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'nombre' => ['required', 'string', 'max:100'],
            'tipo' => ['required', 'string', 'max:100'],
            'capacidad' => ['required', 'integer','min:1'],
            'ubicacion' => ['required', 'string', 'max:100'],
        ]);

        $espacio = \App\Models\Espacio::findOrFail($id);
        $espacio->update($data);
        return redirect()->route('espacios.index')->with('ok', 'Espacio actualizado.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
