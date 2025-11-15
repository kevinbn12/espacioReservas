<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;
use App\Models\Espacio;

class reservaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservas = Reserva::all();
        return view('reservas.index', compact('reservas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $espacios = Espacio::orderBy('nombre')->get();
        return view('reservas.create', compact('espacios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'solicitante' => ['required', 'string', 'max:100'],
            'espacio_id' => ['required', 'integer','min:1'],
            'fecha' => ['required', 'string', 'max:100'],
            'hora_inicio' => ['required', 'string', 'max:100'],
            'hora_fin' => ['required', 'string', 'max:100'],
            'motivo' => ['required', 'string', 'max:100'],
        ]);
        \App\Models\Reserva::create($data);
        return redirect()->route('reservas.index')->with('ok', 'Reserva creada exitosamente.');
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
        $reserva = Reserva::findOrFail($id);
        $espacios = Espacio::orderBy('nombre')->get();
        return view('reservas.edit', compact('reserva', 'espacios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reserva $reserva)
    {
        $data = $request->validate([
            'solicitante' => ['required', 'string', 'max:100'],
            'espacio_id' => ['required', 'integer','min:1'],
            'fecha' => ['required', 'string', 'max:100'],
            'hora_inicio' => ['required', 'string', 'max:100'],
            'hora_fin' => ['required', 'string', 'max:100'],
            'motivo' => ['required', 'string', 'max:100'],
        ]);
        $reserva->update($data);
        return redirect()->route('reservas.index')->with('ok', 'Reserva actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $reservaDelete = Reserva::findOrFail($id);
        $reservaDelete->delete();
        return redirect()->route('reservas.index')->with('ok', 'Reserva eliminada exitosamente.');
    }
}
